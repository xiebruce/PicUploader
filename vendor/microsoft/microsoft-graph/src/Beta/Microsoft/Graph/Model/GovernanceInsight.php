<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceInsight File
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
* GovernanceInsight class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceInsight extends Entity
{
    /**
    * Gets the insightCreatedDateTime
    * Indicates when the insight was created.
    *
    * @return \DateTime|null The insightCreatedDateTime
    */
    public function getInsightCreatedDateTime()
    {
        if (array_key_exists("insightCreatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["insightCreatedDateTime"], "\DateTime") || is_null($this->_propDict["insightCreatedDateTime"])) {
                return $this->_propDict["insightCreatedDateTime"];
            } else {
                $this->_propDict["insightCreatedDateTime"] = new \DateTime($this->_propDict["insightCreatedDateTime"]);
                return $this->_propDict["insightCreatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the insightCreatedDateTime
    * Indicates when the insight was created.
    *
    * @param \DateTime $val The insightCreatedDateTime
    *
    * @return GovernanceInsight
    */
    public function setInsightCreatedDateTime($val)
    {
        $this->_propDict["insightCreatedDateTime"] = $val;
        return $this;
    }

}
