<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* X509CertificateUserBinding File
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
* X509CertificateUserBinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class X509CertificateUserBinding extends Entity
{
    /**
    * Gets the priority
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    *
    * @param int $val The value of the priority
    *
    * @return X509CertificateUserBinding
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }
    /**
    * Gets the userProperty
    *
    * @return string|null The userProperty
    */
    public function getUserProperty()
    {
        if (array_key_exists("userProperty", $this->_propDict)) {
            return $this->_propDict["userProperty"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userProperty
    *
    * @param string $val The value of the userProperty
    *
    * @return X509CertificateUserBinding
    */
    public function setUserProperty($val)
    {
        $this->_propDict["userProperty"] = $val;
        return $this;
    }
    /**
    * Gets the x509CertificateField
    *
    * @return string|null The x509CertificateField
    */
    public function getX509CertificateField()
    {
        if (array_key_exists("x509CertificateField", $this->_propDict)) {
            return $this->_propDict["x509CertificateField"];
        } else {
            return null;
        }
    }

    /**
    * Sets the x509CertificateField
    *
    * @param string $val The value of the x509CertificateField
    *
    * @return X509CertificateUserBinding
    */
    public function setX509CertificateField($val)
    {
        $this->_propDict["x509CertificateField"] = $val;
        return $this;
    }
}
