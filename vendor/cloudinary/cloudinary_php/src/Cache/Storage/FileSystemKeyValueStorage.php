<?php namespace Cloudinary\Cache\Storage;

use GlobIterator;

/**
 * File-based key-value storage
 * @package Cloudinary\Cache\Storage
 */
class FileSystemKeyValueStorage implements KeyValueStorage
{
    private $rootPath;

    /**
     * @var string Cache files extension
     */
    private static $itemExt = ".cldci";

    /**
     * Create a new Storage object.
     * All files will be stored under the $rootPath location
     *
     * @param string $rootPath The base folder for all storage files.
     */
    public function __construct($rootPath)
    {
        if (is_null($rootPath)) {
            $rootPath = sys_get_temp_dir();
        }

        if (!is_dir($rootPath)) {
            $result = mkdir($rootPath);
            if ($result === true) {
                chmod($rootPath, 0777);
            }
        }

        $this->rootPath = $rootPath;
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        if (!$this->exists($key)) {
            return null;
        }

        return file_get_contents($this->getKeyFullPath($key));
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $bytesWritten = file_put_contents($this->getKeyFullPath($key), $value);

        if ($bytesWritten === false) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function delete($key)
    {
        if (!$this->exists($key)) {
            return true;
        }

        return unlink($this->getKeyFullPath($key));
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $success = true;

        $cacheItems = new GlobIterator($this->rootPath . DIRECTORY_SEPARATOR . "*" . self::$itemExt);

        if (!$cacheItems->count()) {
            return true;
        }

        foreach ($cacheItems as $itemPath) {
            if (!unlink($itemPath)) {
                $success = false;
            }
        }

        return $success;
    }

    /**
     * Generate the file path for the $key.
     *
     * @param string $key
     *
     * @return string The absolute path of the value file associated with the $key.
     */
    private function getKeyFullPath($key)
    {
        return $this->rootPath . DIRECTORY_SEPARATOR . $key . self::$itemExt;
    }

    /**
     * Indicate whether key exists
     *
     * @param string $key
     *
     * @return bool True if the file for the given $key exists.
     */
    private function exists($key)
    {
        return file_exists($this->getKeyFullPath($key));
    }
}
