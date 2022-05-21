<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceAnnouncement File
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
* ServiceAnnouncement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceAnnouncement extends Entity
{

     /**
     * Gets the healthOverviews
    * A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
     *
     * @return array|null The healthOverviews
     */
    public function getHealthOverviews()
    {
        if (array_key_exists("healthOverviews", $this->_propDict)) {
           return $this->_propDict["healthOverviews"];
        } else {
            return null;
        }
    }

    /**
    * Sets the healthOverviews
    * A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
    *
    * @param ServiceHealth[] $val The healthOverviews
    *
    * @return ServiceAnnouncement
    */
    public function setHealthOverviews($val)
    {
        $this->_propDict["healthOverviews"] = $val;
        return $this;
    }


     /**
     * Gets the issues
    * A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
     *
     * @return array|null The issues
     */
    public function getIssues()
    {
        if (array_key_exists("issues", $this->_propDict)) {
           return $this->_propDict["issues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issues
    * A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
    *
    * @param ServiceHealthIssue[] $val The issues
    *
    * @return ServiceAnnouncement
    */
    public function setIssues($val)
    {
        $this->_propDict["issues"] = $val;
        return $this;
    }


     /**
     * Gets the messages
    * A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
     *
     * @return array|null The messages
     */
    public function getMessages()
    {
        if (array_key_exists("messages", $this->_propDict)) {
           return $this->_propDict["messages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messages
    * A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
    *
    * @param ServiceUpdateMessage[] $val The messages
    *
    * @return ServiceAnnouncement
    */
    public function setMessages($val)
    {
        $this->_propDict["messages"] = $val;
        return $this;
    }

}
