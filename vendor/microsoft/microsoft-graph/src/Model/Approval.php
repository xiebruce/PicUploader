<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Approval File
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
* Approval class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Approval extends Entity
{

     /**
     * Gets the stages
    * A collection of stages in the approval decision.
     *
     * @return array|null The stages
     */
    public function getStages()
    {
        if (array_key_exists("stages", $this->_propDict)) {
           return $this->_propDict["stages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stages
    * A collection of stages in the approval decision.
    *
    * @param ApprovalStage[] $val The stages
    *
    * @return Approval
    */
    public function setStages($val)
    {
        $this->_propDict["stages"] = $val;
        return $this;
    }

}
