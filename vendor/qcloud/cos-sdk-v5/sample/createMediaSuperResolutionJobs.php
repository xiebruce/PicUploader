<?php

require dirname(__FILE__, 2) . '/vendor/autoload.php';

$secretId = "SECRETID"; //替换为用户的 secretId，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$secretKey = "SECRETKEY"; //替换为用户的 secretKey，请登录访问管理控制台进行查看和管理，https://console.cloud.tencent.com/cam/capi
$region = "ap-beijing"; //替换为用户的 region，已创建桶归属的region可以在控制台查看，https://console.cloud.tencent.com/cos5/bucket
$cosClient = new Qcloud\Cos\Client(
    array(
        'region' => $region,
        'schema' => 'https', //协议头部，默认为http
        'credentials'=> array(
            'secretId'  => $secretId ,
            'secretKey' => $secretKey)));
try {
    // 提交超分辨率任务 https://cloud.tencent.com/document/product/436/67210
    // start --------------- 使用模版 ----------------- //
    $result = $cosClient->createMediaSuperResolutionJobs(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Tag' => 'SuperResolution',
        'QueueId' => 'p81e648af2aee49688570xxxxxxxxxxx',
        'Input' => array(
            'Object' => 'video01.mp4'
        ),
        'Operation' => array(
            'TemplateId' =>'t19ea5e0c0b7054d7b904axxxxxxxxxxx',
            'TranscodeTemplateId' =>'t0b612860a293f41078xxxxxxxxxxx',
            'WatermarkTemplateId' =>'t185e2e24551b24259a02xxxxxxxxxxx',
            'DigitalWatermark' => array(
                'Message' => 'xxx',
                'Type' => 'Text',
                'Version' => 'V1',
                'IgnoreError' => 'true',
            ),
            'Output' => array(
                'Region' => $region,
                'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
                'Object' => 'SuperResolution.flv',
            ),
//            'UserData' => 'xxx', // 透传用户信息
//            'JobLevel' => '0', // 任务优先级，级别限制：0 、1 、2。级别越大任务优先级越高，默认为0
        ),
        'CallBack' => '',
    ));
    // 请求成功
    print_r($result);
    // end --------------- 使用模版 ----------------- //

    // start --------------- 自定义参数 ----------------- //
    $result = $cosClient->createMediaSuperResolutionJobs(array(
        'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
        'Tag' => 'SuperResolution',
        'QueueId' => 'p81e648af2aee49688570xxxxxxxxxxx',
        'Input' => array(
            'Object' => 'video01.mp4'
        ),
        'Operation' => array(
            'SuperResolution' => array(
                'Resolution' => '',
                'EnableScaleUp' => '',
            ),
            'Transcode' => array(
                'Tag' => '',
                'Name' => '',
                'Container' => array(
                    'Format' => '',
                ),
                'Video' => array(
                    'Codec' => '',
                    'Width' => '',
                    'Height' => '',
                    'Fps' => '',
                    'Remove' => '',
                    'Profile' => '',
                    'Bitrate' => '',
                    'Crf' => '',
                    'Gop' => '',
                    'Preset' => '',
                    'Bufsize' => '',
                    'Maxrate' => '',
                    'HlsTsTime' => '',
                    'Pixfmt' => '',
                    'LongShortMode' => '',
                ),
                'TimeInterval' => array(
                    'Start' => '',
                    'Duration' => '',
                ),
                'Audio' => array(
                    'Codec' => '',
                    'Samplerate' => '',
                    'Bitrate' => '',
                    'Channels' => '',
                    'Remove' => '',
                    'KeepTwoTracks' => '',
                    'SwitchTrack' => '',
                    'SampleFormat' => '',
                ),
                'TransConfig' => array(
                    'AdjDarMethod' => '',
                    'IsCheckReso' => '',
                    'ResoAdjMethod' => '',
                    'IsCheckVideoBitrate' => '',
                    'VideoBitrateAdjMethod' => '',
                    'IsCheckAudioBitrate' => '',
                    'AudioBitrateAdjMethod' => '',
                    'DeleteMetadata' => '',
                    'IsHdr2Sdr' => '',
                    'HlsEncrypt' => array(
                        'IsHlsEncrypt' => '',
                        'UriKey' => '',
                    ),
                ),
            ),
            'Watermark' => array(
                'Type' => '',
                'Pos' => '',
                'LocMode' => '',
                'Dx' => '',
                'Dy' => '',
                'StartTime' => '',
                'EndTime' => '',
                'Image' => array(
                    'Url' => '',
                    'Mode' => '',
                    'Width' => '',
                    'Height' => '',
                    'Transparency' => '',
                    'Background' => '',
                ),
                'Text' => array(
                    'FontSize' => '',
                    'FontType' => '',
                    'FontColor' => '',
                    'Transparency' => '',
                    'Text' => '',
                ),
            ),
            'DigitalWatermark' => array(
                'Message' => '',
                'Type' => '',
                'Version' => '',
                'IgnoreError' => '',
            ),
            'Output' => array(
                'Region' => $region,
                'Bucket' => 'examplebucket-125000000', //存储桶名称，由BucketName-Appid 组成，可以在COS控制台查看 https://console.cloud.tencent.com/cos5/bucket
                'Object' => 'SuperResolution.flv',
            ),
//            'UserData' => 'xxx', // 透传用户信息
//            'JobLevel' => '0', // 任务优先级，级别限制：0 、1 、2。级别越大任务优先级越高，默认为0
        ),
        'CallBack' => '',
    ));
    // 请求成功
    print_r($result);
    // end --------------- 自定义参数 ----------------- //
} catch (\Exception $e) {
    // 请求失败
    echo($e);
}
