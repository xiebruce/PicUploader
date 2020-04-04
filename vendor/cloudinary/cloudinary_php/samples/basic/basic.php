<?php

if (is_file(__DIR__ . '/../../vendor/autoload.php') && is_readable(__DIR__ . '/../../vendor/autoload.php')) {
    require_once __DIR__.'/../../vendor/autoload.php';
} else {
    // Fallback to legacy autoloader
    require_once __DIR__.'/../../autoload.php';
    require_once __DIR__.'/../../src/Helpers.php';
}

if (file_exists('settings.php')) {
    include 'settings.php';
}

$sample_paths = array(
    'pizza' => getcwd() . DIRECTORY_SEPARATOR . 'pizza.jpg',
    'lake' => getcwd() . DIRECTORY_SEPARATOR . 'lake.jpg',
    'couple' => 'http://res.cloudinary.com/demo/image/upload/couple.jpg',
);


$default_upload_options = array('tags' => 'basic_sample');
$eager_params = array('width' => 200, 'height' => 150, 'crop' => 'scale');
$files = array();


/**
 * This function, when called uploads all files into your Cloudinary storage and saves the
 * metadata to the $files array.
 */
function do_uploads()
{
    global $files, $sample_paths, $default_upload_options, $eager_params;

    # public_id will be generated on Cloudinary's backend.
    $files['unnamed_local'] = \Cloudinary\Uploader::upload($sample_paths['pizza'], $default_upload_options);

    # Same image, uploaded with a public_id
    $files['named_local'] = \Cloudinary\Uploader::upload(
        $sample_paths['pizza'],
        array_merge(
            $default_upload_options,
            array('public_id' => 'custom_name')
        )
    );

    # Eager transformations are applied as soon as the file is uploaded, instead of waiting
    # for a user to request them.
    $files['eager'] = \Cloudinary\Uploader::upload(
        $sample_paths['lake'],
        array_merge(
            $default_upload_options,
            array(
                'public_id' => 'eager_custom_name',
                'eager' => $eager_params,
            )
        )
    );

    # In the two following examples, the file is fetched from a remote URL and stored in Cloudinary.
    # This allows you to apply the same transformations, and serve those using Cloudinary's CDN layer.
    $files['remote'] = \Cloudinary\Uploader::upload(
        $sample_paths['couple'],
        $default_upload_options
    );

    $files['remote_trans'] = \Cloudinary\Uploader::upload(
        $sample_paths['couple'],
        array_merge(
            $default_upload_options,
            array(
                'width' => 500,
                'height' => 500,
                'crop' => 'fit',
                'effect' => 'saturation:-70',
            )
        )
    );
}

/**
 * Output an image in HTML along with provided caption and public_id
 *
 * @param        $img
 * @param array  $options
 * @param string $caption
 */
function show_image($img, $options = array(), $caption = '')
{
    $options['format'] = $img['format'];
    $transformation_url = cloudinary_url($img['public_id'], $options);

    echo '<div class="item">';
    echo '<div class="caption">' . $caption . '</div>';
    echo '<a href="' . $img['url'] . '" target="_blank">' . cl_image_tag($img['public_id'], $options) . '</a>';
    echo '<div class="public_id">' . $img['public_id'] . '</div>';

    echo '<div class="link"><a target="_blank" href="' . $transformation_url . '">' . $transformation_url . '</a></div>';
    echo '</div>';
}

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Cloudinary - Basic PHP Sample</title>
    <link rel="shortcut icon"
          href="<?php echo cloudinary_url('http://cloudinary.com/favicon.png', array('type' => 'fetch')); ?>"/>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            color: #333;
        }

        .item {
            margin: 20px;
            width: 600px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ccc
        }

        .caption {
            margin-bottom: 10px;
            font-weight: bold;
            color: #0b63b6;
        }

        .public_id {
            margin-top: 5px;
            font-size: 12px;
            color: #666;
        }

        h1 {
            color: #0e2953;
        }

        h2, h3 {
            color: #0e5e01;
        }

        .link {
            margin-top: 5px;
        }

        .link a {
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Cloudinary - Basic PHP Sample</h1>
    <h2>Uploading ... </h2>
    <?php do_uploads(); ?>
    <h3>... Done uploading!</h3>

<?php
    show_image(
        $files['unnamed_local'],
        array('width' => 200, 'height' => 150, 'crop' => 'fill'),
        'Local file, Fill 200x150'
    );

    show_image(
        $files['named_local'],
        array('width' => 200, 'height' => 150, 'crop' => 'fit'),
        'Local file, custom public ID, Fit into 200x150'
    );

    show_image(
        $files['eager'],
        $eager_params,
        'Local file, Eager trasnformation of scaling to 200x150'
    );

    show_image(
        $files['remote'],
        array('width' => 200, 'height' => 150, 'crop' => 'thumb', 'gravity' => 'faces'),
        'Uploaded remote image, Face detection based 200x150 thumbnail'
    );

    show_image(
        $files['remote_trans'],
        array('width' => 200,
              'height' => 150,
              'crop' => 'fill',
              'gravity' => 'face',
              'radius' => 10,
              'effect' => 'sepia'
        ),
        'Uploaded remote image, Fill 200x150, round corners, apply the sepia effect'
    );
?>
</body>
</html>
