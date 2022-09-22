<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageInsights File
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
* OrganizationalMessageInsights class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageInsights extends Entity
{
    /**
    * Gets the clicks
    * The number of times this message was clicked on
    *
    * @return int|null The clicks
    */
    public function getClicks()
    {
        if (array_key_exists("clicks", $this->_propDict)) {
            return $this->_propDict["clicks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clicks
    * The number of times this message was clicked on
    *
    * @param int $val The value of the clicks
    *
    * @return OrganizationalMessageInsights
    */
    public function setClicks($val)
    {
        $this->_propDict["clicks"] = $val;
        return $this;
    }
    /**
    * Gets the dismisses
    * The number of times this message was dismissed by a user. This may not be collected for some surfaces and will be null
    *
    * @return int|null The dismisses
    */
    public function getDismisses()
    {
        if (array_key_exists("dismisses", $this->_propDict)) {
            return $this->_propDict["dismisses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dismisses
    * The number of times this message was dismissed by a user. This may not be collected for some surfaces and will be null
    *
    * @param int $val The value of the dismisses
    *
    * @return OrganizationalMessageInsights
    */
    public function setDismisses($val)
    {
        $this->_propDict["dismisses"] = $val;
        return $this;
    }
    /**
    * Gets the impressions
    * The number of times this message was shown to all clients
    *
    * @return int|null The impressions
    */
    public function getImpressions()
    {
        if (array_key_exists("impressions", $this->_propDict)) {
            return $this->_propDict["impressions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the impressions
    * The number of times this message was shown to all clients
    *
    * @param int $val The value of the impressions
    *
    * @return OrganizationalMessageInsights
    */
    public function setImpressions($val)
    {
        $this->_propDict["impressions"] = $val;
        return $this;
    }
}
