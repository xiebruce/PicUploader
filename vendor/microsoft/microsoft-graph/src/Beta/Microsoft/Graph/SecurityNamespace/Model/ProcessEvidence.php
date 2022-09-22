<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProcessEvidence File
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
* ProcessEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProcessEvidence extends AlertEvidence
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
    * @return ProcessEvidence The ProcessEvidence
    */
    public function setDetectionStatus($val)
    {
        $this->_propDict["detectionStatus"] = $val;
         return $this;
    }

    /**
    * Gets the imageFile
    * Image file details.
    *
    * @return FileDetails|null The imageFile
    */
    public function getImageFile()
    {
        if (array_key_exists("imageFile", $this->_propDict)) {
            if (is_a($this->_propDict["imageFile"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FileDetails") || is_null($this->_propDict["imageFile"])) {
                return $this->_propDict["imageFile"];
            } else {
                $this->_propDict["imageFile"] = new FileDetails($this->_propDict["imageFile"]);
                return $this->_propDict["imageFile"];
            }
        }
        return null;
    }

    /**
    * Sets the imageFile
    * Image file details.
    *
    * @param FileDetails $val The value to assign to the imageFile
    *
    * @return ProcessEvidence The ProcessEvidence
    */
    public function setImageFile($val)
    {
        $this->_propDict["imageFile"] = $val;
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
    * @return ProcessEvidence
    */
    public function setMdeDeviceId($val)
    {
        $this->_propDict["mdeDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the parentProcessCreationDateTime
    * Date and time when the parent of the process was created.
    *
    * @return \DateTime|null The parentProcessCreationDateTime
    */
    public function getParentProcessCreationDateTime()
    {
        if (array_key_exists("parentProcessCreationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["parentProcessCreationDateTime"], "\DateTime") || is_null($this->_propDict["parentProcessCreationDateTime"])) {
                return $this->_propDict["parentProcessCreationDateTime"];
            } else {
                $this->_propDict["parentProcessCreationDateTime"] = new \DateTime($this->_propDict["parentProcessCreationDateTime"]);
                return $this->_propDict["parentProcessCreationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the parentProcessCreationDateTime
    * Date and time when the parent of the process was created.
    *
    * @param \DateTime $val The value to assign to the parentProcessCreationDateTime
    *
    * @return ProcessEvidence The ProcessEvidence
    */
    public function setParentProcessCreationDateTime($val)
    {
        $this->_propDict["parentProcessCreationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the parentProcessId
    * Process ID (PID) of the parent process that spawned the process.
    *
    * @return int|null The parentProcessId
    */
    public function getParentProcessId()
    {
        if (array_key_exists("parentProcessId", $this->_propDict)) {
            return $this->_propDict["parentProcessId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentProcessId
    * Process ID (PID) of the parent process that spawned the process.
    *
    * @param int $val The value of the parentProcessId
    *
    * @return ProcessEvidence
    */
    public function setParentProcessId($val)
    {
        $this->_propDict["parentProcessId"] = $val;
        return $this;
    }

    /**
    * Gets the parentProcessImageFile
    * Parent process image file details.
    *
    * @return FileDetails|null The parentProcessImageFile
    */
    public function getParentProcessImageFile()
    {
        if (array_key_exists("parentProcessImageFile", $this->_propDict)) {
            if (is_a($this->_propDict["parentProcessImageFile"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FileDetails") || is_null($this->_propDict["parentProcessImageFile"])) {
                return $this->_propDict["parentProcessImageFile"];
            } else {
                $this->_propDict["parentProcessImageFile"] = new FileDetails($this->_propDict["parentProcessImageFile"]);
                return $this->_propDict["parentProcessImageFile"];
            }
        }
        return null;
    }

    /**
    * Sets the parentProcessImageFile
    * Parent process image file details.
    *
    * @param FileDetails $val The value to assign to the parentProcessImageFile
    *
    * @return ProcessEvidence The ProcessEvidence
    */
    public function setParentProcessImageFile($val)
    {
        $this->_propDict["parentProcessImageFile"] = $val;
         return $this;
    }
    /**
    * Gets the processCommandLine
    * Command line used to create the new process.
    *
    * @return string|null The processCommandLine
    */
    public function getProcessCommandLine()
    {
        if (array_key_exists("processCommandLine", $this->_propDict)) {
            return $this->_propDict["processCommandLine"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processCommandLine
    * Command line used to create the new process.
    *
    * @param string $val The value of the processCommandLine
    *
    * @return ProcessEvidence
    */
    public function setProcessCommandLine($val)
    {
        $this->_propDict["processCommandLine"] = $val;
        return $this;
    }

    /**
    * Gets the processCreationDateTime
    * Date and time the process was created.
    *
    * @return \DateTime|null The processCreationDateTime
    */
    public function getProcessCreationDateTime()
    {
        if (array_key_exists("processCreationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["processCreationDateTime"], "\DateTime") || is_null($this->_propDict["processCreationDateTime"])) {
                return $this->_propDict["processCreationDateTime"];
            } else {
                $this->_propDict["processCreationDateTime"] = new \DateTime($this->_propDict["processCreationDateTime"]);
                return $this->_propDict["processCreationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the processCreationDateTime
    * Date and time the process was created.
    *
    * @param \DateTime $val The value to assign to the processCreationDateTime
    *
    * @return ProcessEvidence The ProcessEvidence
    */
    public function setProcessCreationDateTime($val)
    {
        $this->_propDict["processCreationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the processId
    * Process ID (PID) of the newly created process.
    *
    * @return int|null The processId
    */
    public function getProcessId()
    {
        if (array_key_exists("processId", $this->_propDict)) {
            return $this->_propDict["processId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processId
    * Process ID (PID) of the newly created process.
    *
    * @param int $val The value of the processId
    *
    * @return ProcessEvidence
    */
    public function setProcessId($val)
    {
        $this->_propDict["processId"] = $val;
        return $this;
    }

    /**
    * Gets the userAccount
    * User details of the user that ran the process.
    *
    * @return UserAccount|null The userAccount
    */
    public function getUserAccount()
    {
        if (array_key_exists("userAccount", $this->_propDict)) {
            if (is_a($this->_propDict["userAccount"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\UserAccount") || is_null($this->_propDict["userAccount"])) {
                return $this->_propDict["userAccount"];
            } else {
                $this->_propDict["userAccount"] = new UserAccount($this->_propDict["userAccount"]);
                return $this->_propDict["userAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccount
    * User details of the user that ran the process.
    *
    * @param UserAccount $val The value to assign to the userAccount
    *
    * @return ProcessEvidence The ProcessEvidence
    */
    public function setUserAccount($val)
    {
        $this->_propDict["userAccount"] = $val;
         return $this;
    }
}
