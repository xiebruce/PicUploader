<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcDomainJoinConfiguration File
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
* CloudPcDomainJoinConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcDomainJoinConfiguration extends Entity
{
    /**
    * Gets the onPremisesConnectionId
    * The Azure network connection ID that matches the virtual network IT admins want the provisioning policy to use when they create Cloud PCs. You can use this property in both domain join types: Azure AD joined or Hybrid Azure AD joined. If you enter an onPremisesConnectionId, leave regionName as empty.
    *
    * @return string|null The onPremisesConnectionId
    */
    public function getOnPremisesConnectionId()
    {
        if (array_key_exists("onPremisesConnectionId", $this->_propDict)) {
            return $this->_propDict["onPremisesConnectionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesConnectionId
    * The Azure network connection ID that matches the virtual network IT admins want the provisioning policy to use when they create Cloud PCs. You can use this property in both domain join types: Azure AD joined or Hybrid Azure AD joined. If you enter an onPremisesConnectionId, leave regionName as empty.
    *
    * @param string $val The value of the onPremisesConnectionId
    *
    * @return CloudPcDomainJoinConfiguration
    */
    public function setOnPremisesConnectionId($val)
    {
        $this->_propDict["onPremisesConnectionId"] = $val;
        return $this;
    }

    /**
    * Gets the regionGroup
    * The logical geographic group this region belongs to. Multiple regions can belong to one region group. A customer can select a regionGroup when provisioning a Cloud PC, and the Cloud PC will be put in one of the regions in the group based on resource status. For example, the Europe region group contains the Northern Europe and Western Europe regions. Possible values are: default, australia, canada, usCentral, usEast, usWest, france, germany, europeUnion, unitedKingdom, japan, asia, india, southAmerica, euap, usGovernment, usGovernmentDOD, unknownFutureValue, norway, switzerland, and southKorea. Read-only.
    *
    * @return CloudPcRegionGroup|null The regionGroup
    */
    public function getRegionGroup()
    {
        if (array_key_exists("regionGroup", $this->_propDict)) {
            if (is_a($this->_propDict["regionGroup"], "\Beta\Microsoft\Graph\Model\CloudPcRegionGroup") || is_null($this->_propDict["regionGroup"])) {
                return $this->_propDict["regionGroup"];
            } else {
                $this->_propDict["regionGroup"] = new CloudPcRegionGroup($this->_propDict["regionGroup"]);
                return $this->_propDict["regionGroup"];
            }
        }
        return null;
    }

    /**
    * Sets the regionGroup
    * The logical geographic group this region belongs to. Multiple regions can belong to one region group. A customer can select a regionGroup when provisioning a Cloud PC, and the Cloud PC will be put in one of the regions in the group based on resource status. For example, the Europe region group contains the Northern Europe and Western Europe regions. Possible values are: default, australia, canada, usCentral, usEast, usWest, france, germany, europeUnion, unitedKingdom, japan, asia, india, southAmerica, euap, usGovernment, usGovernmentDOD, unknownFutureValue, norway, switzerland, and southKorea. Read-only.
    *
    * @param CloudPcRegionGroup $val The value to assign to the regionGroup
    *
    * @return CloudPcDomainJoinConfiguration The CloudPcDomainJoinConfiguration
    */
    public function setRegionGroup($val)
    {
        $this->_propDict["regionGroup"] = $val;
         return $this;
    }
    /**
    * Gets the regionName
    * The supported Azure region where the IT admin wants the provisioning policy to create Cloud PCs. The underlying virtual network will be created and managed by the Windows 365 service. This can only be entered if the IT admin chooses Azure AD joined as the domain join type. If you enter a regionName, leave onPremisesConnectionId as empty.
    *
    * @return string|null The regionName
    */
    public function getRegionName()
    {
        if (array_key_exists("regionName", $this->_propDict)) {
            return $this->_propDict["regionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the regionName
    * The supported Azure region where the IT admin wants the provisioning policy to create Cloud PCs. The underlying virtual network will be created and managed by the Windows 365 service. This can only be entered if the IT admin chooses Azure AD joined as the domain join type. If you enter a regionName, leave onPremisesConnectionId as empty.
    *
    * @param string $val The value of the regionName
    *
    * @return CloudPcDomainJoinConfiguration
    */
    public function setRegionName($val)
    {
        $this->_propDict["regionName"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * Specifies how the provisioned Cloud PC will be joined to Azure AD. If you choose the hybridAzureADJoin type, only provide a value for the onPremisesConnectionId property and leave regionName as empty. If you choose the azureADJoin type, provide a value for either onPremisesConnectionId or regionName. The possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
    *
    * @return CloudPcDomainJoinType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\CloudPcDomainJoinType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new CloudPcDomainJoinType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Specifies how the provisioned Cloud PC will be joined to Azure AD. If you choose the hybridAzureADJoin type, only provide a value for the onPremisesConnectionId property and leave regionName as empty. If you choose the azureADJoin type, provide a value for either onPremisesConnectionId or regionName. The possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
    *
    * @param CloudPcDomainJoinType $val The value to assign to the type
    *
    * @return CloudPcDomainJoinConfiguration The CloudPcDomainJoinConfiguration
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
