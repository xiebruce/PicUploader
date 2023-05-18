<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterEvaluateRequest File
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
* AssignmentFilterEvaluateRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterEvaluateRequest extends Entity
{
    /**
    * Gets the orderBy
    * Order the devices should be sorted in. Default is ascending on device name.
    *
    * @return string|null The orderBy
    */
    public function getOrderBy()
    {
        if (array_key_exists("orderBy", $this->_propDict)) {
            return $this->_propDict["orderBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the orderBy
    * Order the devices should be sorted in. Default is ascending on device name.
    *
    * @param string $val The value of the orderBy
    *
    * @return AssignmentFilterEvaluateRequest
    */
    public function setOrderBy($val)
    {
        $this->_propDict["orderBy"] = $val;
        return $this;
    }

    /**
    * Gets the platform
    * Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown, androidAOSP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
    *
    * @return DevicePlatformType|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\Model\DevicePlatformType") || is_null($this->_propDict["platform"])) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new DevicePlatformType($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    * Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown, androidAOSP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
    *
    * @param DevicePlatformType $val The value to assign to the platform
    *
    * @return AssignmentFilterEvaluateRequest The AssignmentFilterEvaluateRequest
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
         return $this;
    }
    /**
    * Gets the rule
    * Rule definition of the Assignment Filter.
    *
    * @return string|null The rule
    */
    public function getRule()
    {
        if (array_key_exists("rule", $this->_propDict)) {
            return $this->_propDict["rule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rule
    * Rule definition of the Assignment Filter.
    *
    * @param string $val The value of the rule
    *
    * @return AssignmentFilterEvaluateRequest
    */
    public function setRule($val)
    {
        $this->_propDict["rule"] = $val;
        return $this;
    }
    /**
    * Gets the search
    * Search keyword applied to scope found devices.
    *
    * @return string|null The search
    */
    public function getSearch()
    {
        if (array_key_exists("search", $this->_propDict)) {
            return $this->_propDict["search"];
        } else {
            return null;
        }
    }

    /**
    * Sets the search
    * Search keyword applied to scope found devices.
    *
    * @param string $val The value of the search
    *
    * @return AssignmentFilterEvaluateRequest
    */
    public function setSearch($val)
    {
        $this->_propDict["search"] = $val;
        return $this;
    }
    /**
    * Gets the skip
    * Number of records to skip. Default value is 0
    *
    * @return int|null The skip
    */
    public function getSkip()
    {
        if (array_key_exists("skip", $this->_propDict)) {
            return $this->_propDict["skip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skip
    * Number of records to skip. Default value is 0
    *
    * @param int $val The value of the skip
    *
    * @return AssignmentFilterEvaluateRequest
    */
    public function setSkip($val)
    {
        $this->_propDict["skip"] = $val;
        return $this;
    }
    /**
    * Gets the top
    * Limit of records per request. Default value is 100, if provided less than 0 or greater than 100
    *
    * @return int|null The top
    */
    public function getTop()
    {
        if (array_key_exists("top", $this->_propDict)) {
            return $this->_propDict["top"];
        } else {
            return null;
        }
    }

    /**
    * Sets the top
    * Limit of records per request. Default value is 100, if provided less than 0 or greater than 100
    *
    * @param int $val The value of the top
    *
    * @return AssignmentFilterEvaluateRequest
    */
    public function setTop($val)
    {
        $this->_propDict["top"] = $val;
        return $this;
    }
}
