<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessagePlacementDetail File
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
* OrganizationalMessagePlacementDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessagePlacementDetail extends Entity
{

    /**
    * Gets the placement
    * Indicates the name of the placement. Possible values are: default, card0, card1, card2, card3, unknownFutureValue.
    *
    * @return OrganizationalMessagePlacement|null The placement
    */
    public function getPlacement()
    {
        if (array_key_exists("placement", $this->_propDict)) {
            if (is_a($this->_propDict["placement"], "\Beta\Microsoft\Graph\Model\OrganizationalMessagePlacement") || is_null($this->_propDict["placement"])) {
                return $this->_propDict["placement"];
            } else {
                $this->_propDict["placement"] = new OrganizationalMessagePlacement($this->_propDict["placement"]);
                return $this->_propDict["placement"];
            }
        }
        return null;
    }

    /**
    * Sets the placement
    * Indicates the name of the placement. Possible values are: default, card0, card1, card2, card3, unknownFutureValue.
    *
    * @param OrganizationalMessagePlacement $val The value to assign to the placement
    *
    * @return OrganizationalMessagePlacementDetail The OrganizationalMessagePlacementDetail
    */
    public function setPlacement($val)
    {
        $this->_propDict["placement"] = $val;
         return $this;
    }

    /**
    * Gets the variants
    * The list of different variants that can be displayed for this placement
    *
    * @return OrganizationalMessageVariant|null The variants
    */
    public function getVariants()
    {
        if (array_key_exists("variants", $this->_propDict)) {
            if (is_a($this->_propDict["variants"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageVariant") || is_null($this->_propDict["variants"])) {
                return $this->_propDict["variants"];
            } else {
                $this->_propDict["variants"] = new OrganizationalMessageVariant($this->_propDict["variants"]);
                return $this->_propDict["variants"];
            }
        }
        return null;
    }

    /**
    * Sets the variants
    * The list of different variants that can be displayed for this placement
    *
    * @param OrganizationalMessageVariant $val The value to assign to the variants
    *
    * @return OrganizationalMessagePlacementDetail The OrganizationalMessagePlacementDetail
    */
    public function setVariants($val)
    {
        $this->_propDict["variants"] = $val;
         return $this;
    }
}
