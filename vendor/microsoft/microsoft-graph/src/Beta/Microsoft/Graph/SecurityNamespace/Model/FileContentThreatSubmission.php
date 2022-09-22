<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileContentThreatSubmission File
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
* FileContentThreatSubmission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileContentThreatSubmission extends FileThreatSubmission
{
    /**
    * Gets the fileContent
    * It specifies the file content in base 64 format.
    *
    * @return string|null The fileContent
    */
    public function getFileContent()
    {
        if (array_key_exists("fileContent", $this->_propDict)) {
            return $this->_propDict["fileContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileContent
    * It specifies the file content in base 64 format.
    *
    * @param string $val The fileContent
    *
    * @return FileContentThreatSubmission
    */
    public function setFileContent($val)
    {
        $this->_propDict["fileContent"] = $val;
        return $this;
    }

}
