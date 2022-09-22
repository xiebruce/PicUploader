<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeletedTeam File
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
* DeletedTeam class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeletedTeam extends Entity
{

     /**
     * Gets the channels
    * The channels those are either shared with this deleted team or created in this deleted team.
     *
     * @return array|null The channels
     */
    public function getChannels()
    {
        if (array_key_exists("channels", $this->_propDict)) {
           return $this->_propDict["channels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the channels
    * The channels those are either shared with this deleted team or created in this deleted team.
    *
    * @param Channel[] $val The channels
    *
    * @return DeletedTeam
    */
    public function setChannels($val)
    {
        $this->_propDict["channels"] = $val;
        return $this;
    }

}
