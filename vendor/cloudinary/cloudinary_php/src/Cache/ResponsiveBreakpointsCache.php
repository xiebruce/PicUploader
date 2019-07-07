<?php namespace Cloudinary\Cache;

use Cloudinary\Cache\Adapter\CacheAdapter;
use Cloudinary\Utils\Singleton;
use InvalidArgumentException;

/**
 * Caches breakpoint values for image resources.
 * @package Cloudinary\Cache
 */
class ResponsiveBreakpointsCache extends Singleton
{

    /**
     * @var CacheAdapter The cache adapter used to store and retrieve values.
     */
    protected $cacheAdapter;

    protected function __construct()
    {
        $this->init();
    }

    /**
     * Initialize the cache
     * @param array $cacheOptions Cache configuration options.
     */
    public function init($cacheOptions = array())
    {
        $cacheAdapter = \Cloudinary::option_get($cacheOptions, "cache_adapter");

        $this->setCacheAdapter($cacheAdapter);
    }

    /**
     * Assigns cache adapter
     *
     * @param CacheAdapter $cacheAdapter The cache adapter used to store and retrieve values.
     *
     * @return bool Returns true if the $cacheAdapter is valid
     */
    public function setCacheAdapter($cacheAdapter)
    {
        if (is_null($cacheAdapter) || ! $cacheAdapter instanceof CacheAdapter) {
            return false;
        }

        $this->cacheAdapter = $cacheAdapter;

        return true;
    }

    /**
     * Indicates whether cache is enabled or not
     *
     * @return bool true if a $cach adapter has been set.
     */
    public function enabled()
    {
        return !is_null($this->cacheAdapter);
    }

    /**
     * Extract the parameters required in order to calculate the key of the cache.
     *
     * @param array $options Input options
     *
     * @return array A list of values used to calculate the cache key.
     */
    private static function optionsToParameters($options)
    {
        $optionsCopy = \Cloudinary::array_copy($options);
        $transformation = \Cloudinary::generate_transformation_string($optionsCopy);
        $format = \Cloudinary::option_get($options, "format", "");
        $type = \Cloudinary::option_get($options, "type", "upload");
        $resourceType = \Cloudinary::option_get($options, "resource_type", "image");

        return [$type, $resourceType, $transformation, $format];
    }

    /**
     * Retrieve the breakpoints of a particular derived resource identified by the $publicId and $options
     *
     * @param string $publicId  The public ID of the resource
     * @param array  $options   Additional options
     *
     * @return array|null Array of responsive breakpoints, null if not found
     */
    public function get($publicId, $options = [])
    {
        if (!$this->enabled()) {
            return null;
        }

        list($type, $resourceType, $transformation, $format) = self::optionsToParameters($options);

        return $this->cacheAdapter->get($publicId, $type, $resourceType, $transformation, $format);
    }

    /**
     * Sets responsive breakpoints identified by public ID and options
     *
     * @param string  $publicId The public ID of the resource
     * @param array   $options  Additional options
     * @param array   $value    Array of responsive breakpoints to set
     *
     * @return bool true on success or false on failure
     */
    public function set($publicId, $options = [], $value = [])
    {
        if (!$this->enabled()) {
            return false;
        }

        if (! is_array($value)) {
            throw new InvalidArgumentException("An array of breakpoints is expected");
        }

        list($type, $resourceType, $transformation, $format) = self::optionsToParameters($options);

        return $this->cacheAdapter->set($publicId, $type, $resourceType, $transformation, $format, $value);
    }

    /**
     * Delete responsive breakpoints identified by public ID and options
     *
     * @param string  $publicId The public ID of the resource
     * @param array   $options  Additional options
     *
     * @return bool true on success or false on failure
     */
    public function delete($publicId, $options = [])
    {
        if (!$this->enabled()) {
            return false;
        }

        list($type, $resourceType, $transformation, $format) = self::optionsToParameters($options);

        return $this->cacheAdapter->delete($publicId, $type, $resourceType, $transformation, $format);
    }

    /**
     * Flushe all entries from cache
     *
     * @return bool true on success or false on failure
     */
    public function flushAll()
    {
        if (!$this->enabled()) {
            return false;
        }

        return $this->cacheAdapter->flushAll();
    }
}
