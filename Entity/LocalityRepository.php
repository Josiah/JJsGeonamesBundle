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

namespace JJs\Bundle\GeonamesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use JJs\Bundle\GeonamesBundle\Model\LocalityInterface;
use JJs\Bundle\GeonamesBundle\Model\LocalityRepositoryInterface;

/**
 * Locality Repository
 *
 * @author Josiah <josiah@jjs.id.au>
 */
abstract class LocalityRepository extends EntityRepository implements LocalityRepositoryInterface
{
    /**
     * Country Repository
     * 
     * @var CountryRepository
     */
    protected $countryRepository;

    /**
     * Timezone Repository
     * 
     * @var TimezoneRepository
     */
    protected $timezoneRepository;

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
     * Sets the country repository
     * 
     * @param CountryRepository $countryRepository Country repository
     */
    public function setCountryRepository(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * Returns the timezone repository
     * 
     * @return TimezoneRepository
     */
    public function getTimezoneRepository()
    {
        return $this->timezoneRepository;
    }

    /**
     * Sets the timezone repository
     * 
     * @param TimezoneRepository $timezoneRepository Timezone repository
     */
    public function setTimezoneRepository(TimezoneRepository $timezoneRepository)
    {
        $this->timezoneRepository = $timezoneRepository;
    }

    /**
     * Copies locality data from a locality interface to a locality entity
     * 
     * @param LocalityInterface $source      Source locality
     * @param Locality          $destination Destination locality
     */
    public function copyLocality(LocalityInterface $source, Locality $destination)
    {
        $countryRepository  = $this->getCountryRepository();
        $timezoneRepository = $this->getTimezoneRepository();

        // Copy the geoname identifier
        if ($geonameIdentifier = $source->getGeonameIdentifier()) {
            $destination->setGeonameIdentifier($geonameIdentifier);
        }

        // Copy the country
        if ($country = $countryRepository->getCountry($source->getCountry())) {
            $destination->setCountry($country);
        }

        // Copy the UTF-8 encoded name
        if ($nameUtf8 = $source->getNameUtf8()) {
            $destination->setNameUtf8($nameUtf8);
        }

        // Copy the ASCII encoded name
        if ($nameAscii = $source->getNameAscii()) {
            $destination->setNameAscii($nameAscii);
        }

        // Copy the latitude
        if ($latitude = $source->getLatitude()) {
            $destination->setLatitude($latitude);
        }

        // Copy the longitude
        if ($longitude = $source->getLongitude()) {
            $destination->setLongitude($longitude);
        }

        // Copy the timezone
        if ($timezone = $timezoneRepository->getTimezone($source->getTimezone())) {
            $destination->setTimezone($timezone);
        }
    }
}