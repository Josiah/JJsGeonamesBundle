<?php

namespace JJs\Bundle\GeonamesBundle\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;
use JJs\Bundle\GeonamesBundle\Model\CountryInterface;

/**
 * Country
 *
 * A politically or geographically separate division of planetary space forming
 * the largest geographical categorization.
 *
 * @Entity(repositoryClass="CountryRepository")
 * @Table(name="geo_country")
 * @author Josiah <josiah@jjs.id.au>
 */
class Country implements CountryInterface
{
    /**
     * Unique identifier which represents the country in the local database.
     *
     * @Column(type="integer")
     * @GeneratedValue
     * @Id
     * @var int
     */
    protected $id;

    /**
     * ISO code (2 character)
     *
     * @Column(length=2, unique=true)
     * @var string
     */
    protected $code;

    /**
     * Name
     *
     * @Column(length=50, unique=true)
     * @var string
     */
    protected $name;

    /**
     * Top level domain
     *
     * @Column(length=2, nullable=true)
     * @var string
     */
    protected $domain;

    /**
     * Postal code format
     *
     * @Column(name="postal_code_format", length=60, nullable=true)
     * @var string
     */
    protected $postalCodeFormat;

    /**
     * Postal code regular expression
     *
     * @Column(name="postal_code_regex", length=180, nullable=true)
     * @var string
     */
    protected $postalCodeRegex;

    /**
     * Phone number prefix
     *
     * Where there is more than one possible phone prefix the different prefixes
     * will be separated by commas.
     *
     * @Column(name="phone_prefix", length=20, nullable=true)
     * @var string
     */
    protected $phonePrefix;

    /**
     * Returns the unique identifier of this country in the local database
     * 
     * @return integer
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * Gets the unique 2 character ISO code of this country
     * 
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets the unique 2 character ISO code of this country
     * 
     * @param string $code Country code
     * @return Country
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets the name by which this country is internationally recognised
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name by which this country is internationally recognised
     * 
     * @param string $name Country name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the top level domain suffix of the country
     * 
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets the top level domain suffix of the country
     * 
     * @param string $domain Domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Gets the format which postal codes from the country are expected to
     * adhere to
     * 
     * @return string
     */
    public function getPostalCodeFormat()
    {
        return $this->postalCodeFormat;
    }

    /**
     * Sets the format which postal codes from the country are expected to
     * adhere to
     * 
     * @param string $postalCodeFormat
     * @return Country
     */
    public function setPostalCodeFormat($postalCodeFormat)
    {
        $this->postalCodeFormat = $postalCodeFormat;

        return $this;
    }

    /**
     * Gets the regular expression which postal codes from the country are
     * expected to match
     * 
     * @return string
     */
    public function getPostalCodeRegex()
    {
        return $this->postalCodeRegex;
    }

    /**
     * Sets the regular expression which postal codes from the country are
     * expected to match
     * 
     * @param string $postalCodeRegex
     * @return Country
     */
    public function setPostalCodeRegex($postalCodeRegex)
    {
        $this->postalCodeRegex = $postalCodeRegex;

        return $this;
    }

    /**
     * Gets the prefix which is prepened to phone nubmers inside this country
     * 
     * @return string
     */
    public function getPhonePrefix()
    {
        return $this->phonePrefix;
    }

    /**
     * Sets the prefix which is prepened to phone nubmers inside this country
     * 
     * @param string $phonePrefix
     * @return Country
     */
    public function setPhonePrefix($phonePrefix)
    {
        $this->phonePrefix = $phonePrefix;

        return $this;
    }

    public function __toString() {
        return $this->getName();
    }
}