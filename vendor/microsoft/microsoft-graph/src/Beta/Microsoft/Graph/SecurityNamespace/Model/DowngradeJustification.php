<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DowngradeJustification File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* DowngradeJustification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DowngradeJustification extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the isDowngradeJustified
    *
    * @return bool|null The isDowngradeJustified
    */
    public function getIsDowngradeJustified()
    {
        if (array_key_exists("isDowngradeJustified", $this->_propDict)) {
            return $this->_propDict["isDowngradeJustified"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDowngradeJustified
    *
    * @param bool $val The value of the isDowngradeJustified
    *
    * @return DowngradeJustification
    */
    public function setIsDowngradeJustified($val)
    {
        $this->_propDict["isDowngradeJustified"] = $val;
        return $this;
    }
    /**
    * Gets the justificationMessage
    *
    * @return string|null The justificationMessage
    */
    public function getJustificationMessage()
    {
        if (array_key_exists("justificationMessage", $this->_propDict)) {
            return $this->_propDict["justificationMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justificationMessage
    *
    * @param string $val The value of the justificationMessage
    *
    * @return DowngradeJustification
    */
    public function setJustificationMessage($val)
    {
        $this->_propDict["justificationMessage"] = $val;
        return $this;
    }
}
