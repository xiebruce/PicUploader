<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskyServicePrincipalHistoryItem File
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
* RiskyServicePrincipalHistoryItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskyServicePrincipalHistoryItem extends RiskyServicePrincipal
{
    /**
    * Gets the activity
    * The activity related to service principal risk level change.
    *
    * @return RiskServicePrincipalActivity|null The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "\Microsoft\Graph\Model\RiskServicePrincipalActivity") || is_null($this->_propDict["activity"])) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new RiskServicePrincipalActivity($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }

    /**
    * Sets the activity
    * The activity related to service principal risk level change.
    *
    * @param RiskServicePrincipalActivity $val The activity
    *
    * @return RiskyServicePrincipalHistoryItem
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }

    /**
    * Gets the initiatedBy
    * The identifier of the actor of the operation.
    *
    * @return string|null The initiatedBy
    */
    public function getInitiatedBy()
    {
        if (array_key_exists("initiatedBy", $this->_propDict)) {
            return $this->_propDict["initiatedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the initiatedBy
    * The identifier of the actor of the operation.
    *
    * @param string $val The initiatedBy
    *
    * @return RiskyServicePrincipalHistoryItem
    */
    public function setInitiatedBy($val)
    {
        $this->_propDict["initiatedBy"] = $val;
        return $this;
    }

}
