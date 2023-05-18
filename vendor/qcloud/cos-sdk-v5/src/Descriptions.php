<?php

namespace Qcloud\Cos;

/**
 * 为 src/Qcloud/Cos/Service.php 服务，视觉上区分各方法的参数\输出描述
 * 原service的参数描述可不改动
 * Class Descriptions
 * @package Qcloud\Cos
 */
class Descriptions {
    /**
     * 视频转码
     * @return array
     */
    public static function CreateMediaTranscodeJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaTranscodeJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => false, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Tag' => array('location' => 'xml', 'type' => 'string', ),
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'WatermarkTemplateId' => array(
                            'type' => 'array', 
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'WatermarkTemplateId',
                                'type' => 'string',
                                'location' => 'xml',
                                'sentAs' => 'WatermarkTemplateId',
                            ),
                        ),
                        'Transcode' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Container' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Video' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'HlsTsTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'LongShortMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TimeInterval' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Audio' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'KeepTwoTracks' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SwitchTrack' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SampleFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TransConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'AdjDarMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckVideoBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'VideoBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckAudioBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AudioBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'DeleteMetadata' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'HlsEncrypt' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'IsHlsEncrypt' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'UriKey' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'Watermark' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'Watermark',
                                'type' => 'object',
                                'sentAs' => 'Watermark',
                                'properties' => array(
                                    'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Pos' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'LocMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Image' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Background' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'Text' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'FontSize' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'FontType' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'FontColor' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Text' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                ),
                            )
                        ),
                        'RemoveWatermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'DigitalWatermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Version' => array( 'type' => 'string', 'location' => 'xml', ),
                                'IgnoreError' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function CreateMediaTranscodeJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => false, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'required' => false, 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => array(
                        'xmlFlattened' => true,
                    ),
                    'items' => array(
                        'name' => 'Operation',
                        'type' => 'object',
                        'sentAs' => 'Operation',
                        'properties' => array(
                            'Tag' => array('location' => 'xml', 'type' => 'string', ),
                            'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                            'TranscodeTemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                            'VideoProcess' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'ColorEnhance' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Enable' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Contrast' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Correction' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Saturation' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'MsSharpen' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Enable' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SharpenLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                ),
                            ),
                            'VideoMontage' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Container' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'Video' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'Audio' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                ),
                            ),
                            'Animation' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Container' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'Video' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'AnimateOnlyKeepKeyFrame' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'AnimateTimeIntervalOfFrame' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'AnimateFramesPerSecond' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Quality' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'TimeInterval' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                ),
                            ),
                            'Snapshot' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'TimeInterval' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Count' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                            'VoiceSeparate' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'AudioMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'AudioConfig' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                ),
                            ),
                            'Segment' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                            'SDRtoHDR' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'HdrMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                            'SuperResolution' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Resolution' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'EnableScaleUp' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                            'WatermarkTemplateId' => array(
                                'type' => 'array', 
                                'location' => 'xml',
                                'data' => array(
                                    'xmlFlattened' => true,
                                ),
                                'items' => array(
                                    'name' => 'WatermarkTemplateId',
                                    'type' => 'string',
                                    'location' => 'xml',
                                    'sentAs' => 'WatermarkTemplateId',
                                ),
                            ),
                            'Transcode' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Container' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'Video' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'HlsTsTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'LongShortMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'TimeInterval' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'Audio' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'KeepTwoTracks' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SwitchTrack' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SampleFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                    'TransConfig' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'AdjDarMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'IsCheckVideoBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'VideoBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'IsCheckAudioBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'AudioBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'DeleteMetadata' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'HlsEncrypt' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'IsHlsEncrypt' => array( 'type' => 'string', 'location' => 'xml', ),
                                                    'UriKey' => array( 'type' => 'string', 'location' => 'xml', ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'Watermark' => array(
                                'type' => 'array',
                                'location' => 'xml',
                                'data' => array(
                                    'xmlFlattened' => true,
                                ),
                                'items' => array(
                                    'name' => 'Watermark',
                                    'type' => 'object',
                                    'sentAs' => 'Watermark',
                                    'properties' => array(
                                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Pos' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'LocMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Image' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'Background' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                        ),
                                        'Text' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'FontSize' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'FontType' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'FontColor' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'Text' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                        ),
                                    ),
                                )
                            ),
                            'RemoveWatermark' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                            'Output' => array(
                                'required' => true,
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Region' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                                    'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                                    'Object' => array( 'required' => false, 'type' => 'string', 'location' => 'xml', ),
                                    'AuObject' => array( 'required' => false, 'type' => 'string', 'location' => 'xml', ),
                                    'SpriteObject' => array( 'required' => false, 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function CreateMediaJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DescribeMediaJob() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}jobs/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeMediaJobOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function DescribeMediaJobOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DescribeMediaJobs() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeMediaJobsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Tag' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'tag',
                ),
                'QueueId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'queueId',
                ),
                'OrderByTime' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'orderByTime',
                ),
                'NextToken' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'nextToken',
                ),
                'Size' => array(
                    'type' => 'integer',
                    'location' => 'query',
                    'sentAs' => 'size',
                ),
                'States' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'states',
                ),
                'StartCreationTime' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'startCreationTime',
                ),
                'EndCreationTime' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'endCreationTime',
                ),
            ),
        );
    }
    public static function DescribeMediaJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaSnapshotJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaSnapshotJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'required' => false, 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Output' => array(
                            'required' => true,
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SpriteObject' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Snapshot' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                'TimeInterval' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function CreateMediaSnapshotJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaConcatJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaConcatJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true, 
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' =>false, 'type' => 'string', 'location' => 'xml', ), // 拼接任务Input可以为空，完全用数组内的元素拼接
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Output' => array(
                            'required' => true,
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'ConcatTemplate' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Audio' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Index' => array( 'type' => 'string', 'location' => 'xml', ),
                                'DirectConcat' => array( 'type' => 'string', 'location' => 'xml', ),
                                'ConcatFragments' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'data' => array(
                                        'xmlFlattened' => true,
                                    ),
                                    'items' => array(
                                        'name' => 'ConcatFragment',
                                        'type' => 'object',
                                        'sentAs' => 'ConcatFragment',
                                        'properties' => array(
                                            'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                            // 'Mode' => array( 'type' => 'string', 'location' => 'xml', ), 拼接接口不需要Mode参数
                                        ),
                                    ),
                                ),
                                'Video' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Container' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function CreateMediaConcatJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DetectAudio() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}audio/auditing',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DetectAudioOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Input' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'Url' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Object' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'DataId' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'UserInfo' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml', ),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Room' => array( 'type' => 'string', 'location' => 'xml', ),
                                'IP' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Level' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Role' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'Conf' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'DetectType' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Callback' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'BizType' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'CallbackVersion' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'CallbackType' => array(
                            'type' => 'integer',
                            'location' => 'xml',
                        ),
                    ),
                ),
            ),
        );
    }
    public static function DetectAudioOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function GetDetectAudioResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}audio/auditing/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetDetectAudioResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }

    public static function GetDetectAudioResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'BucketId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Result' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'ForbidState' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'AudioText' => array( 'type' => 'string', 'location' => 'xml', ),
                        'PornInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'TerrorismInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'PoliticsInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'AdsInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'TeenagerInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Section' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Text' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'OffsetTime' => array( 'type' => 'integer', 'location' => 'xml', ),
                                    'Duration' => array( 'type' => 'integer', 'location' => 'xml', ),
                                    'Result' => array( 'type' => 'integer', 'location' => 'xml', ),
                                    'PornInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'SpeakerResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                            'RecognitionResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'TerrorismInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'SpeakerResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                            'RecognitionResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'PoliticsInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'SpeakerResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                            'RecognitionResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'AdsInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'SpeakerResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                            'RecognitionResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'TeenagerInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'SpeakerResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                            'RecognitionResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'LanguageResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                'StartTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                                'EndTime' => array( 'type' => 'integer', 'location' => 'xml',),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'UserInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml',),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml',),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Room' => array( 'type' => 'string', 'location' => 'xml',),
                                'IP' => array( 'type' => 'string', 'location' => 'xml',),
                                'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml',),
                                'Level' => array( 'type' => 'string', 'location' => 'xml',),
                                'Role' => array( 'type' => 'string', 'location' => 'xml',),
                            ),
                        ),
                        'ListInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'ListResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ListType' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'ListName' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Entity' => array( 'type' => 'string', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'CosHeaders' => array(
                            'type' => 'object',
                            'location' => 'xml',
                        ),
                    ),
                ),
            ),
        );
    }

    public static function GetDetectTextResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}text/auditing/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetDetectTextResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetDetectTextResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Content' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SectionCount' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Result' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'PornInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'integer', 'location' => 'xml', ),
                            ),
                        ),
                        'TerrorismInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'integer', 'location' => 'xml', ),
                            ),
                        ),
                        'PoliticsInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'integer', 'location' => 'xml', ),
                            ),
                        ),
                        'AdsInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'integer', 'location' => 'xml', ),
                            ),
                        ),
                        'IllegalInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'integer', 'location' => 'xml', ),
                            ),
                        ),
                        'AbuseInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'integer', 'location' => 'xml', ),
                            ),
                        ),
                        'Section' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'StartByte' => array( 'type' => 'integer', 'location' => 'xml', ),
                                    'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Result' => array( 'type' => 'integer', 'location' => 'xml', ),
                                    'PornInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Keywords' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'TerrorismInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Keywords' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'PoliticsInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Keywords' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'AdsInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Keywords' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'IllegalInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Keywords' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'AbuseInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                            'Keywords' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'UserInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml',),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml',),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Room' => array( 'type' => 'string', 'location' => 'xml',),
                                'IP' => array( 'type' => 'string', 'location' => 'xml',),
                                'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml',),
                                'Level' => array( 'type' => 'string', 'location' => 'xml',),
                                'Role' => array( 'type' => 'string', 'location' => 'xml',),
                            ),
                        ),
                        'ListInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'ListResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ListType' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'ListName' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Entity' => array( 'type' => 'string', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function DetectVideo() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}video/auditing',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DetectVideoOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Input' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserInfo' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml', ),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Room' => array( 'type' => 'string', 'location' => 'xml', ),
                                'IP' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Level' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Role' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'Conf' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'DetectType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Callback' => array( 'type' => 'string', 'location' => 'xml', ),
                        'BizType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CallbackVersion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DetectContent' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'CallbackType' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'Snapshot' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'string', 'location' => 'xml', ),
                                'TimeInterval' => array( 'type' => 'numeric', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function DetectVideoOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function GetDetectVideoResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}video/auditing/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetDetectVideoResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetDetectVideoResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array('type' => 'string', 'location' => 'xml',),
                        'Message' => array('type' => 'string', 'location' => 'xml',),
                        'DataId' => array('type' => 'string', 'location' => 'xml',),
                        'JobId' => array('type' => 'string', 'location' => 'xml',),
                        'State' => array('type' => 'string', 'location' => 'xml',),
                        'CreationTime' => array('type' => 'string', 'location' => 'xml',),
                        'Object' => array('type' => 'string', 'location' => 'xml',),
                        'Url' => array('type' => 'string', 'location' => 'xml',),
                        'SnapshotCount' => array('type' => 'string', 'location' => 'xml',),
                        'Label' => array('type' => 'string', 'location' => 'xml',),
                        'Result' => array('type' => 'integer', 'location' => 'xml',),
                        'PornInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                'Count' => array('type' => 'integer', 'location' => 'xml',),
                            )
                        ),
                        'TerrorismInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                'Count' => array('type' => 'integer', 'location' => 'xml',),
                            )
                        ),
                        'PoliticsInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                'Count' => array('type' => 'integer', 'location' => 'xml',),
                            )
                        ),
                        'AdsInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                'Count' => array('type' => 'integer', 'location' => 'xml',),
                            )
                        ),
                        'TeenagerInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                'Count' => array('type' => 'integer', 'location' => 'xml',),
                            )
                        ),
                        'Snapshot' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Url' => array('type' => 'string', 'location' => 'xml',),
                                    'SnapshotTime' => array('type' => 'integer', 'location' => 'xml',),
                                    'Text' => array('type' => 'string', 'location' => 'xml',),
                                    'Label' => array('type' => 'string', 'location' => 'xml',),
                                    'Result' => array('type' => 'integer', 'location' => 'xml',),
                                    'PornInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                            'Score' => array('type' => 'integer', 'location' => 'xml',),
                                            'Label' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                            'OcrResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Text' => array('type' => 'integer', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array('type' => 'string', 'location' => 'xml',),
                                                        ),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'ObjectResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Name' => array('type' => 'string', 'location' => 'xml',),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                    'TerrorismInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                            'Score' => array('type' => 'integer', 'location' => 'xml',),
                                            'Label' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                            'OcrResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Text' => array('type' => 'integer', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array('type' => 'string', 'location' => 'xml',),
                                                        ),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'ObjectResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Name' => array('type' => 'string', 'location' => 'xml',),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                    'PoliticsInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                            'Score' => array('type' => 'integer', 'location' => 'xml',),
                                            'Label' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                            'OcrResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Text' => array('type' => 'integer', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array('type' => 'string', 'location' => 'xml',),
                                                        ),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'ObjectResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Name' => array('type' => 'string', 'location' => 'xml',),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                    'AdsInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                            'Score' => array('type' => 'integer', 'location' => 'xml',),
                                            'Label' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                            'OcrResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Text' => array('type' => 'integer', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array('type' => 'string', 'location' => 'xml',),
                                                        ),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'ObjectResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Name' => array('type' => 'string', 'location' => 'xml',),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                    'TeenagerInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                            'Score' => array('type' => 'integer', 'location' => 'xml',),
                                            'Label' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                            'OcrResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Text' => array('type' => 'integer', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array('type' => 'string', 'location' => 'xml',),
                                                        ),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'ObjectResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'Name' => array('type' => 'string', 'location' => 'xml',),
                                                        'Location' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                            )
                                                        ),
                                                    )
                                                ),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                )
                            ),
                        ),
                        'AudioSection' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Url' => array('type' => 'string', 'location' => 'xml',),
                                    'Text' => array('type' => 'string', 'location' => 'xml',),
                                    'OffsetTime' => array('type' => 'integer', 'location' => 'xml',),
                                    'Duration' => array('type' => 'integer', 'location' => 'xml',),
                                    'Label' => array('type' => 'string', 'location' => 'xml',),
                                    'Result' => array('type' => 'integer', 'location' => 'xml',),
                                    'PornInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'string', 'location' => 'xml',),
                                            'Score' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array('type' => 'string', 'location' => 'xml',),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                    'TerrorismInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'string', 'location' => 'xml',),
                                            'Score' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array('type' => 'string', 'location' => 'xml',),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                    'PoliticsInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'string', 'location' => 'xml',),
                                            'Score' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array('type' => 'string', 'location' => 'xml',),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                    'AdsInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'string', 'location' => 'xml',),
                                            'Score' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array('type' => 'string', 'location' => 'xml',),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                    'TeenagerInfo' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'HitFlag' => array('type' => 'string', 'location' => 'xml',),
                                            'Score' => array('type' => 'string', 'location' => 'xml',),
                                            'Category' => array('type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array('type' => 'string', 'location' => 'xml',),
                                            ),
                                            'LibResults' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                        'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                        'Keywords' => array(
                                                            'type' => 'array',
                                                            'location' => 'xml',
                                                            'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                ),
                            ),
                        ),
                        'UserInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml',),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml',),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Room' => array( 'type' => 'string', 'location' => 'xml',),
                                'IP' => array( 'type' => 'string', 'location' => 'xml',),
                                'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml',),
                                'Level' => array( 'type' => 'string', 'location' => 'xml',),
                                'Role' => array( 'type' => 'string', 'location' => 'xml',),
                            ),
                        ),
                        'ListInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'ListResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ListType' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'ListName' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Entity' => array( 'type' => 'string', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    )
                ),
                'NonExistJobIds' => array('type' => 'string', 'location' => 'xml',)
            ),
        );
    }

    public static function DetectDocument() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}document/auditing',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DetectDocumentOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Input' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserInfo' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml', ),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Room' => array( 'type' => 'string', 'location' => 'xml', ),
                                'IP' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Level' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Role' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'Conf' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'DetectType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Callback' => array( 'type' => 'string', 'location' => 'xml', ),
                        'BizType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CallbackType' => array( 'type' => 'integer', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function DetectDocumentOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function GetDetectDocumentResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}document/auditing/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetDetectDocumentResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetDetectDocumentResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array('type' => 'string', 'location' => 'xml',),
                        'Message' => array('type' => 'string', 'location' => 'xml',),
                        'DataId' => array('type' => 'string', 'location' => 'xml',),
                        'JobId' => array('type' => 'string', 'location' => 'xml',),
                        'State' => array('type' => 'string', 'location' => 'xml',),
                        'Suggestion' => array('type' => 'integer', 'location' => 'xml',),
                        'Label' => array('type' => 'string', 'location' => 'xml',),
                        'CreationTime' => array('type' => 'string', 'location' => 'xml',),
                        'Object' => array('type' => 'string', 'location' => 'xml',),
                        'Url' => array('type' => 'string', 'location' => 'xml',),
                        'PageCount' => array('type' => 'integer', 'location' => 'xml',),
                        'Labels' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'PornInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'TerrorismInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'PoliticsInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'AdsInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                            ),
                        ),
                        'PageSegment' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Results' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Url' => array('type' => 'string', 'location' => 'xml',),
                                            'Text' => array('type' => 'string', 'location' => 'xml',),
                                            'PageNumber' => array('type' => 'integer', 'location' => 'xml',),
                                            'SheetNumber' => array('type' => 'integer', 'location' => 'xml',),
                                            'Label' => array('type' => 'string', 'location' => 'xml',),
                                            'Suggestion' => array('type' => 'integer', 'location' => 'xml',),
                                            'PornInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Category' => array('type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'OcrResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Text' => array('type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array('type' => 'string', 'location' => 'xml',)
                                                                ),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'ObjectResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Name' => array('type' => 'string', 'location' => 'xml',),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'TerrorismInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Category' => array('type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'OcrResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Text' => array('type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array('type' => 'string', 'location' => 'xml',)
                                                                ),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'ObjectResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Name' => array('type' => 'string', 'location' => 'xml',),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'PoliticsInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Category' => array('type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'OcrResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Text' => array('type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array('type' => 'string', 'location' => 'xml',)
                                                                ),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'ObjectResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Name' => array('type' => 'string', 'location' => 'xml',),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'AdsInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Category' => array('type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'OcrResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Text' => array('type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array('type' => 'string', 'location' => 'xml',)
                                                                ),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'ObjectResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Name' => array('type' => 'string', 'location' => 'xml',),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array('type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array('type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'UserInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml',),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml',),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Room' => array( 'type' => 'string', 'location' => 'xml',),
                                'IP' => array( 'type' => 'string', 'location' => 'xml',),
                                'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml',),
                                'Level' => array( 'type' => 'string', 'location' => 'xml',),
                                'Role' => array( 'type' => 'string', 'location' => 'xml',),
                            ),
                        ),
                        'ListInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'ListResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ListType' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'ListName' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Entity' => array( 'type' => 'string', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function CreateDocProcessJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}doc_jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateDocProcessJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Tag' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ),
                'QueueId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'xml',
                ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Output' => array(
                            'required' => true,
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array(
                                    'type' => 'string','required' => true,'location' => 'xml',
                                ),
                                'Bucket' => array(
                                    'type' => 'string','required' => true,'location' => 'xml',
                                ),
                                'Object' => array(
                                    'type' => 'string','required' => true,'location' => 'xml',
                                ),
                            ),
                        ),
                        'DocProcess' => array(
                            'required' => true,
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'SrcType' => array(
                                    'type' => 'string',
                                ),
                                'TgtType' => array(
                                    'type' => 'string',
                                ),
                                'SheetId' => array(
                                    'type' => 'integer',
                                ),
                                'StartPage' => array(
                                    'type' => 'integer',
                                ),
                                'EndPage' => array(
                                    'type' => 'integer',
                                ),
                                'ImageParams' => array(
                                    'type' => 'string',
                                ),
                                'DocPassword' => array(
                                    'type' => 'string',
                                ),
                                'Comments' => array(
                                    'type' => 'integer',
                                ),
                                'PaperDirection' => array(
                                    'type' => 'integer',
                                ),
                                'Quality' => array(
                                    'type' => 'integer',
                                ),
                                'Zoom' => array(
                                    'type' => 'integer',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function CreateDocProcessJobsOutput()
    {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id',),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'EndTime' => array('type' => 'string', 'location' => 'xml',),
                        'StartTime' => array('type' => 'string', 'location' => 'xml',),
                        'Code' => array('type' => 'string', 'location' => 'xml',),
                        'Message' => array('type' => 'string', 'location' => 'xml',),
                        'JobId' => array('type' => 'string', 'location' => 'xml',),
                        'Tag' => array('type' => 'string', 'location' => 'xml',),
                        'State' => array('type' => 'string', 'location' => 'xml',),
                        'CreationTime' => array('type' => 'string', 'location' => 'xml',),
                        'QueueId' => array('type' => 'string', 'location' => 'xml',),
                        'Input' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Object' => array('type' => 'string', 'location' => 'xml',),
                            ),
                        ),
                        'Operation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Output' => array(
                                    'required' => true,
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array(
                                            'type' => 'string','location' => 'xml',
                                        ),
                                        'Bucket' => array(
                                            'type' => 'string','location' => 'xml',
                                        ),
                                        'Object' => array(
                                            'type' => 'string','location' => 'xml',
                                        ),
                                    ),
                                ),
                                'DocProcess' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'SrcType' => array(
                                            'type' => 'string',
                                        ),
                                        'TgtType' => array(
                                            'type' => 'string',
                                        ),
                                        'SheetId' => array(
                                            'type' => 'integer',
                                        ),
                                        'StartPage' => array(
                                            'type' => 'integer',
                                        ),
                                        'EndPage' => array(
                                            'type' => 'integer',
                                        ),
                                        'ImageParams' => array(
                                            'type' => 'string',
                                        ),
                                        'DocPassword' => array(
                                            'type' => 'string',
                                        ),
                                        'Comments' => array(
                                            'type' => 'integer',
                                        ),
                                        'PaperDirection' => array(
                                            'type' => 'integer',
                                        ),
                                        'Quality' => array(
                                            'type' => 'integer',
                                        ),
                                        'Zoom' => array(
                                            'type' => 'integer',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function DescribeDocProcessQueues() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}docqueue',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeDocProcessQueuesOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'queueIds' => array(
                    'type' => 'string',
                    'location' => 'xml',
                ),
                'state' => array(
                    'type' => 'string',
                    'location' => 'xml',
                ),
                'pageNumber' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
                'pageSize' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
            ),
        );
    }
    public static function DescribeDocProcessQueuesOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array('type' => 'string', 'location' => 'xml',),
                'TotalCount' => array('type' => 'integer', 'location' => 'xml',),
                'PageNumber' => array('type' => 'integer', 'location' => 'xml',),
                'PageSize' => array('type' => 'integer',  'location' => 'xml',),
                'QueueList' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'State' => array('type' => 'string', 'location' => 'xml',),
                        'Name' => array('type' => 'string', 'location' => 'xml',),
                        'MaxSize' => array('type' => 'integer', 'location' => 'xml',),
                        'MaxConcurrent' => array('type' => 'integer', 'location' => 'xml',),
                        'CreateTime' => array('type' => 'string', 'location' => 'xml',),
                        'UpdateTime' => array('type' => 'string', 'location' => 'xml',),
                        'BucketId' => array('type' => 'string', 'location' => 'xml',),
                        'Category' => array('type' => 'string', 'location' => 'xml',),
                        'QueueId' => array('type' => 'string', 'location' => 'xml',),
                        'NotifyConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Url' => array('type' => 'string', 'location' => 'xml',),
                                'Event' => array('type' => 'string', 'location' => 'xml',),
                                'Type' => array('type' => 'string', 'location' => 'xml',),
                                'State' => array('type' => 'string', 'location' => 'xml',),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function DescribeDocProcessJob() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}doc_jobs/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeDocProcessJobOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }

    public static function DescribeDocProcessJobOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array(
                            'type' => 'string',
                        ),
                        'Message' => array(
                            'type' => 'string',
                        ),
                        'JobId' => array(
                            'type' => 'string',
                        ),
                        'State' => array(
                            'type' => 'string',
                        ),
                        'CreationTime' => array(
                            'type' => 'string',
                        ),
                        'QueueId' => array(
                            'type' => 'string',
                        ),
                        'Tag' => array(
                            'type' => 'string',
                        ),
                        'EndTime' => array(
                            'type' => 'string',
                        ),
                        'Input' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Object' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'Operation' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'DocProcess' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'SrcType' => array(
                                                'type' => 'string',
                                            ),
                                            'TgtType' => array(
                                                'type' => 'string',
                                            ),
                                            'SheetId' => array(
                                                'type' => 'integer',
                                            ),
                                            'StartPage' => array(
                                                'type' => 'integer',
                                            ),
                                            'EndPage' => array(
                                                'type' => 'integer',
                                            ),
                                            'ImageParams' => array(
                                                'type' => 'string',
                                            ),
                                            'DocPassword' => array(
                                                'type' => 'string',
                                            ),
                                            'Comments' => array(
                                                'type' => 'integer',
                                            ),
                                            'PaperDirection' => array(
                                                'type' => 'integer',
                                            ),
                                            'Quality' => array(
                                                'type' => 'integer',
                                            ),
                                            'Zoom' => array(
                                                'type' => 'integer',
                                            ),
                                        ),
                                    ),
                                    'DocProcessResult' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'PageInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'PageNo' => array(
                                                        'type' => 'integer',
                                                    ),
                                                    'TgtUri' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'PicIndex' => array(
                                                        'type' => 'integer',
                                                    ),
                                                    'PicNum' => array(
                                                        'type' => 'integer',
                                                    ),
                                                    'X-SheetPics' => array(
                                                        'type' => 'integer',
                                                    ),
                                                ),
                                            ),
                                            'SuccPageCount' => array(
                                                'type' => 'integer',
                                            ),
                                            'FailPageCount' => array(
                                                'type' => 'integer',
                                            ),
                                            'TaskId' => array(
                                                'type' => 'string',
                                            ),
                                            'TgtType' => array(
                                                'type' => 'string',
                                            ),
                                            'TotalPageCount' => array(
                                                'type' => 'integer',
                                            ),
                                            'TotalSheetCount' => array(
                                                'type' => 'integer',
                                            ),
                                        ),
                                    ),
                                    'Output' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Bucket' => array(
                                                'type' => 'string',
                                            ),
                                            'Object' => array(
                                                'type' => 'string',
                                            ),
                                            'Region' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function GetDescribeDocProcessJobs() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}doc_jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetDescribeDocProcessJobsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Tag' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'tag',
                ),
                'QueueId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'queueId',
                ),
                'OrderByTime' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'orderByTime',
                ),
                'NextToken' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'nextToken',
                ),
                'Size' => array(
                    'type' => 'integer',
                    'location' => 'query',
                    'sentAs' => 'size',
                ),
                'States' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'states',
                ),
                'StartCreationTime' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'startCreationTime',
                ),
                'EndCreationTime' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'endCreationTime',
                ),
            ),
        );
    }

    public static function GetDescribeDocProcessJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id',),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'NextToken' => array('type' => 'string','location' => 'xml',),
                'JobsDetail' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => array(
                        'xmlFlattened' => true,
                    ),
                    'items' => array(
                        'type' => 'object',
                        'properties' => array(
                            'Code' => array('type' => 'string', 'location' => 'xml',),
                            'Message' => array('type' => 'string', 'location' => 'xml',),
                            'JobId' => array('type' => 'string', 'location' => 'xml',),
                            'Tag' => array('type' => 'string', 'location' => 'xml',),
                            'State' => array('type' => 'string', 'location' => 'xml',),
                            'CreationTime' => array('type' => 'string', 'location' => 'xml',),
                            'QueueId' => array('type' => 'string', 'location' => 'xml',),
                            'Input' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Object' => array('type' => 'string', 'location' => 'xml',),
                                ),
                            ),
                            'Operation' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Output' => array(
                                        'required' => true,
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Region' => array(
                                                'type' => 'string','location' => 'xml',
                                            ),
                                            'Bucket' => array(
                                                'type' => 'string','location' => 'xml',
                                            ),
                                            'Object' => array(
                                                'type' => 'string','location' => 'xml',
                                            ),
                                        ),
                                    ),
                                    'DocProcess' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'SrcType' => array(
                                                'type' => 'string',
                                            ),
                                            'TgtType' => array(
                                                'type' => 'string',
                                            ),
                                            'SheetId' => array(
                                                'type' => 'integer',
                                            ),
                                            'StartPage' => array(
                                                'type' => 'integer',
                                            ),
                                            'EndPage' => array(
                                                'type' => 'integer',
                                            ),
                                            'ImageParams' => array(
                                                'type' => 'string',
                                            ),
                                            'DocPassword' => array(
                                                'type' => 'string',
                                            ),
                                            'Comments' => array(
                                                'type' => 'integer',
                                            ),
                                            'PaperDirection' => array(
                                                'type' => 'integer',
                                            ),
                                            'Quality' => array(
                                                'type' => 'integer',
                                            ),
                                            'Zoom' => array(
                                                'type' => 'integer',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function DetectImage() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DetectImageOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                    'minLength' => 1,
                    'filters' => array(
                        'Qcloud\\Cos\\Client::explodeKey'
                    )
                ),
                'ci-process' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query'
                ),
                'DetectType' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'detect-type'
                ),
                'DetectUrl' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'detect-url'
                ),
                'Interval' => array(
                    'type' => 'integer',
                    'location' => 'query',
                    'sentAs' => 'interval'
                ),
                'MaxFrames' => array(
                    'type' => 'integer',
                    'location' => 'query',
                    'sentAs' => 'max-frames'
                ),
                'BizType' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'biz-type'
                ),
                'LargeImageDetect' => array(
                    'type' => 'integer',
                    'location' => 'query',
                    'sentAs' => 'large-image-detect'
                ),
                'DataId' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'dataid'
                ),
                'Async' => array(
                    'type' => 'integer',
                    'location' => 'query',
                    'sentAs' => 'async'
                ),
                'Callback' => array(
                    'type' => 'string',
                    'location' => 'query',
                    'sentAs' => 'callback'
                ),
            ),
        );
    }

    public static function DetectImageOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'Result' => array('type' => 'integer', 'location' => 'xml',),
                'Label' => array('type' => 'string', 'location' => 'xml',),
                'Category' => array('type' => 'string', 'location' => 'xml',),
                'JobId' => array('type' => 'string', 'location' => 'xml',),
                'CompressionResult' => array('type' => 'integer', 'location' => 'xml',),
                'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                'Score' => array('type' => 'integer', 'location' => 'xml',),
                'Text' => array('type' => 'string', 'location' => 'xml',),
                'DataId' => array('type' => 'string', 'location' => 'xml',),
                'PornInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                        'Category' => array( 'type' => 'string', 'location' => 'xml',),
                        'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                        'OcrResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Keywords' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array( 'type' => 'string', 'location' => 'xml',),
                                    ),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'ObjectResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'LibResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                ),
                            ),
                        ),
                    ),
                ),
                'TerroristInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                        'Category' => array( 'type' => 'string', 'location' => 'xml',),
                        'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                        'OcrResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Keywords' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array( 'type' => 'string', 'location' => 'xml',),
                                    ),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'ObjectResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'LibResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                ),
                            ),
                        ),
                    ),
                ),
                'TerrorismInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                        'Category' => array( 'type' => 'string', 'location' => 'xml',),
                        'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                        'OcrResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Keywords' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array( 'type' => 'string', 'location' => 'xml',),
                                    ),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'ObjectResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'LibResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                ),
                            ),
                        ),
                    ),
                ),
                'PoliticsInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                        'Category' => array( 'type' => 'string', 'location' => 'xml',),
                        'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                        'OcrResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Keywords' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array( 'type' => 'string', 'location' => 'xml',),
                                    ),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'ObjectResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'LibResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                ),
                            ),
                        ),
                    ),
                ),
                'AdsInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                        'Category' => array( 'type' => 'string', 'location' => 'xml',),
                        'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                        'OcrResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Keywords' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array( 'type' => 'string', 'location' => 'xml',),
                                    ),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'ObjectResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'LibResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                ),
                            ),
                        ),
                    ),
                ),
                'TeenagerInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                        'Label' => array( 'type' => 'string', 'location' => 'xml',),
                        'Category' => array( 'type' => 'string', 'location' => 'xml',),
                        'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                        'OcrResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Keywords' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array( 'type' => 'string', 'location' => 'xml',),
                                    ),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'ObjectResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Location' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                            'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'LibResults' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                ),
                            ),
                        ),
                    ),
                ),
            )
        );
    }

    public static function DetectImages() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}image/auditing',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DetectImagesOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Inputs' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => array(
                        'xmlFlattened' => true,
                    ),
                    'items' => array(
                        'name' => 'Input',
                        'type' => 'object',
                        'location' => 'xml',
                        'sentAs' => 'Input',
                        'properties' => array(
                            'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                            'Content' => array( 'type' => 'string', 'location' => 'xml', ),
                            'Interval' => array( 'type' => 'integer', 'location' => 'xml', ),
                            'MaxFrames' => array( 'type' => 'integer', 'location' => 'xml', ),
                            'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                            'LargeImageDetect' => array( 'type' => 'integer', 'location' => 'xml', ),
                            'UserInfo' => array(
                                'location' => 'xml',
                                'type' => 'object',
                                'properties' => array(
                                    'TokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Nickname' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'DeviceId' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'AppId' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Room' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'IP' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Gender' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Level' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Role' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                        ),
                    ),
                ),
                'Conf' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'DetectType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'BizType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Async' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'Callback' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function DetectImagesOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'JobsDetail' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                        'properties' => array(
                            'Code' => array( 'type' => 'string', 'location' => 'xml',),
                            'Message' => array( 'type' => 'string', 'location' => 'xml',),
                            'JobId' => array( 'type' => 'string', 'location' => 'xml',),
                            'DataId' => array( 'type' => 'string', 'location' => 'xml',),
                            'CompressionResult' => array( 'type' => 'integer', 'location' => 'xml',),
                            'Label' => array( 'type' => 'string', 'location' => 'xml',),
                            'Result' => array( 'type' => 'integer', 'location' => 'xml',),
                            'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                            'Category' => array( 'type' => 'string', 'location' => 'xml',),
                            'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                            'Text' => array( 'type' => 'string', 'location' => 'xml',),
                            'Object' => array( 'type' => 'string', 'location' => 'xml',),
                            'Url' => array( 'type' => 'string', 'location' => 'xml',),
                            'PornInfo' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Category' => array( 'type' => 'string', 'location' => 'xml',),
                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                    'OcrResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Keywords' => array(
                                                    'type' => 'array',
                                                    'location' => 'xml',
                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                ),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'ObjectResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'LibResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'TerrorismInfo' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Category' => array( 'type' => 'string', 'location' => 'xml',),
                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                    'OcrResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Keywords' => array(
                                                    'type' => 'array',
                                                    'location' => 'xml',
                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                ),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'ObjectResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'LibResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'PoliticsInfo' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Category' => array( 'type' => 'string', 'location' => 'xml',),
                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                    'OcrResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Keywords' => array(
                                                    'type' => 'array',
                                                    'location' => 'xml',
                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                ),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'ObjectResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'LibResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'AdsInfo' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Category' => array( 'type' => 'string', 'location' => 'xml',),
                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                    'OcrResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Keywords' => array(
                                                    'type' => 'array',
                                                    'location' => 'xml',
                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                ),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'ObjectResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'LibResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'TeenagerInfo' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Code' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Msg' => array( 'type' => 'string', 'location' => 'xml',),
                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                    'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Category' => array( 'type' => 'string', 'location' => 'xml',),
                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                    'OcrResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Keywords' => array(
                                                    'type' => 'array',
                                                    'location' => 'xml',
                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                ),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'ObjectResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Location' => array(
                                                    'type' => 'object',
                                                    'location' => 'xml',
                                                    'properties' => array(
                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'LibResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'UserInfo' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'TokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Nickname' => array( 'type' => 'string', 'location' => 'xml',),
                                    'DeviceId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'AppId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Room' => array( 'type' => 'string', 'location' => 'xml',),
                                    'IP' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                    'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Gender' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Level' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Role' => array( 'type' => 'string', 'location' => 'xml',),
                                ),
                            ),
                            'ListInfo' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'ListResults' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'ListType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                'ListName' => array( 'type' => 'string', 'location' => 'xml',),
                                                'Entity' => array( 'type' => 'string', 'location' => 'xml',),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            )
        );
    }

    public static function DetectVirus() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}virus/detect',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DetectVirusOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Input' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Conf' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'DetectType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Callback' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function DetectVirusOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function GetDetectVirusResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}virus/detect/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetDetectVirusResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetDetectVirusResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array('type' => 'string', 'location' => 'xml',),
                        'Message' => array('type' => 'string', 'location' => 'xml',),
                        'JobId' => array('type' => 'string', 'location' => 'xml',),
                        'State' => array('type' => 'string', 'location' => 'xml',),
                        'CreationTime' => array('type' => 'string', 'location' => 'xml',),
                        'Object' => array('type' => 'string', 'location' => 'xml',),
                        'Url' => array('type' => 'string', 'location' => 'xml',),
                        'Suggestion' => array('type' => 'string', 'location' => 'xml',),
                        'DetectDetail' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Result' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'FileName' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'VirusName' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function GetDetectImageResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}image/auditing/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetDetectImageResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetDetectImageResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array('type' => 'string', 'location' => 'xml',),
                        'Message' => array('type' => 'string', 'location' => 'xml',),
                        'JobId' => array('type' => 'string', 'location' => 'xml',),
                        'State' => array('type' => 'string', 'location' => 'xml',),
                        'CreationTime' => array('type' => 'string', 'location' => 'xml',),
                        'Object' => array('type' => 'string', 'location' => 'xml',),
                        'Url' => array('type' => 'string', 'location' => 'xml',),
                        'CompressionResult' => array('type' => 'integer', 'location' => 'xml',),
                        'Text' => array('type' => 'string', 'location' => 'xml',),
                        'Label' => array('type' => 'string', 'location' => 'xml',),
                        'Category' => array('type' => 'string', 'location' => 'xml',),
                        'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                        'Result' => array('type' => 'integer', 'location' => 'xml',),
                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                        'PornInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'OcrResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml',),
                                            ),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'ObjectResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'LibResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'AdsInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'OcrResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml',),
                                            ),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'ObjectResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'LibResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'PoliticsInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'OcrResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml',),
                                            ),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'ObjectResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'LibResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'TerrorismInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'OcrResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml',),
                                            ),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'ObjectResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'LibResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'TeenagerInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HitFlag' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Score' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Label' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Category' => array( 'type' => 'string', 'location' => 'xml', ),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml', ),
                                'OcrResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Keywords' => array(
                                                'type' => 'array',
                                                'location' => 'xml',
                                                'items' => array( 'type' => 'string', 'location' => 'xml',),
                                            ),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'ObjectResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Location' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                    'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'LibResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'UserInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml',),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml',),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Room' => array( 'type' => 'string', 'location' => 'xml',),
                                'IP' => array( 'type' => 'string', 'location' => 'xml',),
                                'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml',),
                                'Level' => array( 'type' => 'string', 'location' => 'xml',),
                                'Role' => array( 'type' => 'string', 'location' => 'xml',),
                            ),
                        ),
                        'ListInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'ListResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ListType' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'ListName' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Entity' => array( 'type' => 'string', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function CreateMediaVoiceSeparateJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaVoiceSeparateJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'VoiceSeparate' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'AudioMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'AudioConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array('type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array('type' => 'string', 'location' => 'xml', ),
                                'Object' => array('type' => 'string', 'location' => 'xml', ),
                                'AuObject' => array('type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function CreateMediaVoiceSeparateJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DescribeMediaVoiceSeparateJob() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}jobs/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeMediaVoiceSeparateJobOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function DescribeMediaVoiceSeparateJobOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DetectWebpage() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}webpage/auditing',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DetectWebpageOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Input' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserInfo' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml', ),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Room' => array( 'type' => 'string', 'location' => 'xml', ),
                                'IP' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Level' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Role' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'Conf' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'DetectType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Callback' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ReturnHighlightHtml' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CallbackType' => array( 'type' => 'integer', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function DetectWebpageOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function GetDetectWebpageResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}webpage/auditing/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetDetectWebpageResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetDetectWebpageResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array('type' => 'string', 'location' => 'xml',),
                        'Message' => array('type' => 'string', 'location' => 'xml',),
                        'DataId' => array('type' => 'string', 'location' => 'xml',),
                        'JobId' => array('type' => 'string', 'location' => 'xml',),
                        'State' => array('type' => 'string', 'location' => 'xml',),
                        'CreationTime' => array('type' => 'string', 'location' => 'xml',),
                        'Url' => array('type' => 'string', 'location' => 'xml',),
                        'Suggestion' => array('type' => 'integer', 'location' => 'xml',),
                        'Label' => array('type' => 'string', 'location' => 'xml',),
                        'PageCount' => array('type' => 'integer', 'location' => 'xml',),
                        'HighlightHtml' => array('type' => 'string', 'location' => 'xml',),
                        'Labels' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'PornInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'AdsInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'PoliticsInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'TerrorismInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                        'Score' => array('type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                            ),
                        ),
                        'ImageResults' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Results' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Url' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Suggestion' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'PornInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Category' => array('type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                                    'OcrResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'ObjectResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'AdsInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Category' => array('type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                                    'OcrResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'ObjectResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'PoliticsInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Category' => array('type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                                    'OcrResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'ObjectResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'TerrorismInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Category' => array('type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array('type' => 'string', 'location' => 'xml',),
                                                    'OcrResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'ObjectResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'Name' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Location' => array(
                                                                    'type' => 'object',
                                                                    'location' => 'xml',
                                                                    'properties' => array(
                                                                        'X' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Width' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Height' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                        'Rotate' => array( 'type' => 'numeric', 'location' => 'xml',),
                                                                    ),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'ImageId' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'TextResults' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Results' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Text' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Suggestion' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'PornInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array('type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'AdsInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array('type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'PoliticsInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array('type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'TerrorismInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array('type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array('type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'UserInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml',),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml',),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Room' => array( 'type' => 'string', 'location' => 'xml',),
                                'IP' => array( 'type' => 'string', 'location' => 'xml',),
                                'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml',),
                                'Level' => array( 'type' => 'string', 'location' => 'xml',),
                                'Role' => array( 'type' => 'string', 'location' => 'xml',),
                            ),
                        ),
                        'ListInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'ListResults' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'ListType' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'ListName' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Entity' => array( 'type' => 'string', 'location' => 'xml',),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function DescribeMediaBuckets() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/mediabucket',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeMediaBucketsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Regions' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'regions' ),
                'BucketNames' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'bucketNames' ),
                'BucketName' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'bucketName' ),
                'PageNumber' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageNumber' ),
                'PageSize' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageSize' ),
            ),
        );
    }
    public static function DescribeMediaBucketsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'TotalCount' => array( 'type' => 'integer', 'location' => 'xml', ),
                'PageNumber' => array( 'type' => 'integer', 'location' => 'xml', ),
                'PageSize' => array( 'type' => 'integer', 'location' => 'xml', ),
                'MediaBucketList' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                        'properties' => array(
                            'BucketId' => array( 'type' => 'string', 'location' => 'xml',),
                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                            'Region' => array( 'type' => 'string', 'location' => 'xml',),
                            'CreateTime' => array( 'type' => 'string', 'location' => 'xml',),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function GetPrivateM3U8() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetPrivateM3U8Output',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'ci-process' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query'
                ),
                'expires' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query'
                )
            ),
        );
    }
    public static function GetPrivateM3U8Output() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DescribeMediaQueues() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}queue',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeMediaQueuesOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'QueueIds' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'queueIds' ),
                'State' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'state' ),
                'Category' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'category' ),
                'PageNumber' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageNumber' ),
                'PageSize' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageSize' ),
            ),
        );
    }
    public static function DescribeMediaQueuesOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'TotalCount' => array( 'type' => 'integer', 'location' => 'xml', ),
                'PageNumber' => array( 'type' => 'integer', 'location' => 'xml', ),
                'PageSize' => array( 'type' => 'integer', 'location' => 'xml', ),
                'QueueList' => array(
                    'type' => 'array', 'location' => 'xml',
                    'items' => array(
                        'type' => 'object', 'location' => 'xml',
                        'properties' => array(
                            'QueueId' => array( 'type' => 'string', 'location' => 'xml',),
                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                            'State' => array( 'type' => 'string', 'location' => 'xml',),
                            'MaxSize' => array( 'type' => 'integer', 'location' => 'xml',),
                            'MaxConcurrent' => array( 'type' => 'integer', 'location' => 'xml',),
                            'Category' => array( 'type' => 'string', 'location' => 'xml',),
                            'UpdateTime' => array( 'type' => 'string', 'location' => 'xml',),
                            'CreateTime' => array( 'type' => 'string', 'location' => 'xml',),
                            'NotifyConfig' => array(
                                'type' => 'object', 'location' => 'xml',
                                'properties' => array(
                                    'Url' => array( 'type' => 'string', 'location' => 'xml',),
                                    'State' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Event' => array( 'type' => 'string', 'location' => 'xml',),
                                    'ResultFormat' => array( 'type' => 'string', 'location' => 'xml',),
                                    'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                        ),
                    ),
                ),
                'NonExistPIDs' => array(
                    'type' => 'array', 'location' => 'xml',
                    'items' => array( 'type' => 'string', 'location' => 'xml', ),
                ),
            ),
        );
    }

    public static function UpdateMediaQueue() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}queue/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaQueueOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'QueueID' => array( 'location' => 'xml', 'type' => 'string', ),
                'State' => array( 'location' => 'xml', 'type' => 'string', ),
                'NotifyConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Event' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ResultFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaQueueOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaSmartCoverJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaSmartCoverJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'required' => false, 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'location' => 'xml', 'type' => 'string', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SmartCover' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'string', 'location' => 'xml', ),
                                'DeleteDuplicates' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Output' => array(
                            'required' => true,
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaSmartCoverJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaVideoProcessJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaVideoProcessJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'required' => false, 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'TranscodeTemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'WatermarkTemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'VideoProcess' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'ColorEnhance' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Enable' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Contrast' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Correction' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Saturation' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'MsSharpen' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Enable' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SharpenLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                        'Transcode' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Name' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Container' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Video' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'HlsTsTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'LongShortMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TimeInterval' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Audio' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'KeepTwoTracks' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SwitchTrack' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SampleFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TransConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'AdjDarMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckVideoBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'VideoBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckAudioBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AudioBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'DeleteMetadata' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'HlsEncrypt' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'IsHlsEncrypt' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'UriKey' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'Watermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Pos' => array( 'type' => 'string', 'location' => 'xml', ),
                                'LocMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                                'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Image' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Background' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Text' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'FontSize' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FontType' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FontColor' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Text' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                        'DigitalWatermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Version' => array( 'type' => 'string', 'location' => 'xml', ),
                                'IgnoreError' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaVideoProcessJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaVideoMontageJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaVideoMontageJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'VideoMontage' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Container' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Video' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Rotate' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Audio' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'AudioMix' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'AudioSource' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'MixMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Replace' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'EffectConfig' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'EnableStartFadein' => array( 'type' => 'string', 'location' => 'xml', ),
                                                    'StartFadeinTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                                    'EnableEndFadeout' => array( 'type' => 'string', 'location' => 'xml', ),
                                                    'EndFadeoutTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                                    'EnableBgmFade' => array( 'type' => 'string', 'location' => 'xml', ),
                                                    'BgmFadeTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaVideoMontageJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaAnimationJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaAnimationJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'required' => false, 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Animation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Container' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Video' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AnimateOnlyKeepKeyFrame' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AnimateTimeIntervalOfFrame' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AnimateFramesPerSecond' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Quality' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TimeInterval' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaAnimationJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaPicProcessJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}pic_jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaPicProcessJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'PicProcess' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'IsPicInfo' => array( 'type' => 'string', 'location' => 'xml', ),
                                'ProcessRule' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaPicProcessJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaSegmentJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaSegmentJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Segment' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                'HlsEncrypt' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'IsHlsEncrypt' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'UriKey' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaSegmentJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaVideoTagJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaVideoTagJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'VideoTag' => array(
                            'required' => true,
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Scenario' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaVideoTagJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaSuperResolutionJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaSuperResolutionJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'TranscodeTemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'WatermarkTemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SuperResolution' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Resolution' => array( 'type' => 'string', 'location' => 'xml', ),
                                'EnableScaleUp' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Transcode' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Name' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Container' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Video' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'HlsTsTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'LongShortMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TimeInterval' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Audio' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'KeepTwoTracks' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SwitchTrack' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SampleFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TransConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'AdjDarMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckVideoBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'VideoBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckAudioBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AudioBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'DeleteMetadata' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'HlsEncrypt' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'IsHlsEncrypt' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'UriKey' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'Watermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Pos' => array( 'type' => 'string', 'location' => 'xml', ),
                                'LocMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                                'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Image' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Background' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Text' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'FontSize' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FontType' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FontColor' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Text' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                        'DigitalWatermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Version' => array( 'type' => 'string', 'location' => 'xml', ),
                                'IgnoreError' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaSuperResolutionJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaSDRtoHDRJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaSDRtoHDRJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'TranscodeTemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'WatermarkTemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SDRtoHDR' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HdrMode' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Transcode' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Name' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Container' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Video' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'HlsTsTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'LongShortMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TimeInterval' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Audio' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'KeepTwoTracks' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SwitchTrack' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SampleFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'TransConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'AdjDarMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckVideoBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'VideoBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsCheckAudioBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AudioBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'DeleteMetadata' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'HlsEncrypt' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'IsHlsEncrypt' => array( 'type' => 'string', 'location' => 'xml', ),
                                                'UriKey' => array( 'type' => 'string', 'location' => 'xml', ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'Watermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Pos' => array( 'type' => 'string', 'location' => 'xml', ),
                                'LocMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                                'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Image' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Background' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'Text' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'FontSize' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FontType' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FontColor' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Text' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaSDRtoHDRJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaDigitalWatermarkJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaDigitalWatermarkJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DigitalWatermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Version' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaDigitalWatermarkJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaExtractDigitalWatermarkJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaExtractDigitalWatermarkJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ExtractDigitalWatermark' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Version' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaExtractDigitalWatermarkJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DetectLiveVideo() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}video/auditing',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DetectLiveVideoOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                'Input' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UserInfo' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'TokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Nickname' => array( 'type' => 'string', 'location' => 'xml', ),
                                'DeviceId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'AppId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Room' => array( 'type' => 'string', 'location' => 'xml', ),
                                'IP' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Gender' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Level' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Role' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'Conf' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'Callback' => array( 'type' => 'string', 'location' => 'xml', ),
                        'BizType' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CallbackType' => array( 'type' => 'integer', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function DetectLiveVideoOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function CancelLiveVideoAuditing() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}video/cancel_auditing/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CancelLiveVideoAuditingOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function CancelLiveVideoAuditingOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'DataId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }

    public static function OpticalOcrRecognition() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'OpticalOcrRecognitionOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'CiProcess' => array( 'required' => true, 'type' => 'string', 'location' => 'query', 'sentAs' => 'ci-process' ),
                'Type' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'type' ),
                'LanguageType' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'language-type' ),
                'IsPDF' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'ispdf' ),
                'PdfPageNumber' => array( 'type' => 'integer', 'location' => 'query', 'sentAs' => 'pdf-pagenumber' ),
                'IsWord' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'isword' ),
                'EnableWordPolygon' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'enable-word-polygon' ),
            ),
        );
    }
    public static function OpticalOcrRecognitionOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function TriggerWorkflow() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}triggerworkflow',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'TriggerWorkflowOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'workflowId' => array( 'required' => true, 'type' => 'string', 'location' => 'query', ),
                'object' => array( 'required' => true, 'type' => 'string', 'location' => 'query', ),
                'name' => array( 'required' => false, 'type' => 'string', 'location' => 'query', ),
            ),
        );
    }
    public static function TriggerWorkflowOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'InstanceId' => array( 'type' => 'string', 'location' => 'xml', ),
            ),
        );
    }

    public static function GetWorkflowInstances() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}workflowexecution',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetWorkflowInstancesOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'workflowId' => array( 'required' => true, 'type' => 'string', 'location' => 'query', ),
                'name' => array( 'required' => false, 'type' => 'string', 'location' => 'query', ),
                'orderByTime' => array( 'required' => false, 'type' => 'string', 'location' => 'query', ),
                'size' => array( 'required' => false, 'type' => 'string', 'location' => 'query', ),
                'states' => array( 'required' => false, 'type' => 'string', 'location' => 'query', ),
                'startCreationTime' => array( 'required' => false, 'type' => 'string', 'location' => 'query', ),
                'endCreationTime' => array( 'required' => false, 'type' => 'string', 'location' => 'query', ),
                'nextToken' => array( 'required' => false, 'type' => 'string', 'location' => 'query', ),
            ),
        );
    }
    public static function GetWorkflowInstancesOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'NextToken' => array( 'type' => 'string', 'location' => 'xml', ),
                'WorkflowExecutionList' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                        'properties' => array(
                            'RunId' => array( 'type' => 'string', 'location' => 'xml', ),
                            'WorkflowId' => array( 'type' => 'string', 'location' => 'xml', ),
                            'State' => array( 'type' => 'string', 'location' => 'xml', ),
                            'CreateTime' => array( 'type' => 'string', 'location' => 'xml', ),
                            'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function GetWorkflowInstance() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}workflowexecution/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetWorkflowInstanceOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetWorkflowInstanceOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaSnapshotTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaSnapshotTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Snapshot' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                        'TimeInterval' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Count' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaSnapshotTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'Template' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Name' => array( 'type' => 'string', 'location' => 'xml', ),
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UpdateTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreateTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Snapshot' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                'TimeInterval' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function UpdateMediaSnapshotTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaSnapshotTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'Snapshot' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                        'TimeInterval' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Count' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaSnapshotTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'Template' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Name' => array( 'type' => 'string', 'location' => 'xml', ),
                        'TemplateId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UpdateTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreateTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Snapshot' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                'TimeInterval' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Count' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function CreateMediaTranscodeTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaTranscodeTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Container' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ClipConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'Video' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                        'LongShortMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Rotate' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TimeInterval' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Audio' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                        'KeepTwoTracks' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SwitchTrack' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SampleFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TransConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'AdjDarMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsCheckVideoBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'VideoBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsCheckAudioBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'AudioBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DeleteMetadata' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                        'HlsEncrypt' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'IsHlsEncrypt' => array( 'type' => 'string', 'location' => 'xml', ),
                                'UriKey' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaTranscodeTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaTranscodeTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaTranscodeTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'Container' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ClipConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'Video' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                        'LongShortMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Rotate' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TimeInterval' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Audio' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                        'KeepTwoTracks' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SwitchTrack' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SampleFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TransConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'AdjDarMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsCheckVideoBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'VideoBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsCheckAudioBitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'AudioBitrateAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'DeleteMetadata' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                        'HlsEncrypt' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'IsHlsEncrypt' => array( 'type' => 'string', 'location' => 'xml', ),
                                'UriKey' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaTranscodeTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaHighSpeedHdTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaHighSpeedHdTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Container' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Video' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'HlsTsTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TimeInterval' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Audio' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TransConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaHighSpeedHdTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaHighSpeedHdTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaHighSpeedHdTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'Container' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Video' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Profile' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Gop' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Preset' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bufsize' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Maxrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'HlsTsTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Pixfmt' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TimeInterval' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Audio' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TransConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'IsCheckReso' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ResoAdjMethod' => array( 'type' => 'string', 'location' => 'xml', ),
                        'IsHdr2Sdr' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaHighSpeedHdTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaAnimationTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaAnimationTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Container' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Video' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                        'AnimateOnlyKeepKeyFrame' => array( 'type' => 'string', 'location' => 'xml', ),
                        'AnimateTimeIntervalOfFrame' => array( 'type' => 'string', 'location' => 'xml', ),
                        'AnimateFramesPerSecond' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Quality' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TimeInterval' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaAnimationTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaAnimationTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaAnimationTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'Container' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Video' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                        'AnimateOnlyKeepKeyFrame' => array( 'type' => 'string', 'location' => 'xml', ),
                        'AnimateTimeIntervalOfFrame' => array( 'type' => 'string', 'location' => 'xml', ),
                        'AnimateFramesPerSecond' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Quality' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'TimeInterval' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Duration' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaAnimationTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaConcatTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaConcatTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'ConcatTemplate' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'ConcatFragments' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'ConcatFragment',
                                'type' => 'object',
                                'sentAs' => 'ConcatFragment',
                                'properties' => array(
                                    'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                        ),
                        'Audio' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Video' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Container' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaConcatTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaConcatTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaConcatTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'ConcatTemplate' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'ConcatFragments' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'ConcatFragment',
                                'type' => 'object',
                                'sentAs' => 'ConcatFragment',
                                'properties' => array(
                                    'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                    'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                ),
                            ),
                        ),
                        'Audio' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Video' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Container' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaConcatTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaVideoProcessTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaVideoProcessTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'ColorEnhance' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Enable' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Contrast' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Correction' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Saturation' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'MsSharpen' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Enable' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SharpenLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaVideoProcessTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaVideoProcessTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaVideoProcessTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'ColorEnhance' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Enable' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Contrast' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Correction' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Saturation' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'MsSharpen' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Enable' => array( 'type' => 'string', 'location' => 'xml', ),
                        'SharpenLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaVideoProcessTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaVideoMontageTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaVideoMontageTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Duration' => array( 'location' => 'xml', 'type' => 'string', ),
                'Container' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Video' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Audio' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'AudioMix' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'AudioSource' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MixMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Replace' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaVideoMontageTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaVideoMontageTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaVideoMontageTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'Duration' => array( 'location' => 'xml', 'type' => 'string', ),
                'Container' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Video' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Fps' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Crf' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Audio' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Remove' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'AudioMix' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'AudioSource' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MixMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Replace' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaVideoMontageTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaVoiceSeparateTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaVoiceSeparateTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'AudioMode' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'AudioConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaVoiceSeparateTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaVoiceSeparateTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaVoiceSeparateTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'AudioMode' => array( 'location' => 'xml', 'type' => 'string', ),
                'AudioConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Codec' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Samplerate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Bitrate' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Channels' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaVoiceSeparateTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaSuperResolutionTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaSuperResolutionTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Resolution' => array( 'location' => 'xml', 'type' => 'string', ),
                'EnableScaleUp' => array( 'location' => 'xml', 'type' => 'string', ),
                'Version' => array( 'location' => 'xml', 'type' => 'string', ),
            ),
        );
    }
    public static function CreateMediaSuperResolutionTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaSuperResolutionTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaSuperResolutionTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'Resolution' => array( 'location' => 'xml', 'type' => 'string', ),
                'EnableScaleUp' => array( 'location' => 'xml', 'type' => 'string', ),
                'Version' => array( 'location' => 'xml', 'type' => 'string', ),
            ),
        );
    }
    public static function UpdateMediaSuperResolutionTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaPicProcessTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaPicProcessTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'PicProcess' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'IsPicInfo' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ProcessRule' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaPicProcessTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaPicProcessTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaPicProcessTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'PicProcess' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'IsPicInfo' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ProcessRule' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaPicProcessTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaWatermarkTemplate() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaWatermarkTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Watermark' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Pos' => array( 'type' => 'string', 'location' => 'xml', ),
                        'LocMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Image' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Background' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Text' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'FontSize' => array( 'type' => 'string', 'location' => 'xml', ),
                                'FontType' => array( 'type' => 'string', 'location' => 'xml', ),
                                'FontColor' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Text' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaWatermarkTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UpdateMediaWatermarkTemplate() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}template/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateMediaWatermarkTemplateOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'Watermark' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Pos' => array( 'type' => 'string', 'location' => 'xml', ),
                        'LocMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Dx' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Dy' => array( 'type' => 'string', 'location' => 'xml', ),
                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Image' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Width' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Height' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Background' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Text' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'FontSize' => array( 'type' => 'string', 'location' => 'xml', ),
                                'FontType' => array( 'type' => 'string', 'location' => 'xml', ),
                                'FontColor' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Transparency' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Text' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateMediaWatermarkTemplateOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DescribeMediaTemplates() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}template',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeMediaTemplatesOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Tag' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'tag' ),
                'Category' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'category' ),
                'Ids' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'ids' ),
                'Name' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'name' ),
                'PageNumber' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageNumber' ),
                'PageSize' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageSize' ),
            ),
        );
    }
    public static function DescribeMediaTemplatesOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'TotalCount' => array( 'type' => 'string', 'location' => 'xml', ),
                'PageNumber' => array( 'type' => 'string', 'location' => 'xml', ),
                'PageSize' => array( 'type' => 'string', 'location' => 'xml', ),
                'TemplateList' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                    ),
                ),
            ),
        );
    }

    public static function DescribeWorkflow() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}workflow',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeWorkflowOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Ids' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'ids' ),
                'Name' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'name' ),
                'PageNumber' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageNumber' ),
                'PageSize' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageSize' ),
            ),
        );
    }
    public static function DescribeWorkflowOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'TotalCount' => array( 'type' => 'string', 'location' => 'xml', ),
                'PageNumber' => array( 'type' => 'string', 'location' => 'xml', ),
                'PageSize' => array( 'type' => 'string', 'location' => 'xml', ),
                'MediaWorkflowList' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                    ),
                ),
            ),
        );
    }

    public static function DeleteWorkflow() {
        return array(
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}workflow/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DeleteWorkflowOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function DeleteWorkflowOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'WorkflowId' => array( 'type' => 'string', 'location' => 'xml' ),
            ),
        );
    }

    public static function CreateInventoryTriggerJob() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}inventorytriggerjob',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateInventoryTriggerJobOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Name' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Manifest' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UrlFile' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Prefix' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'WorkflowIds' => array( 'type' => 'string', 'location' => 'xml', ),
                        'TimeInterval' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Start' => array( 'type' => 'string', 'location' => 'xml', ),
                                'End' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }
    public static function CreateInventoryTriggerJobOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DescribeInventoryTriggerJobs() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}inventorytriggerjob',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeInventoryTriggerJobsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'NextToken' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'nextToken' ),
                'Size' => array( 'type' => 'integer', 'location' => 'query', 'sentAs' => 'size' ),
                'OrderByTime' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'orderByTime' ),
                'States' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'states' ),
                'StartCreationTime' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'startCreationTime' ),
                'EndCreationTime' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'endCreationTime' ),
                'WorkflowId' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'workflowId' ),
                'JobId' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'jobId' ),
                'Name' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'name' ),
            ),
        );
    }
    public static function DescribeInventoryTriggerJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function DescribeInventoryTriggerJob() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}inventorytriggerjob/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeInventoryTriggerJobOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function DescribeInventoryTriggerJobOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CancelInventoryTriggerJob() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}inventorytriggerjob/{/Key*}?cancel',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CancelInventoryTriggerJobOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function CancelInventoryTriggerJobOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaNoiseReductionJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaNoiseReductionJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaNoiseReductionJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function ImageRepairProcess() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageRepairProcessOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'ci-process' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'query'
                ),
                'MaskPic' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
                'MaskPoly' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
            ),
        );
    }
    public static function ImageRepairProcessOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function ImageDetectCarProcess() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?ci-process=DetectCar',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageDetectCarProcessOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function ImageDetectCarProcessOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'CarTags' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Serial' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Brand' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Color' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Confidence' => array( 'type' => 'numeric', 'location' => 'xml', ),
                        'Year' => array( 'type' => 'numeric', 'location' => 'xml', ),
                        'CarLocation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'X' => array( 'type' => 'numeric', 'location' => 'xml', ),
                                'Y' => array( 'type' => 'numeric', 'location' => 'xml', ),
                            ),
                        ),
                        'PlateContent' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Plate' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Color' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'PlateLocation' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'X' => array( 'type' => 'numeric', 'location' => 'xml', ),
                                        'Y' => array( 'type' => 'numeric', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function ImageAssessQualityProcess() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?ci-process=AssessQuality',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageAssessQualityProcessOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function ImageAssessQualityProcessOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'LongImage' => array( 'type' => 'string', 'location' => 'xml', ),
                'BlackAndWhite' => array( 'type' => 'string', 'location' => 'xml', ),
                'SmallImage' => array( 'type' => 'string', 'location' => 'xml', ),
                'BigImage' => array( 'type' => 'string', 'location' => 'xml', ),
                'PureImage' => array( 'type' => 'string', 'location' => 'xml', ),
                'ClarityScore' => array( 'type' => 'string', 'location' => 'xml', ),
                'AestheticScore' => array( 'type' => 'string', 'location' => 'xml', ),
            ),
        );
    }

    public static function ImageSearchOpen() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}ImageSearchBucket',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageSearchOpenOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'MaxCapacity' => array( 'location' => 'xml', 'type' => 'integer', ),
                'MaxQps' => array( 'location' => 'xml', 'type' => 'integer', ),
            ),
        );
    }
    public static function ImageSearchOpenOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function ImageSearchAdd() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}{/Key*}?ci-process=ImageSearch&action=AddImage',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageSearchAddOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'EntityId' => array( 'location' => 'xml', 'type' => 'string', ),
                'CustomContent' => array( 'location' => 'xml', 'type' => 'string', ),
                'Tags' => array( 'location' => 'xml', 'type' => 'string', ),
            ),
        );
    }
    public static function ImageSearchAddOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function ImageSearch() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?ci-process=ImageSearch&action=SearchImage',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageSearchOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'MatchThreshold' => array( 'type' => 'integer', 'location' => 'query' ),
                'Offset' => array( 'type' => 'integer', 'location' => 'query' ),
                'Limit' => array( 'type' => 'integer', 'location' => 'query' ),
                'Filter' => array( 'type' => 'string', 'location' => 'query' ),
            ),
        );
    }
    public static function ImageSearchOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'Count' => array('type' => 'integer', 'location' => 'xml',),
                'ImageInfos' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                        'properties' => array(
                            'EntityId' => array( 'type' => 'string', 'location' => 'xml',),
                            'CustomContent' => array( 'type' => 'string', 'location' => 'xml',),
                            'Tags' => array( 'type' => 'string', 'location' => 'xml',),
                            'PicName' => array( 'type' => 'string', 'location' => 'xml',),
                            'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                        ),
                    ),
                ),
            )
        );
    }

    public static function ImageSearchDelete() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}{/Key*}?ci-process=ImageSearch&action=DeleteImage',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageSearchDeleteOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'EntityId' => array( 'location' => 'xml', 'type' => 'string', ),
            ),
        );
    }
    public static function ImageSearchDeleteOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function BindCiService() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'BindCiServiceOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function BindCiServiceOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function GetCiService() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetCiServiceOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function GetCiServiceOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function UnBindCiService() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?unbind',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UnBindCiServiceOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function UnBindCiServiceOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function GetHotLink() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?hotlink',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetHotLinkOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function GetHotLinkOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function AddHotLink() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?hotlink',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'AddHotLinkOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Hotlink',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Type' => array( 'location' => 'xml', 'type' => 'string', ),
                'Urls' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'data' => array(
                        'xmlFlattened' => true,
                    ),
                    'items' => array( 'name' => 'Url', 'type' => 'string', 'location' => 'xml', 'sentAs' => 'Url', ),
                ),
            ),
        );
    }
    public static function AddHotLinkOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function OpenOriginProtect() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}?origin-protect',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'OpenOriginProtectOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function OpenOriginProtectOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function GetOriginProtect() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?origin-protect',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetOriginProtectOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function GetOriginProtectOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CloseOriginProtect() {
        return array(
            'httpMethod' => 'DELETE',
            'uri' => '/{Bucket}?origin-protect',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CloseOriginProtectOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function CloseOriginProtectOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-cos-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function ImageDetectFace() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?ci-process=DetectFace',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageDetectFaceOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'MaxFaceNum' => array( 'type' => 'integer', 'location' => 'query', 'sentAs' => 'max-face-num' ),
            ),
        );
    }
    public static function ImageDetectFaceOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'ImageWidth' => array('type' => 'integer', 'location' => 'xml',),
                'ImageHeight' => array('type' => 'integer', 'location' => 'xml',),
                'FaceModelVersion' => array('type' => 'string', 'location' => 'xml',),
                'FaceInfos' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                        'properties' => array(
                            'X' => array( 'type' => 'integer', 'location' => 'xml',),
                            'Y' => array( 'type' => 'integer', 'location' => 'xml',),
                            'Width' => array( 'type' => 'integer', 'location' => 'xml',),
                            'Height' => array( 'type' => 'integer', 'location' => 'xml',),
                        ),
                    ),
                ),
            )
        );
    }

    public static function ImageFaceEffect() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?ci-process=face-effect',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'ImageFaceEffectOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'type' => array( 'type' => 'string', 'location' => 'query', ),
                'whitening' => array( 'type' => 'integer', 'location' => 'query', ),
                'smoothing' => array( 'type' => 'integer', 'location' => 'query', ),
                'faceLifting' => array( 'type' => 'integer', 'location' => 'query', ),
                'eyeEnlarging' => array( 'type' => 'integer', 'location' => 'query', ),
                'gender' => array( 'type' => 'integer', 'location' => 'query', ),
                'age' => array( 'type' => 'integer', 'location' => 'query', ),
            ),
        );
    }
    public static function ImageFaceEffectOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'ResultImage' => array('type' => 'string', 'location' => 'xml',),
                'ResultMask' => array('type' => 'string', 'location' => 'xml',),
            )
        );
    }

    public static function IDCardOCR() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?ci-process=IDCardOCR',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'IDCardOCROutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'CardSide' => array( 'type' => 'string', 'location' => 'query', ),
                'Config' => array( 'type' => 'string', 'location' => 'query', ),
            ),
        );
    }
    public static function IDCardOCROutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'ResultImage' => array('type' => 'string', 'location' => 'xml',),
                'IdInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Name' => array( 'type' => 'string', 'location' => 'xml',),
                        'Sex' => array( 'type' => 'string', 'location' => 'xml',),
                        'Nation' => array( 'type' => 'string', 'location' => 'xml',),
                        'Birth' => array( 'type' => 'string', 'location' => 'xml',),
                        'Address' => array( 'type' => 'string', 'location' => 'xml',),
                        'IdNum' => array( 'type' => 'string', 'location' => 'xml',),
                        'Authority' => array( 'type' => 'string', 'location' => 'xml',),
                        'ValidDate' => array( 'type' => 'string', 'location' => 'xml',),
                    ),
                ),
                'AdvancedInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'IdCard' => array( 'type' => 'string', 'location' => 'xml',),
                        'Portrait' => array( 'type' => 'string', 'location' => 'xml',),
                        'Quality' => array( 'type' => 'string', 'location' => 'xml',),
                        'BorderCodeValue' => array( 'type' => 'string', 'location' => 'xml',),
                        'WarnInfos' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array( 'type' => 'string', 'location' => 'xml', ),
                        ),
                    ),
                ),
            )
        );
    }

    public static function IDCardOCRByUpload() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}{/Key*}?ci-process=IDCardOCR',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'IDCardOCRByUploadOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'CardSide' => array( 'type' => 'string', 'location' => 'query', ),
                'Config' => array( 'type' => 'string', 'location' => 'query', ),
                'Body' => array(
                    'required' => true,
                    'type' => array( 'any' ),
                    'location' => 'body'
                ),
            ),
        );
    }
    public static function IDCardOCRByUploadOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'ResultImage' => array('type' => 'string', 'location' => 'xml',),
                'IdInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Name' => array( 'type' => 'string', 'location' => 'xml',),
                        'Sex' => array( 'type' => 'string', 'location' => 'xml',),
                        'Nation' => array( 'type' => 'string', 'location' => 'xml',),
                        'Birth' => array( 'type' => 'string', 'location' => 'xml',),
                        'Address' => array( 'type' => 'string', 'location' => 'xml',),
                        'IdNum' => array( 'type' => 'string', 'location' => 'xml',),
                        'Authority' => array( 'type' => 'string', 'location' => 'xml',),
                        'ValidDate' => array( 'type' => 'string', 'location' => 'xml',),
                    ),
                ),
                'AdvancedInfo' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'IdCard' => array( 'type' => 'string', 'location' => 'xml',),
                        'Portrait' => array( 'type' => 'string', 'location' => 'xml',),
                        'Quality' => array( 'type' => 'string', 'location' => 'xml',),
                        'BorderCodeValue' => array( 'type' => 'string', 'location' => 'xml',),
                        'WarnInfos' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array( 'type' => 'string', 'location' => 'xml', ),
                        ),
                    ),
                ),
            )
        );
    }

    public static function GetLiveCode() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?ci-process=GetLiveCode',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetLiveCodeOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function GetLiveCodeOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'LiveCode' => array('type' => 'string', 'location' => 'xml',),
            )
        );
    }

    public static function GetActionSequence() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}?ci-process=GetActionSequence',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetActionSequenceOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function GetActionSequenceOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'ActionSequence' => array('type' => 'string', 'location' => 'xml',),
            )
        );
    }

    public static function DescribeDocProcessBuckets() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/docbucket',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'DescribeDocProcessBucketsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Regions' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'regions' ),
                'BucketNames' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'bucketNames' ),
                'BucketName' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'bucketName' ),
                'PageNumber' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageNumber' ),
                'PageSize' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageSize' ),
            ),
        );
    }
    public static function DescribeDocProcessBucketsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'TotalCount' => array( 'type' => 'integer', 'location' => 'xml', ),
                'PageNumber' => array( 'type' => 'integer', 'location' => 'xml', ),
                'PageSize' => array( 'type' => 'integer', 'location' => 'xml', ),
                'DocBucketList' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                        'properties' => array(
                            'BucketId' => array( 'type' => 'string', 'location' => 'xml',),
                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                            'Region' => array( 'type' => 'string', 'location' => 'xml',),
                            'CreateTime' => array( 'type' => 'string', 'location' => 'xml',),
                            'AliasBucketId' => array( 'type' => 'string', 'location' => 'xml',),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function UpdateDocProcessQueue() {
        return array(
            'httpMethod' => 'PUT',
            'uri' => '/{Bucket}docqueue/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateDocProcessQueueOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Name' => array( 'type' => 'string', 'location' => 'xml', ),
                'QueueID' => array( 'type' => 'string', 'location' => 'xml', ),
                'State' => array( 'type' => 'string', 'location' => 'xml', ),
                'NotifyConfig' => array(
                    'location' => 'xml',
                    'type' => 'object',
                    'properties' => array(
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Event' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateDocProcessQueueOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array( 'type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type', ),
                'ContentLength' => array( 'type' => 'numeric', 'minimum'=> 0, 'location' => 'header', 'sentAs' => 'Content-Length', ),
                'Queue' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'QueueId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Name' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreateTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'UpdateTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MaxSize' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'MaxConcurrent' => array( 'type' => 'integer', 'location' => 'xml', ),
                        'NotifyConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                'State' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Event' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function CreateMediaQualityEstimateJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaQualityEstimateJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'QualityEstimateConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Rotate' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Mode' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaQualityEstimateJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function CreateMediaStreamExtractJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateMediaStreamExtractJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'required' => true, 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'required' => true,
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'required' => true, 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobLevel' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'StreamExtracts' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'data' => array(
                                        'xmlFlattened' => true,
                                    ),
                                    'items' => array(
                                        'name' => 'StreamExtract',
                                        'type' => 'object',
                                        'sentAs' => 'StreamExtract',
                                        'properties' => array(
                                            'Index' => array( 'type' => 'string', 'location' => 'xml', ),
                                            'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateMediaStreamExtractJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'Body' => array(
                    'type' => 'string',
                    'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                    'location' => 'body',
                ),
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
            ),
        );
    }

    public static function FileJobs4Hash() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}{/Key*}?ci-process=filehash',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'FileJobs4HashOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Type' => array( 'required' => true, 'type' => 'string', 'location' => 'query', 'sentAs' => 'type', ),
                'AddToHeader' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'addtoheader', ),
            ),
        );
    }
    public static function FileJobs4HashOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-cos-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'FileHashCodeResult' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MD5' => array( 'type' => 'string', 'location' => 'xml',),
                        'SHA1' => array( 'type' => 'string', 'location' => 'xml',),
                        'SHA256' => array( 'type' => 'string', 'location' => 'xml',),
                        'FileSize' => array( 'type' => 'numeric', 'location' => 'xml',),
                    ),
                ),
                'Input' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Region' => array( 'type' => 'string', 'location' => 'xml',),
                        'Bucket' => array( 'type' => 'string', 'location' => 'xml',),
                        'Object' => array( 'type' => 'string', 'location' => 'xml',),
                    ),
                ),
            )
        );
    }

    public static function OpenFileProcessService() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}file_bucket',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'OpenFileProcessServiceOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
            ),
        );
    }
    public static function OpenFileProcessServiceOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'FileBucket' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'BucketId' => array( 'type' => 'string', 'location' => 'xml',),
                        'Name' => array( 'type' => 'string', 'location' => 'xml',),
                        'Region' => array( 'type' => 'string', 'location' => 'xml',),
                        'CreateTime' => array( 'type' => 'string', 'location' => 'xml',),
                    ),
                ),
            )
        );
    }

    public static function GetFileProcessQueueList() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}file_queue',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetFileProcessQueueListOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'QueueIds' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'queueIds', ),
                'State' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'state', ),
                'PageNumber' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageNumber', ),
                'PageSize' => array( 'type' => 'string', 'location' => 'query', 'sentAs' => 'pageSize', ),
            ),
        );
    }
    public static function GetFileProcessQueueListOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array( 'location' => 'header', 'sentAs' => 'x-ci-request-id', ),
                'ContentType' => array('type' => 'string', 'location' => 'header', 'sentAs' => 'Content-Type',),
                'ContentLength' => array('type' => 'numeric', 'minimum' => 0, 'location' => 'header', 'sentAs' => 'Content-Length',),
                'TotalCount' => array( 'type' => 'numeric', 'location' => 'xml',),
                'PageNumber' => array( 'type' => 'numeric', 'location' => 'xml',),
                'PageSize' => array( 'type' => 'numeric', 'location' => 'xml',),
                'QueueList' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array(
                        'type' => 'object',
                        'location' => 'xml',
                        'properties' => array(
                            'QueueId' => array( 'type' => 'string', 'location' => 'xml',),
                            'Name' => array( 'type' => 'string', 'location' => 'xml',),
                            'State' => array( 'type' => 'string', 'location' => 'xml',),
                            'Category' => array( 'type' => 'string', 'location' => 'xml',),
                            'CreateTime' => array( 'type' => 'string', 'location' => 'xml',),
                            'UpdateTime' => array( 'type' => 'string', 'location' => 'xml',),
                            'MaxSize' => array( 'type' => 'integer', 'location' => 'xml',),
                            'MaxConcurrent' => array( 'type' => 'integer', 'location' => 'xml',),
                            'NotifyConfig' => array(
                                'type' => 'object',
                                'location' => 'xml',
                                'properties' => array(
                                    'Url' => array( 'type' => 'string', 'location' => 'xml',),
                                    'State' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                    'Event' => array( 'type' => 'string', 'location' => 'xml',),
                                    'ResultFormat' => array( 'type' => 'string', 'location' => 'xml',),
                                    'MqMode' => array( 'type' => 'string', 'location' => 'xml',),
                                    'MqRegion' => array( 'type' => 'string', 'location' => 'xml',),
                                    'MqName' => array( 'type' => 'string', 'location' => 'xml',),
                                ),
                            ),
                        ),
                    ),
                ),
                'NonExistPIDs' => array(
                    'type' => 'array',
                    'location' => 'xml',
                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                ),
            )
        );
    }

    public static function UpdateFileProcessQueue() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}file_queue/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'UpdateFileProcessQueueOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Key' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Name' => array( 'location' => 'xml', 'type' => 'string', ),
                'State' => array( 'location' => 'xml', 'type' => 'string', ),
                'NotifyConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Event' => array( 'type' => 'string', 'location' => 'xml', ),
                        'ResultFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function UpdateFileProcessQueueOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'Queue' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'QueueId' => array( 'type' => 'string', 'location' => 'xml',),
                        'Name' => array( 'type' => 'string', 'location' => 'xml',),
                        'State' => array( 'type' => 'string', 'location' => 'xml',),
                        'Category' => array( 'type' => 'string', 'location' => 'xml',),
                        'CreateTime' => array( 'type' => 'string', 'location' => 'xml',),
                        'UpdateTime' => array( 'type' => 'string', 'location' => 'xml',),
                        'MaxSize' => array( 'type' => 'numeric', 'location' => 'xml',),
                        'MaxConcurrent' => array( 'type' => 'numeric', 'location' => 'xml',),
                        'NotifyConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'State' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Event' => array( 'type' => 'string', 'location' => 'xml', ),
                                'ResultFormat' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Url' => array( 'type' => 'string', 'location' => 'xml', ),
                                'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                                'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                                'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function CreateFileHashCodeJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}file_jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateFileHashCodeJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'FileHashCodeConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                'AddToHeader' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateFileHashCodeJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'QueueId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Input' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Operation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                                'FileHashCodeConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AddToHeader' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'FileHashCodeResult' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'MD5' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SHA1' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SHA256' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'LastModified' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Etag' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FileSize' => array( 'type' => 'numeric', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function GetFileHashCodeResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}file_jobs/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetFileHashCodeResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetFileHashCodeResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'QueueId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Input' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Operation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                                'FileHashCodeConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AddToHeader' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'FileHashCodeResult' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'MD5' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SHA1' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'SHA256' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'LastModified' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Etag' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FileSize' => array( 'type' => 'numeric', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'NonExistJobIds' => array('type' => 'string', 'location' => 'xml',),
            ),
        );
    }

    public static function CreateFileUncompressJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}file_jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateFileUncompressJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'Input' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
                'Operation' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'FileUncompressConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Prefix' => array( 'type' => 'string', 'location' => 'xml', ),
                                'PrefixReplaced' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateFileUncompressJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'QueueId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Input' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Operation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Output' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'FileUncompressConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Prefix' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'PrefixReplaced' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'FileUncompressResult' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FileCount' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function GetFileUncompressResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}file_jobs/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetFileUncompressResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetFileUncompressResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'QueueId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Input' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                        'Operation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Output' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'FileUncompressConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Prefix' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'PrefixReplaced' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'FileUncompressResult' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'FileCount' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'NonExistJobIds' => array('type' => 'string', 'location' => 'xml',),
            ),
        );
    }

    public static function CreateFileCompressJobs() {
        return array(
            'httpMethod' => 'POST',
            'uri' => '/{Bucket}file_jobs',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'CreateFileCompressJobsOutput',
            'responseType' => 'model',
            'data' => array(
                'xmlRoot' => array(
                    'name' => 'Request',
                ),
            ),
            'parameters' => array(
                'Bucket' => array( 'required' => true, 'type' => 'string', 'location' => 'uri', ),
                'Tag' => array( 'location' => 'xml', 'type' => 'string', ),
                'QueueId' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackFormat' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBackType' => array( 'location' => 'xml', 'type' => 'string', ),
                'CallBack' => array( 'location' => 'xml', 'type' => 'string', ),
                'Operation' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                        'FileCompressConfig' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Flatten' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                'UrlList' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Prefix' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Keys' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'data' => array(
                                        'xmlFlattened' => true),
                                    'items' => array(
                                        'name' => 'Key',
                                        'type' => 'string',
                                        'sentAs' => 'Key',
                                        'location' => 'xml',
                                    )
                                ),
                            ),
                        ),
                        'Output' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                            ),
                        ),
                    ),
                ),
                'CallBackMqConfig' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'MqRegion' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqMode' => array( 'type' => 'string', 'location' => 'xml', ),
                        'MqName' => array( 'type' => 'string', 'location' => 'xml', ),
                    ),
                ),
            ),
        );
    }
    public static function CreateFileCompressJobsOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'QueueId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Operation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Output' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'FileCompressConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Flatten' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'UrlList' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Prefix' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Key' => array(
                                            'type' => 'array',
                                            'location' => 'xml',
                                            'items' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                ),
                                'FileCompressResult' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    public static function GetFileCompressResult() {
        return array(
            'httpMethod' => 'GET',
            'uri' => '/{Bucket}file_jobs/{/Key*}',
            'class' => 'Qcloud\\Cos\\Command',
            'responseClass' => 'GetFileCompressResultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'Bucket' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Key' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
        );
    }
    public static function GetFileCompressResultOutput() {
        return array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'RequestId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'x-ci-request-id',
                ),
                'ContentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'sentAs' => 'Content-Type',
                ),
                'ContentLength' => array(
                    'type' => 'numeric',
                    'minimum'=> 0,
                    'location' => 'header',
                    'sentAs' => 'Content-Length',
                ),
                'JobsDetail' => array(
                    'type' => 'object',
                    'location' => 'xml',
                    'properties' => array(
                        'Code' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Message' => array( 'type' => 'string', 'location' => 'xml', ),
                        'JobId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Tag' => array( 'type' => 'string', 'location' => 'xml', ),
                        'State' => array( 'type' => 'string', 'location' => 'xml', ),
                        'CreationTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'StartTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'EndTime' => array( 'type' => 'string', 'location' => 'xml', ),
                        'QueueId' => array( 'type' => 'string', 'location' => 'xml', ),
                        'Operation' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'UserData' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Output' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                                'FileCompressConfig' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Flatten' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Format' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'UrlList' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Prefix' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Key' => array(
                                            'type' => 'array',
                                            'location' => 'xml',
                                            'items' => array( 'type' => 'string', 'location' => 'xml', ),
                                        ),
                                    ),
                                ),
                                'FileCompressResult' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Region' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Bucket' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Object' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'NonExistJobIds' => array('type' => 'string', 'location' => 'xml',),
            ),
        );
    }

}
