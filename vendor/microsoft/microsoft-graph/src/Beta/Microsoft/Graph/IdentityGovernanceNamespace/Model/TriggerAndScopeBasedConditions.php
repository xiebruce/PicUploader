<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TriggerAndScopeBasedConditions File
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
* TriggerAndScopeBasedConditions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TriggerAndScopeBasedConditions extends WorkflowExecutionConditions
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.identityGovernance.triggerAndScopeBasedConditions");
    }


    /**
    * Gets the scope
    * Defines who the workflow runs for.
    *
    * @return \Beta\Microsoft\Graph\Model\SubjectSet|null The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "\Beta\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["scope"])) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new \Beta\Microsoft\Graph\Model\SubjectSet($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }

    /**
    * Sets the scope
    * Defines who the workflow runs for.
    *
    * @param \Beta\Microsoft\Graph\Model\SubjectSet $val The value to assign to the scope
    *
    * @return TriggerAndScopeBasedConditions The TriggerAndScopeBasedConditions
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
         return $this;
    }

    /**
    * Gets the trigger
    * What triggers a workflow to run.
    *
    * @return WorkflowExecutionTrigger|null The trigger
    */
    public function getTrigger()
    {
        if (array_key_exists("trigger", $this->_propDict)) {
            if (is_a($this->_propDict["trigger"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\WorkflowExecutionTrigger") || is_null($this->_propDict["trigger"])) {
                return $this->_propDict["trigger"];
            } else {
                $this->_propDict["trigger"] = new WorkflowExecutionTrigger($this->_propDict["trigger"]);
                return $this->_propDict["trigger"];
            }
        }
        return null;
    }

    /**
    * Sets the trigger
    * What triggers a workflow to run.
    *
    * @param WorkflowExecutionTrigger $val The value to assign to the trigger
    *
    * @return TriggerAndScopeBasedConditions The TriggerAndScopeBasedConditions
    */
    public function setTrigger($val)
    {
        $this->_propDict["trigger"] = $val;
         return $this;
    }
}
