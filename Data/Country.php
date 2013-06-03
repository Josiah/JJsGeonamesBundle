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

use JJs\Bundle\GeonamesBundle\Model\CountryInterface;

/**
 * Country Data
 *
 * Represents country data which has been loaded from a geonames.org data file.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class Country implements CountryInterface
{
    /**
     * Country code
     * @var string
     */
    public $code;

    /**
     * Name
     * 
     * @var string
     */
    public $name;
    /**
     * Top level domain suffix
     * 
     * @var string
     */
    public $domain;

    /**
     * Postal code format
     * 
     * @var string
     */
    public $postalCodeFormat;

    /**
     * Postal code regular expression
     * 
     * @var string
     */
    public $postalCodeRegex;

    /**
     * Phone number prefix
     * 
     * @var string
     */
    public $phonePrefix;

    public function __construct($code, $name, $domain, $postalCodeFormat, $postalCodeRegex, $phonePrefix)
    {
        $this->code             = $code;
        $this->name             = $name;
        $this->domain           = $domain;
        $this->postalCodeFormat = $postalCodeFormat;
        $this->postalCodeRegex  = $postalCodeRegex;
        $this->phonePrefix      = $phonePrefix;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDomain()
    {
        $domain = $this->domain;

        // Remove the period prefix if present
        if (substr($this->domain, 0, 1) === '.') {
            $domain = substr($domain, 1);
        }

        return $domain;
    }

    public function getPostalCodeFormat()
    {
        return $this->postalCodeFormat;
    }

    public function getPostalCodeRegex()
    {
        return $this->postalCodeRegex;
    }

    public function getPhonePrefix()
    {
        return $this->phonePrefix;
    }
}