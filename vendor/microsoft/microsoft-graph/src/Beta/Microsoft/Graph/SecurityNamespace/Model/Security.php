<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Security File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* Security class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Security extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the informationProtection
    *
    * @return InformationProtection|null The informationProtection
    */
    public function getInformationProtection()
    {
        if (array_key_exists("informationProtection", $this->_propDict)) {
            if (is_a($this->_propDict["informationProtection"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\InformationProtection") || is_null($this->_propDict["informationProtection"])) {
                return $this->_propDict["informationProtection"];
            } else {
                $this->_propDict["informationProtection"] = new InformationProtection($this->_propDict["informationProtection"]);
                return $this->_propDict["informationProtection"];
            }
        }
        return null;
    }

    /**
    * Sets the informationProtection
    *
    * @param InformationProtection $val The informationProtection
    *
    * @return Security
    */
    public function setInformationProtection($val)
    {
        $this->_propDict["informationProtection"] = $val;
        return $this;
    }

}
