<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomTaskExtensionCallbackData File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;
/**
* CustomTaskExtensionCallbackData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomTaskExtensionCallbackData extends \Beta\Microsoft\Graph\Model\CustomExtensionData
{

    /**
    * Gets the operationStatus
    * Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
    *
    * @return CustomTaskExtensionOperationStatus|null The operationStatus
    */
    public function getOperationStatus()
    {
        if (array_key_exists("operationStatus", $this->_propDict)) {
            if (is_a($this->_propDict["operationStatus"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\CustomTaskExtensionOperationStatus") || is_null($this->_propDict["operationStatus"])) {
                return $this->_propDict["operationStatus"];
            } else {
                $this->_propDict["operationStatus"] = new CustomTaskExtensionOperationStatus($this->_propDict["operationStatus"]);
                return $this->_propDict["operationStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the operationStatus
    * Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
    *
    * @param CustomTaskExtensionOperationStatus $val The value to assign to the operationStatus
    *
    * @return CustomTaskExtensionCallbackData The CustomTaskExtensionCallbackData
    */
    public function setOperationStatus($val)
    {
        $this->_propDict["operationStatus"] = $val;
         return $this;
    }
}
