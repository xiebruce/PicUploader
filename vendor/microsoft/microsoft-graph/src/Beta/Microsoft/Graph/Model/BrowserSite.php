<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BrowserSite File
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
* BrowserSite class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BrowserSite extends Entity
{
    /**
    * Gets the allowRedirect
    * Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
    *
    * @return bool|null The allowRedirect
    */
    public function getAllowRedirect()
    {
        if (array_key_exists("allowRedirect", $this->_propDict)) {
            return $this->_propDict["allowRedirect"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowRedirect
    * Controls the behavior of redirected sites. If true, indicates that the site will open in Internet Explorer 11 or Microsoft Edge even if the site is navigated to as part of a HTTP or meta refresh redirection chain.
    *
    * @param bool $val The allowRedirect
    *
    * @return BrowserSite
    */
    public function setAllowRedirect($val)
    {
        $this->_propDict["allowRedirect"] = boolval($val);
        return $this;
    }

    /**
    * Gets the comment
    * The comment for the site.
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
    * The comment for the site.
    *
    * @param string $val The comment
    *
    * @return BrowserSite
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
        return $this;
    }

    /**
    * Gets the compatibilityMode
    * Controls what compatibility setting is used for specific sites or domains. The possible values are: default, internetExplorer8Enterprise, internetExplorer7Enterprise, internetExplorer11, internetExplorer10, internetExplorer9, internetExplorer8, internetExplorer7, internetExplorer5, unknownFutureValue.
    *
    * @return BrowserSiteCompatibilityMode|null The compatibilityMode
    */
    public function getCompatibilityMode()
    {
        if (array_key_exists("compatibilityMode", $this->_propDict)) {
            if (is_a($this->_propDict["compatibilityMode"], "\Beta\Microsoft\Graph\Model\BrowserSiteCompatibilityMode") || is_null($this->_propDict["compatibilityMode"])) {
                return $this->_propDict["compatibilityMode"];
            } else {
                $this->_propDict["compatibilityMode"] = new BrowserSiteCompatibilityMode($this->_propDict["compatibilityMode"]);
                return $this->_propDict["compatibilityMode"];
            }
        }
        return null;
    }

    /**
    * Sets the compatibilityMode
    * Controls what compatibility setting is used for specific sites or domains. The possible values are: default, internetExplorer8Enterprise, internetExplorer7Enterprise, internetExplorer11, internetExplorer10, internetExplorer9, internetExplorer8, internetExplorer7, internetExplorer5, unknownFutureValue.
    *
    * @param BrowserSiteCompatibilityMode $val The compatibilityMode
    *
    * @return BrowserSite
    */
    public function setCompatibilityMode($val)
    {
        $this->_propDict["compatibilityMode"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * The date and time when the site was created.
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
    * The date and time when the site was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return BrowserSite
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deletedDateTime
    * The date and time when the site was deleted.
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
    * The date and time when the site was deleted.
    *
    * @param \DateTime $val The deletedDateTime
    *
    * @return BrowserSite
    */
    public function setDeletedDateTime($val)
    {
        $this->_propDict["deletedDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the history
    * The history of modifications applied to the site.
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
    * The history of modifications applied to the site.
    *
    * @param BrowserSiteHistory[] $val The history
    *
    * @return BrowserSite
    */
    public function setHistory($val)
    {
        $this->_propDict["history"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * The user who last modified the site.
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
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
    * The user who last modified the site.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return BrowserSite
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time when the site was last modified.
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
    * The date and time when the site was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return BrowserSite
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the mergeType
    * The merge type of the site. The possible values are: noMerge, default, unknownFutureValue.
    *
    * @return BrowserSiteMergeType|null The mergeType
    */
    public function getMergeType()
    {
        if (array_key_exists("mergeType", $this->_propDict)) {
            if (is_a($this->_propDict["mergeType"], "\Beta\Microsoft\Graph\Model\BrowserSiteMergeType") || is_null($this->_propDict["mergeType"])) {
                return $this->_propDict["mergeType"];
            } else {
                $this->_propDict["mergeType"] = new BrowserSiteMergeType($this->_propDict["mergeType"]);
                return $this->_propDict["mergeType"];
            }
        }
        return null;
    }

    /**
    * Sets the mergeType
    * The merge type of the site. The possible values are: noMerge, default, unknownFutureValue.
    *
    * @param BrowserSiteMergeType $val The mergeType
    *
    * @return BrowserSite
    */
    public function setMergeType($val)
    {
        $this->_propDict["mergeType"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Indicates the status of the site. The possible values are: published, pendingAdd, pendingEdit, pendingDelete, unknownFutureValue.
    *
    * @return BrowserSiteStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\BrowserSiteStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new BrowserSiteStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Indicates the status of the site. The possible values are: published, pendingAdd, pendingEdit, pendingDelete, unknownFutureValue.
    *
    * @param BrowserSiteStatus $val The status
    *
    * @return BrowserSite
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the targetEnvironment
    * The target environment that the site should open in. The possible values are: internetExplorerMode, internetExplorer11, microsoftEdge, configurable, none, unknownFutureValue.Prior to June 15, 2022, the internetExplorer11 option would allow opening a site in the Internet Explorer 11 (IE11) desktop application. Following the retirement of IE11 on June 15, 2022, the internetExplorer11 option will no longer open an IE11 window and will instead behave the same as the internetExplorerMode option.
    *
    * @return BrowserSiteTargetEnvironment|null The targetEnvironment
    */
    public function getTargetEnvironment()
    {
        if (array_key_exists("targetEnvironment", $this->_propDict)) {
            if (is_a($this->_propDict["targetEnvironment"], "\Beta\Microsoft\Graph\Model\BrowserSiteTargetEnvironment") || is_null($this->_propDict["targetEnvironment"])) {
                return $this->_propDict["targetEnvironment"];
            } else {
                $this->_propDict["targetEnvironment"] = new BrowserSiteTargetEnvironment($this->_propDict["targetEnvironment"]);
                return $this->_propDict["targetEnvironment"];
            }
        }
        return null;
    }

    /**
    * Sets the targetEnvironment
    * The target environment that the site should open in. The possible values are: internetExplorerMode, internetExplorer11, microsoftEdge, configurable, none, unknownFutureValue.Prior to June 15, 2022, the internetExplorer11 option would allow opening a site in the Internet Explorer 11 (IE11) desktop application. Following the retirement of IE11 on June 15, 2022, the internetExplorer11 option will no longer open an IE11 window and will instead behave the same as the internetExplorerMode option.
    *
    * @param BrowserSiteTargetEnvironment $val The targetEnvironment
    *
    * @return BrowserSite
    */
    public function setTargetEnvironment($val)
    {
        $this->_propDict["targetEnvironment"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * The URL of the site.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * The URL of the site.
    *
    * @param string $val The webUrl
    *
    * @return BrowserSite
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }

}
