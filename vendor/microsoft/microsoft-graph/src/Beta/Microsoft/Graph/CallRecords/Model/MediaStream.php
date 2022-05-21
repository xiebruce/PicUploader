<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaStream File
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
* MediaStream class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaStream extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the averageAudioDegradation
    * Average Network Mean Opinion Score degradation for stream. Represents how much the network loss and jitter has impacted the quality of received audio.
    *
    * @return float|null The averageAudioDegradation
    */
    public function getAverageAudioDegradation()
    {
        if (array_key_exists("averageAudioDegradation", $this->_propDict)) {
            return $this->_propDict["averageAudioDegradation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageAudioDegradation
    * Average Network Mean Opinion Score degradation for stream. Represents how much the network loss and jitter has impacted the quality of received audio.
    *
    * @param float $val The value of the averageAudioDegradation
    *
    * @return MediaStream
    */
    public function setAverageAudioDegradation($val)
    {
        $this->_propDict["averageAudioDegradation"] = $val;
        return $this;
    }

    /**
    * Gets the averageAudioNetworkJitter
    * Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \DateInterval|null The averageAudioNetworkJitter
    */
    public function getAverageAudioNetworkJitter()
    {
        if (array_key_exists("averageAudioNetworkJitter", $this->_propDict)) {
            if (is_a($this->_propDict["averageAudioNetworkJitter"], "\DateInterval") || is_null($this->_propDict["averageAudioNetworkJitter"])) {
                return $this->_propDict["averageAudioNetworkJitter"];
            } else {
                $this->_propDict["averageAudioNetworkJitter"] = new \DateInterval($this->_propDict["averageAudioNetworkJitter"]);
                return $this->_propDict["averageAudioNetworkJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the averageAudioNetworkJitter
    * Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \DateInterval $val The value to assign to the averageAudioNetworkJitter
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageAudioNetworkJitter($val)
    {
        $this->_propDict["averageAudioNetworkJitter"] = $val;
         return $this;
    }
    /**
    * Gets the averageBandwidthEstimate
    * Average estimated bandwidth available between two endpoints in bits per second.
    *
    * @return int|null The averageBandwidthEstimate
    */
    public function getAverageBandwidthEstimate()
    {
        if (array_key_exists("averageBandwidthEstimate", $this->_propDict)) {
            return $this->_propDict["averageBandwidthEstimate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageBandwidthEstimate
    * Average estimated bandwidth available between two endpoints in bits per second.
    *
    * @param int $val The value of the averageBandwidthEstimate
    *
    * @return MediaStream
    */
    public function setAverageBandwidthEstimate($val)
    {
        $this->_propDict["averageBandwidthEstimate"] = $val;
        return $this;
    }

    /**
    * Gets the averageJitter
    * Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \DateInterval|null The averageJitter
    */
    public function getAverageJitter()
    {
        if (array_key_exists("averageJitter", $this->_propDict)) {
            if (is_a($this->_propDict["averageJitter"], "\DateInterval") || is_null($this->_propDict["averageJitter"])) {
                return $this->_propDict["averageJitter"];
            } else {
                $this->_propDict["averageJitter"] = new \DateInterval($this->_propDict["averageJitter"]);
                return $this->_propDict["averageJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the averageJitter
    * Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \DateInterval $val The value to assign to the averageJitter
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageJitter($val)
    {
        $this->_propDict["averageJitter"] = $val;
         return $this;
    }
    /**
    * Gets the averagePacketLossRate
    * Average packet loss rate for stream.
    *
    * @return float|null The averagePacketLossRate
    */
    public function getAveragePacketLossRate()
    {
        if (array_key_exists("averagePacketLossRate", $this->_propDict)) {
            return $this->_propDict["averagePacketLossRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averagePacketLossRate
    * Average packet loss rate for stream.
    *
    * @param float $val The value of the averagePacketLossRate
    *
    * @return MediaStream
    */
    public function setAveragePacketLossRate($val)
    {
        $this->_propDict["averagePacketLossRate"] = $val;
        return $this;
    }
    /**
    * Gets the averageRatioOfConcealedSamples
    * Ratio of the number of audio frames with samples generated by packet loss concealment to the total number of audio frames.
    *
    * @return float|null The averageRatioOfConcealedSamples
    */
    public function getAverageRatioOfConcealedSamples()
    {
        if (array_key_exists("averageRatioOfConcealedSamples", $this->_propDict)) {
            return $this->_propDict["averageRatioOfConcealedSamples"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageRatioOfConcealedSamples
    * Ratio of the number of audio frames with samples generated by packet loss concealment to the total number of audio frames.
    *
    * @param float $val The value of the averageRatioOfConcealedSamples
    *
    * @return MediaStream
    */
    public function setAverageRatioOfConcealedSamples($val)
    {
        $this->_propDict["averageRatioOfConcealedSamples"] = $val;
        return $this;
    }
    /**
    * Gets the averageReceivedFrameRate
    * Average frames per second received for all video streams computed over the duration of the session.
    *
    * @return float|null The averageReceivedFrameRate
    */
    public function getAverageReceivedFrameRate()
    {
        if (array_key_exists("averageReceivedFrameRate", $this->_propDict)) {
            return $this->_propDict["averageReceivedFrameRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageReceivedFrameRate
    * Average frames per second received for all video streams computed over the duration of the session.
    *
    * @param float $val The value of the averageReceivedFrameRate
    *
    * @return MediaStream
    */
    public function setAverageReceivedFrameRate($val)
    {
        $this->_propDict["averageReceivedFrameRate"] = $val;
        return $this;
    }

    /**
    * Gets the averageRoundTripTime
    * Average network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \DateInterval|null The averageRoundTripTime
    */
    public function getAverageRoundTripTime()
    {
        if (array_key_exists("averageRoundTripTime", $this->_propDict)) {
            if (is_a($this->_propDict["averageRoundTripTime"], "\DateInterval") || is_null($this->_propDict["averageRoundTripTime"])) {
                return $this->_propDict["averageRoundTripTime"];
            } else {
                $this->_propDict["averageRoundTripTime"] = new \DateInterval($this->_propDict["averageRoundTripTime"]);
                return $this->_propDict["averageRoundTripTime"];
            }
        }
        return null;
    }

    /**
    * Sets the averageRoundTripTime
    * Average network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \DateInterval $val The value to assign to the averageRoundTripTime
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageRoundTripTime($val)
    {
        $this->_propDict["averageRoundTripTime"] = $val;
         return $this;
    }
    /**
    * Gets the averageVideoFrameLossPercentage
    * Average percentage of video frames lost as displayed to the user.
    *
    * @return float|null The averageVideoFrameLossPercentage
    */
    public function getAverageVideoFrameLossPercentage()
    {
        if (array_key_exists("averageVideoFrameLossPercentage", $this->_propDict)) {
            return $this->_propDict["averageVideoFrameLossPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageVideoFrameLossPercentage
    * Average percentage of video frames lost as displayed to the user.
    *
    * @param float $val The value of the averageVideoFrameLossPercentage
    *
    * @return MediaStream
    */
    public function setAverageVideoFrameLossPercentage($val)
    {
        $this->_propDict["averageVideoFrameLossPercentage"] = $val;
        return $this;
    }
    /**
    * Gets the averageVideoFrameRate
    * Average frames per second received for a video stream, computed over the duration of the session.
    *
    * @return float|null The averageVideoFrameRate
    */
    public function getAverageVideoFrameRate()
    {
        if (array_key_exists("averageVideoFrameRate", $this->_propDict)) {
            return $this->_propDict["averageVideoFrameRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageVideoFrameRate
    * Average frames per second received for a video stream, computed over the duration of the session.
    *
    * @param float $val The value of the averageVideoFrameRate
    *
    * @return MediaStream
    */
    public function setAverageVideoFrameRate($val)
    {
        $this->_propDict["averageVideoFrameRate"] = $val;
        return $this;
    }
    /**
    * Gets the averageVideoPacketLossRate
    * Average fraction of packets lost, as specified in [RFC 3550][], computed over the duration of the session.
    *
    * @return float|null The averageVideoPacketLossRate
    */
    public function getAverageVideoPacketLossRate()
    {
        if (array_key_exists("averageVideoPacketLossRate", $this->_propDict)) {
            return $this->_propDict["averageVideoPacketLossRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageVideoPacketLossRate
    * Average fraction of packets lost, as specified in [RFC 3550][], computed over the duration of the session.
    *
    * @param float $val The value of the averageVideoPacketLossRate
    *
    * @return MediaStream
    */
    public function setAverageVideoPacketLossRate($val)
    {
        $this->_propDict["averageVideoPacketLossRate"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * UTC time when the stream ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * UTC time when the stream ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return MediaStream The MediaStream
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the lowFrameRateRatio
    * Fraction of the call where frame rate is less than 7.5 frames per second.
    *
    * @return float|null The lowFrameRateRatio
    */
    public function getLowFrameRateRatio()
    {
        if (array_key_exists("lowFrameRateRatio", $this->_propDict)) {
            return $this->_propDict["lowFrameRateRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowFrameRateRatio
    * Fraction of the call where frame rate is less than 7.5 frames per second.
    *
    * @param float $val The value of the lowFrameRateRatio
    *
    * @return MediaStream
    */
    public function setLowFrameRateRatio($val)
    {
        $this->_propDict["lowFrameRateRatio"] = $val;
        return $this;
    }
    /**
    * Gets the lowVideoProcessingCapabilityRatio
    * Fraction of the call that the client is running less than 70% expected video processing capability.
    *
    * @return float|null The lowVideoProcessingCapabilityRatio
    */
    public function getLowVideoProcessingCapabilityRatio()
    {
        if (array_key_exists("lowVideoProcessingCapabilityRatio", $this->_propDict)) {
            return $this->_propDict["lowVideoProcessingCapabilityRatio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowVideoProcessingCapabilityRatio
    * Fraction of the call that the client is running less than 70% expected video processing capability.
    *
    * @param float $val The value of the lowVideoProcessingCapabilityRatio
    *
    * @return MediaStream
    */
    public function setLowVideoProcessingCapabilityRatio($val)
    {
        $this->_propDict["lowVideoProcessingCapabilityRatio"] = $val;
        return $this;
    }

    /**
    * Gets the maxAudioNetworkJitter
    * Maximum of audio network jitter computed over each of the 20 second windows during the session, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \DateInterval|null The maxAudioNetworkJitter
    */
    public function getMaxAudioNetworkJitter()
    {
        if (array_key_exists("maxAudioNetworkJitter", $this->_propDict)) {
            if (is_a($this->_propDict["maxAudioNetworkJitter"], "\DateInterval") || is_null($this->_propDict["maxAudioNetworkJitter"])) {
                return $this->_propDict["maxAudioNetworkJitter"];
            } else {
                $this->_propDict["maxAudioNetworkJitter"] = new \DateInterval($this->_propDict["maxAudioNetworkJitter"]);
                return $this->_propDict["maxAudioNetworkJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the maxAudioNetworkJitter
    * Maximum of audio network jitter computed over each of the 20 second windows during the session, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \DateInterval $val The value to assign to the maxAudioNetworkJitter
    *
    * @return MediaStream The MediaStream
    */
    public function setMaxAudioNetworkJitter($val)
    {
        $this->_propDict["maxAudioNetworkJitter"] = $val;
         return $this;
    }

    /**
    * Gets the maxJitter
    * Maximum jitter for the stream computed as specified in RFC 3550, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \DateInterval|null The maxJitter
    */
    public function getMaxJitter()
    {
        if (array_key_exists("maxJitter", $this->_propDict)) {
            if (is_a($this->_propDict["maxJitter"], "\DateInterval") || is_null($this->_propDict["maxJitter"])) {
                return $this->_propDict["maxJitter"];
            } else {
                $this->_propDict["maxJitter"] = new \DateInterval($this->_propDict["maxJitter"]);
                return $this->_propDict["maxJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the maxJitter
    * Maximum jitter for the stream computed as specified in RFC 3550, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \DateInterval $val The value to assign to the maxJitter
    *
    * @return MediaStream The MediaStream
    */
    public function setMaxJitter($val)
    {
        $this->_propDict["maxJitter"] = $val;
         return $this;
    }
    /**
    * Gets the maxPacketLossRate
    * Maximum packet loss rate for the stream.
    *
    * @return float|null The maxPacketLossRate
    */
    public function getMaxPacketLossRate()
    {
        if (array_key_exists("maxPacketLossRate", $this->_propDict)) {
            return $this->_propDict["maxPacketLossRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxPacketLossRate
    * Maximum packet loss rate for the stream.
    *
    * @param float $val The value of the maxPacketLossRate
    *
    * @return MediaStream
    */
    public function setMaxPacketLossRate($val)
    {
        $this->_propDict["maxPacketLossRate"] = $val;
        return $this;
    }
    /**
    * Gets the maxRatioOfConcealedSamples
    * Maximum ratio of packets concealed by the healer.
    *
    * @return float|null The maxRatioOfConcealedSamples
    */
    public function getMaxRatioOfConcealedSamples()
    {
        if (array_key_exists("maxRatioOfConcealedSamples", $this->_propDict)) {
            return $this->_propDict["maxRatioOfConcealedSamples"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxRatioOfConcealedSamples
    * Maximum ratio of packets concealed by the healer.
    *
    * @param float $val The value of the maxRatioOfConcealedSamples
    *
    * @return MediaStream
    */
    public function setMaxRatioOfConcealedSamples($val)
    {
        $this->_propDict["maxRatioOfConcealedSamples"] = $val;
        return $this;
    }

    /**
    * Gets the maxRoundTripTime
    * Maximum network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \DateInterval|null The maxRoundTripTime
    */
    public function getMaxRoundTripTime()
    {
        if (array_key_exists("maxRoundTripTime", $this->_propDict)) {
            if (is_a($this->_propDict["maxRoundTripTime"], "\DateInterval") || is_null($this->_propDict["maxRoundTripTime"])) {
                return $this->_propDict["maxRoundTripTime"];
            } else {
                $this->_propDict["maxRoundTripTime"] = new \DateInterval($this->_propDict["maxRoundTripTime"]);
                return $this->_propDict["maxRoundTripTime"];
            }
        }
        return null;
    }

    /**
    * Sets the maxRoundTripTime
    * Maximum network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \DateInterval $val The value to assign to the maxRoundTripTime
    *
    * @return MediaStream The MediaStream
    */
    public function setMaxRoundTripTime($val)
    {
        $this->_propDict["maxRoundTripTime"] = $val;
         return $this;
    }
    /**
    * Gets the packetUtilization
    * Packet count for the stream.
    *
    * @return int|null The packetUtilization
    */
    public function getPacketUtilization()
    {
        if (array_key_exists("packetUtilization", $this->_propDict)) {
            return $this->_propDict["packetUtilization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the packetUtilization
    * Packet count for the stream.
    *
    * @param int $val The value of the packetUtilization
    *
    * @return MediaStream
    */
    public function setPacketUtilization($val)
    {
        $this->_propDict["packetUtilization"] = $val;
        return $this;
    }
    /**
    * Gets the postForwardErrorCorrectionPacketLossRate
    * Packet loss rate after FEC has been applied aggregated across all video streams and codecs.
    *
    * @return float|null The postForwardErrorCorrectionPacketLossRate
    */
    public function getPostForwardErrorCorrectionPacketLossRate()
    {
        if (array_key_exists("postForwardErrorCorrectionPacketLossRate", $this->_propDict)) {
            return $this->_propDict["postForwardErrorCorrectionPacketLossRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postForwardErrorCorrectionPacketLossRate
    * Packet loss rate after FEC has been applied aggregated across all video streams and codecs.
    *
    * @param float $val The value of the postForwardErrorCorrectionPacketLossRate
    *
    * @return MediaStream
    */
    public function setPostForwardErrorCorrectionPacketLossRate($val)
    {
        $this->_propDict["postForwardErrorCorrectionPacketLossRate"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * UTC time when the stream started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * UTC time when the stream started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return MediaStream The MediaStream
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the streamDirection
    * Indicates the direction of the media stream. Possible values are: callerToCallee, calleeToCaller.
    *
    * @return MediaStreamDirection|null The streamDirection
    */
    public function getStreamDirection()
    {
        if (array_key_exists("streamDirection", $this->_propDict)) {
            if (is_a($this->_propDict["streamDirection"], "\Beta\Microsoft\Graph\CallRecords\Model\MediaStreamDirection") || is_null($this->_propDict["streamDirection"])) {
                return $this->_propDict["streamDirection"];
            } else {
                $this->_propDict["streamDirection"] = new MediaStreamDirection($this->_propDict["streamDirection"]);
                return $this->_propDict["streamDirection"];
            }
        }
        return null;
    }

    /**
    * Sets the streamDirection
    * Indicates the direction of the media stream. Possible values are: callerToCallee, calleeToCaller.
    *
    * @param MediaStreamDirection $val The value to assign to the streamDirection
    *
    * @return MediaStream The MediaStream
    */
    public function setStreamDirection($val)
    {
        $this->_propDict["streamDirection"] = $val;
         return $this;
    }
    /**
    * Gets the streamId
    * Unique identifier for the stream.
    *
    * @return string|null The streamId
    */
    public function getStreamId()
    {
        if (array_key_exists("streamId", $this->_propDict)) {
            return $this->_propDict["streamId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the streamId
    * Unique identifier for the stream.
    *
    * @param string $val The value of the streamId
    *
    * @return MediaStream
    */
    public function setStreamId($val)
    {
        $this->_propDict["streamId"] = $val;
        return $this;
    }
    /**
    * Gets the wasMediaBypassed
    * True if the media stream bypassed the Mediation Server and went straight between client and PSTN Gateway/PBX, false otherwise.
    *
    * @return bool|null The wasMediaBypassed
    */
    public function getWasMediaBypassed()
    {
        if (array_key_exists("wasMediaBypassed", $this->_propDict)) {
            return $this->_propDict["wasMediaBypassed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wasMediaBypassed
    * True if the media stream bypassed the Mediation Server and went straight between client and PSTN Gateway/PBX, false otherwise.
    *
    * @param bool $val The value of the wasMediaBypassed
    *
    * @return MediaStream
    */
    public function setWasMediaBypassed($val)
    {
        $this->_propDict["wasMediaBypassed"] = $val;
        return $this;
    }
}
