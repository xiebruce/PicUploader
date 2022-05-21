<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SigningCertificateUpdateStatus File
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
* SigningCertificateUpdateStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SigningCertificateUpdateStatus extends Entity
{
    /**
    * Gets the certificateUpdateResult
    * Status of the last certificate update. Read-only. For a list of statuses, see certificateUpdateResult status.
    *
    * @return string|null The certificateUpdateResult
    */
    public function getCertificateUpdateResult()
    {
        if (array_key_exists("certificateUpdateResult", $this->_propDict)) {
            return $this->_propDict["certificateUpdateResult"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateUpdateResult
    * Status of the last certificate update. Read-only. For a list of statuses, see certificateUpdateResult status.
    *
    * @param string $val The value of the certificateUpdateResult
    *
    * @return SigningCertificateUpdateStatus
    */
    public function setCertificateUpdateResult($val)
    {
        $this->_propDict["certificateUpdateResult"] = $val;
        return $this;
    }

    /**
    * Gets the lastRunDateTime
    * Date and time in ISO 8601 format and in UTC time when the certificate was last updated. Read-only.
    *
    * @return \DateTime|null The lastRunDateTime
    */
    public function getLastRunDateTime()
    {
        if (array_key_exists("lastRunDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRunDateTime"], "\DateTime") || is_null($this->_propDict["lastRunDateTime"])) {
                return $this->_propDict["lastRunDateTime"];
            } else {
                $this->_propDict["lastRunDateTime"] = new \DateTime($this->_propDict["lastRunDateTime"]);
                return $this->_propDict["lastRunDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRunDateTime
    * Date and time in ISO 8601 format and in UTC time when the certificate was last updated. Read-only.
    *
    * @param \DateTime $val The value to assign to the lastRunDateTime
    *
    * @return SigningCertificateUpdateStatus The SigningCertificateUpdateStatus
    */
    public function setLastRunDateTime($val)
    {
        $this->_propDict["lastRunDateTime"] = $val;
         return $this;
    }
}
