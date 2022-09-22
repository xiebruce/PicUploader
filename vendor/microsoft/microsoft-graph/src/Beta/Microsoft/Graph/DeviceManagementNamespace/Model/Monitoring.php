<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Monitoring File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\DeviceManagementNamespace\Model;

/**
* Monitoring class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Monitoring extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the alertRecords
     *
     * @return array|null The alertRecords
     */
    public function getAlertRecords()
    {
        if (array_key_exists("alertRecords", $this->_propDict)) {
           return $this->_propDict["alertRecords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertRecords
    *
    * @param AlertRecord[] $val The alertRecords
    *
    * @return Monitoring
    */
    public function setAlertRecords($val)
    {
        $this->_propDict["alertRecords"] = $val;
        return $this;
    }


     /**
     * Gets the alertRules
     *
     * @return array|null The alertRules
     */
    public function getAlertRules()
    {
        if (array_key_exists("alertRules", $this->_propDict)) {
           return $this->_propDict["alertRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertRules
    *
    * @param AlertRule[] $val The alertRules
    *
    * @return Monitoring
    */
    public function setAlertRules($val)
    {
        $this->_propDict["alertRules"] = $val;
        return $this;
    }

}
