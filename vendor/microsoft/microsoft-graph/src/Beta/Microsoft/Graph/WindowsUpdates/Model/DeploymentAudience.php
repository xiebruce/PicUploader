<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeploymentAudience File
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
* DeploymentAudience class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeploymentAudience extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the applicableContent
    * Content eligible to deploy to devices in the audience. Not nullable. Read-only.
     *
     * @return array|null The applicableContent
     */
    public function getApplicableContent()
    {
        if (array_key_exists("applicableContent", $this->_propDict)) {
           return $this->_propDict["applicableContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicableContent
    * Content eligible to deploy to devices in the audience. Not nullable. Read-only.
    *
    * @param ApplicableContent[] $val The applicableContent
    *
    * @return DeploymentAudience
    */
    public function setApplicableContent($val)
    {
        $this->_propDict["applicableContent"] = $val;
        return $this;
    }


     /**
     * Gets the exclusions
    * Specifies the assets to exclude from the audience.
     *
     * @return array|null The exclusions
     */
    public function getExclusions()
    {
        if (array_key_exists("exclusions", $this->_propDict)) {
           return $this->_propDict["exclusions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exclusions
    * Specifies the assets to exclude from the audience.
    *
    * @param UpdatableAsset[] $val The exclusions
    *
    * @return DeploymentAudience
    */
    public function setExclusions($val)
    {
        $this->_propDict["exclusions"] = $val;
        return $this;
    }


     /**
     * Gets the members
    * Specifies the assets to include in the audience.
     *
     * @return array|null The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }

    /**
    * Sets the members
    * Specifies the assets to include in the audience.
    *
    * @param UpdatableAsset[] $val The members
    *
    * @return DeploymentAudience
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }

}
