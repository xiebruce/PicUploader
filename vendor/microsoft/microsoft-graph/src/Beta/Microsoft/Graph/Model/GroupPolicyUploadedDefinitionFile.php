<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyUploadedDefinitionFile File
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
* GroupPolicyUploadedDefinitionFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyUploadedDefinitionFile extends GroupPolicyDefinitionFile
{
    /**
    * Gets the content
    * The contents of the uploaded ADMX file.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * The contents of the uploaded ADMX file.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return GroupPolicyUploadedDefinitionFile
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the defaultLanguageCode
    * The default language of the uploaded ADMX file.
    *
    * @return string|null The defaultLanguageCode
    */
    public function getDefaultLanguageCode()
    {
        if (array_key_exists("defaultLanguageCode", $this->_propDict)) {
            return $this->_propDict["defaultLanguageCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLanguageCode
    * The default language of the uploaded ADMX file.
    *
    * @param string $val The defaultLanguageCode
    *
    * @return GroupPolicyUploadedDefinitionFile
    */
    public function setDefaultLanguageCode($val)
    {
        $this->_propDict["defaultLanguageCode"] = $val;
        return $this;
    }


     /**
     * Gets the groupPolicyUploadedLanguageFiles
    * The list of ADML files associated with the uploaded ADMX file.
     *
     * @return array|null The groupPolicyUploadedLanguageFiles
     */
    public function getGroupPolicyUploadedLanguageFiles()
    {
        if (array_key_exists("groupPolicyUploadedLanguageFiles", $this->_propDict)) {
           return $this->_propDict["groupPolicyUploadedLanguageFiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupPolicyUploadedLanguageFiles
    * The list of ADML files associated with the uploaded ADMX file.
    *
    * @param GroupPolicyUploadedLanguageFile[] $val The groupPolicyUploadedLanguageFiles
    *
    * @return GroupPolicyUploadedDefinitionFile
    */
    public function setGroupPolicyUploadedLanguageFiles($val)
    {
        $this->_propDict["groupPolicyUploadedLanguageFiles"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * The upload status of the uploaded ADMX file. Possible values are: none, uploadInProgress, available, assigned, removalInProgress, uploadFailed, removalFailed.
    *
    * @return GroupPolicyUploadedDefinitionFileStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\GroupPolicyUploadedDefinitionFileStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new GroupPolicyUploadedDefinitionFileStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The upload status of the uploaded ADMX file. Possible values are: none, uploadInProgress, available, assigned, removalInProgress, uploadFailed, removalFailed.
    *
    * @param GroupPolicyUploadedDefinitionFileStatus $val The status
    *
    * @return GroupPolicyUploadedDefinitionFile
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the uploadDateTime
    * The uploaded time of the uploaded ADMX file.
    *
    * @return \DateTime|null The uploadDateTime
    */
    public function getUploadDateTime()
    {
        if (array_key_exists("uploadDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["uploadDateTime"], "\DateTime") || is_null($this->_propDict["uploadDateTime"])) {
                return $this->_propDict["uploadDateTime"];
            } else {
                $this->_propDict["uploadDateTime"] = new \DateTime($this->_propDict["uploadDateTime"]);
                return $this->_propDict["uploadDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the uploadDateTime
    * The uploaded time of the uploaded ADMX file.
    *
    * @param \DateTime $val The uploadDateTime
    *
    * @return GroupPolicyUploadedDefinitionFile
    */
    public function setUploadDateTime($val)
    {
        $this->_propDict["uploadDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the groupPolicyOperations
    * The list of operations on the uploaded ADMX file.
     *
     * @return array|null The groupPolicyOperations
     */
    public function getGroupPolicyOperations()
    {
        if (array_key_exists("groupPolicyOperations", $this->_propDict)) {
           return $this->_propDict["groupPolicyOperations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupPolicyOperations
    * The list of operations on the uploaded ADMX file.
    *
    * @param GroupPolicyOperation[] $val The groupPolicyOperations
    *
    * @return GroupPolicyUploadedDefinitionFile
    */
    public function setGroupPolicyOperations($val)
    {
        $this->_propDict["groupPolicyOperations"] = $val;
        return $this;
    }

}
