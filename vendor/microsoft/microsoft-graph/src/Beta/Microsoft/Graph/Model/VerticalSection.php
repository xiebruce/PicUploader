<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerticalSection File
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
* VerticalSection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerticalSection extends Entity
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
    * @return VerticalSection
    */
    public function setEmphasis($val)
    {
        $this->_propDict["emphasis"] = $val;
        return $this;
    }


     /**
     * Gets the webparts
    * The set of web parts in this section.
     *
     * @return array|null The webparts
     */
    public function getWebparts()
    {
        if (array_key_exists("webparts", $this->_propDict)) {
           return $this->_propDict["webparts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webparts
    * The set of web parts in this section.
    *
    * @param WebPart[] $val The webparts
    *
    * @return VerticalSection
    */
    public function setWebparts($val)
    {
        $this->_propDict["webparts"] = $val;
        return $this;
    }

}
