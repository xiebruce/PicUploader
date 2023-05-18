<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityContainer File
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
* IdentityContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityContainer implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new IdentityContainer
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the IdentityContainer
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the apiConnectors
    * Represents entry point for API connectors.
     *
     * @return array|null The apiConnectors
     */
    public function getApiConnectors()
    {
        if (array_key_exists("apiConnectors", $this->_propDict)) {
           return $this->_propDict["apiConnectors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the apiConnectors
    * Represents entry point for API connectors.
    *
    * @param IdentityApiConnector[] $val The apiConnectors
    *
    * @return IdentityContainer
    */
    public function setApiConnectors($val)
    {
        $this->_propDict["apiConnectors"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationEventListeners
     *
     * @return array|null The authenticationEventListeners
     */
    public function getAuthenticationEventListeners()
    {
        if (array_key_exists("authenticationEventListeners", $this->_propDict)) {
           return $this->_propDict["authenticationEventListeners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationEventListeners
    *
    * @param AuthenticationEventListener[] $val The authenticationEventListeners
    *
    * @return IdentityContainer
    */
    public function setAuthenticationEventListeners($val)
    {
        $this->_propDict["authenticationEventListeners"] = $val;
        return $this;
    }


     /**
     * Gets the b2cUserFlows
    * Represents entry point for B2C identity userflows.
     *
     * @return array|null The b2cUserFlows
     */
    public function getB2cUserFlows()
    {
        if (array_key_exists("b2cUserFlows", $this->_propDict)) {
           return $this->_propDict["b2cUserFlows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the b2cUserFlows
    * Represents entry point for B2C identity userflows.
    *
    * @param B2cIdentityUserFlow[] $val The b2cUserFlows
    *
    * @return IdentityContainer
    */
    public function setB2cUserFlows($val)
    {
        $this->_propDict["b2cUserFlows"] = $val;
        return $this;
    }


     /**
     * Gets the b2xUserFlows
    * Represents entry point for B2X and self-service sign-up identity userflows.
     *
     * @return array|null The b2xUserFlows
     */
    public function getB2xUserFlows()
    {
        if (array_key_exists("b2xUserFlows", $this->_propDict)) {
           return $this->_propDict["b2xUserFlows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the b2xUserFlows
    * Represents entry point for B2X and self-service sign-up identity userflows.
    *
    * @param B2xIdentityUserFlow[] $val The b2xUserFlows
    *
    * @return IdentityContainer
    */
    public function setB2xUserFlows($val)
    {
        $this->_propDict["b2xUserFlows"] = $val;
        return $this;
    }


     /**
     * Gets the customAuthenticationExtensions
     *
     * @return array|null The customAuthenticationExtensions
     */
    public function getCustomAuthenticationExtensions()
    {
        if (array_key_exists("customAuthenticationExtensions", $this->_propDict)) {
           return $this->_propDict["customAuthenticationExtensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customAuthenticationExtensions
    *
    * @param CustomAuthenticationExtension[] $val The customAuthenticationExtensions
    *
    * @return IdentityContainer
    */
    public function setCustomAuthenticationExtensions($val)
    {
        $this->_propDict["customAuthenticationExtensions"] = $val;
        return $this;
    }


     /**
     * Gets the identityProviders
    * Represents entry point for identity provider base.
     *
     * @return array|null The identityProviders
     */
    public function getIdentityProviders()
    {
        if (array_key_exists("identityProviders", $this->_propDict)) {
           return $this->_propDict["identityProviders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityProviders
    * Represents entry point for identity provider base.
    *
    * @param IdentityProviderBase[] $val The identityProviders
    *
    * @return IdentityContainer
    */
    public function setIdentityProviders($val)
    {
        $this->_propDict["identityProviders"] = $val;
        return $this;
    }


     /**
     * Gets the userFlowAttributes
    * Represents entry point for identity userflow attributes.
     *
     * @return array|null The userFlowAttributes
     */
    public function getUserFlowAttributes()
    {
        if (array_key_exists("userFlowAttributes", $this->_propDict)) {
           return $this->_propDict["userFlowAttributes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userFlowAttributes
    * Represents entry point for identity userflow attributes.
    *
    * @param IdentityUserFlowAttribute[] $val The userFlowAttributes
    *
    * @return IdentityContainer
    */
    public function setUserFlowAttributes($val)
    {
        $this->_propDict["userFlowAttributes"] = $val;
        return $this;
    }


     /**
     * Gets the userFlows
     *
     * @return array|null The userFlows
     */
    public function getUserFlows()
    {
        if (array_key_exists("userFlows", $this->_propDict)) {
           return $this->_propDict["userFlows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userFlows
    *
    * @param IdentityUserFlow[] $val The userFlows
    *
    * @return IdentityContainer
    */
    public function setUserFlows($val)
    {
        $this->_propDict["userFlows"] = $val;
        return $this;
    }

    /**
    * Gets the conditionalAccess
    * the entry point for the Conditional Access (CA) object model.
    *
    * @return ConditionalAccessRoot|null The conditionalAccess
    */
    public function getConditionalAccess()
    {
        if (array_key_exists("conditionalAccess", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccess"], "\Beta\Microsoft\Graph\Model\ConditionalAccessRoot") || is_null($this->_propDict["conditionalAccess"])) {
                return $this->_propDict["conditionalAccess"];
            } else {
                $this->_propDict["conditionalAccess"] = new ConditionalAccessRoot($this->_propDict["conditionalAccess"]);
                return $this->_propDict["conditionalAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionalAccess
    * the entry point for the Conditional Access (CA) object model.
    *
    * @param ConditionalAccessRoot $val The conditionalAccess
    *
    * @return IdentityContainer
    */
    public function setConditionalAccess($val)
    {
        $this->_propDict["conditionalAccess"] = $val;
        return $this;
    }

    /**
    * Gets the continuousAccessEvaluationPolicy
    * Represents entry point for continuous access evaluation policy.
    *
    * @return ContinuousAccessEvaluationPolicy|null The continuousAccessEvaluationPolicy
    */
    public function getContinuousAccessEvaluationPolicy()
    {
        if (array_key_exists("continuousAccessEvaluationPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["continuousAccessEvaluationPolicy"], "\Beta\Microsoft\Graph\Model\ContinuousAccessEvaluationPolicy") || is_null($this->_propDict["continuousAccessEvaluationPolicy"])) {
                return $this->_propDict["continuousAccessEvaluationPolicy"];
            } else {
                $this->_propDict["continuousAccessEvaluationPolicy"] = new ContinuousAccessEvaluationPolicy($this->_propDict["continuousAccessEvaluationPolicy"]);
                return $this->_propDict["continuousAccessEvaluationPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the continuousAccessEvaluationPolicy
    * Represents entry point for continuous access evaluation policy.
    *
    * @param ContinuousAccessEvaluationPolicy $val The continuousAccessEvaluationPolicy
    *
    * @return IdentityContainer
    */
    public function setContinuousAccessEvaluationPolicy($val)
    {
        $this->_propDict["continuousAccessEvaluationPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return IdentityContainer
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
