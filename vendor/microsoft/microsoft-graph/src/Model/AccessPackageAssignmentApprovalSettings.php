<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentApprovalSettings File
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
* AccessPackageAssignmentApprovalSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentApprovalSettings extends Entity
{
    /**
    * Gets the isApprovalRequiredForAdd
    * If false, then approval is not required for new requests in this policy.
    *
    * @return bool|null The isApprovalRequiredForAdd
    */
    public function getIsApprovalRequiredForAdd()
    {
        if (array_key_exists("isApprovalRequiredForAdd", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForAdd"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForAdd
    * If false, then approval is not required for new requests in this policy.
    *
    * @param bool $val The value of the isApprovalRequiredForAdd
    *
    * @return AccessPackageAssignmentApprovalSettings
    */
    public function setIsApprovalRequiredForAdd($val)
    {
        $this->_propDict["isApprovalRequiredForAdd"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalRequiredForUpdate
    * If false, then approval is not required for updates to requests in this policy.
    *
    * @return bool|null The isApprovalRequiredForUpdate
    */
    public function getIsApprovalRequiredForUpdate()
    {
        if (array_key_exists("isApprovalRequiredForUpdate", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForUpdate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForUpdate
    * If false, then approval is not required for updates to requests in this policy.
    *
    * @param bool $val The value of the isApprovalRequiredForUpdate
    *
    * @return AccessPackageAssignmentApprovalSettings
    */
    public function setIsApprovalRequiredForUpdate($val)
    {
        $this->_propDict["isApprovalRequiredForUpdate"] = $val;
        return $this;
    }

    /**
    * Gets the stages
    * If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
    *
    * @return AccessPackageApprovalStage|null The stages
    */
    public function getStages()
    {
        if (array_key_exists("stages", $this->_propDict)) {
            if (is_a($this->_propDict["stages"], "\Microsoft\Graph\Model\AccessPackageApprovalStage") || is_null($this->_propDict["stages"])) {
                return $this->_propDict["stages"];
            } else {
                $this->_propDict["stages"] = new AccessPackageApprovalStage($this->_propDict["stages"]);
                return $this->_propDict["stages"];
            }
        }
        return null;
    }

    /**
    * Sets the stages
    * If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
    *
    * @param AccessPackageApprovalStage $val The value to assign to the stages
    *
    * @return AccessPackageAssignmentApprovalSettings The AccessPackageAssignmentApprovalSettings
    */
    public function setStages($val)
    {
        $this->_propDict["stages"] = $val;
         return $this;
    }
}
