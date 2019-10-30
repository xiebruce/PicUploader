<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CurrencyColumn File
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
* CurrencyColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CurrencyColumn extends Entity
{
    /**
    * Gets the locale
    * Specifies the locale from which to infer the currency symbol.
    *
    * @return string The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locale
    * Specifies the locale from which to infer the currency symbol.
    *
    * @param string $val The value of the locale
    *
    * @return CurrencyColumn
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }
}
