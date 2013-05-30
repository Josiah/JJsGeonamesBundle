<?php

namespace JJs\Bundle\GeonamesBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Country Repository
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class CountryRepository extends EntityRepository implements CountryRepositoryInterface
{
    /**
     * Returns the country which matches the specified country code
     *
     * If no country matches the specifed code, returns null
     * 
     * @param string $code Country code
     * 
     * @return Country
     */
    public function getCountry($code)
    {
        return $this->findBy(['code' => $code]);
    }

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
    public function setCountryData($code, $name = null, $domain = null, $postalCodeFormat = null, $postalCodeRegex = null, $phonePrefix = null)
    {
        $country = $this->getCountry($code);

        // Generate a new country when there is no existing country
        if (!$country) {
            $country = $countryRepository->createCountry();
            $country->setCode($code);
        }

        // Set the country data
        $country->setGeonameID($geonameID);
        $country->setName($name);
        $country->setDomain($domain);
        $country->setPostalCodeFormat($postalCodeFormat);
        $country->setPostalCodeRegex($postalCodeRegex);
        $country->setPhonePrefix($phonePrefix);

        // Persist the country into the database
        $em = $this->getEntityManager();
        $em->persist($country);
        $em->flush();
    }
}