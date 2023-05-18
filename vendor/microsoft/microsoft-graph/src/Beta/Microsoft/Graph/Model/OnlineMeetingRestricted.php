<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnlineMeetingRestricted File
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
* OnlineMeetingRestricted class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnlineMeetingRestricted extends Entity
{

    /**
    * Gets the contentSharingDisabled
    * Specifies the reason why shared content from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue.
    *
    * @return OnlineMeetingContentSharingDisabledReason|null The contentSharingDisabled
    */
    public function getContentSharingDisabled()
    {
        if (array_key_exists("contentSharingDisabled", $this->_propDict)) {
            if (is_a($this->_propDict["contentSharingDisabled"], "\Beta\Microsoft\Graph\Model\OnlineMeetingContentSharingDisabledReason") || is_null($this->_propDict["contentSharingDisabled"])) {
                return $this->_propDict["contentSharingDisabled"];
            } else {
                $this->_propDict["contentSharingDisabled"] = new OnlineMeetingContentSharingDisabledReason($this->_propDict["contentSharingDisabled"]);
                return $this->_propDict["contentSharingDisabled"];
            }
        }
        return null;
    }

    /**
    * Sets the contentSharingDisabled
    * Specifies the reason why shared content from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue.
    *
    * @param OnlineMeetingContentSharingDisabledReason $val The value to assign to the contentSharingDisabled
    *
    * @return OnlineMeetingRestricted The OnlineMeetingRestricted
    */
    public function setContentSharingDisabled($val)
    {
        $this->_propDict["contentSharingDisabled"] = $val;
         return $this;
    }

    /**
    * Gets the videoDisabled
    * Specifies the reason why video from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue.
    *
    * @return OnlineMeetingVideoDisabledReason|null The videoDisabled
    */
    public function getVideoDisabled()
    {
        if (array_key_exists("videoDisabled", $this->_propDict)) {
            if (is_a($this->_propDict["videoDisabled"], "\Beta\Microsoft\Graph\Model\OnlineMeetingVideoDisabledReason") || is_null($this->_propDict["videoDisabled"])) {
                return $this->_propDict["videoDisabled"];
            } else {
                $this->_propDict["videoDisabled"] = new OnlineMeetingVideoDisabledReason($this->_propDict["videoDisabled"]);
                return $this->_propDict["videoDisabled"];
            }
        }
        return null;
    }

    /**
    * Sets the videoDisabled
    * Specifies the reason why video from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue.
    *
    * @param OnlineMeetingVideoDisabledReason $val The value to assign to the videoDisabled
    *
    * @return OnlineMeetingRestricted The OnlineMeetingRestricted
    */
    public function setVideoDisabled($val)
    {
        $this->_propDict["videoDisabled"] = $val;
         return $this;
    }
}
