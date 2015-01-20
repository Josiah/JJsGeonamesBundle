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

            $varName = "get" . ucwords($varName);


            $ret = call_user_func ( [$locality, $varName]);
            switch ($varFunc) {
                case "=":
                case "equal":
                    if(intval($ret) != intval($varValue))
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
            }
        }
        return true;
    }
}