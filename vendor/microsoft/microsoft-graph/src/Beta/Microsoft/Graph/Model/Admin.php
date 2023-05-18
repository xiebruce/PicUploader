<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Admin File
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
* Admin class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Admin implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new Admin
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the Admin
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the edge
    * A container for Microsoft Edge resources. Read-only.
    *
    * @return Edge|null The edge
    */
    public function getEdge()
    {
        if (array_key_exists("edge", $this->_propDict)) {
            if (is_a($this->_propDict["edge"], "\Beta\Microsoft\Graph\Model\Edge") || is_null($this->_propDict["edge"])) {
                return $this->_propDict["edge"];
            } else {
                $this->_propDict["edge"] = new Edge($this->_propDict["edge"]);
                return $this->_propDict["edge"];
            }
        }
        return null;
    }

    /**
    * Sets the edge
    * A container for Microsoft Edge resources. Read-only.
    *
    * @param Edge $val The edge
    *
    * @return Admin
    */
    public function setEdge($val)
    {
        $this->_propDict["edge"] = $val;
        return $this;
    }

    /**
    * Gets the sharepoint
    *
    * @return Sharepoint|null The sharepoint
    */
    public function getSharepoint()
    {
        if (array_key_exists("sharepoint", $this->_propDict)) {
            if (is_a($this->_propDict["sharepoint"], "\Beta\Microsoft\Graph\Model\Sharepoint") || is_null($this->_propDict["sharepoint"])) {
                return $this->_propDict["sharepoint"];
            } else {
                $this->_propDict["sharepoint"] = new Sharepoint($this->_propDict["sharepoint"]);
                return $this->_propDict["sharepoint"];
            }
        }
        return null;
    }

    /**
    * Sets the sharepoint
    *
    * @param Sharepoint $val The sharepoint
    *
    * @return Admin
    */
    public function setSharepoint($val)
    {
        $this->_propDict["sharepoint"] = $val;
        return $this;
    }

    /**
    * Gets the serviceAnnouncement
    * A container for service communications resources. Read-only.
    *
    * @return ServiceAnnouncement|null The serviceAnnouncement
    */
    public function getServiceAnnouncement()
    {
        if (array_key_exists("serviceAnnouncement", $this->_propDict)) {
            if (is_a($this->_propDict["serviceAnnouncement"], "\Beta\Microsoft\Graph\Model\ServiceAnnouncement") || is_null($this->_propDict["serviceAnnouncement"])) {
                return $this->_propDict["serviceAnnouncement"];
            } else {
                $this->_propDict["serviceAnnouncement"] = new ServiceAnnouncement($this->_propDict["serviceAnnouncement"]);
                return $this->_propDict["serviceAnnouncement"];
            }
        }
        return null;
    }

    /**
    * Sets the serviceAnnouncement
    * A container for service communications resources. Read-only.
    *
    * @param ServiceAnnouncement $val The serviceAnnouncement
    *
    * @return Admin
    */
    public function setServiceAnnouncement($val)
    {
        $this->_propDict["serviceAnnouncement"] = $val;
        return $this;
    }

    /**
    * Gets the reportSettings
    * A container for administrative resources to manage reports.
    *
    * @return AdminReportSettings|null The reportSettings
    */
    public function getReportSettings()
    {
        if (array_key_exists("reportSettings", $this->_propDict)) {
            if (is_a($this->_propDict["reportSettings"], "\Beta\Microsoft\Graph\Model\AdminReportSettings") || is_null($this->_propDict["reportSettings"])) {
                return $this->_propDict["reportSettings"];
            } else {
                $this->_propDict["reportSettings"] = new AdminReportSettings($this->_propDict["reportSettings"]);
                return $this->_propDict["reportSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the reportSettings
    * A container for administrative resources to manage reports.
    *
    * @param AdminReportSettings $val The reportSettings
    *
    * @return Admin
    */
    public function setReportSettings($val)
    {
        $this->_propDict["reportSettings"] = $val;
        return $this;
    }

    /**
    * Gets the windows
    * A container for all Windows administrator functionalities. Read-only.
    *
    * @return AdminWindows|null The windows
    */
    public function getWindows()
    {
        if (array_key_exists("windows", $this->_propDict)) {
            if (is_a($this->_propDict["windows"], "\Beta\Microsoft\Graph\Model\AdminWindows") || is_null($this->_propDict["windows"])) {
                return $this->_propDict["windows"];
            } else {
                $this->_propDict["windows"] = new AdminWindows($this->_propDict["windows"]);
                return $this->_propDict["windows"];
            }
        }
        return null;
    }

    /**
    * Sets the windows
    * A container for all Windows administrator functionalities. Read-only.
    *
    * @param AdminWindows $val The windows
    *
    * @return Admin
    */
    public function setWindows($val)
    {
        $this->_propDict["windows"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return Admin
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
