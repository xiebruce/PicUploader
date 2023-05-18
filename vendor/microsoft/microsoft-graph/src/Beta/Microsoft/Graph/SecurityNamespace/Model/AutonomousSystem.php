<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutonomousSystem File
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
* AutonomousSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AutonomousSystem extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the name
    * The name of the autonomous system.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The name of the autonomous system.
    *
    * @param string $val The value of the name
    *
    * @return AutonomousSystem
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the number
    * The autonomous system number, assigned by IANA.
    *
    * @return int|null The number
    */
    public function getNumber()
    {
        if (array_key_exists("number", $this->_propDict)) {
            return $this->_propDict["number"];
        } else {
            return null;
        }
    }

    /**
    * Sets the number
    * The autonomous system number, assigned by IANA.
    *
    * @param int $val The value of the number
    *
    * @return AutonomousSystem
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    /**
    * Gets the organization
    * The name of the autonomous system organization.
    *
    * @return string|null The organization
    */
    public function getOrganization()
    {
        if (array_key_exists("organization", $this->_propDict)) {
            return $this->_propDict["organization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organization
    * The name of the autonomous system organization.
    *
    * @param string $val The value of the organization
    *
    * @return AutonomousSystem
    */
    public function setOrganization($val)
    {
        $this->_propDict["organization"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * A displayable value for these autonomous system details.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * A displayable value for these autonomous system details.
    *
    * @param string $val The value of the value
    *
    * @return AutonomousSystem
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
