<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerBucketCreation File
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
* PlannerBucketCreation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerBucketCreation extends Entity
{

    /**
    * Gets the creationSourceKind
    * Specifies what kind of creation source the bucket is created with. The possible values are: external, publication and unknownFutureValue.
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
    * Specifies what kind of creation source the bucket is created with. The possible values are: external, publication and unknownFutureValue.
    *
    * @param PlannerCreationSourceKind $val The value to assign to the creationSourceKind
    *
    * @return PlannerBucketCreation The PlannerBucketCreation
    */
    public function setCreationSourceKind($val)
    {
        $this->_propDict["creationSourceKind"] = $val;
         return $this;
    }
}
