<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiedPublisher File
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
* VerifiedPublisher class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiedPublisher extends Entity
{

    /**
    * Gets the addedDateTime
    * The timestamp when the verified publisher was first added or most recently updated.
    *
    * @return \DateTime|null The addedDateTime
    */
    public function getAddedDateTime()
    {
        if (array_key_exists("addedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["addedDateTime"], "\DateTime") || is_null($this->_propDict["addedDateTime"])) {
                return $this->_propDict["addedDateTime"];
            } else {
                $this->_propDict["addedDateTime"] = new \DateTime($this->_propDict["addedDateTime"]);
                return $this->_propDict["addedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the addedDateTime
    * The timestamp when the verified publisher was first added or most recently updated.
    *
    * @param \DateTime $val The value to assign to the addedDateTime
    *
    * @return VerifiedPublisher The VerifiedPublisher
    */
    public function setAddedDateTime($val)
    {
        $this->_propDict["addedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * The verified publisher name from the app publisher's Partner Center account.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The verified publisher name from the app publisher's Partner Center account.
    *
    * @param string $val The value of the displayName
    *
    * @return VerifiedPublisher
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the verifiedPublisherId
    * The ID of the verified publisher from the app publisher's Partner Center account.
    *
    * @return string|null The verifiedPublisherId
    */
    public function getVerifiedPublisherId()
    {
        if (array_key_exists("verifiedPublisherId", $this->_propDict)) {
            return $this->_propDict["verifiedPublisherId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the verifiedPublisherId
    * The ID of the verified publisher from the app publisher's Partner Center account.
    *
    * @param string $val The value of the verifiedPublisherId
    *
    * @return VerifiedPublisher
    */
    public function setVerifiedPublisherId($val)
    {
        $this->_propDict["verifiedPublisherId"] = $val;
        return $this;
    }
}
