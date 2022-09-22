<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailUrlThreatSubmission File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* EmailUrlThreatSubmission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailUrlThreatSubmission extends EmailThreatSubmission
{
    /**
    * Gets the messageUrl
    * Specifies the url of the message to be submitted.
    *
    * @return string|null The messageUrl
    */
    public function getMessageUrl()
    {
        if (array_key_exists("messageUrl", $this->_propDict)) {
            return $this->_propDict["messageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messageUrl
    * Specifies the url of the message to be submitted.
    *
    * @param string $val The messageUrl
    *
    * @return EmailUrlThreatSubmission
    */
    public function setMessageUrl($val)
    {
        $this->_propDict["messageUrl"] = $val;
        return $this;
    }

}
