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

namespace JJs\Bundle\GeonamesBundle\Data;

use JJs\Bundle\GeonamesBundle\Model\CountryRepositoryInterface;
use JJs\Bundle\GeonamesBundle\Model\TimezoneRepositoryInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Timezone Loader
 *
 * Loads geonames.org timezone data into the timezone repository.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class TimezoneLoader
{
    /**
     * Default file
     *
     * The timezone loader will load timezones from this file when no other file
     * is specified.
     *
     * @var string
     */
    const DEFAULT_FILE = 'http://download.geonames.org/export/dump/timeZones.txt';

    /**
     * Country code column position
     *
     * @var int
     */
    const COLUMN_COUNTRY_CODE = 0;

    /**
     * Timezone id column position
     *
     * @var int
     */
    const COLUMN_TIMEZONE_ID = 1;

    /**
     * GMT offset column position
     *
     * @var int
     */
    const COLUMN_GMT_OFFSET = 2;

    /**
     * DST offset column position
     *
     * @var int
     */
    const COLUMN_DST_OFFSET = 3;

    /**
     * Raw offset column position
     */
    const COLUMN_RAW_OFFSET = 4;

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
     * Creates a new timezone
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
     * Loads timezones from a geonames.org data file
     * 
     * @param string $file File to load timezones from (optional)
     * @param string $log  Log
     */
    public function load($file = null, LoggerInterface $log = null)
    {
        $file = $file ?: self::DEFAULT_FILE;
        $log = $log ?: new NullLogger();

        $countryRepository = $this->getCountryRepository();
        $timezoneRepository = $this->getTimezoneRepository();

        // Log an informational message
        $log->info("Loading country data from {file} into repository {repository}", [
            'file'       => $file,
            'repository' => get_class($timezoneRepository),
        ]);

        // Load data from the timezone file
        $tsv = fopen($file, 'r');
        $headings = fgetcsv($tsv, 0, "\t");
        while (false !== $data = fgetcsv($tsv, 0, "\t")) {
            $countryCode  = $data[self::COLUMN_COUNTRY_CODE];
            $timezoneCode = $data[self::COLUMN_TIMEZONE_ID];

            // Log progress
            $log->info("{timezone} ({country})", [
                'timezone' => $timezoneCode,
                'country' => $countryCode,
            ]);

            $country = $countryRepository->getCountry($countryCode);
            $timezone = new Timezone($timezoneCode, $country);

            // Save the timezone
            $timezoneRepository->saveTimezone($timezone);
        }
    }
}