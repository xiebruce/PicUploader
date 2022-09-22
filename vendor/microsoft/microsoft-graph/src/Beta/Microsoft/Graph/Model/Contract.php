<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Contract File
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
* Contract class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Contract extends DirectoryObject
{
    /**
    * Gets the contractType
    *
    * @return string|null The contractType
    */
    public function getContractType()
    {
        if (array_key_exists("contractType", $this->_propDict)) {
            return $this->_propDict["contractType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contractType
    *
    * @param string $val The contractType
    *
    * @return Contract
    */
    public function setContractType($val)
    {
        $this->_propDict["contractType"] = $val;
        return $this;
    }

    /**
    * Gets the customerId
    *
    * @return string|null The customerId
    */
    public function getCustomerId()
    {
        if (array_key_exists("customerId", $this->_propDict)) {
            return $this->_propDict["customerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customerId
    *
    * @param string $val The customerId
    *
    * @return Contract
    */
    public function setCustomerId($val)
    {
        $this->_propDict["customerId"] = $val;
        return $this;
    }

    /**
    * Gets the defaultDomainName
    *
    * @return string|null The defaultDomainName
    */
    public function getDefaultDomainName()
    {
        if (array_key_exists("defaultDomainName", $this->_propDict)) {
            return $this->_propDict["defaultDomainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultDomainName
    *
    * @param string $val The defaultDomainName
    *
    * @return Contract
    */
    public function setDefaultDomainName($val)
    {
        $this->_propDict["defaultDomainName"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Contract
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

}
