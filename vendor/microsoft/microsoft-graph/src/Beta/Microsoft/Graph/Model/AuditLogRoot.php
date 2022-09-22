<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditLogRoot File
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
* AuditLogRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditLogRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new AuditLogRoot
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
    * Gets the property dictionary of the AuditLogRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the directoryAudits
     *
     * @return array|null The directoryAudits
     */
    public function getDirectoryAudits()
    {
        if (array_key_exists("directoryAudits", $this->_propDict)) {
           return $this->_propDict["directoryAudits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the directoryAudits
    *
    * @param DirectoryAudit[] $val The directoryAudits
    *
    * @return AuditLogRoot
    */
    public function setDirectoryAudits($val)
    {
        $this->_propDict["directoryAudits"] = $val;
        return $this;
    }


     /**
     * Gets the directoryProvisioning
     *
     * @return array|null The directoryProvisioning
     */
    public function getDirectoryProvisioning()
    {
        if (array_key_exists("directoryProvisioning", $this->_propDict)) {
           return $this->_propDict["directoryProvisioning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the directoryProvisioning
    *
    * @param ProvisioningObjectSummary[] $val The directoryProvisioning
    *
    * @return AuditLogRoot
    */
    public function setDirectoryProvisioning($val)
    {
        $this->_propDict["directoryProvisioning"] = $val;
        return $this;
    }


     /**
     * Gets the provisioning
     *
     * @return array|null The provisioning
     */
    public function getProvisioning()
    {
        if (array_key_exists("provisioning", $this->_propDict)) {
           return $this->_propDict["provisioning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provisioning
    *
    * @param ProvisioningObjectSummary[] $val The provisioning
    *
    * @return AuditLogRoot
    */
    public function setProvisioning($val)
    {
        $this->_propDict["provisioning"] = $val;
        return $this;
    }


     /**
     * Gets the signIns
     *
     * @return array|null The signIns
     */
    public function getSignIns()
    {
        if (array_key_exists("signIns", $this->_propDict)) {
           return $this->_propDict["signIns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signIns
    *
    * @param SignIn[] $val The signIns
    *
    * @return AuditLogRoot
    */
    public function setSignIns($val)
    {
        $this->_propDict["signIns"] = $val;
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
    * @return AuditLogRoot
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
            }
        }
        return $serializableProperties;
    }
}
