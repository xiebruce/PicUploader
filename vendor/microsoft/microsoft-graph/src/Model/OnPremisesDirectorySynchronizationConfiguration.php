<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesDirectorySynchronizationConfiguration File
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
* OnPremisesDirectorySynchronizationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesDirectorySynchronizationConfiguration extends Entity
{

    /**
    * Gets the accidentalDeletionPrevention
    * Contains the accidental deletion prevention configuration for a tenant.
    *
    * @return OnPremisesAccidentalDeletionPrevention|null The accidentalDeletionPrevention
    */
    public function getAccidentalDeletionPrevention()
    {
        if (array_key_exists("accidentalDeletionPrevention", $this->_propDict)) {
            if (is_a($this->_propDict["accidentalDeletionPrevention"], "\Microsoft\Graph\Model\OnPremisesAccidentalDeletionPrevention") || is_null($this->_propDict["accidentalDeletionPrevention"])) {
                return $this->_propDict["accidentalDeletionPrevention"];
            } else {
                $this->_propDict["accidentalDeletionPrevention"] = new OnPremisesAccidentalDeletionPrevention($this->_propDict["accidentalDeletionPrevention"]);
                return $this->_propDict["accidentalDeletionPrevention"];
            }
        }
        return null;
    }

    /**
    * Sets the accidentalDeletionPrevention
    * Contains the accidental deletion prevention configuration for a tenant.
    *
    * @param OnPremisesAccidentalDeletionPrevention $val The value to assign to the accidentalDeletionPrevention
    *
    * @return OnPremisesDirectorySynchronizationConfiguration The OnPremisesDirectorySynchronizationConfiguration
    */
    public function setAccidentalDeletionPrevention($val)
    {
        $this->_propDict["accidentalDeletionPrevention"] = $val;
         return $this;
    }
}
