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

namespace JJs\Bundle\GeonamesBundle\Model;

/**
 * Locality
 *
 * @author Josiah <josiah@jjs.id.au>
 */
interface LocalityInterface
{
    /**
     * Returns the GeoNames.org identifier of this locality
     *
     * @return integer
     */
    public function getGeonameIdentifier();

    /**
     * Returns the country
     * 
     * @return CountryInterface
     */
    public function getCountry();

    /**
     * Returns the UTF8 encoded name of the locality
     * 
     * @return string
     */
    public function getNameUtf8();

    /**
     * Returns the ASCII encoded name of the locality
     * 
     * @return string
     */
    public function getNameAscii();

    /**
     * Returns the approximate latitude of the locality
     * 
     * @return float
     */
    public function getLatitude();

    /**
     * Returns the longitude of the locality
     * 
     * @return float
     */
    public function getLongitude();

    /**
     * Returns the timezone
     * 
     * @return TimezoneInterface
     */
    public function getTimezone();

    /**
     * Returns the creation date of this locality
     * 
     * @return DateTime
     */
    public function getCreationDate();

    /**
     * Returns the modification date of this locality
     * 
     * @return DateTime
     */
    public function getModificationDate();
}