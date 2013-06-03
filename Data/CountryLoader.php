<?php

namespace JJs\Bundle\GeonamesBundle\Data;

use JJs\Bundle\GeonamesBundle\Model\CountryRepositoryInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Loads Countries from GeoNames.org
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class CountryLoader
{
    /**
     * Default URL
     *
     * Default url where countries should be loaded from.
     *
     * @var string
     */
    const DEFAULT_FILE = 'http://download.geonames.org/export/dump/countryInfo.txt';

    /**
     * ISO Code Position
     *
     * @var int
     */
    const COLUMN_ISO_CODE = 0;

    /**
     * 3 character ISO code position
     *
     * @var int
     */
    const COLUMN_ISO3_CODE = 1;

    /**
     * Numeric ISO code position
     *
     * @var int
     */
    const COLUMN_ISO_NUMERIC_CODE = 2;

    /**
     * FIPS code position
     *
     * @var int
     */
    const COLUMN_FIPS_CODE = 3;

    /**
     * Name position
     *
     * @var int
     */
    const COLUMN_NAME = 4;

    /**
     * Capital position
     *
     * @var int
     */
    const COLUMN_CAPITAL = 5;

    /**
     * Area position
     *
     * @var int
     */
    const COLUMN_AREA = 6;

    /**
     * Population position
     *
     * @var int
     */
    const COLUMN_POPULATION = 7;

    /**
     * Continent position
     *
     * @var int
     */
    const COLUMN_CONTINENT = 8;

    /**
     * Top level domain name position
     *
     * @var int
     */
    const COLUMN_TOP_LEVEL_DOMAIN = 9;

    /**
     * Currency code position
     *
     * @var int
     */
    const COLUMN_CURRENCY_CODE = 10;

    /**
     * Currency name position
     *
     * @var int
     */
    const COLUMN_CURRENCY_NAME = 11;

    /**
     * Phone position
     *
     * @var int
     */
    const COLUMN_PHONE = 12;

    /**
     * Postal code format position
     *
     * @var int
     */
    const COLUMN_POSTAL_CODE_FORMAT = 13;

    /**
     * Postal code regular expression position
     *
     * @var int
     */
    const COLUMN_POSTAL_CODE_REGEX = 14;

    /**
     * Languages position
     *
     * @var int
     */
    const COLUMN_LANGUAGES = 15;

    /**
     * GeoName ID position
     *
     * @var int
     */
    const COLUMN_GEONAME_ID = 16;

    /**
     * Neighbours position
     *
     * @var int
     */
    const COLUMN_NEIGHBOURS = 17;

    /**
     * Equivelent FIPS code position
     *
     * @var int
     */
    const COLUMN_EQUIVALENT_FIPS_CODE = 18;

    /**
     * Country repository
     * 
     * @var CountryRepositoryInterface
     */
    protected $countryRepository;

    /**
     * Creates a new country loader
     * 
     * @param ObjectManager $objectManager Object manager
     */
    public function __construct(CountryRepositoryInterface $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * Returns the country repository
     * 
     * @return CountryRepository
     */
    public function getCountryRepository()
    {
        return $this->countryRepository;
    }

    /**
     * Loads the default file into the database
     * 
     * @param string $file File to load (URL)
     * 
     * @return void
     */
    public function load($file = null, LoggerInterface $log = null)
    {
        $file = $file ?: static::DEFAULT_FILE;
        $log  = $log ?: new NullLogger();

        $countryRepository = $this->getCountryRepository();

        // Log an informational message
        $log->info("Loading country data from {file} into repository {repository}", [
            'file'       => $file,
            'repository' => get_class($countryRepository),
        ]);

        // Open the tab separated file for reading
        $tsv = fopen($file, 'r');
        while(false !== $data = fgetcsv($tsv, 0, "\t")) {

            // Skip all commented codes
            if (substr($data[0], 0, 1) === '#') continue;

            $code             = $data[self::COLUMN_ISO_CODE];
            $name             = $data[self::COLUMN_NAME];
            $domain           = $data[self::COLUMN_TOP_LEVEL_DOMAIN];
            $postalCodeFormat = $data[self::COLUMN_POSTAL_CODE_FORMAT];
            $postalCodeRegex  = $data[self::COLUMN_POSTAL_CODE_REGEX];
            $phonePrefix      = $data[self::COLUMN_PHONE];

            // Log the process
            $log->info("{code} ({name})", [
                'code'             => $code,
                'name'             => $name,
                'domain'           => $domain,
                'postalCodeFormat' => $postalCodeFormat,
                'postalCodeRegex'  => $postalCodeRegex,
                'phonePrefix'      => $phonePrefix,
            ]);

            $country = new Country($code, $name, $domain, $postalCodeFormat, $postalCodeRegex, $phonePrefix);
            $countryRepository->saveCountry($country);
        }
    }
}