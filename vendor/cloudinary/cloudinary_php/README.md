[![Build Status](https://travis-ci.org/cloudinary/cloudinary_php.svg)](https://travis-ci.org/cloudinary/cloudinary_php) [![license](https://img.shields.io/github/license/cloudinary/cloudinary_php.svg?maxAge=2592000)]() [![Packagist](https://img.shields.io/packagist/v/cloudinary/cloudinary_php.svg?maxAge=2592000)]() [![Packagist](https://img.shields.io/packagist/dt/cloudinary/cloudinary_php.svg?maxAge=2592000)]()

Cloudinary
==========

Cloudinary is a cloud service that offers a solution to a web application's entire image management pipeline. 

Easily upload images to the cloud. Automatically perform smart image resizing, cropping and conversion without installing any complex software. Integrate Facebook or Twitter profile image extraction in a snap, in any dimension and style to match your website's graphics requirements. Images are seamlessly delivered through a fast CDN, and much much more. 

Cloudinary offers comprehensive APIs and administration capabilities and is easy to integrate with any web application, existing or new.

Cloudinary provides URL and HTTP based APIs that can be easily integrated with any Web development framework. 

For PHP, Cloudinary provides an extension for simplifying the integration even further.

## Getting started guide
![](http://res.cloudinary.com/cloudinary/image/upload/see_more_bullet.png)  **Take a look at our [Getting started guide for PHP](http://cloudinary.com/documentation/php_integration#getting_started_guide)**.


## CakePHP ##
Dedicated CakePHP plugin is also available. You can browse the code, installation and usage information [at the `cloudinary_cake_php` repository](https://github.com/cloudinary/cloudinary_cake_php).

## Setup ######################################################################

You can install through composer with:

`composer require cloudinary/cloudinary_php`

Or download cloudinary_php from [here](https://github.com/cloudinary/cloudinary_php/tarball/master)

*Note: cloudinary_php require PHP 5.4*

## Try it right away

Sign up for a [free account](https://cloudinary.com/users/register/free) so you can try out image transformations and seamless image delivery through CDN.

*Note: Replace `demo` in all the following examples with your Cloudinary's `cloud name`.*  

Accessing an uploaded image with the `sample` public ID through a CDN:

    http://res.cloudinary.com/demo/image/upload/sample.jpg

![Sample](https://cloudinary-a.akamaihd.net/demo/image/upload/w_0.4/sample.jpg "Sample")

Generating a 150x100 version of the `sample` image and downloading it through a CDN:

    http://res.cloudinary.com/demo/image/upload/w_150,h_100,c_fill/sample.jpg

![Sample 150x100](https://cloudinary-a.akamaihd.net/demo/image/upload/w_150,h_100,c_fill/sample.jpg "Sample 150x100")

Converting to a 150x100 PNG with rounded corners of 20 pixels: 

    http://res.cloudinary.com/demo/image/upload/w_150,h_100,c_fill,r_20/sample.png

![Sample 150x150 Rounded PNG](https://cloudinary-a.akamaihd.net/demo/image/upload/w_150,h_100,c_fill,r_20/sample.png "Sample 150x150 Rounded PNG")

For plenty more transformation options, see our [image transformations documentation](http://cloudinary.com/documentation/image_transformations).

Generating a 120x90 thumbnail based on automatic face detection of the Facebook profile picture of Bill Clinton:
 
    http://res.cloudinary.com/demo/image/facebook/c_thumb,g_face,h_90,w_120/billclinton.jpg
    
![Facebook 90x120](https://cloudinary-a.akamaihd.net/demo/image/facebook/c_thumb,g_face,h_90,w_120/billclinton.jpg "Facebook 90x200")

For more details, see our documentation for embedding [Facebook](http://cloudinary.com/documentation/facebook_profile_pictures) and [Twitter](http://cloudinary.com/documentation/twitter_profile_pictures) profile pictures. 

### Samples
You can find our simple and ready-to-use samples projects, along with documentations in the [samples folder](https://github.com/cloudinary/cloudinary_php/tree/master/samples). Please consult with the [README file](https://github.com/cloudinary/cloudinary_php/blob/master/samples/README.md), for usage and explanations.

## Usage

### Configuration

Each request for building a URL of a remote cloud resource must have the `cloud_name` parameter set. 
Each request to our secure APIs (e.g., image uploads, eager sprite generation) must have the `api_key` and `api_secret` parameters set. See [API, URLs and access identifiers](http://cloudinary.com/documentation/api_and_access_identifiers) for more details.

Setting the `cloud_name`, `api_key` and `api_secret` parameters can be done either directly in each call to a Cloudinary method, by calling the Cloudinary::config(), or by using the CLOUDINARY_URL environment variable.

### Embedding and transforming images

Any image uploaded to Cloudinary can be transformed and embedded using powerful view helper methods:

The following example generates the url for accessing an uploaded `sample` image while transforming it to fill a 100x150 rectangle:

    cloudinary_url("sample.jpg", array("width" => 100, "height" => 150, "crop" => "fill"))

Another example, emedding a smaller version of an uploaded image while generating a 90x90 face detection based thumbnail: 

    cloudinary_url("woman.jpg", array("width" => 90, "height" => 90, "crop" => "thumb", "gravity" => "face"))

You can provide either a Facebook name or a numeric ID of a Facebook profile or a fan page.  
             
Embedding a Facebook profile to match your graphic design is very simple:

    cloudinary_url("billclinton.jpg", array("width" => 90, "height" => 130, "type" => "facebook", "crop" => "fill", "gravity" => "north_west"))
                           
Same goes for Twitter:

    cloudinary_url("billclinton.jpg", array("type" => "twitter_name"))

![](http://res.cloudinary.com/cloudinary/image/upload/see_more_bullet.png) **See [our documentation](http://cloudinary.com/documentation/php_image_manipulation) for more information about displaying and transforming images in PHP**.                                         



### Upload

Assuming you have your Cloudinary configuration parameters defined (`cloud_name`, `api_key`, `api_secret`), uploading to Cloudinary is very simple.
    
The following example uploads a local JPG to the cloud: 
    
    \Cloudinary\Uploader::upload("my_picture.jpg")
        
The uploaded image is assigned a randomly generated public ID. The image is immediately available for download through a CDN:

    cloudinary_url("abcfrmo8zul1mafopawefg.jpg")
        
    http://res.cloudinary.com/demo/image/upload/abcfrmo8zul1mafopawefg.jpg

You can also specify your own public ID:    
    
    \Cloudinary\Uploader::upload("http://www.example.com/image.jpg", array("public_id" => 'sample_remote'))

    cloudinary_url("sample_remote.jpg")

    http://res.cloudinary.com/demo/image/upload/sample_remote.jpg


![](http://res.cloudinary.com/cloudinary/image/upload/see_more_bullet.png) **See [our documentation](http://cloudinary.com/documentation/php_image_upload) for plenty more options of uploading to the cloud from your PHP code**.


### cl\_image\_tag

Returns an html image tag pointing to Cloudinary.

Usage:

    <?php echo cl_image_tag("sample", array("format"=>"png", "width"=>100, "height"=>100, "crop"=>"fill") ?>

    # <img src='http://res.cloudinary.com/cloud_name/image/upload/c_fill,h_100,w_100/sample.png' height='100' width='100'/>



### cl\_image\_upload\_tag

Returns an html input field for direct image upload, to be used in conjunction with [cloudinary\_js package](https://github.com/cloudinary/cloudinary_js/). It integrates [jQuery-File-Upload widget](https://github.com/blueimp/jQuery-File-Upload) and provides all the necessary parameters for a direct upload.
You may see a sample usage of this feature in the PhotoAlbum sample included in this project.

Usage:

    cl_image_upload_tag(post-upload-field-name, upload-options-array)

Parameters:

 - `post-upload-field-name` - A name of a field in the form to be updated with the uploaded file data.
      If no such field exists a new hidden field will be creates.   
      The value format is `<image-path>#<public-id>`.   
      If the `cl_image_upload_tag` is not within an html form, this argument is ignored.

 - `upload-options-array` - upload options same as in Upload section above, with:
      - html - an associative array of html attributes for the upload field

![](http://res.cloudinary.com/cloudinary/image/upload/see_more_bullet.png) **See [our documentation](http://cloudinary.com/documentation/php_image_upload#direct_uploading_from_the_browser) for plenty more options of uploading directly from the browser**.


### cl\_form\_tag

The following function returns an html form that can be used to upload the file directly to Cloudinary. The result is a redirect to the supplied callback_url.

    cl_form_tag(callback, array(...))

Optional parameters:

    public_id - The name of the uploaded file in Cloudinary
    form - html attributes to be added to the form tag
    Any other parameter that can be passed to \Cloudinary\Uploader::upload

## Development

### Testing

To run the PHPUnit test suite you must first set the environment variable containing your Cloudinary URL. This can be obtained via Cloudinary's Management Console.

    export CLOUDINARY_URL=cloudinary://123456789012345:abcdeghijklmnopqrstuvwxyz12@n07t21i7

Next you can run your the PHPUnit suite from the root of this library:

   phpunit tests/* 
  
## Additional resources ##########################################################

Additional resources are available at:

* [Website](http://cloudinary.com)
* [Knowledge Base](http://support.cloudinary.com/forums) 
* [Documentation](http://cloudinary.com/documentation)
* [Documentation for PHP integration](http://cloudinary.com/documentation/php_integration)
* [PHP image upload documentation](http://cloudinary.com/documentation/php_image_upload)
* [PHP image manipulation documentation](http://cloudinary.com/documentation/php_image_manipulation)
* [Image transformations documentation](http://cloudinary.com/documentation/image_transformations)

## Support

You can [open an issue through GitHub](https://github.com/cloudinary/cloudinary_php/issues).

Contact us [http://cloudinary.com/contact](http://cloudinary.com/contact)

Stay tuned for updates, tips and tutorials: [Blog](http://cloudinary.com/blog), [Twitter](https://twitter.com/cloudinary), [Facebook](http://www.facebook.com/Cloudinary).

## Join the Community ##########################################################

Impact the product, hear updates, test drive new features and more! Join [here](https://www.facebook.com/groups/CloudinaryCommunity).

## License #######################################################################

Released under the MIT license. 

