<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Drive File
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
* Drive class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Drive extends BaseItem
{
    /**
    * Gets the driveType
    * Describes the type of drive represented by this resource. OneDrive personal drives will return personal. OneDrive for Business will return business. SharePoint document libraries will return documentLibrary. Read-only.
    *
    * @return string|null The driveType
    */
    public function getDriveType()
    {
        if (array_key_exists("driveType", $this->_propDict)) {
            return $this->_propDict["driveType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the driveType
    * Describes the type of drive represented by this resource. OneDrive personal drives will return personal. OneDrive for Business will return business. SharePoint document libraries will return documentLibrary. Read-only.
    *
    * @param string $val The driveType
    *
    * @return Drive
    */
    public function setDriveType($val)
    {
        $this->_propDict["driveType"] = $val;
        return $this;
    }

    /**
    * Gets the owner
    * Optional. The user account that owns the drive. Read-only.
    *
    * @return IdentitySet|null The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["owner"])) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new IdentitySet($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }

    /**
    * Sets the owner
    * Optional. The user account that owns the drive. Read-only.
    *
    * @param IdentitySet $val The owner
    *
    * @return Drive
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }

    /**
    * Gets the quota
    * Optional. Information about the drive's storage space quota. Read-only.
    *
    * @return Quota|null The quota
    */
    public function getQuota()
    {
        if (array_key_exists("quota", $this->_propDict)) {
            if (is_a($this->_propDict["quota"], "\Microsoft\Graph\Model\Quota") || is_null($this->_propDict["quota"])) {
                return $this->_propDict["quota"];
            } else {
                $this->_propDict["quota"] = new Quota($this->_propDict["quota"]);
                return $this->_propDict["quota"];
            }
        }
        return null;
    }

    /**
    * Sets the quota
    * Optional. Information about the drive's storage space quota. Read-only.
    *
    * @param Quota $val The quota
    *
    * @return Drive
    */
    public function setQuota($val)
    {
        $this->_propDict["quota"] = $val;
        return $this;
    }

    /**
    * Gets the sharePointIds
    *
    * @return SharepointIds|null The sharePointIds
    */
    public function getSharePointIds()
    {
        if (array_key_exists("sharePointIds", $this->_propDict)) {
            if (is_a($this->_propDict["sharePointIds"], "\Microsoft\Graph\Model\SharepointIds") || is_null($this->_propDict["sharePointIds"])) {
                return $this->_propDict["sharePointIds"];
            } else {
                $this->_propDict["sharePointIds"] = new SharepointIds($this->_propDict["sharePointIds"]);
                return $this->_propDict["sharePointIds"];
            }
        }
        return null;
    }

    /**
    * Sets the sharePointIds
    *
    * @param SharepointIds $val The sharePointIds
    *
    * @return Drive
    */
    public function setSharePointIds($val)
    {
        $this->_propDict["sharePointIds"] = $val;
        return $this;
    }

    /**
    * Gets the system
    * If present, indicates that this is a system-managed drive. Read-only.
    *
    * @return SystemFacet|null The system
    */
    public function getSystem()
    {
        if (array_key_exists("system", $this->_propDict)) {
            if (is_a($this->_propDict["system"], "\Microsoft\Graph\Model\SystemFacet") || is_null($this->_propDict["system"])) {
                return $this->_propDict["system"];
            } else {
                $this->_propDict["system"] = new SystemFacet($this->_propDict["system"]);
                return $this->_propDict["system"];
            }
        }
        return null;
    }

    /**
    * Sets the system
    * If present, indicates that this is a system-managed drive. Read-only.
    *
    * @param SystemFacet $val The system
    *
    * @return Drive
    */
    public function setSystem($val)
    {
        $this->_propDict["system"] = $val;
        return $this;
    }


     /**
     * Gets the bundles
    * Collection of [bundles][bundle] (albums and multi-select-shared sets of items). Only in personal OneDrive.
     *
     * @return array|null The bundles
     */
    public function getBundles()
    {
        if (array_key_exists("bundles", $this->_propDict)) {
           return $this->_propDict["bundles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundles
    * Collection of [bundles][bundle] (albums and multi-select-shared sets of items). Only in personal OneDrive.
    *
    * @param DriveItem[] $val The bundles
    *
    * @return Drive
    */
    public function setBundles($val)
    {
        $this->_propDict["bundles"] = $val;
        return $this;
    }


     /**
     * Gets the following
    * The list of items the user is following. Only in OneDrive for Business.
     *
     * @return array|null The following
     */
    public function getFollowing()
    {
        if (array_key_exists("following", $this->_propDict)) {
           return $this->_propDict["following"];
        } else {
            return null;
        }
    }

    /**
    * Sets the following
    * The list of items the user is following. Only in OneDrive for Business.
    *
    * @param DriveItem[] $val The following
    *
    * @return Drive
    */
    public function setFollowing($val)
    {
        $this->_propDict["following"] = $val;
        return $this;
    }


     /**
     * Gets the items
    * All items contained in the drive. Read-only. Nullable.
     *
     * @return array|null The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }

    /**
    * Sets the items
    * All items contained in the drive. Read-only. Nullable.
    *
    * @param DriveItem[] $val The items
    *
    * @return Drive
    */
    public function setItems($val)
    {
        $this->_propDict["items"] = $val;
        return $this;
    }

    /**
    * Gets the list
    * For drives in SharePoint, the underlying document library list. Read-only. Nullable.
    *
    * @return GraphList|null The list
    */
    public function getList()
    {
        if (array_key_exists("list", $this->_propDict)) {
            if (is_a($this->_propDict["list"], "\Microsoft\Graph\Model\GraphList") || is_null($this->_propDict["list"])) {
                return $this->_propDict["list"];
            } else {
                $this->_propDict["list"] = new GraphList($this->_propDict["list"]);
                return $this->_propDict["list"];
            }
        }
        return null;
    }

    /**
    * Sets the list
    * For drives in SharePoint, the underlying document library list. Read-only. Nullable.
    *
    * @param GraphList $val The list
    *
    * @return Drive
    */
    public function setList($val)
    {
        $this->_propDict["list"] = $val;
        return $this;
    }

    /**
    * Gets the root
    * The root folder of the drive. Read-only.
    *
    * @return DriveItem|null The root
    */
    public function getRoot()
    {
        if (array_key_exists("root", $this->_propDict)) {
            if (is_a($this->_propDict["root"], "\Microsoft\Graph\Model\DriveItem") || is_null($this->_propDict["root"])) {
                return $this->_propDict["root"];
            } else {
                $this->_propDict["root"] = new DriveItem($this->_propDict["root"]);
                return $this->_propDict["root"];
            }
        }
        return null;
    }

    /**
    * Sets the root
    * The root folder of the drive. Read-only.
    *
    * @param DriveItem $val The root
    *
    * @return Drive
    */
    public function setRoot($val)
    {
        $this->_propDict["root"] = $val;
        return $this;
    }


     /**
     * Gets the special
    * Collection of common folders available in OneDrive. Read-only. Nullable.
     *
     * @return array|null The special
     */
    public function getSpecial()
    {
        if (array_key_exists("special", $this->_propDict)) {
           return $this->_propDict["special"];
        } else {
            return null;
        }
    }

    /**
    * Sets the special
    * Collection of common folders available in OneDrive. Read-only. Nullable.
    *
    * @param DriveItem[] $val The special
    *
    * @return Drive
    */
    public function setSpecial($val)
    {
        $this->_propDict["special"] = $val;
        return $this;
    }

}
