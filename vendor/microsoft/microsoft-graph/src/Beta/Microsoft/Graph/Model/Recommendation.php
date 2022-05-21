<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Recommendation File
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
* Recommendation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Recommendation extends Entity
{

     /**
     * Gets the actionSteps
     *
     * @return array|null The actionSteps
     */
    public function getActionSteps()
    {
        if (array_key_exists("actionSteps", $this->_propDict)) {
           return $this->_propDict["actionSteps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionSteps
    *
    * @param ActionStep[] $val The actionSteps
    *
    * @return Recommendation
    */
    public function setActionSteps($val)
    {
        $this->_propDict["actionSteps"] = $val;
        return $this;
    }

    /**
    * Gets the benefits
    *
    * @return string|null The benefits
    */
    public function getBenefits()
    {
        if (array_key_exists("benefits", $this->_propDict)) {
            return $this->_propDict["benefits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the benefits
    *
    * @param string $val The benefits
    *
    * @return Recommendation
    */
    public function setBenefits($val)
    {
        $this->_propDict["benefits"] = $val;
        return $this;
    }

    /**
    * Gets the category
    *
    * @return RecommendationCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\Model\RecommendationCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new RecommendationCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    *
    * @param RecommendationCategory $val The category
    *
    * @return Recommendation
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
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
    * @return Recommendation
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return Recommendation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the impactStartDateTime
    *
    * @return \DateTime|null The impactStartDateTime
    */
    public function getImpactStartDateTime()
    {
        if (array_key_exists("impactStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["impactStartDateTime"], "\DateTime") || is_null($this->_propDict["impactStartDateTime"])) {
                return $this->_propDict["impactStartDateTime"];
            } else {
                $this->_propDict["impactStartDateTime"] = new \DateTime($this->_propDict["impactStartDateTime"]);
                return $this->_propDict["impactStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the impactStartDateTime
    *
    * @param \DateTime $val The impactStartDateTime
    *
    * @return Recommendation
    */
    public function setImpactStartDateTime($val)
    {
        $this->_propDict["impactStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the impactType
    *
    * @return string|null The impactType
    */
    public function getImpactType()
    {
        if (array_key_exists("impactType", $this->_propDict)) {
            return $this->_propDict["impactType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the impactType
    *
    * @param string $val The impactType
    *
    * @return Recommendation
    */
    public function setImpactType($val)
    {
        $this->_propDict["impactType"] = $val;
        return $this;
    }

    /**
    * Gets the insights
    *
    * @return string|null The insights
    */
    public function getInsights()
    {
        if (array_key_exists("insights", $this->_propDict)) {
            return $this->_propDict["insights"];
        } else {
            return null;
        }
    }

    /**
    * Sets the insights
    *
    * @param string $val The insights
    *
    * @return Recommendation
    */
    public function setInsights($val)
    {
        $this->_propDict["insights"] = $val;
        return $this;
    }

    /**
    * Gets the lastCheckedDateTime
    *
    * @return \DateTime|null The lastCheckedDateTime
    */
    public function getLastCheckedDateTime()
    {
        if (array_key_exists("lastCheckedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCheckedDateTime"], "\DateTime") || is_null($this->_propDict["lastCheckedDateTime"])) {
                return $this->_propDict["lastCheckedDateTime"];
            } else {
                $this->_propDict["lastCheckedDateTime"] = new \DateTime($this->_propDict["lastCheckedDateTime"]);
                return $this->_propDict["lastCheckedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCheckedDateTime
    *
    * @param \DateTime $val The lastCheckedDateTime
    *
    * @return Recommendation
    */
    public function setLastCheckedDateTime($val)
    {
        $this->_propDict["lastCheckedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    *
    * @return string|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            return $this->_propDict["lastModifiedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastModifiedBy
    *
    * @param string $val The lastModifiedBy
    *
    * @return Recommendation
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Recommendation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the postponeUntilDateTime
    *
    * @return \DateTime|null The postponeUntilDateTime
    */
    public function getPostponeUntilDateTime()
    {
        if (array_key_exists("postponeUntilDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["postponeUntilDateTime"], "\DateTime") || is_null($this->_propDict["postponeUntilDateTime"])) {
                return $this->_propDict["postponeUntilDateTime"];
            } else {
                $this->_propDict["postponeUntilDateTime"] = new \DateTime($this->_propDict["postponeUntilDateTime"]);
                return $this->_propDict["postponeUntilDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the postponeUntilDateTime
    *
    * @param \DateTime $val The postponeUntilDateTime
    *
    * @return Recommendation
    */
    public function setPostponeUntilDateTime($val)
    {
        $this->_propDict["postponeUntilDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the priority
    *
    * @return RecommendationPriority|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            if (is_a($this->_propDict["priority"], "\Beta\Microsoft\Graph\Model\RecommendationPriority") || is_null($this->_propDict["priority"])) {
                return $this->_propDict["priority"];
            } else {
                $this->_propDict["priority"] = new RecommendationPriority($this->_propDict["priority"]);
                return $this->_propDict["priority"];
            }
        }
        return null;
    }

    /**
    * Sets the priority
    *
    * @param RecommendationPriority $val The priority
    *
    * @return Recommendation
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return RecommendationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\RecommendationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new RecommendationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param RecommendationStatus $val The status
    *
    * @return Recommendation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the impactedResources
     *
     * @return array|null The impactedResources
     */
    public function getImpactedResources()
    {
        if (array_key_exists("impactedResources", $this->_propDict)) {
           return $this->_propDict["impactedResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the impactedResources
    *
    * @param RecommendationResource[] $val The impactedResources
    *
    * @return Recommendation
    */
    public function setImpactedResources($val)
    {
        $this->_propDict["impactedResources"] = $val;
        return $this;
    }

}
