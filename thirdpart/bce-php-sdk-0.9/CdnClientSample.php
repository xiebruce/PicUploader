<?php
/*
* Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* Http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/

include 'BaiduBce.phar';
require 'CdnSampleConf.php';

use BaiduBce\Services\Cdn\CdnClient;
use BaiduBce\BceClientConfigOptions;

use BaiduBce\Log\LogFactory;
    
class CdnClientTest extends PHPUnit_Framework_TestCase
{
    public function __construct()
    {
        global $g_CDN_TEST_CONFIG;

        parent::__construct();
        $this->client = new CdnClient($g_CDN_TEST_CONFIG);
        $this->logger = LogFactory::getLogger(get_class($this));
    }

    /**
     * test create domain
     */
    public static function setUpBeforeClass()
    {
        global $g_CDN_TEST_CONFIG;

        $client = new CdnClient($g_CDN_TEST_CONFIG);
        $domain = "test-sdk.sys-qa.com";
        $origins = array(
            array("peer" => "test.origin.domain.com"),
        );
        $client->createDomain($domain, $origins);
    }

    /**
     * test delete domain
     */
    public static function tearDownAfterClass()
    {
        global $g_CDN_TEST_CONFIG;

        $client = new CdnClient($g_CDN_TEST_CONFIG);
        $domain = "test-sdk.sys-qa.com";
        $client->deleteDomain($domain);
    }
    
    /**
     * test list domain
     */
    public function testListDomain()
    {
        $resp = $this->client->listDomains();
        $this->assertNotNull($resp);
    }

    /**
     * test start domain
     */
    public function testEnableDomain()
    {
        $domain = "test-sdk.sys-qa.com";
        $resp = $this->client->enableDomain($domain);
        $this->assertNotNull($resp);
    }

    /**
     * test stop domain
     */
    public function testDisableDomain()
    {
        $domain = "test-sdk.sys-qa.com";
        $resp = $this->client->disableDomain($domain);
        $this->assertNotNull($resp);
    }

    /**
     * test update domain origin address
     */
    public function testSetDomainOrigin()
    {
        $domain = "test-sdk.sys-qa.com";
        $origins = array(
            array(
                "peer" => "test.origin-new.domain.com",
                'host' => 'www.origin-host.com'
            ),
        );
        $resp = $this->client->setDomainOrigin($domain, $origins);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain config
     */
    public function testGetDomainConfig()
    {
        $domain = "test-sdk.sys-qa.com";
        $resp = $this->client->getDomainConfig($domain);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain cache ttl
     */
    public function testGetDomainCacheTTL()
    {
        $domain = "test-sdk.sys-qa.com";
        $resp = $this->client->getDomainCacheTTL($domain);
        $this->assertNotNull($resp);
    }

    /**
     * test set domain cache ttl
     */
    public function testSetDomainCacheTTL()
    {
        $domain = "test-sdk.sys-qa.com";
        $rules = array(
            array(
                "type" => "suffix",
                "value" => ".jpg",
                "ttl" => 36000,
                "weight" => 30,
            ),
        );
        $resp = $this->client->setDomainCacheTTL($domain, $rules);
        $this->assertNotNull($resp);
    }

    /**
     * test set domain cache full url
     */
    public function testSetDomainCacheFullUrl()
    {
        $domain = "test-sdk.sys-qa.com";
        $flag = true;
        $resp = $this->client->setDomainCacheFullUrl($domain, $flag);
        $this->assertNotNull($resp);
    }

    /**
     * test set domain ip acl
     */
    public function testSetDomainIpAcl()
    {
        $domain = "test-sdk.sys-qa.com";
        $aclList = array(
            "1.2.3.4",
            "5.6.7.8",
        );
        $flag = "white";
        $resp = $this->client->setDomainIpAcl($domain, $flag, $aclList);
        $this->assertNotNull($resp);
    }

    /**
     * test set domain ip acl
     */
    public function testSetDomainRefererAcl()
    {
        $domain = "test-sdk.sys-qa.com";
        $aclList = array(
            "http://your.black.list1",
            "http://your.black.list2",
        );
        $flag = "black";
        $allowEmpty=true;
        $resp = $this->client->setDomainRefererAcl($domain, $flag, $allowEmpty, $aclList);
        $this->assertNotNull($resp);
    }

    /**
     * test set domain limit rate
     */
    public function testSetDomainLimitRate()
    {
        $domain = "test-sdk.sys-qa.com";
        $rate = 1024;
        $resp = $this->client->setDomainLimitRate($domain, $rate);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain pv stat
     */
    public function testGetDomainPvStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 300;
        $withRegion = 'true';

        $resp = $this->client->getDomainPvStat($domain, $startTime, $endTime,
            $period, $withRegion);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain uv stat
     */
    public function testGetDomainUvStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 3600;
        $withRegion = 'true';

        $resp = $this->client->getDomainUvStat($domain, $startTime, $endTime, $period);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain avg speed stat
     */
    public function testGetDomainAvgSpeedStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 300;

        $resp = $this->client->getDomainAvgSpeedStat($domain, $startTime, $endTime, $period);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain flow stat
     */
    public function testGetDomainFlowStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 300;
        $withRegion = 'true';

        $resp = $this->client->getDomainFlowStat($domain, $startTime, $endTime,
            $period, $withRegion);
        $this->assertNotNull($resp);
    }


    /**
     * test get domain src flow stat
     */
    public function testGetDomainSrcFlowStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 300;

        $resp = $this->client->getDomainSrcFlowStat($domain, $startTime, $endTime, $period);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain hit rate stat
     */
    public function testGetDomainHitRateStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 300;

        $resp = $this->client->getDomainHitRateStat($domain, $startTime, $endTime, $period);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain http code stat
     */
    public function testGetDomainHttpCodeStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 300;
        $withRegion = 'true';

        $resp = $this->client->getDomainHttpCodeStat($domain, $startTime, $endTime,
            $period, $withRegion);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain top url stat
     */
    public function testGetDomainTopUrlStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 300;

        $resp = $this->client->getDomainTopUrlStat($domain, $startTime, $endTime, $period);
        $this->assertNotNull($resp);
    }

    /**
     * test get domain top referer stat
     */
    public function testGetDomainTopRefererStat()
    {
        $domain = 'test-sdk.sys-qa.com';
        $startTime = '2017-12-07T16:00:00Z';
        $endTime = '2017-12-08T09:43:00Z';
        $period = 300;

        $resp = $this->client->getDomainTopRefererStat($domain, $startTime, $endTime, $period);
        $this->assertNotNull($resp);
    }  

    /**
     * test prefetch
     */
    public function testPrefetch()
    {
        $tasks = array(
            array(
                'url' => 'http://test-sdk.sys-qa.com/path/to/file',
            ),
        );

        $resp = $this->client->prefetch($tasks);
        $this->assertNotNull($resp);
        $this->assertNotNull($resp->id);

        $resp = $this->client->listPrefetchStatus($resp->id);
        $this->assertNotNull($resp);
    }

    /**
     * test get prefetch status
     */
    public function testListPrefetchStatus()
    {
        $url = 'http://test-sdk.sys-qa.com/1.jpg';
        $startTime = "2017-12-07T16:00:00Z";
        $endTime = "2017-12-07T18:00:00Z";

        $resp = $this->client->listPrefetchStatus('', $url, $startTime, $endTime);
        $this->assertNotNull($resp);
    }

    /**
     * test purge
     */
    public function testPurge()
    {
        $tasks = array(
            array(
                'url' => 'http://test-sdk.sys-qa.com/path/to/file',
            ),
            array(
                'url' => 'http://test-sdk.sys-qa.com/path/to/directory/',
                'type' => 'directory',
            ),
        );

        $resp = $this->client->purge($tasks);
        $this->assertNotNull($resp);
        $this->assertNotNull($resp->id);

        $resp = $this->client->listPurgeStatus($resp->id);
        $this->assertNotNull($resp);
    }

    /**
     * test purge status
     */
    public function testListPurgeStatus()
    {
        $url = 'http://test-sdk.sys-qa.com/1.jpg';
        $startTime = "2017-12-07T16:00:00Z";
        $endTime = "2017-12-07T18:00:00Z";

        $resp = $this->client->listPurgeStatus('', $url, $startTime, $endTime);
        $this->assertNotNull($resp);
    }

    /**
     * test list purge/prefetch quota
     */
    public function testListQuota()
    {
        $resp = $this->client->listQuota();
        $this->assertNotNull($resp);
    }

    /**
     * test get domain log
     */
    public function testGetDomainLog()
    {
        $domain = "test-sdk.sys-qa.com";
        $startTime = "2017-12-07T16:00:00Z";
        $endTime = "2017-12-07T18:00:00Z";

        $resp = $this->client->getDomainLog($domain, $startTime, $endTime);
        $this->assertNotNull($resp);
    }

    /**
     * test query ip
     */
    public function testIpQuery()
    {
        $ip = '1.2.3.4';
        $action = 'describeIp';
        $resp = $this->client->ipQuery($action, $ip);
        $this->assertNotNull($resp);
    } 
}
