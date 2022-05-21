<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationEventsPolicy File
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
* AuthenticationEventsPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationEventsPolicy extends Entity
{

     /**
     * Gets the onSignupStart
    * A list of applicable actions to be taken on sign-up.
     *
     * @return array|null The onSignupStart
     */
    public function getOnSignupStart()
    {
        if (array_key_exists("onSignupStart", $this->_propDict)) {
           return $this->_propDict["onSignupStart"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onSignupStart
    * A list of applicable actions to be taken on sign-up.
    *
    * @param AuthenticationListener[] $val The onSignupStart
    *
    * @return AuthenticationEventsPolicy
    */
    public function setOnSignupStart($val)
    {
        $this->_propDict["onSignupStart"] = $val;
        return $this;
    }

}
