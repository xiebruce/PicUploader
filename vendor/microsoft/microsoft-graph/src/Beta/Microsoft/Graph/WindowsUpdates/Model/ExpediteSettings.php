<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpediteSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* ExpediteSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExpediteSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the isExpedited
    * True indicates that the deployment of the content is expedited.
    *
    * @return bool|null The isExpedited
    */
    public function getIsExpedited()
    {
        if (array_key_exists("isExpedited", $this->_propDict)) {
            return $this->_propDict["isExpedited"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExpedited
    * True indicates that the deployment of the content is expedited.
    *
    * @param bool $val The value of the isExpedited
    *
    * @return ExpediteSettings
    */
    public function setIsExpedited($val)
    {
        $this->_propDict["isExpedited"] = $val;
        return $this;
    }
}
