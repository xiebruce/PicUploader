<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DispositionReviewStage File
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
* DispositionReviewStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DispositionReviewStage extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the name
    * Name representing each stage within a collection.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name representing each stage within a collection.
    *
    * @param string $val The name
    *
    * @return DispositionReviewStage
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the reviewersEmailAddresses
    * A collection of reviewers at each stage.
    *
    * @return array|null The reviewersEmailAddresses
    */
    public function getReviewersEmailAddresses()
    {
        if (array_key_exists("reviewersEmailAddresses", $this->_propDict)) {
            return $this->_propDict["reviewersEmailAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewersEmailAddresses
    * A collection of reviewers at each stage.
    *
    * @param string[] $val The reviewersEmailAddresses
    *
    * @return DispositionReviewStage
    */
    public function setReviewersEmailAddresses($val)
    {
        $this->_propDict["reviewersEmailAddresses"] = $val;
        return $this;
    }

    /**
    * Gets the stageNumber
    * The sequence number for each stage of the disposition review.
    *
    * @return int|null The stageNumber
    */
    public function getStageNumber()
    {
        if (array_key_exists("stageNumber", $this->_propDict)) {
            return $this->_propDict["stageNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stageNumber
    * The sequence number for each stage of the disposition review.
    *
    * @param int $val The stageNumber
    *
    * @return DispositionReviewStage
    */
    public function setStageNumber($val)
    {
        $this->_propDict["stageNumber"] = intval($val);
        return $this;
    }

}
