<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanConfiguration File
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
* PlannerPlanConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanConfiguration extends Entity
{

     /**
     * Gets the buckets
    * List the buckets that should be created in the plan.
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
    * List the buckets that should be created in the plan.
    *
    * @param PlannerPlanConfigurationBucketDefinition[] $val The buckets
    *
    * @return PlannerPlanConfiguration
    */
    public function setBuckets($val)
    {
        $this->_propDict["buckets"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * The identity of the creator of the plan configuration.
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * The identity of the creator of the plan configuration.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return PlannerPlanConfiguration
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the plan configuration was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time when the plan configuration was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PlannerPlanConfiguration
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the defaultLanguage
    * The language code for the default language to be used for the names of the objects created for the plan.
    *
    * @return string|null The defaultLanguage
    */
    public function getDefaultLanguage()
    {
        if (array_key_exists("defaultLanguage", $this->_propDict)) {
            return $this->_propDict["defaultLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLanguage
    * The language code for the default language to be used for the names of the objects created for the plan.
    *
    * @param string $val The defaultLanguage
    *
    * @return PlannerPlanConfiguration
    */
    public function setDefaultLanguage($val)
    {
        $this->_propDict["defaultLanguage"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The identity of the user who last modified the plan configuration.
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * The identity of the user who last modified the plan configuration.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return PlannerPlanConfiguration
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the plan configuration was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date and time when the plan configuration was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return PlannerPlanConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the localizations
    * Localized names for the plan configuration.
     *
     * @return array|null The localizations
     */
    public function getLocalizations()
    {
        if (array_key_exists("localizations", $this->_propDict)) {
           return $this->_propDict["localizations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localizations
    * Localized names for the plan configuration.
    *
    * @param PlannerPlanConfigurationLocalization[] $val The localizations
    *
    * @return PlannerPlanConfiguration
    */
    public function setLocalizations($val)
    {
        $this->_propDict["localizations"] = $val;
        return $this;
    }

}
