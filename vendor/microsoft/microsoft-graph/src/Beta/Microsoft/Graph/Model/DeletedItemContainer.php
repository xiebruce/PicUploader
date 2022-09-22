<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeletedItemContainer File
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
* DeletedItemContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeletedItemContainer extends Entity
{

     /**
     * Gets the workflows
    * Deleted workflows that end up in the deletedItemsContainer.
     *
     * @return array|null The workflows
     */
    public function getWorkflows()
    {
        if (array_key_exists("workflows", $this->_propDict)) {
           return $this->_propDict["workflows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workflows
    * Deleted workflows that end up in the deletedItemsContainer.
    *
    * @param \Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\Workflow[] $val The workflows
    *
    * @return DeletedItemContainer
    */
    public function setWorkflows($val)
    {
        $this->_propDict["workflows"] = $val;
        return $this;
    }

}
