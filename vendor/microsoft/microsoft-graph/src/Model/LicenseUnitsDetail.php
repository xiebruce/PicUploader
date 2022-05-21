<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LicenseUnitsDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* LicenseUnitsDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LicenseUnitsDetail extends Entity
{
    /**
    * Gets the enabled
    * The number of units that are enabled for the active subscription of the service SKU.
    *
    * @return int|null The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    * The number of units that are enabled for the active subscription of the service SKU.
    *
    * @param int $val The value of the enabled
    *
    * @return LicenseUnitsDetail
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = $val;
        return $this;
    }
    /**
    * Gets the suspended
    * The number of units that are suspended because the subscription of the service SKU has been cancelled. The units cannot be assigned but can still be reactivated before they are deleted.
    *
    * @return int|null The suspended
    */
    public function getSuspended()
    {
        if (array_key_exists("suspended", $this->_propDict)) {
            return $this->_propDict["suspended"];
        } else {
            return null;
        }
    }

    /**
    * Sets the suspended
    * The number of units that are suspended because the subscription of the service SKU has been cancelled. The units cannot be assigned but can still be reactivated before they are deleted.
    *
    * @param int $val The value of the suspended
    *
    * @return LicenseUnitsDetail
    */
    public function setSuspended($val)
    {
        $this->_propDict["suspended"] = $val;
        return $this;
    }
    /**
    * Gets the warning
    * The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it is cancelled (moved to a suspended state).
    *
    * @return int|null The warning
    */
    public function getWarning()
    {
        if (array_key_exists("warning", $this->_propDict)) {
            return $this->_propDict["warning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the warning
    * The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it is cancelled (moved to a suspended state).
    *
    * @param int $val The value of the warning
    *
    * @return LicenseUnitsDetail
    */
    public function setWarning($val)
    {
        $this->_propDict["warning"] = $val;
        return $this;
    }
}
