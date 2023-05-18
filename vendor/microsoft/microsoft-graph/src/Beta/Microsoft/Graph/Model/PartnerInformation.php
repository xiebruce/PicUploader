<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PartnerInformation File
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
* PartnerInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PartnerInformation implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new PartnerInformation
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the PartnerInformation
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the commerceUrl
    *
    * @return string|null The commerceUrl
    */
    public function getCommerceUrl()
    {
        if (array_key_exists("commerceUrl", $this->_propDict)) {
            return $this->_propDict["commerceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the commerceUrl
    *
    * @param string $val The commerceUrl
    *
    * @return PartnerInformation
    */
    public function setCommerceUrl($val)
    {
        $this->_propDict["commerceUrl"] = $val;
        return $this;
    }

    /**
    * Gets the companyName
    *
    * @return string|null The companyName
    */
    public function getCompanyName()
    {
        if (array_key_exists("companyName", $this->_propDict)) {
            return $this->_propDict["companyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the companyName
    *
    * @param string $val The companyName
    *
    * @return PartnerInformation
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
        return $this;
    }

    /**
    * Gets the companyType
    *
    * @return PartnerTenantType|null The companyType
    */
    public function getCompanyType()
    {
        if (array_key_exists("companyType", $this->_propDict)) {
            if (is_a($this->_propDict["companyType"], "\Beta\Microsoft\Graph\Model\PartnerTenantType") || is_null($this->_propDict["companyType"])) {
                return $this->_propDict["companyType"];
            } else {
                $this->_propDict["companyType"] = new PartnerTenantType($this->_propDict["companyType"]);
                return $this->_propDict["companyType"];
            }
        }
        return null;
    }

    /**
    * Sets the companyType
    *
    * @param PartnerTenantType $val The companyType
    *
    * @return PartnerInformation
    */
    public function setCompanyType($val)
    {
        $this->_propDict["companyType"] = $val;
        return $this;
    }

    /**
    * Gets the helpUrl
    *
    * @return string|null The helpUrl
    */
    public function getHelpUrl()
    {
        if (array_key_exists("helpUrl", $this->_propDict)) {
            return $this->_propDict["helpUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the helpUrl
    *
    * @param string $val The helpUrl
    *
    * @return PartnerInformation
    */
    public function setHelpUrl($val)
    {
        $this->_propDict["helpUrl"] = $val;
        return $this;
    }

    /**
    * Gets the partnerTenantId
    *
    * @return string|null The partnerTenantId
    */
    public function getPartnerTenantId()
    {
        if (array_key_exists("partnerTenantId", $this->_propDict)) {
            return $this->_propDict["partnerTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the partnerTenantId
    *
    * @param string $val The partnerTenantId
    *
    * @return PartnerInformation
    */
    public function setPartnerTenantId($val)
    {
        $this->_propDict["partnerTenantId"] = $val;
        return $this;
    }

    /**
    * Gets the supportEmails
    *
    * @return array|null The supportEmails
    */
    public function getSupportEmails()
    {
        if (array_key_exists("supportEmails", $this->_propDict)) {
            return $this->_propDict["supportEmails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportEmails
    *
    * @param string[] $val The supportEmails
    *
    * @return PartnerInformation
    */
    public function setSupportEmails($val)
    {
        $this->_propDict["supportEmails"] = $val;
        return $this;
    }

    /**
    * Gets the supportTelephones
    *
    * @return array|null The supportTelephones
    */
    public function getSupportTelephones()
    {
        if (array_key_exists("supportTelephones", $this->_propDict)) {
            return $this->_propDict["supportTelephones"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportTelephones
    *
    * @param string[] $val The supportTelephones
    *
    * @return PartnerInformation
    */
    public function setSupportTelephones($val)
    {
        $this->_propDict["supportTelephones"] = $val;
        return $this;
    }

    /**
    * Gets the supportUrl
    *
    * @return string|null The supportUrl
    */
    public function getSupportUrl()
    {
        if (array_key_exists("supportUrl", $this->_propDict)) {
            return $this->_propDict["supportUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportUrl
    *
    * @param string $val The supportUrl
    *
    * @return PartnerInformation
    */
    public function setSupportUrl($val)
    {
        $this->_propDict["supportUrl"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return PartnerInformation
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
