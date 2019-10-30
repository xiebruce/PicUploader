<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Report File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* Report class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Report extends Entity
{

    /**
    * Gets the content
    * Not yet documented
    *
    * @return \GuzzleHttp\Psr7\Stream The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "Microsoft\Graph\Model\\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * Not yet documented
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the content
    *
    * @return Report The Report
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
         return $this;
    }
}
