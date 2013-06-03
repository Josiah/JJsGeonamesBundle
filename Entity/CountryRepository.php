<?php

namespace JJs\Bundle\GeonamesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use JJs\Bundle\GeonamesBundle\Model\CountryRepositoryInterface;
use JJs\Bundle\GeonamesBundle\Model\CountryInterface;

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
    public function getCountry($identifier)
    {
        // Pass through country instances
        if ($identifier instanceof Country) return $identifier;

        // Extract the code from country interfaces as required
        if ($identifier instanceof CountryInterface) $identifier = $identifier->getCode();

        // Find the country by its code
        return $this->findOneBy(['code' => $identifier]);
    }

    /**
     * Returns all the countries in the country repository
     * 
     * @return Country[]
     */
    public function getAllCountries()
    {
        return $this->findAll();
    }

    /**
     * Copies the data from the country to the destination
     * 
     * @param CountryInterface $source      Source
     * @param Country          $destination Destination
     */
    public function copyCountry(CountryInterface $source, Country $destination)
    {
        $code             = $source->getCode();
        $name             = $source->getName();
        $domain           = $source->getDomain();
        $postalCodeFormat = $source->getPostalCodeFormat();
        $postalCodeRegex  = $source->getPostalCodeRegex();
        $phonePrefix      = $source->getPhonePrefix();

        // Copy the country code
        if ($code !== $destination->getCode()) {
            $destination->setCode($code);
        }

        // Copy the country name
        if ($name !== $destination->getName()) {
            $destination->setName($name);
        }

        // Copy the top level domain suffix
        if ($domain !== $destination->getDomain()) {
            $destination->setDomain($domain);
        }

        // Copy the postal code format
        if ($postalCodeFormat !== $destination->getPostalCodeFormat()) {
            $destination->setPostalCodeFormat($postalCodeFormat);
        }

        // Copy the postal code regex
        if ($postalCodeRegex !== $destination->getPostalCodeRegex()) {
            $destination->setPostalCodeRegex($postalCodeRegex);
        }

        // Copy the phone prefix
        if ($phonePrefix !== $destination->getPhonePrefix()) {
            $destination->setPhonePrefix($phonePrefix);
        }
    }

    /**
     * Updates the country in this repository
     *
     * @param CountryInterface $data Country
     * 
     * @return CountryInterface
     */
    public function saveCountry(CountryInterface $data)
    {
        if ($data instanceof Country) {
            $country = $data;
        } else {
            $country = $this->getCountry($data) ?: new Country();
            $this->copyCountry($data, $country);
        }

        // Persist and flush the entity in the entity manager
        $em = $this->getEntityManager();
        $em->persist($country);
        $em->flush();
    }
}