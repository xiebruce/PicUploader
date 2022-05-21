<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInactiveUsersQueryScope File
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
* AccessReviewInactiveUsersQueryScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInactiveUsersQueryScope extends AccessReviewQueryScope
{

    /**
    * Gets the inactiveDuration
    * Defines the duration of inactivity. Inactivity is based on the last sign in date of the user compared to the access review instance's start date. If this property is not specified, it's assigned the default value PT0S.
    *
    * @return \DateInterval|null The inactiveDuration
    */
    public function getInactiveDuration()
    {
        if (array_key_exists("inactiveDuration", $this->_propDict)) {
            if (is_a($this->_propDict["inactiveDuration"], "\DateInterval") || is_null($this->_propDict["inactiveDuration"])) {
                return $this->_propDict["inactiveDuration"];
            } else {
                $this->_propDict["inactiveDuration"] = new \DateInterval($this->_propDict["inactiveDuration"]);
                return $this->_propDict["inactiveDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the inactiveDuration
    * Defines the duration of inactivity. Inactivity is based on the last sign in date of the user compared to the access review instance's start date. If this property is not specified, it's assigned the default value PT0S.
    *
    * @param \DateInterval $val The value to assign to the inactiveDuration
    *
    * @return AccessReviewInactiveUsersQueryScope The AccessReviewInactiveUsersQueryScope
    */
    public function setInactiveDuration($val)
    {
        $this->_propDict["inactiveDuration"] = $val;
         return $this;
    }
}
