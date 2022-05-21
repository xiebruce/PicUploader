<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BulkDriverActionResult File
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
* BulkDriverActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BulkDriverActionResult extends Entity
{
    /**
    * Gets the failedDriverIds
    * List of driver Ids where the action is failed.
    *
    * @return string|null The failedDriverIds
    */
    public function getFailedDriverIds()
    {
        if (array_key_exists("failedDriverIds", $this->_propDict)) {
            return $this->_propDict["failedDriverIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedDriverIds
    * List of driver Ids where the action is failed.
    *
    * @param string $val The value of the failedDriverIds
    *
    * @return BulkDriverActionResult
    */
    public function setFailedDriverIds($val)
    {
        $this->_propDict["failedDriverIds"] = $val;
        return $this;
    }
    /**
    * Gets the notFoundDriverIds
    * List of driver Ids that are not found.
    *
    * @return string|null The notFoundDriverIds
    */
    public function getNotFoundDriverIds()
    {
        if (array_key_exists("notFoundDriverIds", $this->_propDict)) {
            return $this->_propDict["notFoundDriverIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notFoundDriverIds
    * List of driver Ids that are not found.
    *
    * @param string $val The value of the notFoundDriverIds
    *
    * @return BulkDriverActionResult
    */
    public function setNotFoundDriverIds($val)
    {
        $this->_propDict["notFoundDriverIds"] = $val;
        return $this;
    }
    /**
    * Gets the successfulDriverIds
    * List of driver Ids where the action is successful.
    *
    * @return string|null The successfulDriverIds
    */
    public function getSuccessfulDriverIds()
    {
        if (array_key_exists("successfulDriverIds", $this->_propDict)) {
            return $this->_propDict["successfulDriverIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulDriverIds
    * List of driver Ids where the action is successful.
    *
    * @param string $val The value of the successfulDriverIds
    *
    * @return BulkDriverActionResult
    */
    public function setSuccessfulDriverIds($val)
    {
        $this->_propDict["successfulDriverIds"] = $val;
        return $this;
    }
}
