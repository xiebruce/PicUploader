<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationGradingCategory File
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
* EducationGradingCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationGradingCategory extends Entity
{
    /**
    * Gets the displayName
    * The name of the grading category.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The name of the grading category.
    *
    * @param string $val The displayName
    *
    * @return EducationGradingCategory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the percentageWeight
    * The weight of the category; an integer between 0 and 100.
    *
    * @return int|null The percentageWeight
    */
    public function getPercentageWeight()
    {
        if (array_key_exists("percentageWeight", $this->_propDict)) {
            return $this->_propDict["percentageWeight"];
        } else {
            return null;
        }
    }

    /**
    * Sets the percentageWeight
    * The weight of the category; an integer between 0 and 100.
    *
    * @param int $val The percentageWeight
    *
    * @return EducationGradingCategory
    */
    public function setPercentageWeight($val)
    {
        $this->_propDict["percentageWeight"] = intval($val);
        return $this;
    }

}
