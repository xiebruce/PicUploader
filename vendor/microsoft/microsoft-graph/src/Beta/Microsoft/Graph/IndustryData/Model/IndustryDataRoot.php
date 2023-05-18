<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IndustryDataRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* IndustryDataRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IndustryDataRoot extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the dataConnectors
    * Set of connectors for importing data from source systems.
     *
     * @return array|null The dataConnectors
     */
    public function getDataConnectors()
    {
        if (array_key_exists("dataConnectors", $this->_propDict)) {
           return $this->_propDict["dataConnectors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataConnectors
    * Set of connectors for importing data from source systems.
    *
    * @param IndustryDataConnector[] $val The dataConnectors
    *
    * @return IndustryDataRoot
    */
    public function setDataConnectors($val)
    {
        $this->_propDict["dataConnectors"] = $val;
        return $this;
    }


     /**
     * Gets the inboundFlows
    * Set of data import flow activities to bring data into the canonical store via a connector.
     *
     * @return array|null The inboundFlows
     */
    public function getInboundFlows()
    {
        if (array_key_exists("inboundFlows", $this->_propDict)) {
           return $this->_propDict["inboundFlows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundFlows
    * Set of data import flow activities to bring data into the canonical store via a connector.
    *
    * @param InboundFlow[] $val The inboundFlows
    *
    * @return IndustryDataRoot
    */
    public function setInboundFlows($val)
    {
        $this->_propDict["inboundFlows"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * Set of ephemeral operations that the system runs currently. Read-only.
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    * Set of ephemeral operations that the system runs currently. Read-only.
    *
    * @param \Beta\Microsoft\Graph\Model\LongRunningOperation[] $val The operations
    *
    * @return IndustryDataRoot
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the referenceDefinitions
    * Set of user modifiable system picker types.
     *
     * @return array|null The referenceDefinitions
     */
    public function getReferenceDefinitions()
    {
        if (array_key_exists("referenceDefinitions", $this->_propDict)) {
           return $this->_propDict["referenceDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referenceDefinitions
    * Set of user modifiable system picker types.
    *
    * @param ReferenceDefinition[] $val The referenceDefinitions
    *
    * @return IndustryDataRoot
    */
    public function setReferenceDefinitions($val)
    {
        $this->_propDict["referenceDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the roleGroups
    * Set of groups of individual roles that makes role-based admin simpler.
     *
     * @return array|null The roleGroups
     */
    public function getRoleGroups()
    {
        if (array_key_exists("roleGroups", $this->_propDict)) {
           return $this->_propDict["roleGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleGroups
    * Set of groups of individual roles that makes role-based admin simpler.
    *
    * @param RoleGroup[] $val The roleGroups
    *
    * @return IndustryDataRoot
    */
    public function setRoleGroups($val)
    {
        $this->_propDict["roleGroups"] = $val;
        return $this;
    }


     /**
     * Gets the runs
    * Set of ephemeral runs which present the point-in-time that diagnostic state of activities performed by the system. Read-only.
     *
     * @return array|null The runs
     */
    public function getRuns()
    {
        if (array_key_exists("runs", $this->_propDict)) {
           return $this->_propDict["runs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the runs
    * Set of ephemeral runs which present the point-in-time that diagnostic state of activities performed by the system. Read-only.
    *
    * @param IndustryDataRun[] $val The runs
    *
    * @return IndustryDataRoot
    */
    public function setRuns($val)
    {
        $this->_propDict["runs"] = $val;
        return $this;
    }


     /**
     * Gets the sourceSystems
    * Set of source definitions that represents real-world external systems.
     *
     * @return array|null The sourceSystems
     */
    public function getSourceSystems()
    {
        if (array_key_exists("sourceSystems", $this->_propDict)) {
           return $this->_propDict["sourceSystems"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceSystems
    * Set of source definitions that represents real-world external systems.
    *
    * @param SourceSystemDefinition[] $val The sourceSystems
    *
    * @return IndustryDataRoot
    */
    public function setSourceSystems($val)
    {
        $this->_propDict["sourceSystems"] = $val;
        return $this;
    }


     /**
     * Gets the years
    * Set of years represented in the system.
     *
     * @return array|null The years
     */
    public function getYears()
    {
        if (array_key_exists("years", $this->_propDict)) {
           return $this->_propDict["years"];
        } else {
            return null;
        }
    }

    /**
    * Sets the years
    * Set of years represented in the system.
    *
    * @param YearTimePeriodDefinition[] $val The years
    *
    * @return IndustryDataRoot
    */
    public function setYears($val)
    {
        $this->_propDict["years"] = $val;
        return $this;
    }

}
