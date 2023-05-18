<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptPolicyState File
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
* DeviceHealthScriptPolicyState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptPolicyState implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new DeviceHealthScriptPolicyState
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the DeviceHealthScriptPolicyState
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the assignmentFilterIds
    * A list of the assignment filter ids used for health script applicability evaluation
    *
    * @return array|null The assignmentFilterIds
    */
    public function getAssignmentFilterIds()
    {
        if (array_key_exists("assignmentFilterIds", $this->_propDict)) {
            return $this->_propDict["assignmentFilterIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentFilterIds
    * A list of the assignment filter ids used for health script applicability evaluation
    *
    * @param string[] $val The assignmentFilterIds
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setAssignmentFilterIds($val)
    {
        $this->_propDict["assignmentFilterIds"] = $val;
        return $this;
    }

    /**
    * Gets the detectionState
    * Detection state from the lastest device health script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @return RunState|null The detectionState
    */
    public function getDetectionState()
    {
        if (array_key_exists("detectionState", $this->_propDict)) {
            if (is_a($this->_propDict["detectionState"], "\Beta\Microsoft\Graph\Model\RunState") || is_null($this->_propDict["detectionState"])) {
                return $this->_propDict["detectionState"];
            } else {
                $this->_propDict["detectionState"] = new RunState($this->_propDict["detectionState"]);
                return $this->_propDict["detectionState"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionState
    * Detection state from the lastest device health script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @param RunState $val The detectionState
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setDetectionState($val)
    {
        $this->_propDict["detectionState"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    * The Intune device Id
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * The Intune device Id
    *
    * @param string $val The deviceId
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * Display name of the device
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * Display name of the device
    *
    * @param string $val The deviceName
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the expectedStateUpdateDateTime
    * The next timestamp of when the device health script is expected to execute
    *
    * @return \DateTime|null The expectedStateUpdateDateTime
    */
    public function getExpectedStateUpdateDateTime()
    {
        if (array_key_exists("expectedStateUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expectedStateUpdateDateTime"], "\DateTime") || is_null($this->_propDict["expectedStateUpdateDateTime"])) {
                return $this->_propDict["expectedStateUpdateDateTime"];
            } else {
                $this->_propDict["expectedStateUpdateDateTime"] = new \DateTime($this->_propDict["expectedStateUpdateDateTime"]);
                return $this->_propDict["expectedStateUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expectedStateUpdateDateTime
    * The next timestamp of when the device health script is expected to execute
    *
    * @param \DateTime $val The expectedStateUpdateDateTime
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setExpectedStateUpdateDateTime($val)
    {
        $this->_propDict["expectedStateUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the id
    * Key of the device health script policy state is a concatenation of the MT sideCar policy Id and Intune device Id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Key of the device health script policy state is a concatenation of the MT sideCar policy Id and Intune device Id
    *
    * @param string $val The id
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the lastStateUpdateDateTime
    * The last timestamp of when the device health script executed
    *
    * @return \DateTime|null The lastStateUpdateDateTime
    */
    public function getLastStateUpdateDateTime()
    {
        if (array_key_exists("lastStateUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastStateUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastStateUpdateDateTime"])) {
                return $this->_propDict["lastStateUpdateDateTime"];
            } else {
                $this->_propDict["lastStateUpdateDateTime"] = new \DateTime($this->_propDict["lastStateUpdateDateTime"]);
                return $this->_propDict["lastStateUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastStateUpdateDateTime
    * The last timestamp of when the device health script executed
    *
    * @param \DateTime $val The lastStateUpdateDateTime
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setLastStateUpdateDateTime($val)
    {
        $this->_propDict["lastStateUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastSyncDateTime
    * The last time that Intune Managment Extension synced with Intune
    *
    * @return \DateTime|null The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime") || is_null($this->_propDict["lastSyncDateTime"])) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSyncDateTime
    * The last time that Intune Managment Extension synced with Intune
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * Value of the OS Version in string
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
    * Value of the OS Version in string
    *
    * @param string $val The osVersion
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the policyId
    * The MT sideCar policy Id
    *
    * @return string|null The policyId
    */
    public function getPolicyId()
    {
        if (array_key_exists("policyId", $this->_propDict)) {
            return $this->_propDict["policyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyId
    * The MT sideCar policy Id
    *
    * @param string $val The policyId
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setPolicyId($val)
    {
        $this->_propDict["policyId"] = $val;
        return $this;
    }

    /**
    * Gets the policyName
    * Display name of the device health script
    *
    * @return string|null The policyName
    */
    public function getPolicyName()
    {
        if (array_key_exists("policyName", $this->_propDict)) {
            return $this->_propDict["policyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyName
    * Display name of the device health script
    *
    * @param string $val The policyName
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setPolicyName($val)
    {
        $this->_propDict["policyName"] = $val;
        return $this;
    }

    /**
    * Gets the postRemediationDetectionScriptError
    * Error from the detection script after remediation
    *
    * @return string|null The postRemediationDetectionScriptError
    */
    public function getPostRemediationDetectionScriptError()
    {
        if (array_key_exists("postRemediationDetectionScriptError", $this->_propDict)) {
            return $this->_propDict["postRemediationDetectionScriptError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postRemediationDetectionScriptError
    * Error from the detection script after remediation
    *
    * @param string $val The postRemediationDetectionScriptError
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setPostRemediationDetectionScriptError($val)
    {
        $this->_propDict["postRemediationDetectionScriptError"] = $val;
        return $this;
    }

    /**
    * Gets the postRemediationDetectionScriptOutput
    * Detection script output after remediation
    *
    * @return string|null The postRemediationDetectionScriptOutput
    */
    public function getPostRemediationDetectionScriptOutput()
    {
        if (array_key_exists("postRemediationDetectionScriptOutput", $this->_propDict)) {
            return $this->_propDict["postRemediationDetectionScriptOutput"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postRemediationDetectionScriptOutput
    * Detection script output after remediation
    *
    * @param string $val The postRemediationDetectionScriptOutput
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setPostRemediationDetectionScriptOutput($val)
    {
        $this->_propDict["postRemediationDetectionScriptOutput"] = $val;
        return $this;
    }

    /**
    * Gets the preRemediationDetectionScriptError
    * Error from the detection script before remediation
    *
    * @return string|null The preRemediationDetectionScriptError
    */
    public function getPreRemediationDetectionScriptError()
    {
        if (array_key_exists("preRemediationDetectionScriptError", $this->_propDict)) {
            return $this->_propDict["preRemediationDetectionScriptError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preRemediationDetectionScriptError
    * Error from the detection script before remediation
    *
    * @param string $val The preRemediationDetectionScriptError
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setPreRemediationDetectionScriptError($val)
    {
        $this->_propDict["preRemediationDetectionScriptError"] = $val;
        return $this;
    }

    /**
    * Gets the preRemediationDetectionScriptOutput
    * Output of the detection script before remediation
    *
    * @return string|null The preRemediationDetectionScriptOutput
    */
    public function getPreRemediationDetectionScriptOutput()
    {
        if (array_key_exists("preRemediationDetectionScriptOutput", $this->_propDict)) {
            return $this->_propDict["preRemediationDetectionScriptOutput"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preRemediationDetectionScriptOutput
    * Output of the detection script before remediation
    *
    * @param string $val The preRemediationDetectionScriptOutput
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setPreRemediationDetectionScriptOutput($val)
    {
        $this->_propDict["preRemediationDetectionScriptOutput"] = $val;
        return $this;
    }

    /**
    * Gets the remediationScriptError
    * Error output of the remediation script
    *
    * @return string|null The remediationScriptError
    */
    public function getRemediationScriptError()
    {
        if (array_key_exists("remediationScriptError", $this->_propDict)) {
            return $this->_propDict["remediationScriptError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remediationScriptError
    * Error output of the remediation script
    *
    * @param string $val The remediationScriptError
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setRemediationScriptError($val)
    {
        $this->_propDict["remediationScriptError"] = $val;
        return $this;
    }

    /**
    * Gets the remediationState
    * Remediation state from the lastest device health script execution. Possible values are: unknown, skipped, success, remediationFailed, scriptError, unknownFutureValue.
    *
    * @return RemediationState|null The remediationState
    */
    public function getRemediationState()
    {
        if (array_key_exists("remediationState", $this->_propDict)) {
            if (is_a($this->_propDict["remediationState"], "\Beta\Microsoft\Graph\Model\RemediationState") || is_null($this->_propDict["remediationState"])) {
                return $this->_propDict["remediationState"];
            } else {
                $this->_propDict["remediationState"] = new RemediationState($this->_propDict["remediationState"]);
                return $this->_propDict["remediationState"];
            }
        }
        return null;
    }

    /**
    * Sets the remediationState
    * Remediation state from the lastest device health script execution. Possible values are: unknown, skipped, success, remediationFailed, scriptError, unknownFutureValue.
    *
    * @param RemediationState $val The remediationState
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setRemediationState($val)
    {
        $this->_propDict["remediationState"] = $val;
        return $this;
    }

    /**
    * Gets the userName
    * Name of the user whom ran the device health script
    *
    * @return string|null The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userName
    * Name of the user whom ran the device health script
    *
    * @param string $val The userName
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return DeviceHealthScriptPolicyState
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
