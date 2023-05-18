<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintUsage File
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
* PrintUsage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintUsage extends Entity
{
    /**
    * Gets the blackAndWhitePageCount
    *
    * @return int|null The blackAndWhitePageCount
    */
    public function getBlackAndWhitePageCount()
    {
        if (array_key_exists("blackAndWhitePageCount", $this->_propDict)) {
            return $this->_propDict["blackAndWhitePageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blackAndWhitePageCount
    *
    * @param int $val The blackAndWhitePageCount
    *
    * @return PrintUsage
    */
    public function setBlackAndWhitePageCount($val)
    {
        $this->_propDict["blackAndWhitePageCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the colorPageCount
    *
    * @return int|null The colorPageCount
    */
    public function getColorPageCount()
    {
        if (array_key_exists("colorPageCount", $this->_propDict)) {
            return $this->_propDict["colorPageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the colorPageCount
    *
    * @param int $val The colorPageCount
    *
    * @return PrintUsage
    */
    public function setColorPageCount($val)
    {
        $this->_propDict["colorPageCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the completedBlackAndWhiteJobCount
    *
    * @return int|null The completedBlackAndWhiteJobCount
    */
    public function getCompletedBlackAndWhiteJobCount()
    {
        if (array_key_exists("completedBlackAndWhiteJobCount", $this->_propDict)) {
            return $this->_propDict["completedBlackAndWhiteJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedBlackAndWhiteJobCount
    *
    * @param int $val The completedBlackAndWhiteJobCount
    *
    * @return PrintUsage
    */
    public function setCompletedBlackAndWhiteJobCount($val)
    {
        $this->_propDict["completedBlackAndWhiteJobCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the completedColorJobCount
    *
    * @return int|null The completedColorJobCount
    */
    public function getCompletedColorJobCount()
    {
        if (array_key_exists("completedColorJobCount", $this->_propDict)) {
            return $this->_propDict["completedColorJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedColorJobCount
    *
    * @param int $val The completedColorJobCount
    *
    * @return PrintUsage
    */
    public function setCompletedColorJobCount($val)
    {
        $this->_propDict["completedColorJobCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the completedJobCount
    *
    * @return int|null The completedJobCount
    */
    public function getCompletedJobCount()
    {
        if (array_key_exists("completedJobCount", $this->_propDict)) {
            return $this->_propDict["completedJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedJobCount
    *
    * @param int $val The completedJobCount
    *
    * @return PrintUsage
    */
    public function setCompletedJobCount($val)
    {
        $this->_propDict["completedJobCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the doubleSidedSheetCount
    *
    * @return int|null The doubleSidedSheetCount
    */
    public function getDoubleSidedSheetCount()
    {
        if (array_key_exists("doubleSidedSheetCount", $this->_propDict)) {
            return $this->_propDict["doubleSidedSheetCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the doubleSidedSheetCount
    *
    * @param int $val The doubleSidedSheetCount
    *
    * @return PrintUsage
    */
    public function setDoubleSidedSheetCount($val)
    {
        $this->_propDict["doubleSidedSheetCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the incompleteJobCount
    *
    * @return int|null The incompleteJobCount
    */
    public function getIncompleteJobCount()
    {
        if (array_key_exists("incompleteJobCount", $this->_propDict)) {
            return $this->_propDict["incompleteJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incompleteJobCount
    *
    * @param int $val The incompleteJobCount
    *
    * @return PrintUsage
    */
    public function setIncompleteJobCount($val)
    {
        $this->_propDict["incompleteJobCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the mediaSheetCount
    *
    * @return int|null The mediaSheetCount
    */
    public function getMediaSheetCount()
    {
        if (array_key_exists("mediaSheetCount", $this->_propDict)) {
            return $this->_propDict["mediaSheetCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaSheetCount
    *
    * @param int $val The mediaSheetCount
    *
    * @return PrintUsage
    */
    public function setMediaSheetCount($val)
    {
        $this->_propDict["mediaSheetCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the pageCount
    *
    * @return int|null The pageCount
    */
    public function getPageCount()
    {
        if (array_key_exists("pageCount", $this->_propDict)) {
            return $this->_propDict["pageCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pageCount
    *
    * @param int $val The pageCount
    *
    * @return PrintUsage
    */
    public function setPageCount($val)
    {
        $this->_propDict["pageCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the singleSidedSheetCount
    *
    * @return int|null The singleSidedSheetCount
    */
    public function getSingleSidedSheetCount()
    {
        if (array_key_exists("singleSidedSheetCount", $this->_propDict)) {
            return $this->_propDict["singleSidedSheetCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the singleSidedSheetCount
    *
    * @param int $val The singleSidedSheetCount
    *
    * @return PrintUsage
    */
    public function setSingleSidedSheetCount($val)
    {
        $this->_propDict["singleSidedSheetCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the usageDate
    *
    * @return \DateTime|null The usageDate
    */
    public function getUsageDate()
    {
        if (array_key_exists("usageDate", $this->_propDict)) {
            if (is_a($this->_propDict["usageDate"], "\DateTime") || is_null($this->_propDict["usageDate"])) {
                return $this->_propDict["usageDate"];
            } else {
                $this->_propDict["usageDate"] = new \DateTime($this->_propDict["usageDate"]);
                return $this->_propDict["usageDate"];
            }
        }
        return null;
    }

    /**
    * Sets the usageDate
    *
    * @param \DateTime $val The usageDate
    *
    * @return PrintUsage
    */
    public function setUsageDate($val)
    {
        $this->_propDict["usageDate"] = $val;
        return $this;
    }

}
