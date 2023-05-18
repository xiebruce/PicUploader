<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFilterDatetime File
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
* WorkbookFilterDatetime class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookFilterDatetime extends Entity
{
    /**
    * Gets the date
    * The date in ISO8601 format used to filter data.
    *
    * @return string|null The date
    */
    public function getDate()
    {
        if (array_key_exists("date", $this->_propDict)) {
            return $this->_propDict["date"];
        } else {
            return null;
        }
    }

    /**
    * Sets the date
    * The date in ISO8601 format used to filter data.
    *
    * @param string $val The value of the date
    *
    * @return WorkbookFilterDatetime
    */
    public function setDate($val)
    {
        $this->_propDict["date"] = $val;
        return $this;
    }
    /**
    * Gets the specificity
    * How specific the date should be used to keep data. For example, if the date is 2005-04-02 and the specifity is set to 'month', the filter operation will keep all rows with a date in the month of april 2009. The possible values are: Year, Monday, Day, Hour, Minute, Second.
    *
    * @return string|null The specificity
    */
    public function getSpecificity()
    {
        if (array_key_exists("specificity", $this->_propDict)) {
            return $this->_propDict["specificity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the specificity
    * How specific the date should be used to keep data. For example, if the date is 2005-04-02 and the specifity is set to 'month', the filter operation will keep all rows with a date in the month of april 2009. The possible values are: Year, Monday, Day, Hour, Minute, Second.
    *
    * @param string $val The value of the specificity
    *
    * @return WorkbookFilterDatetime
    */
    public function setSpecificity($val)
    {
        $this->_propDict["specificity"] = $val;
        return $this;
    }
}
