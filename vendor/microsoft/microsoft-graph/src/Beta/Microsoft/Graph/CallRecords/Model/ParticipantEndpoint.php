<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParticipantEndpoint File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* ParticipantEndpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ParticipantEndpoint extends Endpoint
{
    /**
    * Gets the cpuCoresCount
    * CPU number of cores used by the media endpoint.
    *
    * @return int|null The cpuCoresCount
    */
    public function getCpuCoresCount()
    {
        if (array_key_exists("cpuCoresCount", $this->_propDict)) {
            return $this->_propDict["cpuCoresCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cpuCoresCount
    * CPU number of cores used by the media endpoint.
    *
    * @param int $val The value of the cpuCoresCount
    *
    * @return ParticipantEndpoint
    */
    public function setCpuCoresCount($val)
    {
        $this->_propDict["cpuCoresCount"] = $val;
        return $this;
    }
    /**
    * Gets the cpuName
    * CPU name used by the media endpoint.
    *
    * @return string|null The cpuName
    */
    public function getCpuName()
    {
        if (array_key_exists("cpuName", $this->_propDict)) {
            return $this->_propDict["cpuName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cpuName
    * CPU name used by the media endpoint.
    *
    * @param string $val The value of the cpuName
    *
    * @return ParticipantEndpoint
    */
    public function setCpuName($val)
    {
        $this->_propDict["cpuName"] = $val;
        return $this;
    }
    /**
    * Gets the cpuProcessorSpeedInMhz
    * CPU processor speed used by the media endpoint.
    *
    * @return int|null The cpuProcessorSpeedInMhz
    */
    public function getCpuProcessorSpeedInMhz()
    {
        if (array_key_exists("cpuProcessorSpeedInMhz", $this->_propDict)) {
            return $this->_propDict["cpuProcessorSpeedInMhz"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cpuProcessorSpeedInMhz
    * CPU processor speed used by the media endpoint.
    *
    * @param int $val The value of the cpuProcessorSpeedInMhz
    *
    * @return ParticipantEndpoint
    */
    public function setCpuProcessorSpeedInMhz($val)
    {
        $this->_propDict["cpuProcessorSpeedInMhz"] = $val;
        return $this;
    }

    /**
    * Gets the feedback
    * The feedback provided by the user of this endpoint about the quality of the session.
    *
    * @return UserFeedback|null The feedback
    */
    public function getFeedback()
    {
        if (array_key_exists("feedback", $this->_propDict)) {
            if (is_a($this->_propDict["feedback"], "\Beta\Microsoft\Graph\CallRecords\Model\UserFeedback") || is_null($this->_propDict["feedback"])) {
                return $this->_propDict["feedback"];
            } else {
                $this->_propDict["feedback"] = new UserFeedback($this->_propDict["feedback"]);
                return $this->_propDict["feedback"];
            }
        }
        return null;
    }

    /**
    * Sets the feedback
    * The feedback provided by the user of this endpoint about the quality of the session.
    *
    * @param UserFeedback $val The value to assign to the feedback
    *
    * @return ParticipantEndpoint The ParticipantEndpoint
    */
    public function setFeedback($val)
    {
        $this->_propDict["feedback"] = $val;
         return $this;
    }

    /**
    * Gets the identity
    * Identity associated with the endpoint.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet|null The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["identity"])) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    * Identity associated with the endpoint.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The value to assign to the identity
    *
    * @return ParticipantEndpoint The ParticipantEndpoint
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Name of the device used by the media endpoint.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the device used by the media endpoint.
    *
    * @param string $val The value of the name
    *
    * @return ParticipantEndpoint
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
