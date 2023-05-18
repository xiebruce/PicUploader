<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationOneRosterApiDataProvider File
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
* EducationOneRosterApiDataProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationOneRosterApiDataProvider extends EducationSynchronizationDataProvider
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.educationOneRosterApiDataProvider");
    }


    /**
    * Gets the connectionSettings
    * The [OAuth 1.0][onerosteroauth1] or [OAuth 2.0][onerosteroauth2] settings for the OneRoster instance.
    *
    * @return EducationSynchronizationConnectionSettings|null The connectionSettings
    */
    public function getConnectionSettings()
    {
        if (array_key_exists("connectionSettings", $this->_propDict)) {
            if (is_a($this->_propDict["connectionSettings"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationConnectionSettings") || is_null($this->_propDict["connectionSettings"])) {
                return $this->_propDict["connectionSettings"];
            } else {
                $this->_propDict["connectionSettings"] = new EducationSynchronizationConnectionSettings($this->_propDict["connectionSettings"]);
                return $this->_propDict["connectionSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the connectionSettings
    * The [OAuth 1.0][onerosteroauth1] or [OAuth 2.0][onerosteroauth2] settings for the OneRoster instance.
    *
    * @param EducationSynchronizationConnectionSettings $val The value to assign to the connectionSettings
    *
    * @return EducationOneRosterApiDataProvider The EducationOneRosterApiDataProvider
    */
    public function setConnectionSettings($val)
    {
        $this->_propDict["connectionSettings"] = $val;
         return $this;
    }
    /**
    * Gets the connectionUrl
    * The connection URL to the OneRoster instance.
    *
    * @return string|null The connectionUrl
    */
    public function getConnectionUrl()
    {
        if (array_key_exists("connectionUrl", $this->_propDict)) {
            return $this->_propDict["connectionUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectionUrl
    * The connection URL to the OneRoster instance.
    *
    * @param string $val The value of the connectionUrl
    *
    * @return EducationOneRosterApiDataProvider
    */
    public function setConnectionUrl($val)
    {
        $this->_propDict["connectionUrl"] = $val;
        return $this;
    }

    /**
    * Gets the customizations
    * Optional customization to be applied to the synchronization profile.
    *
    * @return EducationSynchronizationCustomizations|null The customizations
    */
    public function getCustomizations()
    {
        if (array_key_exists("customizations", $this->_propDict)) {
            if (is_a($this->_propDict["customizations"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationCustomizations") || is_null($this->_propDict["customizations"])) {
                return $this->_propDict["customizations"];
            } else {
                $this->_propDict["customizations"] = new EducationSynchronizationCustomizations($this->_propDict["customizations"]);
                return $this->_propDict["customizations"];
            }
        }
        return null;
    }

    /**
    * Sets the customizations
    * Optional customization to be applied to the synchronization profile.
    *
    * @param EducationSynchronizationCustomizations $val The value to assign to the customizations
    *
    * @return EducationOneRosterApiDataProvider The EducationOneRosterApiDataProvider
    */
    public function setCustomizations($val)
    {
        $this->_propDict["customizations"] = $val;
         return $this;
    }
    /**
    * Gets the providerName
    * The OneRoster Service Provider name as defined by the [OneRoster specification][oneroster].
    *
    * @return string|null The providerName
    */
    public function getProviderName()
    {
        if (array_key_exists("providerName", $this->_propDict)) {
            return $this->_propDict["providerName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the providerName
    * The OneRoster Service Provider name as defined by the [OneRoster specification][oneroster].
    *
    * @param string $val The value of the providerName
    *
    * @return EducationOneRosterApiDataProvider
    */
    public function setProviderName($val)
    {
        $this->_propDict["providerName"] = $val;
        return $this;
    }
    /**
    * Gets the schoolsIds
    * The list of [School/Org][orgs] sourcedId to sync.
    *
    * @return string|null The schoolsIds
    */
    public function getSchoolsIds()
    {
        if (array_key_exists("schoolsIds", $this->_propDict)) {
            return $this->_propDict["schoolsIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schoolsIds
    * The list of [School/Org][orgs] sourcedId to sync.
    *
    * @param string $val The value of the schoolsIds
    *
    * @return EducationOneRosterApiDataProvider
    */
    public function setSchoolsIds($val)
    {
        $this->_propDict["schoolsIds"] = $val;
        return $this;
    }
    /**
    * Gets the termIds
    * The list of [academic sessions][terms] to sync.
    *
    * @return string|null The termIds
    */
    public function getTermIds()
    {
        if (array_key_exists("termIds", $this->_propDict)) {
            return $this->_propDict["termIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the termIds
    * The list of [academic sessions][terms] to sync.
    *
    * @param string $val The value of the termIds
    *
    * @return EducationOneRosterApiDataProvider
    */
    public function setTermIds($val)
    {
        $this->_propDict["termIds"] = $val;
        return $this;
    }
}
