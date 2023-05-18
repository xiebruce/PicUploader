<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CanvasLayout File
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
* CanvasLayout class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CanvasLayout extends Entity
{

     /**
     * Gets the horizontalSections
    * Collection of horizontal sections on the SharePoint page.
     *
     * @return array|null The horizontalSections
     */
    public function getHorizontalSections()
    {
        if (array_key_exists("horizontalSections", $this->_propDict)) {
           return $this->_propDict["horizontalSections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the horizontalSections
    * Collection of horizontal sections on the SharePoint page.
    *
    * @param HorizontalSection[] $val The horizontalSections
    *
    * @return CanvasLayout
    */
    public function setHorizontalSections($val)
    {
        $this->_propDict["horizontalSections"] = $val;
        return $this;
    }

    /**
    * Gets the verticalSection
    * Vertical section on the SharePoint page.
    *
    * @return VerticalSection|null The verticalSection
    */
    public function getVerticalSection()
    {
        if (array_key_exists("verticalSection", $this->_propDict)) {
            if (is_a($this->_propDict["verticalSection"], "\Beta\Microsoft\Graph\Model\VerticalSection") || is_null($this->_propDict["verticalSection"])) {
                return $this->_propDict["verticalSection"];
            } else {
                $this->_propDict["verticalSection"] = new VerticalSection($this->_propDict["verticalSection"]);
                return $this->_propDict["verticalSection"];
            }
        }
        return null;
    }

    /**
    * Sets the verticalSection
    * Vertical section on the SharePoint page.
    *
    * @param VerticalSection $val The verticalSection
    *
    * @return CanvasLayout
    */
    public function setVerticalSection($val)
    {
        $this->_propDict["verticalSection"] = $val;
        return $this;
    }

}
