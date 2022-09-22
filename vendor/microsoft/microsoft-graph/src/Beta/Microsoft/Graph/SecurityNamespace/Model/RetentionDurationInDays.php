<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RetentionDurationInDays File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* RetentionDurationInDays class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RetentionDurationInDays extends RetentionDuration
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.security.retentionDurationInDays");
    }

    /**
    * Gets the days
    * Specifies the time period in days for which an item with the applied retention label will be retained for.
    *
    * @return int|null The days
    */
    public function getDays()
    {
        if (array_key_exists("days", $this->_propDict)) {
            return $this->_propDict["days"];
        } else {
            return null;
        }
    }

    /**
    * Sets the days
    * Specifies the time period in days for which an item with the applied retention label will be retained for.
    *
    * @param int $val The value of the days
    *
    * @return RetentionDurationInDays
    */
    public function setDays($val)
    {
        $this->_propDict["days"] = $val;
        return $this;
    }
}
