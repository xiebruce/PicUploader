<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnTokenIssuanceStartListener File
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
* OnTokenIssuanceStartListener class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnTokenIssuanceStartListener extends AuthenticationEventListener
{
    /**
    * Gets the handler
    *
    * @return OnTokenIssuanceStartHandler|null The handler
    */
    public function getHandler()
    {
        if (array_key_exists("handler", $this->_propDict)) {
            if (is_a($this->_propDict["handler"], "\Beta\Microsoft\Graph\Model\OnTokenIssuanceStartHandler") || is_null($this->_propDict["handler"])) {
                return $this->_propDict["handler"];
            } else {
                $this->_propDict["handler"] = new OnTokenIssuanceStartHandler($this->_propDict["handler"]);
                return $this->_propDict["handler"];
            }
        }
        return null;
    }

    /**
    * Sets the handler
    *
    * @param OnTokenIssuanceStartHandler $val The handler
    *
    * @return OnTokenIssuanceStartListener
    */
    public function setHandler($val)
    {
        $this->_propDict["handler"] = $val;
        return $this;
    }

}
