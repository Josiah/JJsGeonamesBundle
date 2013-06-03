<?php

namespace JJs\Bundle\GeonamesBundle\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * State
 *
 * The first level administrative division of a country. Refered to as a
 * 'province' for some countries.
 *
 * @Entity(repositoryClass="StateRepository")
 * @Table(name="geo_state")
 * @author Josiah <josiah@jjs.id.au>
 */
class State extends Locality
{
}