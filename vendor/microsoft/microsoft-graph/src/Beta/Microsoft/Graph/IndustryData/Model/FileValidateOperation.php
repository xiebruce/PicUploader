<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileValidateOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IndustryData\Model;

/**
* FileValidateOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileValidateOperation extends ValidateOperation
{
    /**
    * Gets the validatedFiles
    * Set of files validated by the validate operation.
    *
    * @return array|null The validatedFiles
    */
    public function getValidatedFiles()
    {
        if (array_key_exists("validatedFiles", $this->_propDict)) {
            return $this->_propDict["validatedFiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the validatedFiles
    * Set of files validated by the validate operation.
    *
    * @param string[] $val The validatedFiles
    *
    * @return FileValidateOperation
    */
    public function setValidatedFiles($val)
    {
        $this->_propDict["validatedFiles"] = $val;
        return $this;
    }

}
