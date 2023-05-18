<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcCrossCloudGovernmentOrganizationMapping File
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
* CloudPcCrossCloudGovernmentOrganizationMapping class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcCrossCloudGovernmentOrganizationMapping extends Entity
{
    /**
    * Gets the organizationIdsInUSGovCloud
    * The tenant ID in the Azure Government cloud corresponding to the GCC tenant in the public cloud. Currently, 1:1 mappings are supported, so this collection can only contain one tenant ID.
    *
    * @return array|null The organizationIdsInUSGovCloud
    */
    public function getOrganizationIdsInUSGovCloud()
    {
        if (array_key_exists("organizationIdsInUSGovCloud", $this->_propDict)) {
            return $this->_propDict["organizationIdsInUSGovCloud"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organizationIdsInUSGovCloud
    * The tenant ID in the Azure Government cloud corresponding to the GCC tenant in the public cloud. Currently, 1:1 mappings are supported, so this collection can only contain one tenant ID.
    *
    * @param string[] $val The organizationIdsInUSGovCloud
    *
    * @return CloudPcCrossCloudGovernmentOrganizationMapping
    */
    public function setOrganizationIdsInUSGovCloud($val)
    {
        $this->_propDict["organizationIdsInUSGovCloud"] = $val;
        return $this;
    }

}
