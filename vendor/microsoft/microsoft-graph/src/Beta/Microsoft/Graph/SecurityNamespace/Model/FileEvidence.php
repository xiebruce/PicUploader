<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* FileEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileEvidence extends AlertEvidence
{

    /**
    * Gets the detectionStatus
    * The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
    *
    * @return DetectionStatus|null The detectionStatus
    */
    public function getDetectionStatus()
    {
        if (array_key_exists("detectionStatus", $this->_propDict)) {
            if (is_a($this->_propDict["detectionStatus"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DetectionStatus") || is_null($this->_propDict["detectionStatus"])) {
                return $this->_propDict["detectionStatus"];
            } else {
                $this->_propDict["detectionStatus"] = new DetectionStatus($this->_propDict["detectionStatus"]);
                return $this->_propDict["detectionStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionStatus
    * The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
    *
    * @param DetectionStatus $val The value to assign to the detectionStatus
    *
    * @return FileEvidence The FileEvidence
    */
    public function setDetectionStatus($val)
    {
        $this->_propDict["detectionStatus"] = $val;
         return $this;
    }

    /**
    * Gets the fileDetails
    * The file details.
    *
    * @return FileDetails|null The fileDetails
    */
    public function getFileDetails()
    {
        if (array_key_exists("fileDetails", $this->_propDict)) {
            if (is_a($this->_propDict["fileDetails"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FileDetails") || is_null($this->_propDict["fileDetails"])) {
                return $this->_propDict["fileDetails"];
            } else {
                $this->_propDict["fileDetails"] = new FileDetails($this->_propDict["fileDetails"]);
                return $this->_propDict["fileDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the fileDetails
    * The file details.
    *
    * @param FileDetails $val The value to assign to the fileDetails
    *
    * @return FileEvidence The FileEvidence
    */
    public function setFileDetails($val)
    {
        $this->_propDict["fileDetails"] = $val;
         return $this;
    }
    /**
    * Gets the mdeDeviceId
    * A unique identifier assigned to a device by Microsoft Defender for Endpoint.
    *
    * @return string|null The mdeDeviceId
    */
    public function getMdeDeviceId()
    {
        if (array_key_exists("mdeDeviceId", $this->_propDict)) {
            return $this->_propDict["mdeDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mdeDeviceId
    * A unique identifier assigned to a device by Microsoft Defender for Endpoint.
    *
    * @param string $val The value of the mdeDeviceId
    *
    * @return FileEvidence
    */
    public function setMdeDeviceId($val)
    {
        $this->_propDict["mdeDeviceId"] = $val;
        return $this;
    }
}
