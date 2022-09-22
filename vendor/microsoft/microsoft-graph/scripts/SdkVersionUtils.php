<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 *
 * Bumps up the SDK version in $filePathsToUpdate based on the latest published package version on Packagist
 *
 * Assumptions:
 *  - Script is run from the repo root
 *  - Script is run on a Unix environment (affects file path separator to files)
 *  - Packagist returns tagged versions in descending order (latest release first)
 */

const SDK_VERSION_VAR_NAME = "SDK_VERSION"; # Name of version variable in GraphConstants.php
const PACKAGE_NAME = "microsoft/microsoft-graph";
const PACKAGIST_ENDPOINT = "https://packagist.org/packages/".PACKAGE_NAME.".json";
const README_FILEPATH = "./README.md";
const DOCS_FILEPATH = "./docs/classes/Microsoft-Graph-Core-GraphConstants.html";

/**
 * Gets latest stable packagist version if $stable == true, else gets the latest Release Candidate
 *
 * @param boolean $stable
 * @return string
 */
function getLatestPackagistVersion(bool $stable = true): string
{
    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, PACKAGIST_ENDPOINT);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_TIMEOUT, 100);
    curl_setopt($handle, CURLOPT_FAILONERROR, true);

    echo "Fetching latest SDK version from " . PACKAGIST_ENDPOINT . "\n";
    $response = curl_exec($handle);

    if (curl_error($handle)) {
        throw new Exception("Failed to get latest packagist version: ". curl_error($handle));
    }

    curl_close($handle);

    $responseJson = json_decode($response, true);
    if (!array_key_exists("package", $responseJson)
        || !array_key_exists("versions", $responseJson["package"])
        || empty($responseJson["package"]["versions"])) {

        throw new Exception("Unable to find versions in the packagist response JSON: ". $responseJson);
    }

    $versions = $responseJson["package"]["versions"];
    foreach (array_keys($versions) as $version) {
        # Ignore branch versions
        if (stripos($version, "dev") === false) {
            if ($stable) {
                if (stripos($version, "RC") === false) {
                    echo "Latest packagist version: {$version}\n";
                    return $version;
                }
                continue;
            }
            if (stripos($version, "RC")) {
                echo "Latest packagist version: {$version}\n";
                return $version;
            }
        }
    }
    return '';
}

function getGraphConstantsSdkVersion()
{
    $fileContents = file_get_contents(GRAPH_CONSTANTS_FILEPATH);
    if ($fileContents) {
        $pattern = '/'. SDK_VERSION_VAR_NAME . '\s+=\s+".+"/';
        $regexMatches = [];
        preg_match($pattern, $fileContents, $regexMatches);
        if ($regexMatches && $regexMatches[0]) {
            $split = explode('"', $regexMatches[0]);
            return $split[1];
        }
    }
}

function incrementVersion(string $version): string
{
    $splitVersion = explode('.', $version);
    $rcMatches = explode('RC', $splitVersion[2]);
    if ($rcMatches && sizeof($rcMatches) > 1) {
        # Increment release candidate
        $rcVersion = ($rcMatches[1]) ? intval($rcMatches[1]) + 1 : 2;
        $splitVersion[2] = "0-RC{$rcVersion}";
    } else {
        # Increment minor version
        $splitVersion[1] = strval(intval($splitVersion[1]) + 1);
        # Set patch
        $splitVersion[2] = '0';
    }
    return implode(".", $splitVersion);
}

function updateReadme(string $bumpedVersion)
{
    echo "Reading contents at ".README_FILEPATH."...\n";
    $fileContents = file_get_contents(README_FILEPATH);
    if ($fileContents) {
        $package = str_replace('/', '\/', PACKAGE_NAME);
        $pattern = '/"'.$package.'"\s*:\s*".+"/';
        $replacement = '"'.PACKAGE_NAME.'": "^'.$bumpedVersion.'"';
        $numReplacements = 0;
        $updatedContents = preg_replace($pattern, $replacement, $fileContents, -1, $numReplacements);
        if (!$numReplacements) {
            echo "Unable to find and replace SDK version\n";
            return;
        }
        echo file_put_contents(README_FILEPATH, $updatedContents) ? "Successfully updated ".README_FILEPATH. "\n" : "Failed to update ".README_FILEPATH."\n";
        return;
    }
    echo "Could not read contents at ".README_FILEPATH."\n";
}

function updateGraphConstants(string $filePath, string $bumpedVersion)
{
    echo "Reading contents at {$filePath}...\n";
    $fileContents = file_get_contents($filePath);
    if ($fileContents) {
        $pattern = '/'. SDK_VERSION_VAR_NAME . '\s+=\s+".+"/';
        $replacement = SDK_VERSION_VAR_NAME . " = \"{$bumpedVersion}\"";
        $numReplacements = 0;
        $updatedContents = preg_replace($pattern, $replacement, $fileContents, -1, $numReplacements);
        if (!$numReplacements) {
            echo "Unable to find and replace SDK version\n";
            return;
        }
        echo file_put_contents($filePath, $updatedContents) ? "Successfully updated {$filePath}\n" : "Failed to update {$filePath}\n";
        return;
    }
    echo "Could not read contents at {$filePath}\n";
}

function updateDocs(string $packagistVersion, string $bumpedVersion)
{
    echo "Reading contents at ".DOCS_FILEPATH."...\n";
    $fileContents = file_get_contents(DOCS_FILEPATH);
    if ($fileContents) {
        $pattern = '/'.$packagistVersion.'/';
        $updatedContents = preg_replace($pattern, $bumpedVersion, $fileContents, -1, $numReplacements);
        if (!$numReplacements) {
            echo "Unable to find and replace SDK version\n";
            return;
        }
        echo file_put_contents(DOCS_FILEPATH, $updatedContents) ? "Successfully updated ".DOCS_FILEPATH."\n" : "Failed to update ".DOCS_FILEPATH."\n";
        return;
    }
    echo "Could not read contents at ".DOCS_FILEPATH."\n";
}
