<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GradualRolloutSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* GradualRolloutSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GradualRolloutSettings extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the durationBetweenOffers
    * The duration between each set of devices being offered the update. The value is represented in ISO 8601 format for duration. Default value is P1D (1 day).
    *
    * @return \DateInterval|null The durationBetweenOffers
    */
    public function getDurationBetweenOffers()
    {
        if (array_key_exists("durationBetweenOffers", $this->_propDict)) {
            if (is_a($this->_propDict["durationBetweenOffers"], "\DateInterval") || is_null($this->_propDict["durationBetweenOffers"])) {
                return $this->_propDict["durationBetweenOffers"];
            } else {
                $this->_propDict["durationBetweenOffers"] = new \DateInterval($this->_propDict["durationBetweenOffers"]);
                return $this->_propDict["durationBetweenOffers"];
            }
        }
        return null;
    }

    /**
    * Sets the durationBetweenOffers
    * The duration between each set of devices being offered the update. The value is represented in ISO 8601 format for duration. Default value is P1D (1 day).
    *
    * @param \DateInterval $val The value to assign to the durationBetweenOffers
    *
    * @return GradualRolloutSettings The GradualRolloutSettings
    */
    public function setDurationBetweenOffers($val)
    {
        $this->_propDict["durationBetweenOffers"] = $val;
         return $this;
    }
}
