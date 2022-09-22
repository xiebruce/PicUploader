<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageDetail File
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
* OrganizationalMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageDetail extends Entity
{
    /**
    * Gets the content
    * The content that will be displayed to clients for the message. This includes the text portion of the message and the displayed logo
    *
    * @return OrganizationalMessageContent|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageContent") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = new OrganizationalMessageContent($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * The content that will be displayed to clients for the message. This includes the text portion of the message and the displayed logo
    *
    * @param OrganizationalMessageContent $val The content
    *
    * @return OrganizationalMessageDetail
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time of when the message was created
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
    * The date and time of when the message was created
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return OrganizationalMessageDetail
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * The date and time of when the message will stop being displayed to clients
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * The date and time of when the message will stop being displayed to clients
    *
    * @param \DateTime $val The endDateTime
    *
    * @return OrganizationalMessageDetail
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the frequency
    * The frequency at which a client will see the message. Possible values are: weeklyOnce, monthlyOnce, monthlyTwice, unknownFutureValue.
    *
    * @return OrganizationalMessageFrequency|null The frequency
    */
    public function getFrequency()
    {
        if (array_key_exists("frequency", $this->_propDict)) {
            if (is_a($this->_propDict["frequency"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageFrequency") || is_null($this->_propDict["frequency"])) {
                return $this->_propDict["frequency"];
            } else {
                $this->_propDict["frequency"] = new OrganizationalMessageFrequency($this->_propDict["frequency"]);
                return $this->_propDict["frequency"];
            }
        }
        return null;
    }

    /**
    * Sets the frequency
    * The frequency at which a client will see the message. Possible values are: weeklyOnce, monthlyOnce, monthlyTwice, unknownFutureValue.
    *
    * @param OrganizationalMessageFrequency $val The frequency
    *
    * @return OrganizationalMessageDetail
    */
    public function setFrequency($val)
    {
        $this->_propDict["frequency"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time of when the message was last modified
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
    * The date and time of when the message was last modified
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return OrganizationalMessageDetail
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the scenario
    * Indicates the scenario for the message. Possible values are: onboarding, lifecycle, unknownFutureValue.
    *
    * @return OrganizationalMessageScenario|null The scenario
    */
    public function getScenario()
    {
        if (array_key_exists("scenario", $this->_propDict)) {
            if (is_a($this->_propDict["scenario"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageScenario") || is_null($this->_propDict["scenario"])) {
                return $this->_propDict["scenario"];
            } else {
                $this->_propDict["scenario"] = new OrganizationalMessageScenario($this->_propDict["scenario"]);
                return $this->_propDict["scenario"];
            }
        }
        return null;
    }

    /**
    * Sets the scenario
    * Indicates the scenario for the message. Possible values are: onboarding, lifecycle, unknownFutureValue.
    *
    * @param OrganizationalMessageScenario $val The scenario
    *
    * @return OrganizationalMessageDetail
    */
    public function setScenario($val)
    {
        $this->_propDict["scenario"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The date and time of when the message will start being displayed to clients
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The date and time of when the message will start being displayed to clients
    *
    * @param \DateTime $val The startDateTime
    *
    * @return OrganizationalMessageDetail
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Indicates the deployment status of the message. Possible values are: scheduled, active, completed, cancelled, unknownFutureValue.
    *
    * @return OrganizationalMessageStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new OrganizationalMessageStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates the deployment status of the message. Possible values are: scheduled, active, completed, cancelled, unknownFutureValue.
    *
    * @param OrganizationalMessageStatus $val The status
    *
    * @return OrganizationalMessageDetail
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the surface
    * Indicates the area where content will be displayed to customers. Possible values are: actionCenter, getStarted, softLanding, unknownFutureValue.
    *
    * @return OrganizationalMessageSurface|null The surface
    */
    public function getSurface()
    {
        if (array_key_exists("surface", $this->_propDict)) {
            if (is_a($this->_propDict["surface"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageSurface") || is_null($this->_propDict["surface"])) {
                return $this->_propDict["surface"];
            } else {
                $this->_propDict["surface"] = new OrganizationalMessageSurface($this->_propDict["surface"]);
                return $this->_propDict["surface"];
            }
        }
        return null;
    }

    /**
    * Sets the surface
    * Indicates the area where content will be displayed to customers. Possible values are: actionCenter, getStarted, softLanding, unknownFutureValue.
    *
    * @param OrganizationalMessageSurface $val The surface
    *
    * @return OrganizationalMessageDetail
    */
    public function setSurface($val)
    {
        $this->_propDict["surface"] = $val;
        return $this;
    }

    /**
    * Gets the targeting
    * The groups of devices that will receive the message. This also contains a list of excluded groups that will not receive the message regardless of the device being part of an included group
    *
    * @return OrganizationalMessageTargeting|null The targeting
    */
    public function getTargeting()
    {
        if (array_key_exists("targeting", $this->_propDict)) {
            if (is_a($this->_propDict["targeting"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageTargeting") || is_null($this->_propDict["targeting"])) {
                return $this->_propDict["targeting"];
            } else {
                $this->_propDict["targeting"] = new OrganizationalMessageTargeting($this->_propDict["targeting"]);
                return $this->_propDict["targeting"];
            }
        }
        return null;
    }

    /**
    * Sets the targeting
    * The groups of devices that will receive the message. This also contains a list of excluded groups that will not receive the message regardless of the device being part of an included group
    *
    * @param OrganizationalMessageTargeting $val The targeting
    *
    * @return OrganizationalMessageDetail
    */
    public function setTargeting($val)
    {
        $this->_propDict["targeting"] = $val;
        return $this;
    }

    /**
    * Gets the theme
    * Indicates the theme for the experience. Possible values are: update, training, welcomeToWindows, explore, unknownFutureValue.
    *
    * @return OrganizationalMessageTheme|null The theme
    */
    public function getTheme()
    {
        if (array_key_exists("theme", $this->_propDict)) {
            if (is_a($this->_propDict["theme"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageTheme") || is_null($this->_propDict["theme"])) {
                return $this->_propDict["theme"];
            } else {
                $this->_propDict["theme"] = new OrganizationalMessageTheme($this->_propDict["theme"]);
                return $this->_propDict["theme"];
            }
        }
        return null;
    }

    /**
    * Sets the theme
    * Indicates the theme for the experience. Possible values are: update, training, welcomeToWindows, explore, unknownFutureValue.
    *
    * @param OrganizationalMessageTheme $val The theme
    *
    * @return OrganizationalMessageDetail
    */
    public function setTheme($val)
    {
        $this->_propDict["theme"] = $val;
        return $this;
    }

    /**
    * Gets the userEngagementStatistics
    * The statistics containing how the message was interacted with by clients. This includes the number of impressions, clicks, and dismisses from targeted clients.
    *
    * @return OrganizationalMessageInsights|null The userEngagementStatistics
    */
    public function getUserEngagementStatistics()
    {
        if (array_key_exists("userEngagementStatistics", $this->_propDict)) {
            if (is_a($this->_propDict["userEngagementStatistics"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageInsights") || is_null($this->_propDict["userEngagementStatistics"])) {
                return $this->_propDict["userEngagementStatistics"];
            } else {
                $this->_propDict["userEngagementStatistics"] = new OrganizationalMessageInsights($this->_propDict["userEngagementStatistics"]);
                return $this->_propDict["userEngagementStatistics"];
            }
        }
        return null;
    }

    /**
    * Sets the userEngagementStatistics
    * The statistics containing how the message was interacted with by clients. This includes the number of impressions, clicks, and dismisses from targeted clients.
    *
    * @param OrganizationalMessageInsights $val The userEngagementStatistics
    *
    * @return OrganizationalMessageDetail
    */
    public function setUserEngagementStatistics($val)
    {
        $this->_propDict["userEngagementStatistics"] = $val;
        return $this;
    }

    /**
    * Gets the variant
    * Indicates the corresponding variant for the experience
    *
    * @return string|null The variant
    */
    public function getVariant()
    {
        if (array_key_exists("variant", $this->_propDict)) {
            return $this->_propDict["variant"];
        } else {
            return null;
        }
    }

    /**
    * Sets the variant
    * Indicates the corresponding variant for the experience
    *
    * @param string $val The variant
    *
    * @return OrganizationalMessageDetail
    */
    public function setVariant($val)
    {
        $this->_propDict["variant"] = $val;
        return $this;
    }

}
