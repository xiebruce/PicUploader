<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionCalloutInstance File
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
* CustomExtensionCalloutInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionCalloutInstance extends Entity
{
    /**
    * Gets the customExtensionId
    * Identification of the custom extension that was triggered at this instance.
    *
    * @return string|null The customExtensionId
    */
    public function getCustomExtensionId()
    {
        if (array_key_exists("customExtensionId", $this->_propDict)) {
            return $this->_propDict["customExtensionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionId
    * Identification of the custom extension that was triggered at this instance.
    *
    * @param string $val The value of the customExtensionId
    *
    * @return CustomExtensionCalloutInstance
    */
    public function setCustomExtensionId($val)
    {
        $this->_propDict["customExtensionId"] = $val;
        return $this;
    }
    /**
    * Gets the detail
    * Details provided by the logic app during the callback of the request instance.
    *
    * @return string|null The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            return $this->_propDict["detail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detail
    * Details provided by the logic app during the callback of the request instance.
    *
    * @param string $val The value of the detail
    *
    * @return CustomExtensionCalloutInstance
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }
    /**
    * Gets the externalCorrelationId
    * The unique run identifier for the logic app.
    *
    * @return string|null The externalCorrelationId
    */
    public function getExternalCorrelationId()
    {
        if (array_key_exists("externalCorrelationId", $this->_propDict)) {
            return $this->_propDict["externalCorrelationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalCorrelationId
    * The unique run identifier for the logic app.
    *
    * @param string $val The value of the externalCorrelationId
    *
    * @return CustomExtensionCalloutInstance
    */
    public function setExternalCorrelationId($val)
    {
        $this->_propDict["externalCorrelationId"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Unique identifier for the callout instance. Read-only.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique identifier for the callout instance. Read-only.
    *
    * @param string $val The value of the id
    *
    * @return CustomExtensionCalloutInstance
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the request to the custom extension. The possible values are: calloutSent, callbackReceived, calloutFailed, callbackTimedOut, waitingForCallback, unknownFutureValue.
    *
    * @return CustomExtensionCalloutInstanceStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CustomExtensionCalloutInstanceStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CustomExtensionCalloutInstanceStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the request to the custom extension. The possible values are: calloutSent, callbackReceived, calloutFailed, callbackTimedOut, waitingForCallback, unknownFutureValue.
    *
    * @param CustomExtensionCalloutInstanceStatus $val The value to assign to the status
    *
    * @return CustomExtensionCalloutInstance The CustomExtensionCalloutInstance
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
