<?php

namespace JJs\Bundle\GeonamesBundle\Import;

use JJs\Bundle\GeonamesBundle\Model\LocalityInterface;

class Filter{

    /**
     * array of filter rules
     *
     * @var array
     */
    protected  $rules = array();

    /**
     *
     * @param string $rule
     */
    public function addRule($rule)
    {
        array_push($this->rules, $rule);
    }

    /**
     * Returns the file system path to the specified archive in the cache
     *
     * @param  Locality $locality
     *
     * @return boolean
     */
    public function applyRules($locality)
    {
        if($locality == null)
            return false;

        foreach ($this->rules as $rule) {
            $arr = explode ( ":" , $rule );

            if(count($arr) != 3)
                continue;

            $varName = $arr[0];
            $varFunc = $arr[1];
            $varValue = $arr[2];

            $varName = "get" . ucwords(str_replace(' ', '', $varName));

            // TODO: Allow filtering by names, distance to long/lang
            $ret = call_user_func ( [$locality, $varName]);
            switch ($varFunc) {
                case "=":
                case "equal":
                case "equals":
                    if(intval($ret) != intval($varValue) ||  (is_string($varValue) && (is_string($ret) == false || strcmp($ret, $varValue) != 0)))
                        return false;
                    break;
                case "min":
                case ">=":
                case ">":
                    if(intval($ret) < intval($varValue))
                        return false;
                    break;
                case "max":
                case "<=":
                case "<":
                    if(intval($ret) > intval($varValue))
                        return false;
                    break;
                case "contains":
                    if(is_string($varValue) && (is_string($ret) == false || strpos($ret, $varValue) === false))
                        return false;
                    break;
            }
        }
        return true;
    }
}