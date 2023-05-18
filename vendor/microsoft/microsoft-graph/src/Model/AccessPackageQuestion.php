<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageQuestion File
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
* AccessPackageQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageQuestion extends Entity
{
    /**
    * Gets the isAnswerEditable
    * Specifies whether the requestor is allowed to edit answers to questions for an assignment by posting an update to accessPackageAssignmentRequest.
    *
    * @return bool|null The isAnswerEditable
    */
    public function getIsAnswerEditable()
    {
        if (array_key_exists("isAnswerEditable", $this->_propDict)) {
            return $this->_propDict["isAnswerEditable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAnswerEditable
    * Specifies whether the requestor is allowed to edit answers to questions for an assignment by posting an update to accessPackageAssignmentRequest.
    *
    * @param bool $val The isAnswerEditable
    *
    * @return AccessPackageQuestion
    */
    public function setIsAnswerEditable($val)
    {
        $this->_propDict["isAnswerEditable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isRequired
    * Whether the requestor is required to supply an answer or not.
    *
    * @return bool|null The isRequired
    */
    public function getIsRequired()
    {
        if (array_key_exists("isRequired", $this->_propDict)) {
            return $this->_propDict["isRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequired
    * Whether the requestor is required to supply an answer or not.
    *
    * @param bool $val The isRequired
    *
    * @return AccessPackageQuestion
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = boolval($val);
        return $this;
    }


     /**
     * Gets the localizations
    * The text of the question represented in a format for a specific locale.
     *
     * @return array|null The localizations
     */
    public function getLocalizations()
    {
        if (array_key_exists("localizations", $this->_propDict)) {
           return $this->_propDict["localizations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localizations
    * The text of the question represented in a format for a specific locale.
    *
    * @param AccessPackageLocalizedText[] $val The localizations
    *
    * @return AccessPackageQuestion
    */
    public function setLocalizations($val)
    {
        $this->_propDict["localizations"] = $val;
        return $this;
    }

    /**
    * Gets the sequence
    * Relative position of this question when displaying a list of questions to the requestor.
    *
    * @return int|null The sequence
    */
    public function getSequence()
    {
        if (array_key_exists("sequence", $this->_propDict)) {
            return $this->_propDict["sequence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sequence
    * Relative position of this question when displaying a list of questions to the requestor.
    *
    * @param int $val The sequence
    *
    * @return AccessPackageQuestion
    */
    public function setSequence($val)
    {
        $this->_propDict["sequence"] = intval($val);
        return $this;
    }

    /**
    * Gets the text
    * The text of the question to show to the requestor.
    *
    * @return string|null The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }

    /**
    * Sets the text
    * The text of the question to show to the requestor.
    *
    * @param string $val The text
    *
    * @return AccessPackageQuestion
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }

}
