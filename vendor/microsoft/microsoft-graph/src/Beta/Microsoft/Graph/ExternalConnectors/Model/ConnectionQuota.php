<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectionQuota File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

/**
* ConnectionQuota class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectionQuota extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the itemsRemaining
    * The minimum of two values, one representing the items remaining in the connection and the other remaining items at tenant-level. The following equation represents the formula used to calculate the minimum number: min ({max capacity in the connection} – {number of items in the connection}, {tenant quota} – {number of items indexed in all connections}). If the connection is not monetized, such as in a preview connector or preview content experience, then this property is simply the number of remaining items in the connection.
    *
    * @return int|null The itemsRemaining
    */
    public function getItemsRemaining()
    {
        if (array_key_exists("itemsRemaining", $this->_propDict)) {
            return $this->_propDict["itemsRemaining"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemsRemaining
    * The minimum of two values, one representing the items remaining in the connection and the other remaining items at tenant-level. The following equation represents the formula used to calculate the minimum number: min ({max capacity in the connection} – {number of items in the connection}, {tenant quota} – {number of items indexed in all connections}). If the connection is not monetized, such as in a preview connector or preview content experience, then this property is simply the number of remaining items in the connection.
    *
    * @param int $val The itemsRemaining
    *
    * @return ConnectionQuota
    */
    public function setItemsRemaining($val)
    {
        $this->_propDict["itemsRemaining"] = intval($val);
        return $this;
    }

}
