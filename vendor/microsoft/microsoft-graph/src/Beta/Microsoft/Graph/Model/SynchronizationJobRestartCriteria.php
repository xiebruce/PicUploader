<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobRestartCriteria File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* SynchronizationJobRestartCriteria class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationJobRestartCriteria extends Entity
{

    /**
    * Gets the resetScope
    * Comma-separated combination of the following values: None, ConnectorDataStore, Escrows, Watermark, QuarantineState, Full, ForceDeletes. The property can also be empty.   None: Starts a paused or quarantined provisioning job. DO NOT USE. Use the Start synchronizationJob API instead.ConnectorDataStore - Clears the underlying cache for all users. DO NOT USE. Contact Microsoft Support for guidance.Escrows - Provisioning failures are marked as escrows and retried. Clearing escrows will stop the service from retrying failures.Watermark - Removing the watermark causes the service to re-evaluate all the users again, rather than just processing changes.QuarantineState - Temporarily lifts the quarantine.Use Full if you want all of the options.ForceDeletes - Forces the system to delete the pending deleted users when using the accidental deletions prevention feature and the deletion threshold is exceeded. Leaving this property empty emulates the Restart provisioning option in the Azure portal. It is similar to setting the resetScope to include QuarantineState, Watermark, and Escrows. This option meets most customer needs.
    *
    * @return SynchronizationJobRestartScope|null The resetScope
    */
    public function getResetScope()
    {
        if (array_key_exists("resetScope", $this->_propDict)) {
            if (is_a($this->_propDict["resetScope"], "\Beta\Microsoft\Graph\Model\SynchronizationJobRestartScope") || is_null($this->_propDict["resetScope"])) {
                return $this->_propDict["resetScope"];
            } else {
                $this->_propDict["resetScope"] = new SynchronizationJobRestartScope($this->_propDict["resetScope"]);
                return $this->_propDict["resetScope"];
            }
        }
        return null;
    }

    /**
    * Sets the resetScope
    * Comma-separated combination of the following values: None, ConnectorDataStore, Escrows, Watermark, QuarantineState, Full, ForceDeletes. The property can also be empty.   None: Starts a paused or quarantined provisioning job. DO NOT USE. Use the Start synchronizationJob API instead.ConnectorDataStore - Clears the underlying cache for all users. DO NOT USE. Contact Microsoft Support for guidance.Escrows - Provisioning failures are marked as escrows and retried. Clearing escrows will stop the service from retrying failures.Watermark - Removing the watermark causes the service to re-evaluate all the users again, rather than just processing changes.QuarantineState - Temporarily lifts the quarantine.Use Full if you want all of the options.ForceDeletes - Forces the system to delete the pending deleted users when using the accidental deletions prevention feature and the deletion threshold is exceeded. Leaving this property empty emulates the Restart provisioning option in the Azure portal. It is similar to setting the resetScope to include QuarantineState, Watermark, and Escrows. This option meets most customer needs.
    *
    * @param SynchronizationJobRestartScope $val The value to assign to the resetScope
    *
    * @return SynchronizationJobRestartCriteria The SynchronizationJobRestartCriteria
    */
    public function setResetScope($val)
    {
        $this->_propDict["resetScope"] = $val;
         return $this;
    }
}
