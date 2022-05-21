<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcSourceDeviceImage File
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
* CloudPcSourceDeviceImage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcSourceDeviceImage extends Entity
{
    /**
    * Gets the displayName
    * The display name for the source image.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name for the source image.
    *
    * @param string $val The value of the displayName
    *
    * @return CloudPcSourceDeviceImage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * The ID of the source image.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The ID of the source image.
    *
    * @param string $val The value of the id
    *
    * @return CloudPcSourceDeviceImage
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the subscriptionDisplayName
    * The display name of subscription that hosts the source image.
    *
    * @return string|null The subscriptionDisplayName
    */
    public function getSubscriptionDisplayName()
    {
        if (array_key_exists("subscriptionDisplayName", $this->_propDict)) {
            return $this->_propDict["subscriptionDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subscriptionDisplayName
    * The display name of subscription that hosts the source image.
    *
    * @param string $val The value of the subscriptionDisplayName
    *
    * @return CloudPcSourceDeviceImage
    */
    public function setSubscriptionDisplayName($val)
    {
        $this->_propDict["subscriptionDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the subscriptionId
    * The ID of subscription that hosts the source image.
    *
    * @return string|null The subscriptionId
    */
    public function getSubscriptionId()
    {
        if (array_key_exists("subscriptionId", $this->_propDict)) {
            return $this->_propDict["subscriptionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subscriptionId
    * The ID of subscription that hosts the source image.
    *
    * @param string $val The value of the subscriptionId
    *
    * @return CloudPcSourceDeviceImage
    */
    public function setSubscriptionId($val)
    {
        $this->_propDict["subscriptionId"] = $val;
        return $this;
    }
}
