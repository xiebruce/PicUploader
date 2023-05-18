<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BrowserSharedCookie File
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
* BrowserSharedCookie class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BrowserSharedCookie extends Entity
{
    /**
    * Gets the comment
    * The comment for the shared cookie.
    *
    * @return string|null The comment
    */
    public function getComment()
    {
        if (array_key_exists("comment", $this->_propDict)) {
            return $this->_propDict["comment"];
        } else {
            return null;
        }
    }

    /**
    * Sets the comment
    * The comment for the shared cookie.
    *
    * @param string $val The comment
    *
    * @return BrowserSharedCookie
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the shared cookie was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The date and time when the shared cookie was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return BrowserSharedCookie
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deletedDateTime
    * The date and time when the shared cookie was deleted.
    *
    * @return \DateTime|null The deletedDateTime
    */
    public function getDeletedDateTime()
    {
        if (array_key_exists("deletedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDateTime"], "\DateTime") || is_null($this->_propDict["deletedDateTime"])) {
                return $this->_propDict["deletedDateTime"];
            } else {
                $this->_propDict["deletedDateTime"] = new \DateTime($this->_propDict["deletedDateTime"]);
                return $this->_propDict["deletedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deletedDateTime
    * The date and time when the shared cookie was deleted.
    *
    * @param \DateTime $val The deletedDateTime
    *
    * @return BrowserSharedCookie
    */
    public function setDeletedDateTime($val)
    {
        $this->_propDict["deletedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the cookie.
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
    * The name of the cookie.
    *
    * @param string $val The displayName
    *
    * @return BrowserSharedCookie
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }


     /**
     * Gets the history
    * The history of modifications applied to the cookie.
     *
     * @return array|null The history
     */
    public function getHistory()
    {
        if (array_key_exists("history", $this->_propDict)) {
           return $this->_propDict["history"];
        } else {
            return null;
        }
    }

    /**
    * Sets the history
    * The history of modifications applied to the cookie.
    *
    * @param BrowserSharedCookieHistory[] $val The history
    *
    * @return BrowserSharedCookie
    */
    public function setHistory($val)
    {
        $this->_propDict["history"] = $val;
        return $this;
    }

    /**
    * Gets the hostOnly
    * Controls whether a cookie is a host-only or domain cookie.
    *
    * @return bool|null The hostOnly
    */
    public function getHostOnly()
    {
        if (array_key_exists("hostOnly", $this->_propDict)) {
            return $this->_propDict["hostOnly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostOnly
    * Controls whether a cookie is a host-only or domain cookie.
    *
    * @param bool $val The hostOnly
    *
    * @return BrowserSharedCookie
    */
    public function setHostOnly($val)
    {
        $this->_propDict["hostOnly"] = boolval($val);
        return $this;
    }

    /**
    * Gets the hostOrDomain
    * The URL of the cookie.
    *
    * @return string|null The hostOrDomain
    */
    public function getHostOrDomain()
    {
        if (array_key_exists("hostOrDomain", $this->_propDict)) {
            return $this->_propDict["hostOrDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostOrDomain
    * The URL of the cookie.
    *
    * @param string $val The hostOrDomain
    *
    * @return BrowserSharedCookie
    */
    public function setHostOrDomain($val)
    {
        $this->_propDict["hostOrDomain"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The user who last modified the cookie.
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
    * The user who last modified the cookie.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return BrowserSharedCookie
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the cookie was last modified.
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
    * The date and time when the cookie was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return BrowserSharedCookie
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the path
    * The path of the cookie.
    *
    * @return string|null The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
    * Sets the path
    * The path of the cookie.
    *
    * @param string $val The path
    *
    * @return BrowserSharedCookie
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }

    /**
    * Gets the sourceEnvironment
    * Specifies how the cookies are shared between Microsoft Edge and Internet Explorer. The possible values are: microsoftEdge, internetExplorer11, both, unknownFutureValue.
    *
    * @return BrowserSharedCookieSourceEnvironment|null The sourceEnvironment
    */
    public function getSourceEnvironment()
    {
        if (array_key_exists("sourceEnvironment", $this->_propDict)) {
            if (is_a($this->_propDict["sourceEnvironment"], "\Microsoft\Graph\Model\BrowserSharedCookieSourceEnvironment") || is_null($this->_propDict["sourceEnvironment"])) {
                return $this->_propDict["sourceEnvironment"];
            } else {
                $this->_propDict["sourceEnvironment"] = new BrowserSharedCookieSourceEnvironment($this->_propDict["sourceEnvironment"]);
                return $this->_propDict["sourceEnvironment"];
            }
        }
        return null;
    }

    /**
    * Sets the sourceEnvironment
    * Specifies how the cookies are shared between Microsoft Edge and Internet Explorer. The possible values are: microsoftEdge, internetExplorer11, both, unknownFutureValue.
    *
    * @param BrowserSharedCookieSourceEnvironment $val The sourceEnvironment
    *
    * @return BrowserSharedCookie
    */
    public function setSourceEnvironment($val)
    {
        $this->_propDict["sourceEnvironment"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the cookie. The possible values are: published, pendingAdd, pendingEdit, pendingDelete, unknownFutureValue.
    *
    * @return BrowserSharedCookieStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\BrowserSharedCookieStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new BrowserSharedCookieStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the cookie. The possible values are: published, pendingAdd, pendingEdit, pendingDelete, unknownFutureValue.
    *
    * @param BrowserSharedCookieStatus $val The status
    *
    * @return BrowserSharedCookie
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
