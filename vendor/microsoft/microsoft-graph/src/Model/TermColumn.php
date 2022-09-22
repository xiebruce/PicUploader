<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermColumn File
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
* TermColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermColumn extends Entity
{
    /**
    * Gets the allowMultipleValues
    * Specifies whether the column will allow more than one value.
    *
    * @return bool|null The allowMultipleValues
    */
    public function getAllowMultipleValues()
    {
        if (array_key_exists("allowMultipleValues", $this->_propDict)) {
            return $this->_propDict["allowMultipleValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleValues
    * Specifies whether the column will allow more than one value.
    *
    * @param bool $val The value of the allowMultipleValues
    *
    * @return TermColumn
    */
    public function setAllowMultipleValues($val)
    {
        $this->_propDict["allowMultipleValues"] = $val;
        return $this;
    }
    /**
    * Gets the showFullyQualifiedName
    * Specifies whether to display the entire term path or only the term label.
    *
    * @return bool|null The showFullyQualifiedName
    */
    public function getShowFullyQualifiedName()
    {
        if (array_key_exists("showFullyQualifiedName", $this->_propDict)) {
            return $this->_propDict["showFullyQualifiedName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showFullyQualifiedName
    * Specifies whether to display the entire term path or only the term label.
    *
    * @param bool $val The value of the showFullyQualifiedName
    *
    * @return TermColumn
    */
    public function setShowFullyQualifiedName($val)
    {
        $this->_propDict["showFullyQualifiedName"] = $val;
        return $this;
    }

    /**
    * Gets the parentTerm
    *
    * @return \Microsoft\Graph\TermStore\Model\Term|null The parentTerm
    */
    public function getParentTerm()
    {
        if (array_key_exists("parentTerm", $this->_propDict)) {
            if (is_a($this->_propDict["parentTerm"], "\Microsoft\Graph\TermStore\Model\Term") || is_null($this->_propDict["parentTerm"])) {
                return $this->_propDict["parentTerm"];
            } else {
                $this->_propDict["parentTerm"] = new \Microsoft\Graph\TermStore\Model\Term($this->_propDict["parentTerm"]);
                return $this->_propDict["parentTerm"];
            }
        }
        return null;
    }

    /**
    * Sets the parentTerm
    *
    * @param \Microsoft\Graph\TermStore\Model\Term $val The value to assign to the parentTerm
    *
    * @return TermColumn The TermColumn
    */
    public function setParentTerm($val)
    {
        $this->_propDict["parentTerm"] = $val;
         return $this;
    }

    /**
    * Gets the termSet
    *
    * @return \Microsoft\Graph\TermStore\Model\Set|null The termSet
    */
    public function getTermSet()
    {
        if (array_key_exists("termSet", $this->_propDict)) {
            if (is_a($this->_propDict["termSet"], "\Microsoft\Graph\TermStore\Model\Set") || is_null($this->_propDict["termSet"])) {
                return $this->_propDict["termSet"];
            } else {
                $this->_propDict["termSet"] = new \Microsoft\Graph\TermStore\Model\Set($this->_propDict["termSet"]);
                return $this->_propDict["termSet"];
            }
        }
        return null;
    }

    /**
    * Sets the termSet
    *
    * @param \Microsoft\Graph\TermStore\Model\Set $val The value to assign to the termSet
    *
    * @return TermColumn The TermColumn
    */
    public function setTermSet($val)
    {
        $this->_propDict["termSet"] = $val;
         return $this;
    }
}
