<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Pkcs12Certificate File
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
* Pkcs12Certificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Pkcs12Certificate extends ApiAuthenticationConfigurationBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.pkcs12Certificate");
    }

    /**
    * Gets the password
    * The password for the pfx file. Required. If no password is used, you must still provide a value of ''.
    *
    * @return string|null The password
    */
    public function getPassword()
    {
        if (array_key_exists("password", $this->_propDict)) {
            return $this->_propDict["password"];
        } else {
            return null;
        }
    }

    /**
    * Sets the password
    * The password for the pfx file. Required. If no password is used, you must still provide a value of ''.
    *
    * @param string $val The value of the password
    *
    * @return Pkcs12Certificate
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
    /**
    * Gets the pkcs12Value
    * Represents the pfx content that is sent. The value should be a base-64 encoded version of the actual certificate content. Required.
    *
    * @return string|null The pkcs12Value
    */
    public function getPkcs12Value()
    {
        if (array_key_exists("pkcs12Value", $this->_propDict)) {
            return $this->_propDict["pkcs12Value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pkcs12Value
    * Represents the pfx content that is sent. The value should be a base-64 encoded version of the actual certificate content. Required.
    *
    * @param string $val The value of the pkcs12Value
    *
    * @return Pkcs12Certificate
    */
    public function setPkcs12Value($val)
    {
        $this->_propDict["pkcs12Value"] = $val;
        return $this;
    }
}
