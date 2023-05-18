<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VoiceAuthenticationMethodConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* VoiceAuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VoiceAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration
{
    /**
    * Gets the isOfficePhoneAllowed
    * true if users can register office phones, otherwise, false.
    *
    * @return bool|null The isOfficePhoneAllowed
    */
    public function getIsOfficePhoneAllowed()
    {
        if (array_key_exists("isOfficePhoneAllowed", $this->_propDict)) {
            return $this->_propDict["isOfficePhoneAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOfficePhoneAllowed
    * true if users can register office phones, otherwise, false.
    *
    * @param bool $val The isOfficePhoneAllowed
    *
    * @return VoiceAuthenticationMethodConfiguration
    */
    public function setIsOfficePhoneAllowed($val)
    {
        $this->_propDict["isOfficePhoneAllowed"] = boolval($val);
        return $this;
    }


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
    * @return VoiceAuthenticationMethodConfiguration
    */
    public function setIncludeTargets($val)
    {
        $this->_propDict["includeTargets"] = $val;
        return $this;
    }

}
