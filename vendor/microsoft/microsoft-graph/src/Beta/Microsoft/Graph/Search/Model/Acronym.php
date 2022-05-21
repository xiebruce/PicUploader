<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Acronym File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Search\Model;

/**
* Acronym class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Acronym extends SearchAnswer
{
    /**
    * Gets the standsFor
    * What the acronym stands for.
    *
    * @return string|null The standsFor
    */
    public function getStandsFor()
    {
        if (array_key_exists("standsFor", $this->_propDict)) {
            return $this->_propDict["standsFor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the standsFor
    * What the acronym stands for.
    *
    * @param string $val The standsFor
    *
    * @return Acronym
    */
    public function setStandsFor($val)
    {
        $this->_propDict["standsFor"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * State of the acronym. Possible values are: published, draft, excluded, or unknownFutureValue.
    *
    * @return AnswerState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Search\Model\AnswerState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AnswerState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * State of the acronym. Possible values are: published, draft, excluded, or unknownFutureValue.
    *
    * @param AnswerState $val The state
    *
    * @return Acronym
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

}
