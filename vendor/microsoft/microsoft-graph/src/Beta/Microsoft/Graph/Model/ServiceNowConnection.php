<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceNowConnection File
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
* ServiceNowConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceNowConnection extends Entity
{
    /**
    * Gets the authenticationMethod
    * Indicates the method used by Intune to authenticate with ServiceNow. Currently supports only web authentication with ServiceNow using the specified app id.
    *
    * @return ServiceNowAuthenticationMethod|null The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\ServiceNowAuthenticationMethod") || is_null($this->_propDict["authenticationMethod"])) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new ServiceNowAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethod
    * Indicates the method used by Intune to authenticate with ServiceNow. Currently supports only web authentication with ServiceNow using the specified app id.
    *
    * @param ServiceNowAuthenticationMethod $val The authenticationMethod
    *
    * @return ServiceNowConnection
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date Time when connection properties were created. The value cannot be modified and is automatically populated when the connection properties were entered.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date Time when connection properties were created. The value cannot be modified and is automatically populated when the connection properties were entered.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ServiceNowConnection
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the incidentApiUrl
    * Indicates the ServiceNow incident API URL that Intune will use the fetch incidents. Saved in the format of /api/now/table/incident
    *
    * @return string|null The incidentApiUrl
    */
    public function getIncidentApiUrl()
    {
        if (array_key_exists("incidentApiUrl", $this->_propDict)) {
            return $this->_propDict["incidentApiUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incidentApiUrl
    * Indicates the ServiceNow incident API URL that Intune will use the fetch incidents. Saved in the format of /api/now/table/incident
    *
    * @param string $val The incidentApiUrl
    *
    * @return ServiceNowConnection
    */
    public function setIncidentApiUrl($val)
    {
        $this->_propDict["incidentApiUrl"] = $val;
        return $this;
    }

    /**
    * Gets the instanceUrl
    * Indicates the ServiceNow instance URL that Intune will connect to. Saved in the format of https://&amp;lt;instance&amp;gt;.service-now.com
    *
    * @return string|null The instanceUrl
    */
    public function getInstanceUrl()
    {
        if (array_key_exists("instanceUrl", $this->_propDict)) {
            return $this->_propDict["instanceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the instanceUrl
    * Indicates the ServiceNow instance URL that Intune will connect to. Saved in the format of https://&amp;lt;instance&amp;gt;.service-now.com
    *
    * @param string $val The instanceUrl
    *
    * @return ServiceNowConnection
    */
    public function setInstanceUrl($val)
    {
        $this->_propDict["instanceUrl"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date Time when connection properties were last updated. The value cannot be modified and is automatically populated when the connection properties were updated.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Date Time when connection properties were last updated. The value cannot be modified and is automatically populated when the connection properties were updated.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ServiceNowConnection
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastQueriedDateTime
    * Date Time when incidents from ServiceNow were last queried
    *
    * @return \DateTime|null The lastQueriedDateTime
    */
    public function getLastQueriedDateTime()
    {
        if (array_key_exists("lastQueriedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastQueriedDateTime"], "\DateTime") || is_null($this->_propDict["lastQueriedDateTime"])) {
                return $this->_propDict["lastQueriedDateTime"];
            } else {
                $this->_propDict["lastQueriedDateTime"] = new \DateTime($this->_propDict["lastQueriedDateTime"]);
                return $this->_propDict["lastQueriedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastQueriedDateTime
    * Date Time when incidents from ServiceNow were last queried
    *
    * @param \DateTime $val The lastQueriedDateTime
    *
    * @return ServiceNowConnection
    */
    public function setLastQueriedDateTime($val)
    {
        $this->_propDict["lastQueriedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the serviceNowConnectionStatus
    * Status of the ServiceNow Connection based on user's selection. Possible value could be disabled or enabled.
    *
    * @return ServiceNowConnectionStatus|null The serviceNowConnectionStatus
    */
    public function getServiceNowConnectionStatus()
    {
        if (array_key_exists("serviceNowConnectionStatus", $this->_propDict)) {
            if (is_a($this->_propDict["serviceNowConnectionStatus"], "\Beta\Microsoft\Graph\Model\ServiceNowConnectionStatus") || is_null($this->_propDict["serviceNowConnectionStatus"])) {
                return $this->_propDict["serviceNowConnectionStatus"];
            } else {
                $this->_propDict["serviceNowConnectionStatus"] = new ServiceNowConnectionStatus($this->_propDict["serviceNowConnectionStatus"]);
                return $this->_propDict["serviceNowConnectionStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the serviceNowConnectionStatus
    * Status of the ServiceNow Connection based on user's selection. Possible value could be disabled or enabled.
    *
    * @param ServiceNowConnectionStatus $val The serviceNowConnectionStatus
    *
    * @return ServiceNowConnection
    */
    public function setServiceNowConnectionStatus($val)
    {
        $this->_propDict["serviceNowConnectionStatus"] = $val;
        return $this;
    }

}
