<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RichLongRunningOperation File
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
* RichLongRunningOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RichLongRunningOperation extends LongRunningOperation
{
    /**
    * Gets the error
    * Error that caused the operation to fail.
    *
    * @return PublicError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Microsoft\Graph\Model\PublicError") || is_null($this->_propDict["error"])) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    * Error that caused the operation to fail.
    *
    * @param PublicError $val The error
    *
    * @return RichLongRunningOperation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }

    /**
    * Gets the percentageComplete
    * A value between 0 and 100 that indicates the progress of the operation.
    *
    * @return int|null The percentageComplete
    */
    public function getPercentageComplete()
    {
        if (array_key_exists("percentageComplete", $this->_propDict)) {
            return $this->_propDict["percentageComplete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the percentageComplete
    * A value between 0 and 100 that indicates the progress of the operation.
    *
    * @param int $val The percentageComplete
    *
    * @return RichLongRunningOperation
    */
    public function setPercentageComplete($val)
    {
        $this->_propDict["percentageComplete"] = intval($val);
        return $this;
    }

    /**
    * Gets the resourceId
    * The unique identifier for the result.
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    * The unique identifier for the result.
    *
    * @param string $val The resourceId
    *
    * @return RichLongRunningOperation
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of the operation.
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * The type of the operation.
    *
    * @param string $val The type
    *
    * @return RichLongRunningOperation
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

}
