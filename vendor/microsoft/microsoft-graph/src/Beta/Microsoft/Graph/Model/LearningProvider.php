<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LearningProvider File
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
* LearningProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LearningProvider extends Entity
{
    /**
    * Gets the displayName
    * The display name that appears in Viva Learning. Required.
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
    * The display name that appears in Viva Learning. Required.
    *
    * @param string $val The displayName
    *
    * @return LearningProvider
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the loginWebUrl
    * Authentication URL to access the courses for the provider. Optional.
    *
    * @return string|null The loginWebUrl
    */
    public function getLoginWebUrl()
    {
        if (array_key_exists("loginWebUrl", $this->_propDict)) {
            return $this->_propDict["loginWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the loginWebUrl
    * Authentication URL to access the courses for the provider. Optional.
    *
    * @param string $val The loginWebUrl
    *
    * @return LearningProvider
    */
    public function setLoginWebUrl($val)
    {
        $this->_propDict["loginWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the longLogoWebUrlForDarkTheme
    * The long logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
    *
    * @return string|null The longLogoWebUrlForDarkTheme
    */
    public function getLongLogoWebUrlForDarkTheme()
    {
        if (array_key_exists("longLogoWebUrlForDarkTheme", $this->_propDict)) {
            return $this->_propDict["longLogoWebUrlForDarkTheme"];
        } else {
            return null;
        }
    }

    /**
    * Sets the longLogoWebUrlForDarkTheme
    * The long logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
    *
    * @param string $val The longLogoWebUrlForDarkTheme
    *
    * @return LearningProvider
    */
    public function setLongLogoWebUrlForDarkTheme($val)
    {
        $this->_propDict["longLogoWebUrlForDarkTheme"] = $val;
        return $this;
    }

    /**
    * Gets the longLogoWebUrlForLightTheme
    * The long logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering  within the Viva Learning app. Required.
    *
    * @return string|null The longLogoWebUrlForLightTheme
    */
    public function getLongLogoWebUrlForLightTheme()
    {
        if (array_key_exists("longLogoWebUrlForLightTheme", $this->_propDict)) {
            return $this->_propDict["longLogoWebUrlForLightTheme"];
        } else {
            return null;
        }
    }

    /**
    * Sets the longLogoWebUrlForLightTheme
    * The long logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering  within the Viva Learning app. Required.
    *
    * @param string $val The longLogoWebUrlForLightTheme
    *
    * @return LearningProvider
    */
    public function setLongLogoWebUrlForLightTheme($val)
    {
        $this->_propDict["longLogoWebUrlForLightTheme"] = $val;
        return $this;
    }

    /**
    * Gets the squareLogoWebUrlForDarkTheme
    * The square logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
    *
    * @return string|null The squareLogoWebUrlForDarkTheme
    */
    public function getSquareLogoWebUrlForDarkTheme()
    {
        if (array_key_exists("squareLogoWebUrlForDarkTheme", $this->_propDict)) {
            return $this->_propDict["squareLogoWebUrlForDarkTheme"];
        } else {
            return null;
        }
    }

    /**
    * Sets the squareLogoWebUrlForDarkTheme
    * The square logo URL for the dark mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
    *
    * @param string $val The squareLogoWebUrlForDarkTheme
    *
    * @return LearningProvider
    */
    public function setSquareLogoWebUrlForDarkTheme($val)
    {
        $this->_propDict["squareLogoWebUrlForDarkTheme"] = $val;
        return $this;
    }

    /**
    * Gets the squareLogoWebUrlForLightTheme
    * The square logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
    *
    * @return string|null The squareLogoWebUrlForLightTheme
    */
    public function getSquareLogoWebUrlForLightTheme()
    {
        if (array_key_exists("squareLogoWebUrlForLightTheme", $this->_propDict)) {
            return $this->_propDict["squareLogoWebUrlForLightTheme"];
        } else {
            return null;
        }
    }

    /**
    * Sets the squareLogoWebUrlForLightTheme
    * The square logo URL for the light mode that needs to be a publicly accessible image. This image would be saved to the blob storage of Viva Learning for rendering within the Viva Learning app. Required.
    *
    * @param string $val The squareLogoWebUrlForLightTheme
    *
    * @return LearningProvider
    */
    public function setSquareLogoWebUrlForLightTheme($val)
    {
        $this->_propDict["squareLogoWebUrlForLightTheme"] = $val;
        return $this;
    }


     /**
     * Gets the learningContents
    * Learning catalog items for the provider.
     *
     * @return array|null The learningContents
     */
    public function getLearningContents()
    {
        if (array_key_exists("learningContents", $this->_propDict)) {
           return $this->_propDict["learningContents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the learningContents
    * Learning catalog items for the provider.
    *
    * @param LearningContent[] $val The learningContents
    *
    * @return LearningProvider
    */
    public function setLearningContents($val)
    {
        $this->_propDict["learningContents"] = $val;
        return $this;
    }


     /**
     * Gets the learningCourseActivities
     *
     * @return array|null The learningCourseActivities
     */
    public function getLearningCourseActivities()
    {
        if (array_key_exists("learningCourseActivities", $this->_propDict)) {
           return $this->_propDict["learningCourseActivities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the learningCourseActivities
    *
    * @param LearningCourseActivity[] $val The learningCourseActivities
    *
    * @return LearningProvider
    */
    public function setLearningCourseActivities($val)
    {
        $this->_propDict["learningCourseActivities"] = $val;
        return $this;
    }

}
