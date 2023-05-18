<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentApplicabilitySettings File
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
* ContentApplicabilitySettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentApplicabilitySettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the offerWhileRecommendedBy
    * Offer if the update is recommended by a vendor in the list, otherwise withhold the offer.
    *
    * @return string|null The offerWhileRecommendedBy
    */
    public function getOfferWhileRecommendedBy()
    {
        if (array_key_exists("offerWhileRecommendedBy", $this->_propDict)) {
            return $this->_propDict["offerWhileRecommendedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offerWhileRecommendedBy
    * Offer if the update is recommended by a vendor in the list, otherwise withhold the offer.
    *
    * @param string $val The value of the offerWhileRecommendedBy
    *
    * @return ContentApplicabilitySettings
    */
    public function setOfferWhileRecommendedBy($val)
    {
        $this->_propDict["offerWhileRecommendedBy"] = $val;
        return $this;
    }

    /**
    * Gets the safeguard
    * Settings for governing safeguard holds on offering content.
    *
    * @return SafeguardSettings|null The safeguard
    */
    public function getSafeguard()
    {
        if (array_key_exists("safeguard", $this->_propDict)) {
            if (is_a($this->_propDict["safeguard"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\SafeguardSettings") || is_null($this->_propDict["safeguard"])) {
                return $this->_propDict["safeguard"];
            } else {
                $this->_propDict["safeguard"] = new SafeguardSettings($this->_propDict["safeguard"]);
                return $this->_propDict["safeguard"];
            }
        }
        return null;
    }

    /**
    * Sets the safeguard
    * Settings for governing safeguard holds on offering content.
    *
    * @param SafeguardSettings $val The value to assign to the safeguard
    *
    * @return ContentApplicabilitySettings The ContentApplicabilitySettings
    */
    public function setSafeguard($val)
    {
        $this->_propDict["safeguard"] = $val;
         return $this;
    }
}
