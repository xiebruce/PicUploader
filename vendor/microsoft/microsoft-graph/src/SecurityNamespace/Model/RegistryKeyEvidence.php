<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistryKeyEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* RegistryKeyEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistryKeyEvidence extends AlertEvidence
{
    /**
    * Gets the registryHive
    * Registry hive of the key that the recorded action was applied to.
    *
    * @return string|null The registryHive
    */
    public function getRegistryHive()
    {
        if (array_key_exists("registryHive", $this->_propDict)) {
            return $this->_propDict["registryHive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registryHive
    * Registry hive of the key that the recorded action was applied to.
    *
    * @param string $val The value of the registryHive
    *
    * @return RegistryKeyEvidence
    */
    public function setRegistryHive($val)
    {
        $this->_propDict["registryHive"] = $val;
        return $this;
    }
    /**
    * Gets the registryKey
    * Registry key that the recorded action was applied to.
    *
    * @return string|null The registryKey
    */
    public function getRegistryKey()
    {
        if (array_key_exists("registryKey", $this->_propDict)) {
            return $this->_propDict["registryKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registryKey
    * Registry key that the recorded action was applied to.
    *
    * @param string $val The value of the registryKey
    *
    * @return RegistryKeyEvidence
    */
    public function setRegistryKey($val)
    {
        $this->_propDict["registryKey"] = $val;
        return $this;
    }
}
