<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskCreation File
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
* PlannerTaskCreation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskCreation extends Entity
{

    /**
    * Gets the creationSourceKind
    * Specifies what kind of creation source the task is created with. The possible values are: external, publication and unknownFutureValue.
    *
    * @return PlannerCreationSourceKind|null The creationSourceKind
    */
    public function getCreationSourceKind()
    {
        if (array_key_exists("creationSourceKind", $this->_propDict)) {
            if (is_a($this->_propDict["creationSourceKind"], "\Beta\Microsoft\Graph\Model\PlannerCreationSourceKind") || is_null($this->_propDict["creationSourceKind"])) {
                return $this->_propDict["creationSourceKind"];
            } else {
                $this->_propDict["creationSourceKind"] = new PlannerCreationSourceKind($this->_propDict["creationSourceKind"]);
                return $this->_propDict["creationSourceKind"];
            }
        }
        return null;
    }

    /**
    * Sets the creationSourceKind
    * Specifies what kind of creation source the task is created with. The possible values are: external, publication and unknownFutureValue.
    *
    * @param PlannerCreationSourceKind $val The value to assign to the creationSourceKind
    *
    * @return PlannerTaskCreation The PlannerTaskCreation
    */
    public function setCreationSourceKind($val)
    {
        $this->_propDict["creationSourceKind"] = $val;
         return $this;
    }

    /**
    * Gets the teamsPublicationInfo
    * Information about the publication process that created this task. This field is deprecated and clients should move to using the new inheritance model.
    *
    * @return PlannerTeamsPublicationInfo|null The teamsPublicationInfo
    */
    public function getTeamsPublicationInfo()
    {
        if (array_key_exists("teamsPublicationInfo", $this->_propDict)) {
            if (is_a($this->_propDict["teamsPublicationInfo"], "\Beta\Microsoft\Graph\Model\PlannerTeamsPublicationInfo") || is_null($this->_propDict["teamsPublicationInfo"])) {
                return $this->_propDict["teamsPublicationInfo"];
            } else {
                $this->_propDict["teamsPublicationInfo"] = new PlannerTeamsPublicationInfo($this->_propDict["teamsPublicationInfo"]);
                return $this->_propDict["teamsPublicationInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsPublicationInfo
    * Information about the publication process that created this task. This field is deprecated and clients should move to using the new inheritance model.
    *
    * @param PlannerTeamsPublicationInfo $val The value to assign to the teamsPublicationInfo
    *
    * @return PlannerTaskCreation The PlannerTaskCreation
    */
    public function setTeamsPublicationInfo($val)
    {
        $this->_propDict["teamsPublicationInfo"] = $val;
         return $this;
    }
}
