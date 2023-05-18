<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewScheduleSettings File
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
* AccessReviewScheduleSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewScheduleSettings extends Entity
{

    /**
    * Gets the applyActions
    * Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
    *
    * @return AccessReviewApplyAction|null The applyActions
    */
    public function getApplyActions()
    {
        if (array_key_exists("applyActions", $this->_propDict)) {
            if (is_a($this->_propDict["applyActions"], "\Beta\Microsoft\Graph\Model\AccessReviewApplyAction") || is_null($this->_propDict["applyActions"])) {
                return $this->_propDict["applyActions"];
            } else {
                $this->_propDict["applyActions"] = new AccessReviewApplyAction($this->_propDict["applyActions"]);
                return $this->_propDict["applyActions"];
            }
        }
        return null;
    }

    /**
    * Sets the applyActions
    * Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
    *
    * @param AccessReviewApplyAction $val The value to assign to the applyActions
    *
    * @return AccessReviewScheduleSettings The AccessReviewScheduleSettings
    */
    public function setApplyActions($val)
    {
        $this->_propDict["applyActions"] = $val;
         return $this;
    }
    /**
    * Gets the autoApplyDecisionsEnabled
    * Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
    *
    * @return bool|null The autoApplyDecisionsEnabled
    */
    public function getAutoApplyDecisionsEnabled()
    {
        if (array_key_exists("autoApplyDecisionsEnabled", $this->_propDict)) {
            return $this->_propDict["autoApplyDecisionsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoApplyDecisionsEnabled
    * Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
    *
    * @param bool $val The value of the autoApplyDecisionsEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setAutoApplyDecisionsEnabled($val)
    {
        $this->_propDict["autoApplyDecisionsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the decisionHistoriesForReviewersEnabled
    * Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false).
    *
    * @return bool|null The decisionHistoriesForReviewersEnabled
    */
    public function getDecisionHistoriesForReviewersEnabled()
    {
        if (array_key_exists("decisionHistoriesForReviewersEnabled", $this->_propDict)) {
            return $this->_propDict["decisionHistoriesForReviewersEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decisionHistoriesForReviewersEnabled
    * Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false).
    *
    * @param bool $val The value of the decisionHistoriesForReviewersEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setDecisionHistoriesForReviewersEnabled($val)
    {
        $this->_propDict["decisionHistoriesForReviewersEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the defaultDecision
    * Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation.
    *
    * @return string|null The defaultDecision
    */
    public function getDefaultDecision()
    {
        if (array_key_exists("defaultDecision", $this->_propDict)) {
            return $this->_propDict["defaultDecision"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultDecision
    * Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation.
    *
    * @param string $val The value of the defaultDecision
    *
    * @return AccessReviewScheduleSettings
    */
    public function setDefaultDecision($val)
    {
        $this->_propDict["defaultDecision"] = $val;
        return $this;
    }
    /**
    * Gets the defaultDecisionEnabled
    * Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
    *
    * @return bool|null The defaultDecisionEnabled
    */
    public function getDefaultDecisionEnabled()
    {
        if (array_key_exists("defaultDecisionEnabled", $this->_propDict)) {
            return $this->_propDict["defaultDecisionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultDecisionEnabled
    * Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
    *
    * @param bool $val The value of the defaultDecisionEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setDefaultDecisionEnabled($val)
    {
        $this->_propDict["defaultDecisionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the instanceDurationInDays
    * Duration of each recurrence of review (accessReviewInstance) in number of days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property.
    *
    * @return int|null The instanceDurationInDays
    */
    public function getInstanceDurationInDays()
    {
        if (array_key_exists("instanceDurationInDays", $this->_propDict)) {
            return $this->_propDict["instanceDurationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the instanceDurationInDays
    * Duration of each recurrence of review (accessReviewInstance) in number of days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property.
    *
    * @param int $val The value of the instanceDurationInDays
    *
    * @return AccessReviewScheduleSettings
    */
    public function setInstanceDurationInDays($val)
    {
        $this->_propDict["instanceDurationInDays"] = $val;
        return $this;
    }
    /**
    * Gets the justificationRequiredOnApproval
    * Indicates whether reviewers are required to provide justification with their decision. Default value is false.
    *
    * @return bool|null The justificationRequiredOnApproval
    */
    public function getJustificationRequiredOnApproval()
    {
        if (array_key_exists("justificationRequiredOnApproval", $this->_propDict)) {
            return $this->_propDict["justificationRequiredOnApproval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justificationRequiredOnApproval
    * Indicates whether reviewers are required to provide justification with their decision. Default value is false.
    *
    * @param bool $val The value of the justificationRequiredOnApproval
    *
    * @return AccessReviewScheduleSettings
    */
    public function setJustificationRequiredOnApproval($val)
    {
        $this->_propDict["justificationRequiredOnApproval"] = $val;
        return $this;
    }
    /**
    * Gets the mailNotificationsEnabled
    * Indicates whether emails are enabled or disabled. Default value is false.
    *
    * @return bool|null The mailNotificationsEnabled
    */
    public function getMailNotificationsEnabled()
    {
        if (array_key_exists("mailNotificationsEnabled", $this->_propDict)) {
            return $this->_propDict["mailNotificationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mailNotificationsEnabled
    * Indicates whether emails are enabled or disabled. Default value is false.
    *
    * @param bool $val The value of the mailNotificationsEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setMailNotificationsEnabled($val)
    {
        $this->_propDict["mailNotificationsEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the recommendationInsightSettings
    * Optional. Describes the types of insights that aid reviewers to make access review decisions. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationInsightSettings setting will be used instead of the value of this property.
    *
    * @return AccessReviewRecommendationInsightSetting|null The recommendationInsightSettings
    */
    public function getRecommendationInsightSettings()
    {
        if (array_key_exists("recommendationInsightSettings", $this->_propDict)) {
            if (is_a($this->_propDict["recommendationInsightSettings"], "\Beta\Microsoft\Graph\Model\AccessReviewRecommendationInsightSetting") || is_null($this->_propDict["recommendationInsightSettings"])) {
                return $this->_propDict["recommendationInsightSettings"];
            } else {
                $this->_propDict["recommendationInsightSettings"] = new AccessReviewRecommendationInsightSetting($this->_propDict["recommendationInsightSettings"]);
                return $this->_propDict["recommendationInsightSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the recommendationInsightSettings
    * Optional. Describes the types of insights that aid reviewers to make access review decisions. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationInsightSettings setting will be used instead of the value of this property.
    *
    * @param AccessReviewRecommendationInsightSetting $val The value to assign to the recommendationInsightSettings
    *
    * @return AccessReviewScheduleSettings The AccessReviewScheduleSettings
    */
    public function setRecommendationInsightSettings($val)
    {
        $this->_propDict["recommendationInsightSettings"] = $val;
         return $this;
    }

    /**
    * Gets the recommendationLookBackDuration
    * Optional field. Indicates the period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationLookBackDuration setting will be used instead of the value of this property.
    *
    * @return \DateInterval|null The recommendationLookBackDuration
    */
    public function getRecommendationLookBackDuration()
    {
        if (array_key_exists("recommendationLookBackDuration", $this->_propDict)) {
            if (is_a($this->_propDict["recommendationLookBackDuration"], "\DateInterval") || is_null($this->_propDict["recommendationLookBackDuration"])) {
                return $this->_propDict["recommendationLookBackDuration"];
            } else {
                $this->_propDict["recommendationLookBackDuration"] = new \DateInterval($this->_propDict["recommendationLookBackDuration"]);
                return $this->_propDict["recommendationLookBackDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the recommendationLookBackDuration
    * Optional field. Indicates the period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationLookBackDuration setting will be used instead of the value of this property.
    *
    * @param \DateInterval $val The value to assign to the recommendationLookBackDuration
    *
    * @return AccessReviewScheduleSettings The AccessReviewScheduleSettings
    */
    public function setRecommendationLookBackDuration($val)
    {
        $this->_propDict["recommendationLookBackDuration"] = $val;
         return $this;
    }
    /**
    * Gets the recommendationsEnabled
    * Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property.
    *
    * @return bool|null The recommendationsEnabled
    */
    public function getRecommendationsEnabled()
    {
        if (array_key_exists("recommendationsEnabled", $this->_propDict)) {
            return $this->_propDict["recommendationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendationsEnabled
    * Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property.
    *
    * @param bool $val The value of the recommendationsEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setRecommendationsEnabled($val)
    {
        $this->_propDict["recommendationsEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the recurrence
    * Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
    *
    * @return PatternedRecurrence|null The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\PatternedRecurrence") || is_null($this->_propDict["recurrence"])) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrence
    * Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
    *
    * @param PatternedRecurrence $val The value to assign to the recurrence
    *
    * @return AccessReviewScheduleSettings The AccessReviewScheduleSettings
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
         return $this;
    }
    /**
    * Gets the reminderNotificationsEnabled
    * Indicates whether reminders are enabled or disabled. Default value is false.
    *
    * @return bool|null The reminderNotificationsEnabled
    */
    public function getReminderNotificationsEnabled()
    {
        if (array_key_exists("reminderNotificationsEnabled", $this->_propDict)) {
            return $this->_propDict["reminderNotificationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reminderNotificationsEnabled
    * Indicates whether reminders are enabled or disabled. Default value is false.
    *
    * @param bool $val The value of the reminderNotificationsEnabled
    *
    * @return AccessReviewScheduleSettings
    */
    public function setReminderNotificationsEnabled($val)
    {
        $this->_propDict["reminderNotificationsEnabled"] = $val;
        return $this;
    }
}
