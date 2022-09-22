<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalActivity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

/**
* ExternalActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalActivity extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the startDateTime
    * When the particular activity occurred.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * When the particular activity occurred.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return ExternalActivity
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of activity performed. The possible values are: viewed, modified, created, commented, unknownFutureValue.
    *
    * @return ExternalActivityType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ExternalActivityType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new ExternalActivityType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of activity performed. The possible values are: viewed, modified, created, commented, unknownFutureValue.
    *
    * @param ExternalActivityType $val The type
    *
    * @return ExternalActivity
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the performedBy
    * Represents an identity used to identify who is responsible for the activity.
    *
    * @return Identity|null The performedBy
    */
    public function getPerformedBy()
    {
        if (array_key_exists("performedBy", $this->_propDict)) {
            if (is_a($this->_propDict["performedBy"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\Identity") || is_null($this->_propDict["performedBy"])) {
                return $this->_propDict["performedBy"];
            } else {
                $this->_propDict["performedBy"] = new Identity($this->_propDict["performedBy"]);
                return $this->_propDict["performedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the performedBy
    * Represents an identity used to identify who is responsible for the activity.
    *
    * @param Identity $val The performedBy
    *
    * @return ExternalActivity
    */
    public function setPerformedBy($val)
    {
        $this->_propDict["performedBy"] = $val;
        return $this;
    }

}
