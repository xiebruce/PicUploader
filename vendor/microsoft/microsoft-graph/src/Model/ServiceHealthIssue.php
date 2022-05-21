<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceHealthIssue File
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
* ServiceHealthIssue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceHealthIssue extends ServiceAnnouncementBase
{
    /**
    * Gets the classification
    * The type of service health issue. Possible values are: advisory, incident, unknownFutureValue.
    *
    * @return ServiceHealthClassificationType|null The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Microsoft\Graph\Model\ServiceHealthClassificationType") || is_null($this->_propDict["classification"])) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new ServiceHealthClassificationType($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }

    /**
    * Sets the classification
    * The type of service health issue. Possible values are: advisory, incident, unknownFutureValue.
    *
    * @param ServiceHealthClassificationType $val The classification
    *
    * @return ServiceHealthIssue
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }

    /**
    * Gets the feature
    * The feature name of the service issue.
    *
    * @return string|null The feature
    */
    public function getFeature()
    {
        if (array_key_exists("feature", $this->_propDict)) {
            return $this->_propDict["feature"];
        } else {
            return null;
        }
    }

    /**
    * Sets the feature
    * The feature name of the service issue.
    *
    * @param string $val The feature
    *
    * @return ServiceHealthIssue
    */
    public function setFeature($val)
    {
        $this->_propDict["feature"] = $val;
        return $this;
    }

    /**
    * Gets the featureGroup
    * The feature group name of the service issue.
    *
    * @return string|null The featureGroup
    */
    public function getFeatureGroup()
    {
        if (array_key_exists("featureGroup", $this->_propDict)) {
            return $this->_propDict["featureGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the featureGroup
    * The feature group name of the service issue.
    *
    * @param string $val The featureGroup
    *
    * @return ServiceHealthIssue
    */
    public function setFeatureGroup($val)
    {
        $this->_propDict["featureGroup"] = $val;
        return $this;
    }

    /**
    * Gets the impactDescription
    * The description of the service issue impact.
    *
    * @return string|null The impactDescription
    */
    public function getImpactDescription()
    {
        if (array_key_exists("impactDescription", $this->_propDict)) {
            return $this->_propDict["impactDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the impactDescription
    * The description of the service issue impact.
    *
    * @param string $val The impactDescription
    *
    * @return ServiceHealthIssue
    */
    public function setImpactDescription($val)
    {
        $this->_propDict["impactDescription"] = $val;
        return $this;
    }

    /**
    * Gets the isResolved
    * Indicates whether the issue is resolved.
    *
    * @return bool|null The isResolved
    */
    public function getIsResolved()
    {
        if (array_key_exists("isResolved", $this->_propDict)) {
            return $this->_propDict["isResolved"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isResolved
    * Indicates whether the issue is resolved.
    *
    * @param bool $val The isResolved
    *
    * @return ServiceHealthIssue
    */
    public function setIsResolved($val)
    {
        $this->_propDict["isResolved"] = boolval($val);
        return $this;
    }

    /**
    * Gets the origin
    * Indicates the origin of the service issue. Possible values are: microsoft, thirdParty, customer, unknownFutureValue.
    *
    * @return ServiceHealthOrigin|null The origin
    */
    public function getOrigin()
    {
        if (array_key_exists("origin", $this->_propDict)) {
            if (is_a($this->_propDict["origin"], "\Microsoft\Graph\Model\ServiceHealthOrigin") || is_null($this->_propDict["origin"])) {
                return $this->_propDict["origin"];
            } else {
                $this->_propDict["origin"] = new ServiceHealthOrigin($this->_propDict["origin"]);
                return $this->_propDict["origin"];
            }
        }
        return null;
    }

    /**
    * Sets the origin
    * Indicates the origin of the service issue. Possible values are: microsoft, thirdParty, customer, unknownFutureValue.
    *
    * @param ServiceHealthOrigin $val The origin
    *
    * @return ServiceHealthIssue
    */
    public function setOrigin($val)
    {
        $this->_propDict["origin"] = $val;
        return $this;
    }


     /**
     * Gets the posts
    * Collection of historical posts for the service issue.
     *
     * @return array|null The posts
     */
    public function getPosts()
    {
        if (array_key_exists("posts", $this->_propDict)) {
           return $this->_propDict["posts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the posts
    * Collection of historical posts for the service issue.
    *
    * @param ServiceHealthIssuePost[] $val The posts
    *
    * @return ServiceHealthIssue
    */
    public function setPosts($val)
    {
        $this->_propDict["posts"] = $val;
        return $this;
    }

    /**
    * Gets the service
    * Indicates the service affected by the issue.
    *
    * @return string|null The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            return $this->_propDict["service"];
        } else {
            return null;
        }
    }

    /**
    * Sets the service
    * Indicates the service affected by the issue.
    *
    * @param string $val The service
    *
    * @return ServiceHealthIssue
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the service issue. Possible values are: serviceOperational, investigating, restoringService, verifyingService, serviceRestored, postIncidentReviewPublished, serviceDegradation, serviceInterruption, extendedRecovery, falsePositive, investigationSuspended, resolved, mitigatedExternal, mitigated, resolvedExternal, confirmed, reported, unknownFutureValue. For more details, see serviceHealthStatus values.
    *
    * @return ServiceHealthStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\ServiceHealthStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ServiceHealthStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the service issue. Possible values are: serviceOperational, investigating, restoringService, verifyingService, serviceRestored, postIncidentReviewPublished, serviceDegradation, serviceInterruption, extendedRecovery, falsePositive, investigationSuspended, resolved, mitigatedExternal, mitigated, resolvedExternal, confirmed, reported, unknownFutureValue. For more details, see serviceHealthStatus values.
    *
    * @param ServiceHealthStatus $val The status
    *
    * @return ServiceHealthIssue
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
