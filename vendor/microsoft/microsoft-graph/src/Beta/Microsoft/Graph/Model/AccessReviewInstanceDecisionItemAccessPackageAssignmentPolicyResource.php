<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource File
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
* AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource extends AccessReviewInstanceDecisionItemResource
{
    /**
    * Gets the accessPackageDisplayName
    * Display name of the access package to which access has been granted.
    *
    * @return string|null The accessPackageDisplayName
    */
    public function getAccessPackageDisplayName()
    {
        if (array_key_exists("accessPackageDisplayName", $this->_propDict)) {
            return $this->_propDict["accessPackageDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageDisplayName
    * Display name of the access package to which access has been granted.
    *
    * @param string $val The value of the accessPackageDisplayName
    *
    * @return AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
    */
    public function setAccessPackageDisplayName($val)
    {
        $this->_propDict["accessPackageDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the accessPackageId
    * Identifier of the access package to which access has been granted.
    *
    * @return string|null The accessPackageId
    */
    public function getAccessPackageId()
    {
        if (array_key_exists("accessPackageId", $this->_propDict)) {
            return $this->_propDict["accessPackageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageId
    * Identifier of the access package to which access has been granted.
    *
    * @param string $val The value of the accessPackageId
    *
    * @return AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
    */
    public function setAccessPackageId($val)
    {
        $this->_propDict["accessPackageId"] = $val;
        return $this;
    }
}
