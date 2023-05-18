<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanConfigurationBucketDefinition File
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
* PlannerPlanConfigurationBucketDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlanConfigurationBucketDefinition extends Entity
{
    /**
    * Gets the externalBucketId
    * Application-specified identifier of the bucket.
    *
    * @return string|null The externalBucketId
    */
    public function getExternalBucketId()
    {
        if (array_key_exists("externalBucketId", $this->_propDict)) {
            return $this->_propDict["externalBucketId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalBucketId
    * Application-specified identifier of the bucket.
    *
    * @param string $val The value of the externalBucketId
    *
    * @return PlannerPlanConfigurationBucketDefinition
    */
    public function setExternalBucketId($val)
    {
        $this->_propDict["externalBucketId"] = $val;
        return $this;
    }
}
