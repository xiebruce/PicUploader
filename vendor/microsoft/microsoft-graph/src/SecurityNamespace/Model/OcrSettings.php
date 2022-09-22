<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OcrSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* OcrSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OcrSettings extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the isEnabled
    * Indicates whether or not OCR is enabled for the case.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Indicates whether or not OCR is enabled for the case.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return OcrSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the maxImageSize
    * Maximum image size that will be processed in KB).
    *
    * @return int|null The maxImageSize
    */
    public function getMaxImageSize()
    {
        if (array_key_exists("maxImageSize", $this->_propDict)) {
            return $this->_propDict["maxImageSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxImageSize
    * Maximum image size that will be processed in KB).
    *
    * @param int $val The value of the maxImageSize
    *
    * @return OcrSettings
    */
    public function setMaxImageSize($val)
    {
        $this->_propDict["maxImageSize"] = $val;
        return $this;
    }

    /**
    * Gets the timeout
    * The timeout duration for the OCR engine. A longer timeout might increase success of OCR, but might add to the total processing time.
    *
    * @return \DateInterval|null The timeout
    */
    public function getTimeout()
    {
        if (array_key_exists("timeout", $this->_propDict)) {
            if (is_a($this->_propDict["timeout"], "\DateInterval") || is_null($this->_propDict["timeout"])) {
                return $this->_propDict["timeout"];
            } else {
                $this->_propDict["timeout"] = new \DateInterval($this->_propDict["timeout"]);
                return $this->_propDict["timeout"];
            }
        }
        return null;
    }

    /**
    * Sets the timeout
    * The timeout duration for the OCR engine. A longer timeout might increase success of OCR, but might add to the total processing time.
    *
    * @param \DateInterval $val The value to assign to the timeout
    *
    * @return OcrSettings The OcrSettings
    */
    public function setTimeout($val)
    {
        $this->_propDict["timeout"] = $val;
         return $this;
    }
}
