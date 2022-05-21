<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResultTemplateOption File
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
* ResultTemplateOption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResultTemplateOption extends Entity
{
    /**
    * Gets the enableResultTemplate
    * Indicates whether search display layouts are enabled. If enabled, the user will get the result template to render the search results content in the resultTemplates property of the response. The result template is based on Adaptive Cards. This property is optional.
    *
    * @return bool|null The enableResultTemplate
    */
    public function getEnableResultTemplate()
    {
        if (array_key_exists("enableResultTemplate", $this->_propDict)) {
            return $this->_propDict["enableResultTemplate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableResultTemplate
    * Indicates whether search display layouts are enabled. If enabled, the user will get the result template to render the search results content in the resultTemplates property of the response. The result template is based on Adaptive Cards. This property is optional.
    *
    * @param bool $val The value of the enableResultTemplate
    *
    * @return ResultTemplateOption
    */
    public function setEnableResultTemplate($val)
    {
        $this->_propDict["enableResultTemplate"] = $val;
        return $this;
    }
}
