<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ZebraFotaArtifact File
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
* ZebraFotaArtifact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ZebraFotaArtifact extends Entity
{
    /**
    * Gets the boardSupportPackageVersion
    * The version of the Board Support Package (BSP. E.g.: 01.18.02.00)
    *
    * @return string|null The boardSupportPackageVersion
    */
    public function getBoardSupportPackageVersion()
    {
        if (array_key_exists("boardSupportPackageVersion", $this->_propDict)) {
            return $this->_propDict["boardSupportPackageVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the boardSupportPackageVersion
    * The version of the Board Support Package (BSP. E.g.: 01.18.02.00)
    *
    * @param string $val The boardSupportPackageVersion
    *
    * @return ZebraFotaArtifact
    */
    public function setBoardSupportPackageVersion($val)
    {
        $this->_propDict["boardSupportPackageVersion"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Artifact description. (e.g.: `LifeGuard Update 98 (released 24-September-2021)
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
    * Artifact description. (e.g.: `LifeGuard Update 98 (released 24-September-2021)
    *
    * @param string $val The description
    *
    * @return ZebraFotaArtifact
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the deviceModel
    * Applicable device model (e.g.: TC8300)
    *
    * @return string|null The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceModel
    * Applicable device model (e.g.: TC8300)
    *
    * @param string $val The deviceModel
    *
    * @return ZebraFotaArtifact
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * Artifact OS version (e.g.: 8.1.0)
    *
    * @return string|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osVersion
    * Artifact OS version (e.g.: 8.1.0)
    *
    * @param string $val The osVersion
    *
    * @return ZebraFotaArtifact
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the patchVersion
    * Artifact patch version (e.g.: U00)
    *
    * @return string|null The patchVersion
    */
    public function getPatchVersion()
    {
        if (array_key_exists("patchVersion", $this->_propDict)) {
            return $this->_propDict["patchVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the patchVersion
    * Artifact patch version (e.g.: U00)
    *
    * @param string $val The patchVersion
    *
    * @return ZebraFotaArtifact
    */
    public function setPatchVersion($val)
    {
        $this->_propDict["patchVersion"] = $val;
        return $this;
    }

    /**
    * Gets the releaseNotesUrl
    * Artifact release notes URL (e.g.: https://www.zebra.com/&amp;lt;filename.pdf&amp;gt;)
    *
    * @return string|null The releaseNotesUrl
    */
    public function getReleaseNotesUrl()
    {
        if (array_key_exists("releaseNotesUrl", $this->_propDict)) {
            return $this->_propDict["releaseNotesUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the releaseNotesUrl
    * Artifact release notes URL (e.g.: https://www.zebra.com/&amp;lt;filename.pdf&amp;gt;)
    *
    * @param string $val The releaseNotesUrl
    *
    * @return ZebraFotaArtifact
    */
    public function setReleaseNotesUrl($val)
    {
        $this->_propDict["releaseNotesUrl"] = $val;
        return $this;
    }

}
