<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TaskFileAttachment File
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
* TaskFileAttachment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TaskFileAttachment extends AttachmentBase
{
    /**
    * Gets the contentBytes
    * The base64-encoded contents of the file.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The contentBytes
    */
    public function getContentBytes()
    {
        if (array_key_exists("contentBytes", $this->_propDict)) {
            if (is_a($this->_propDict["contentBytes"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["contentBytes"])) {
                return $this->_propDict["contentBytes"];
            } else {
                $this->_propDict["contentBytes"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["contentBytes"]);
                return $this->_propDict["contentBytes"];
            }
        }
        return null;
    }

    /**
    * Sets the contentBytes
    * The base64-encoded contents of the file.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The contentBytes
    *
    * @return TaskFileAttachment
    */
    public function setContentBytes($val)
    {
        $this->_propDict["contentBytes"] = $val;
        return $this;
    }

}
