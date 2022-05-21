<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsOfUseContainer File
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
* TermsOfUseContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermsOfUseContainer extends Entity
{

     /**
     * Gets the agreementAcceptances
    * Represents the current status of a user's response to a company's customizable terms of use agreement.
     *
     * @return array|null The agreementAcceptances
     */
    public function getAgreementAcceptances()
    {
        if (array_key_exists("agreementAcceptances", $this->_propDict)) {
           return $this->_propDict["agreementAcceptances"];
        } else {
            return null;
        }
    }

    /**
    * Sets the agreementAcceptances
    * Represents the current status of a user's response to a company's customizable terms of use agreement.
    *
    * @param AgreementAcceptance[] $val The agreementAcceptances
    *
    * @return TermsOfUseContainer
    */
    public function setAgreementAcceptances($val)
    {
        $this->_propDict["agreementAcceptances"] = $val;
        return $this;
    }


     /**
     * Gets the agreements
    * Represents a tenant's customizable terms of use agreement that's created and managed with Azure Active Directory (Azure AD).
     *
     * @return array|null The agreements
     */
    public function getAgreements()
    {
        if (array_key_exists("agreements", $this->_propDict)) {
           return $this->_propDict["agreements"];
        } else {
            return null;
        }
    }

    /**
    * Sets the agreements
    * Represents a tenant's customizable terms of use agreement that's created and managed with Azure Active Directory (Azure AD).
    *
    * @param Agreement[] $val The agreements
    *
    * @return TermsOfUseContainer
    */
    public function setAgreements($val)
    {
        $this->_propDict["agreements"] = $val;
        return $this;
    }

}
