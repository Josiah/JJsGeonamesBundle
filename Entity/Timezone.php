<?php

namespace JJs\Bundle\GeonamesBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use JJs\Bundle\GeonamesBundle\Model\TimezoneInterface;

/**
 * Timezone
 *
 * @Entity(repositoryClass="TimezoneRepository")
 * @Table(name="geo_timezone")
 * @author Josiah <josiah@jjs.id.au>
 */
class Timezone implements TimezoneInterface
{
    /**
     * Unique identifier which represents the timezone in the local database.
     *
     * @Column(type="integer")
     * @GeneratedValue
     * @Id
     * @var int
     */
    protected $id;

    /**
     * Country
     *
     * @ManyToOne(targetEntity="Country")
     * @JoinColumn(nullable=false)
     * @var Country
     */
    protected $country;

    /**
     * Timezone code
     *
     * @Column(name="code", type="string", nullable=true)
     * @var string
     */
    protected $code;

    /**
     * Returns the country
     * 
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     * 
     * @param Country $country Country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;

        return $this;
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

    /**
     * Sets the timezone code
     * 
     * @param string $code Timezone code
     *
     * @return string
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}