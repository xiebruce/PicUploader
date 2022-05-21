<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* QualityUpdateCatalogEntry File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* QualityUpdateCatalogEntry class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class QualityUpdateCatalogEntry extends SoftwareUpdateCatalogEntry
{
    /**
    * Gets the isExpeditable
    * Indicates whether the content can be deployed as an expedited quality update. Read-only.
    *
    * @return bool|null The isExpeditable
    */
    public function getIsExpeditable()
    {
        if (array_key_exists("isExpeditable", $this->_propDict)) {
            return $this->_propDict["isExpeditable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExpeditable
    * Indicates whether the content can be deployed as an expedited quality update. Read-only.
    *
    * @param bool $val The isExpeditable
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setIsExpeditable($val)
    {
        $this->_propDict["isExpeditable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the qualityUpdateClassification
    * The classification on the quality update. Possible values are: all, security, nonSecurity, unknownFutureValue. Read-only.
    *
    * @return QualityUpdateClassification|null The qualityUpdateClassification
    */
    public function getQualityUpdateClassification()
    {
        if (array_key_exists("qualityUpdateClassification", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdateClassification"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\QualityUpdateClassification") || is_null($this->_propDict["qualityUpdateClassification"])) {
                return $this->_propDict["qualityUpdateClassification"];
            } else {
                $this->_propDict["qualityUpdateClassification"] = new QualityUpdateClassification($this->_propDict["qualityUpdateClassification"]);
                return $this->_propDict["qualityUpdateClassification"];
            }
        }
        return null;
    }

    /**
    * Sets the qualityUpdateClassification
    * The classification on the quality update. Possible values are: all, security, nonSecurity, unknownFutureValue. Read-only.
    *
    * @param QualityUpdateClassification $val The qualityUpdateClassification
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setQualityUpdateClassification($val)
    {
        $this->_propDict["qualityUpdateClassification"] = $val;
        return $this;
    }

}
