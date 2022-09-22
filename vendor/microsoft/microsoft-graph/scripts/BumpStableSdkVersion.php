<?php

include_once 'SdkVersionUtils.php';

const GRAPH_CONSTANTS_FILEPATH = "./src/Core/GraphConstants.php";

$packagistVersion = getLatestPackagistVersion();
if (!$packagistVersion) {
    echo "Failed to fetch latest stable sdk version";
    return;
}
$bumpedSdkVersion = incrementVersion($packagistVersion);
echo "Version after increment: {$bumpedSdkVersion}\n";
updateGraphConstants(GRAPH_CONSTANTS_FILEPATH, $bumpedSdkVersion);
updateReadme($bumpedSdkVersion);
updateDocs($packagistVersion, $bumpedSdkVersion);
