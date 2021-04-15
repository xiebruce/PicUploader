<?php namespace Cloudinary\Test\Cache\Storage;

use Cloudinary\Cache\Storage\FileSystemKeyValueStorage;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;

/**
 * Class FileSystemKeyValueStorageTest
 * @package Cloudinary\Test\Cache\Storage
 */
class FileSystemKeyValueStorageTest extends TestCase
{
    /**
     * @var FileSystemKeyValueStorage Storage that we test
     */
    private $storage;
    /**
     * @var string path to the root directory of the cache
     */
    private $rootPath;

    private $key = "test_key";
    private $value = "test_value";

    private $key2 = "test_key_2";
    private $value2= "test_value_2";

    protected function setUp()
    {
        $this->rootPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . uniqid(UNIQUE_TEST_ID . '_');
        mkdir($this->rootPath);

        $this->storage = new FileSystemKeyValueStorage($this->rootPath);
    }

    protected function tearDown()
    {
        self::rmTree($this->rootPath);
    }

    /**
     * Helper Method, removes directory recursively
     *
     * @param string $dir Directory to remove
     *
     * @return bool
     */
    public static function rmTree($dir)
    {
        $files = array_diff(scandir($dir), array('.','..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? self::rmTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

    /**
     * Helper method for getting key full path
     *
     * @param $key
     *
     * @return mixed key full path
     */
    private function getTestPath($key)
    {
        $getKeyFullPath = new ReflectionMethod('Cloudinary\Cache\Storage\FileSystemKeyValueStorage', 'getKeyFullPath');
        $getKeyFullPath->setAccessible(true);

        return $getKeyFullPath->invoke($this->storage, $key);
    }


    /**
     * Helper method for setting value for the key
     *
     * @param $key
     * @param $value
     */
    private function setTestValue($key, $value)
    {
        $bytesWritten = file_put_contents($this->getTestPath($key), $value);

        self::assertNotFalse($bytesWritten);
    }

    /**
     * Helper method for getting value of the key
     *
     * @param $key
     *
     * @return bool|string value
     */
    private function getTestValue($key)
    {
        return file_get_contents($this->getTestPath($key));
    }

    public function testInitWithNonExistingPath()
    {
        $nonExistingRootPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . uniqid(UNIQUE_TEST_ID . '_');

        $success = true;

        try {
            $this->storage = new FileSystemKeyValueStorage($nonExistingRootPath);
        } catch (\Exception $e) {
            $success = false;
        }

        Assert::assertFileExists($nonExistingRootPath); // works with directories too

        self::rmTree($nonExistingRootPath);

        Assert::assertTrue($success);
    }

    public function testSet()
    {
        $this->storage->set($this->key, $this->value);

        Assert::assertEquals($this->value, $this->getTestValue($this->key));

        // Should set empty value
        $this->storage->set($this->key, '');

        Assert::assertEquals("", $this->getTestValue($this->key));
    }

    public function testGet()
    {
        $this->setTestValue($this->key, $this->value);

        Assert::assertEquals($this->value, $this->storage->get($this->key));

        Assert::assertNull($this->storage->get('non-existing-key'));

        $this->setTestValue($this->key, '');

        Assert::assertEquals('', $this->storage->get($this->key));
    }

    public function testDelete()
    {
        $this->storage->set($this->key, $this->value);
        $this->storage->set($this->key2, $this->value2);

        Assert::assertEquals($this->value, $this->storage->get($this->key));
        Assert::assertEquals($this->value2, $this->storage->get($this->key2));

        Assert::assertTrue($this->storage->delete($this->key));
        Assert::assertNull($this->storage->get($this->key));

        // Should delete only one value (opposed to clear)
        Assert::assertEquals($this->value2, $this->storage->get($this->key2));

        // Should not crash on non-existing keys
        Assert::assertTrue($this->storage->delete($this->key));
    }

    public function testClear()
    {
        $this->storage->set($this->key, $this->value);
        $this->storage->set($this->key2, $this->value2);

        Assert::assertEquals($this->value, $this->storage->get($this->key));
        Assert::assertEquals($this->value2, $this->storage->get($this->key2));

        Assert::assertTrue($this->storage->clear());

        Assert::assertNull($this->storage->get($this->key));
        Assert::assertNull($this->storage->get($this->key2));
        // Should clear empty cache
        Assert::assertTrue($this->storage->clear());
    }
}
