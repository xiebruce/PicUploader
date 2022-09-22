<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeGraphInsights File
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
* OfficeGraphInsights class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeGraphInsights extends Entity
{

     /**
     * Gets the shared
    * Calculated relationship identifying documents shared with or by the user. This includes URLs, file attachments, and reference attachments to OneDrive for Business and SharePoint files found in Outlook messages and meetings. This also includes URLs and reference attachments to Teams conversations. Ordered by recency of share.
     *
     * @return array|null The shared
     */
    public function getShared()
    {
        if (array_key_exists("shared", $this->_propDict)) {
           return $this->_propDict["shared"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shared
    * Calculated relationship identifying documents shared with or by the user. This includes URLs, file attachments, and reference attachments to OneDrive for Business and SharePoint files found in Outlook messages and meetings. This also includes URLs and reference attachments to Teams conversations. Ordered by recency of share.
    *
    * @param SharedInsight[] $val The shared
    *
    * @return OfficeGraphInsights
    */
    public function setShared($val)
    {
        $this->_propDict["shared"] = $val;
        return $this;
    }


     /**
     * Gets the trending
    * Calculated relationship identifying documents trending around a user. Trending documents are calculated based on activity of the user's closest network of people and include files stored in OneDrive for Business and SharePoint. Trending insights help the user to discover potentially useful content that the user has access to, but has never viewed before.
     *
     * @return array|null The trending
     */
    public function getTrending()
    {
        if (array_key_exists("trending", $this->_propDict)) {
           return $this->_propDict["trending"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trending
    * Calculated relationship identifying documents trending around a user. Trending documents are calculated based on activity of the user's closest network of people and include files stored in OneDrive for Business and SharePoint. Trending insights help the user to discover potentially useful content that the user has access to, but has never viewed before.
    *
    * @param Trending[] $val The trending
    *
    * @return OfficeGraphInsights
    */
    public function setTrending($val)
    {
        $this->_propDict["trending"] = $val;
        return $this;
    }


     /**
     * Gets the used
    * Calculated relationship identifying the latest documents viewed or modified by a user, including OneDrive for Business and SharePoint documents, ranked by recency of use.
     *
     * @return array|null The used
     */
    public function getUsed()
    {
        if (array_key_exists("used", $this->_propDict)) {
           return $this->_propDict["used"];
        } else {
            return null;
        }
    }

    /**
    * Sets the used
    * Calculated relationship identifying the latest documents viewed or modified by a user, including OneDrive for Business and SharePoint documents, ranked by recency of use.
    *
    * @param UsedInsight[] $val The used
    *
    * @return OfficeGraphInsights
    */
    public function setUsed($val)
    {
        $this->_propDict["used"] = $val;
        return $this;
    }

}
