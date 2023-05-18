<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BrowserSharedCookieHistory File
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
* BrowserSharedCookieHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BrowserSharedCookieHistory extends Entity
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
    * @param string $val The value of the comment
    *
    * @return BrowserSharedCookieHistory
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return BrowserSharedCookieHistory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @param bool $val The value of the hostOnly
    *
    * @return BrowserSharedCookieHistory
    */
    public function setHostOnly($val)
    {
        $this->_propDict["hostOnly"] = $val;
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
    * @param string $val The value of the hostOrDomain
    *
    * @return BrowserSharedCookieHistory
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
    * @param IdentitySet $val The value to assign to the lastModifiedBy
    *
    * @return BrowserSharedCookieHistory The BrowserSharedCookieHistory
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
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
    * @param string $val The value of the path
    *
    * @return BrowserSharedCookieHistory
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }

    /**
    * Gets the publishedDateTime
    * The date and time when the cookie was last published.
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
    * The date and time when the cookie was last published.
    *
    * @param \DateTime $val The value to assign to the publishedDateTime
    *
    * @return BrowserSharedCookieHistory The BrowserSharedCookieHistory
    */
    public function setPublishedDateTime($val)
    {
        $this->_propDict["publishedDateTime"] = $val;
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
    * @param BrowserSharedCookieSourceEnvironment $val The value to assign to the sourceEnvironment
    *
    * @return BrowserSharedCookieHistory The BrowserSharedCookieHistory
    */
    public function setSourceEnvironment($val)
    {
        $this->_propDict["sourceEnvironment"] = $val;
         return $this;
    }
}
