<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityGroupEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* SecurityGroupEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityGroupEvidence extends AlertEvidence
{
    /**
    * Gets the displayName
    * The name of the security group.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The name of the security group.
    *
    * @param string $val The value of the displayName
    *
    * @return SecurityGroupEvidence
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the securityGroupId
    * Unique identifier of the security group.
    *
    * @return string|null The securityGroupId
    */
    public function getSecurityGroupId()
    {
        if (array_key_exists("securityGroupId", $this->_propDict)) {
            return $this->_propDict["securityGroupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityGroupId
    * Unique identifier of the security group.
    *
    * @param string $val The value of the securityGroupId
    *
    * @return SecurityGroupEvidence
    */
    public function setSecurityGroupId($val)
    {
        $this->_propDict["securityGroupId"] = $val;
        return $this;
    }
}
