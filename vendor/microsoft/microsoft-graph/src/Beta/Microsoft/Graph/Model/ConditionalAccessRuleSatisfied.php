<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessRuleSatisfied File
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
* ConditionalAccessRuleSatisfied class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessRuleSatisfied extends Entity
{

    /**
    * Gets the conditionalAccessCondition
    * Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client, ipAddressSeenByAzureAD, ipAddressSeenByResourceProvider, unknownFutureValue, servicePrincipals, servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals, servicePrincipalRisk.
    *
    * @return ConditionalAccessConditions|null The conditionalAccessCondition
    */
    public function getConditionalAccessCondition()
    {
        if (array_key_exists("conditionalAccessCondition", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessCondition"], "\Beta\Microsoft\Graph\Model\ConditionalAccessConditions") || is_null($this->_propDict["conditionalAccessCondition"])) {
                return $this->_propDict["conditionalAccessCondition"];
            } else {
                $this->_propDict["conditionalAccessCondition"] = new ConditionalAccessConditions($this->_propDict["conditionalAccessCondition"]);
                return $this->_propDict["conditionalAccessCondition"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionalAccessCondition
    * Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client, ipAddressSeenByAzureAD, ipAddressSeenByResourceProvider, unknownFutureValue, servicePrincipals, servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals, servicePrincipalRisk.
    *
    * @param ConditionalAccessConditions $val The value to assign to the conditionalAccessCondition
    *
    * @return ConditionalAccessRuleSatisfied The ConditionalAccessRuleSatisfied
    */
    public function setConditionalAccessCondition($val)
    {
        $this->_propDict["conditionalAccessCondition"] = $val;
         return $this;
    }

    /**
    * Gets the ruleSatisfied
    * Refers to the conditional access policy conditions that were satisfied. The possible values are: allApps, firstPartyApps, office365, appId, acr, appFilter, allUsers, guest, groupId, roleId, userId, allDevicePlatforms, devicePlatform, allLocations, insideCorpnet, allTrustedLocations, locationId, allDevices, deviceFilter, deviceState, unknownFutureValue, deviceFilterIncludeRuleNotMatched, allDeviceStates. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: deviceFilterIncludeRuleNotMatched, allDeviceStates.
    *
    * @return ConditionalAccessRule|null The ruleSatisfied
    */
    public function getRuleSatisfied()
    {
        if (array_key_exists("ruleSatisfied", $this->_propDict)) {
            if (is_a($this->_propDict["ruleSatisfied"], "\Beta\Microsoft\Graph\Model\ConditionalAccessRule") || is_null($this->_propDict["ruleSatisfied"])) {
                return $this->_propDict["ruleSatisfied"];
            } else {
                $this->_propDict["ruleSatisfied"] = new ConditionalAccessRule($this->_propDict["ruleSatisfied"]);
                return $this->_propDict["ruleSatisfied"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleSatisfied
    * Refers to the conditional access policy conditions that were satisfied. The possible values are: allApps, firstPartyApps, office365, appId, acr, appFilter, allUsers, guest, groupId, roleId, userId, allDevicePlatforms, devicePlatform, allLocations, insideCorpnet, allTrustedLocations, locationId, allDevices, deviceFilter, deviceState, unknownFutureValue, deviceFilterIncludeRuleNotMatched, allDeviceStates. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: deviceFilterIncludeRuleNotMatched, allDeviceStates.
    *
    * @param ConditionalAccessRule $val The value to assign to the ruleSatisfied
    *
    * @return ConditionalAccessRuleSatisfied The ConditionalAccessRuleSatisfied
    */
    public function setRuleSatisfied($val)
    {
        $this->_propDict["ruleSatisfied"] = $val;
         return $this;
    }
}
