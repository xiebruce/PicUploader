<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationInfo File
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
* AuthorizationInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationInfo extends Entity
{
    /**
    * Gets the certificateUserIds
    * The collection of unique identifiers that can be associated with a user and can be used to bind the Azure AD user to a certificate for authentication and authorization into non-Azure AD environments. The identifiers must be unique in the tenant.
    *
    * @return string|null The certificateUserIds
    */
    public function getCertificateUserIds()
    {
        if (array_key_exists("certificateUserIds", $this->_propDict)) {
            return $this->_propDict["certificateUserIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateUserIds
    * The collection of unique identifiers that can be associated with a user and can be used to bind the Azure AD user to a certificate for authentication and authorization into non-Azure AD environments. The identifiers must be unique in the tenant.
    *
    * @param string $val The value of the certificateUserIds
    *
    * @return AuthorizationInfo
    */
    public function setCertificateUserIds($val)
    {
        $this->_propDict["certificateUserIds"] = $val;
        return $this;
    }
}
