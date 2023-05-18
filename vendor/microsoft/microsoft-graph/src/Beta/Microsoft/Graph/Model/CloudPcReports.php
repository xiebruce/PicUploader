<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcReports File
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
* CloudPcReports class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcReports extends Entity
{

     /**
     * Gets the exportJobs
    * The export jobs created for downloading reports.
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
    * The export jobs created for downloading reports.
    *
    * @param CloudPcExportJob[] $val The exportJobs
    *
    * @return CloudPcReports
    */
    public function setExportJobs($val)
    {
        $this->_propDict["exportJobs"] = $val;
        return $this;
    }

}
