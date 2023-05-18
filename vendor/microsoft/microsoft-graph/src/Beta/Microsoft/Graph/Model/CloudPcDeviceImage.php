<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcDeviceImage File
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
* CloudPcDeviceImage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcDeviceImage extends Entity
{
    /**
    * Gets the displayName
    * The display name of the image.
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
    * The display name of the image.
    *
    * @param string $val The displayName
    *
    * @return CloudPcDeviceImage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the expirationDate
    * The date the image became unavailable.
    *
    * @return \DateTime|null The expirationDate
    */
    public function getExpirationDate()
    {
        if (array_key_exists("expirationDate", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDate"], "\DateTime") || is_null($this->_propDict["expirationDate"])) {
                return $this->_propDict["expirationDate"];
            } else {
                $this->_propDict["expirationDate"] = new \DateTime($this->_propDict["expirationDate"]);
                return $this->_propDict["expirationDate"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDate
    * The date the image became unavailable.
    *
    * @param \DateTime $val The expirationDate
    *
    * @return CloudPcDeviceImage
    */
    public function setExpirationDate($val)
    {
        $this->_propDict["expirationDate"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
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
    * The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return CloudPcDeviceImage
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the operatingSystem
    * The operating system of the image. For example, Windows 10 Enterprise.
    *
    * @return string|null The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystem
    * The operating system of the image. For example, Windows 10 Enterprise.
    *
    * @param string $val The operatingSystem
    *
    * @return CloudPcDeviceImage
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }

    /**
    * Gets the osBuildNumber
    * The OS build version of the image. For example, 1909.
    *
    * @return string|null The osBuildNumber
    */
    public function getOsBuildNumber()
    {
        if (array_key_exists("osBuildNumber", $this->_propDict)) {
            return $this->_propDict["osBuildNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osBuildNumber
    * The OS build version of the image. For example, 1909.
    *
    * @param string $val The osBuildNumber
    *
    * @return CloudPcDeviceImage
    */
    public function setOsBuildNumber($val)
    {
        $this->_propDict["osBuildNumber"] = $val;
        return $this;
    }

    /**
    * Gets the osStatus
    * The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
    *
    * @return CloudPcDeviceImageOsStatus|null The osStatus
    */
    public function getOsStatus()
    {
        if (array_key_exists("osStatus", $this->_propDict)) {
            if (is_a($this->_propDict["osStatus"], "\Beta\Microsoft\Graph\Model\CloudPcDeviceImageOsStatus") || is_null($this->_propDict["osStatus"])) {
                return $this->_propDict["osStatus"];
            } else {
                $this->_propDict["osStatus"] = new CloudPcDeviceImageOsStatus($this->_propDict["osStatus"]);
                return $this->_propDict["osStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the osStatus
    * The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
    *
    * @param CloudPcDeviceImageOsStatus $val The osStatus
    *
    * @return CloudPcDeviceImage
    */
    public function setOsStatus($val)
    {
        $this->_propDict["osStatus"] = $val;
        return $this;
    }

    /**
    * Gets the sourceImageResourceId
    * The ID of the source image resource on Azure. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}.
    *
    * @return string|null The sourceImageResourceId
    */
    public function getSourceImageResourceId()
    {
        if (array_key_exists("sourceImageResourceId", $this->_propDict)) {
            return $this->_propDict["sourceImageResourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceImageResourceId
    * The ID of the source image resource on Azure. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}.
    *
    * @param string $val The sourceImageResourceId
    *
    * @return CloudPcDeviceImage
    */
    public function setSourceImageResourceId($val)
    {
        $this->_propDict["sourceImageResourceId"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The status of the image on Cloud PC. Possible values are: pending, ready, failed.
    *
    * @return CloudPcDeviceImageStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcDeviceImageStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcDeviceImageStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The status of the image on Cloud PC. Possible values are: pending, ready, failed.
    *
    * @param CloudPcDeviceImageStatus $val The status
    *
    * @return CloudPcDeviceImage
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the statusDetails
    * The details of the status of the image that indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
    *
    * @return CloudPcDeviceImageStatusDetails|null The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict)) {
            if (is_a($this->_propDict["statusDetails"], "\Beta\Microsoft\Graph\Model\CloudPcDeviceImageStatusDetails") || is_null($this->_propDict["statusDetails"])) {
                return $this->_propDict["statusDetails"];
            } else {
                $this->_propDict["statusDetails"] = new CloudPcDeviceImageStatusDetails($this->_propDict["statusDetails"]);
                return $this->_propDict["statusDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the statusDetails
    * The details of the status of the image that indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
    *
    * @param CloudPcDeviceImageStatusDetails $val The statusDetails
    *
    * @return CloudPcDeviceImage
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * The image version. For example, 0.0.1 and 1.5.13.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The image version. For example, 0.0.1 and 1.5.13.
    *
    * @param string $val The version
    *
    * @return CloudPcDeviceImage
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

}
