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
    * The version of the Board Support Package.
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
    * The version of the Board Support Package.
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
    * Gets the deviceModel
    * Artifact device model.
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
    * Artifact device model.
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
    * Artifact OS version.
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
    * Artifact OS version.
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
    * Artifact patch version.
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
    * Artifact patch version.
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
    * Artifact release notes URL.
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
    * Artifact release notes URL.
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
