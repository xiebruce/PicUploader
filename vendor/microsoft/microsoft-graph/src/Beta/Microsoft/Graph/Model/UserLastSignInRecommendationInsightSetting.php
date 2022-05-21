<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserLastSignInRecommendationInsightSetting File
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
* UserLastSignInRecommendationInsightSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserLastSignInRecommendationInsightSetting extends AccessReviewRecommendationInsightSetting
{

    /**
    * Gets the recommendationLookBackDuration
    * Optional. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days.
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
    * Optional. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days.
    *
    * @param \DateInterval $val The value to assign to the recommendationLookBackDuration
    *
    * @return UserLastSignInRecommendationInsightSetting The UserLastSignInRecommendationInsightSetting
    */
    public function setRecommendationLookBackDuration($val)
    {
        $this->_propDict["recommendationLookBackDuration"] = $val;
         return $this;
    }

    /**
    * Gets the signInScope
    * Indicates whether inactivity is calculated based on the user's inactivity in the tenant or in the application. The possible values are tenant, application, unknownFutureValue. application is only relevant when the access review is a review of an assignment to an application.
    *
    * @return UserSignInRecommendationScope|null The signInScope
    */
    public function getSignInScope()
    {
        if (array_key_exists("signInScope", $this->_propDict)) {
            if (is_a($this->_propDict["signInScope"], "\Beta\Microsoft\Graph\Model\UserSignInRecommendationScope") || is_null($this->_propDict["signInScope"])) {
                return $this->_propDict["signInScope"];
            } else {
                $this->_propDict["signInScope"] = new UserSignInRecommendationScope($this->_propDict["signInScope"]);
                return $this->_propDict["signInScope"];
            }
        }
        return null;
    }

    /**
    * Sets the signInScope
    * Indicates whether inactivity is calculated based on the user's inactivity in the tenant or in the application. The possible values are tenant, application, unknownFutureValue. application is only relevant when the access review is a review of an assignment to an application.
    *
    * @param UserSignInRecommendationScope $val The value to assign to the signInScope
    *
    * @return UserLastSignInRecommendationInsightSetting The UserLastSignInRecommendationInsightSetting
    */
    public function setSignInScope($val)
    {
        $this->_propDict["signInScope"] = $val;
         return $this;
    }
}
