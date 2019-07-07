<?php
require 'main.php';

function create_photo($file_path, $orig_name)
{
    # Upload the received image file to Cloudinary
    $result = \Cloudinary\Uploader::upload($file_path, array(
            "tags" => "backend_photo_album",
            "public_id" => $orig_name,
    ));

    unlink($file_path);
    error_log("Upload result: " . \PhotoAlbum\ret_var_dump($result));
    \PhotoAlbum\create_photo_model($result);
    return $result;
}

$files = $_FILES["files"];
$files = is_array($files) ? $files : array( $files );
$files_data = array();
foreach ($files["tmp_name"] as $index => $value) {
    array_push($files_data, create_photo($value, $files["name"][$index]));
}

?>
<html>
<head>
    <link href="style.css" media="all" rel="stylesheet"/>
    <title>Upload succeeded!</title>
</head>
<body>

<h1>Your photo has been uploaded sucessfully!</h1>
<h2>Upload details:</h2>
<?php
foreach ($files_data as $file_data) {
    \PhotoAlbum\array_to_table($file_data);
}
?>
<br/>
<?php echo cl_image_tag($file_data['public_id'], array_merge($thumbs_params, array( "crop" => "fill" ))); ?>

<a href="list.php" class="back_link">Back to list...</a>

</body>
</html>
