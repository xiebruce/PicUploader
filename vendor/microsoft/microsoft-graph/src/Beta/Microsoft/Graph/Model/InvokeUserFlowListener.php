<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InvokeUserFlowListener File
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
* InvokeUserFlowListener class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InvokeUserFlowListener extends AuthenticationListener
{
    /**
    * Gets the userFlow
    * The user flow that is invoked when this action executes.
    *
    * @return B2xIdentityUserFlow|null The userFlow
    */
    public function getUserFlow()
    {
        if (array_key_exists("userFlow", $this->_propDict)) {
            if (is_a($this->_propDict["userFlow"], "\Beta\Microsoft\Graph\Model\B2xIdentityUserFlow") || is_null($this->_propDict["userFlow"])) {
                return $this->_propDict["userFlow"];
            } else {
                $this->_propDict["userFlow"] = new B2xIdentityUserFlow($this->_propDict["userFlow"]);
                return $this->_propDict["userFlow"];
            }
        }
        return null;
    }

    /**
    * Sets the userFlow
    * The user flow that is invoked when this action executes.
    *
    * @param B2xIdentityUserFlow $val The userFlow
    *
    * @return InvokeUserFlowListener
    */
    public function setUserFlow($val)
    {
        $this->_propDict["userFlow"] = $val;
        return $this;
    }

}
