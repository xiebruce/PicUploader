<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentSettings File
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
* EducationAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignmentSettings extends Entity
{
    /**
    * Gets the submissionAnimationDisabled
    * Indicates whether turn-in celebration animation will be shown. If true, the animation will not be shown. The default value is false.
    *
    * @return bool|null The submissionAnimationDisabled
    */
    public function getSubmissionAnimationDisabled()
    {
        if (array_key_exists("submissionAnimationDisabled", $this->_propDict)) {
            return $this->_propDict["submissionAnimationDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the submissionAnimationDisabled
    * Indicates whether turn-in celebration animation will be shown. If true, the animation will not be shown. The default value is false.
    *
    * @param bool $val The submissionAnimationDisabled
    *
    * @return EducationAssignmentSettings
    */
    public function setSubmissionAnimationDisabled($val)
    {
        $this->_propDict["submissionAnimationDisabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the gradingCategories
     *
     * @return array|null The gradingCategories
     */
    public function getGradingCategories()
    {
        if (array_key_exists("gradingCategories", $this->_propDict)) {
           return $this->_propDict["gradingCategories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the gradingCategories
    *
    * @param EducationGradingCategory[] $val The gradingCategories
    *
    * @return EducationAssignmentSettings
    */
    public function setGradingCategories($val)
    {
        $this->_propDict["gradingCategories"] = $val;
        return $this;
    }

}
