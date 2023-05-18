<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceNowOauthSecretAuthentication File
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
* ServiceNowOauthSecretAuthentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceNowOauthSecretAuthentication extends ServiceNowAuthenticationMethod
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.serviceNowOauthSecretAuthentication");
    }

    /**
    * Gets the appId
    * Tenant appId registered with Azure AD
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * Tenant appId registered with Azure AD
    *
    * @param string $val The value of the appId
    *
    * @return ServiceNowOauthSecretAuthentication
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
}
