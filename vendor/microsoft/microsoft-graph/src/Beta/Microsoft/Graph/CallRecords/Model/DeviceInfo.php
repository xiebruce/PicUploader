<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceInfo File
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
* DeviceInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceInfo extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the captureDeviceDriver
    * Name of the capture device driver used by the media endpoint.
    *
    * @return string|null The captureDeviceDriver
    */
    public function getCaptureDeviceDriver()
    {
        if (array_key_exists("captureDeviceDriver", $this->_propDict)) {
            return $this->_propDict["captureDeviceDriver"];
        } else {
            return null;
        }
    }

    /**
    * Sets the captureDeviceDriver
    * Name of the capture device driver used by the media endpoint.
    *
    * @param string $val The value of the captureDeviceDriver
    *
    * @return DeviceInfo
    */
    public function setCaptureDeviceDriver($val)
    {
        $this->_propDict["captureDeviceDriver"] = $val;
        return $this;
    }
    /**
    * Gets the captureDeviceName
    * Name of the capture device used by the media endpoint.
    *
    * @return string|null The captureDeviceName
    */
    public function getCaptureDeviceName()
    {
        if (array_key_exists("captureDeviceName", $this->_propDict)) {
            return $this->_propDict["captureDeviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the captureDeviceName
    * Name of the capture device used by the media endpoint.
    *
    * @param string $val The value of the captureDeviceName
    *
    * @return DeviceInfo
    */
    public function setCaptureDeviceName($val)
    {
        $this->_propDict["captureDeviceName"] = $val;
        return $this;
    }
    /**
    * Gets the captureNotFunctioningEventRatio
    * Fraction of the call that the media endpoint detected the capture device was not working properly.
    *
    * @return float|null The captureNotFunctioningEventRatio
    */
    public function getCaptureNotFunctioningEventRatio()
    {
        if (array_key_exists("captureNotFunctioningEventRatio", $this->_propDict)) {
            return $this->_propDict["captureNotFunctioningEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the captureNotFunctioningEventRatio
    * Fraction of the call that the media endpoint detected the capture device was not working properly.
    *
    * @param float $val The value of the captureNotFunctioningEventRatio
    *
    * @return DeviceInfo
    */
    public function setCaptureNotFunctioningEventRatio($val)
    {
        $this->_propDict["captureNotFunctioningEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the cpuInsufficentEventRatio
    * Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
    *
    * @return float|null The cpuInsufficentEventRatio
    */
    public function getCpuInsufficentEventRatio()
    {
        if (array_key_exists("cpuInsufficentEventRatio", $this->_propDict)) {
            return $this->_propDict["cpuInsufficentEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cpuInsufficentEventRatio
    * Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
    *
    * @param float $val The value of the cpuInsufficentEventRatio
    *
    * @return DeviceInfo
    */
    public function setCpuInsufficentEventRatio($val)
    {
        $this->_propDict["cpuInsufficentEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the deviceClippingEventRatio
    * Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
    *
    * @return float|null The deviceClippingEventRatio
    */
    public function getDeviceClippingEventRatio()
    {
        if (array_key_exists("deviceClippingEventRatio", $this->_propDict)) {
            return $this->_propDict["deviceClippingEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceClippingEventRatio
    * Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
    *
    * @param float $val The value of the deviceClippingEventRatio
    *
    * @return DeviceInfo
    */
    public function setDeviceClippingEventRatio($val)
    {
        $this->_propDict["deviceClippingEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the deviceGlitchEventRatio
    * Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
    *
    * @return float|null The deviceGlitchEventRatio
    */
    public function getDeviceGlitchEventRatio()
    {
        if (array_key_exists("deviceGlitchEventRatio", $this->_propDict)) {
            return $this->_propDict["deviceGlitchEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceGlitchEventRatio
    * Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
    *
    * @param float $val The value of the deviceGlitchEventRatio
    *
    * @return DeviceInfo
    */
    public function setDeviceGlitchEventRatio($val)
    {
        $this->_propDict["deviceGlitchEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the howlingEventCount
    * Number of times during the call that the media endpoint detected howling or screeching audio.
    *
    * @return int|null The howlingEventCount
    */
    public function getHowlingEventCount()
    {
        if (array_key_exists("howlingEventCount", $this->_propDict)) {
            return $this->_propDict["howlingEventCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the howlingEventCount
    * Number of times during the call that the media endpoint detected howling or screeching audio.
    *
    * @param int $val The value of the howlingEventCount
    *
    * @return DeviceInfo
    */
    public function setHowlingEventCount($val)
    {
        $this->_propDict["howlingEventCount"] = $val;
        return $this;
    }
    /**
    * Gets the initialSignalLevelRootMeanSquare
    * The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
    *
    * @return float|null The initialSignalLevelRootMeanSquare
    */
    public function getInitialSignalLevelRootMeanSquare()
    {
        if (array_key_exists("initialSignalLevelRootMeanSquare", $this->_propDict)) {
            return $this->_propDict["initialSignalLevelRootMeanSquare"];
        } else {
            return null;
        }
    }

    /**
    * Sets the initialSignalLevelRootMeanSquare
    * The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
    *
    * @param float $val The value of the initialSignalLevelRootMeanSquare
    *
    * @return DeviceInfo
    */
    public function setInitialSignalLevelRootMeanSquare($val)
    {
        $this->_propDict["initialSignalLevelRootMeanSquare"] = $val;
        return $this;
    }
    /**
    * Gets the lowSpeechLevelEventRatio
    * Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
    *
    * @return float|null The lowSpeechLevelEventRatio
    */
    public function getLowSpeechLevelEventRatio()
    {
        if (array_key_exists("lowSpeechLevelEventRatio", $this->_propDict)) {
            return $this->_propDict["lowSpeechLevelEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowSpeechLevelEventRatio
    * Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
    *
    * @param float $val The value of the lowSpeechLevelEventRatio
    *
    * @return DeviceInfo
    */
    public function setLowSpeechLevelEventRatio($val)
    {
        $this->_propDict["lowSpeechLevelEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the lowSpeechToNoiseEventRatio
    * Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
    *
    * @return float|null The lowSpeechToNoiseEventRatio
    */
    public function getLowSpeechToNoiseEventRatio()
    {
        if (array_key_exists("lowSpeechToNoiseEventRatio", $this->_propDict)) {
            return $this->_propDict["lowSpeechToNoiseEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowSpeechToNoiseEventRatio
    * Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
    *
    * @param float $val The value of the lowSpeechToNoiseEventRatio
    *
    * @return DeviceInfo
    */
    public function setLowSpeechToNoiseEventRatio($val)
    {
        $this->_propDict["lowSpeechToNoiseEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the micGlitchRate
    * Glitches per 5 minute interval for the media endpoint's microphone.
    *
    * @return float|null The micGlitchRate
    */
    public function getMicGlitchRate()
    {
        if (array_key_exists("micGlitchRate", $this->_propDict)) {
            return $this->_propDict["micGlitchRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the micGlitchRate
    * Glitches per 5 minute interval for the media endpoint's microphone.
    *
    * @param float $val The value of the micGlitchRate
    *
    * @return DeviceInfo
    */
    public function setMicGlitchRate($val)
    {
        $this->_propDict["micGlitchRate"] = $val;
        return $this;
    }
    /**
    * Gets the receivedNoiseLevel
    * Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
    *
    * @return int|null The receivedNoiseLevel
    */
    public function getReceivedNoiseLevel()
    {
        if (array_key_exists("receivedNoiseLevel", $this->_propDict)) {
            return $this->_propDict["receivedNoiseLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the receivedNoiseLevel
    * Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
    *
    * @param int $val The value of the receivedNoiseLevel
    *
    * @return DeviceInfo
    */
    public function setReceivedNoiseLevel($val)
    {
        $this->_propDict["receivedNoiseLevel"] = $val;
        return $this;
    }
    /**
    * Gets the receivedSignalLevel
    * Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
    *
    * @return int|null The receivedSignalLevel
    */
    public function getReceivedSignalLevel()
    {
        if (array_key_exists("receivedSignalLevel", $this->_propDict)) {
            return $this->_propDict["receivedSignalLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the receivedSignalLevel
    * Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
    *
    * @param int $val The value of the receivedSignalLevel
    *
    * @return DeviceInfo
    */
    public function setReceivedSignalLevel($val)
    {
        $this->_propDict["receivedSignalLevel"] = $val;
        return $this;
    }
    /**
    * Gets the renderDeviceDriver
    * Name of the render device driver used by the media endpoint.
    *
    * @return string|null The renderDeviceDriver
    */
    public function getRenderDeviceDriver()
    {
        if (array_key_exists("renderDeviceDriver", $this->_propDict)) {
            return $this->_propDict["renderDeviceDriver"];
        } else {
            return null;
        }
    }

    /**
    * Sets the renderDeviceDriver
    * Name of the render device driver used by the media endpoint.
    *
    * @param string $val The value of the renderDeviceDriver
    *
    * @return DeviceInfo
    */
    public function setRenderDeviceDriver($val)
    {
        $this->_propDict["renderDeviceDriver"] = $val;
        return $this;
    }
    /**
    * Gets the renderDeviceName
    * Name of the render device used by the media endpoint.
    *
    * @return string|null The renderDeviceName
    */
    public function getRenderDeviceName()
    {
        if (array_key_exists("renderDeviceName", $this->_propDict)) {
            return $this->_propDict["renderDeviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the renderDeviceName
    * Name of the render device used by the media endpoint.
    *
    * @param string $val The value of the renderDeviceName
    *
    * @return DeviceInfo
    */
    public function setRenderDeviceName($val)
    {
        $this->_propDict["renderDeviceName"] = $val;
        return $this;
    }
    /**
    * Gets the renderMuteEventRatio
    * Fraction of the call that media endpoint detected device render is muted.
    *
    * @return float|null The renderMuteEventRatio
    */
    public function getRenderMuteEventRatio()
    {
        if (array_key_exists("renderMuteEventRatio", $this->_propDict)) {
            return $this->_propDict["renderMuteEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the renderMuteEventRatio
    * Fraction of the call that media endpoint detected device render is muted.
    *
    * @param float $val The value of the renderMuteEventRatio
    *
    * @return DeviceInfo
    */
    public function setRenderMuteEventRatio($val)
    {
        $this->_propDict["renderMuteEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the renderNotFunctioningEventRatio
    * Fraction of the call that the media endpoint detected the render device was not working properly.
    *
    * @return float|null The renderNotFunctioningEventRatio
    */
    public function getRenderNotFunctioningEventRatio()
    {
        if (array_key_exists("renderNotFunctioningEventRatio", $this->_propDict)) {
            return $this->_propDict["renderNotFunctioningEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the renderNotFunctioningEventRatio
    * Fraction of the call that the media endpoint detected the render device was not working properly.
    *
    * @param float $val The value of the renderNotFunctioningEventRatio
    *
    * @return DeviceInfo
    */
    public function setRenderNotFunctioningEventRatio($val)
    {
        $this->_propDict["renderNotFunctioningEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the renderZeroVolumeEventRatio
    * Fraction of the call that media endpoint detected device render volume is set to 0.
    *
    * @return float|null The renderZeroVolumeEventRatio
    */
    public function getRenderZeroVolumeEventRatio()
    {
        if (array_key_exists("renderZeroVolumeEventRatio", $this->_propDict)) {
            return $this->_propDict["renderZeroVolumeEventRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the renderZeroVolumeEventRatio
    * Fraction of the call that media endpoint detected device render volume is set to 0.
    *
    * @param float $val The value of the renderZeroVolumeEventRatio
    *
    * @return DeviceInfo
    */
    public function setRenderZeroVolumeEventRatio($val)
    {
        $this->_propDict["renderZeroVolumeEventRatio"] = $val;
        return $this;
    }
    /**
    * Gets the sentNoiseLevel
    * Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
    *
    * @return int|null The sentNoiseLevel
    */
    public function getSentNoiseLevel()
    {
        if (array_key_exists("sentNoiseLevel", $this->_propDict)) {
            return $this->_propDict["sentNoiseLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentNoiseLevel
    * Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
    *
    * @param int $val The value of the sentNoiseLevel
    *
    * @return DeviceInfo
    */
    public function setSentNoiseLevel($val)
    {
        $this->_propDict["sentNoiseLevel"] = $val;
        return $this;
    }
    /**
    * Gets the sentSignalLevel
    * Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
    *
    * @return int|null The sentSignalLevel
    */
    public function getSentSignalLevel()
    {
        if (array_key_exists("sentSignalLevel", $this->_propDict)) {
            return $this->_propDict["sentSignalLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentSignalLevel
    * Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
    *
    * @param int $val The value of the sentSignalLevel
    *
    * @return DeviceInfo
    */
    public function setSentSignalLevel($val)
    {
        $this->_propDict["sentSignalLevel"] = $val;
        return $this;
    }
    /**
    * Gets the speakerGlitchRate
    * Glitches per 5 minute internal for the media endpoint's loudspeaker.
    *
    * @return float|null The speakerGlitchRate
    */
    public function getSpeakerGlitchRate()
    {
        if (array_key_exists("speakerGlitchRate", $this->_propDict)) {
            return $this->_propDict["speakerGlitchRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the speakerGlitchRate
    * Glitches per 5 minute internal for the media endpoint's loudspeaker.
    *
    * @param float $val The value of the speakerGlitchRate
    *
    * @return DeviceInfo
    */
    public function setSpeakerGlitchRate($val)
    {
        $this->_propDict["speakerGlitchRate"] = $val;
        return $this;
    }
}
