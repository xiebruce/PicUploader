<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SoftwareOathAuthenticationMethodConfiguration File
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
* SoftwareOathAuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SoftwareOathAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration
{

     /**
     * Gets the includeTargets
    * A collection of groups that are enabled to use the authentication method. Expanded by default.
     *
     * @return array|null The includeTargets
     */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict)) {
           return $this->_propDict["includeTargets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeTargets
    * A collection of groups that are enabled to use the authentication method. Expanded by default.
    *
    * @param AuthenticationMethodTarget[] $val The includeTargets
    *
    * @return SoftwareOathAuthenticationMethodConfiguration
    */
    public function setIncludeTargets($val)
    {
        $this->_propDict["includeTargets"] = $val;
        return $this;
    }

}
