<?php

$mapping = [
	'Obs\Internal\Common\CheckoutStream' => __DIR__.'/Obs/Internal/Common/CheckoutStream.php',
	'Obs\Internal\Common\ITransform' => __DIR__.'/Obs/Internal/Common/ITransform.php',
	'Obs\Internal\Common\Model' => __DIR__.'/Obs/Internal/Common/Model.php',
	'Obs\Internal\Common\ObsTransform' => __DIR__.'/Obs/Internal/Common/ObsTransform.php',
	'Obs\Internal\Common\SchemaFormatter' => __DIR__.'/Obs/Internal/Common/SchemaFormatter.php',
	'Obs\Internal\Common\SdkCurlFactory' => __DIR__.'/Obs/Internal/Common/SdkCurlFactory.php',
	'Obs\Internal\Common\SdkStreamHandler' => __DIR__.'/Obs/Internal/Common/SdkStreamHandler.php',
	'Obs\Internal\Common\ToArrayInterface' => __DIR__.'/Obs/Internal/Common/ToArrayInterface.php',
	'Obs\Internal\Common\V2Transform' => __DIR__.'/Obs/Internal/Common/V2Transform.php',
	'Obs\Internal\GetResponseTrait' => __DIR__.'/Obs/Internal/GetResponseTrait.php',
	'Obs\Internal\Resource\Constants' => __DIR__.'/Obs/Internal/Resource/Constants.php',
	'Obs\Internal\Resource\OBSConstants' => __DIR__.'/Obs/Internal/Resource/OBSConstants.php',
	'Obs\Internal\Resource\OBSRequestResource' => __DIR__.'/Obs/Internal/Resource/OBSRequestResource.php',
	'Obs\Internal\Resource\V2Constants' => __DIR__.'/Obs/Internal/Resource/V2Constants.php',
	'Obs\Internal\Resource\V2RequestResource' => __DIR__.'/Obs/Internal/Resource/V2RequestResource.php',
	'Obs\Internal\SendRequestTrait' => __DIR__.'/Obs/Internal/SendRequestTrait.php',
	'Obs\Internal\Signature\AbstractSignature' => __DIR__.'/Obs/Internal/Signature/AbstractSignature.php',
	'Obs\Internal\Signature\DefaultSignature' => __DIR__.'/Obs/Internal/Signature/DefaultSignature.php',
	'Obs\Internal\Signature\SignatureInterface' => __DIR__.'/Obs/Internal/Signature/SignatureInterface.php',
	'Obs\Internal\Signature\V4Signature' => __DIR__.'/Obs/Internal/Signature/V4Signature.php',
	'Obs\Log\ObsConfig' => __DIR__.'/Obs/Log/ObsConfig.php',
	'Obs\Log\ObsLog' => __DIR__.'/Obs/Log/ObsLog.php',
	'Obs\ObsClient' => __DIR__.'/Obs/ObsClient.php',
	'Obs\ObsException' => __DIR__.'/Obs/ObsException.php',
];

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);
