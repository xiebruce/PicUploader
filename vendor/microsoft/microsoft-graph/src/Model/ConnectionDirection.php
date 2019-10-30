<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectionDirection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ConnectionDirection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConnectionDirection extends Enum
{
    /**
    * The Enum ConnectionDirection
    */
    const UNKNOWN = "unknown";
    const INBOUND = "inbound";
    const OUTBOUND = "outbound";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}