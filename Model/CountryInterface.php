<?php

namespace JJs\Bundle\GeonamesBundle\Model;

/**
 * Country
 *
 * @author Josiah <josiah@jjs.id.au>
 */
interface CountryInterface
{
    /**
     * Returns the unique 2 character ISO code of this country
     * 
     * @return string
     */
    function getCode();

    /**
     * Returns the name by which this country is internationally recognised
     * 
     * @return string
     */
    function getName();

    /**
     * Returns the top level domain suffix of the country
     * 
     * @return string
     */
    function getDomain();

    /**
     * Returns the format which postal codes from the country are expected to
     * adhere to
     * 
     * @return string
     */
    function getPostalCodeFormat();

    /**
     * Returns the regular expression which postal codes from the country are
     * expected to match
     * 
     * @return string
     */
    function getPostalCodeRegex();

    /**
     * Returns the prefix which is prepened to phone nubmers inside this country
     * 
     * @return string
     */
    function getPhonePrefix();
}