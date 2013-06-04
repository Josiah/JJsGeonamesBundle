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

use JJs\Bundle\GeonamesBundle\Model\CountryInterface;
use JJs\Bundle\GeonamesBundle\Model\LocalityInterface;
use JJs\Bundle\GeonamesBundle\Model\TimezoneInterface;

/**
 * Improted Locality
 *
 * Locality data which has been imported from geonames.org
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class Locality implements LocalityInterface
{
    /**
     * integer id of record in geonames database
     * 
     * @var string
     */
    protected $geonameid;

    /**
     * name of geographical point (utf8) varchar(200)
     * 
     * @var string
     */
    protected $name;

    /**
     * name of geographical point in plain ascii characters, varchar(200)
     * 
     * @var string
     */
    protected $asciiName;

    /**
     * alternatenames, comma separated varchar(5000)
     * 
     * @var string
     */
    protected $alternateNames;

    /**
     * latitude in decimal degrees (wgs84)
     * 
     * @var string
     */
    protected $latitude;

    /**
     * longitude in decimal degrees (wgs84)
     * 
     * @var string
     */
    protected $longitude;

    /**
     * see http://www.geonames.org/export/codes.html, char(1)
     * 
     * @var string
     */
    protected $featureClass;

    /**
     * see http://www.geonames.org/export/codes.html, varchar(10)
     * 
     * @var string
     */
    protected $featureCode;

    /**
     * ISO-3166 2-letter country code, 2 characters
     * 
     * @var string
     */
    protected $countryCode;

    /**
     * alternate country codes, comma separated, ISO-3166 2-letter country code, 60 characters
     * 
     * @var string
     */
    protected $cc2;

    /**
     * fipscode (subject to change to iso code), see exceptions below, see file admin1Codes.txt for display names of
     * this code; varchar(20)
     * 
     * @var string
     */
    protected $admin1Code;

    /**
     * code for the second administrative division, a county in the US, see file admin2Codes.txt; varchar(80) 
     * 
     * @var string
     */
    protected $admin2Code;

    /**
     * code for third level administrative division, varchar(20)
     * 
     * @var string
     */
    protected $admin3Code;

    /**
     * code for fourth level administrative division, varchar(20)
     * 
     * @var string
     */
    protected $admin4Code;

    /**
     * bigint (8 byte int) 
     * 
     * @var string
     */
    protected $population;

    /**
     * in meters, integer
     * 
     * @var string
     */
    protected $elevation;

    /**
     * digital elevation model, srtm3 or gtopo30, average elevation of 3''x3'' (ca 90mx90m) or 30''x30'' (ca 900mx900m)
     * area in meters, integer. srtm processed by cgiar/ciat.
     * 
     * @var string
     */
    protected $dem;

    /**
     * the timezone id (see file timeZone.txt) varchar(40)
     * 
     * @var string
     */
    protected $timezoneIdentifier;

    /**
     * Date this locality instance was created
     * 
     * @var DateTime
     */
    protected $creationDate;

    /**
     * date of last modification in yyyy-MM-dd format
     * 
     * @var string
     */
    protected $modificationDate;

    /**
     * Country
     * 
     * @var CountryInterface
     */
    protected $country;

    /**
     * Timezone
     * 
     * @var TimezoneInterface
     */
    protected $timezone;

    /**
     * Creates a new export locality
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
     */
    public function __construct(
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
        $this->geonameid          = $geonameid;
        $this->name               = $name;
        $this->asciiName          = $asciiName;
        $this->alternateNames     = $alternateNames;
        $this->latitude           = $latitude;
        $this->longitude          = $longitude;
        $this->featureClass       = $featureClass;
        $this->featureCode        = $featureCode;
        $this->countryCode        = $countryCode;
        $this->cc2                = $cc2;
        $this->admin1Code         = $admin1Code;
        $this->admin2Code         = $admin2Code;
        $this->admin3Code         = $admin3Code;
        $this->admin4Code         = $admin4Code;
        $this->population         = $population;
        $this->elevation          = $elevation;
        $this->dem                = $dem;
        $this->timezoneIdentifier = $timezoneIdentifier;
        $this->creationDate       = $modificationDate;
        $this->modificationDate   = $modificationDate;
    }

    /**
     * Returns the geonames.org identifier
     * 
     * @return string
     */
    public function getGeonameIdentifier()
    {
        return $this->geonameid;
    }

    /**
     * Returns the country
     * 
     * @return CountryInterface
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country of this locality
     * 
     * @param CountryInterface $country Country
     */
    public function setCountry(CountryInterface $country)
    {
        $this->country = $country;
    }

    /**
     * Returns the UTF8 encoded name of the locality
     * 
     * @return string
     */
    public function getNameUtf8()
    {
        return $this->name;
    }

    /**
     * Returns the ASCII encoded name of the locality
     * 
     * @return string
     */
    public function getNameAscii()
    {
        return $this->asciiName;
    }

    /**
     * Returns the approximate latitude of the locality
     * 
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Returns the longitude of the locality
     * 
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Returns the timezone
     * 
     * @return TimezoneInterface
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Sets the timezone of the locality
     * 
     * @param TimezoneInterface $timezone Timezone
     */
    public function setTimezone(TimezoneInterface $timezone = null)
    {
        $this->timezone = $timezone;
    }

    /**
     * Returns the creation date of this locality
     * 
     * @return DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Returns the modification date of this locality
     * 
     * @return DateTime
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Returns the country code
     * 
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Returns the timezone identifier
     * 
     * @return string
     */
    public function getTimezoneIdentifier()
    {
        return $this->timezoneIdentifier;
    }

    public function getAlternateNames()
    {
        return $this->alternateNames;
    }

    public function getFeatureClass()
    {
        return $this->featureClass;
    }

    public function getFeatureCode()
    {
        return $this->featureCode;
    }

    public function getCc2()
    {
        return $this->cc2;
    }

    public function getAdmin1Code()
    {
        return $this->admin1Code;
    }

    public function getAdmin2Code()
    {
        return $this->admin2Code;
    }

    public function getAdmin3Code()
    {
        return $this->admin3Code;
    }

    public function getAdmin4Code()
    {
        return $this->admin4Code;
    }

    public function getPopulation()
    {
        return $this->population;
    }

    public function getElevation()
    {
        return $this->elevation;
    }

    public function getDem()
    {
        return $this->dem;
    }
}