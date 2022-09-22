<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnTokenIssuanceStartCustomExtensionHandler File
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
* OnTokenIssuanceStartCustomExtensionHandler class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnTokenIssuanceStartCustomExtensionHandler extends OnTokenIssuanceStartHandler
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.onTokenIssuanceStartCustomExtensionHandler");
    }


    /**
    * Gets the customExtension
    *
    * @return OnTokenIssuanceStartCustomExtension|null The customExtension
    */
    public function getCustomExtension()
    {
        if (array_key_exists("customExtension", $this->_propDict)) {
            if (is_a($this->_propDict["customExtension"], "\Beta\Microsoft\Graph\Model\OnTokenIssuanceStartCustomExtension") || is_null($this->_propDict["customExtension"])) {
                return $this->_propDict["customExtension"];
            } else {
                $this->_propDict["customExtension"] = new OnTokenIssuanceStartCustomExtension($this->_propDict["customExtension"]);
                return $this->_propDict["customExtension"];
            }
        }
        return null;
    }

    /**
    * Sets the customExtension
    *
    * @param OnTokenIssuanceStartCustomExtension $val The value to assign to the customExtension
    *
    * @return OnTokenIssuanceStartCustomExtensionHandler The OnTokenIssuanceStartCustomExtensionHandler
    */
    public function setCustomExtension($val)
    {
        $this->_propDict["customExtension"] = $val;
         return $this;
    }
}
