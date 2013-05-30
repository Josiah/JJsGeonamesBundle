<?php

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
     * If no country matches the specifed code, returns null
     * 
     * @param string $code Country code
     * 
     * @return CountryInterface
     */
    public function getCountry($code);

    /**
     * Updates the repository with the specified country information
     *
     * Where a country exists in the database matching the country code, its
     * information will be overwritten by the specified information.
     * 
     * @param string $code             Country code (ISO3)
     * @param string $name             Country name
     * @param string $domain           Top level domain
     * @param string $postalCodeFormat Postal code format
     * @param string $postalCodeRegex  Postal code regex
     * @param string $phonePrefix      Phone prefix
     * 
     * @return CountryInterface
     */
    public function setCountryData($code, $name = null, $domain = null, $postalCodeFormat = null, $postalCodeRegex = null, $phonePrefix = null);
}