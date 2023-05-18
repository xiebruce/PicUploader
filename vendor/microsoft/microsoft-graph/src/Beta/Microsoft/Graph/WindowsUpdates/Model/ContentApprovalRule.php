<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentApprovalRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* ContentApprovalRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentApprovalRule extends ComplianceChangeRule
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.windowsUpdates.contentApprovalRule");
    }


    /**
    * Gets the contentFilter
    * A filter to determine which content matches the rule on an ongoing basis.
    *
    * @return ContentFilter|null The contentFilter
    */
    public function getContentFilter()
    {
        if (array_key_exists("contentFilter", $this->_propDict)) {
            if (is_a($this->_propDict["contentFilter"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\ContentFilter") || is_null($this->_propDict["contentFilter"])) {
                return $this->_propDict["contentFilter"];
            } else {
                $this->_propDict["contentFilter"] = new ContentFilter($this->_propDict["contentFilter"]);
                return $this->_propDict["contentFilter"];
            }
        }
        return null;
    }

    /**
    * Sets the contentFilter
    * A filter to determine which content matches the rule on an ongoing basis.
    *
    * @param ContentFilter $val The value to assign to the contentFilter
    *
    * @return ContentApprovalRule The ContentApprovalRule
    */
    public function setContentFilter($val)
    {
        $this->_propDict["contentFilter"] = $val;
         return $this;
    }

    /**
    * Gets the durationBeforeDeploymentStart
    * The time before the deployment starts represented in ISO 8601 format for durations.
    *
    * @return \DateInterval|null The durationBeforeDeploymentStart
    */
    public function getDurationBeforeDeploymentStart()
    {
        if (array_key_exists("durationBeforeDeploymentStart", $this->_propDict)) {
            if (is_a($this->_propDict["durationBeforeDeploymentStart"], "\DateInterval") || is_null($this->_propDict["durationBeforeDeploymentStart"])) {
                return $this->_propDict["durationBeforeDeploymentStart"];
            } else {
                $this->_propDict["durationBeforeDeploymentStart"] = new \DateInterval($this->_propDict["durationBeforeDeploymentStart"]);
                return $this->_propDict["durationBeforeDeploymentStart"];
            }
        }
        return null;
    }

    /**
    * Sets the durationBeforeDeploymentStart
    * The time before the deployment starts represented in ISO 8601 format for durations.
    *
    * @param \DateInterval $val The value to assign to the durationBeforeDeploymentStart
    *
    * @return ContentApprovalRule The ContentApprovalRule
    */
    public function setDurationBeforeDeploymentStart($val)
    {
        $this->_propDict["durationBeforeDeploymentStart"] = $val;
         return $this;
    }
}
