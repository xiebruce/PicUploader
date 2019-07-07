<?php namespace Cloudinary\Cache\Storage;

/**
 * A simple key-value storage interface
 * @package Cloudinary\Cache\Storage
 */
interface KeyValueStorage
{
    /**
     * Get a value identified by the given $key
     *
     * @param string $key A unique identifier
     *
     * @return mixed|null The value identified by $key or null if no value was found
     */
    public function get($key);

    /**
     * Store the $value identified by $key
     *
     * @param string $key A unique identifier
     * @param mixed $value
     *
     * @return bool true on success or false on failure
     */
    public function set($key, $value);

    /**
     * Deletes item by key
     *
     * @param string $key A unique identifier
     *
     * @return bool true on success or false on failure
     */
    public function delete($key);

    /**
     * Clears all entries
     *
     * @return bool Returns true if the operation was successful
     */
    public function clear();
}
