<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcLaunchInfo File
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
* CloudPcLaunchInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcLaunchInfo extends Entity
{
    /**
    * Gets the cloudPcId
    * The unique identifier of the Cloud PC.
    *
    * @return string|null The cloudPcId
    */
    public function getCloudPcId()
    {
        if (array_key_exists("cloudPcId", $this->_propDict)) {
            return $this->_propDict["cloudPcId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcId
    * The unique identifier of the Cloud PC.
    *
    * @param string $val The value of the cloudPcId
    *
    * @return CloudPcLaunchInfo
    */
    public function setCloudPcId($val)
    {
        $this->_propDict["cloudPcId"] = $val;
        return $this;
    }
    /**
    * Gets the cloudPcLaunchUrl
    * The connect URL of the Cloud PC.
    *
    * @return string|null The cloudPcLaunchUrl
    */
    public function getCloudPcLaunchUrl()
    {
        if (array_key_exists("cloudPcLaunchUrl", $this->_propDict)) {
            return $this->_propDict["cloudPcLaunchUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcLaunchUrl
    * The connect URL of the Cloud PC.
    *
    * @param string $val The value of the cloudPcLaunchUrl
    *
    * @return CloudPcLaunchInfo
    */
    public function setCloudPcLaunchUrl($val)
    {
        $this->_propDict["cloudPcLaunchUrl"] = $val;
        return $this;
    }
}
