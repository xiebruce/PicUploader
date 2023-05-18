<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IntelligenceProfileSponsorState File
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
* IntelligenceProfileSponsorState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IntelligenceProfileSponsorState extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the code
    * A codified representation for this sponsor state.
    *
    * @return string|null The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    * A codified representation for this sponsor state.
    *
    * @param string $val The value of the code
    *
    * @return IntelligenceProfileSponsorState
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    /**
    * Gets the label
    * A display label for this sponsor state.
    *
    * @return string|null The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }

    /**
    * Sets the label
    * A display label for this sponsor state.
    *
    * @param string $val The value of the label
    *
    * @return IntelligenceProfileSponsorState
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }
}
