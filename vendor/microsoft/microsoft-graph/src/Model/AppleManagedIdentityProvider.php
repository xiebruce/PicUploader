<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleManagedIdentityProvider File
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
* AppleManagedIdentityProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleManagedIdentityProvider extends IdentityProviderBase
{
    /**
    * Gets the certificateData
    * The certificate data, which is a long string of text from the certificate. Can be null.
    *
    * @return string|null The certificateData
    */
    public function getCertificateData()
    {
        if (array_key_exists("certificateData", $this->_propDict)) {
            return $this->_propDict["certificateData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateData
    * The certificate data, which is a long string of text from the certificate. Can be null.
    *
    * @param string $val The certificateData
    *
    * @return AppleManagedIdentityProvider
    */
    public function setCertificateData($val)
    {
        $this->_propDict["certificateData"] = $val;
        return $this;
    }

    /**
    * Gets the developerId
    * The Apple developer identifier. Required.
    *
    * @return string|null The developerId
    */
    public function getDeveloperId()
    {
        if (array_key_exists("developerId", $this->_propDict)) {
            return $this->_propDict["developerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the developerId
    * The Apple developer identifier. Required.
    *
    * @param string $val The developerId
    *
    * @return AppleManagedIdentityProvider
    */
    public function setDeveloperId($val)
    {
        $this->_propDict["developerId"] = $val;
        return $this;
    }

    /**
    * Gets the keyId
    * The Apple key identifier. Required.
    *
    * @return string|null The keyId
    */
    public function getKeyId()
    {
        if (array_key_exists("keyId", $this->_propDict)) {
            return $this->_propDict["keyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyId
    * The Apple key identifier. Required.
    *
    * @param string $val The keyId
    *
    * @return AppleManagedIdentityProvider
    */
    public function setKeyId($val)
    {
        $this->_propDict["keyId"] = $val;
        return $this;
    }

    /**
    * Gets the serviceId
    * The Apple service identifier. Required.
    *
    * @return string|null The serviceId
    */
    public function getServiceId()
    {
        if (array_key_exists("serviceId", $this->_propDict)) {
            return $this->_propDict["serviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceId
    * The Apple service identifier. Required.
    *
    * @param string $val The serviceId
    *
    * @return AppleManagedIdentityProvider
    */
    public function setServiceId($val)
    {
        $this->_propDict["serviceId"] = $val;
        return $this;
    }

}
