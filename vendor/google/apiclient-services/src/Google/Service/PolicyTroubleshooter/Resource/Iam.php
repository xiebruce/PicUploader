<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "iam" collection of methods.
 * Typical usage is:
 *  <code>
 *   $policytroubleshooterService = new Google_Service_PolicyTroubleshooter(...);
 *   $iam = $policytroubleshooterService->iam;
 *  </code>
 */
class Google_Service_PolicyTroubleshooter_Resource_Iam extends Google_Service_Resource
{
  /**
   * Perform a check on whether a member is granted a permission on a resource and
   * how that grant/deny is determined accordinga to the resource's effective IAM
   * policy interpretation. (iam.troubleshoot)
   *
   * @param Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1betaTroubleshootIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1betaTroubleshootIamPolicyResponse
   */
  public function troubleshoot(Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1betaTroubleshootIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('troubleshoot', array($params), "Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1betaTroubleshootIamPolicyResponse");
  }
}
