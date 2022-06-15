<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkTransportProtocol File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* NetworkTransportProtocol class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkTransportProtocol extends Enum
{
    /**
    * The Enum NetworkTransportProtocol
    */
    const UNKNOWN = "unknown";
    const UDP = "udp";
    const TCP = "tcp";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
