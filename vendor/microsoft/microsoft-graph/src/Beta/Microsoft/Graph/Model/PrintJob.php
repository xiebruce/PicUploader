<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintJob File
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
* PrintJob class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintJob extends Entity
{
    /**
    * Gets the acknowledgedDateTime
    *
    * @return \DateTime|null The acknowledgedDateTime
    */
    public function getAcknowledgedDateTime()
    {
        if (array_key_exists("acknowledgedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["acknowledgedDateTime"], "\DateTime") || is_null($this->_propDict["acknowledgedDateTime"])) {
                return $this->_propDict["acknowledgedDateTime"];
            } else {
                $this->_propDict["acknowledgedDateTime"] = new \DateTime($this->_propDict["acknowledgedDateTime"]);
                return $this->_propDict["acknowledgedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the acknowledgedDateTime
    *
    * @param \DateTime $val The acknowledgedDateTime
    *
    * @return PrintJob
    */
    public function setAcknowledgedDateTime($val)
    {
        $this->_propDict["acknowledgedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the completedDateTime
    *
    * @return \DateTime|null The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime") || is_null($this->_propDict["completedDateTime"])) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completedDateTime
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return PrintJob
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the configuration
    * A group of settings that a printer should use to print a job.
    *
    * @return PrintJobConfiguration|null The configuration
    */
    public function getConfiguration()
    {
        if (array_key_exists("configuration", $this->_propDict)) {
            if (is_a($this->_propDict["configuration"], "\Beta\Microsoft\Graph\Model\PrintJobConfiguration") || is_null($this->_propDict["configuration"])) {
                return $this->_propDict["configuration"];
            } else {
                $this->_propDict["configuration"] = new PrintJobConfiguration($this->_propDict["configuration"]);
                return $this->_propDict["configuration"];
            }
        }
        return null;
    }

    /**
    * Sets the configuration
    * A group of settings that a printer should use to print a job.
    *
    * @param PrintJobConfiguration $val The configuration
    *
    * @return PrintJob
    */
    public function setConfiguration($val)
    {
        $this->_propDict["configuration"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    *
    * @return UserIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\UserIdentity") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    *
    * @param UserIdentity $val The createdBy
    *
    * @return PrintJob
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The DateTimeOffset when the job was created. Read-only.
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
    * The DateTimeOffset when the job was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PrintJob
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the print job.
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
    * The name of the print job.
    *
    * @param string $val The displayName
    *
    * @return PrintJob
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the errorCode
    *
    * @return int|null The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    *
    * @param int $val The errorCode
    *
    * @return PrintJob
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = intval($val);
        return $this;
    }

    /**
    * Gets the isFetchable
    * If true, document can be fetched by printer.
    *
    * @return bool|null The isFetchable
    */
    public function getIsFetchable()
    {
        if (array_key_exists("isFetchable", $this->_propDict)) {
            return $this->_propDict["isFetchable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFetchable
    * If true, document can be fetched by printer.
    *
    * @param bool $val The isFetchable
    *
    * @return PrintJob
    */
    public function setIsFetchable($val)
    {
        $this->_propDict["isFetchable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the redirectedFrom
    * Contains the source job URL, if the job has been redirected from another printer.
    *
    * @return string|null The redirectedFrom
    */
    public function getRedirectedFrom()
    {
        if (array_key_exists("redirectedFrom", $this->_propDict)) {
            return $this->_propDict["redirectedFrom"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectedFrom
    * Contains the source job URL, if the job has been redirected from another printer.
    *
    * @param string $val The redirectedFrom
    *
    * @return PrintJob
    */
    public function setRedirectedFrom($val)
    {
        $this->_propDict["redirectedFrom"] = $val;
        return $this;
    }

    /**
    * Gets the redirectedTo
    * Contains the destination job URL, if the job has been redirected to another printer.
    *
    * @return string|null The redirectedTo
    */
    public function getRedirectedTo()
    {
        if (array_key_exists("redirectedTo", $this->_propDict)) {
            return $this->_propDict["redirectedTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectedTo
    * Contains the destination job URL, if the job has been redirected to another printer.
    *
    * @param string $val The redirectedTo
    *
    * @return PrintJob
    */
    public function setRedirectedTo($val)
    {
        $this->_propDict["redirectedTo"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the print job. Read-only.
    *
    * @return PrintJobStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\PrintJobStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new PrintJobStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the print job. Read-only.
    *
    * @param PrintJobStatus $val The status
    *
    * @return PrintJob
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the documents
     *
     * @return array|null The documents
     */
    public function getDocuments()
    {
        if (array_key_exists("documents", $this->_propDict)) {
           return $this->_propDict["documents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the documents
    *
    * @param PrintDocument[] $val The documents
    *
    * @return PrintJob
    */
    public function setDocuments($val)
    {
        $this->_propDict["documents"] = $val;
        return $this;
    }


     /**
     * Gets the tasks
    * A list of printTasks that were triggered by this print job.
     *
     * @return array|null The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tasks
    * A list of printTasks that were triggered by this print job.
    *
    * @param PrintTask[] $val The tasks
    *
    * @return PrintJob
    */
    public function setTasks($val)
    {
        $this->_propDict["tasks"] = $val;
        return $this;
    }

}
