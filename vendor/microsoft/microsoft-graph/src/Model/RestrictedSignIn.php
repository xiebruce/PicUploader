<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RestrictedSignIn File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* RestrictedSignIn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RestrictedSignIn extends SignIn
{
    /**
    * Gets the targetTenantId
    *
    * @return string The targetTenantId
    */
    public function getTargetTenantId()
    {
        if (array_key_exists("targetTenantId", $this->_propDict)) {
            return $this->_propDict["targetTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetTenantId
    *
    * @param string $val The targetTenantId
    *
    * @return RestrictedSignIn
    */
    public function setTargetTenantId($val)
    {
        $this->_propDict["targetTenantId"] = $val;
        return $this;
    }
    
}