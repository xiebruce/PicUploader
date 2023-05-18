<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BrowserSiteList File
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
* BrowserSiteList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BrowserSiteList extends Entity
{
    /**
    * Gets the description
    * The description of the site list.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the site list.
    *
    * @param string $val The description
    *
    * @return BrowserSiteList
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the site list.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The name of the site list.
    *
    * @param string $val The displayName
    *
    * @return BrowserSiteList
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The user who last modified the site list.
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * The user who last modified the site list.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return BrowserSiteList
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the site list was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date and time when the site list was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return BrowserSiteList
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the publishedBy
    * The user who published the site list.
    *
    * @return IdentitySet|null The publishedBy
    */
    public function getPublishedBy()
    {
        if (array_key_exists("publishedBy", $this->_propDict)) {
            if (is_a($this->_propDict["publishedBy"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["publishedBy"])) {
                return $this->_propDict["publishedBy"];
            } else {
                $this->_propDict["publishedBy"] = new IdentitySet($this->_propDict["publishedBy"]);
                return $this->_propDict["publishedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the publishedBy
    * The user who published the site list.
    *
    * @param IdentitySet $val The publishedBy
    *
    * @return BrowserSiteList
    */
    public function setPublishedBy($val)
    {
        $this->_propDict["publishedBy"] = $val;
        return $this;
    }

    /**
    * Gets the publishedDateTime
    * The date and time when the site list was published.
    *
    * @return \DateTime|null The publishedDateTime
    */
    public function getPublishedDateTime()
    {
        if (array_key_exists("publishedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["publishedDateTime"], "\DateTime") || is_null($this->_propDict["publishedDateTime"])) {
                return $this->_propDict["publishedDateTime"];
            } else {
                $this->_propDict["publishedDateTime"] = new \DateTime($this->_propDict["publishedDateTime"]);
                return $this->_propDict["publishedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the publishedDateTime
    * The date and time when the site list was published.
    *
    * @param \DateTime $val The publishedDateTime
    *
    * @return BrowserSiteList
    */
    public function setPublishedDateTime($val)
    {
        $this->_propDict["publishedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the revision
    * The current revision of the site list.
    *
    * @return string|null The revision
    */
    public function getRevision()
    {
        if (array_key_exists("revision", $this->_propDict)) {
            return $this->_propDict["revision"];
        } else {
            return null;
        }
    }

    /**
    * Sets the revision
    * The current revision of the site list.
    *
    * @param string $val The revision
    *
    * @return BrowserSiteList
    */
    public function setRevision($val)
    {
        $this->_propDict["revision"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The current status of the site list. The possible values are: draft, published, pending, unknownFutureValue.
    *
    * @return BrowserSiteListStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\BrowserSiteListStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new BrowserSiteListStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The current status of the site list. The possible values are: draft, published, pending, unknownFutureValue.
    *
    * @param BrowserSiteListStatus $val The status
    *
    * @return BrowserSiteList
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the sharedCookies
    * A collection of shared cookies defined for the site list.
     *
     * @return array|null The sharedCookies
     */
    public function getSharedCookies()
    {
        if (array_key_exists("sharedCookies", $this->_propDict)) {
           return $this->_propDict["sharedCookies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharedCookies
    * A collection of shared cookies defined for the site list.
    *
    * @param BrowserSharedCookie[] $val The sharedCookies
    *
    * @return BrowserSiteList
    */
    public function setSharedCookies($val)
    {
        $this->_propDict["sharedCookies"] = $val;
        return $this;
    }


     /**
     * Gets the sites
    * A collection of sites defined for the site list.
     *
     * @return array|null The sites
     */
    public function getSites()
    {
        if (array_key_exists("sites", $this->_propDict)) {
           return $this->_propDict["sites"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sites
    * A collection of sites defined for the site list.
    *
    * @param BrowserSite[] $val The sites
    *
    * @return BrowserSiteList
    */
    public function setSites($val)
    {
        $this->_propDict["sites"] = $val;
        return $this;
    }

}
