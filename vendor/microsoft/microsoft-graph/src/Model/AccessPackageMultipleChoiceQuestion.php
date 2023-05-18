<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageMultipleChoiceQuestion File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* AccessPackageMultipleChoiceQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageMultipleChoiceQuestion extends AccessPackageQuestion
{

     /**
     * Gets the choices
    * List of answer choices.
     *
     * @return array|null The choices
     */
    public function getChoices()
    {
        if (array_key_exists("choices", $this->_propDict)) {
           return $this->_propDict["choices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the choices
    * List of answer choices.
    *
    * @param AccessPackageAnswerChoice[] $val The choices
    *
    * @return AccessPackageMultipleChoiceQuestion
    */
    public function setChoices($val)
    {
        $this->_propDict["choices"] = $val;
        return $this;
    }

    /**
    * Gets the isMultipleSelectionAllowed
    * Indicates whether requestor can select multiple choices as their answer.
    *
    * @return bool|null The isMultipleSelectionAllowed
    */
    public function getIsMultipleSelectionAllowed()
    {
        if (array_key_exists("isMultipleSelectionAllowed", $this->_propDict)) {
            return $this->_propDict["isMultipleSelectionAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMultipleSelectionAllowed
    * Indicates whether requestor can select multiple choices as their answer.
    *
    * @param bool $val The isMultipleSelectionAllowed
    *
    * @return AccessPackageMultipleChoiceQuestion
    */
    public function setIsMultipleSelectionAllowed($val)
    {
        $this->_propDict["isMultipleSelectionAllowed"] = boolval($val);
        return $this;
    }

}
