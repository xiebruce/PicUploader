<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAnswerChoice File
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
* AccessPackageAnswerChoice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAnswerChoice extends Entity
{
    /**
    * Gets the actualValue
    * The actual value of the selected choice. This is typically a string value which is understandable by applications. Required.
    *
    * @return string|null The actualValue
    */
    public function getActualValue()
    {
        if (array_key_exists("actualValue", $this->_propDict)) {
            return $this->_propDict["actualValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actualValue
    * The actual value of the selected choice. This is typically a string value which is understandable by applications. Required.
    *
    * @param string $val The value of the actualValue
    *
    * @return AccessPackageAnswerChoice
    */
    public function setActualValue($val)
    {
        $this->_propDict["actualValue"] = $val;
        return $this;
    }

    /**
    * Gets the localizations
    * The text of the answer choice represented in a format for a specific locale.
    *
    * @return AccessPackageLocalizedText|null The localizations
    */
    public function getLocalizations()
    {
        if (array_key_exists("localizations", $this->_propDict)) {
            if (is_a($this->_propDict["localizations"], "\Microsoft\Graph\Model\AccessPackageLocalizedText") || is_null($this->_propDict["localizations"])) {
                return $this->_propDict["localizations"];
            } else {
                $this->_propDict["localizations"] = new AccessPackageLocalizedText($this->_propDict["localizations"]);
                return $this->_propDict["localizations"];
            }
        }
        return null;
    }

    /**
    * Sets the localizations
    * The text of the answer choice represented in a format for a specific locale.
    *
    * @param AccessPackageLocalizedText $val The value to assign to the localizations
    *
    * @return AccessPackageAnswerChoice The AccessPackageAnswerChoice
    */
    public function setLocalizations($val)
    {
        $this->_propDict["localizations"] = $val;
         return $this;
    }
    /**
    * Gets the text
    *
    * @return string|null The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }

    /**
    * Sets the text
    *
    * @param string $val The value of the text
    *
    * @return AccessPackageAnswerChoice
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
}
