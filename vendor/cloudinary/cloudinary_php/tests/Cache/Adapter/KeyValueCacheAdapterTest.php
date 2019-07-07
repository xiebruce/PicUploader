<?php namespace Cloudinary\Test\Cache\Adapter;

use Cloudinary\Cache\Adapter\KeyValueCacheAdapter;
use Cloudinary\Test\Cache\Storage\DummyCacheStorage;
use InvalidArgumentException;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/**
 * Class KeyValueCacheAdapterTest
 * @package Cloudinary\Test\Cache\Adapter
 */
class KeyValueCacheAdapterTest extends TestCase
{
    /**
     * @var KeyValueCacheAdapter
     */
    private $adapter;
    private $storage;

    private $parameters = ["public_id", "upload", "image", "w_100", "jpg"];
    private $value = [100, 200, 300, 399];
    private $parameters2 = ["public_id2", "fetch", "image", "w_200", "png"];
    private $value2 = [101, 201, 301, 398];


    public function setUp()
    {
        $this->storage = new DummyCacheStorage();
        $this->adapter = new KeyValueCacheAdapter($this->storage);
    }

    /**
     * Should be successfully initialized with a valid storage
     */
    public function testInitialization()
    {
        $validStorage = new DummyCacheStorage();
        $validAdapter = new KeyValueCacheAdapter($validStorage);
        Assert::assertAttributeEquals($validStorage, 'keyValueStorage', $validAdapter);
    }

    /**
     * Data provider of invalid storage types for testInvalidInitialization
     *
     * @return array of invalid storage types
     */
    public function invalidStorageProvider()
    {
        return [
            [null],
            ['notAStorage'],
            [''],
            [5375],
            [[]],
            [true],
            [new \StdClass]
        ];
    }

    /**
     * Should throw InvalidArgumentException in case of initialization with an invalid storage
     *
     * @dataProvider invalidStorageProvider
     *
     * @param mixed $invalidStorage Invalid storage type provided by invalidStorages data provider
     *
     * @expectedException InvalidArgumentException
     */
    public function testInvalidInitialization($invalidStorage)
    {
        new KeyValueCacheAdapter($invalidStorage); // Boom!
    }

    public function testGenerateCacheKey()
    {
        list($publicId, $type, $resourceType, $transformation, $format) = $this->parameters;

        $values = [
            [ // valid values
                "467d06e5a695b15468f9362e5a58d44de523026b",
                $this->parameters
            ],
            [ // allow empty values
                "1576396c59fc50ac8dc37b75e1184268882c9bc2",
                [$publicId, $type, $resourceType, "", null]
            ],
            [ // allow empty values
                "d8d824ca4e9ac735544ff3c45c1df67749cc1520",
                [$publicId, false, [], $transformation, $format]
            ]
        ];
        foreach ($values as $v) {
            $p = $v[1];
            // Unfortunately no `...` in PHP before 5.6, so just pass all parameters one by one
            Assert::assertEquals($v[0], $this->adapter->generateCacheKey($p[0], $p[1], $p[2], $p[3], $p[4]));
        }
    }

    public function testGetSet()
    {
        list($publicId, $type, $resourceType, $transformation, $format) = $this->parameters;
        $value = $this->value;
        
        $this->adapter->set($publicId, $type, $resourceType, $transformation, $format, $value);
        $actual_value = $this->adapter->get($publicId, $type, $resourceType, $transformation, $format);
        
        Assert::assertEquals($value, $actual_value);
    }

    public function testDelete()
    {
        list($publicId, $type, $resourceType, $transformation, $format) = $this->parameters;

        $this->adapter->set($publicId, $type, $resourceType, $transformation, $format, $this->value);
        $actual_value = $this->adapter->get($publicId, $type, $resourceType, $transformation, $format);

        Assert::assertEquals($this->value, $actual_value);

        $this->adapter->delete($publicId, $type, $resourceType, $transformation, $format);
        $deleted_value = $this->adapter->get($publicId, $type, $resourceType, $transformation, $format);

        Assert::assertNull($deleted_value);

        // delete non-existing key
        $result = $this->adapter->delete($publicId, $type, $resourceType, $transformation, $format);
        Assert::assertTrue($result);
    }

    public function testFlushAll()
    {
        list($publicId, $type, $resourceType, $transformation, $format) = $this->parameters;
        $value = $this->value;

        list($publicId2, $type2, $resourceType2, $transformation2, $format2) = $this->parameters2;
        $value2 = $this->value2;

        $this->adapter->set($publicId, $type, $resourceType, $transformation, $format, $value);
        $this->adapter->set($publicId2, $type2, $resourceType2, $transformation2, $format2, $value2);

        $actual_value = $this->adapter->get($publicId, $type, $resourceType, $transformation, $format);
        $actual_value2 = $this->adapter->get($publicId2, $type2, $resourceType2, $transformation2, $format2);

        Assert::assertEquals($value, $actual_value);
        Assert::assertEquals($value2, $actual_value2);

        $this->adapter->flushAll();

        $deleted_value = $this->adapter->get($publicId, $type, $resourceType, $transformation, $format);
        $deleted_value2 = $this->adapter->get($publicId2, $type2, $resourceType2, $transformation2, $format2);

        Assert::assertNull($deleted_value);
        Assert::assertNull($deleted_value2);
    }
}
