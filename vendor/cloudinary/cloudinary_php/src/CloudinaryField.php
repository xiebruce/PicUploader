<?php

use Cloudinary\PreloadedFile;
use Cloudinary\Uploader;

/**
 * Manages access to a cloudinary image as a field
 */
class CloudinaryField
{
    private $identifier = null;

    /**
     * CloudinaryField constructor.
     *
     * @param string $identifier
     */
    public function __construct($identifier = '')
    {
        $this->identifier = $identifier;
    }

    public function __toString()
    {
        return (string)explode('#', $this->identifier())[0];
    }

    public function identifier()
    {
        return $this->identifier;
    }

    public function url($options = array())
    {
        if (!$this->identifier) {
            // TODO: Error?
            return null;
        }

        return cloudinary_url($this, $options);
    }

    public function upload($file, $options = array())
    {
        $options['return_error'] = false;
        $ret = Uploader::upload($file, $options);
        $preloaded = new PreloadedFile(\Cloudinary::signed_preloaded_image($ret));
        $this->identifier = $preloaded->extended_identifier();
    }

    public function delete()
    {
        $options['return_error'] = false;
        Uploader::destroy($this->identifier);
        unset($this->identifier);
    }

    public function verify()
    {
        $preloaded = new PreloadedFile($this->identifier);
        return $preloaded->is_valid();
    }
}
