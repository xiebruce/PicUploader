<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PowerliftIncidentMetadata File
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
* PowerliftIncidentMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PowerliftIncidentMetadata extends Entity
{
    /**
    * Gets the application
    * The name of the application the diagnostic is from. Example: com.microsoft.CompanyPortal
    *
    * @return string|null The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            return $this->_propDict["application"];
        } else {
            return null;
        }
    }

    /**
    * Sets the application
    * The name of the application the diagnostic is from. Example: com.microsoft.CompanyPortal
    *
    * @param string $val The value of the application
    *
    * @return PowerliftIncidentMetadata
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
        return $this;
    }
    /**
    * Gets the clientVersion
    * The version of the application. Example: 5.2203.1
    *
    * @return string|null The clientVersion
    */
    public function getClientVersion()
    {
        if (array_key_exists("clientVersion", $this->_propDict)) {
            return $this->_propDict["clientVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientVersion
    * The version of the application. Example: 5.2203.1
    *
    * @param string $val The value of the clientVersion
    *
    * @return PowerliftIncidentMetadata
    */
    public function setClientVersion($val)
    {
        $this->_propDict["clientVersion"] = $val;
        return $this;
    }

    /**
    * Gets the createdAtDateTime
    * The time the app diagnostic was created. Example: 2022-04-19T17:24:45.313Z
    *
    * @return \DateTime|null The createdAtDateTime
    */
    public function getCreatedAtDateTime()
    {
        if (array_key_exists("createdAtDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdAtDateTime"], "\DateTime") || is_null($this->_propDict["createdAtDateTime"])) {
                return $this->_propDict["createdAtDateTime"];
            } else {
                $this->_propDict["createdAtDateTime"] = new \DateTime($this->_propDict["createdAtDateTime"]);
                return $this->_propDict["createdAtDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdAtDateTime
    * The time the app diagnostic was created. Example: 2022-04-19T17:24:45.313Z
    *
    * @param \DateTime $val The value to assign to the createdAtDateTime
    *
    * @return PowerliftIncidentMetadata The PowerliftIncidentMetadata
    */
    public function setCreatedAtDateTime($val)
    {
        $this->_propDict["createdAtDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the easyId
    * The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. Example: 8520467A
    *
    * @return string|null The easyId
    */
    public function getEasyId()
    {
        if (array_key_exists("easyId", $this->_propDict)) {
            return $this->_propDict["easyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the easyId
    * The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. Example: 8520467A
    *
    * @param string $val The value of the easyId
    *
    * @return PowerliftIncidentMetadata
    */
    public function setEasyId($val)
    {
        $this->_propDict["easyId"] = $val;
        return $this;
    }
    /**
    * Gets the fileNames
    * A list of files that are associated with the diagnostic.
    *
    * @return string|null The fileNames
    */
    public function getFileNames()
    {
        if (array_key_exists("fileNames", $this->_propDict)) {
            return $this->_propDict["fileNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileNames
    * A list of files that are associated with the diagnostic.
    *
    * @param string $val The value of the fileNames
    *
    * @return PowerliftIncidentMetadata
    */
    public function setFileNames($val)
    {
        $this->_propDict["fileNames"] = $val;
        return $this;
    }
    /**
    * Gets the locale
    * The locale information of the application. Example: en-US
    *
    * @return string|null The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locale
    * The locale information of the application. Example: en-US
    *
    * @param string $val The value of the locale
    *
    * @return PowerliftIncidentMetadata
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }
    /**
    * Gets the platform
    * The device's OS the diagnostic is from. Example: iOS
    *
    * @return string|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            return $this->_propDict["platform"];
        } else {
            return null;
        }
    }

    /**
    * Sets the platform
    * The device's OS the diagnostic is from. Example: iOS
    *
    * @param string $val The value of the platform
    *
    * @return PowerliftIncidentMetadata
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    /**
    * Gets the powerliftId
    * The unique identifier of the app diagnostic. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
    *
    * @return string|null The powerliftId
    */
    public function getPowerliftId()
    {
        if (array_key_exists("powerliftId", $this->_propDict)) {
            return $this->_propDict["powerliftId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the powerliftId
    * The unique identifier of the app diagnostic. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
    *
    * @param string $val The value of the powerliftId
    *
    * @return PowerliftIncidentMetadata
    */
    public function setPowerliftId($val)
    {
        $this->_propDict["powerliftId"] = $val;
        return $this;
    }
}
