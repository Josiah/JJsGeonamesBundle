<?php
/**
 * Copyright (c) 2013 Josiah Truasheim
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace JJs\Bundle\GeonamesBundle\Import;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Guzzle\Http\Client as HttpClient;
use InvalidArgumentException;
use JJs\Bundle\GeonamesBundle\Model\CountryInterface;
use JJs\Bundle\GeonamesBundle\Model\CountryRepositoryInterface;
use JJs\Bundle\GeonamesBundle\Model\LocalityInterface;
use JJs\Bundle\GeonamesBundle\Model\LocalityRepositoryInterface;
use JJs\Bundle\GeonamesBundle\Model\TimezoneInterface;
use JJs\Bundle\GeonamesBundle\Model\TimezoneRepositoryInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use SplFileObject;

/**
 * Locality Importer
 *
 * Imports localities from a geonames.org data export location.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class LocalityImporter
{
    /**
     * Default export path
     *
     * @var string
     */
    const DEFAULT_IMPORT_PATH = 'http://download.geonames.org/export/dump';

    /**
     * Default cache directory
     *
     * When no cache path is specified this directory will be created in the
     * system temporary directory for the storage of cache files.
     *
     * @var string
     */
    const DEFAULT_CACHE_DIR = 'jjs-geonames-bundle/localities';

    /**
     * Stream path format
     *
     * @var string
     */
    const STREAM_PATH_FORMAT = "zip://%s/%s#%s";

    /**
     * Country repository
     * 
     * @var CountryRepositoryInterface
     */
    protected $countryRepository;

    /**
     * Timezone repository
     * 
     * @var TimezoneRepositoryInterface
     */
    protected $timezoneRepository;

    /**
     * Locality repositories
     *
     * Mapping of feature codes to the locality repositories which will load
     * those features.
     * 
     * @var array
     */
    protected $localityRepositories = [];

    /**
     * Export path
     *
     * Identifies the path to the exported data for the locality
     * 
     * @var string
     */
    protected $importPath;

    /**
     * Cache path
     *
     * Identifies the path where cached local files from the export path will
     * be stored.
     * 
     * @var string
     */
    protected $cachePath;

    /**
     * HTTP Client
     *
     * Used to retrieve metadata about export paths
     * 
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * Creates a new locality repository
     * 
     * @param string $importPath Export path
     * @param string $cachePath  Cache path
     */
    public function __construct(CountryRepositoryInterface $countryRepository, TimezoneRepositoryInterface $timezoneRepository, $importPath = null, $cachePath = null)
    {
        $this->countryRepository  = $countryRepository;
        $this->timezoneRepository = $timezoneRepository;

        $this->setImportPath($importPath ?: static::DEFAULT_IMPORT_PATH);
        $this->setCachePath($cachePath ?: static::getDefaultCachePath());
    }

    /**
     * Returns the export path where locality data is sourced from
     * 
     * @return string
     */
    public function getImportPath()
    {
        return $this->importPath;
    }

    /**
     * Sets the import path
     * 
     * @param string $path Import path
     */
    public function setImportPath($path)
    {
        $this->importPath = $path;
    }

    /**
     * Returns the cache path where locality data is locally stored
     * 
     * @return string
     */
    public function getCachePath()
    {
        return $this->cachePath;
    }

    /**
     * Returns the default cache path for the locality importer
     * 
     * @return string
     */
    public static function getDefaultCachePath()
    {
        return sys_get_temp_dir().DIRECTORY_SEPARATOR.self::DEFAULT_CACHE_DIR;
    }

    /**
     * Sets the cache path where locality data is locally stored
     * 
     * @param string $path Cache path
     */
    public function setCachePath($path)
    {
        if (!stream_is_local($path)) {
            throw new InvalidArgumentException("Cache path is not local: '{$path}'");
        }

        $this->cachePath = $path;
    }

    /**
     * Returns the country repository
     * 
     * @return CountryRepositoryInterface
     */
    public function getCountryRepository()
    {
        return $this->countryRepository;
    }

    /**
     * Returns the timezone repository
     * 
     * @return TimezoneRepositoryInterface
     */
    public function getTimezoneRepository()
    {
        return $this->timezoneRepository;
    }

    /**
     * Adds a locality repository which will load a defined set of feature codes
     * 
     * @param LocalityRepositoryInterface $repository Repository
     * @param array                       $features   Feature codes to load into this repository
     */
    public function addLocalityRepository(LocalityRepositoryInterface $repository, array $features)
    {
        foreach ($features as $feature) {
            $this->setLocalityRepository($feature, $repository);
        }
    }

    /**
     * Sets the locality repository for a feature
     * 
     * @param string                      $feature    Feature code
     * @param LocalityRepositoryInterface $repository Repository
     */
    public function setLocalityRepository($feature, LocalityRepositoryInterface $repository)
    {
        $this->localityRepositories[$feature] = $repository;
    }

    /**
     * Returns the locality repository for a feature
     * 
     * @param string $feature Feature code
     * @return LocalityRepositoryInterface
     */
    public function getLocalityRepository($feature)
    {
        if (array_key_exists($feature, $this->localityRepositories)) {
            return $this->localityRepositories[$feature];
        } else {
            return null;
        }
    }

    /**
     * Returns the locality feature repositories
     *
     * List is an array with the features as keys and the repositories as the
     * values.
     * 
     * @return array
     */
    public function getLocalityRepositories()
    {
        return $this->localityRepositories;
    }

    /**
     * Returns the http client
     * 
     * @return HttpClient
     */
    public function getHttpClient()
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = new HttpClient();
        }

        return $this->httpClient;
    }

    /**
     * Returns the resource path to the specified archive in the export
     * 
     * @param string $archive Archive
     * 
     * @return string
     */
    protected function getArchiveImportPath($archive)
    {
        return $this->getImportPath().DIRECTORY_SEPARATOR.$archive;
    }

    /**
     * Returns the file system path to the specified archive in the cache
     * 
     * @param string $archive Archive
     * 
     * @return string
     */
    protected function getArchiveCachePath($archive)
    {
        return $this->getCachePath().DIRECTORY_SEPARATOR.$archive;
    }

    /**
     * Indicates whethter the export path is a http stream
     * 
     * @return boolean
     */
    public function isImportPathHttp() {
        $importPath = $this->getImportPath();

        if (substr($importPath, 0, 7) === 'http://') {
            return true;
        }

        if (substr($importPath, 0, 8) === 'https://') {
            return true;
        }

        return false;
    }

    /**
     * Indicates whether the cached version of the archive is stale
     * 
     * @param string $archive Archive to check
     * 
     * @return boolean
     */
    protected function isCacheStale($archive)
    {
        $importArchive = $this->getArchiveImportPath($archive);
        $cacheArchive = $this->getArchiveCachePath($archive);

        // When the archive doesn't exist in the cache it is definately stale
        if (!is_file($cacheArchive)) return true;

        // Determine the modification date of the file
        $cacheTimestamp = filemtime($cacheArchive);

        // If the export path is a http location, perform a head request to
        // check whether the archive is out of date
        if ($this->isImportPathHttp()) {
            $http = $this->getHttpClient();
            $request = $http->head($importArchive);
            $request->setHeader('If-Modified-Since', date('r', $cacheTimestamp));
            $response = $request->send();

            // Based on the result of the head request indicate whether the
            // cache is stale
            return ($response->getStatusCode() !== 304);
        }

        // Automaticaly mark archives as stale daily if the location is not a
        // http resource.
        return ($cacheTimestamp < time() - 86400);
    }

    /**
     * Opens a stream resource for the data file which contains the localities
     * for the given country
     * 
     * @param CountryInterface $country Country
     * 
     * @return resource
     */
    protected function getLocalityDataPath(CountryInterface $country, LoggerInterface $log = null)
    {
        $log     = $log ?: new NullLogger();
        $archive = "{$country->getCode()}.zip";
        $file    = "{$country->getCode()}.txt";

        $importArchive = $this->getArchiveImportPath($archive);
        $cacheArchive  = $this->getArchiveCachePath($archive);

        if (stream_is_local($importArchive)) {
            return "zip://{$importArchive}#{$file}";
        } else {
            // Transfer the data from the export path to the local locaity cache
            // if the file doesn't exist
            if ($this->isCacheStale($archive)) {

                $log->notice("Refreshing cache of '{archive}'", [
                    'archive'       => $archive,
                    'importArchive' => $importArchive,
                    'cacheArchive'  => $cacheArchive,
                ]);

                // Ensure the cache folder exists
                $cacheDirectory = dirname($cacheArchive);
                if (!is_dir($cacheDirectory) && !mkdir($cacheDirectory, 0777, true)) {
                    $log->error("Can't create cache directory {directory}", [
                        'directory' => $cacheDirectory,
                    ]);
                }

                // Load the import stream
                $importStream = @fopen($importArchive, 'r');
                if (!$importStream) {
                    $log->warning("Failed to open import for reading: {message}", [
                        'import'  => $importArchive,
                        'message' => trim(error_get_last()['message'], "\n"),
                    ]);
                    return 'php://memory';
                }

                // Load the cache stream
                $cacheStream  = @fopen($cacheArchive, 'w');
                if (!$cacheStream) {
                    $log->error("Failed to open cache for writing: {message}", [
                        'import'  => $cacheArchive,
                        'message' => trim(error_get_last()['message'], "\n"),
                    ]);
                    return 'php://memory';
                }

                $bytes = stream_copy_to_stream($importStream, $cacheStream);

                fclose($importStream);
                fclose($cacheStream);

                // Log the 
                if ($bytes) {
                    $log->info("Cache of '{archive}' updated: {bytes} bytes copied", [
                        'archive'       => $archive,
                        'bytes'         => $bytes,
                        'importArchive' => $importArchive,
                        'cacheArchive'  => $cacheArchive,
                    ]);
                } else {
                    $log->error("Refreshing cache of '{archive}' failed", [
                        'archive'       => $archive,
                        'importArchive' => $importArchive,
                        'cacheArchive'  => $cacheArchive,
                    ]);
                    return false;
                }
            }

            // Open the cache file
            return "zip://{$cacheArchive}#{$file}";
        }
    }

    /**
     * Imports data for the specified countries
     * 
     * @param array|Traversable $countries Countries to import data for
     * @param LoggerInterface   $log       Import log
     * 
     * @return void
     */
    public function import($countries = [], LoggerInterface $log = null)
    {
        $log = $log ?: new NullLogger();
        $countryRepository = $this->getCountryRepository();

        // Import all contries if there are no countries specified
        if (empty($countries)) {
            $countries = $countryRepository->getAllCountries();
        }

        // Import data from each country
        foreach ($countries as $countryCode) {
            $country = $countryRepository->getCountry($countryCode);
            $this->importCountry($country, $log);
        }
    }

    /**
     * Imports the localities of a specific country into the locality
     * 
     * @param string|CountryInterface $country Country
     * @param LoggerInterface         $log     Import log
     */
    public function importCountry($country, LoggerInterface $log = null)
    {
        $log = $log ?: new NullLogger();
        $countryRepository = $this->getCountryRepository();

        // Load the country if required
        if (!$country instanceof CountryInterface) {
            $countryCode = $country;
            $country = $countryRepository->getCountry($countryCode);

            if (!$country) {
                $log->error("Country code '{code}' does not exist in repository {repository}", [
                    'code' => $countryCode,
                    'repository' => get_class($countryRepository),
                ]);
            }
        }

        // Retrieve the locality TSV stream
        $path = $this->getLocalityDataPath($country, $log);
        $log->info("Reading locality data from {path}", ['path' => $path]);
        $stream = @fopen($path, 'r');
        $separator = "\t";

        // As a workaround for the lack of support for fgetcsv() without any
        // enclosure value we can use the backspace character as the enclosure
        $enclosure = chr(8);

        // Check that the stream opened successfully, if it failed to open log
        // an error and return execution to the callee
        if ($stream === false) {
            $log->error("Could not read locality stream for {country} ({code})", [
                'country' => $country->getName(),
                'code'    => $country->getCode(),
            ]);
            return [];
        }

        // Register that we're now importing localities
        $log->info("Importing {country} localities", ['country' => $country->getName()]);

        // Iterate over all the localities in the stream
        $lineNumber = 0;
        while (false !== $row = fgetcsv($stream, 0, $separator, $enclosure)) {
            // Increment the line number
            $lineNumber++;

            // Skip blank rows
            if (!$row[0]) continue;

            // Display a warning and skip rows where there are not enough
            // columns to generate a locality
            if (count($row) < 17) {
                $log->warning("Line {line} only has {count} of {expected} columns", [
                    'line'     => $lineNumber,
                    'count'    => count($row),
                    'expected' => 17,
                ]);
                continue;
            }

            // User function is called indirectly to allow the createLocality
            // method to be solely responsible for the generation of locality
            // information
            $locality = call_user_func_array([$this, 'createLocality'], $row);

            // Import the specific locality
            $this->importLocality($locality, $country, $log);
        }

        // Close the locality stream
        fclose($stream);
    }

    /**
     * Imports an individual locality into the the locality repositories
     * 
     * @param Locality         $locality Locality
     * @param CountryInterface $country  Country 
     * @param LoggerInterface  $log      Import log
     */
    public function importLocality(Locality $locality, CountryInterface $country = null, LoggerInterface $log = null)
    {
        $log = $log ?: new NullLogger();

        $localityRepository = $this->getLocalityRepository($locality->getFeatureCode());
        $countryRepository  = $this->getCountryRepository();
        $timezoneRepository = $this->getTimezoneRepository();

        // Skip localities with no local repository
        if (!$localityRepository) {
            $log->debug("{name} skipped ({code} feature not supported)", [
                'code' => $locality->getFeatureCode(),
                'name' => $locality->getNameAscii(),
            ]);
            return;
        }

        // Log that the locality is being imported
        $log->notice("Importing '{locality}' into repository {repository}", [
            'locality' => $locality->getNameAscii(),
            'repository' => get_class($localityRepository),
        ]);

        // Load the country for the locality if required
        if (!$country || $locality->getCountryCode() !== $country->getCode()) {
            $country = $countryRepository->getCountry($locality->getCountryCode());

            if (!$country) {
                $log->error("Country code '{code}' does not exist in repository {repository}", [
                    'code' => $countryCode,
                    'repository' => get_class($countryRepository),
                ]);
                return;
            }
        }

        // Set the country
        $locality->setCountry($country);

        // Load the timezone for the locality
        $timezone = $timezoneRepository->getTimezone($locality->getTimezoneIdentifier());

        if (!$timezone) {
            $log->error("Timezone code '{code}' does not exist in repository {repository}", [
                'code' => $locality->getTimezoneIdentifier(),
                'repository' => get_class($timezoneRepository),
            ]);
            return;
        }

        // Set the timezone
        $locality->setTimezone($timezone);

        // Store the locality
        $localityRepository->saveLocality($locality);

        // Register that the locality was imported
        $log->debug("'{locality}' imported into repository {repository}", [
            'locality' => $locality->getNameAscii(),
            'repository' => get_class($localityRepository),
        ]);
    }

    /**
     * Creates a new locality instance from exported locality data
     *
     * @param string $geonameid          integer id of record in geonames database
     * @param string $name               name of geographical point (utf8) varchar(200)
     * @param string $asciiName          name of geographical point in plain ascii characters, varchar(200)
     * @param string $alternateNames     alternatenames, comma separated varchar(5000)
     * @param string $latitude           latitude in decimal degrees (wgs84)
     * @param string $longitude          longitude in decimal degrees (wgs84)
     * @param string $featureClass       see http://www.geonames.org/export/codes.html, char(1)
     * @param string $featureCode        see http://www.geonames.org/export/codes.html, varchar(10)
     * @param string $countryCode        ISO-3166 2-letter country code, 2 characters
     * @param string $cc2                alternate country codes, comma separated, ISO-3166 2-letter country code, 60
     *                                   characters
     * @param string $admin1Code         fipscode (subject to change to iso code), see exceptions below, see file
     *                                   admin1Codes.txt for display names of this code; varchar(20)
     * @param string $admin2Code         code for the second administrative division, a county in the US, see file
     *                                   admin2Codes.txt; varchar(80) 
     * @param string $admin3Code         code for third level administrative division, varchar(20)
     * @param string $admin4Code         code for fourth level administrative division, varchar(20)
     * @param string $population         bigint (8 byte int) 
     * @param string $elevation          in meters, integer
     * @param string $dem                digital elevation model, srtm3 or gtopo30, average elevation of 3''x3''
     *                                   (ca 90mx90m) or 30''x30'' (ca 900mx900m) area in meters, integer. srtm processed
     *                                   by cgiar/ciat.
     * @param string $timezoneIdentifier the timezone id (see file timeZone.txt) varchar(40)
     * @param string $modificationDate   date of last modification in yyyy-MM-dd format
     * 
     * @return Locality
     */
    public function createLocality(
        $geonameid,
        $name,
        $asciiName,
        $alternateNames,
        $latitude,
        $longitude,
        $featureClass,
        $featureCode,
        $countryCode,
        $cc2,
        $admin1Code,
        $admin2Code,
        $admin3Code,
        $admin4Code,
        $population,
        $elevation,
        $dem,
        $timezoneIdentifier,
        $modificationDate)
    {
        return new Locality(
            $geonameid,
            $name,
            $asciiName,
            $alternateNames,
            $latitude,
            $longitude,
            $featureClass,
            $featureCode,
            $countryCode,
            $cc2,
            $admin1Code,
            $admin2Code,
            $admin3Code,
            $admin4Code,
            $population,
            $elevation,
            $dem,
            $timezoneIdentifier,
            $modificationDate);
    }
}