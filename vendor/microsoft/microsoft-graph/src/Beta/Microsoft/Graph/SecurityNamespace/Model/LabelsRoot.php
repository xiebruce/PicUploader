<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LabelsRoot File
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
* LabelsRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LabelsRoot extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the retentionLabels
     *
     * @return array|null The retentionLabels
     */
    public function getRetentionLabels()
    {
        if (array_key_exists("retentionLabels", $this->_propDict)) {
           return $this->_propDict["retentionLabels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the retentionLabels
    *
    * @param RetentionLabel[] $val The retentionLabels
    *
    * @return LabelsRoot
    */
    public function setRetentionLabels($val)
    {
        $this->_propDict["retentionLabels"] = $val;
        return $this;
    }

}
