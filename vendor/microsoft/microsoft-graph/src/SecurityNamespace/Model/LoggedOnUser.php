<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LoggedOnUser File
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
* LoggedOnUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LoggedOnUser extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the accountName
    * User account name of the logged-on user.
    *
    * @return string|null The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountName
    * User account name of the logged-on user.
    *
    * @param string $val The value of the accountName
    *
    * @return LoggedOnUser
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    /**
    * Gets the domainName
    * User account domain of the logged-on user.
    *
    * @return string|null The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainName
    * User account domain of the logged-on user.
    *
    * @param string $val The value of the domainName
    *
    * @return LoggedOnUser
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }
}
