<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationSourceFilter File
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
* AuthenticationSourceFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationSourceFilter extends Entity
{
    /**
    * Gets the includeApplications
    * Applications to include for evaluation of the authenticationListener. These applications trigger the associated action when used as the client application in the authentication flow. The application identifer is the application's client id.
    *
    * @return string|null The includeApplications
    */
    public function getIncludeApplications()
    {
        if (array_key_exists("includeApplications", $this->_propDict)) {
            return $this->_propDict["includeApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeApplications
    * Applications to include for evaluation of the authenticationListener. These applications trigger the associated action when used as the client application in the authentication flow. The application identifer is the application's client id.
    *
    * @param string $val The value of the includeApplications
    *
    * @return AuthenticationSourceFilter
    */
    public function setIncludeApplications($val)
    {
        $this->_propDict["includeApplications"] = $val;
        return $this;
    }
}
