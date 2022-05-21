<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PayloadCompatibleAssignmentFilter File
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
* PayloadCompatibleAssignmentFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PayloadCompatibleAssignmentFilter extends DeviceAndAppManagementAssignmentFilter
{
    /**
    * Gets the payloadType
    * PayloadType of the Assignment Filter. Possible values are: notSet, enrollmentRestrictions.
    *
    * @return AssignmentFilterPayloadType|null The payloadType
    */
    public function getPayloadType()
    {
        if (array_key_exists("payloadType", $this->_propDict)) {
            if (is_a($this->_propDict["payloadType"], "\Beta\Microsoft\Graph\Model\AssignmentFilterPayloadType") || is_null($this->_propDict["payloadType"])) {
                return $this->_propDict["payloadType"];
            } else {
                $this->_propDict["payloadType"] = new AssignmentFilterPayloadType($this->_propDict["payloadType"]);
                return $this->_propDict["payloadType"];
            }
        }
        return null;
    }

    /**
    * Sets the payloadType
    * PayloadType of the Assignment Filter. Possible values are: notSet, enrollmentRestrictions.
    *
    * @param AssignmentFilterPayloadType $val The payloadType
    *
    * @return PayloadCompatibleAssignmentFilter
    */
    public function setPayloadType($val)
    {
        $this->_propDict["payloadType"] = $val;
        return $this;
    }

}
