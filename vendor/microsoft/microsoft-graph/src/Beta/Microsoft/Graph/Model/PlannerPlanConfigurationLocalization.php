<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanConfigurationLocalization File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PlannerPlanConfigurationLocalization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanConfigurationLocalization extends Entity
{

     /**
     * Gets the buckets
    * Localized names for configured buckets in the plan configuration.
     *
     * @return array|null The buckets
     */
    public function getBuckets()
    {
        if (array_key_exists("buckets", $this->_propDict)) {
           return $this->_propDict["buckets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the buckets
    * Localized names for configured buckets in the plan configuration.
    *
    * @param PlannerPlanConfigurationBucketLocalization[] $val The buckets
    *
    * @return PlannerPlanConfigurationLocalization
    */
    public function setBuckets($val)
    {
        $this->_propDict["buckets"] = $val;
        return $this;
    }

    /**
    * Gets the languageTag
    * The language code associated with the localized names in this object.
    *
    * @return string|null The languageTag
    */
    public function getLanguageTag()
    {
        if (array_key_exists("languageTag", $this->_propDict)) {
            return $this->_propDict["languageTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageTag
    * The language code associated with the localized names in this object.
    *
    * @param string $val The languageTag
    *
    * @return PlannerPlanConfigurationLocalization
    */
    public function setLanguageTag($val)
    {
        $this->_propDict["languageTag"] = $val;
        return $this;
    }

    /**
    * Gets the planTitle
    * Localized title of the plan.
    *
    * @return string|null The planTitle
    */
    public function getPlanTitle()
    {
        if (array_key_exists("planTitle", $this->_propDict)) {
            return $this->_propDict["planTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the planTitle
    * Localized title of the plan.
    *
    * @param string $val The planTitle
    *
    * @return PlannerPlanConfigurationLocalization
    */
    public function setPlanTitle($val)
    {
        $this->_propDict["planTitle"] = $val;
        return $this;
    }

}
