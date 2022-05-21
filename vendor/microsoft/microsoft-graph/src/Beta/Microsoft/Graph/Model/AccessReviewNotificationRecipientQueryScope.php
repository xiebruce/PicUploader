<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewNotificationRecipientQueryScope File
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
* AccessReviewNotificationRecipientQueryScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewNotificationRecipientQueryScope extends AccessReviewNotificationRecipientScope
{
    /**
    * Gets the query
    * This represents the query for who the recipients are. For example, /groups/{group id}/members for group members and /users/{user id} for a specific user.
    *
    * @return string|null The query
    */
    public function getQuery()
    {
        if (array_key_exists("query", $this->_propDict)) {
            return $this->_propDict["query"];
        } else {
            return null;
        }
    }

    /**
    * Sets the query
    * This represents the query for who the recipients are. For example, /groups/{group id}/members for group members and /users/{user id} for a specific user.
    *
    * @param string $val The value of the query
    *
    * @return AccessReviewNotificationRecipientQueryScope
    */
    public function setQuery($val)
    {
        $this->_propDict["query"] = $val;
        return $this;
    }
    /**
    * Gets the queryRoot
    * In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query that is, ./manager) is specified.
    *
    * @return string|null The queryRoot
    */
    public function getQueryRoot()
    {
        if (array_key_exists("queryRoot", $this->_propDict)) {
            return $this->_propDict["queryRoot"];
        } else {
            return null;
        }
    }

    /**
    * Sets the queryRoot
    * In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query that is, ./manager) is specified.
    *
    * @param string $val The value of the queryRoot
    *
    * @return AccessReviewNotificationRecipientQueryScope
    */
    public function setQueryRoot($val)
    {
        $this->_propDict["queryRoot"] = $val;
        return $this;
    }
    /**
    * Gets the queryType
    * Indicates the type of query. Allowed value is MicrosoftGraph.
    *
    * @return string|null The queryType
    */
    public function getQueryType()
    {
        if (array_key_exists("queryType", $this->_propDict)) {
            return $this->_propDict["queryType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the queryType
    * Indicates the type of query. Allowed value is MicrosoftGraph.
    *
    * @param string $val The value of the queryType
    *
    * @return AccessReviewNotificationRecipientQueryScope
    */
    public function setQueryType($val)
    {
        $this->_propDict["queryType"] = $val;
        return $this;
    }
}
