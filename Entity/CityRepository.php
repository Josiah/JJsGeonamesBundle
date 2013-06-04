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

use JJs\Bundle\GeonamesBundle\Data\FeatureCodes;
use JJs\Bundle\GeonamesBundle\Model\LocalityInterface;

/**
 * City Repository
 *
 * Manages the persistance and retrieval of city entities from the database.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class CityRepository extends LocalityRepository
{
    /**
     * Returns a reference city from the database which matches the specified
     * city
     * 
     * @param mixed $city City
     * 
     * @return void
     */
    public function getCity($city)
    {
        // Pass through existing refrences
        if ($city instanceof City) return $city;

        // Load cities using their geoname id for locality interfaces
        if ($city instanceof LocalityInterface) {
            return $this->findOneBy(['geonameIdentifier' => $city->getGeonameIdentifier()]);
        }

        // Load the city as if it was the primary key
        return $this->findOneBy(['id' => $city->getID()]);
    }

    /**
     * Imports a locality as a city
     * 
     * @param LocalityInterface $locality Locality
     * 
     * @return City
     */
    public function importLocality(LocalityInterface $locality)
    {
        // No change is neccisasary for state instances
        if ($locality instanceof City) return $locality;

        // Load the existing state for the locality, or create a new instance
        $city = $this->getCity($locality) ?: new City();

        // Copy data from the import locality into an existing or new state
        // instance
        $this->copyLocality($locality, $city);

        // Return the state instance from the locality
        return $city;
    }
}