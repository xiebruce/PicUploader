<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationStrengthResult File
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
* AuthenticationStrengthResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationStrengthResult extends Enum
{
    /**
    * The Enum AuthenticationStrengthResult
    */
    const NOT_SET = "notSet";
    const SKIPPED_FOR_PROOF_UP = "skippedForProofUp";
    const SATISFIED = "satisfied";
    const SINGLE_CHALLENGE_REQUIRED = "singleChallengeRequired";
    const MULTIPLE_CHALLENGES_REQUIRED = "multipleChallengesRequired";
    const SINGLE_REGISTRATION_REQUIRED = "singleRegistrationRequired";
    const MULTIPLE_REGISTRATIONS_REQUIRED = "multipleRegistrationsRequired";
    const CANNOT_SATISFY_DUE_TO_COMBINATION_CONFIGURATION = "cannotSatisfyDueToCombinationConfiguration";
    const CANNOT_SATISFY = "cannotSatisfy";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
