<?php

namespace Qcloud\Cos;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Deserializer;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7;

/**
 * @method object AbortMultipartUpload(array $args) 舍弃一个分块上传且删除已上传的分片块
 * @method object CreateBucket(array $args) 创建存储桶（Bucket）
 * @method object CompleteMultipartUpload(array $args) 完成整个分块上传
 * @method object CreateMultipartUpload(array $args) 初始化分块上传
 * @method object CopyObject(array $args) 复制对象
 * @method object DeleteBucket(array $args) 删除存储桶 (Bucket)
 * @method object DeleteBucketCors(array $args) 删除跨域访问配置信息
 * @method object DeleteBucketTagging(array $args) 删除存储桶标签信息
 * @method object DeleteBucketInventory(array $args) 删除存储桶标清单任务
 * @method object DeleteObject(array $args) 删除 COS 上单个对象
 * @method object DeleteObjects(array $args) 批量删除 COS 对象
 * @method object DeleteBucketWebsite(array $args) 删除存储桶（Bucket）的website
 * @method object DeleteBucketLifecycle(array $args) 删除存储桶（Bucket）的生命周期配置
 * @method object DeleteBucketReplication(array $args) 删除跨区域复制配置
 * @method object PutObjectTagging(array $args) 配置对象标签
 * @method object GetObjectTagging(array $args) 获取对象标签信息
 * @method object DeleteObjectTagging(array $args) 删除对象标签
 * @method object GetObject(array $args) 下载对象
 * @method object GetObjectAcl(array $args) 获取 COS 对象的访问权限信息（Access Control List, ACL）
 * @method object GetBucketAcl(array $args) 获取存储桶（Bucket）的访问权限信息（Access Control List, ACL）
 * @method object GetBucketCors(array $args) 查询存储桶（Bucket）跨域访问配置信息
 * @method object GetBucketDomain(array $args) 查询存储桶（Bucket）Domain配置信息
 * @method object GetBucketAccelerate(array $args) 查询存储桶（Bucket）Accelerate配置信息
 * @method object GetBucketWebsite(array $args) 查询存储桶（Bucket）Website配置信息
 * @method object GetBucketLifecycle(array $args) 查询存储桶（Bucket）的生命周期配置
 * @method object GetBucketVersioning(array $args) 获取存储桶（Bucket）版本控制信息
 * @method object GetBucketReplication(array $args) 获取存储桶（Bucket）跨区域复制配置信息
 * @method object GetBucketLocation(array $args) 获取存储桶（Bucket）所在的地域信息
 * @method object GetBucketNotification(array $args) 获取存储桶（Bucket）Notification信息
 * @method object GetBucketLogging(array $args) 获取存储桶（Bucket）日志信息
 * @method object GetBucketInventory(array $args) 获取存储桶（Bucket）清单信息
 * @method object GetBucketTagging(array $args) 获取存储桶（Bucket）标签信息
 * @method object UploadPart(array $args) 分块上传
 * @method object PutObject(array $args) 上传对象
 * @method object AppendObject(array $args) 追加对象
 * @method object PutObjectAcl(array $args) 设置 COS 对象的访问权限信息（Access Control List, ACL）
 * @method object PutBucketAcl(array $args) 设置存储桶（Bucket）的访问权限（Access Control List, ACL)
 * @method object PutBucketCors(array $args) 设置存储桶（Bucket）的跨域配置信息
 * @method object PutBucketDomain(array $args) 设置存储桶（Bucket）的Domain信息
 * @method object PutBucketLifecycle(array $args) 设置存储桶（Bucket）生命周期配置
 * @method object PutBucketVersioning(array $args) 存储桶（Bucket）版本控制
 * @method object PutBucketAccelerate(array $args) 配置存储桶（Bucket）Accelerate
 * @method object PutBucketWebsite(array $args) 配置存储桶（Bucket）website
 * @method object PutBucketReplication(array $args) 配置存储桶（Bucket）跨区域复制
 * @method object PutBucketNotification(array $args) 设置存储桶（Bucket）的回调设置
 * @method object PutBucketTagging(array $args) 配置存储桶（Bucket）标签
 * @method object PutBucketLogging(array $args) 开启存储桶（Bucket）日志服务
 * @method object PutBucketInventory(array $args) 配置存储桶（Bucket）清单
 * @method object RestoreObject(array $args) 回热归档对象
 * @method object ListParts(array $args) 查询存储桶（Bucket）中正在进行中的分块上传对象
 * @method object ListObjects(array $args) 查询存储桶（Bucket）下的部分或者全部对象
 * @method object ListBuckets 获取所属账户的所有存储空间列表
 * @method object ListObjectVersions(array $args) 获取多版本对象
 * @method object ListMultipartUploads(array $args) 获取已上传分块列表
 * @method object ListBucketInventoryConfigurations(array $args) 获取清单列表
 * @method object HeadObject(array $args) 获取对象的meta信息
 * @method object HeadBucket(array $args) 存储桶（Bucket）是否存在
 * @method object UploadPartCopy(array $args) 分块copy
 * @method object SelectObjectContent(array $args) 检索对象内容
 * @method object PutBucketIntelligentTiering(array $args) 存储桶（Bucket）开启智能分层
 * @method object GetBucketIntelligentTiering(array $args) 查询存储桶（Bucket）智能分层
 * @method object ImageInfo(array $args) 万象-获取图片基本信息
 * @method object ImageExif(array $args) 万象-获取图片EXIF信息
 * @method object ImageAve(array $args) 万象-获取图片主色调信息
 * @method object ImageProcess(array $args) 万象-云上数据处理
 * @method object Qrcode(array $args) 万象-二维码下载时识别
 * @method object QrcodeGenerate(array $args) 万象-二维码生成
 * @method object DetectLabel(array $args) 万象-图片标签
 * @method object PutBucketImageStyle(array $args) 万象-增加样式
 * @method object GetBucketImageStyle(array $args) 万象-查询样式
 * @method object DeleteBucketImageStyle(array $args) 万象-删除样式
 * @method object PutBucketGuetzli(array $args) 万象-开通Guetzli压缩
 * @method object GetBucketGuetzli(array $args) 万象-查询Guetzli状态
 * @method object DeleteBucketGuetzli(array $args) 万象-关闭Guetzli压缩
 * @method object GetObjectSensitiveContentRecognition(array $args) 图片审核
 * @method object DetectText(array $args) 文本审核
 * @method object GetSnapshot(array $args) 媒体截图
 * @method object PutBucketReferer(array $args) 添加防盗链
 * @method object GetBucketReferer(array $args) 获取防盗链规则
 * @method object GetMediaInfo(array $args) 获取媒体信息
 * @method object CreateMediaTranscodeJobs(array $args) 媒体转码
 * @method object CreateMediaJobs(array $args) 媒体任务
 * @method object DescribeMediaJob(array $args) 查询指定的媒体任务
 * @method object DescribeMediaJobs(array $args) 拉取拉取符合条件的媒体任务
 * @method object CreateMediaSnapshotJobs(array $args) 媒体截图
 * @method object CreateMediaConcatJobs(array $args) 媒体拼接
 * @method object DetectAudio(array $args) 音频审核
 * @method object GetDetectAudioResult(array $args) 主动获取音频审核结果
 * @method object GetDetectTextResult(array $args) 主动获取文本文件审核结果
 * @method object DetectVideo(array $args) 视频审核
 * @method object GetDetectVideoResult(array $args) 主动获取视频审核结果
 * @method object DetectDocument(array $args) 文档审核
 * @method object GetDetectDocumentResult(array $args) 主动获取文档审核结果
 * @method object CreateDocProcessJobs(array $args) 提交文档转码任务
 * @method object DescribeDocProcessQueues(array $args) 查询文档转码队列
 * @method object DescribeDocProcessJob(array $args) 查询文档转码任务
 * @method object GetDescribeDocProcessJobs(array $args) 拉取符合条件的文档转码任务
 * @method object DetectImage(array $args) 图片审核
 * @method object DetectImages(array $args) 图片审核-批量
 * @method object DetectVirus(array $args) 云查毒
 * @method object GetDetectVirusResult(array $args) 查询病毒检测任务结果
 * @method object GetDetectImageResult(array $args) 主动获取图片审核结果
 * @method object CreateMediaVoiceSeparateJobs(array $args) 提交人声分离任务
 * @method object DescribeMediaVoiceSeparateJob(array $args) 查询指定的人声分离任务
 * @method object DetectWebpage(array $args) 提交网页审核任务
 * @method object GetDetectWebpageResult(array $args) 查询网页审核任务结果
 * @method object DescribeMediaBuckets(array $args) 查询媒体处理开通状态
 * @method object GetPrivateM3U8(array $args) 获取私有 M3U8 ts 资源的下载授权
 * @method object DescribeMediaQueues(array $args) 搜索媒体处理队列
 * @method object UpdateMediaQueue(array $args) 更新媒体处理队列
 * @method object CreateMediaSmartCoverJobs(array $args) 提交智能封面任务
 * @method object CreateMediaVideoProcessJobs(array $args) 提交视频增强任务
 * @method object CreateMediaVideoMontageJobs(array $args) 提交精彩集锦任务
 * @method object CreateMediaAnimationJobs(array $args) 提交动图任务
 * @see \Qcloud\Cos\Service::getService()
 */
class Client extends GuzzleClient {
    const VERSION = '2.5.5';

    public $httpClient;
    
    private $api;
    private $desc;
    private $action;
    private $operation;
    private $cosConfig;
    private $signature;
    private $rawCosConfig;

    public function __construct(array $cosConfig) {
        $this->rawCosConfig = $cosConfig;
        $this->cosConfig['schema'] = isset($cosConfig['schema']) ? $cosConfig['schema'] : 'http';
        $this->cosConfig['region'] = isset($cosConfig['region']) ? region_map($cosConfig['region']) : null;
        $this->cosConfig['appId'] = isset($cosConfig['credentials']['appId']) ? $cosConfig['credentials']['appId'] : null;
        $this->cosConfig['secretId'] = isset($cosConfig['credentials']['secretId']) ? trim($cosConfig['credentials']['secretId']) : '';
        $this->cosConfig['secretKey'] = isset($cosConfig['credentials']['secretKey']) ? trim($cosConfig['credentials']['secretKey']) : '';
        $this->cosConfig['anonymous'] = isset($cosConfig['credentials']['anonymous']) ? $cosConfig['credentials']['anonymous'] : false;
        $this->cosConfig['token'] = isset($cosConfig['credentials']['token']) ? trim($cosConfig['credentials']['token']) : null;
        $this->cosConfig['timeout'] = isset($cosConfig['timeout']) ? $cosConfig['timeout'] : 3600;
        $this->cosConfig['connect_timeout'] = isset($cosConfig['connect_timeout']) ? $cosConfig['connect_timeout'] : 3600;
        $this->cosConfig['ip'] = isset($cosConfig['ip']) ? $cosConfig['ip'] : null;
        $this->cosConfig['port'] = isset($cosConfig['port']) ? $cosConfig['port'] : null;
        $this->cosConfig['endpoint'] = isset($cosConfig['endpoint']) ? $cosConfig['endpoint'] : null;
        $this->cosConfig['domain'] = isset($cosConfig['domain']) ? $cosConfig['domain'] : null;
        $this->cosConfig['proxy'] = isset($cosConfig['proxy']) ? $cosConfig['proxy'] : null;
        $this->cosConfig['retry'] = isset($cosConfig['retry']) ? $cosConfig['retry'] : 1;
        $this->cosConfig['userAgent'] = isset($cosConfig['userAgent']) ? $cosConfig['userAgent'] : 'cos-php-sdk-v5.'. Client::VERSION;
        $this->cosConfig['pathStyle'] = isset($cosConfig['pathStyle']) ? $cosConfig['pathStyle'] : false;
        $this->cosConfig['signHost'] = isset($cosConfig['signHost']) ? $cosConfig['signHost'] : true;
        $this->cosConfig['allow_redirects'] = isset($cosConfig['allow_redirects']) ? $cosConfig['allow_redirects'] : false;
        $this->cosConfig['allow_accelerate'] = isset($cosConfig['allow_accelerate']) ? $cosConfig['allow_accelerate'] : false;

        // check config
        $this->inputCheck();

        $service = Service::getService();
        $handler = HandlerStack::create();
        $handler->push(Middleware::retry($this->retryDecide(), $this->retryDelay()));
		$handler->push(Middleware::mapRequest(function (RequestInterface $request) {
			return $request->withHeader('User-Agent', $this->cosConfig['userAgent']);
        }));
        if ($this->cosConfig['anonymous'] != true) {
            $handler->push($this::handleSignature($this->cosConfig['secretId'], $this->cosConfig['secretKey'], $this->cosConfig));
        }
        if ($this->cosConfig['token'] != null) {
            $handler->push(Middleware::mapRequest(function (RequestInterface $request) {
                return $request->withHeader('x-cos-security-token', $this->cosConfig['token']);
            }));
        }
        $handler->push($this::handleErrors());
        $this->signature = new Signature($this->cosConfig['secretId'], $this->cosConfig['secretKey'], $this->cosConfig, $this->cosConfig['token']);
        $area = $this->cosConfig['allow_accelerate'] ? 'accelerate' : $this->cosConfig['region'];
        $this->httpClient = new HttpClient([
            'base_uri' => "{$this->cosConfig['schema']}://cos.{$area}.myqcloud.com/",
            'timeout' => $this->cosConfig['timeout'],
            'handler' => $handler,
            'proxy' => $this->cosConfig['proxy'],
            'allow_redirects' => $this->cosConfig['allow_redirects']
        ]);
        $this->desc = new Description($service);
        $this->api = (array) $this->desc->getOperations();
        parent::__construct($this->httpClient, $this->desc, [$this,
        'commandToRequestTransformer'], [$this, 'responseToResultTransformer'],
        null);
    }

    public function inputCheck() {
        $message = null;
        //检查Region
        if (empty($this->cosConfig['region'])   &&
            empty($this->cosConfig['domain'])   &&
            empty($this->cosConfig['endpoint']) &&
            empty($this->cosConfig['ip'])) {
            $message = 'Region is empty';
        }
        //检查Secret
        if (empty($this->cosConfig['secretId']) || empty($this->cosConfig['secretKey'])) {
            $message = 'Secret is empty';
        }
        if ($message !== null) {
            $e = new Exception\CosException($message);
            $e->setExceptionCode('Invalid Argument');
            throw $e;
        }
    }


    public function retryDecide() {
      return function (
        $retries,
        RequestInterface $request,
        ResponseInterface $response = null,
        \Exception $exception = null
      ) {
        if ($retries >= $this->cosConfig['retry']) {
          return false;
        }
        if ($response != null && $response->getStatusCode() >= 400 ) {
            return true;
        }
        if ($exception instanceof Exception\ServiceResponseException) {
            if ($exception->getStatusCode() >= 400) {
                return true;
            }
        }
  
        if ($exception instanceof ConnectException) {
          return true;
        }
  
        return false;
      };
    }

    public function retryDelay() {
        return function ($numberOfRetries) {
            return 1000 * $numberOfRetries;
        };
    }

    public function commandToRequestTransformer(CommandInterface $command)
    {
        $this->action = $command->GetName();
        $this->operation = $this->api[$this->action];
        $transformer = new CommandToRequestTransformer($this->cosConfig, $this->operation); 
        $seri = new Serializer($this->desc);
        $request = $seri($command);
        $request = $transformer->bucketStyleTransformer($command, $request);
        $request = $transformer->uploadBodyTransformer($command, $request);
        $request = $transformer->metadataTransformer($command, $request);
        $request = $transformer->queryStringTransformer($command, $request);
        $request = $transformer->headerTransformer($command, $request);
        $request = $transformer->md5Transformer($command, $request);
        $request = $transformer->specialParamTransformer($command, $request);
        $request = $transformer->ciParamTransformer($command, $request);
        $request = $transformer->cosDomain2CiTransformer($command, $request);
        return $request;
    }

    public function responseToResultTransformer(ResponseInterface $response, RequestInterface $request, CommandInterface $command)
    {
        $transformer = new ResultTransformer($this->cosConfig, $this->operation); 
        $transformer->writeDataToLocal($command, $request, $response);
        $deseri = new Deserializer($this->desc, true);
        $result = $deseri($response, $request, $command);

        $result = $transformer->metaDataTransformer($command, $response, $result);
        $result = $transformer->extraHeadersTransformer($command, $request, $result);
        $result = $transformer->selectContentTransformer($command, $result);
        $result = $transformer->ciContentInfoTransformer($command, $result);
        return $result;
    }
    
    public function __destruct() {
    }

    public function __call($method, array $args) {
        try {
            $rt = parent::__call(ucfirst($method), $args);
            return $rt;
        } catch (\Exception $e) {
            $previous = $e->getPrevious();
            if ($previous !== null) {
                throw $previous;
            } else {
                throw $e;
            }
        }
    }

    public function getApi() {
        return $this->api;
    }

    private function getCosConfig() {
        return $this->cosConfig;
    }

    private function createPresignedUrl(RequestInterface $request, $expires) {
        return $this->signature->createPresignedUrl($request, $expires);
    }

    public function getPresignedUrl($method, $args, $expires = "+30 minutes") {
        $command = $this->getCommand($method, $args);
        $request = $this->commandToRequestTransformer($command);
        return $this->createPresignedUrl($request, $expires);
    }


    public function getObjectUrl($bucket, $key, $expires = "+30 minutes", array $args = array()) {
        $command = $this->getCommand('GetObject', $args + array('Bucket' => $bucket, 'Key' => $key));
        $request = $this->commandToRequestTransformer($command);
        return $this->createPresignedUrl($request, $expires)->__toString();
    }

    public function getObjectUrlWithoutSign($bucket, $key, array $args = array()) {
        $command = $this->getCommand('GetObject', $args + array('Bucket' => $bucket, 'Key' => $key));
        $request = $this->commandToRequestTransformer($command);
        return $request->getUri()-> __toString();
    }

    public function upload($bucket, $key, $body, $options = array()) {
        $body = Psr7\Utils::streamFor($body);
        $options['Retry'] = $this->cosConfig['retry'];
        $options['PartSize'] = isset($options['PartSize']) ? $options['PartSize'] : MultipartUpload::DEFAULT_PART_SIZE;
        if ($body->getSize() < $options['PartSize']) {
            $rt = $this->putObject(array(
                    'Bucket' => $bucket,
                    'Key'    => $key,
                    'Body'   => $body,
                ) + $options);
        }
        else {
            $multipartUpload = new MultipartUpload($this, $body, array(
                    'Bucket' => $bucket,
                    'Key' => $key,
                ) + $options);

            $rt = $multipartUpload->performUploading();
        }
        return $rt;
    }

    public function download($bucket, $key, $saveAs, $options = array()) {
        $options['PartSize'] = isset($options['PartSize']) ? $options['PartSize'] : RangeDownload::DEFAULT_PART_SIZE;
        $contentLength = 0;
        $versionId = isset($options['VersionId']) ? $options['VersionId'] : '';

        $rt = $this->headObject(array(
                'Bucket'=>$bucket,
                'Key'=>$key,
                'VersionId'=>$versionId,
            )
        );
        $contentLength = $rt['ContentLength'];
        $resumableJson = [
            'LastModified' => $rt['LastModified'],
            'ContentLength' => $rt['ContentLength'],
            'ETag' => $rt['ETag'],
            'Crc64ecma' => $rt['Crc64ecma']
        ];
        $options['ResumableJson'] = $resumableJson;

        if ($contentLength < $options['PartSize']) {
            $rt = $this->getObject(array(
                    'Bucket' => $bucket,
                    'Key'    => $key,
                    'SaveAs'   => $saveAs,
                ) + $options);
        } else {
            $rangeDownload = new RangeDownload($this, $contentLength, $saveAs, array(
                    'Bucket' => $bucket,
                    'Key' => $key,
                ) + $options);

            $rt = $rangeDownload->performDownloading();
        }
        return $rt;
    }

    public function resumeUpload($bucket, $key, $body, $uploadId, $options = array()) {
        $body = Psr7\Utils::streamFor($body);
        $options['PartSize'] = isset($options['PartSize']) ? $options['PartSize'] : MultipartUpload::DEFAULT_PART_SIZE;
        $multipartUpload = new MultipartUpload($this, $body, array(
                'Bucket' => $bucket,
                'Key' => $key,
                'UploadId' => $uploadId,
            ) + $options);

        $rt = $multipartUpload->resumeUploading();
        return $rt;
    }

    public function copy($bucket, $key, $copySource, $options = array()) {

        $options['PartSize'] = isset($options['PartSize']) ? $options['PartSize'] : Copy::DEFAULT_PART_SIZE;

        // set copysource client
        $sourceConfig = $this->rawCosConfig;
        $sourceConfig['region'] = $copySource['Region'];
        $cosSourceClient = new Client($sourceConfig);
        $copySource['VersionId'] = isset($copySource['VersionId']) ? $copySource['VersionId'] : '';

        $rt = $cosSourceClient->headObject(
            array('Bucket'=>$copySource['Bucket'],
                'Key'=>$copySource['Key'],
                'VersionId'=>$copySource['VersionId'],
            )
        );

        $contentLength = $rt['ContentLength'];
        // sample copy
        if ($contentLength < $options['PartSize']) {
            $rt = $this->copyObject(array(
                    'Bucket' => $bucket,
                    'Key'    => $key,
                    'CopySource'   => "{$copySource['Bucket']}.cos.{$copySource['Region']}.myqcloud.com/". urlencode("{$copySource['Key']}")."?versionId={$copySource['VersionId']}",
                ) + $options
            );
            return $rt;
        }
        // multi part copy
        $copySource['ContentLength'] = $contentLength;
        $copy = new Copy($this, $copySource, array(
                'Bucket' => $bucket,
                'Key'    => $key
            ) + $options
        );
        return $copy->copy();
    }

    public function doesBucketExist($bucket, array $options = array())
    {
        try {
            $this->HeadBucket(array(
                'Bucket' => $bucket));
            return true;
        } catch (\Exception $e){
            return false;
        }
    }

    public function doesObjectExist($bucket, $key, array $options = array())
    {
        try {
            $this->HeadObject(array(
                'Bucket' => $bucket,
                'Key' => $key));
            return true;
        } catch (\Exception $e){
            return false;
        }
    }
    
    public static function explodeKey($key) {
        // Remove a leading slash if one is found
        $split_key = explode('/', $key && $key[0] == '/' ? substr($key, 1) : $key);
        // Remove empty element
        $split_key = array_filter($split_key, function($var) {
            return !($var == '' || $var == null);
        });
        $final_key = implode("/", $split_key);
        if (substr($key, -1)  == '/') {
            $final_key = $final_key . '/';
        }
        return $final_key;
    }


    public static function handleSignature($secretId, $secretKey, $options) {
            return function (callable $handler) use ($secretId, $secretKey, $options) {
                    return new SignatureMiddleware($handler, $secretId, $secretKey, $options);
            };
    }

    public static function handleErrors() {
            return function (callable $handler) {
                    return new ExceptionMiddleware($handler);
            };
    }
}
