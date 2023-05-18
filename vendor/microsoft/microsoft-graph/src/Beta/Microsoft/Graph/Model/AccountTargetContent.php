<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccountTargetContent File
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
* AccountTargetContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccountTargetContent extends Entity
{

    /**
    * Gets the type
    * The type of account target content. Possible values are: unknown,includeAll, addressBook,  unknownFutureValue.
    *
    * @return AccountTargetContentType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\AccountTargetContentType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AccountTargetContentType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of account target content. Possible values are: unknown,includeAll, addressBook,  unknownFutureValue.
    *
    * @param AccountTargetContentType $val The value to assign to the type
    *
    * @return AccountTargetContent The AccountTargetContent
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
