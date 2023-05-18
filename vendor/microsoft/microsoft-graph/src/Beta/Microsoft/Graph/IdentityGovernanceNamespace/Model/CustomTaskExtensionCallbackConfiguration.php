<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomTaskExtensionCallbackConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model;
/**
* CustomTaskExtensionCallbackConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomTaskExtensionCallbackConfiguration extends \Beta\Microsoft\Graph\Model\CustomExtensionCallbackConfiguration
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.identityGovernance.customTaskExtensionCallbackConfiguration");
    }


    /**
    * Gets the authorizedApps
    *
    * @return \Beta\Microsoft\Graph\Model\Application|null The authorizedApps
    */
    public function getAuthorizedApps()
    {
        if (array_key_exists("authorizedApps", $this->_propDict)) {
            if (is_a($this->_propDict["authorizedApps"], "\Beta\Microsoft\Graph\Model\Application") || is_null($this->_propDict["authorizedApps"])) {
                return $this->_propDict["authorizedApps"];
            } else {
                $this->_propDict["authorizedApps"] = new \Beta\Microsoft\Graph\Model\Application($this->_propDict["authorizedApps"]);
                return $this->_propDict["authorizedApps"];
            }
        }
        return null;
    }

    /**
    * Sets the authorizedApps
    *
    * @param \Beta\Microsoft\Graph\Model\Application $val The value to assign to the authorizedApps
    *
    * @return CustomTaskExtensionCallbackConfiguration The CustomTaskExtensionCallbackConfiguration
    */
    public function setAuthorizedApps($val)
    {
        $this->_propDict["authorizedApps"] = $val;
         return $this;
    }
}
