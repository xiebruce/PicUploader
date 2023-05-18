<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReportRoot File
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
* ReportRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReportRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new ReportRoot
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
    * Gets the property dictionary of the ReportRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the dailyPrintUsageByPrinter
     *
     * @return array|null The dailyPrintUsageByPrinter
     */
    public function getDailyPrintUsageByPrinter()
    {
        if (array_key_exists("dailyPrintUsageByPrinter", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsageByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dailyPrintUsageByPrinter
    *
    * @param PrintUsageByPrinter[] $val The dailyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByPrinter($val)
    {
        $this->_propDict["dailyPrintUsageByPrinter"] = $val;
        return $this;
    }


     /**
     * Gets the dailyPrintUsageByUser
     *
     * @return array|null The dailyPrintUsageByUser
     */
    public function getDailyPrintUsageByUser()
    {
        if (array_key_exists("dailyPrintUsageByUser", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsageByUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dailyPrintUsageByUser
    *
    * @param PrintUsageByUser[] $val The dailyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByUser($val)
    {
        $this->_propDict["dailyPrintUsageByUser"] = $val;
        return $this;
    }


     /**
     * Gets the monthlyPrintUsageByPrinter
     *
     * @return array|null The monthlyPrintUsageByPrinter
     */
    public function getMonthlyPrintUsageByPrinter()
    {
        if (array_key_exists("monthlyPrintUsageByPrinter", $this->_propDict)) {
           return $this->_propDict["monthlyPrintUsageByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the monthlyPrintUsageByPrinter
    *
    * @param PrintUsageByPrinter[] $val The monthlyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByPrinter($val)
    {
        $this->_propDict["monthlyPrintUsageByPrinter"] = $val;
        return $this;
    }


     /**
     * Gets the monthlyPrintUsageByUser
     *
     * @return array|null The monthlyPrintUsageByUser
     */
    public function getMonthlyPrintUsageByUser()
    {
        if (array_key_exists("monthlyPrintUsageByUser", $this->_propDict)) {
           return $this->_propDict["monthlyPrintUsageByUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the monthlyPrintUsageByUser
    *
    * @param PrintUsageByUser[] $val The monthlyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByUser($val)
    {
        $this->_propDict["monthlyPrintUsageByUser"] = $val;
        return $this;
    }

    /**
    * Gets the security
    *
    * @return SecurityReportsRoot|null The security
    */
    public function getSecurity()
    {
        if (array_key_exists("security", $this->_propDict)) {
            if (is_a($this->_propDict["security"], "\Microsoft\Graph\Model\SecurityReportsRoot") || is_null($this->_propDict["security"])) {
                return $this->_propDict["security"];
            } else {
                $this->_propDict["security"] = new SecurityReportsRoot($this->_propDict["security"]);
                return $this->_propDict["security"];
            }
        }
        return null;
    }

    /**
    * Sets the security
    *
    * @param SecurityReportsRoot $val The security
    *
    * @return ReportRoot
    */
    public function setSecurity($val)
    {
        $this->_propDict["security"] = $val;
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
    * @return ReportRoot
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
