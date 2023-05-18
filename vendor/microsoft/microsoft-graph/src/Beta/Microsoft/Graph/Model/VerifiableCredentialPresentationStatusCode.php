<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiableCredentialPresentationStatusCode File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* VerifiableCredentialPresentationStatusCode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VerifiableCredentialPresentationStatusCode extends Enum
{
    /**
    * The Enum VerifiableCredentialPresentationStatusCode
    */
    const REQUEST_RETRIEVED = "requestRetrieved";
    const PRESENTATION_VERIFIED = "presentationVerified";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
