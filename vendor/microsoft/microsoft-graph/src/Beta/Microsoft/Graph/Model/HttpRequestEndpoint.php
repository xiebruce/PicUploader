<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HttpRequestEndpoint File
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
* HttpRequestEndpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HttpRequestEndpoint extends CustomExtensionEndpointConfiguration
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.httpRequestEndpoint");
    }

    /**
    * Gets the targetUrl
    * The HTTP endpoint that a custom extension calls.
    *
    * @return string|null The targetUrl
    */
    public function getTargetUrl()
    {
        if (array_key_exists("targetUrl", $this->_propDict)) {
            return $this->_propDict["targetUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetUrl
    * The HTTP endpoint that a custom extension calls.
    *
    * @param string $val The value of the targetUrl
    *
    * @return HttpRequestEndpoint
    */
    public function setTargetUrl($val)
    {
        $this->_propDict["targetUrl"] = $val;
        return $this;
    }
}
