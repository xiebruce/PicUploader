<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrgContact File
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
* OrgContact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrgContact extends DirectoryObject
{

     /**
     * Gets the addresses
     *
     * @return array|null The addresses
     */
    public function getAddresses()
    {
        if (array_key_exists("addresses", $this->_propDict)) {
           return $this->_propDict["addresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addresses
    *
    * @param PhysicalOfficeAddress[] $val The addresses
    *
    * @return OrgContact
    */
    public function setAddresses($val)
    {
        $this->_propDict["addresses"] = $val;
        return $this;
    }

    /**
    * Gets the companyName
    *
    * @return string|null The companyName
    */
    public function getCompanyName()
    {
        if (array_key_exists("companyName", $this->_propDict)) {
            return $this->_propDict["companyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the companyName
    *
    * @param string $val The companyName
    *
    * @return OrgContact
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
        return $this;
    }

    /**
    * Gets the department
    *
    * @return string|null The department
    */
    public function getDepartment()
    {
        if (array_key_exists("department", $this->_propDict)) {
            return $this->_propDict["department"];
        } else {
            return null;
        }
    }

    /**
    * Sets the department
    *
    * @param string $val The department
    *
    * @return OrgContact
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return OrgContact
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the givenName
    *
    * @return string|null The givenName
    */
    public function getGivenName()
    {
        if (array_key_exists("givenName", $this->_propDict)) {
            return $this->_propDict["givenName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the givenName
    *
    * @param string $val The givenName
    *
    * @return OrgContact
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }

    /**
    * Gets the jobTitle
    *
    * @return string|null The jobTitle
    */
    public function getJobTitle()
    {
        if (array_key_exists("jobTitle", $this->_propDict)) {
            return $this->_propDict["jobTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the jobTitle
    *
    * @param string $val The jobTitle
    *
    * @return OrgContact
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }

    /**
    * Gets the mail
    *
    * @return string|null The mail
    */
    public function getMail()
    {
        if (array_key_exists("mail", $this->_propDict)) {
            return $this->_propDict["mail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mail
    *
    * @param string $val The mail
    *
    * @return OrgContact
    */
    public function setMail($val)
    {
        $this->_propDict["mail"] = $val;
        return $this;
    }

    /**
    * Gets the mailNickname
    *
    * @return string|null The mailNickname
    */
    public function getMailNickname()
    {
        if (array_key_exists("mailNickname", $this->_propDict)) {
            return $this->_propDict["mailNickname"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mailNickname
    *
    * @param string $val The mailNickname
    *
    * @return OrgContact
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesLastSyncDateTime
    *
    * @return \DateTime|null The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime") || is_null($this->_propDict["onPremisesLastSyncDateTime"])) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the onPremisesLastSyncDateTime
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return OrgContact
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the onPremisesProvisioningErrors
     *
     * @return array|null The onPremisesProvisioningErrors
     */
    public function getOnPremisesProvisioningErrors()
    {
        if (array_key_exists("onPremisesProvisioningErrors", $this->_propDict)) {
           return $this->_propDict["onPremisesProvisioningErrors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesProvisioningErrors
    *
    * @param OnPremisesProvisioningError[] $val The onPremisesProvisioningErrors
    *
    * @return OrgContact
    */
    public function setOnPremisesProvisioningErrors($val)
    {
        $this->_propDict["onPremisesProvisioningErrors"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesSyncEnabled
    *
    * @return bool|null The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSyncEnabled
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return OrgContact
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the phones
     *
     * @return array|null The phones
     */
    public function getPhones()
    {
        if (array_key_exists("phones", $this->_propDict)) {
           return $this->_propDict["phones"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phones
    *
    * @param Phone[] $val The phones
    *
    * @return OrgContact
    */
    public function setPhones($val)
    {
        $this->_propDict["phones"] = $val;
        return $this;
    }

    /**
    * Gets the proxyAddresses
    *
    * @return string|null The proxyAddresses
    */
    public function getProxyAddresses()
    {
        if (array_key_exists("proxyAddresses", $this->_propDict)) {
            return $this->_propDict["proxyAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyAddresses
    *
    * @param string $val The proxyAddresses
    *
    * @return OrgContact
    */
    public function setProxyAddresses($val)
    {
        $this->_propDict["proxyAddresses"] = $val;
        return $this;
    }

    /**
    * Gets the surname
    *
    * @return string|null The surname
    */
    public function getSurname()
    {
        if (array_key_exists("surname", $this->_propDict)) {
            return $this->_propDict["surname"];
        } else {
            return null;
        }
    }

    /**
    * Sets the surname
    *
    * @param string $val The surname
    *
    * @return OrgContact
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }


     /**
     * Gets the directReports
     *
     * @return array|null The directReports
     */
    public function getDirectReports()
    {
        if (array_key_exists("directReports", $this->_propDict)) {
           return $this->_propDict["directReports"];
        } else {
            return null;
        }
    }

    /**
    * Sets the directReports
    *
    * @param DirectoryObject[] $val The directReports
    *
    * @return OrgContact
    */
    public function setDirectReports($val)
    {
        $this->_propDict["directReports"] = $val;
        return $this;
    }

    /**
    * Gets the manager
    *
    * @return DirectoryObject|null The manager
    */
    public function getManager()
    {
        if (array_key_exists("manager", $this->_propDict)) {
            if (is_a($this->_propDict["manager"], "\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["manager"])) {
                return $this->_propDict["manager"];
            } else {
                $this->_propDict["manager"] = new DirectoryObject($this->_propDict["manager"]);
                return $this->_propDict["manager"];
            }
        }
        return null;
    }

    /**
    * Sets the manager
    *
    * @param DirectoryObject $val The manager
    *
    * @return OrgContact
    */
    public function setManager($val)
    {
        $this->_propDict["manager"] = $val;
        return $this;
    }


     /**
     * Gets the memberOf
     *
     * @return array|null The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists("memberOf", $this->_propDict)) {
           return $this->_propDict["memberOf"];
        } else {
            return null;
        }
    }

    /**
    * Sets the memberOf
    *
    * @param DirectoryObject[] $val The memberOf
    *
    * @return OrgContact
    */
    public function setMemberOf($val)
    {
        $this->_propDict["memberOf"] = $val;
        return $this;
    }


     /**
     * Gets the transitiveMemberOf
     *
     * @return array|null The transitiveMemberOf
     */
    public function getTransitiveMemberOf()
    {
        if (array_key_exists("transitiveMemberOf", $this->_propDict)) {
           return $this->_propDict["transitiveMemberOf"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transitiveMemberOf
    *
    * @param DirectoryObject[] $val The transitiveMemberOf
    *
    * @return OrgContact
    */
    public function setTransitiveMemberOf($val)
    {
        $this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }

}
