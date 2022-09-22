<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TriggerTypesRoot File
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
* TriggerTypesRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TriggerTypesRoot extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the retentionEventTypes
     *
     * @return array|null The retentionEventTypes
     */
    public function getRetentionEventTypes()
    {
        if (array_key_exists("retentionEventTypes", $this->_propDict)) {
           return $this->_propDict["retentionEventTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the retentionEventTypes
    *
    * @param RetentionEventType[] $val The retentionEventTypes
    *
    * @return TriggerTypesRoot
    */
    public function setRetentionEventTypes($val)
    {
        $this->_propDict["retentionEventTypes"] = $val;
        return $this;
    }

}
