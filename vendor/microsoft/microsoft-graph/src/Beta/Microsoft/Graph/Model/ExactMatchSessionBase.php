<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchSessionBase File
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
* ExactMatchSessionBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchSessionBase extends ExactMatchJobBase
{
    /**
    * Gets the dataStoreId
    *
    * @return string|null The dataStoreId
    */
    public function getDataStoreId()
    {
        if (array_key_exists("dataStoreId", $this->_propDict)) {
            return $this->_propDict["dataStoreId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataStoreId
    *
    * @param string $val The dataStoreId
    *
    * @return ExactMatchSessionBase
    */
    public function setDataStoreId($val)
    {
        $this->_propDict["dataStoreId"] = $val;
        return $this;
    }

    /**
    * Gets the processingCompletionDateTime
    *
    * @return \DateTime|null The processingCompletionDateTime
    */
    public function getProcessingCompletionDateTime()
    {
        if (array_key_exists("processingCompletionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["processingCompletionDateTime"], "\DateTime") || is_null($this->_propDict["processingCompletionDateTime"])) {
                return $this->_propDict["processingCompletionDateTime"];
            } else {
                $this->_propDict["processingCompletionDateTime"] = new \DateTime($this->_propDict["processingCompletionDateTime"]);
                return $this->_propDict["processingCompletionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the processingCompletionDateTime
    *
    * @param \DateTime $val The processingCompletionDateTime
    *
    * @return ExactMatchSessionBase
    */
    public function setProcessingCompletionDateTime($val)
    {
        $this->_propDict["processingCompletionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the remainingBlockCount
    *
    * @return int|null The remainingBlockCount
    */
    public function getRemainingBlockCount()
    {
        if (array_key_exists("remainingBlockCount", $this->_propDict)) {
            return $this->_propDict["remainingBlockCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remainingBlockCount
    *
    * @param int $val The remainingBlockCount
    *
    * @return ExactMatchSessionBase
    */
    public function setRemainingBlockCount($val)
    {
        $this->_propDict["remainingBlockCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the remainingJobCount
    *
    * @return int|null The remainingJobCount
    */
    public function getRemainingJobCount()
    {
        if (array_key_exists("remainingJobCount", $this->_propDict)) {
            return $this->_propDict["remainingJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remainingJobCount
    *
    * @param int $val The remainingJobCount
    *
    * @return ExactMatchSessionBase
    */
    public function setRemainingJobCount($val)
    {
        $this->_propDict["remainingJobCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the state
    *
    * @return string|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    *
    * @param string $val The state
    *
    * @return ExactMatchSessionBase
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the totalBlockCount
    *
    * @return int|null The totalBlockCount
    */
    public function getTotalBlockCount()
    {
        if (array_key_exists("totalBlockCount", $this->_propDict)) {
            return $this->_propDict["totalBlockCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalBlockCount
    *
    * @param int $val The totalBlockCount
    *
    * @return ExactMatchSessionBase
    */
    public function setTotalBlockCount($val)
    {
        $this->_propDict["totalBlockCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalJobCount
    *
    * @return int|null The totalJobCount
    */
    public function getTotalJobCount()
    {
        if (array_key_exists("totalJobCount", $this->_propDict)) {
            return $this->_propDict["totalJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalJobCount
    *
    * @param int $val The totalJobCount
    *
    * @return ExactMatchSessionBase
    */
    public function setTotalJobCount($val)
    {
        $this->_propDict["totalJobCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the uploadCompletionDateTime
    *
    * @return \DateTime|null The uploadCompletionDateTime
    */
    public function getUploadCompletionDateTime()
    {
        if (array_key_exists("uploadCompletionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["uploadCompletionDateTime"], "\DateTime") || is_null($this->_propDict["uploadCompletionDateTime"])) {
                return $this->_propDict["uploadCompletionDateTime"];
            } else {
                $this->_propDict["uploadCompletionDateTime"] = new \DateTime($this->_propDict["uploadCompletionDateTime"]);
                return $this->_propDict["uploadCompletionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the uploadCompletionDateTime
    *
    * @param \DateTime $val The uploadCompletionDateTime
    *
    * @return ExactMatchSessionBase
    */
    public function setUploadCompletionDateTime($val)
    {
        $this->_propDict["uploadCompletionDateTime"] = $val;
        return $this;
    }

}
