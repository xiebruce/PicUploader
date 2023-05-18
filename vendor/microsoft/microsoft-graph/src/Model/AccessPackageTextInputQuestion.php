<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageTextInputQuestion File
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
* AccessPackageTextInputQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageTextInputQuestion extends AccessPackageQuestion
{
    /**
    * Gets the isSingleLineQuestion
    * Indicates whether the answer will be in single or multiple line format.
    *
    * @return bool|null The isSingleLineQuestion
    */
    public function getIsSingleLineQuestion()
    {
        if (array_key_exists("isSingleLineQuestion", $this->_propDict)) {
            return $this->_propDict["isSingleLineQuestion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSingleLineQuestion
    * Indicates whether the answer will be in single or multiple line format.
    *
    * @param bool $val The isSingleLineQuestion
    *
    * @return AccessPackageTextInputQuestion
    */
    public function setIsSingleLineQuestion($val)
    {
        $this->_propDict["isSingleLineQuestion"] = boolval($val);
        return $this;
    }

    /**
    * Gets the regexPattern
    * The regular expression pattern which any answer to this question must match.
    *
    * @return string|null The regexPattern
    */
    public function getRegexPattern()
    {
        if (array_key_exists("regexPattern", $this->_propDict)) {
            return $this->_propDict["regexPattern"];
        } else {
            return null;
        }
    }

    /**
    * Sets the regexPattern
    * The regular expression pattern which any answer to this question must match.
    *
    * @param string $val The regexPattern
    *
    * @return AccessPackageTextInputQuestion
    */
    public function setRegexPattern($val)
    {
        $this->_propDict["regexPattern"] = $val;
        return $this;
    }

}
