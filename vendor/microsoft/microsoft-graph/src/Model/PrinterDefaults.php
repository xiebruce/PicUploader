<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterDefaults File
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
* PrinterDefaults class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterDefaults extends Entity
{

    /**
    * Gets the colorMode
    * The default color mode to use when printing the document. Valid values are described in the following table.
    *
    * @return PrintColorMode|null The colorMode
    */
    public function getColorMode()
    {
        if (array_key_exists("colorMode", $this->_propDict)) {
            if (is_a($this->_propDict["colorMode"], "\Microsoft\Graph\Model\PrintColorMode") || is_null($this->_propDict["colorMode"])) {
                return $this->_propDict["colorMode"];
            } else {
                $this->_propDict["colorMode"] = new PrintColorMode($this->_propDict["colorMode"]);
                return $this->_propDict["colorMode"];
            }
        }
        return null;
    }

    /**
    * Sets the colorMode
    * The default color mode to use when printing the document. Valid values are described in the following table.
    *
    * @param PrintColorMode $val The value to assign to the colorMode
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setColorMode($val)
    {
        $this->_propDict["colorMode"] = $val;
         return $this;
    }
    /**
    * Gets the contentType
    * The default content (MIME) type to use when processing documents.
    *
    * @return string|null The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentType
    * The default content (MIME) type to use when processing documents.
    *
    * @param string $val The value of the contentType
    *
    * @return PrinterDefaults
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    /**
    * Gets the copiesPerJob
    * The default number of copies printed per job.
    *
    * @return int|null The copiesPerJob
    */
    public function getCopiesPerJob()
    {
        if (array_key_exists("copiesPerJob", $this->_propDict)) {
            return $this->_propDict["copiesPerJob"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copiesPerJob
    * The default number of copies printed per job.
    *
    * @param int $val The value of the copiesPerJob
    *
    * @return PrinterDefaults
    */
    public function setCopiesPerJob($val)
    {
        $this->_propDict["copiesPerJob"] = $val;
        return $this;
    }
    /**
    * Gets the dpi
    * The default resolution in DPI to use when printing the job.
    *
    * @return int|null The dpi
    */
    public function getDpi()
    {
        if (array_key_exists("dpi", $this->_propDict)) {
            return $this->_propDict["dpi"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dpi
    * The default resolution in DPI to use when printing the job.
    *
    * @param int $val The value of the dpi
    *
    * @return PrinterDefaults
    */
    public function setDpi($val)
    {
        $this->_propDict["dpi"] = $val;
        return $this;
    }

    /**
    * Gets the duplexMode
    * The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
    *
    * @return PrintDuplexMode|null The duplexMode
    */
    public function getDuplexMode()
    {
        if (array_key_exists("duplexMode", $this->_propDict)) {
            if (is_a($this->_propDict["duplexMode"], "\Microsoft\Graph\Model\PrintDuplexMode") || is_null($this->_propDict["duplexMode"])) {
                return $this->_propDict["duplexMode"];
            } else {
                $this->_propDict["duplexMode"] = new PrintDuplexMode($this->_propDict["duplexMode"]);
                return $this->_propDict["duplexMode"];
            }
        }
        return null;
    }

    /**
    * Sets the duplexMode
    * The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
    *
    * @param PrintDuplexMode $val The value to assign to the duplexMode
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setDuplexMode($val)
    {
        $this->_propDict["duplexMode"] = $val;
         return $this;
    }

    /**
    * Gets the finishings
    * The default set of finishings to apply to print jobs. Valid values are described in the following table.
    *
    * @return PrintFinishing|null The finishings
    */
    public function getFinishings()
    {
        if (array_key_exists("finishings", $this->_propDict)) {
            if (is_a($this->_propDict["finishings"], "\Microsoft\Graph\Model\PrintFinishing") || is_null($this->_propDict["finishings"])) {
                return $this->_propDict["finishings"];
            } else {
                $this->_propDict["finishings"] = new PrintFinishing($this->_propDict["finishings"]);
                return $this->_propDict["finishings"];
            }
        }
        return null;
    }

    /**
    * Sets the finishings
    * The default set of finishings to apply to print jobs. Valid values are described in the following table.
    *
    * @param PrintFinishing $val The value to assign to the finishings
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setFinishings($val)
    {
        $this->_propDict["finishings"] = $val;
         return $this;
    }
    /**
    * Gets the fitPdfToPage
    * The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
    *
    * @return bool|null The fitPdfToPage
    */
    public function getFitPdfToPage()
    {
        if (array_key_exists("fitPdfToPage", $this->_propDict)) {
            return $this->_propDict["fitPdfToPage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fitPdfToPage
    * The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
    *
    * @param bool $val The value of the fitPdfToPage
    *
    * @return PrinterDefaults
    */
    public function setFitPdfToPage($val)
    {
        $this->_propDict["fitPdfToPage"] = $val;
        return $this;
    }
    /**
    * Gets the inputBin
    * The default input bin that serves as the paper source.
    *
    * @return string|null The inputBin
    */
    public function getInputBin()
    {
        if (array_key_exists("inputBin", $this->_propDict)) {
            return $this->_propDict["inputBin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inputBin
    * The default input bin that serves as the paper source.
    *
    * @param string $val The value of the inputBin
    *
    * @return PrinterDefaults
    */
    public function setInputBin($val)
    {
        $this->_propDict["inputBin"] = $val;
        return $this;
    }
    /**
    * Gets the mediaColor
    * The default media (such as paper) color to print the document on.
    *
    * @return string|null The mediaColor
    */
    public function getMediaColor()
    {
        if (array_key_exists("mediaColor", $this->_propDict)) {
            return $this->_propDict["mediaColor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaColor
    * The default media (such as paper) color to print the document on.
    *
    * @param string $val The value of the mediaColor
    *
    * @return PrinterDefaults
    */
    public function setMediaColor($val)
    {
        $this->_propDict["mediaColor"] = $val;
        return $this;
    }
    /**
    * Gets the mediaSize
    * The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
    *
    * @return string|null The mediaSize
    */
    public function getMediaSize()
    {
        if (array_key_exists("mediaSize", $this->_propDict)) {
            return $this->_propDict["mediaSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaSize
    * The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
    *
    * @param string $val The value of the mediaSize
    *
    * @return PrinterDefaults
    */
    public function setMediaSize($val)
    {
        $this->_propDict["mediaSize"] = $val;
        return $this;
    }
    /**
    * Gets the mediaType
    * The default media (such as paper) type to print the document on.
    *
    * @return string|null The mediaType
    */
    public function getMediaType()
    {
        if (array_key_exists("mediaType", $this->_propDict)) {
            return $this->_propDict["mediaType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaType
    * The default media (such as paper) type to print the document on.
    *
    * @param string $val The value of the mediaType
    *
    * @return PrinterDefaults
    */
    public function setMediaType($val)
    {
        $this->_propDict["mediaType"] = $val;
        return $this;
    }

    /**
    * Gets the multipageLayout
    * The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
    *
    * @return PrintMultipageLayout|null The multipageLayout
    */
    public function getMultipageLayout()
    {
        if (array_key_exists("multipageLayout", $this->_propDict)) {
            if (is_a($this->_propDict["multipageLayout"], "\Microsoft\Graph\Model\PrintMultipageLayout") || is_null($this->_propDict["multipageLayout"])) {
                return $this->_propDict["multipageLayout"];
            } else {
                $this->_propDict["multipageLayout"] = new PrintMultipageLayout($this->_propDict["multipageLayout"]);
                return $this->_propDict["multipageLayout"];
            }
        }
        return null;
    }

    /**
    * Sets the multipageLayout
    * The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
    *
    * @param PrintMultipageLayout $val The value to assign to the multipageLayout
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setMultipageLayout($val)
    {
        $this->_propDict["multipageLayout"] = $val;
         return $this;
    }

    /**
    * Gets the orientation
    * The default orientation to use when printing the document. Valid values are described in the following table.
    *
    * @return PrintOrientation|null The orientation
    */
    public function getOrientation()
    {
        if (array_key_exists("orientation", $this->_propDict)) {
            if (is_a($this->_propDict["orientation"], "\Microsoft\Graph\Model\PrintOrientation") || is_null($this->_propDict["orientation"])) {
                return $this->_propDict["orientation"];
            } else {
                $this->_propDict["orientation"] = new PrintOrientation($this->_propDict["orientation"]);
                return $this->_propDict["orientation"];
            }
        }
        return null;
    }

    /**
    * Sets the orientation
    * The default orientation to use when printing the document. Valid values are described in the following table.
    *
    * @param PrintOrientation $val The value to assign to the orientation
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setOrientation($val)
    {
        $this->_propDict["orientation"] = $val;
         return $this;
    }
    /**
    * Gets the outputBin
    * The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
    *
    * @return string|null The outputBin
    */
    public function getOutputBin()
    {
        if (array_key_exists("outputBin", $this->_propDict)) {
            return $this->_propDict["outputBin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outputBin
    * The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
    *
    * @param string $val The value of the outputBin
    *
    * @return PrinterDefaults
    */
    public function setOutputBin($val)
    {
        $this->_propDict["outputBin"] = $val;
        return $this;
    }
    /**
    * Gets the pagesPerSheet
    * The default number of document pages to print on each sheet.
    *
    * @return int|null The pagesPerSheet
    */
    public function getPagesPerSheet()
    {
        if (array_key_exists("pagesPerSheet", $this->_propDict)) {
            return $this->_propDict["pagesPerSheet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pagesPerSheet
    * The default number of document pages to print on each sheet.
    *
    * @param int $val The value of the pagesPerSheet
    *
    * @return PrinterDefaults
    */
    public function setPagesPerSheet($val)
    {
        $this->_propDict["pagesPerSheet"] = $val;
        return $this;
    }

    /**
    * Gets the quality
    * The default quality to use when printing the document. Valid values are described in the following table.
    *
    * @return PrintQuality|null The quality
    */
    public function getQuality()
    {
        if (array_key_exists("quality", $this->_propDict)) {
            if (is_a($this->_propDict["quality"], "\Microsoft\Graph\Model\PrintQuality") || is_null($this->_propDict["quality"])) {
                return $this->_propDict["quality"];
            } else {
                $this->_propDict["quality"] = new PrintQuality($this->_propDict["quality"]);
                return $this->_propDict["quality"];
            }
        }
        return null;
    }

    /**
    * Sets the quality
    * The default quality to use when printing the document. Valid values are described in the following table.
    *
    * @param PrintQuality $val The value to assign to the quality
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setQuality($val)
    {
        $this->_propDict["quality"] = $val;
         return $this;
    }

    /**
    * Gets the scaling
    * Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
    *
    * @return PrintScaling|null The scaling
    */
    public function getScaling()
    {
        if (array_key_exists("scaling", $this->_propDict)) {
            if (is_a($this->_propDict["scaling"], "\Microsoft\Graph\Model\PrintScaling") || is_null($this->_propDict["scaling"])) {
                return $this->_propDict["scaling"];
            } else {
                $this->_propDict["scaling"] = new PrintScaling($this->_propDict["scaling"]);
                return $this->_propDict["scaling"];
            }
        }
        return null;
    }

    /**
    * Sets the scaling
    * Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
    *
    * @param PrintScaling $val The value to assign to the scaling
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setScaling($val)
    {
        $this->_propDict["scaling"] = $val;
         return $this;
    }
}
