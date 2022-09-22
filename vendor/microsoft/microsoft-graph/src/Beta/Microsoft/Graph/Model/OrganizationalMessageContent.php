<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageContent File
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
* OrganizationalMessageContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageContent extends Entity
{
    /**
    * Gets the guidedContentId
    * The ID of the guided content that this content is using
    *
    * @return string|null The guidedContentId
    */
    public function getGuidedContentId()
    {
        if (array_key_exists("guidedContentId", $this->_propDict)) {
            return $this->_propDict["guidedContentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the guidedContentId
    * The ID of the guided content that this content is using
    *
    * @param string $val The value of the guidedContentId
    *
    * @return OrganizationalMessageContent
    */
    public function setGuidedContentId($val)
    {
        $this->_propDict["guidedContentId"] = $val;
        return $this;
    }

    /**
    * Gets the logoInfo
    * The logo that will be displayed to the clients. This will contain ether the binary contents of the logo or a url to the logo's location
    *
    * @return OrganizationalMessageLogo|null The logoInfo
    */
    public function getLogoInfo()
    {
        if (array_key_exists("logoInfo", $this->_propDict)) {
            if (is_a($this->_propDict["logoInfo"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageLogo") || is_null($this->_propDict["logoInfo"])) {
                return $this->_propDict["logoInfo"];
            } else {
                $this->_propDict["logoInfo"] = new OrganizationalMessageLogo($this->_propDict["logoInfo"]);
                return $this->_propDict["logoInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the logoInfo
    * The logo that will be displayed to the clients. This will contain ether the binary contents of the logo or a url to the logo's location
    *
    * @param OrganizationalMessageLogo $val The value to assign to the logoInfo
    *
    * @return OrganizationalMessageContent The OrganizationalMessageContent
    */
    public function setLogoInfo($val)
    {
        $this->_propDict["logoInfo"] = $val;
         return $this;
    }

    /**
    * Gets the placementDetails
    * Contains the different types of text content that can be displayed to customers along with their localized values
    *
    * @return OrganizationalMessagePlacementDetail|null The placementDetails
    */
    public function getPlacementDetails()
    {
        if (array_key_exists("placementDetails", $this->_propDict)) {
            if (is_a($this->_propDict["placementDetails"], "\Beta\Microsoft\Graph\Model\OrganizationalMessagePlacementDetail") || is_null($this->_propDict["placementDetails"])) {
                return $this->_propDict["placementDetails"];
            } else {
                $this->_propDict["placementDetails"] = new OrganizationalMessagePlacementDetail($this->_propDict["placementDetails"]);
                return $this->_propDict["placementDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the placementDetails
    * Contains the different types of text content that can be displayed to customers along with their localized values
    *
    * @param OrganizationalMessagePlacementDetail $val The value to assign to the placementDetails
    *
    * @return OrganizationalMessageContent The OrganizationalMessageContent
    */
    public function setPlacementDetails($val)
    {
        $this->_propDict["placementDetails"] = $val;
         return $this;
    }
}
