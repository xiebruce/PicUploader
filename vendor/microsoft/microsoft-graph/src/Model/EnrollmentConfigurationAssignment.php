<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentConfigurationAssignment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* EnrollmentConfigurationAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EnrollmentConfigurationAssignment extends Entity
{
    /**
    * Gets the target
    * Not yet documented
    *
    * @return DeviceAndAppManagementAssignmentTarget The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    * Not yet documented
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return EnrollmentConfigurationAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}