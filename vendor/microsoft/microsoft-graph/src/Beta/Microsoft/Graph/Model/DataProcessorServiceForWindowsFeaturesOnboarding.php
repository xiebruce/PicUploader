<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataProcessorServiceForWindowsFeaturesOnboarding File
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
* DataProcessorServiceForWindowsFeaturesOnboarding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataProcessorServiceForWindowsFeaturesOnboarding extends Entity
{
    /**
    * Gets the areDataProcessorServiceForWindowsFeaturesEnabled
    * Indicates whether the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When TRUE, the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When FALSE, the tenant has not enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. Default value is FALSE.
    *
    * @return bool|null The areDataProcessorServiceForWindowsFeaturesEnabled
    */
    public function getAreDataProcessorServiceForWindowsFeaturesEnabled()
    {
        if (array_key_exists("areDataProcessorServiceForWindowsFeaturesEnabled", $this->_propDict)) {
            return $this->_propDict["areDataProcessorServiceForWindowsFeaturesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the areDataProcessorServiceForWindowsFeaturesEnabled
    * Indicates whether the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When TRUE, the tenant has enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. When FALSE, the tenant has not enabled MEM features utilizing Data Processor Service for Windows (DPSW) data. Default value is FALSE.
    *
    * @param bool $val The value of the areDataProcessorServiceForWindowsFeaturesEnabled
    *
    * @return DataProcessorServiceForWindowsFeaturesOnboarding
    */
    public function setAreDataProcessorServiceForWindowsFeaturesEnabled($val)
    {
        $this->_propDict["areDataProcessorServiceForWindowsFeaturesEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the hasValidWindowsLicense
    * Indicates whether the tenant has required Windows license. When TRUE, the tenant has the required Windows license. When FALSE, the tenant does not have the required Windows license. Default value is FALSE.
    *
    * @return bool|null The hasValidWindowsLicense
    */
    public function getHasValidWindowsLicense()
    {
        if (array_key_exists("hasValidWindowsLicense", $this->_propDict)) {
            return $this->_propDict["hasValidWindowsLicense"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasValidWindowsLicense
    * Indicates whether the tenant has required Windows license. When TRUE, the tenant has the required Windows license. When FALSE, the tenant does not have the required Windows license. Default value is FALSE.
    *
    * @param bool $val The value of the hasValidWindowsLicense
    *
    * @return DataProcessorServiceForWindowsFeaturesOnboarding
    */
    public function setHasValidWindowsLicense($val)
    {
        $this->_propDict["hasValidWindowsLicense"] = $val;
        return $this;
    }
}
