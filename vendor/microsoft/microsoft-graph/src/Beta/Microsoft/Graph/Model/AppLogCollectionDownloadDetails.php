<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppLogCollectionDownloadDetails File
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
* AppLogCollectionDownloadDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppLogCollectionDownloadDetails extends Entity
{

    /**
    * Gets the appLogDecryptionAlgorithm
    * Decryption algorithm for Content. Default is ASE256. Possible values are: aes256, unknownFutureValue.
    *
    * @return AppLogDecryptionAlgorithm|null The appLogDecryptionAlgorithm
    */
    public function getAppLogDecryptionAlgorithm()
    {
        if (array_key_exists("appLogDecryptionAlgorithm", $this->_propDict)) {
            if (is_a($this->_propDict["appLogDecryptionAlgorithm"], "\Beta\Microsoft\Graph\Model\AppLogDecryptionAlgorithm") || is_null($this->_propDict["appLogDecryptionAlgorithm"])) {
                return $this->_propDict["appLogDecryptionAlgorithm"];
            } else {
                $this->_propDict["appLogDecryptionAlgorithm"] = new AppLogDecryptionAlgorithm($this->_propDict["appLogDecryptionAlgorithm"]);
                return $this->_propDict["appLogDecryptionAlgorithm"];
            }
        }
        return null;
    }

    /**
    * Sets the appLogDecryptionAlgorithm
    * Decryption algorithm for Content. Default is ASE256. Possible values are: aes256, unknownFutureValue.
    *
    * @param AppLogDecryptionAlgorithm $val The value to assign to the appLogDecryptionAlgorithm
    *
    * @return AppLogCollectionDownloadDetails The AppLogCollectionDownloadDetails
    */
    public function setAppLogDecryptionAlgorithm($val)
    {
        $this->_propDict["appLogDecryptionAlgorithm"] = $val;
         return $this;
    }
    /**
    * Gets the decryptionKey
    * Decryption key that used to decrypt the log.
    *
    * @return string|null The decryptionKey
    */
    public function getDecryptionKey()
    {
        if (array_key_exists("decryptionKey", $this->_propDict)) {
            return $this->_propDict["decryptionKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decryptionKey
    * Decryption key that used to decrypt the log.
    *
    * @param string $val The value of the decryptionKey
    *
    * @return AppLogCollectionDownloadDetails
    */
    public function setDecryptionKey($val)
    {
        $this->_propDict["decryptionKey"] = $val;
        return $this;
    }
    /**
    * Gets the downloadUrl
    * Download SAS (Shared Access Signature) Url for completed app log request.
    *
    * @return string|null The downloadUrl
    */
    public function getDownloadUrl()
    {
        if (array_key_exists("downloadUrl", $this->_propDict)) {
            return $this->_propDict["downloadUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the downloadUrl
    * Download SAS (Shared Access Signature) Url for completed app log request.
    *
    * @param string $val The value of the downloadUrl
    *
    * @return AppLogCollectionDownloadDetails
    */
    public function setDownloadUrl($val)
    {
        $this->_propDict["downloadUrl"] = $val;
        return $this;
    }
}
