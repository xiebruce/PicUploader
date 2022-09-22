<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* X509CertificateAuthenticationMode File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* X509CertificateAuthenticationMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class X509CertificateAuthenticationMode extends Enum
{
    /**
    * The Enum X509CertificateAuthenticationMode
    */
    const X509_CERTIFICATE_SINGLE_FACTOR = "x509CertificateSingleFactor";
    const X509_CERTIFICATE_MULTI_FACTOR = "x509CertificateMultiFactor";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
