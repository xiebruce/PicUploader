<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementReports File
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
* DeviceManagementReports class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementReports extends Entity
{

     /**
     * Gets the exportJobs
    * Entity representing a job to export a report
     *
     * @return array|null The exportJobs
     */
    public function getExportJobs()
    {
        if (array_key_exists("exportJobs", $this->_propDict)) {
           return $this->_propDict["exportJobs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exportJobs
    * Entity representing a job to export a report
    *
    * @param DeviceManagementExportJob[] $val The exportJobs
    *
    * @return DeviceManagementReports
    */
    public function setExportJobs($val)
    {
        $this->_propDict["exportJobs"] = $val;
        return $this;
    }

}
