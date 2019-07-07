<?php
namespace PhotoAlbum;

require __DIR__ . '/lib/rb.php';
require 'autoloader.php';

error_reporting(E_ALL | E_STRICT);

// Sets up Cloudinary's parameters and RB's DB
include 'settings.php';

// Global settings
$cors_location = "http://{$_SERVER['HTTP_HOST']}/lib/cloudinary_cors.html";
if (array_key_exists('REQUEST_SCHEME', $_SERVER)) {
    $dir = dirname($_SERVER['SCRIPT_NAME']);
    $cors_location = "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['SERVER_NAME']}{$dir}/lib/cloudinary_cors.html";
}

$thumbs_params = array('format' => 'jpg', 'height' => 150, 'width' => 150, 'class' => 'thumbnail inline');

// Helper functions
function ret_var_dump($var)
{
    ob_start();
    var_dump($var);
    return ob_get_clean();
}

function array_to_table($array)
{
    $saved_error_reporting = error_reporting(0);
    echo '<table class="info">';
    foreach ($array as $key => $value) {
        if ($key != 'class') {
            if ($key == 'url' || $key == 'secure_url') {
                $display_value = '"' . $value . '"';
            } else {
                $display_value = json_encode($value);
            }
            echo "<tr><td>{$key}:</td><td>{$display_value}</td></tr>";
        }
    }
    echo '</table>';
    error_reporting($saved_error_reporting);
}

function create_photo_model($options = array())
{
    $photo = \R::dispense('photo');

    foreach ($options as $key => $value) {
        if ($key != 'tags') {
            $photo->{$key} = $value;
        }
    }

    # Add metadata we want to keep:
    $photo->moderated = false;
    $photo->created_at = (array_key_exists('created_at', $photo) ?
        \DateTime::createFromFormat(\DateTime::ISO8601, $photo->created_at) :
        \R::isoDateTime());

    \R::store($photo);
}
