<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Setting File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* Setting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Setting extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The display name for the setting. Required. Read-only.
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
    * The display name for the setting. Required. Read-only.
    *
    * @param string $val The value of the displayName
    *
    * @return Setting
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the jsonValue
    * The value for the setting serialized as string of JSON. Required. Read-only.
    *
    * @return string|null The jsonValue
    */
    public function getJsonValue()
    {
        if (array_key_exists("jsonValue", $this->_propDict)) {
            return $this->_propDict["jsonValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the jsonValue
    * The value for the setting serialized as string of JSON. Required. Read-only.
    *
    * @param string $val The value of the jsonValue
    *
    * @return Setting
    */
    public function setJsonValue($val)
    {
        $this->_propDict["jsonValue"] = $val;
        return $this;
    }
    /**
    * Gets the overwriteAllowed
    * A flag indicating whether the setting can be override existing configurations when applied. Required. Read-only.
    *
    * @return bool|null The overwriteAllowed
    */
    public function getOverwriteAllowed()
    {
        if (array_key_exists("overwriteAllowed", $this->_propDict)) {
            return $this->_propDict["overwriteAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the overwriteAllowed
    * A flag indicating whether the setting can be override existing configurations when applied. Required. Read-only.
    *
    * @param bool $val The value of the overwriteAllowed
    *
    * @return Setting
    */
    public function setOverwriteAllowed($val)
    {
        $this->_propDict["overwriteAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the settingId
    *
    * @return string|null The settingId
    */
    public function getSettingId()
    {
        if (array_key_exists("settingId", $this->_propDict)) {
            return $this->_propDict["settingId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settingId
    *
    * @param string $val The value of the settingId
    *
    * @return Setting
    */
    public function setSettingId($val)
    {
        $this->_propDict["settingId"] = $val;
        return $this;
    }

    /**
    * Gets the valueType
    * The data type for the setting. Possible values are: string, integer, boolean, guid, stringCollection, integerCollection, booleanCollection, guidCollection, unknownFutureValue. Required. Read-only.
    *
    * @return ManagementParameterValueType|null The valueType
    */
    public function getValueType()
    {
        if (array_key_exists("valueType", $this->_propDict)) {
            if (is_a($this->_propDict["valueType"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementParameterValueType") || is_null($this->_propDict["valueType"])) {
                return $this->_propDict["valueType"];
            } else {
                $this->_propDict["valueType"] = new ManagementParameterValueType($this->_propDict["valueType"]);
                return $this->_propDict["valueType"];
            }
        }
        return null;
    }

    /**
    * Sets the valueType
    * The data type for the setting. Possible values are: string, integer, boolean, guid, stringCollection, integerCollection, booleanCollection, guidCollection, unknownFutureValue. Required. Read-only.
    *
    * @param ManagementParameterValueType $val The value to assign to the valueType
    *
    * @return Setting The Setting
    */
    public function setValueType($val)
    {
        $this->_propDict["valueType"] = $val;
         return $this;
    }
}
