<?php

namespace JJs\Bundle\GeonamesBundle\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * A city, town, village or other agglomeration of buildings where people work.
 *
 * @Entity(repositoryClass="CityRepository")
 * @Table(name="geo_city")
 * @author Josiah <josiah@jjs.id.au>
 */
class City extends Locality
{
    /**
     * State
     *
     * @ManyToOne(targetEntity="Country")
     * @var State
     */
    protected $state;

    /**
     * @Gedmo\Slug(fields={"nameAscii"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * Returns the state
     * 
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the state
     * 
     * @param State $state State
     */
    public function setState(State $state)
    {
        $this->state = $state;

        return $this;
    }

    public function __toString() {
        return $this->getNameUtf8();
    }

    public function getGeopoint() {
        return $this->getLatitude() . ',' . $this->getLongitude();
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }


}