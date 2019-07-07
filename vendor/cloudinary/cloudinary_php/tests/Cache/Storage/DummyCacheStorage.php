<?php namespace Cloudinary\Test\Cache\Storage;

use Cloudinary\Cache\Storage\KeyValueStorage;

/**
 * Class DummyCacheConnector
 * @package Cloudinary\Test\Cache\Storage
 */
class DummyCacheStorage implements KeyValueStorage
{
    private static $dummyCache = [];

    /**
     * @inheritdoc
     */
    public function get($key)
    {
        return array_key_exists($key, self::$dummyCache) ? self::$dummyCache[$key] : null;
    }

    /**
     * @param $key
     * @param $value
     *
     * @return bool
     */
    public function set($key, $value)
    {
        self::$dummyCache[$key] = $value;

        return true;
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function delete($key)
    {
        if (!array_key_exists($key, self::$dummyCache)) {
            return true;
        }

        unset(self::$dummyCache[$key]);

        return true;
    }

    /**
     * @return bool
     */
    public function clear()
    {
        self::$dummyCache = [];

        return true;
    }
}
