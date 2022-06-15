<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppSettings File
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
* TeamsAppSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppSettings extends Entity
{
    /**
    * Gets the isChatResourceSpecificConsentEnabled
    *
    * @return bool|null The isChatResourceSpecificConsentEnabled
    */
    public function getIsChatResourceSpecificConsentEnabled()
    {
        if (array_key_exists("isChatResourceSpecificConsentEnabled", $this->_propDict)) {
            return $this->_propDict["isChatResourceSpecificConsentEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isChatResourceSpecificConsentEnabled
    *
    * @param bool $val The isChatResourceSpecificConsentEnabled
    *
    * @return TeamsAppSettings
    */
    public function setIsChatResourceSpecificConsentEnabled($val)
    {
        $this->_propDict["isChatResourceSpecificConsentEnabled"] = boolval($val);
        return $this;
    }

}
