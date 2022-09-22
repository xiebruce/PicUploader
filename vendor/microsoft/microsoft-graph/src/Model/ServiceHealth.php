<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceHealth File
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
* ServiceHealth class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceHealth extends Entity
{
    /**
    * Gets the service
    * The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant.
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
    * The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant.
    *
    * @param string $val The service
    *
    * @return ServiceHealth
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Show the overral service health status. Possible values are: serviceOperational, investigating, restoringService, verifyingService, serviceRestored, postIncidentReviewPublished, serviceDegradation, serviceInterruption, extendedRecovery, falsePositive, investigationSuspended, resolved, mitigatedExternal, mitigated, resolvedExternal, confirmed, reported, unknownFutureValue. For more details, see serviceHealthStatus values.
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
    * Show the overral service health status. Possible values are: serviceOperational, investigating, restoringService, verifyingService, serviceRestored, postIncidentReviewPublished, serviceDegradation, serviceInterruption, extendedRecovery, falsePositive, investigationSuspended, resolved, mitigatedExternal, mitigated, resolvedExternal, confirmed, reported, unknownFutureValue. For more details, see serviceHealthStatus values.
    *
    * @param ServiceHealthStatus $val The status
    *
    * @return ServiceHealth
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the issues
    * A collection of issues that happened on the service, with detailed information for each issue.
     *
     * @return array|null The issues
     */
    public function getIssues()
    {
        if (array_key_exists("issues", $this->_propDict)) {
           return $this->_propDict["issues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issues
    * A collection of issues that happened on the service, with detailed information for each issue.
    *
    * @param ServiceHealthIssue[] $val The issues
    *
    * @return ServiceHealth
    */
    public function setIssues($val)
    {
        $this->_propDict["issues"] = $val;
        return $this;
    }

}
