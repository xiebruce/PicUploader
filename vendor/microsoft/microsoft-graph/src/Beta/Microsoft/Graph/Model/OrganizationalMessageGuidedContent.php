<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageGuidedContent File
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
* OrganizationalMessageGuidedContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageGuidedContent extends Entity
{
    /**
    * Gets the logo
    * Example of the logo that will be displayed to customers and its size requirements
    *
    * @return OrganizationalMessageLogoGuide|null The logo
    */
    public function getLogo()
    {
        if (array_key_exists("logo", $this->_propDict)) {
            if (is_a($this->_propDict["logo"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageLogoGuide") || is_null($this->_propDict["logo"])) {
                return $this->_propDict["logo"];
            } else {
                $this->_propDict["logo"] = new OrganizationalMessageLogoGuide($this->_propDict["logo"]);
                return $this->_propDict["logo"];
            }
        }
        return null;
    }

    /**
    * Sets the logo
    * Example of the logo that will be displayed to customers and its size requirements
    *
    * @param OrganizationalMessageLogoGuide $val The logo
    *
    * @return OrganizationalMessageGuidedContent
    */
    public function setLogo($val)
    {
        $this->_propDict["logo"] = $val;
        return $this;
    }


     /**
     * Gets the placementDetails
    * Contains the different types of text content that can be displayed to customers along with their localized values
     *
     * @return array|null The placementDetails
     */
    public function getPlacementDetails()
    {
        if (array_key_exists("placementDetails", $this->_propDict)) {
           return $this->_propDict["placementDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the placementDetails
    * Contains the different types of text content that can be displayed to customers along with their localized values
    *
    * @param OrganizationalMessagePlacementDetail[] $val The placementDetails
    *
    * @return OrganizationalMessageGuidedContent
    */
    public function setPlacementDetails($val)
    {
        $this->_propDict["placementDetails"] = $val;
        return $this;
    }

    /**
    * Gets the scenario
    * Indicates the scenario for the guided content. Possible values are: onboarding, lifecycle, unknownFutureValue.
    *
    * @return OrganizationalMessageScenario|null The scenario
    */
    public function getScenario()
    {
        if (array_key_exists("scenario", $this->_propDict)) {
            if (is_a($this->_propDict["scenario"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageScenario") || is_null($this->_propDict["scenario"])) {
                return $this->_propDict["scenario"];
            } else {
                $this->_propDict["scenario"] = new OrganizationalMessageScenario($this->_propDict["scenario"]);
                return $this->_propDict["scenario"];
            }
        }
        return null;
    }

    /**
    * Sets the scenario
    * Indicates the scenario for the guided content. Possible values are: onboarding, lifecycle, unknownFutureValue.
    *
    * @param OrganizationalMessageScenario $val The scenario
    *
    * @return OrganizationalMessageGuidedContent
    */
    public function setScenario($val)
    {
        $this->_propDict["scenario"] = $val;
        return $this;
    }

    /**
    * Gets the surface
    * Indicates the area where content will be displayed to customers. Possible values are: actionCenter, getStarted, softLanding, unknownFutureValue.
    *
    * @return OrganizationalMessageSurface|null The surface
    */
    public function getSurface()
    {
        if (array_key_exists("surface", $this->_propDict)) {
            if (is_a($this->_propDict["surface"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageSurface") || is_null($this->_propDict["surface"])) {
                return $this->_propDict["surface"];
            } else {
                $this->_propDict["surface"] = new OrganizationalMessageSurface($this->_propDict["surface"]);
                return $this->_propDict["surface"];
            }
        }
        return null;
    }

    /**
    * Sets the surface
    * Indicates the area where content will be displayed to customers. Possible values are: actionCenter, getStarted, softLanding, unknownFutureValue.
    *
    * @param OrganizationalMessageSurface $val The surface
    *
    * @return OrganizationalMessageGuidedContent
    */
    public function setSurface($val)
    {
        $this->_propDict["surface"] = $val;
        return $this;
    }

    /**
    * Gets the theme
    * Indicates the theme for the guided content. Possible values are: update, training, welcomeToWindows, explore, unknownFutureValue.
    *
    * @return OrganizationalMessageTheme|null The theme
    */
    public function getTheme()
    {
        if (array_key_exists("theme", $this->_propDict)) {
            if (is_a($this->_propDict["theme"], "\Beta\Microsoft\Graph\Model\OrganizationalMessageTheme") || is_null($this->_propDict["theme"])) {
                return $this->_propDict["theme"];
            } else {
                $this->_propDict["theme"] = new OrganizationalMessageTheme($this->_propDict["theme"]);
                return $this->_propDict["theme"];
            }
        }
        return null;
    }

    /**
    * Sets the theme
    * Indicates the theme for the guided content. Possible values are: update, training, welcomeToWindows, explore, unknownFutureValue.
    *
    * @param OrganizationalMessageTheme $val The theme
    *
    * @return OrganizationalMessageGuidedContent
    */
    public function setTheme($val)
    {
        $this->_propDict["theme"] = $val;
        return $this;
    }

}
