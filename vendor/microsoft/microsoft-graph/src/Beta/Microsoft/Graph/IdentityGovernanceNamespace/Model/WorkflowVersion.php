<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkflowVersion File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;

/**
* WorkflowVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkflowVersion extends WorkflowBase
{
    /**
    * Gets the versionNumber
    * The version of the workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
    *
    * @return int|null The versionNumber
    */
    public function getVersionNumber()
    {
        if (array_key_exists("versionNumber", $this->_propDict)) {
            return $this->_propDict["versionNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versionNumber
    * The version of the workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
    *
    * @param int $val The versionNumber
    *
    * @return WorkflowVersion
    */
    public function setVersionNumber($val)
    {
        $this->_propDict["versionNumber"] = intval($val);
        return $this;
    }

}
