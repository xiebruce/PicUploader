<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddLogRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* AddLogRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AddLogRequest extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the logInformation
    *
    * @return string|null The logInformation
    */
    public function getLogInformation()
    {
        if (array_key_exists("logInformation", $this->_propDict)) {
            return $this->_propDict["logInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logInformation
    *
    * @param string $val The value of the logInformation
    *
    * @return AddLogRequest
    */
    public function setLogInformation($val)
    {
        $this->_propDict["logInformation"] = $val;
        return $this;
    }
}
