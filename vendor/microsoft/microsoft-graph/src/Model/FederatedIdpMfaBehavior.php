<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FederatedIdpMfaBehavior File
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
* FederatedIdpMfaBehavior class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FederatedIdpMfaBehavior extends Enum
{
    /**
    * The Enum FederatedIdpMfaBehavior
    */
    const ACCEPT_IF_MFA_DONE_BY_FEDERATED_IDP = "acceptIfMfaDoneByFederatedIdp";
    const ENFORCE_MFA_BY_FEDERATED_IDP = "enforceMfaByFederatedIdp";
    const REJECT_MFA_BY_FEDERATED_IDP = "rejectMfaByFederatedIdp";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
