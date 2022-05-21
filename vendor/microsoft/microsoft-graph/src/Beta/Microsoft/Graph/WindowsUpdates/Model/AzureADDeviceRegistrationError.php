<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureADDeviceRegistrationError File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* AzureADDeviceRegistrationError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureADDeviceRegistrationError extends UpdatableAssetError
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.windowsUpdates.azureADDeviceRegistrationError");
    }


    /**
    * Gets the reason
    * The reason why the registration encountered an error. Possible values are: invalidGlobalDeviceId, invalidAzureADDeviceId, missingTrustType, invalidAzureADJoin, unknownFutureValue.
    *
    * @return AzureADDeviceRegistrationErrorReason|null The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            if (is_a($this->_propDict["reason"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\AzureADDeviceRegistrationErrorReason") || is_null($this->_propDict["reason"])) {
                return $this->_propDict["reason"];
            } else {
                $this->_propDict["reason"] = new AzureADDeviceRegistrationErrorReason($this->_propDict["reason"]);
                return $this->_propDict["reason"];
            }
        }
        return null;
    }

    /**
    * Sets the reason
    * The reason why the registration encountered an error. Possible values are: invalidGlobalDeviceId, invalidAzureADDeviceId, missingTrustType, invalidAzureADJoin, unknownFutureValue.
    *
    * @param AzureADDeviceRegistrationErrorReason $val The value to assign to the reason
    *
    * @return AzureADDeviceRegistrationError The AzureADDeviceRegistrationError
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
         return $this;
    }
}
