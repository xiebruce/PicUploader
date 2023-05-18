<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferenceDefinition File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* ReferenceDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReferenceDefinition extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the code
    * The code value for the definition that must be unique within the referenceType.
    *
    * @return string|null The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    * The code value for the definition that must be unique within the referenceType.
    *
    * @param string $val The code
    *
    * @return ReferenceDefinition
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the definition was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time when the definition was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ReferenceDefinition
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the isDisabled
    * Indicates whether the definition has been disabled.
    *
    * @return bool|null The isDisabled
    */
    public function getIsDisabled()
    {
        if (array_key_exists("isDisabled", $this->_propDict)) {
            return $this->_propDict["isDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDisabled
    * Indicates whether the definition has been disabled.
    *
    * @param bool $val The isDisabled
    *
    * @return ReferenceDefinition
    */
    public function setIsDisabled($val)
    {
        $this->_propDict["isDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the definition was most recently changed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date and time when the definition was most recently changed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ReferenceDefinition
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the referenceType
    * The categorical type for a collection of enumerated values.
    *
    * @return string|null The referenceType
    */
    public function getReferenceType()
    {
        if (array_key_exists("referenceType", $this->_propDict)) {
            return $this->_propDict["referenceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referenceType
    * The categorical type for a collection of enumerated values.
    *
    * @param string $val The referenceType
    *
    * @return ReferenceDefinition
    */
    public function setReferenceType($val)
    {
        $this->_propDict["referenceType"] = $val;
        return $this;
    }

    /**
    * Gets the sortIndex
    * The ordering index to present the definitions within a type consistently in user interfaces.
    *
    * @return int|null The sortIndex
    */
    public function getSortIndex()
    {
        if (array_key_exists("sortIndex", $this->_propDict)) {
            return $this->_propDict["sortIndex"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sortIndex
    * The ordering index to present the definitions within a type consistently in user interfaces.
    *
    * @param int $val The sortIndex
    *
    * @return ReferenceDefinition
    */
    public function setSortIndex($val)
    {
        $this->_propDict["sortIndex"] = intval($val);
        return $this;
    }

    /**
    * Gets the source
    * The standards body or organization source which defined the code.
    *
    * @return string|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            return $this->_propDict["source"];
        } else {
            return null;
        }
    }

    /**
    * Sets the source
    * The standards body or organization source which defined the code.
    *
    * @param string $val The source
    *
    * @return ReferenceDefinition
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

}
