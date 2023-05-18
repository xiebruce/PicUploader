<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BusinessScenarioPlanReference File
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
* BusinessScenarioPlanReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BusinessScenarioPlanReference extends Entity
{
    /**
    * Gets the title
    * The title property of the plannerPlan.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * The title property of the plannerPlan.
    *
    * @param string $val The title
    *
    * @return BusinessScenarioPlanReference
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

}
