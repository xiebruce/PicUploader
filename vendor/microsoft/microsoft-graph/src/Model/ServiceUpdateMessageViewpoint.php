<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceUpdateMessageViewpoint File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ServiceUpdateMessageViewpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceUpdateMessageViewpoint extends Entity
{
    /**
    * Gets the isArchived
    * Indicates whether the user archived the message.
    *
    * @return bool|null The isArchived
    */
    public function getIsArchived()
    {
        if (array_key_exists("isArchived", $this->_propDict)) {
            return $this->_propDict["isArchived"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isArchived
    * Indicates whether the user archived the message.
    *
    * @param bool $val The value of the isArchived
    *
    * @return ServiceUpdateMessageViewpoint
    */
    public function setIsArchived($val)
    {
        $this->_propDict["isArchived"] = $val;
        return $this;
    }
    /**
    * Gets the isFavorited
    * Indicates whether the user marked the message as favorite.
    *
    * @return bool|null The isFavorited
    */
    public function getIsFavorited()
    {
        if (array_key_exists("isFavorited", $this->_propDict)) {
            return $this->_propDict["isFavorited"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFavorited
    * Indicates whether the user marked the message as favorite.
    *
    * @param bool $val The value of the isFavorited
    *
    * @return ServiceUpdateMessageViewpoint
    */
    public function setIsFavorited($val)
    {
        $this->_propDict["isFavorited"] = $val;
        return $this;
    }
    /**
    * Gets the isRead
    * Indicates whether the user read the message.
    *
    * @return bool|null The isRead
    */
    public function getIsRead()
    {
        if (array_key_exists("isRead", $this->_propDict)) {
            return $this->_propDict["isRead"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRead
    * Indicates whether the user read the message.
    *
    * @param bool $val The value of the isRead
    *
    * @return ServiceUpdateMessageViewpoint
    */
    public function setIsRead($val)
    {
        $this->_propDict["isRead"] = $val;
        return $this;
    }
}
