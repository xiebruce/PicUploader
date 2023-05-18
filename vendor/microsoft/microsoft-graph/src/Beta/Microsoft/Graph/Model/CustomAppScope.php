<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomAppScope File
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
* CustomAppScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomAppScope extends AppScope
{
    /**
    * Gets the customAttributes
    *
    * @return CustomAppScopeAttributesDictionary|null The customAttributes
    */
    public function getCustomAttributes()
    {
        if (array_key_exists("customAttributes", $this->_propDict)) {
            if (is_a($this->_propDict["customAttributes"], "\Beta\Microsoft\Graph\Model\CustomAppScopeAttributesDictionary") || is_null($this->_propDict["customAttributes"])) {
                return $this->_propDict["customAttributes"];
            } else {
                $this->_propDict["customAttributes"] = new CustomAppScopeAttributesDictionary($this->_propDict["customAttributes"]);
                return $this->_propDict["customAttributes"];
            }
        }
        return null;
    }

    /**
    * Sets the customAttributes
    *
    * @param CustomAppScopeAttributesDictionary $val The customAttributes
    *
    * @return CustomAppScope
    */
    public function setCustomAttributes($val)
    {
        $this->_propDict["customAttributes"] = $val;
        return $this;
    }

}
