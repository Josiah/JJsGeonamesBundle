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
    const ISO_CODE_POSITION = 0;

    /**
     * 3 character ISO code position
     *
     * @var int
     */
    const ISO3_CODE_POSITION = 1;

    /**
     * Numeric ISO code position
     *
     * @var int
     */
    const ISO_NUMERIC_CODE_POSITION = 2;

    /**
     * FIPS code position
     *
     * @var int
     */
    const FIPS_CODE_POSITION = 3;

    /**
     * Name position
     *
     * @var int
     */
    const NAME_POSITION = 4;

    /**
     * Capital position
     *
     * @var int
     */
    const CAPITAL_POSITION = 5;

    /**
     * Area position
     *
     * @var int
     */
    const AREA_POSITION = 6;

    /**
     * Population position
     *
     * @var int
     */
    const POPULATION_POSITION = 7;

    /**
     * Continent position
     *
     * @var int
     */
    const CONTINENT_POSITION = 8;

    /**
     * Top level domain name position
     *
     * @var int
     */
    const TOP_LEVEL_DOMAIN_POSITION = 9;

    /**
     * Currency code position
     *
     * @var int
     */
    const CURRENCY_CODE_POSITION = 10;

    /**
     * Currency name position
     *
     * @var int
     */
    const CURRENCY_NAME_POSITION = 11;

    /**
     * Phone position
     *
     * @var int
     */
    const PHONE_POSITION = 12;

    /**
     * Postal code format position
     *
     * @var int
     */
    const POSTAL_CODE_FORMAT_POSITION = 13;

    /**
     * Postal code regular expression position
     *
     * @var int
     */
    const POSTAL_CODE_REGEX_POSITION = 14;

    /**
     * Languages position
     *
     * @var int
     */
    const LANGUAGES_POSITION = 15;

    /**
     * GeoName ID position
     *
     * @var int
     */
    const GEONAME_ID_POSITION = 16;

    /**
     * Neighbours position
     *
     * @var int
     */
    const NEIGHBOURS_POSITION = 17;

    /**
     * Equivelent FIPS code position
     *
     * @var int
     */
    const EQUIVALENT_FIPS_CODE_POSITION = 18;

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
        $file              = $file ?: static::DEFAULT_FILE;
        $log               = $log ?: new NullLogger();
        $countryRepository = $this->getCountryRepository();

        // Log an informational message
        $log->info("Loading country data from {file} into repository {repository}", [
            'file'       => $file,
            'repository' => get_class($countryRepository),
        ]);

        // Open the tab separated file for reading
        $tsv = fopen($file ?: self::DEFAULT_FILE, 'r');
        while(false !== $data = fgetcsv($tsv, 0, "\t")) {

            // Skip all commented codes
            if (substr($data[0], 0, 1) === '#') continue;

            $code             = $data[self::ISO_CODE_POSITION];
            $geonameID        = $data[self::GEONAME_ID_POSITION];
            $name             = $data[self::NAME_POSITION];
            $domain           = $data[self::TOP_LEVEL_DOMAIN_POSITION];
            $postalCodeFormat = $data[self::POSTAL_CODE_FORMAT_POSITION];
            $postalCodeRegex  = $data[self::POSTAL_CODE_REGEX_POSITION];
            $phonePrefix      = $data[self::PHONE_POSITION];

            // Update the country in the repository
            $log->info(sprintf("Loading country {code} ({name})", [
                'code'             => $code,
                'name'             => $name,
                'domain'           => $domain,
                'postalCodeFormat' => $postalCodeFormat,
                'postalCodeRegex'  => $postalCodeRegex,
                'phonePrefix'      => $phonePrefix,
            ]));
            $countryRepository->setCountryData($code, $name, $domain, $postalCodeFormat, $postalCodeRegex, $phonePrefix);
        }
    }
}