<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesWritebackConfiguration File
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
* OnPremisesWritebackConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesWritebackConfiguration extends Entity
{
    /**
    * Gets the unifiedGroupContainer
    * The distinguished name of the on-premises container that the customer is using to store unified groups which are created in the cloud.
    *
    * @return string|null The unifiedGroupContainer
    */
    public function getUnifiedGroupContainer()
    {
        if (array_key_exists("unifiedGroupContainer", $this->_propDict)) {
            return $this->_propDict["unifiedGroupContainer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unifiedGroupContainer
    * The distinguished name of the on-premises container that the customer is using to store unified groups which are created in the cloud.
    *
    * @param string $val The value of the unifiedGroupContainer
    *
    * @return OnPremisesWritebackConfiguration
    */
    public function setUnifiedGroupContainer($val)
    {
        $this->_propDict["unifiedGroupContainer"] = $val;
        return $this;
    }
    /**
    * Gets the userContainer
    * The distinguished name of the on-premises container that the customer is using to store users which are created in the cloud.
    *
    * @return string|null The userContainer
    */
    public function getUserContainer()
    {
        if (array_key_exists("userContainer", $this->_propDict)) {
            return $this->_propDict["userContainer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userContainer
    * The distinguished name of the on-premises container that the customer is using to store users which are created in the cloud.
    *
    * @param string $val The value of the userContainer
    *
    * @return OnPremisesWritebackConfiguration
    */
    public function setUserContainer($val)
    {
        $this->_propDict["userContainer"] = $val;
        return $this;
    }
}
