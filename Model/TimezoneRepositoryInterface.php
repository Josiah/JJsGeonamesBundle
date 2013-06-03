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
 * Timezone Repository
 *
 * Stores and retrieves timezone mapping information.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
interface TimezoneRepositoryInterface
{
    /**
     * Returns a timezone
     *
     * Note that the returned timezone will be resolved according to the design
     * of the implementing repository. This should include resolution of
     * interfaces to repository compatible classes.
     * 
     * @param string|TimezoneInterface $timezone Timezone Identifier
     * 
     * @return TimezoneInterface
     */
    public function getTimezone($timezone);

    /**
     * Saves a timezone
     * 
     * @param TimezoneInterface $timezone Timezone
     * 
     * @return TimezoneInterface
     */
    public function saveTimezone(TimezoneInterface $timezone);
}