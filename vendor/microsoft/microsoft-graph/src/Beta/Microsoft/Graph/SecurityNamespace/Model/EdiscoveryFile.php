<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryFile File
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
* EdiscoveryFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryFile extends File
{
    /**
    * Gets the custodian
    * Custodians associated with the file.
    *
    * @return EdiscoveryCustodian|null The custodian
    */
    public function getCustodian()
    {
        if (array_key_exists("custodian", $this->_propDict)) {
            if (is_a($this->_propDict["custodian"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryCustodian") || is_null($this->_propDict["custodian"])) {
                return $this->_propDict["custodian"];
            } else {
                $this->_propDict["custodian"] = new EdiscoveryCustodian($this->_propDict["custodian"]);
                return $this->_propDict["custodian"];
            }
        }
        return null;
    }

    /**
    * Sets the custodian
    * Custodians associated with the file.
    *
    * @param EdiscoveryCustodian $val The custodian
    *
    * @return EdiscoveryFile
    */
    public function setCustodian($val)
    {
        $this->_propDict["custodian"] = $val;
        return $this;
    }


     /**
     * Gets the tags
    * Tags associated with the file.
     *
     * @return array|null The tags
     */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
           return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    * Tags associated with the file.
    *
    * @param EdiscoveryReviewTag[] $val The tags
    *
    * @return EdiscoveryFile
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

}
