<?php
//vendor
require_once __DIR__.'/vendor/autoload.php';
//auth
require_once __DIR__.'/src/BaiduBce/Auth/SignerInterface.php';
require_once __DIR__.'/src/BaiduBce/Auth/SignOptions.php';
require_once __DIR__.'/src/BaiduBce/Auth/BceV1Signer.php';
//Exception
require_once __DIR__.'/src/BaiduBce/Exception/BceBaseException.php';
require_once __DIR__.'/src/BaiduBce/Exception/BceClientException.php';
require_once __DIR__.'/src/BaiduBce/Exception/BceServiceException.php';
//Log
require_once __DIR__.'/src/BaiduBce/Log/LogFactoryInterface.php';
require_once __DIR__.'/src/BaiduBce/Log/LogFactory.php';
require_once __DIR__.'/src/BaiduBce/Log/MonoLogFactory.php';
require_once __DIR__.'/src/BaiduBce/Log/NullLogFactory.php';
//Util
require_once __DIR__.'/src/BaiduBce/Util/DateUtils.php';
//require_once __DIR__.'/src/BaiduBce/Util/GenerateMimeTypes.php';
require_once __DIR__.'/src/BaiduBce/Util/HashUtils.php';
require_once __DIR__.'/src/BaiduBce/Util/HttpUtils.php';
require_once __DIR__.'/src/BaiduBce/Util/mime.types.php';
require_once __DIR__.'/src/BaiduBce/Util/MimeTypes.php';
require_once __DIR__.'/src/BaiduBce/Util/StringUtils.php';
//PWD
require_once __DIR__.'/src/BaiduBce/Bce.php';
require_once __DIR__.'/src/BaiduBce/BceBaseClient.php';
require_once __DIR__.'/src/BaiduBce/BceClientConfigOptions.php';
require_once __DIR__.'/src/BaiduBce/BceHttpResponse.php';
//Http
require_once __DIR__.'/src/BaiduBce/Http/BceHttpClient.php';
require_once __DIR__.'/src/BaiduBce/Http/GuzzleLogAdapter.php';
require_once __DIR__.'/src/BaiduBce/Http/HttpContentTypes.php';
require_once __DIR__.'/src/BaiduBce/Http/HttpHeaders.php';
require_once __DIR__.'/src/BaiduBce/Http/HttpMethod.php';
//Services/bos
require_once __DIR__.'/src/BaiduBce/Services/Bos/BosClient.php';
require_once __DIR__.'/src/BaiduBce/Services/Bos/BosOptions.php';
require_once __DIR__.'/src/BaiduBce/Services/Bos/CannedAcl.php';
//Services/sts
require_once __DIR__.'/src/BaiduBce/Services/Sts/StsClient.php';