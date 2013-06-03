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

use JJs\Bundle\GeonamesBundle\Model\TimezoneInterface;
use JJs\Bundle\GeonamesBundle\Model\CountryInterface;

/**
 * Timezone Data
 *
 * Represents timezone data which has been loaded from a geonames.org data file.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class Timezone implements TimezoneInterface
{
    /**
     * Country
     * 
     * @var CountryInterface
     */
    protected $country;

    /**
     * Timezone code
     * 
     * @var string
     */
    protected $code;

    /**
     * Creates a new timezone data record
     * 
     * @param string           $code    Timezone code
     * @param CountryInterface $country Country
     */
    public function __construct($code, CountryInterface $country = null)
    {
        $this->code    = $code;
        $this->country = $country;
    }

    /**
     * Returns the country associated with this timezone
     * 
     * @return CountryInterface
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the timezone code
     * 
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}