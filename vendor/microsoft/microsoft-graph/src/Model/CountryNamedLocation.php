<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CountryNamedLocation File
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
* CountryNamedLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CountryNamedLocation extends NamedLocation
{
    /**
    * Gets the countriesAndRegions
    * List of countries and/or regions in two-letter format specified by ISO 3166-2.
    *
    * @return string|null The countriesAndRegions
    */
    public function getCountriesAndRegions()
    {
        if (array_key_exists("countriesAndRegions", $this->_propDict)) {
            return $this->_propDict["countriesAndRegions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countriesAndRegions
    * List of countries and/or regions in two-letter format specified by ISO 3166-2.
    *
    * @param string $val The countriesAndRegions
    *
    * @return CountryNamedLocation
    */
    public function setCountriesAndRegions($val)
    {
        $this->_propDict["countriesAndRegions"] = $val;
        return $this;
    }

    /**
    * Gets the countryLookupMethod
    * Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress (default) and authenticatorAppGps.
    *
    * @return CountryLookupMethodType|null The countryLookupMethod
    */
    public function getCountryLookupMethod()
    {
        if (array_key_exists("countryLookupMethod", $this->_propDict)) {
            if (is_a($this->_propDict["countryLookupMethod"], "\Microsoft\Graph\Model\CountryLookupMethodType") || is_null($this->_propDict["countryLookupMethod"])) {
                return $this->_propDict["countryLookupMethod"];
            } else {
                $this->_propDict["countryLookupMethod"] = new CountryLookupMethodType($this->_propDict["countryLookupMethod"]);
                return $this->_propDict["countryLookupMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the countryLookupMethod
    * Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress (default) and authenticatorAppGps.
    *
    * @param CountryLookupMethodType $val The countryLookupMethod
    *
    * @return CountryNamedLocation
    */
    public function setCountryLookupMethod($val)
    {
        $this->_propDict["countryLookupMethod"] = $val;
        return $this;
    }

    /**
    * Gets the includeUnknownCountriesAndRegions
    * true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false.
    *
    * @return bool|null The includeUnknownCountriesAndRegions
    */
    public function getIncludeUnknownCountriesAndRegions()
    {
        if (array_key_exists("includeUnknownCountriesAndRegions", $this->_propDict)) {
            return $this->_propDict["includeUnknownCountriesAndRegions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeUnknownCountriesAndRegions
    * true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false.
    *
    * @param bool $val The includeUnknownCountriesAndRegions
    *
    * @return CountryNamedLocation
    */
    public function setIncludeUnknownCountriesAndRegions($val)
    {
        $this->_propDict["includeUnknownCountriesAndRegions"] = boolval($val);
        return $this;
    }

}
