<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LifecycleManagementSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;

/**
* LifecycleManagementSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LifecycleManagementSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the emailSettings
    * Defines the settings for emails sent out from email-specific tasks within workflows. Accepts 2 parameterssenderDomain- Defines the domain of who is sending the email. useCompanyBranding- A boolean value that defines if company branding is to be used with the email.
    *
    * @return \Beta\Microsoft\Graph\Model\EmailSettings|null The emailSettings
    */
    public function getEmailSettings()
    {
        if (array_key_exists("emailSettings", $this->_propDict)) {
            if (is_a($this->_propDict["emailSettings"], "\Beta\Microsoft\Graph\Model\EmailSettings") || is_null($this->_propDict["emailSettings"])) {
                return $this->_propDict["emailSettings"];
            } else {
                $this->_propDict["emailSettings"] = new \Beta\Microsoft\Graph\Model\EmailSettings($this->_propDict["emailSettings"]);
                return $this->_propDict["emailSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the emailSettings
    * Defines the settings for emails sent out from email-specific tasks within workflows. Accepts 2 parameterssenderDomain- Defines the domain of who is sending the email. useCompanyBranding- A boolean value that defines if company branding is to be used with the email.
    *
    * @param \Beta\Microsoft\Graph\Model\EmailSettings $val The emailSettings
    *
    * @return LifecycleManagementSettings
    */
    public function setEmailSettings($val)
    {
        $this->_propDict["emailSettings"] = $val;
        return $this;
    }

    /**
    * Gets the workflowScheduleIntervalInHours
    * The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours.
    *
    * @return int|null The workflowScheduleIntervalInHours
    */
    public function getWorkflowScheduleIntervalInHours()
    {
        if (array_key_exists("workflowScheduleIntervalInHours", $this->_propDict)) {
            return $this->_propDict["workflowScheduleIntervalInHours"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workflowScheduleIntervalInHours
    * The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours.
    *
    * @param int $val The workflowScheduleIntervalInHours
    *
    * @return LifecycleManagementSettings
    */
    public function setWorkflowScheduleIntervalInHours($val)
    {
        $this->_propDict["workflowScheduleIntervalInHours"] = intval($val);
        return $this;
    }

}
