<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalIdentitiesPolicy File
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
* ExternalIdentitiesPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalIdentitiesPolicy extends PolicyBase
{
    /**
    * Gets the allowDeletedIdentitiesDataRemoval
    *
    * @return bool|null The allowDeletedIdentitiesDataRemoval
    */
    public function getAllowDeletedIdentitiesDataRemoval()
    {
        if (array_key_exists("allowDeletedIdentitiesDataRemoval", $this->_propDict)) {
            return $this->_propDict["allowDeletedIdentitiesDataRemoval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeletedIdentitiesDataRemoval
    *
    * @param bool $val The allowDeletedIdentitiesDataRemoval
    *
    * @return ExternalIdentitiesPolicy
    */
    public function setAllowDeletedIdentitiesDataRemoval($val)
    {
        $this->_propDict["allowDeletedIdentitiesDataRemoval"] = boolval($val);
        return $this;
    }

    /**
    * Gets the allowExternalIdentitiesToLeave
    *
    * @return bool|null The allowExternalIdentitiesToLeave
    */
    public function getAllowExternalIdentitiesToLeave()
    {
        if (array_key_exists("allowExternalIdentitiesToLeave", $this->_propDict)) {
            return $this->_propDict["allowExternalIdentitiesToLeave"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowExternalIdentitiesToLeave
    *
    * @param bool $val The allowExternalIdentitiesToLeave
    *
    * @return ExternalIdentitiesPolicy
    */
    public function setAllowExternalIdentitiesToLeave($val)
    {
        $this->_propDict["allowExternalIdentitiesToLeave"] = boolval($val);
        return $this;
    }

}
