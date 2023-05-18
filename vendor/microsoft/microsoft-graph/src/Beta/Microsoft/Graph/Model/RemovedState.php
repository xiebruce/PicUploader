<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemovedState File
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
* RemovedState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemovedState extends Entity
{
    /**
    * Gets the reason
    * The removal reason for the participant resource.
    *
    * @return string|null The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            return $this->_propDict["reason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reason
    * The removal reason for the participant resource.
    *
    * @param string $val The value of the reason
    *
    * @return RemovedState
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
        return $this;
    }
}
