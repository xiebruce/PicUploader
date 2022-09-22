<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TriggersRoot File
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
* TriggersRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TriggersRoot extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the retentionEvents
     *
     * @return array|null The retentionEvents
     */
    public function getRetentionEvents()
    {
        if (array_key_exists("retentionEvents", $this->_propDict)) {
           return $this->_propDict["retentionEvents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the retentionEvents
    *
    * @param RetentionEvent[] $val The retentionEvents
    *
    * @return TriggersRoot
    */
    public function setRetentionEvents($val)
    {
        $this->_propDict["retentionEvents"] = $val;
        return $this;
    }

}
