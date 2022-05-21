<?php

namespace Qcloud\Cos\Tests;

use Qcloud\Cos\Exception\ServiceResponseException;
use Qcloud\Cos\Client;

//class CosClientCiTest extends TestCosClientBase
//{
//    //TODO
/*
     * 文本审核
     */
//public function testDetectText()
//{
//    try {
//        // 文本审核
//        $content = '敏感词';
//        $this->cosClient->detectText(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Content' => base64_encode($content) // 文本需base64_encode
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads', //Porn,Terrorism,Politics,Ads,Illegal,Abuse类型
//            ),
//        ));
//
//        // 桶文件审核
//        $result = $this->cosClient->detectText(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Object' => 'test01.txt'
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads', //Porn,Terrorism,Politics,Ads,Illegal,Abuse类型
//            ),
//        ));
//        Common::waitSync();
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectTextResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        // 文本文件url审核
//        $result = $this->cosClient->detectText(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Url' => 'https://bucket-123456.cos.ap-region.myqcloud.com/test01.txt'
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads', //Porn,Terrorism,Politics,Ads,Illegal,Abuse类型
//            ),
//        ));
//        Common::waitSync();
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectTextResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//        $this->assertTrue(True);
//    } catch (ServiceResponseException $e) {
//        $this->assertFalse(True);
//    }
//}
//
///*
// * 图片审核
// */
//public function testDetectImage()
//{
//    try {
//        // 存储桶图片审核
//        $this->cosClient->detectImage(array(
//            'Bucket' => $this->bucket,
//            'Key' => 'test01.png',
//            'DetectType' => 'porn,politics,terrorist,ads', //可选四种参数：porn,politics,terrorist,ads，可使用多种规则，注意规则间不要加空格
//            'ci-process' => 'sensitive-content-recognition',
//        ));
//
//        // 图片url审核
//        $result = $this->cosClient->detectImage(array(
//            'Bucket' => $this->bucket,
//            'Key' => '/', // 链接图片资源路径写 / 即可
//            'DetectType' => 'porn,politics,terrorist,ads',
//            'DetectUrl' => 'https://wx4.sinaimg.cn/large/0024cZx9ly8guadz67tijj60rs0fg0xv02.jpg',
//            'ci-process' => 'sensitive-content-recognition',
//        ));
//
//        Common::waitSync();
//
//        // 查看图片审核结果
//        $jobId = $result['JobId'];
//        $this->cosClient->getDetectImageResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        // 批量审核图片
//        $this->cosClient->detectImages(array(
//            'Bucket' => $this->bucket,
//            'Inputs' => array(
//                array(
//                    'Object' => 'test01.png',
//                ),
//                array(
//                    'Url' => 'https://wx4.sinaimg.cn/large/0024cZx9ly8guadz67tijj60rs0fg0xv02.jpg',
//                ),
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads',
//            )
//        ));
//        $this->assertTrue(True);
//    } catch (ServiceResponseException $e) {
//        $this->assertFalse(True);
//    }
//}
//
///*
// * 音频审核
// */
//public function testDetectAudio()
//{
//    try {
//        // 桶文件审核
//        $result = $this->cosClient->detectAudio(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Object' => 'sound01.mp3',
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads',
//            ),
//        ));
//
//        Common::waitSync();
//
//        // 查看音频审核结果
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectAudioResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        // 音频url审核
//        $result = $this->cosClient->detectAudio(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Url' => 'http://mpge.5nd.com/2019/2019-5-17/91703/2.mp3',
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads',
//            ),
//        ));
//
//        Common::waitSync();
//
//        // 查看音频审核结果
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectAudioResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//        $this->assertTrue(True);
//    } catch (ServiceResponseException $e) {
//        $this->assertFalse(True);
//    }
//}
//
///*
// * 视频审核
// */
//public function testDetectVideo()
//{
//    try {
//        // 桶文件审核
//        $result = $this->cosClient->detectVideo(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Object' => 'video01.mp4', // 存储桶文件
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads',
//                'Snapshot' => array(
//                    'Count' => '3',
//                ),
//            ),
//        ));
//
//        Common::waitSync();
//
//        // 查看视频审核结果
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectVideoResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        // 视频url审核
//        $result = $this->cosClient->detectVideo(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Url' => 'https://vd2.bdstatic.com/mda-mi699c6pfpap5i0h/fhd/cae_h264_nowatermark/1630996539537195871/mda-mi699c6pfpap5i0h.mp4',
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads',
//                'Snapshot' => array(
//                    'Count' => '3',
//                ),
//            ),
//        ));
//
//        Common::waitSync();
//
//        // 查看视频审核结果
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectVideoResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        $this->assertTrue(True);
//    } catch (ServiceResponseException $e) {
//        $this->assertFalse(True);
//    }
//}
//
///*
// * 文档审核
// */
//public function testDetectDocument()
//{
//    try {
//        // 桶文件审核
//        $result = $this->cosClient->detectDocument(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Object' => 'test01.docx',
//                'Type' => 'docx',
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads',
//            ),
//        ));
//
//        Common::waitSync();
//
//        // 查看文档审核结果
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectDocumentResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        // 文档url审核
//        $result = $this->cosClient->detectDocument(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Url' => 'http://e.sinajs.cn/tui/docs/guiding.pdf',
//                'Type' => 'pdf',
//            ),
//            'Conf' => array(
//                'DetectType' => 'Porn,Terrorism,Politics,Ads',
//            ),
//        ));
//
//        Common::waitSync();
//
//        // 查看文档审核结果
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectDocumentResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        $this->assertTrue(True);
//    } catch (ServiceResponseException $e) {
//        $this->assertFalse(True);
//    }
//}
//
///*
// * 云查毒
// */
//public function testDetectVirus()
//{
//    try {
//        // 桶文件审核
//        $result = $this->cosClient->detectVirus(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Object' => 'test01.docx'
//            ),
//            'Conf' => array(
//                'DetectType' => 'Virus',
//            ),
//        ));
//
//        Common::waitSync();
//
//        // 查看云查毒结果
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectVirusResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        // url查毒
//        $result = $this->cosClient->detectVirus(array(
//            'Bucket' => $this->bucket,
//            'Input' => array(
//                'Url' => 'http://e.sinajs.cn/tui/docs/guiding.pdf',
//            ),
//            'Conf' => array(
//                'DetectType' => 'Virus',
//            ),
//        ));
//
//        Common::waitSync();
//
//        // 查看云查毒结果
//        $jobId = $result['JobsDetail']['JobId'];
//        $this->cosClient->getDetectVirusResult(array(
//            'Bucket' => $this->bucket,
//            'Key' => $jobId,
//        ));
//
//        $this->assertTrue(True);
//    } catch (ServiceResponseException $e) {
//        $this->assertFalse(True);
//    }
//}
//}
