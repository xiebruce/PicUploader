<?php namespace Cloudinary\Test;

use Cloudinary\Cache\Adapter\KeyValueCacheAdapter;
use Cloudinary\Cache\ResponsiveBreakpointsCache;
use Cloudinary\Cache\Storage\FileSystemKeyValueStorage;
use Cloudinary\Curl;
use Cloudinary\Test\Cache\Storage\DummyCacheStorage;
use Exception;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use Prophecy\Exception\InvalidArgumentException;

/**
 * Class ResponsiveBreakpointsCacheTest
 */
class ResponsiveBreakpointsCacheTest extends TestCase
{
    /**
     * @var ResponsiveBreakpointsCache
     */
    protected $cache;

    protected static $publicId = UNIQUE_TEST_ID;
    protected static $breakpoints = [100, 200, 300, 399];

    public static function setUpBeforeClass()
    {
        Curl::$instance = new Curl();
    }

    public function setUp()
    {
        $this->cache = ResponsiveBreakpointsCache::instance();
        $this->cache->setCacheAdapter(new KeyValueCacheAdapter(new DummyCacheStorage()));
    }

    public function testRBCacheInstance()
    {
        $instance = ResponsiveBreakpointsCache::instance();
        $instance2 = ResponsiveBreakpointsCache::instance();

        $this::assertEquals($instance, $instance2);
    }

    public function testRBCacheSetGet()
    {
        $this->cache->set(self::$publicId, [], self::$breakpoints);

        $res = $this->cache->get(self::$publicId);

        $this::assertEquals(self::$breakpoints, $res);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testRBCacheSetInvalidBreakpoints()
    {
        $this->cache->set(self::$publicId, [], "Not breakpoints at all");
    }

    public function testRBCacheDelete()
    {
        $this->cache->set(self::$publicId, [], self::$breakpoints);

        $this->cache->delete(self::$publicId);

        $res = $this->cache->get(self::$publicId);

        $this::assertNull($res);
    }


    public function testRBCacheFlushAll()
    {
        $this->cache->set(self::$publicId, [], self::$breakpoints);

        $this->cache->flushAll();

        Assert::assertNull($this->cache->get(self::$publicId));
    }

    public function testRBCacheDisabled()
    {
        $disabledCache = ResponsiveBreakpointsCache::instance();

        $disabledCacheReflection = new \ReflectionClass($disabledCache);

        $cacheAdapterProperty = $disabledCacheReflection->getProperty('cacheAdapter');
        $cacheAdapterProperty->setAccessible(true);
        $cacheAdapterProperty->setValue($disabledCache, null);

        Assert::assertFalse($disabledCache->enabled());

        Assert::assertFalse($disabledCache->set(self::$publicId, [], self::$breakpoints));
        Assert::assertNull($disabledCache->get(self::$publicId));
        Assert::assertFalse($disabledCache->delete(self::$publicId));
        Assert::assertFalse($disabledCache->flushAll());
    }

    public function testRBCacheFileSystemStorage()
    {
        $this->cache->init(["cache_adapter" => new KeyValueCacheAdapter(new FileSystemKeyValueStorage(null))]);

        try {
            $this->cache->set(self::$publicId, [], self::$breakpoints);
            $res = $this->cache->get(self::$publicId);
        } catch (Exception $e) {
            unset($e);
        }
        // No `finally` in PHP 5.4
        $this->cache->delete(self::$publicId);

        $this::assertEquals(self::$breakpoints, $res);
    }
}
