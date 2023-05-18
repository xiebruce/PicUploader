<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationAutomation File
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
* SimulationAutomation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationAutomation extends Entity
{
    /**
    * Gets the createdBy
    * Identity of the user who created the attack simulation automation.
    *
    * @return EmailIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new EmailIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user who created the attack simulation automation.
    *
    * @param EmailIdentity $val The createdBy
    *
    * @return SimulationAutomation
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time when the attack simulation automation was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date and time when the attack simulation automation was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return SimulationAutomation
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the attack simulation automation.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Description of the attack simulation automation.
    *
    * @param string $val The description
    *
    * @return SimulationAutomation
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the attack simulation automation. Supports $filter and $orderby.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name of the attack simulation automation. Supports $filter and $orderby.
    *
    * @param string $val The displayName
    *
    * @return SimulationAutomation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity of the user who most recently modified the attack simulation automation.
    *
    * @return EmailIdentity|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new EmailIdentity($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Identity of the user who most recently modified the attack simulation automation.
    *
    * @param EmailIdentity $val The lastModifiedBy
    *
    * @return SimulationAutomation
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date and time when the attack simulation automation was most recently modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Date and time when the attack simulation automation was most recently modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return SimulationAutomation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastRunDateTime
    * Date and time of the latest run of the attack simulation automation.
    *
    * @return \DateTime|null The lastRunDateTime
    */
    public function getLastRunDateTime()
    {
        if (array_key_exists("lastRunDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRunDateTime"], "\DateTime") || is_null($this->_propDict["lastRunDateTime"])) {
                return $this->_propDict["lastRunDateTime"];
            } else {
                $this->_propDict["lastRunDateTime"] = new \DateTime($this->_propDict["lastRunDateTime"]);
                return $this->_propDict["lastRunDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRunDateTime
    * Date and time of the latest run of the attack simulation automation.
    *
    * @param \DateTime $val The lastRunDateTime
    *
    * @return SimulationAutomation
    */
    public function setLastRunDateTime($val)
    {
        $this->_propDict["lastRunDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the nextRunDateTime
    * Date and time of the upcoming run of the attack simulation automation.
    *
    * @return \DateTime|null The nextRunDateTime
    */
    public function getNextRunDateTime()
    {
        if (array_key_exists("nextRunDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["nextRunDateTime"], "\DateTime") || is_null($this->_propDict["nextRunDateTime"])) {
                return $this->_propDict["nextRunDateTime"];
            } else {
                $this->_propDict["nextRunDateTime"] = new \DateTime($this->_propDict["nextRunDateTime"]);
                return $this->_propDict["nextRunDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the nextRunDateTime
    * Date and time of the upcoming run of the attack simulation automation.
    *
    * @param \DateTime $val The nextRunDateTime
    *
    * @return SimulationAutomation
    */
    public function setNextRunDateTime($val)
    {
        $this->_propDict["nextRunDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
    *
    * @return SimulationAutomationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\SimulationAutomationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SimulationAutomationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
    *
    * @param SimulationAutomationStatus $val The status
    *
    * @return SimulationAutomation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the runs
    * A collection of simulation automation runs.
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
    * A collection of simulation automation runs.
    *
    * @param SimulationAutomationRun[] $val The runs
    *
    * @return SimulationAutomation
    */
    public function setRuns($val)
    {
        $this->_propDict["runs"] = $val;
        return $this;
    }

}
