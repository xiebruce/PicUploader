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
namespace Microsoft\Graph\Model;
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
