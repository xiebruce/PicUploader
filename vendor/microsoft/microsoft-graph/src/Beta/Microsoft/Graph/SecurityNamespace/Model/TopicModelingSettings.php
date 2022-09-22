<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TopicModelingSettings File
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
* TopicModelingSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TopicModelingSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the dynamicallyAdjustTopicCount
    * Indicates whether the themes model should dynamically optimize the number of generated topics. To learn more, see Adjust maximum number of themes dynamically.
    *
    * @return bool|null The dynamicallyAdjustTopicCount
    */
    public function getDynamicallyAdjustTopicCount()
    {
        if (array_key_exists("dynamicallyAdjustTopicCount", $this->_propDict)) {
            return $this->_propDict["dynamicallyAdjustTopicCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dynamicallyAdjustTopicCount
    * Indicates whether the themes model should dynamically optimize the number of generated topics. To learn more, see Adjust maximum number of themes dynamically.
    *
    * @param bool $val The value of the dynamicallyAdjustTopicCount
    *
    * @return TopicModelingSettings
    */
    public function setDynamicallyAdjustTopicCount($val)
    {
        $this->_propDict["dynamicallyAdjustTopicCount"] = $val;
        return $this;
    }
    /**
    * Gets the ignoreNumbers
    * Indicates whether the themes model should exclude numbers while parsing document texts. To learn more, see Include numbers in themes.
    *
    * @return bool|null The ignoreNumbers
    */
    public function getIgnoreNumbers()
    {
        if (array_key_exists("ignoreNumbers", $this->_propDict)) {
            return $this->_propDict["ignoreNumbers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ignoreNumbers
    * Indicates whether the themes model should exclude numbers while parsing document texts. To learn more, see Include numbers in themes.
    *
    * @param bool $val The value of the ignoreNumbers
    *
    * @return TopicModelingSettings
    */
    public function setIgnoreNumbers($val)
    {
        $this->_propDict["ignoreNumbers"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabled
    * Indicates whether themes model is enabled for the case.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Indicates whether themes model is enabled for the case.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return TopicModelingSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the topicCount
    * The total number of topics that the themes model will generate for a review set. To learn more, see Maximum number of themes.
    *
    * @return int|null The topicCount
    */
    public function getTopicCount()
    {
        if (array_key_exists("topicCount", $this->_propDict)) {
            return $this->_propDict["topicCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the topicCount
    * The total number of topics that the themes model will generate for a review set. To learn more, see Maximum number of themes.
    *
    * @param int $val The value of the topicCount
    *
    * @return TopicModelingSettings
    */
    public function setTopicCount($val)
    {
        $this->_propDict["topicCount"] = $val;
        return $this;
    }
}
