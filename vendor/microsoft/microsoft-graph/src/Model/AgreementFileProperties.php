<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgreementFileProperties File
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
* AgreementFileProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgreementFileProperties extends Entity
{
    /**
    * Gets the createdDateTime
    * The date time representing when the file was created.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date time representing when the file was created.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AgreementFileProperties
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement.
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
    * Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement.
    *
    * @param string $val The displayName
    *
    * @return AgreementFileProperties
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the fileData
    * Data that represents the terms of use PDF document. Read-only.
    *
    * @return AgreementFileData|null The fileData
    */
    public function getFileData()
    {
        if (array_key_exists("fileData", $this->_propDict)) {
            if (is_a($this->_propDict["fileData"], "\Microsoft\Graph\Model\AgreementFileData") || is_null($this->_propDict["fileData"])) {
                return $this->_propDict["fileData"];
            } else {
                $this->_propDict["fileData"] = new AgreementFileData($this->_propDict["fileData"]);
                return $this->_propDict["fileData"];
            }
        }
        return null;
    }

    /**
    * Sets the fileData
    * Data that represents the terms of use PDF document. Read-only.
    *
    * @param AgreementFileData $val The fileData
    *
    * @return AgreementFileProperties
    */
    public function setFileData($val)
    {
        $this->_propDict["fileData"] = $val;
        return $this;
    }

    /**
    * Gets the fileName
    * Name of the agreement file (for example, TOU.pdf). Read-only.
    *
    * @return string|null The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileName
    * Name of the agreement file (for example, TOU.pdf). Read-only.
    *
    * @param string $val The fileName
    *
    * @return AgreementFileProperties
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }

    /**
    * Gets the isDefault
    * If none of the languages matches the client preference, indicates whether this is the default agreement file . If none of the files are marked as default, the first one is treated as the default. Read-only.
    *
    * @return bool|null The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefault
    * If none of the languages matches the client preference, indicates whether this is the default agreement file . If none of the files are marked as default, the first one is treated as the default. Read-only.
    *
    * @param bool $val The isDefault
    *
    * @return AgreementFileProperties
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMajorVersion
    * Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language.
    *
    * @return bool|null The isMajorVersion
    */
    public function getIsMajorVersion()
    {
        if (array_key_exists("isMajorVersion", $this->_propDict)) {
            return $this->_propDict["isMajorVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMajorVersion
    * Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language.
    *
    * @param bool $val The isMajorVersion
    *
    * @return AgreementFileProperties
    */
    public function setIsMajorVersion($val)
    {
        $this->_propDict["isMajorVersion"] = boolval($val);
        return $this;
    }

    /**
    * Gets the language
    * The language of the agreement file in the format 'languagecode2-country/regioncode2'. 'languagecode2' is a lowercase two-letter code derived from ISO 639-1, while 'country/regioncode2' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only.
    *
    * @return string|null The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    * The language of the agreement file in the format 'languagecode2-country/regioncode2'. 'languagecode2' is a lowercase two-letter code derived from ISO 639-1, while 'country/regioncode2' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only.
    *
    * @param string $val The language
    *
    * @return AgreementFileProperties
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }

}
