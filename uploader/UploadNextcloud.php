<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */


namespace uploader;

use Exception;
use GuzzleHttp\Client as GuzzleClient;
use Sabre\DAV\Client as DAVClient;

class UploadNextcloud extends Upload{
    public $baseUri;
    public $username;
    public $password;
    public $domain;
    //代理地址(格式：http://127.0.0.1:1087)
    public $proxy;
    public $directory;
    public $DAVPath;
    public $DAVSetting;
    //上传目标服务器名称
    public $uploadServer;
    
    public static $config;
    //arguments from php client, the image absolute path
    public $argv;
    
    /**
     * Upload constructor.
     *
     * @param $params
     */
    public function __construct($params)
    {
        $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
        
        if(!isset($ServerConfig['directory'])){
            //如果没有设置，使用默认的按年/月/日方式使用目录
            $this->directory = date('Y/m/d');
        }else{
            //设置了，则按设置的目录走
            $this->directory = trim($ServerConfig['directory'], '/');
        }
        
        $this->username = $ServerConfig['username'];
        $this->password = $ServerConfig['password'];
        $this->baseUri = $ServerConfig['baseUri'];
        $this->proxy = $ServerConfig['proxy'];
        $this->domain = $this->baseUri;
        $this->DAVPath = '/remote.php/webdav/';
        
        $this->DAVSetting = [
            'baseUri' => $this->baseUri . $this->DAVPath,
            'userName' => $this->username,
            'password' => $this->password,
        ];
        
        if($this->proxy){
            $this->DAVSetting['proxy'] = $ServerConfig['proxy'] ?? '';
        }
        $this->uploadServer = ucfirst($params['uploadServer']);
        
        $this->argv = $params['argv'];
        static::$config = $params['config'];
    }
    
    /**
     * 从服务器中获取已经存在的路径
     * 列出文件夹中的文件: https://docs.nextcloud.com/server/stable/developer_manual/client_apis/WebDAV/basic.html#listing-folders-rfc4918
     * @param int $depth
     *
     * @return array
     */
    public function getFoldersFromServer($depth=5){
        try {
            //从服务器获取一级列表(5层)
            $client = new DAVClient($this->DAVSetting);
            $props = $client->propFind('', [
                '{DAV:}getlastmodified'
            ], $depth);
            //获取一级列表的键(因为键是路径，值是文件夹属性，在这里用不着文件夹属性)
            $filesFromServer = array_keys($props);
            
            //过滤出文件夹(最后有斜杠的就是文件夹)
            $foldersFromServer = array_filter($filesFromServer, function ($item){
                if($item[-1] == '/'){
                    return true;
                }
            });
        } catch (Exception $e) {
            $foldersFromServer = [];
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $foldersFromServer;
    }
    
    /**
     * 获取需要创建的文件夹
     * @param $folder
     *
     * @return array
     */
    public function foldersToCreate($folder){
        try {
            //把要新建的文件夹拆分成多个要创建的路径，因为接口不支持递归创建，比如“/2019/03/31”，要拆分成：
            /**
             * /2019
             * /2019/03
             * /2019/03/31
             */
            $folders = explode('/', $folder);
            $tmp = '';
            $foldersArr = [];
            foreach ($folders as $val){
                $tmp .= '/' . $val;
                $foldersArr[] = $tmp;
            }
            
            //从服务器获取已存在的文件夹(默认5级)，比如有个文件夹深度为6层：/a/b/c/d/e/f/，它会返回
            /*
            /a/
            /a/b/
            /a/b/c/
            /a/b/c/d/
            /a/b/c/d/e/
             */
            // f那一层已经超出5层，则不会返回，越多层就越慢，所以这个理论上5层都略多
            $foldersFromServer = $this->getFoldersFromServer();
            
            /*
             * $foldersArr
             * /2019
             * /2019/03
             * /2019/03/31
             */
            //这里的目的就是找出$foldersArr中不存在于服务器的目录的其中一个，比如是：/2019/03，
            //那么我们要创建的就是/2019/03和/2019/03/31了，但在这里只要找出/2019/03就可以了，
            $pathNeedToCreate = '';
            $DAVPath = rtrim($this->DAVPath, '/');
            foreach($foldersArr as $key=>$path){
                //$foldersFromServer为来自服务器的一级目录列表
                // 可能的值：/remote.php/webdav/2019/03/31/
                // $DAVPath就是：/remote.php/webdav
                // $path就是：/2019/03/31
                // $DAVPath.$path.'/'就是：/remote.php/webdav/2019/03/31/（这样刚好跟服务器的对的上，表示服务器上已经有这个文件夹）
                //在数组中，说明这个文件夹在服务器已存在(存在的就不用创建了)
                //因为我们是从短到长搜索的，一旦发现有不存在于服务器中的路径，则它下边的不用看肯定不存在，因为它自己都不存在
                if(!in_array($DAVPath.$path.'/', $foldersFromServer)){
                    $pathNeedToCreate = $path;
                    break;
                }
            }
            
            if($pathNeedToCreate==''){
                return [];
            }
            
            //过滤$foldersArr数组，只留下长度大于等于要创建的那个路径的路径，因为比它短的肯定已经创建了
            $pathNeedToCreateLen = mb_strlen($pathNeedToCreate);
            $foldersNeedToCreate = array_filter($foldersArr, function ($item) use($pathNeedToCreateLen){
                if(mb_strlen($item) >= $pathNeedToCreateLen){
                    return true;
                }
            });
            //array_filter处理后有些键被删除了，用array_values让它重新从0开始
            $foldersNeedToCreate = array_values($foldersNeedToCreate);
        } catch (Exception $e) {
            $foldersNeedToCreate = [];
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $foldersNeedToCreate;
    }
    
    /**
     * 递归创建文件夹
     * @param $folder
     *
     * @return array|bool
     * @throws \Sabre\HTTP\ClientHttpException
     */
    public function createFolder($folder){
        static $i = 0;
        static $res = [];
        static $foldersTocreate;
        static $foldersTocreateCount;
        if($i == 0){
            $foldersTocreate = $this->foldersTocreate($folder);
            $foldersTocreateCount = count($foldersTocreate);
            if($foldersTocreateCount == 0){
                return true;
            }
        }
        
        //发起创建文件夹请求
        $client = new DAVClient($this->DAVSetting);
        // 已经测试，如果父文件夹不存在，会报：409：Parent node does not exist，也就是无法递归创建
        // 所以我只能手写递归了，通过多次访问接口创建了。
        $ret = $client->request('MKCOL', ltrim($foldersTocreate[$i], '/'));
        
        //当返回状态码为201时，表示创建文件夹成功，继续递归创建下一层
        if(isset($ret['statusCode']) && $ret['statusCode']==201){
            //使用死循环是因为创建的请求是异步返回的，但我又不能让函数退出执行，因为还要递归创建文件夹呢，所以只有死循环一直等待
            $j = 0;
            while(1){
                // j和i完全不一样，i是递归的增量，每递归一次取$foldersTocreate数组的下一个元素(即待创建文件夹)
                // 而j则纯粹是while循环的计数，因为如果一直不返回，我也不能一直死循环下去，因为每次循环等待0.5秒，所以j>60就表示如果30秒还不返回，那就直接返回$res，其实是创建失败了
                if($j>60){
                    return $res;
                }
                if($ret){
                    $res[] = $ret;
                    
                    $i++;
                    if($i < $foldersTocreateCount){
                        // file_put_contents('/Users/bruce/Downloads/nextcloud.txt', $i."\n", FILE_APPEND);
                        $this->createFolder(ltrim($foldersTocreate[$i], '/'));
                        break;
                    }
                }
                $j++;
                //注意 usleep的单位是微秒
                usleep(500000);
            }
        }
        return $res;
    }
    
    /**
     * getShareLinkByCurl
     * @param        $path
     * @param string $action
     *
     * @return mixed|string
     */
    public function getShareLinkByCurl($path, $action='set'){
        try {
            //获取图片分享链接
            //========================= curl client start (works fine) =========================
            // curl -u 'xiediebruce@hotmail.com':'xiayu357562*#AMD' -X GET 'https://nextcloud-fi.webo.hosting/ocs/v1.php/apps/files_sharing/api/v1/shares?path=/2019/03/31/b6808e0f56c41390e5e0cf8cc8694155.jpeg&shareType=3&permissions=1' -H "OCS-APIRequest: true"
            //========================= curl client end (works fine) =========================
            
            //========================== php curl start (works fine) ==========================
            // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
            // $path = '2019/04/23/8945eebf93d70840f3924988e3da1272.jpg';
            // $path = '2019/03/31/b6808e0f56c41390e5e0cf8cc8694155.jpeg';
            $data = [
                'path' => $path,
                'shareType' => 3,
                'permissions' => 1,
            ];
            $queryString = http_build_query($data);
            $ocsShareApi = $this->baseUri.'/ocs/v1.php/apps/files_sharing/api/v1/shares';
            // echo $ocsShareApi;exit;
            $headers = [
                'Ocs-Apirequest: true'
            ];
            
            $ch = curl_init();
            $action=='get' && $ocsShareApi = $ocsShareApi .'?' .$queryString;
            curl_setopt($ch, CURLOPT_URL, $ocsShareApi);
            if($this->proxy){
                curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
            }
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            //同一接口相同参数，用post就是设置为分享状态，用get就是获取分享的链接，但必须先设置为分享状态才能获取
            if($action == 'set'){
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $queryString);
            }
            //get是默认，可以不设置
            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_USERPWD, $this->username . ':' . $this->password);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close ($ch);
            //=============================== php curl end ===============================
            //把返回的xml解析为对象
            $obj = simplexml_load_string($result);
            
            $shareLink = '';
            if(isset($obj->meta->status) && $obj->meta->status == 'ok'){
                // file_put_contents('/Users/bruce/Downloads/abcdefg.txt', $result."========================\n\n", FILE_APPEND);
                if(isset($obj->data->url) && $obj->data->url){
                    $shareLinkArr = (array)$obj->data->url;
                    $shareLink = $shareLinkArr[0];
                }
            }
        } catch (Exception $e){
            $shareLink = '';
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $shareLink;
    }
    
    /**
     * 设置和获取分享链接，其实主要是设置，因为设置的时候就可以返回分享链接，只不过图片要加个"/preview"才能真正的用于markdown中，如果非图片，则可以加个“/download”直接下载。
     *
     * 文档: https://docs.nextcloud.com/server/18/developer_manual/client_apis/OCS/ocs-share-api.html#create-a-new-share
     * @param $path
     *
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getShareLink($path){
        try {
            $config = [
                'base_uri' => $this->baseUri,
            ];
            if($this->proxy){
                $config['proxy'] = $this->proxy;
            }
            $client = new GuzzleClient($config);
            
            $uri = '/ocs/v2.php/apps/files_sharing/api/v1/shares';
            $response = $client->request('POST', $uri, [
                'auth'=>[$this->username, $this->password],
                'headers' => [
                    'OCS-APIRequest' => 'true',
                ],
                'form_params' => [
                    //$path即要分享的文件(或文件夹)路径，可以有斜杠"/"开头，也可以没有
                    'path' => $path,
                    'shareType' => 3,
                    'permissions' => 1,
                ]
            ]);
            $string = $response->getBody()->getContents();
            if($response->getReasonPhrase() != 'OK'){
                throw new Exception($string);
            }
    
            //把返回的xml解析为对象
            $obj = simplexml_load_string($string);
            if(!isset($obj->data->url)){
                throw new Exception($string);
            }
            $shareLinkArr = (array)$obj->data->url;
            $shareLink = $shareLinkArr[0];
        } catch (Exception $e) {
            $shareLink = '';
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $shareLink;
    }
    
    /**
     * Upload files to NextCloud
     * 文档: https://docs.nextcloud.com/server/stable/developer_manual/client_apis/WebDAV/basic.html#uploading-files
     * @param $key
     * @param $uploadFilePath
     *
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function upload($key, $uploadFilePath){
        try {
            if($this->directory){
                $key = $this->directory . '/' . $key;
                //返回的$createdFolderRes变量在这里暂时不判断
                $createdFolderRes = $this->createFolder($this->directory);
            }
            //-------------------------- 上传文件 开始 -----------------------------
            $client = new DAVClient($this->DAVSetting);
            
            // Upload a file
            //注意$key带路径时，开头不能有"/"，如，只能是"2020/05/06/xxx.jpg"而不能是"/2020/05/06/xxx.jpg"
            $response = $client->request('PUT', $key, file_get_contents($uploadFilePath));
            //-------------------------- 上传文件 结束 -----------------------------
            
            //返回状态码为201表示上传文件成功(其实HTTP状态码201是表示资源在服务器创建成功)
            if(!is_array($response) || !isset($response['statusCode']) || $response['statusCode'] != 201){
                throw new Exception(var_export($response, true));
            }
            
            // 获取分享链接
            // https://nextcloud.xiebruce.top/s/etJdniMaE9cpWJN/preview
            $shareLink = $this->getShareLink($key);
            // $shareLink = $this->getShareLinkByCurl($key);
            if(strpos($this->getMimeType($uploadFilePath), 'image')!==false){
                $link = $shareLink . '/preview';
            }else{
                $link = $shareLink . '/download';
            }
            $key = str_replace($this->domain . '/', '', $link);
            
            $data = [
                'code' => 0,
                'msg' => 'success',
                'key' => $key,
                'domain' => $this->domain,
            ];
        } catch (Exception $e) {
            //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
            $data = [
                'code' => -1,
                'msg' => $e->getMessage(),
            ];
            $this->writeLog(date('Y-m-d H:i:s').'(' . $this->uploadServer . ') => '.$e->getMessage() . "\n\n", 'error_log');
        }
        return $data;
    }
}