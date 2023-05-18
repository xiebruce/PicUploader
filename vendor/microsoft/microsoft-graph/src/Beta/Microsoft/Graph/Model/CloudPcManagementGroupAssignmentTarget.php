<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcManagementGroupAssignmentTarget File
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
* CloudPcManagementGroupAssignmentTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcManagementGroupAssignmentTarget extends CloudPcManagementAssignmentTarget
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.cloudPcManagementGroupAssignmentTarget");
    }

    /**
    * Gets the groupId
    * The ID of the target group for the assignment.
    *
    * @return string|null The groupId
    */
    public function getGroupId()
    {
        if (array_key_exists("groupId", $this->_propDict)) {
            return $this->_propDict["groupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupId
    * The ID of the target group for the assignment.
    *
    * @param string $val The value of the groupId
    *
    * @return CloudPcManagementGroupAssignmentTarget
    */
    public function setGroupId($val)
    {
        $this->_propDict["groupId"] = $val;
        return $this;
    }
    /**
    * Gets the servicePlanId
    * The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated.
    *
    * @return string|null The servicePlanId
    */
    public function getServicePlanId()
    {
        if (array_key_exists("servicePlanId", $this->_propDict)) {
            return $this->_propDict["servicePlanId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePlanId
    * The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated.
    *
    * @param string $val The value of the servicePlanId
    *
    * @return CloudPcManagementGroupAssignmentTarget
    */
    public function setServicePlanId($val)
    {
        $this->_propDict["servicePlanId"] = $val;
        return $this;
    }
}
