<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateStepVersion File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* ManagementTemplateStepVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateStepVersion extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the contentMarkdown
    *
    * @return string|null The contentMarkdown
    */
    public function getContentMarkdown()
    {
        if (array_key_exists("contentMarkdown", $this->_propDict)) {
            return $this->_propDict["contentMarkdown"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentMarkdown
    *
    * @param string $val The contentMarkdown
    *
    * @return ManagementTemplateStepVersion
    */
    public function setContentMarkdown($val)
    {
        $this->_propDict["contentMarkdown"] = $val;
        return $this;
    }

    /**
    * Gets the createdByUserId
    *
    * @return string|null The createdByUserId
    */
    public function getCreatedByUserId()
    {
        if (array_key_exists("createdByUserId", $this->_propDict)) {
            return $this->_propDict["createdByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the createdByUserId
    *
    * @param string $val The createdByUserId
    *
    * @return ManagementTemplateStepVersion
    */
    public function setCreatedByUserId($val)
    {
        $this->_propDict["createdByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
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
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ManagementTemplateStepVersion
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastActionByUserId
    *
    * @return string|null The lastActionByUserId
    */
    public function getLastActionByUserId()
    {
        if (array_key_exists("lastActionByUserId", $this->_propDict)) {
            return $this->_propDict["lastActionByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastActionByUserId
    *
    * @param string $val The lastActionByUserId
    *
    * @return ManagementTemplateStepVersion
    */
    public function setLastActionByUserId($val)
    {
        $this->_propDict["lastActionByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the lastActionDateTime
    *
    * @return \DateTime|null The lastActionDateTime
    */
    public function getLastActionDateTime()
    {
        if (array_key_exists("lastActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionDateTime"], "\DateTime") || is_null($this->_propDict["lastActionDateTime"])) {
                return $this->_propDict["lastActionDateTime"];
            } else {
                $this->_propDict["lastActionDateTime"] = new \DateTime($this->_propDict["lastActionDateTime"]);
                return $this->_propDict["lastActionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActionDateTime
    *
    * @param \DateTime $val The lastActionDateTime
    *
    * @return ManagementTemplateStepVersion
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return ManagementTemplateStepVersion
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the version
    *
    * @return int|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    *
    * @param int $val The version
    *
    * @return ManagementTemplateStepVersion
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }

    /**
    * Gets the versionInformation
    *
    * @return string|null The versionInformation
    */
    public function getVersionInformation()
    {
        if (array_key_exists("versionInformation", $this->_propDict)) {
            return $this->_propDict["versionInformation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versionInformation
    *
    * @param string $val The versionInformation
    *
    * @return ManagementTemplateStepVersion
    */
    public function setVersionInformation($val)
    {
        $this->_propDict["versionInformation"] = $val;
        return $this;
    }

    /**
    * Gets the acceptedFor
    *
    * @return ManagementTemplateStep|null The acceptedFor
    */
    public function getAcceptedFor()
    {
        if (array_key_exists("acceptedFor", $this->_propDict)) {
            if (is_a($this->_propDict["acceptedFor"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplateStep") || is_null($this->_propDict["acceptedFor"])) {
                return $this->_propDict["acceptedFor"];
            } else {
                $this->_propDict["acceptedFor"] = new ManagementTemplateStep($this->_propDict["acceptedFor"]);
                return $this->_propDict["acceptedFor"];
            }
        }
        return null;
    }

    /**
    * Sets the acceptedFor
    *
    * @param ManagementTemplateStep $val The acceptedFor
    *
    * @return ManagementTemplateStepVersion
    */
    public function setAcceptedFor($val)
    {
        $this->_propDict["acceptedFor"] = $val;
        return $this;
    }


     /**
     * Gets the deployments
     *
     * @return array|null The deployments
     */
    public function getDeployments()
    {
        if (array_key_exists("deployments", $this->_propDict)) {
           return $this->_propDict["deployments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deployments
    *
    * @param ManagementTemplateStepDeployment[] $val The deployments
    *
    * @return ManagementTemplateStepVersion
    */
    public function setDeployments($val)
    {
        $this->_propDict["deployments"] = $val;
        return $this;
    }

    /**
    * Gets the templateStep
    *
    * @return ManagementTemplateStep|null The templateStep
    */
    public function getTemplateStep()
    {
        if (array_key_exists("templateStep", $this->_propDict)) {
            if (is_a($this->_propDict["templateStep"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplateStep") || is_null($this->_propDict["templateStep"])) {
                return $this->_propDict["templateStep"];
            } else {
                $this->_propDict["templateStep"] = new ManagementTemplateStep($this->_propDict["templateStep"]);
                return $this->_propDict["templateStep"];
            }
        }
        return null;
    }

    /**
    * Sets the templateStep
    *
    * @param ManagementTemplateStep $val The templateStep
    *
    * @return ManagementTemplateStepVersion
    */
    public function setTemplateStep($val)
    {
        $this->_propDict["templateStep"] = $val;
        return $this;
    }

}
