<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActionStep File
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
* ActionStep class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActionStep extends Entity
{

    /**
    * Gets the actionUrl
    *
    * @return ActionUrl|null The actionUrl
    */
    public function getActionUrl()
    {
        if (array_key_exists("actionUrl", $this->_propDict)) {
            if (is_a($this->_propDict["actionUrl"], "\Beta\Microsoft\Graph\Model\ActionUrl") || is_null($this->_propDict["actionUrl"])) {
                return $this->_propDict["actionUrl"];
            } else {
                $this->_propDict["actionUrl"] = new ActionUrl($this->_propDict["actionUrl"]);
                return $this->_propDict["actionUrl"];
            }
        }
        return null;
    }

    /**
    * Sets the actionUrl
    *
    * @param ActionUrl $val The value to assign to the actionUrl
    *
    * @return ActionStep The ActionStep
    */
    public function setActionUrl($val)
    {
        $this->_propDict["actionUrl"] = $val;
         return $this;
    }
    /**
    * Gets the stepNumber
    *
    * @return int|null The stepNumber
    */
    public function getStepNumber()
    {
        if (array_key_exists("stepNumber", $this->_propDict)) {
            return $this->_propDict["stepNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stepNumber
    *
    * @param int $val The value of the stepNumber
    *
    * @return ActionStep
    */
    public function setStepNumber($val)
    {
        $this->_propDict["stepNumber"] = $val;
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
    * @return ActionStep
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
}
