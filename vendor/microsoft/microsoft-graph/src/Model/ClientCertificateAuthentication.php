<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClientCertificateAuthentication File
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
* ClientCertificateAuthentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClientCertificateAuthentication extends ApiAuthenticationConfigurationBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.clientCertificateAuthentication");
    }


    /**
    * Gets the certificateList
    * The list of certificates uploaded for this API connector.
    *
    * @return Pkcs12CertificateInformation|null The certificateList
    */
    public function getCertificateList()
    {
        if (array_key_exists("certificateList", $this->_propDict)) {
            if (is_a($this->_propDict["certificateList"], "\Microsoft\Graph\Model\Pkcs12CertificateInformation") || is_null($this->_propDict["certificateList"])) {
                return $this->_propDict["certificateList"];
            } else {
                $this->_propDict["certificateList"] = new Pkcs12CertificateInformation($this->_propDict["certificateList"]);
                return $this->_propDict["certificateList"];
            }
        }
        return null;
    }

    /**
    * Sets the certificateList
    * The list of certificates uploaded for this API connector.
    *
    * @param Pkcs12CertificateInformation $val The value to assign to the certificateList
    *
    * @return ClientCertificateAuthentication The ClientCertificateAuthentication
    */
    public function setCertificateList($val)
    {
        $this->_propDict["certificateList"] = $val;
         return $this;
    }
}
