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
 * Country Repository Interface
 *
 * Stores and retrieves country information from persistent backend storage.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
interface CountryRepositoryInterface
{
    /**
     * Returns the country which matches the specified country code
     *
     * If no country matches the specifed code, returns null.
     *
     * When a CountryInterface instance is passed to this method the code will
     * be extracted from the country.
     * 
     * @param string|CountryInterface $code Country code
     * 
     * @return CountryInterface
     */
    public function getCountry($code);

    /**
     * Returns all countries
     * 
     * @return CountryInterface[]
     */
    public function getAllCountries();

    /**
     * Updates the country in this repository
     *
     * @param CountryInterface $country Country
     * 
     * @return CountryInterface
     */
    public function saveCountry(CountryInterface $country);
}