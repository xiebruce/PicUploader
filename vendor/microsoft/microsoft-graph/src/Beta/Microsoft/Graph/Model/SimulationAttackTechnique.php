<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationAttackTechnique File
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
* SimulationAttackTechnique class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationAttackTechnique extends Enum
{
    /**
    * The Enum SimulationAttackTechnique
    */
    const UNKNOWN = "unknown";
    const CREDENTIAL_HARVESTING = "credentialHarvesting";
    const ATTACHMENT_MALWARE = "attachmentMalware";
    const DRIVE_BY_URL = "driveByUrl";
    const LINK_IN_ATTACHMENT = "linkInAttachment";
    const LINK_TO_MALWARE_FILE = "linkToMalwareFile";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
