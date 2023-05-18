<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LoginPageLayoutConfiguration File
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
* LoginPageLayoutConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LoginPageLayoutConfiguration extends Entity
{
    /**
    * Gets the isFooterShown
    * Option to show the footer on the sign-in page.
    *
    * @return bool|null The isFooterShown
    */
    public function getIsFooterShown()
    {
        if (array_key_exists("isFooterShown", $this->_propDict)) {
            return $this->_propDict["isFooterShown"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFooterShown
    * Option to show the footer on the sign-in page.
    *
    * @param bool $val The value of the isFooterShown
    *
    * @return LoginPageLayoutConfiguration
    */
    public function setIsFooterShown($val)
    {
        $this->_propDict["isFooterShown"] = $val;
        return $this;
    }
    /**
    * Gets the isHeaderShown
    * Option to show the header on the sign-in page.
    *
    * @return bool|null The isHeaderShown
    */
    public function getIsHeaderShown()
    {
        if (array_key_exists("isHeaderShown", $this->_propDict)) {
            return $this->_propDict["isHeaderShown"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHeaderShown
    * Option to show the header on the sign-in page.
    *
    * @param bool $val The value of the isHeaderShown
    *
    * @return LoginPageLayoutConfiguration
    */
    public function setIsHeaderShown($val)
    {
        $this->_propDict["isHeaderShown"] = $val;
        return $this;
    }

    /**
    * Gets the layoutTemplateType
    * Represents the layout template to be displayed on the login page for a tenant. The possible values are  default - Represents the default Microsoft layout with a centered lightbox.  verticalSplit - Represents a layout with a backgound on the left side and a full-height lightbox to the right.  unknownFutureValue - Evolvable enumeration sentinel value. Do not use.
    *
    * @return LayoutTemplateType|null The layoutTemplateType
    */
    public function getLayoutTemplateType()
    {
        if (array_key_exists("layoutTemplateType", $this->_propDict)) {
            if (is_a($this->_propDict["layoutTemplateType"], "\Beta\Microsoft\Graph\Model\LayoutTemplateType") || is_null($this->_propDict["layoutTemplateType"])) {
                return $this->_propDict["layoutTemplateType"];
            } else {
                $this->_propDict["layoutTemplateType"] = new LayoutTemplateType($this->_propDict["layoutTemplateType"]);
                return $this->_propDict["layoutTemplateType"];
            }
        }
        return null;
    }

    /**
    * Sets the layoutTemplateType
    * Represents the layout template to be displayed on the login page for a tenant. The possible values are  default - Represents the default Microsoft layout with a centered lightbox.  verticalSplit - Represents a layout with a backgound on the left side and a full-height lightbox to the right.  unknownFutureValue - Evolvable enumeration sentinel value. Do not use.
    *
    * @param LayoutTemplateType $val The value to assign to the layoutTemplateType
    *
    * @return LoginPageLayoutConfiguration The LoginPageLayoutConfiguration
    */
    public function setLayoutTemplateType($val)
    {
        $this->_propDict["layoutTemplateType"] = $val;
         return $this;
    }
}
