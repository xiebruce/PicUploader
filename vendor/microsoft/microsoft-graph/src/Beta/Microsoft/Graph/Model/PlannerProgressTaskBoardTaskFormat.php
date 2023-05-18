<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerProgressTaskBoardTaskFormat File
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
* PlannerProgressTaskBoardTaskFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerProgressTaskBoardTaskFormat extends PlannerDelta
{
    /**
    * Gets the orderHint
    * Hint value used to order the task on the progress view of the task board. For details about the supported format, see Using order hints in Planner.
    *
    * @return string|null The orderHint
    */
    public function getOrderHint()
    {
        if (array_key_exists("orderHint", $this->_propDict)) {
            return $this->_propDict["orderHint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the orderHint
    * Hint value used to order the task on the progress view of the task board. For details about the supported format, see Using order hints in Planner.
    *
    * @param string $val The orderHint
    *
    * @return PlannerProgressTaskBoardTaskFormat
    */
    public function setOrderHint($val)
    {
        $this->_propDict["orderHint"] = $val;
        return $this;
    }

}
