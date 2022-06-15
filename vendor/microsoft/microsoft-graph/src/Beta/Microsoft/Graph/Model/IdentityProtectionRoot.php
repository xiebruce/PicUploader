<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityProtectionRoot File
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
* IdentityProtectionRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityProtectionRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new IdentityProtectionRoot
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
    * Gets the property dictionary of the IdentityProtectionRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the riskDetections
    * Risk detection in Azure AD Identity Protection and the associated information about the detection.
     *
     * @return array|null The riskDetections
     */
    public function getRiskDetections()
    {
        if (array_key_exists("riskDetections", $this->_propDict)) {
           return $this->_propDict["riskDetections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskDetections
    * Risk detection in Azure AD Identity Protection and the associated information about the detection.
    *
    * @param RiskDetection[] $val The riskDetections
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskDetections($val)
    {
        $this->_propDict["riskDetections"] = $val;
        return $this;
    }


     /**
     * Gets the riskyServicePrincipals
    * Azure AD service principals that are at risk.
     *
     * @return array|null The riskyServicePrincipals
     */
    public function getRiskyServicePrincipals()
    {
        if (array_key_exists("riskyServicePrincipals", $this->_propDict)) {
           return $this->_propDict["riskyServicePrincipals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskyServicePrincipals
    * Azure AD service principals that are at risk.
    *
    * @param RiskyServicePrincipal[] $val The riskyServicePrincipals
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskyServicePrincipals($val)
    {
        $this->_propDict["riskyServicePrincipals"] = $val;
        return $this;
    }


     /**
     * Gets the riskyUsers
    * Users that are flagged as at-risk by Azure AD Identity Protection.
     *
     * @return array|null The riskyUsers
     */
    public function getRiskyUsers()
    {
        if (array_key_exists("riskyUsers", $this->_propDict)) {
           return $this->_propDict["riskyUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskyUsers
    * Users that are flagged as at-risk by Azure AD Identity Protection.
    *
    * @param RiskyUser[] $val The riskyUsers
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskyUsers($val)
    {
        $this->_propDict["riskyUsers"] = $val;
        return $this;
    }


     /**
     * Gets the servicePrincipalRiskDetections
    * Represents information about detected at-risk service principals in an Azure AD tenant.
     *
     * @return array|null The servicePrincipalRiskDetections
     */
    public function getServicePrincipalRiskDetections()
    {
        if (array_key_exists("servicePrincipalRiskDetections", $this->_propDict)) {
           return $this->_propDict["servicePrincipalRiskDetections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalRiskDetections
    * Represents information about detected at-risk service principals in an Azure AD tenant.
    *
    * @param ServicePrincipalRiskDetection[] $val The servicePrincipalRiskDetections
    *
    * @return IdentityProtectionRoot
    */
    public function setServicePrincipalRiskDetections($val)
    {
        $this->_propDict["servicePrincipalRiskDetections"] = $val;
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
    * @return IdentityProtectionRoot
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
    public function jsonSerialize(): array
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
