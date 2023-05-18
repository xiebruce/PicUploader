<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HorizontalSection File
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
* HorizontalSection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HorizontalSection extends Entity
{
    /**
    * Gets the emphasis
    * Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue.
    *
    * @return SectionEmphasisType|null The emphasis
    */
    public function getEmphasis()
    {
        if (array_key_exists("emphasis", $this->_propDict)) {
            if (is_a($this->_propDict["emphasis"], "\Beta\Microsoft\Graph\Model\SectionEmphasisType") || is_null($this->_propDict["emphasis"])) {
                return $this->_propDict["emphasis"];
            } else {
                $this->_propDict["emphasis"] = new SectionEmphasisType($this->_propDict["emphasis"]);
                return $this->_propDict["emphasis"];
            }
        }
        return null;
    }

    /**
    * Sets the emphasis
    * Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue.
    *
    * @param SectionEmphasisType $val The emphasis
    *
    * @return HorizontalSection
    */
    public function setEmphasis($val)
    {
        $this->_propDict["emphasis"] = $val;
        return $this;
    }

    /**
    * Gets the layout
    * Layout type of the section. The possible values are: none, oneColumn, twoColumns, threeColumns, oneThirdLeftColumn, oneThirdRightColumn, fullWidth, unknownFutureValue.
    *
    * @return HorizontalSectionLayoutType|null The layout
    */
    public function getLayout()
    {
        if (array_key_exists("layout", $this->_propDict)) {
            if (is_a($this->_propDict["layout"], "\Beta\Microsoft\Graph\Model\HorizontalSectionLayoutType") || is_null($this->_propDict["layout"])) {
                return $this->_propDict["layout"];
            } else {
                $this->_propDict["layout"] = new HorizontalSectionLayoutType($this->_propDict["layout"]);
                return $this->_propDict["layout"];
            }
        }
        return null;
    }

    /**
    * Sets the layout
    * Layout type of the section. The possible values are: none, oneColumn, twoColumns, threeColumns, oneThirdLeftColumn, oneThirdRightColumn, fullWidth, unknownFutureValue.
    *
    * @param HorizontalSectionLayoutType $val The layout
    *
    * @return HorizontalSection
    */
    public function setLayout($val)
    {
        $this->_propDict["layout"] = $val;
        return $this;
    }


     /**
     * Gets the columns
    * The set of vertical columns in this section.
     *
     * @return array|null The columns
     */
    public function getColumns()
    {
        if (array_key_exists("columns", $this->_propDict)) {
           return $this->_propDict["columns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the columns
    * The set of vertical columns in this section.
    *
    * @param HorizontalSectionColumn[] $val The columns
    *
    * @return HorizontalSection
    */
    public function setColumns($val)
    {
        $this->_propDict["columns"] = $val;
        return $this;
    }

}
