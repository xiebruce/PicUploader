<?php namespace Cloudinary\Cache\Adapter;

use Cloudinary\Cache\Storage\KeyValueStorage;
use InvalidArgumentException;

/**
 * A cache adapter for a key-value storage type
 * @package Cloudinary\Cache\Adapter
 */
class KeyValueCacheAdapter implements CacheAdapter
{
    /**
     * The storage interface
     * @var KeyValueStorage
     */
    private $keyValueStorage = null;

    /**
     * Create a new adapter for the provided storage interface
     *
     * @param KeyValueStorage $storage a key-value storage interface
     */
    public function __construct($storage)
    {
        $this->setKeyValueStorage($storage);
    }

    /**
     * Set the storage interface
     * @param object $storage KeyValueStorage or PSR-16 compliant cache
     *
     * @return bool true if successful
     */
    private function setKeyValueStorage($storage)
    {
        if (!is_object($storage)) {
            throw new InvalidArgumentException("An instance of valid storage must be provided");
        }

        $storageClasses = class_implements($storage);
        $validStorages = ['Cloudinary\Cache\Storage\KeyValueStorage', 'Psr\SimpleCache\CacheInterface'];

        $found = count(\Cloudinary::array_subset($storageClasses, $validStorages)) > 0;

        if (!$found) {
            throw new InvalidArgumentException("An instance of valid storage must be provided");
        }

        $this->keyValueStorage = $storage;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function get($publicId, $type, $resourceType, $transformation, $format)
    {
        return json_decode(
            $this->keyValueStorage->get(
                self::generateCacheKey($publicId, $type, $resourceType, $transformation, $format)
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function set($publicId, $type, $resourceType, $transformation, $format, $value)
    {
        return $this->keyValueStorage->set(
            self::generateCacheKey($publicId, $type, $resourceType, $transformation, $format),
            json_encode($value)
        );
    }

    /**
     * {@inheritdoc}
     */
    public function delete($publicId, $type, $resourceType, $transformation, $format)
    {
        return $this->keyValueStorage->delete(
            self::generateCacheKey($publicId, $type, $resourceType, $transformation, $format)
        );
    }

    /**
     * {@inheritdoc}
     */
    public function flushAll()
    {
        return $this->keyValueStorage->clear();
    }

    /**
     * Generates key-value storage key from parameters
     *
     * @param string $publicId          The public ID of the resource
     * @param string $type              The storage type
     * @param string $resourceType      The type of the resource
     * @param string $transformation    The transformation string
     * @param string $format            The format of the resource
     *
     * @return string Resulting cache key
     */
    public static function generateCacheKey($publicId, $type, $resourceType, $transformation, $format)
    {
        return sha1(implode("/", array_filter([$publicId, $type, $resourceType, $transformation, $format])));
    }
}
