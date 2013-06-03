<?php

namespace JJs\Bundle\GeonamesBundle\Data;

use JJs\Bundle\GeonamesBundle\Model\CountryInterface;
use JJs\Bundle\GeonamesBundle\Model\CountryRepositoryInterface;
use JJs\Bundle\GeonamesBundle\Model\LocalityRepositoryInterface;
use JJs\Bundle\GeonamesBundle\Model\TimezoneRepositoryInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Loads localities from GeoNames.org
 *
 * Loads state and city data from the GeoNames.org source.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class LocalityLoader
{
    /**
     * GeoNames.org Export Path
     *
     * @var string
     */
    const GEONAMES_EXPORT_PATH = 'http://download.geonames.org/export/dump';

    /**
     * integer id of record in geonames database
     * 
     * @var int
     */
    const COLUMN_GEONAMEID = 0;

    /**
     * name of geographical point (utf8) varchar(200)
     * 
     * @var int
     */
    const COLUMN_NAME = 1;

    /**
     * name of geographical point in plain ascii characters, varchar(200)
     * 
     * @var int
     */
    const COLUMN_ASCIINAME = 2;

    /**
     * alternatenames, comma separated varchar(5000)
     * 
     * @var int
     */
    const COLUMN_ALTERNATENAMES = 3;

    /**
     * latitude in decimal degrees (wgs84)
     * 
     * @var int
     */
    const COLUMN_LATITUDE = 4;

    /**
     * longitude in decimal degrees (wgs84)
     * 
     * @var int
     */
    const COLUMN_LONGITUDE = 5;

    /**
     * see http://www.geonames.org/export/codes.html, char(1)
     * 
     * @var int
     */
    const COLUMN_FEATURE_CLASS = 6;

    /**
     * see http://www.geonames.org/export/codes.html, varchar(10)
     * 
     * @var int
     */
    const COLUMN_FEATURE_CODE = 7;

    /**
     * ISO-3166 2-letter country code, 2 characters
     * 
     * @var int
     */
    const COLUMN_COUNTRY_CODE = 8;

    /**
     * alternate country codes, comma separated, ISO-3166 2-letter country code,
     * 60 characters
     * 
     * @var int
     */
    const COLUMN_CC2 = 9;

    /**
     * fipscode (subject to change to iso code), see exceptions below, see file
     * admin1Codes.txt for display names of this code; varchar(20)
     * 
     * @var int
     */
    const COLUMN_ADMIN1_CODE = 10;

    /**
     * code for the second administrative division, a county in the US, see file
     * admin2Codes.txt; varchar(80) 
     * 
     * @var int
     */
    const COLUMN_ADMIN2_CODE = 11;

    /**
     * code for third level administrative division, varchar(20)
     * 
     * @var int
     */
    const COLUMN_ADMIN3_CODE = 12;

    /**
     * code for fourth level administrative division, varchar(20)
     * 
     * @var int
     */
    const COLUMN_ADMIN4_CODE = 13;

    /**
     * bigint (8 byte int) 
     * 
     * @var int
     */
    const COLUMN_POPULATION = 14;

    /**
     * in meters, integer
     * 
     * @var int
     */
    const COLUMN_ELEVATION = 15;

    /**
     * digital elevation model, srtm3 or gtopo30, average elevation of 3''x3''
     * (ca 90mx90m) or 30''x30'' (ca 900mx900m) area in meters, integer. srtm
     * processed by cgiar/ciat.
     * 
     * @var int
     */
    const COLUMN_DEM = 16;

    /**
     * the timezone id (see file timeZone.txt) varchar(40)
     * 
     * @var int
     */
    const COLUMN_TIMEZONE = 17;

    /**
     * date of last modification in yyyy-MM-dd format
     * 
     * @var int
     */
    const COLUMN_MODIFICATION_DATE = 18;

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
     * Creates a new locality loader
     * 
     * @param CountryRepositoryInterface  $countryRepository  Country repository
     * @param TimezoneRepositoryInterface $timezoneRepository Timezone repository
     */
    public function __construct(CountryRepositoryInterface $countryRepository, TimezoneRepositoryInterface $timezoneRepository)
    {
        $this->countryRepository  = $countryRepository;
        $this->timezoneRepository = $timezoneRepository;
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
            $this->localityRepositories[$feature];
        } else {
            return null;
        }
    }

    /**
     * Returns the default file for the specified country
     * 
     * @param CountryInterface $country Country
     * 
     * @return string
     */
    public function getDefaultCountryFile(CountryInterface $country)
    {
        return sprintf('zip://%1$s/%2$s.zip#%2$s.txt', self::GEONAMES_EXPORT_PATH, $country->getCode());
    }

    /**
     * Loads the localities from all countries
     *
     * The export directory is assumed to be the base path where country
     * locality archives are installed.
     * 
     * @param string          $directory Export directory
     * @param LoggerInterface $log       Log recorder
     */
    public function load($directory = null, LoggerInterface $log = null)
    {
        $countryRepository = $this->getCountryRepository();
        $directory = $directory ?: self::GEONAMES_EXPORT_PATH;
        $local = stream_is_local($directory);

        // Iterate over the countries and load the localities for each
        foreach ($countryRepository->getAllCountries() as $country) {
            // Generate the desired country file name
            $file = sprintf('zip://%s/%2$s.zip#%2$s.txt', $directory, $country->getCode());

            // Download remote files to temporary locations
            if (!$local) {
                $local = tmpfile();

                // Directly download the file from the remote archive
                $remote = fopen($file, 'r');

                // Check that remote archive was opened

                $log->info('Making a local copy of {file}', ['file' => $file]);

                // Copy the remote file locally
                $bytes = stream_copy_to_stream($remote, $local);

                // Check that we copied some data 
                if ($bytes > 0) {
                    $log->info('{bytes} bytes copied', ['bytes' => $bytes]);
                } else {
                    $log->error('Could not make local copy of {file}', ['file' => $file]);
                    continue;
                }
            } else {
                $local = fopen($file);
            }

            $this->loadCountry($country, $directory, $log);
        }
    }

    /**
     * Loads the localities for a particular country from the specified file
     *
     * The file name has all {code} tokens substituted with the country code of
     * each country.
     * 
     * @param string|CountryInterface $countryCode Country
     * @param string                  $file        File name
     * @param LoggerInterface         $log         Log recorder
     */
    public function loadCountry($countryCode, $directory = null, LoggerInterface $log = null)
    {
        $log = $log ?: new NullLogger();

        $countryRepository = $this->getCountryRepository();
        $timezoneRepository = $this->getTimezoneRepository();

        if ($countryCode instanceof CountryInterface) {
            $country = $countryCode;
        } else {
            $country = $countryRepository->getCountry($countryCode);

            if (!$country) {
                $log->error("Country with code '{code}' does not exist in the database.", [
                    'code' => $countryCode,
                ]);
                return;
            }
        }

        $file = strtr($file, ['{code}', $country->getCode()]) ?: $this->getDefaultCountryFile($country);

        // Log the locality data
        $log->info("Loading locality data from {file}", ['file' => $file]);

        // Open the file
        if (false === $tsv = fopen($file, 'r')) {
            $log->error("Could not open file for reading: {file}", [
                'file' => $file,
            ]);
            return;
        }

        // Iterarate over the localities
        while(false !== $data = fgetcsv($tsv, 0, "\t")) {
            $geonameIdentifier = $data[self::COLUMN_GEONAMEID];
            $nameUtf8          = $data[self::COLUMN_NAME];
            $nameAscii         = $data[self::COLUMN_ASCIINAME];
            $latitude          = $data[self::COLUMN_LATITUDE];
            $longitude         = $data[self::COLUMN_LONGITUDE];
            $featureCode       = $data[self::COLUMN_FEATURE_CODE];
            $timezoneCode      = $data[self::COLUMN_TIMEZONE];

            $repository = $this->getLocalityRepository($featureCode);

            // Skip this record if there is no repository
            if (!$repository) continue;

            // Retrieve the timezone reference
            $timezone = $timezoneRepository->getTimezone($timezoneCode);

            // Log information regarding the file being loaded
            $log->info("{name_ascii} ({feature}: {repository})", [
                'geoname_id' => $geonameIdentifier,
                'name_utf8'  => $nameUtf8,
                'name_ascii' => $nameAscii,
                'latitude'   => $latitude,
                'longitude'  => $longitude,
                'feature'    => $featureCode,
                'repository' => get_class($repository),
            ]);

            // Create a new timezone where the timezone doesn't exist
            if (!$timezone) {
                $log->notice("Unrecognised timezone '{timezone}', creating new timezone entry", [
                    'timezone' => $timezoneCode,
                ]);
                $timezone = $timezoneRepository->saveTimezone(new Timezone($country, $timezoneCode));
            }

            $locality = new Locality($geonameIdentifier, $nameUtf8, $nameAscii, $latitude, $longitude, $country, $timezone);
        }
    }
}