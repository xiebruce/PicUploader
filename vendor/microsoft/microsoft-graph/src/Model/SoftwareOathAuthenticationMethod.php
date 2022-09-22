<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SoftwareOathAuthenticationMethod File
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
* SoftwareOathAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SoftwareOathAuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the secretKey
    * The secret key of the method. Always returns null.
    *
    * @return string|null The secretKey
    */
    public function getSecretKey()
    {
        if (array_key_exists("secretKey", $this->_propDict)) {
            return $this->_propDict["secretKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secretKey
    * The secret key of the method. Always returns null.
    *
    * @param string $val The secretKey
    *
    * @return SoftwareOathAuthenticationMethod
    */
    public function setSecretKey($val)
    {
        $this->_propDict["secretKey"] = $val;
        return $this;
    }

}
