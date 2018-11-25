<?php

// +-------------------------------------------------------------------------
// | Copyright (C) 2016 Yunify, Inc.
// +-------------------------------------------------------------------------
// | Licensed under the Apache License, Version 2.0 (the "License");
// | you may not use this work except in compliance with the License.
// | You may obtain a copy of the License in the LICENSE file, or at:
// |
// | http://www.apache.org/licenses/LICENSE-2.0
// |
// | Unless required by applicable law or agreed to in writing, software
// | distributed under the License is distributed on an "AS IS" BASIS,
// | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// | See the License for the specific language governing permissions and
// | limitations under the License.
// +-------------------------------------------------------------------------


namespace QingStor\SDK\Service;

use QingStor\SDK\Request;
use QingStor\SDK\Exception;
use QingStor\SDK\Unpacker;

class Bucket
{
    public function __construct($config, $properties)
    {
        // Zone should be forced to lower case
        $properties['zone'] = strtolower($properties['zone']);

        $this->config = $config;
        $this->properties = $properties;
    }
    
    /**
     * deleteRequest: Build Delete's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/delete.html Documentation URL
     *
     * @return Request
     */
    public function deleteRequest()
    {
        $operation = array(
            'API' => 'DeleteBucket',
            'Method' => 'DELETE',
            'Uri' => '/<bucket-name>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->deleteValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * delete: Delete a bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/delete.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function delete()
    {
        $req = $this->deleteRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: delete');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * deleteQuery: delete's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/delete.html Documentation URL
     *
     * @return Request
     */
    public function deleteQuery($expires)
    {
        $req = $this->deleteRequest();
        return $req->query_sign($expires);
    }
    
    public function deleteValidate($operation)
    {
    }

    
    /**
     * deleteCORSRequest: Build DeleteCORS's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/delete_cors.html Documentation URL
     *
     * @return Request
     */
    public function deleteCORSRequest()
    {
        $operation = array(
            'API' => 'DeleteBucketCORS',
            'Method' => 'DELETE',
            'Uri' => '/<bucket-name>?cors',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->deleteCORSValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * deleteCORS: Delete CORS information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/delete_cors.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function deleteCORS()
    {
        $req = $this->deleteCORSRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: deleteCORS');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * deleteCORSQuery: deleteCORS's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/delete_cors.html Documentation URL
     *
     * @return Request
     */
    public function deleteCORSQuery($expires)
    {
        $req = $this->deleteCORSRequest();
        return $req->query_sign($expires);
    }
    
    public function deleteCORSValidate($operation)
    {
    }

    
    /**
     * deleteExternalMirrorRequest: Build DeleteExternalMirror's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/delete_external_mirror.html Documentation URL
     *
     * @return Request
     */
    public function deleteExternalMirrorRequest()
    {
        $operation = array(
            'API' => 'DeleteBucketExternalMirror',
            'Method' => 'DELETE',
            'Uri' => '/<bucket-name>?mirror',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->deleteExternalMirrorValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * deleteExternalMirror: Delete external mirror of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/delete_external_mirror.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function deleteExternalMirror()
    {
        $req = $this->deleteExternalMirrorRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: deleteExternalMirror');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * deleteExternalMirrorQuery: deleteExternalMirror's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/delete_external_mirror.html Documentation URL
     *
     * @return Request
     */
    public function deleteExternalMirrorQuery($expires)
    {
        $req = $this->deleteExternalMirrorRequest();
        return $req->query_sign($expires);
    }
    
    public function deleteExternalMirrorValidate($operation)
    {
    }

    
    /**
     * deleteLifecycleRequest: Build DeleteLifecycle's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/delete_lifecycle.html Documentation URL
     *
     * @return Request
     */
    public function deleteLifecycleRequest()
    {
        $operation = array(
            'API' => 'DeleteBucketLifecycle',
            'Method' => 'DELETE',
            'Uri' => '/<bucket-name>?lifecycle',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->deleteLifecycleValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * deleteLifecycle: Delete Lifecycle information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/delete_lifecycle.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function deleteLifecycle()
    {
        $req = $this->deleteLifecycleRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: deleteLifecycle');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * deleteLifecycleQuery: deleteLifecycle's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/delete_lifecycle.html Documentation URL
     *
     * @return Request
     */
    public function deleteLifecycleQuery($expires)
    {
        $req = $this->deleteLifecycleRequest();
        return $req->query_sign($expires);
    }
    
    public function deleteLifecycleValidate($operation)
    {
    }

    
    /**
     * deleteNotificationRequest: Build DeleteNotification's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/delete_notification.html Documentation URL
     *
     * @return Request
     */
    public function deleteNotificationRequest()
    {
        $operation = array(
            'API' => 'DeleteBucketNotification',
            'Method' => 'DELETE',
            'Uri' => '/<bucket-name>?notification',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->deleteNotificationValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * deleteNotification: Delete Notification information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/delete_notification.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function deleteNotification()
    {
        $req = $this->deleteNotificationRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: deleteNotification');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * deleteNotificationQuery: deleteNotification's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/delete_notification.html Documentation URL
     *
     * @return Request
     */
    public function deleteNotificationQuery($expires)
    {
        $req = $this->deleteNotificationRequest();
        return $req->query_sign($expires);
    }
    
    public function deleteNotificationValidate($operation)
    {
    }

    
    /**
     * deletePolicyRequest: Build DeletePolicy's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/policy/delete_policy.html Documentation URL
     *
     * @return Request
     */
    public function deletePolicyRequest()
    {
        $operation = array(
            'API' => 'DeleteBucketPolicy',
            'Method' => 'DELETE',
            'Uri' => '/<bucket-name>?policy',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->deletePolicyValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * deletePolicy: Delete policy information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/policy/delete_policy.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function deletePolicy()
    {
        $req = $this->deletePolicyRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: deletePolicy');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * deletePolicyQuery: deletePolicy's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/policy/delete_policy.html Documentation URL
     *
     * @return Request
     */
    public function deletePolicyQuery($expires)
    {
        $req = $this->deletePolicyRequest();
        return $req->query_sign($expires);
    }
    
    public function deletePolicyValidate($operation)
    {
    }

    
    /**
     * deleteMultipleObjectsRequest: Build DeleteMultipleObjects's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/delete_multiple.html Documentation URL
     * @param string 'Content-MD5' Object MD5sum
     * @param array 'objects' A list of keys to delete
     * @param boolean 'quiet' Whether to return the list of deleted objects
     *
     * @return Request
     */
    public function deleteMultipleObjectsRequest($options=array())
    {
        $operation = array(
            'API' => 'DeleteMultipleObjects',
            'Method' => 'POST',
            'Uri' => '/<bucket-name>?delete',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'Content-MD5' => isset($options['Content-MD5'])?$options['Content-MD5']:null,
            ),
            'Params' => array(
            ),
            'Elements' => array(
                'objects' => isset($options['objects'])?$options['objects']:null,
                'quiet' => isset($options['quiet'])?$options['quiet']:null,
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->deleteMultipleObjectsValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * deleteMultipleObjects: Delete multiple objects from the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/delete_multiple.html Documentation URL
     * @param string 'Content-MD5' Object MD5sum
     * @param array 'objects' A list of keys to delete
     * @param boolean 'quiet' Whether to return the list of deleted objects
     * @return Unpacker
     * @throws \Exception
     */
    public function deleteMultipleObjects($options=array())
    {
        $req = $this->deleteMultipleObjectsRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: deleteMultipleObjects');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * deleteMultipleObjectsQuery: deleteMultipleObjects's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/delete_multiple.html Documentation URL
     * @param string 'Content-MD5' Object MD5sum
     * @param array 'objects' A list of keys to delete
     * @param boolean 'quiet' Whether to return the list of deleted objects
     *
     * @return Request
     */
    public function deleteMultipleObjectsQuery($expires, $options=array())
    {
        $req = $this->deleteMultipleObjectsRequest($options);
        return $req->query_sign($expires);
    }
    
    public function deleteMultipleObjectsValidate($operation)
    {
        if (!isset($operation['Elements']['objects'])
              || (
                  $operation['Elements']['objects'] ===''
                  || $operation['Elements']['objects'] === array()
                  || $operation['Elements']['objects'] === null
                  )
          ) {
            throw new Exception\ParameterRequiredException('objects', 'DeleteMultipleObjectsInput');
        }
        foreach ($operation['Elements']['objects'] as $key) {
        }
    }

    
    /**
     * getACLRequest: Build GetACL's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get_acl.html Documentation URL
     *
     * @return Request
     */
    public function getACLRequest()
    {
        $operation = array(
            'API' => 'GetBucketACL',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>?acl',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->getACLValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * getACL: Get ACL information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get_acl.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function getACL()
    {
        $req = $this->getACLRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: getACL');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * getACLQuery: getACL's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get_acl.html Documentation URL
     *
     * @return Request
     */
    public function getACLQuery($expires)
    {
        $req = $this->getACLRequest();
        return $req->query_sign($expires);
    }
    
    public function getACLValidate($operation)
    {
    }

    
    /**
     * getCORSRequest: Build GetCORS's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/get_cors.html Documentation URL
     *
     * @return Request
     */
    public function getCORSRequest()
    {
        $operation = array(
            'API' => 'GetBucketCORS',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>?cors',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->getCORSValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * getCORS: Get CORS information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/get_cors.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function getCORS()
    {
        $req = $this->getCORSRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: getCORS');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * getCORSQuery: getCORS's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/get_cors.html Documentation URL
     *
     * @return Request
     */
    public function getCORSQuery($expires)
    {
        $req = $this->getCORSRequest();
        return $req->query_sign($expires);
    }
    
    public function getCORSValidate($operation)
    {
    }

    
    /**
     * getExternalMirrorRequest: Build GetExternalMirror's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/get_external_mirror.html Documentation URL
     *
     * @return Request
     */
    public function getExternalMirrorRequest()
    {
        $operation = array(
            'API' => 'GetBucketExternalMirror',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>?mirror',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->getExternalMirrorValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * getExternalMirror: Get external mirror of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/get_external_mirror.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function getExternalMirror()
    {
        $req = $this->getExternalMirrorRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: getExternalMirror');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * getExternalMirrorQuery: getExternalMirror's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/get_external_mirror.html Documentation URL
     *
     * @return Request
     */
    public function getExternalMirrorQuery($expires)
    {
        $req = $this->getExternalMirrorRequest();
        return $req->query_sign($expires);
    }
    
    public function getExternalMirrorValidate($operation)
    {
    }

    
    /**
     * getLifecycleRequest: Build GetLifecycle's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/get_lifecycle.html Documentation URL
     *
     * @return Request
     */
    public function getLifecycleRequest()
    {
        $operation = array(
            'API' => 'GetBucketLifecycle',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>?lifecycle',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->getLifecycleValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * getLifecycle: Get Lifecycle information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/get_lifecycle.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function getLifecycle()
    {
        $req = $this->getLifecycleRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: getLifecycle');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * getLifecycleQuery: getLifecycle's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/get_lifecycle.html Documentation URL
     *
     * @return Request
     */
    public function getLifecycleQuery($expires)
    {
        $req = $this->getLifecycleRequest();
        return $req->query_sign($expires);
    }
    
    public function getLifecycleValidate($operation)
    {
    }

    
    /**
     * getNotificationRequest: Build GetNotification's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/get_notification.html Documentation URL
     *
     * @return Request
     */
    public function getNotificationRequest()
    {
        $operation = array(
            'API' => 'GetBucketNotification',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>?notification',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->getNotificationValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * getNotification: Get Notification information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/get_notification.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function getNotification()
    {
        $req = $this->getNotificationRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: getNotification');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * getNotificationQuery: getNotification's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/get_notification.html Documentation URL
     *
     * @return Request
     */
    public function getNotificationQuery($expires)
    {
        $req = $this->getNotificationRequest();
        return $req->query_sign($expires);
    }
    
    public function getNotificationValidate($operation)
    {
    }

    
    /**
     * getPolicyRequest: Build GetPolicy's request
     * @link https://https://docs.qingcloud.com/qingstor/api/bucket/policy/get_policy.html Documentation URL
     *
     * @return Request
     */
    public function getPolicyRequest()
    {
        $operation = array(
            'API' => 'GetBucketPolicy',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>?policy',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->getPolicyValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * getPolicy: Get policy information of the bucket.
     * @link https://https://docs.qingcloud.com/qingstor/api/bucket/policy/get_policy.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function getPolicy()
    {
        $req = $this->getPolicyRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: getPolicy');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * getPolicyQuery: getPolicy's Query Sign Way
     * @link https://https://docs.qingcloud.com/qingstor/api/bucket/policy/get_policy.html Documentation URL
     *
     * @return Request
     */
    public function getPolicyQuery($expires)
    {
        $req = $this->getPolicyRequest();
        return $req->query_sign($expires);
    }
    
    public function getPolicyValidate($operation)
    {
    }

    
    /**
     * getStatisticsRequest: Build GetStatistics's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get_stats.html Documentation URL
     *
     * @return Request
     */
    public function getStatisticsRequest()
    {
        $operation = array(
            'API' => 'GetBucketStatistics',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>?stats',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->getStatisticsValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * getStatistics: Get statistics information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get_stats.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function getStatistics()
    {
        $req = $this->getStatisticsRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: getStatistics');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * getStatisticsQuery: getStatistics's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get_stats.html Documentation URL
     *
     * @return Request
     */
    public function getStatisticsQuery($expires)
    {
        $req = $this->getStatisticsRequest();
        return $req->query_sign($expires);
    }
    
    public function getStatisticsValidate($operation)
    {
    }

    
    /**
     * headRequest: Build Head's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/head.html Documentation URL
     *
     * @return Request
     */
    public function headRequest()
    {
        $operation = array(
            'API' => 'HeadBucket',
            'Method' => 'HEAD',
            'Uri' => '/<bucket-name>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->headValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * head: Check whether the bucket exists and available.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/head.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function head()
    {
        $req = $this->headRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: head');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * headQuery: head's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/head.html Documentation URL
     *
     * @return Request
     */
    public function headQuery($expires)
    {
        $req = $this->headRequest();
        return $req->query_sign($expires);
    }
    
    public function headValidate($operation)
    {
    }

    
    /**
     * listMultipartUploadsRequest: Build ListMultipartUploads's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/list_multipart_uploads.html Documentation URL
     * @param string 'delimiter' Put all keys that share a common prefix into a list
     * @param string 'key_marker' Limit results returned from the first key after key_marker sorted by alphabetical order
     * @param integer 'limit' Results count limit
     * @param string 'prefix' Limits results to keys that begin with the prefix
     * @param string 'upload_id_marker' Limit results returned from the first uploading segment after upload_id_marker sorted by the time of upload_id
     *
     * @return Request
     */
    public function listMultipartUploadsRequest($options=array())
    {
        $operation = array(
            'API' => 'ListMultipartUploads',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>?uploads',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
                'delimiter'=> isset($options['delimiter'])?$options['delimiter']:null,
                'key_marker'=> isset($options['key_marker'])?$options['key_marker']:null,
                'limit'=> isset($options['limit'])?$options['limit']:null,
                'prefix'=> isset($options['prefix'])?$options['prefix']:null,
                'upload_id_marker'=> isset($options['upload_id_marker'])?$options['upload_id_marker']:null,
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->listMultipartUploadsValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * listMultipartUploads: List multipart uploads in the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/list_multipart_uploads.html Documentation URL
     * @param string 'delimiter' Put all keys that share a common prefix into a list
     * @param string 'key_marker' Limit results returned from the first key after key_marker sorted by alphabetical order
     * @param integer 'limit' Results count limit
     * @param string 'prefix' Limits results to keys that begin with the prefix
     * @param string 'upload_id_marker' Limit results returned from the first uploading segment after upload_id_marker sorted by the time of upload_id
     * @return Unpacker
     * @throws \Exception
     */
    public function listMultipartUploads($options=array())
    {
        $req = $this->listMultipartUploadsRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: listMultipartUploads');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * listMultipartUploadsQuery: listMultipartUploads's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/list_multipart_uploads.html Documentation URL
     * @param string 'delimiter' Put all keys that share a common prefix into a list
     * @param string 'key_marker' Limit results returned from the first key after key_marker sorted by alphabetical order
     * @param integer 'limit' Results count limit
     * @param string 'prefix' Limits results to keys that begin with the prefix
     * @param string 'upload_id_marker' Limit results returned from the first uploading segment after upload_id_marker sorted by the time of upload_id
     *
     * @return Request
     */
    public function listMultipartUploadsQuery($expires, $options=array())
    {
        $req = $this->listMultipartUploadsRequest($options);
        return $req->query_sign($expires);
    }
    
    public function listMultipartUploadsValidate($operation)
    {
    }

    
    /**
     * listObjectsRequest: Build ListObjects's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get.html Documentation URL
     * @param string 'delimiter' Put all keys that share a common prefix into a list
     * @param integer 'limit' Results count limit
     * @param string 'marker' Limit results to keys that start at this marker
     * @param string 'prefix' Limits results to keys that begin with the prefix
     *
     * @return Request
     */
    public function listObjectsRequest($options=array())
    {
        $operation = array(
            'API' => 'ListObjects',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
                'delimiter'=> isset($options['delimiter'])?$options['delimiter']:null,
                'limit'=> isset($options['limit'])?$options['limit']:null,
                'marker'=> isset($options['marker'])?$options['marker']:null,
                'prefix'=> isset($options['prefix'])?$options['prefix']:null,
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->listObjectsValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * listObjects: Retrieve the object list in a bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get.html Documentation URL
     * @param string 'delimiter' Put all keys that share a common prefix into a list
     * @param integer 'limit' Results count limit
     * @param string 'marker' Limit results to keys that start at this marker
     * @param string 'prefix' Limits results to keys that begin with the prefix
     * @return Unpacker
     * @throws \Exception
     */
    public function listObjects($options=array())
    {
        $req = $this->listObjectsRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: listObjects');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * listObjectsQuery: listObjects's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/get.html Documentation URL
     * @param string 'delimiter' Put all keys that share a common prefix into a list
     * @param integer 'limit' Results count limit
     * @param string 'marker' Limit results to keys that start at this marker
     * @param string 'prefix' Limits results to keys that begin with the prefix
     *
     * @return Request
     */
    public function listObjectsQuery($expires, $options=array())
    {
        $req = $this->listObjectsRequest($options);
        return $req->query_sign($expires);
    }
    
    public function listObjectsValidate($operation)
    {
    }

    
    /**
     * putRequest: Build Put's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/put.html Documentation URL
     *
     * @return Request
     */
    public function putRequest()
    {
        $operation = array(
            'API' => 'PutBucket',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->putValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * put: Create a new bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/put.html Documentation URL
     * @return Unpacker
     * @throws \Exception
     */
    public function put()
    {
        $req = $this->putRequest();
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: put');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * putQuery: put's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/put.html Documentation URL
     *
     * @return Request
     */
    public function putQuery($expires)
    {
        $req = $this->putRequest();
        return $req->query_sign($expires);
    }
    
    public function putValidate($operation)
    {
    }

    
    /**
     * putACLRequest: Build PutACL's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/put_acl.html Documentation URL
     * @param array 'acl' Bucket ACL rules
     *
     * @return Request
     */
    public function putACLRequest($options=array())
    {
        $operation = array(
            'API' => 'PutBucketACL',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>?acl',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
                'acl' => isset($options['acl'])?$options['acl']:null,
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->putACLValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * putACL: Set ACL information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/put_acl.html Documentation URL
     * @param array 'acl' Bucket ACL rules
     * @return Unpacker
     * @throws \Exception
     */
    public function putACL($options=array())
    {
        $req = $this->putACLRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: putACL');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * putACLQuery: putACL's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/put_acl.html Documentation URL
     * @param array 'acl' Bucket ACL rules
     *
     * @return Request
     */
    public function putACLQuery($expires, $options=array())
    {
        $req = $this->putACLRequest($options);
        return $req->query_sign($expires);
    }
    
    public function putACLValidate($operation)
    {
        if (!isset($operation['Elements']['acl'])
              || (
                  $operation['Elements']['acl'] ===''
                  || $operation['Elements']['acl'] === array()
                  || $operation['Elements']['acl'] === null
                  )
          ) {
            throw new Exception\ParameterRequiredException('acl', 'PutBucketACLInput');
        }
        foreach ($operation['Elements']['acl'] as $key) {
            if (!isset($key['grantee'])
              ||(
                  $key['grantee'] ===''
                  || $key['grantee'] === array()
                  || $key['grantee'] === null
                 )
          ) {
                if (!isset($key["grantee"]['type'])
          ||(
              $key["grantee"]['type'] ===''
          || $key["grantee"]['type'] === array()
          || $key["grantee"]['type'] === null
      )) {
                    throw new Exception\ParameterRequiredException('type', 'grantee');
                }
                if (!isset($key["grantee"]['type'])
          || (
              $key["grantee"]['type'] ===''
              || $key["grantee"]['type'] === array()
              || $key["grantee"]['type'] === null
              )
          ) {
                    $type_valid_values = array("user", "group");
                    if (in_array($key["grantee"]['type'], $type_valid_values)) {
                        throw new Exception\ParameterValueNotAllowedException(
                  'type',
                  $key["grantee"]['type'],
                  $type_valid_values
              );
                    }
                }
            }
            if (!isset($key['grantee'])) {
                throw new Exception\ParameterRequiredException('grantee', 'acl');
            }
      
            if (!isset($key['permission'])
          ||(
              $key['permission'] ===''
          || $key['permission'] === array()
          || $key['permission'] === null
      )) {
                throw new Exception\ParameterRequiredException('permission', 'acl');
            }
            if (!isset($key['permission'])
          || (
              $key['permission'] ===''
              || $key['permission'] === array()
              || $key['permission'] === null
              )
          ) {
                $permission_valid_values = array("READ", "WRITE", "FULL_CONTROL");
                if (in_array($key['permission'], $permission_valid_values)) {
                    throw new Exception\ParameterValueNotAllowedException(
                  'permission',
                  $key['permission'],
                  $permission_valid_values
              );
                }
            }
        }
    }

    
    /**
     * putCORSRequest: Build PutCORS's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/put_cors.html Documentation URL
     * @param array 'cors_rules' Bucket CORS rules
     *
     * @return Request
     */
    public function putCORSRequest($options=array())
    {
        $operation = array(
            'API' => 'PutBucketCORS',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>?cors',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
                'cors_rules' => isset($options['cors_rules'])?$options['cors_rules']:null,
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->putCORSValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * putCORS: Set CORS information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/put_cors.html Documentation URL
     * @param array 'cors_rules' Bucket CORS rules
     * @return Unpacker
     * @throws \Exception
     */
    public function putCORS($options=array())
    {
        $req = $this->putCORSRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: putCORS');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * putCORSQuery: putCORS's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/cors/put_cors.html Documentation URL
     * @param array 'cors_rules' Bucket CORS rules
     *
     * @return Request
     */
    public function putCORSQuery($expires, $options=array())
    {
        $req = $this->putCORSRequest($options);
        return $req->query_sign($expires);
    }
    
    public function putCORSValidate($operation)
    {
        if (!isset($operation['Elements']['cors_rules'])
              || (
                  $operation['Elements']['cors_rules'] ===''
                  || $operation['Elements']['cors_rules'] === array()
                  || $operation['Elements']['cors_rules'] === null
                  )
          ) {
            throw new Exception\ParameterRequiredException('cors_rules', 'PutBucketCORSInput');
        }
        foreach ($operation['Elements']['cors_rules'] as $key) {
            if (!isset($key['allowed_methods'])
              || (
                  $key['allowed_methods'] ===''
                  || $key['allowed_methods'] === array()
                  || $key['allowed_methods'] === null
                  )
          ) {
                throw new Exception\ParameterRequiredException('allowed_methods', 'cors_rule');
            }
      
            if (!isset($key['allowed_origin'])
          ||(
              $key['allowed_origin'] ===''
          || $key['allowed_origin'] === array()
          || $key['allowed_origin'] === null
      )) {
                throw new Exception\ParameterRequiredException('allowed_origin', 'cors_rule');
            }
        }
    }

    
    /**
     * putExternalMirrorRequest: Build PutExternalMirror's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/put_external_mirror.html Documentation URL
     * @param string 'source_site' Source site url
     *
     * @return Request
     */
    public function putExternalMirrorRequest($options=array())
    {
        $operation = array(
            'API' => 'PutBucketExternalMirror',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>?mirror',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
                'source_site' => isset($options['source_site'])?$options['source_site']:null,
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->putExternalMirrorValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * putExternalMirror: Set external mirror of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/put_external_mirror.html Documentation URL
     * @param string 'source_site' Source site url
     * @return Unpacker
     * @throws \Exception
     */
    public function putExternalMirror($options=array())
    {
        $req = $this->putExternalMirrorRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: putExternalMirror');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * putExternalMirrorQuery: putExternalMirror's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/external_mirror/put_external_mirror.html Documentation URL
     * @param string 'source_site' Source site url
     *
     * @return Request
     */
    public function putExternalMirrorQuery($expires, $options=array())
    {
        $req = $this->putExternalMirrorRequest($options);
        return $req->query_sign($expires);
    }
    
    public function putExternalMirrorValidate($operation)
    {
        if (!isset($operation['Elements']['source_site'])
          ||(
              $operation['Elements']['source_site'] ===''
          || $operation['Elements']['source_site'] === array()
          || $operation['Elements']['source_site'] === null
      )) {
            throw new Exception\ParameterRequiredException('source_site', 'PutBucketExternalMirrorInput');
        }
    }

    
    /**
     * putLifecycleRequest: Build PutLifecycle's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/put_lifecycle.html Documentation URL
     * @param array 'rule' Bucket Lifecycle rule
     *
     * @return Request
     */
    public function putLifecycleRequest($options=array())
    {
        $operation = array(
            'API' => 'PutBucketLifecycle',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>?lifecycle',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
                'rule' => isset($options['rule'])?$options['rule']:null,
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->putLifecycleValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * putLifecycle: Set Lifecycle information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/put_lifecycle.html Documentation URL
     * @param array 'rule' Bucket Lifecycle rule
     * @return Unpacker
     * @throws \Exception
     */
    public function putLifecycle($options=array())
    {
        $req = $this->putLifecycleRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: putLifecycle');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * putLifecycleQuery: putLifecycle's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/lifecycle/put_lifecycle.html Documentation URL
     * @param array 'rule' Bucket Lifecycle rule
     *
     * @return Request
     */
    public function putLifecycleQuery($expires, $options=array())
    {
        $req = $this->putLifecycleRequest($options);
        return $req->query_sign($expires);
    }
    
    public function putLifecycleValidate($operation)
    {
        if (!isset($operation['Elements']['rule'])
              || (
                  $operation['Elements']['rule'] ===''
                  || $operation['Elements']['rule'] === array()
                  || $operation['Elements']['rule'] === null
                  )
          ) {
            throw new Exception\ParameterRequiredException('rule', 'PutBucketLifecycleInput');
        }
        foreach ($operation['Elements']['rule'] as $key) {
            if (!isset($key['abort_incomplete_multipart_upload'])
              ||(
                  $key['abort_incomplete_multipart_upload'] ===''
                  || $key['abort_incomplete_multipart_upload'] === array()
                  || $key['abort_incomplete_multipart_upload'] === null
                 )
          ) {
                if (!isset($key["abort_incomplete_multipart_upload"]['days_after_initiation'])
          ||(
              $key["abort_incomplete_multipart_upload"]['days_after_initiation'] ===''
          || $key["abort_incomplete_multipart_upload"]['days_after_initiation'] === array()
          || $key["abort_incomplete_multipart_upload"]['days_after_initiation'] === null
      )) {
                    throw new Exception\ParameterRequiredException('days_after_initiation', 'abort_incomplete_multipart_upload');
                }
            }
      
            if (!isset($key['expiration'])
              ||(
                  $key['expiration'] ===''
                  || $key['expiration'] === array()
                  || $key['expiration'] === null
                 )
          ) {
            }
      
            if (!isset($key['filter'])
              ||(
                  $key['filter'] ===''
                  || $key['filter'] === array()
                  || $key['filter'] === null
                 )
          ) {
                if (!isset($key["filter"]['prefix'])
          ||(
              $key["filter"]['prefix'] ===''
          || $key["filter"]['prefix'] === array()
          || $key["filter"]['prefix'] === null
      )) {
                    throw new Exception\ParameterRequiredException('prefix', 'filter');
                }
            }
            if (!isset($key['filter'])) {
                throw new Exception\ParameterRequiredException('filter', 'rule');
            }
      
            if (!isset($key['id'])
          ||(
              $key['id'] ===''
          || $key['id'] === array()
          || $key['id'] === null
      )) {
                throw new Exception\ParameterRequiredException('id', 'rule');
            }
      
            if (!isset($key['status'])
          ||(
              $key['status'] ===''
          || $key['status'] === array()
          || $key['status'] === null
      )) {
                throw new Exception\ParameterRequiredException('status', 'rule');
            }
            if (!isset($key['status'])
          || (
              $key['status'] ===''
              || $key['status'] === array()
              || $key['status'] === null
              )
          ) {
                $status_valid_values = array("enabled", "disabled");
                if (in_array($key['status'], $status_valid_values)) {
                    throw new Exception\ParameterValueNotAllowedException(
                  'status',
                  $key['status'],
                  $status_valid_values
              );
                }
            }
      
            if (!isset($key['transition'])
              ||(
                  $key['transition'] ===''
                  || $key['transition'] === array()
                  || $key['transition'] === null
                 )
          ) {
                if (!isset($key["transition"]['storage_class'])
          ||(
              $key["transition"]['storage_class'] ===''
          || $key["transition"]['storage_class'] === array()
          || $key["transition"]['storage_class'] === null
      )) {
                    throw new Exception\ParameterRequiredException('storage_class', 'transition');
                }
            }
        }
    }

    
    /**
     * putNotificationRequest: Build PutNotification's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/put_notification.html Documentation URL
     * @param array 'notifications' Bucket Notification
     *
     * @return Request
     */
    public function putNotificationRequest($options=array())
    {
        $operation = array(
            'API' => 'PutBucketNotification',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>?notification',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
                'notifications' => isset($options['notifications'])?$options['notifications']:null,
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->putNotificationValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * putNotification: Set Notification information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/put_notification.html Documentation URL
     * @param array 'notifications' Bucket Notification
     * @return Unpacker
     * @throws \Exception
     */
    public function putNotification($options=array())
    {
        $req = $this->putNotificationRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: putNotification');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * putNotificationQuery: putNotification's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/notification/put_notification.html Documentation URL
     * @param array 'notifications' Bucket Notification
     *
     * @return Request
     */
    public function putNotificationQuery($expires, $options=array())
    {
        $req = $this->putNotificationRequest($options);
        return $req->query_sign($expires);
    }
    
    public function putNotificationValidate($operation)
    {
        if (!isset($operation['Elements']['notifications'])
              || (
                  $operation['Elements']['notifications'] ===''
                  || $operation['Elements']['notifications'] === array()
                  || $operation['Elements']['notifications'] === null
                  )
          ) {
            throw new Exception\ParameterRequiredException('notifications', 'PutBucketNotificationInput');
        }
        foreach ($operation['Elements']['notifications'] as $key) {
            if (!isset($key['cloudfunc'])
          ||(
              $key['cloudfunc'] ===''
          || $key['cloudfunc'] === array()
          || $key['cloudfunc'] === null
      )) {
                throw new Exception\ParameterRequiredException('cloudfunc', 'notification');
            }
            if (!isset($key['cloudfunc'])
          || (
              $key['cloudfunc'] ===''
              || $key['cloudfunc'] === array()
              || $key['cloudfunc'] === null
              )
          ) {
                $cloudfunc_valid_values = array("tupu-porn", "notifier", "image");
                if (in_array($key['cloudfunc'], $cloudfunc_valid_values)) {
                    throw new Exception\ParameterValueNotAllowedException(
                  'cloudfunc',
                  $key['cloudfunc'],
                  $cloudfunc_valid_values
              );
                }
            }
      
            if (!isset($key['cloudfunc_args'])
              ||(
                  $key['cloudfunc_args'] ===''
                  || $key['cloudfunc_args'] === array()
                  || $key['cloudfunc_args'] === null
                 )
          ) {
                if (!isset($key["cloudfunc_args"]['action'])
          ||(
              $key["cloudfunc_args"]['action'] ===''
          || $key["cloudfunc_args"]['action'] === array()
          || $key["cloudfunc_args"]['action'] === null
      )) {
                    throw new Exception\ParameterRequiredException('action', 'cloudfunc_args');
                }
            }
      
            if (!isset($key['event_types'])
              || (
                  $key['event_types'] ===''
                  || $key['event_types'] === array()
                  || $key['event_types'] === null
                  )
          ) {
                throw new Exception\ParameterRequiredException('event_types', 'notification');
            }
      
            if (!isset($key['id'])
          ||(
              $key['id'] ===''
          || $key['id'] === array()
          || $key['id'] === null
      )) {
                throw new Exception\ParameterRequiredException('id', 'notification');
            }
        }
    }

    
    /**
     * putPolicyRequest: Build PutPolicy's request
     * @link https://docs.qingcloud.com/qingstor/api/bucket/policy/put_policy.html Documentation URL
     * @param array 'statement' Bucket policy statement
     *
     * @return Request
     */
    public function putPolicyRequest($options=array())
    {
        $operation = array(
            'API' => 'PutBucketPolicy',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>?policy',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
                'statement' => isset($options['statement'])?$options['statement']:null,
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $this->putPolicyValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * putPolicy: Set policy information of the bucket.
     * @link https://docs.qingcloud.com/qingstor/api/bucket/policy/put_policy.html Documentation URL
     * @param array 'statement' Bucket policy statement
     * @return Unpacker
     * @throws \Exception
     */
    public function putPolicy($options=array())
    {
        $req = $this->putPolicyRequest($options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: putPolicy');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * putPolicyQuery: putPolicy's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/bucket/policy/put_policy.html Documentation URL
     * @param array 'statement' Bucket policy statement
     *
     * @return Request
     */
    public function putPolicyQuery($expires, $options=array())
    {
        $req = $this->putPolicyRequest($options);
        return $req->query_sign($expires);
    }
    
    public function putPolicyValidate($operation)
    {
        if (!isset($operation['Elements']['statement'])
              || (
                  $operation['Elements']['statement'] ===''
                  || $operation['Elements']['statement'] === array()
                  || $operation['Elements']['statement'] === null
                  )
          ) {
            throw new Exception\ParameterRequiredException('statement', 'PutBucketPolicyInput');
        }
        foreach ($operation['Elements']['statement'] as $key) {
            if (!isset($key['action'])
              || (
                  $key['action'] ===''
                  || $key['action'] === array()
                  || $key['action'] === null
                  )
          ) {
                throw new Exception\ParameterRequiredException('action', 'statement');
            }
      
            if (!isset($key['condition'])
              ||(
                  $key['condition'] ===''
                  || $key['condition'] === array()
                  || $key['condition'] === null
                 )
          ) {
                if (!isset($key["condition"]['ip_address'])
              ||(
                  $key["condition"]['ip_address'] ===''
                  || $key["condition"]['ip_address'] === array()
                  || $key["condition"]['ip_address'] === null
                 )
          ) {
                }
      
                if (!isset($key["condition"]['is_null'])
              ||(
                  $key["condition"]['is_null'] ===''
                  || $key["condition"]['is_null'] === array()
                  || $key["condition"]['is_null'] === null
                 )
          ) {
                }
      
                if (!isset($key["condition"]['not_ip_address'])
              ||(
                  $key["condition"]['not_ip_address'] ===''
                  || $key["condition"]['not_ip_address'] === array()
                  || $key["condition"]['not_ip_address'] === null
                 )
          ) {
                }
      
                if (!isset($key["condition"]['string_like'])
              ||(
                  $key["condition"]['string_like'] ===''
                  || $key["condition"]['string_like'] === array()
                  || $key["condition"]['string_like'] === null
                 )
          ) {
                }
      
                if (!isset($key["condition"]['string_not_like'])
              ||(
                  $key["condition"]['string_not_like'] ===''
                  || $key["condition"]['string_not_like'] === array()
                  || $key["condition"]['string_not_like'] === null
                 )
          ) {
                }
            }
      
            if (!isset($key['effect'])
          ||(
              $key['effect'] ===''
          || $key['effect'] === array()
          || $key['effect'] === null
      )) {
                throw new Exception\ParameterRequiredException('effect', 'statement');
            }
            if (!isset($key['effect'])
          || (
              $key['effect'] ===''
              || $key['effect'] === array()
              || $key['effect'] === null
              )
          ) {
                $effect_valid_values = array("allow", "deny");
                if (in_array($key['effect'], $effect_valid_values)) {
                    throw new Exception\ParameterValueNotAllowedException(
                  'effect',
                  $key['effect'],
                  $effect_valid_values
              );
                }
            }
      
            if (!isset($key['id'])
          ||(
              $key['id'] ===''
          || $key['id'] === array()
          || $key['id'] === null
      )) {
                throw new Exception\ParameterRequiredException('id', 'statement');
            }
      
      
            if (!isset($key['user'])
              || (
                  $key['user'] ===''
                  || $key['user'] === array()
                  || $key['user'] === null
                  )
          ) {
                throw new Exception\ParameterRequiredException('user', 'statement');
            }
        }
    }

    
    /**
     * abortMultipartUploadRequest: Build AbortMultipartUpload's request
     * @link https://docs.qingcloud.com/qingstor/api/object/abort_multipart_upload.html Documentation URL
     * @param string 'upload_id' Object multipart upload ID
     *
     * @return Request
     */
    public function abortMultipartUploadRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'AbortMultipartUpload',
            'Method' => 'DELETE',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
                'upload_id'=> isset($options['upload_id'])?$options['upload_id']:null,
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->abortMultipartUploadValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * abortMultipartUpload: Abort multipart upload.
     * @link https://docs.qingcloud.com/qingstor/api/object/abort_multipart_upload.html Documentation URL
     * @param string 'upload_id' Object multipart upload ID
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function abortMultipartUpload($object_key, $options=array())
    {
        $req = $this->abortMultipartUploadRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: abortMultipartUpload');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * abortMultipartUploadQuery: abortMultipartUpload's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/abort_multipart_upload.html Documentation URL
     * @param string 'upload_id' Object multipart upload ID
     *
     * @return Request
     */
    public function abortMultipartUploadQuery($object_key, $expires, $options=array())
    {
        $req = $this->abortMultipartUploadRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function abortMultipartUploadValidate($operation)
    {
        if (!isset($operation['Params']['upload_id'])
          ||(
              $operation['Params']['upload_id'] ===''
          || $operation['Params']['upload_id'] === array()
          || $operation['Params']['upload_id'] === null
      )) {
            throw new Exception\ParameterRequiredException('upload_id', 'AbortMultipartUploadInput');
        }
    }

    
    /**
     * completeMultipartUploadRequest: Build CompleteMultipartUpload's request
     * @link https://docs.qingcloud.com/qingstor/api/object/complete_multipart_upload.html Documentation URL
     * @param string 'ETag' MD5sum of the object part
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'upload_id' Object multipart upload ID
     * @param array 'object_parts' Object parts
     *
     * @return Request
     */
    public function completeMultipartUploadRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'CompleteMultipartUpload',
            'Method' => 'POST',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'ETag' => isset($options['ETag'])?$options['ETag']:null,
                'X-QS-Encryption-Customer-Algorithm' => isset($options['X-QS-Encryption-Customer-Algorithm'])?$options['X-QS-Encryption-Customer-Algorithm']:null,
                'X-QS-Encryption-Customer-Key' => isset($options['X-QS-Encryption-Customer-Key'])?$options['X-QS-Encryption-Customer-Key']:null,
                'X-QS-Encryption-Customer-Key-MD5' => isset($options['X-QS-Encryption-Customer-Key-MD5'])?$options['X-QS-Encryption-Customer-Key-MD5']:null,
            ),
            'Params' => array(
                'upload_id'=> isset($options['upload_id'])?$options['upload_id']:null,
            ),
            'Elements' => array(
                'object_parts' => isset($options['object_parts'])?$options['object_parts']:null,
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->completeMultipartUploadValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * completeMultipartUpload: Complete multipart upload.
     * @link https://docs.qingcloud.com/qingstor/api/object/complete_multipart_upload.html Documentation URL
     * @param string 'ETag' MD5sum of the object part
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'upload_id' Object multipart upload ID
     * @param array 'object_parts' Object parts
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function completeMultipartUpload($object_key, $options=array())
    {
        $req = $this->completeMultipartUploadRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: completeMultipartUpload');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * completeMultipartUploadQuery: completeMultipartUpload's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/complete_multipart_upload.html Documentation URL
     * @param string 'ETag' MD5sum of the object part
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'upload_id' Object multipart upload ID
     * @param array 'object_parts' Object parts
     *
     * @return Request
     */
    public function completeMultipartUploadQuery($object_key, $expires, $options=array())
    {
        $req = $this->completeMultipartUploadRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function completeMultipartUploadValidate($operation)
    {
        if (!isset($operation['Params']['upload_id'])
          ||(
              $operation['Params']['upload_id'] ===''
          || $operation['Params']['upload_id'] === array()
          || $operation['Params']['upload_id'] === null
      )) {
            throw new Exception\ParameterRequiredException('upload_id', 'CompleteMultipartUploadInput');
        }
      
      
      
      
      
        if (!isset($operation['Elements']['object_parts'])
              || (
                  $operation['Elements']['object_parts'] ===''
                  || $operation['Elements']['object_parts'] === array()
                  || $operation['Elements']['object_parts'] === null
                  )
          ) {
            throw new Exception\ParameterRequiredException('object_parts', 'CompleteMultipartUploadInput');
        }
        foreach ($operation['Elements']['object_parts'] as $key) {
            if (!isset($key['part_number'])
          ||(
              $key['part_number'] ===''
          || $key['part_number'] === array()
          || $key['part_number'] === null
      )) {
                throw new Exception\ParameterRequiredException('part_number', 'object_part');
            }
        }
    }

    
    /**
     * deleteObjectRequest: Build DeleteObject's request
     * @link https://docs.qingcloud.com/qingstor/api/object/delete.html Documentation URL
     *
     * @return Request
     */
    public function deleteObjectRequest($object_key)
    {
        $operation = array(
            'API' => 'DeleteObject',
            'Method' => 'DELETE',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->deleteObjectValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * deleteObject: Delete the object.
     * @link https://docs.qingcloud.com/qingstor/api/object/delete.html Documentation URL
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function deleteObject($object_key)
    {
        $req = $this->deleteObjectRequest($object_key);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: deleteObject');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * deleteObjectQuery: deleteObject's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/delete.html Documentation URL
     *
     * @return Request
     */
    public function deleteObjectQuery($object_key, $expires)
    {
        $req = $this->deleteObjectRequest($object_key);
        return $req->query_sign($expires);
    }
    
    public function deleteObjectValidate($operation)
    {
    }

    
    /**
     * getObjectRequest: Build GetObject's request
     * @link https://docs.qingcloud.com/qingstor/api/object/get.html Documentation URL
     * @param string 'If-Match' Check whether the ETag matches
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'If-None-Match' Check whether the ETag does not match
     * @param timestamp 'If-Unmodified-Since' Check whether the object has not been modified
     * @param string 'Range' Specified range of the object
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'response-cache-control' Specified the Cache-Control response header
     * @param string 'response-content-disposition' Specified the Content-Disposition response header
     * @param string 'response-content-encoding' Specified the Content-Encoding response header
     * @param string 'response-content-language' Specified the Content-Language response header
     * @param string 'response-content-type' Specified the Content-Type response header
     * @param string 'response-expires' Specified the Expires response header
     *
     * @return Request
     */
    public function getObjectRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'GetObject',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'If-Match' => isset($options['If-Match'])?$options['If-Match']:null,
                'If-Modified-Since' => isset($options['If-Modified-Since'])?$options['If-Modified-Since']:null,
                'If-None-Match' => isset($options['If-None-Match'])?$options['If-None-Match']:null,
                'If-Unmodified-Since' => isset($options['If-Unmodified-Since'])?$options['If-Unmodified-Since']:null,
                'Range' => isset($options['Range'])?$options['Range']:null,
                'X-QS-Encryption-Customer-Algorithm' => isset($options['X-QS-Encryption-Customer-Algorithm'])?$options['X-QS-Encryption-Customer-Algorithm']:null,
                'X-QS-Encryption-Customer-Key' => isset($options['X-QS-Encryption-Customer-Key'])?$options['X-QS-Encryption-Customer-Key']:null,
                'X-QS-Encryption-Customer-Key-MD5' => isset($options['X-QS-Encryption-Customer-Key-MD5'])?$options['X-QS-Encryption-Customer-Key-MD5']:null,
            ),
            'Params' => array(
                'response-cache-control'=> isset($options['response-cache-control'])?$options['response-cache-control']:null,
                'response-content-disposition'=> isset($options['response-content-disposition'])?$options['response-content-disposition']:null,
                'response-content-encoding'=> isset($options['response-content-encoding'])?$options['response-content-encoding']:null,
                'response-content-language'=> isset($options['response-content-language'])?$options['response-content-language']:null,
                'response-content-type'=> isset($options['response-content-type'])?$options['response-content-type']:null,
                'response-expires'=> isset($options['response-expires'])?$options['response-expires']:null,
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->getObjectValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * getObject: Retrieve the object.
     * @link https://docs.qingcloud.com/qingstor/api/object/get.html Documentation URL
     * @param string 'If-Match' Check whether the ETag matches
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'If-None-Match' Check whether the ETag does not match
     * @param timestamp 'If-Unmodified-Since' Check whether the object has not been modified
     * @param string 'Range' Specified range of the object
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'response-cache-control' Specified the Cache-Control response header
     * @param string 'response-content-disposition' Specified the Content-Disposition response header
     * @param string 'response-content-encoding' Specified the Content-Encoding response header
     * @param string 'response-content-language' Specified the Content-Language response header
     * @param string 'response-content-type' Specified the Content-Type response header
     * @param string 'response-expires' Specified the Expires response header
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function getObject($object_key, $options=array())
    {
        $req = $this->getObjectRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: getObject');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * getObjectQuery: getObject's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/get.html Documentation URL
     * @param string 'If-Match' Check whether the ETag matches
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'If-None-Match' Check whether the ETag does not match
     * @param timestamp 'If-Unmodified-Since' Check whether the object has not been modified
     * @param string 'Range' Specified range of the object
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'response-cache-control' Specified the Cache-Control response header
     * @param string 'response-content-disposition' Specified the Content-Disposition response header
     * @param string 'response-content-encoding' Specified the Content-Encoding response header
     * @param string 'response-content-language' Specified the Content-Language response header
     * @param string 'response-content-type' Specified the Content-Type response header
     * @param string 'response-expires' Specified the Expires response header
     *
     * @return Request
     */
    public function getObjectQuery($object_key, $expires, $options=array())
    {
        $req = $this->getObjectRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function getObjectValidate($operation)
    {
    }

    
    /**
     * headObjectRequest: Build HeadObject's request
     * @link https://docs.qingcloud.com/qingstor/api/object/head.html Documentation URL
     * @param string 'If-Match' Check whether the ETag matches
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'If-None-Match' Check whether the ETag does not match
     * @param timestamp 'If-Unmodified-Since' Check whether the object has not been modified
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     *
     * @return Request
     */
    public function headObjectRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'HeadObject',
            'Method' => 'HEAD',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'If-Match' => isset($options['If-Match'])?$options['If-Match']:null,
                'If-Modified-Since' => isset($options['If-Modified-Since'])?$options['If-Modified-Since']:null,
                'If-None-Match' => isset($options['If-None-Match'])?$options['If-None-Match']:null,
                'If-Unmodified-Since' => isset($options['If-Unmodified-Since'])?$options['If-Unmodified-Since']:null,
                'X-QS-Encryption-Customer-Algorithm' => isset($options['X-QS-Encryption-Customer-Algorithm'])?$options['X-QS-Encryption-Customer-Algorithm']:null,
                'X-QS-Encryption-Customer-Key' => isset($options['X-QS-Encryption-Customer-Key'])?$options['X-QS-Encryption-Customer-Key']:null,
                'X-QS-Encryption-Customer-Key-MD5' => isset($options['X-QS-Encryption-Customer-Key-MD5'])?$options['X-QS-Encryption-Customer-Key-MD5']:null,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->headObjectValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * headObject: Check whether the object exists and available.
     * @link https://docs.qingcloud.com/qingstor/api/object/head.html Documentation URL
     * @param string 'If-Match' Check whether the ETag matches
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'If-None-Match' Check whether the ETag does not match
     * @param timestamp 'If-Unmodified-Since' Check whether the object has not been modified
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function headObject($object_key, $options=array())
    {
        $req = $this->headObjectRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: headObject');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * headObjectQuery: headObject's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/head.html Documentation URL
     * @param string 'If-Match' Check whether the ETag matches
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'If-None-Match' Check whether the ETag does not match
     * @param timestamp 'If-Unmodified-Since' Check whether the object has not been modified
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     *
     * @return Request
     */
    public function headObjectQuery($object_key, $expires, $options=array())
    {
        $req = $this->headObjectRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function headObjectValidate($operation)
    {
    }

    
    /**
     * imageProcessRequest: Build ImageProcess's request
     * @link https://docs.qingcloud.com/qingstor/data_process/image_process/index.html Documentation URL
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'action' Image process action
     * @param string 'response-cache-control' Specified the Cache-Control response header
     * @param string 'response-content-disposition' Specified the Content-Disposition response header
     * @param string 'response-content-encoding' Specified the Content-Encoding response header
     * @param string 'response-content-language' Specified the Content-Language response header
     * @param string 'response-content-type' Specified the Content-Type response header
     * @param string 'response-expires' Specified the Expires response header
     *
     * @return Request
     */
    public function imageProcessRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'ImageProcess',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>/<object-key>?image',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'If-Modified-Since' => isset($options['If-Modified-Since'])?$options['If-Modified-Since']:null,
            ),
            'Params' => array(
                'action'=> isset($options['action'])?$options['action']:null,
                'response-cache-control'=> isset($options['response-cache-control'])?$options['response-cache-control']:null,
                'response-content-disposition'=> isset($options['response-content-disposition'])?$options['response-content-disposition']:null,
                'response-content-encoding'=> isset($options['response-content-encoding'])?$options['response-content-encoding']:null,
                'response-content-language'=> isset($options['response-content-language'])?$options['response-content-language']:null,
                'response-content-type'=> isset($options['response-content-type'])?$options['response-content-type']:null,
                'response-expires'=> isset($options['response-expires'])?$options['response-expires']:null,
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->imageProcessValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * imageProcess: Image process with the action on the object
     * @link https://docs.qingcloud.com/qingstor/data_process/image_process/index.html Documentation URL
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'action' Image process action
     * @param string 'response-cache-control' Specified the Cache-Control response header
     * @param string 'response-content-disposition' Specified the Content-Disposition response header
     * @param string 'response-content-encoding' Specified the Content-Encoding response header
     * @param string 'response-content-language' Specified the Content-Language response header
     * @param string 'response-content-type' Specified the Content-Type response header
     * @param string 'response-expires' Specified the Expires response header
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function imageProcess($object_key, $options=array())
    {
        $req = $this->imageProcessRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: imageProcess');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * imageProcessQuery: imageProcess's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/data_process/image_process/index.html Documentation URL
     * @param timestamp 'If-Modified-Since' Check whether the object has been modified
     * @param string 'action' Image process action
     * @param string 'response-cache-control' Specified the Cache-Control response header
     * @param string 'response-content-disposition' Specified the Content-Disposition response header
     * @param string 'response-content-encoding' Specified the Content-Encoding response header
     * @param string 'response-content-language' Specified the Content-Language response header
     * @param string 'response-content-type' Specified the Content-Type response header
     * @param string 'response-expires' Specified the Expires response header
     *
     * @return Request
     */
    public function imageProcessQuery($object_key, $expires, $options=array())
    {
        $req = $this->imageProcessRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function imageProcessValidate($operation)
    {
        if (!isset($operation['Params']['action'])
          ||(
              $operation['Params']['action'] ===''
          || $operation['Params']['action'] === array()
          || $operation['Params']['action'] === null
      )) {
            throw new Exception\ParameterRequiredException('action', 'ImageProcessInput');
        }
    }

    
    /**
     * initiateMultipartUploadRequest: Build InitiateMultipartUpload's request
     * @link https://docs.qingcloud.com/qingstor/api/object/initiate_multipart_upload.html Documentation URL
     * @param string 'Content-Type' Object content type
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Storage-Class' Specify the storage class for object
     *
     * @return Request
     */
    public function initiateMultipartUploadRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'InitiateMultipartUpload',
            'Method' => 'POST',
            'Uri' => '/<bucket-name>/<object-key>?uploads',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'Content-Type' => isset($options['Content-Type'])?$options['Content-Type']:null,
                'X-QS-Encryption-Customer-Algorithm' => isset($options['X-QS-Encryption-Customer-Algorithm'])?$options['X-QS-Encryption-Customer-Algorithm']:null,
                'X-QS-Encryption-Customer-Key' => isset($options['X-QS-Encryption-Customer-Key'])?$options['X-QS-Encryption-Customer-Key']:null,
                'X-QS-Encryption-Customer-Key-MD5' => isset($options['X-QS-Encryption-Customer-Key-MD5'])?$options['X-QS-Encryption-Customer-Key-MD5']:null,
                'X-QS-Storage-Class' => isset($options['X-QS-Storage-Class'])?$options['X-QS-Storage-Class']:null,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->initiateMultipartUploadValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * initiateMultipartUpload: Initial multipart upload on the object.
     * @link https://docs.qingcloud.com/qingstor/api/object/initiate_multipart_upload.html Documentation URL
     * @param string 'Content-Type' Object content type
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Storage-Class' Specify the storage class for object
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function initiateMultipartUpload($object_key, $options=array())
    {
        $req = $this->initiateMultipartUploadRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: initiateMultipartUpload');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * initiateMultipartUploadQuery: initiateMultipartUpload's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/initiate_multipart_upload.html Documentation URL
     * @param string 'Content-Type' Object content type
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Storage-Class' Specify the storage class for object
     *
     * @return Request
     */
    public function initiateMultipartUploadQuery($object_key, $expires, $options=array())
    {
        $req = $this->initiateMultipartUploadRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function initiateMultipartUploadValidate($operation)
    {
        if (!isset($operation['Headers']['X-QS-Storage-Class'])
          || (
              $operation['Headers']['X-QS-Storage-Class'] ===''
              || $operation['Headers']['X-QS-Storage-Class'] === array()
              || $operation['Headers']['X-QS-Storage-Class'] === null
              )
          ) {
            $x_qs_storage_class_valid_values = array("STANDARD", "STANDARD_IA");
            if (in_array($operation['Headers']['X-QS-Storage-Class'], $x_qs_storage_class_valid_values)) {
                throw new Exception\ParameterValueNotAllowedException(
                  'X-QS-Storage-Class',
                  $operation['Headers']['X-QS-Storage-Class'],
                  $x_qs_storage_class_valid_values
              );
            }
        }
    }

    
    /**
     * listMultipartRequest: Build ListMultipart's request
     * @link https://docs.qingcloud.com/qingstor/api/object/list_multipart.html Documentation URL
     * @param integer 'limit' Limit results count
     * @param integer 'part_number_marker' Object multipart upload part number
     * @param string 'upload_id' Object multipart upload ID
     *
     * @return Request
     */
    public function listMultipartRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'ListMultipart',
            'Method' => 'GET',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
            ),
            'Params' => array(
                'limit'=> isset($options['limit'])?$options['limit']:null,
                'part_number_marker'=> isset($options['part_number_marker'])?$options['part_number_marker']:null,
                'upload_id'=> isset($options['upload_id'])?$options['upload_id']:null,
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->listMultipartValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * listMultipart: List object parts.
     * @link https://docs.qingcloud.com/qingstor/api/object/list_multipart.html Documentation URL
     * @param integer 'limit' Limit results count
     * @param integer 'part_number_marker' Object multipart upload part number
     * @param string 'upload_id' Object multipart upload ID
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function listMultipart($object_key, $options=array())
    {
        $req = $this->listMultipartRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: listMultipart');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * listMultipartQuery: listMultipart's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/list_multipart.html Documentation URL
     * @param integer 'limit' Limit results count
     * @param integer 'part_number_marker' Object multipart upload part number
     * @param string 'upload_id' Object multipart upload ID
     *
     * @return Request
     */
    public function listMultipartQuery($object_key, $expires, $options=array())
    {
        $req = $this->listMultipartRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function listMultipartValidate($operation)
    {
        if (!isset($operation['Params']['upload_id'])
          ||(
              $operation['Params']['upload_id'] ===''
          || $operation['Params']['upload_id'] === array()
          || $operation['Params']['upload_id'] === null
      )) {
            throw new Exception\ParameterRequiredException('upload_id', 'ListMultipartInput');
        }
    }

    
    /**
     * optionsObjectRequest: Build OptionsObject's request
     * @link https://docs.qingcloud.com/qingstor/api/object/options.html Documentation URL
     * @param string 'Access-Control-Request-Headers' Request headers
     * @param string 'Access-Control-Request-Method' Request method
     * @param string 'Origin' Request origin
     *
     * @return Request
     */
    public function optionsObjectRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'OptionsObject',
            'Method' => 'OPTIONS',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'Access-Control-Request-Headers' => isset($options['Access-Control-Request-Headers'])?$options['Access-Control-Request-Headers']:null,
                'Access-Control-Request-Method' => isset($options['Access-Control-Request-Method'])?$options['Access-Control-Request-Method']:null,
                'Origin' => isset($options['Origin'])?$options['Origin']:null,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => null
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->optionsObjectValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * optionsObject: Check whether the object accepts a origin with method and header.
     * @link https://docs.qingcloud.com/qingstor/api/object/options.html Documentation URL
     * @param string 'Access-Control-Request-Headers' Request headers
     * @param string 'Access-Control-Request-Method' Request method
     * @param string 'Origin' Request origin
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function optionsObject($object_key, $options=array())
    {
        $req = $this->optionsObjectRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: optionsObject');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * optionsObjectQuery: optionsObject's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/options.html Documentation URL
     * @param string 'Access-Control-Request-Headers' Request headers
     * @param string 'Access-Control-Request-Method' Request method
     * @param string 'Origin' Request origin
     *
     * @return Request
     */
    public function optionsObjectQuery($object_key, $expires, $options=array())
    {
        $req = $this->optionsObjectRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function optionsObjectValidate($operation)
    {
        if (!isset($operation['Headers']['Access-Control-Request-Method'])
          ||(
              $operation['Headers']['Access-Control-Request-Method'] ===''
          || $operation['Headers']['Access-Control-Request-Method'] === array()
          || $operation['Headers']['Access-Control-Request-Method'] === null
      )) {
            throw new Exception\ParameterRequiredException('Access-Control-Request-Method', 'OptionsObjectInput');
        }
      
        if (!isset($operation['Headers']['Origin'])
          ||(
              $operation['Headers']['Origin'] ===''
          || $operation['Headers']['Origin'] === array()
          || $operation['Headers']['Origin'] === null
      )) {
            throw new Exception\ParameterRequiredException('Origin', 'OptionsObjectInput');
        }
    }

    
    /**
     * putObjectRequest: Build PutObject's request
     * @link https://docs.qingcloud.com/qingstor/api/object/put.html Documentation URL
     * @param long 'Content-Length' Object content size
     * @param string 'Content-MD5' Object MD5sum
     * @param string 'Content-Type' Object content type
     * @param string 'Expect' Used to indicate that particular server behaviors are required by the client
     * @param string 'X-QS-Copy-Source' Copy source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Copy-Source-If-Match' Check whether the copy source matches
     * @param timestamp 'X-QS-Copy-Source-If-Modified-Since' Check whether the copy source has been modified
     * @param string 'X-QS-Copy-Source-If-None-Match' Check whether the copy source does not match
     * @param timestamp 'X-QS-Copy-Source-If-Unmodified-Since' Check whether the copy source has not been modified
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param timestamp 'X-QS-Fetch-If-Unmodified-Since' Check whether fetch target object has not been modified
     * @param string 'X-QS-Fetch-Source' Fetch source, should be a valid url
     * @param string 'X-QS-Move-Source' Move source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Storage-Class' Specify the storage class for object
     *
     * @return Request
     */
    public function putObjectRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'PutObject',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'Content-Length' => isset($options['Content-Length'])?$options['Content-Length']:null,
                'Content-MD5' => isset($options['Content-MD5'])?$options['Content-MD5']:null,
                'Content-Type' => isset($options['Content-Type'])?$options['Content-Type']:null,
                'Expect' => isset($options['Expect'])?$options['Expect']:null,
                'X-QS-Copy-Source' => isset($options['X-QS-Copy-Source'])?$options['X-QS-Copy-Source']:null,
                'X-QS-Copy-Source-Encryption-Customer-Algorithm' => isset($options['X-QS-Copy-Source-Encryption-Customer-Algorithm'])?$options['X-QS-Copy-Source-Encryption-Customer-Algorithm']:null,
                'X-QS-Copy-Source-Encryption-Customer-Key' => isset($options['X-QS-Copy-Source-Encryption-Customer-Key'])?$options['X-QS-Copy-Source-Encryption-Customer-Key']:null,
                'X-QS-Copy-Source-Encryption-Customer-Key-MD5' => isset($options['X-QS-Copy-Source-Encryption-Customer-Key-MD5'])?$options['X-QS-Copy-Source-Encryption-Customer-Key-MD5']:null,
                'X-QS-Copy-Source-If-Match' => isset($options['X-QS-Copy-Source-If-Match'])?$options['X-QS-Copy-Source-If-Match']:null,
                'X-QS-Copy-Source-If-Modified-Since' => isset($options['X-QS-Copy-Source-If-Modified-Since'])?$options['X-QS-Copy-Source-If-Modified-Since']:null,
                'X-QS-Copy-Source-If-None-Match' => isset($options['X-QS-Copy-Source-If-None-Match'])?$options['X-QS-Copy-Source-If-None-Match']:null,
                'X-QS-Copy-Source-If-Unmodified-Since' => isset($options['X-QS-Copy-Source-If-Unmodified-Since'])?$options['X-QS-Copy-Source-If-Unmodified-Since']:null,
                'X-QS-Encryption-Customer-Algorithm' => isset($options['X-QS-Encryption-Customer-Algorithm'])?$options['X-QS-Encryption-Customer-Algorithm']:null,
                'X-QS-Encryption-Customer-Key' => isset($options['X-QS-Encryption-Customer-Key'])?$options['X-QS-Encryption-Customer-Key']:null,
                'X-QS-Encryption-Customer-Key-MD5' => isset($options['X-QS-Encryption-Customer-Key-MD5'])?$options['X-QS-Encryption-Customer-Key-MD5']:null,
                'X-QS-Fetch-If-Unmodified-Since' => isset($options['X-QS-Fetch-If-Unmodified-Since'])?$options['X-QS-Fetch-If-Unmodified-Since']:null,
                'X-QS-Fetch-Source' => isset($options['X-QS-Fetch-Source'])?$options['X-QS-Fetch-Source']:null,
                'X-QS-Move-Source' => isset($options['X-QS-Move-Source'])?$options['X-QS-Move-Source']:null,
                'X-QS-Storage-Class' => isset($options['X-QS-Storage-Class'])?$options['X-QS-Storage-Class']:null,
            ),
            'Params' => array(
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => isset($options['body'])?$options['body']:''
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->putObjectValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * putObject: Upload the object.
     * @link https://docs.qingcloud.com/qingstor/api/object/put.html Documentation URL
     * @param long 'Content-Length' Object content size
     * @param string 'Content-MD5' Object MD5sum
     * @param string 'Content-Type' Object content type
     * @param string 'Expect' Used to indicate that particular server behaviors are required by the client
     * @param string 'X-QS-Copy-Source' Copy source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Copy-Source-If-Match' Check whether the copy source matches
     * @param timestamp 'X-QS-Copy-Source-If-Modified-Since' Check whether the copy source has been modified
     * @param string 'X-QS-Copy-Source-If-None-Match' Check whether the copy source does not match
     * @param timestamp 'X-QS-Copy-Source-If-Unmodified-Since' Check whether the copy source has not been modified
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param timestamp 'X-QS-Fetch-If-Unmodified-Since' Check whether fetch target object has not been modified
     * @param string 'X-QS-Fetch-Source' Fetch source, should be a valid url
     * @param string 'X-QS-Move-Source' Move source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Storage-Class' Specify the storage class for object
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function putObject($object_key, $options=array())
    {
        $req = $this->putObjectRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: putObject');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * putObjectQuery: putObject's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/put.html Documentation URL
     * @param long 'Content-Length' Object content size
     * @param string 'Content-MD5' Object MD5sum
     * @param string 'Content-Type' Object content type
     * @param string 'Expect' Used to indicate that particular server behaviors are required by the client
     * @param string 'X-QS-Copy-Source' Copy source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Copy-Source-If-Match' Check whether the copy source matches
     * @param timestamp 'X-QS-Copy-Source-If-Modified-Since' Check whether the copy source has been modified
     * @param string 'X-QS-Copy-Source-If-None-Match' Check whether the copy source does not match
     * @param timestamp 'X-QS-Copy-Source-If-Unmodified-Since' Check whether the copy source has not been modified
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param timestamp 'X-QS-Fetch-If-Unmodified-Since' Check whether fetch target object has not been modified
     * @param string 'X-QS-Fetch-Source' Fetch source, should be a valid url
     * @param string 'X-QS-Move-Source' Move source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Storage-Class' Specify the storage class for object
     *
     * @return Request
     */
    public function putObjectQuery($object_key, $expires, $options=array())
    {
        $req = $this->putObjectRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function putObjectValidate($operation)
    {
        if (!isset($operation['Headers']['X-QS-Storage-Class'])
          || (
              $operation['Headers']['X-QS-Storage-Class'] ===''
              || $operation['Headers']['X-QS-Storage-Class'] === array()
              || $operation['Headers']['X-QS-Storage-Class'] === null
              )
          ) {
            $x_qs_storage_class_valid_values = array("STANDARD", "STANDARD_IA");
            if (in_array($operation['Headers']['X-QS-Storage-Class'], $x_qs_storage_class_valid_values)) {
                throw new Exception\ParameterValueNotAllowedException(
                  'X-QS-Storage-Class',
                  $operation['Headers']['X-QS-Storage-Class'],
                  $x_qs_storage_class_valid_values
              );
            }
        }
    }

    
    /**
     * uploadMultipartRequest: Build UploadMultipart's request
     * @link https://docs.qingcloud.com/qingstor/api/object/multipart/upload_multipart.html Documentation URL
     * @param long 'Content-Length' Object multipart content length
     * @param string 'Content-MD5' Object multipart content MD5sum
     * @param string 'X-QS-Copy-Range' Specify range of the source object
     * @param string 'X-QS-Copy-Source' Copy source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Copy-Source-If-Match' Check whether the Etag of copy source matches the specified value
     * @param timestamp 'X-QS-Copy-Source-If-Modified-Since' Check whether the copy source has been modified since the specified date
     * @param string 'X-QS-Copy-Source-If-None-Match' Check whether the Etag of copy source does not matches the specified value
     * @param timestamp 'X-QS-Copy-Source-If-Unmodified-Since' Check whether the copy source has not been unmodified since the specified date
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param integer 'part_number' Object multipart upload part number
     * @param string 'upload_id' Object multipart upload ID
     *
     * @return Request
     */
    public function uploadMultipartRequest($object_key, $options=array())
    {
        $operation = array(
            'API' => 'UploadMultipart',
            'Method' => 'PUT',
            'Uri' => '/<bucket-name>/<object-key>',
            'Headers' => array(
                'Host' => $this->properties['zone'] . '.' . $this->config->host,
                'Content-Length' => isset($options['Content-Length'])?$options['Content-Length']:null,
                'Content-MD5' => isset($options['Content-MD5'])?$options['Content-MD5']:null,
                'X-QS-Copy-Range' => isset($options['X-QS-Copy-Range'])?$options['X-QS-Copy-Range']:null,
                'X-QS-Copy-Source' => isset($options['X-QS-Copy-Source'])?$options['X-QS-Copy-Source']:null,
                'X-QS-Copy-Source-Encryption-Customer-Algorithm' => isset($options['X-QS-Copy-Source-Encryption-Customer-Algorithm'])?$options['X-QS-Copy-Source-Encryption-Customer-Algorithm']:null,
                'X-QS-Copy-Source-Encryption-Customer-Key' => isset($options['X-QS-Copy-Source-Encryption-Customer-Key'])?$options['X-QS-Copy-Source-Encryption-Customer-Key']:null,
                'X-QS-Copy-Source-Encryption-Customer-Key-MD5' => isset($options['X-QS-Copy-Source-Encryption-Customer-Key-MD5'])?$options['X-QS-Copy-Source-Encryption-Customer-Key-MD5']:null,
                'X-QS-Copy-Source-If-Match' => isset($options['X-QS-Copy-Source-If-Match'])?$options['X-QS-Copy-Source-If-Match']:null,
                'X-QS-Copy-Source-If-Modified-Since' => isset($options['X-QS-Copy-Source-If-Modified-Since'])?$options['X-QS-Copy-Source-If-Modified-Since']:null,
                'X-QS-Copy-Source-If-None-Match' => isset($options['X-QS-Copy-Source-If-None-Match'])?$options['X-QS-Copy-Source-If-None-Match']:null,
                'X-QS-Copy-Source-If-Unmodified-Since' => isset($options['X-QS-Copy-Source-If-Unmodified-Since'])?$options['X-QS-Copy-Source-If-Unmodified-Since']:null,
                'X-QS-Encryption-Customer-Algorithm' => isset($options['X-QS-Encryption-Customer-Algorithm'])?$options['X-QS-Encryption-Customer-Algorithm']:null,
                'X-QS-Encryption-Customer-Key' => isset($options['X-QS-Encryption-Customer-Key'])?$options['X-QS-Encryption-Customer-Key']:null,
                'X-QS-Encryption-Customer-Key-MD5' => isset($options['X-QS-Encryption-Customer-Key-MD5'])?$options['X-QS-Encryption-Customer-Key-MD5']:null,
            ),
            'Params' => array(
                'part_number'=> isset($options['part_number'])?$options['part_number']:null,
                'upload_id'=> isset($options['upload_id'])?$options['upload_id']:null,
            ),
            'Elements' => array(
            ),
            'Properties' => $this->properties,
            'Body' => isset($options['body'])?$options['body']:''
        );
        $operation['Properties']['object-key'] = $object_key;
        $this->uploadMultipartValidate($operation);
        $req = new Request($this->config, $operation);
        return $req;
    }
    

    /**
     * uploadMultipart: Upload object multipart.
     * @link https://docs.qingcloud.com/qingstor/api/object/multipart/upload_multipart.html Documentation URL
     * @param long 'Content-Length' Object multipart content length
     * @param string 'Content-MD5' Object multipart content MD5sum
     * @param string 'X-QS-Copy-Range' Specify range of the source object
     * @param string 'X-QS-Copy-Source' Copy source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Copy-Source-If-Match' Check whether the Etag of copy source matches the specified value
     * @param timestamp 'X-QS-Copy-Source-If-Modified-Since' Check whether the copy source has been modified since the specified date
     * @param string 'X-QS-Copy-Source-If-None-Match' Check whether the Etag of copy source does not matches the specified value
     * @param timestamp 'X-QS-Copy-Source-If-Unmodified-Since' Check whether the copy source has not been unmodified since the specified date
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param integer 'part_number' Object multipart upload part number
     * @param string 'upload_id' Object multipart upload ID
     * @params string $object_key
     * @return Unpacker
     * @throws \Exception
     */
    public function uploadMultipart($object_key, $options=array())
    {
        $req = $this->uploadMultipartRequest($object_key, $options);
        $retries = $this->config->connection_retries;
        $response = null;
        while (1) {
            try {
                $GLOBALS['logger']->info('Sending QingStor request: uploadMultipart');
                $response = new Unpacker($this->config->client->send(
                    $req->sign()
                ));
                break;
            } catch (\Exception $e) {
                $GLOBALS['logger']->error($e->getMessage());
                if ($retries > 0) {
                    $retries -= 1;
                } else {
                    throw new \Exception('Network Error');
                }
            }
        }
        return $response;
    }
    

    /**
     * uploadMultipartQuery: uploadMultipart's Query Sign Way
     * @link https://docs.qingcloud.com/qingstor/api/object/multipart/upload_multipart.html Documentation URL
     * @param long 'Content-Length' Object multipart content length
     * @param string 'Content-MD5' Object multipart content MD5sum
     * @param string 'X-QS-Copy-Range' Specify range of the source object
     * @param string 'X-QS-Copy-Source' Copy source, format (/<bucket-name>/<object-key>)
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Copy-Source-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param string 'X-QS-Copy-Source-If-Match' Check whether the Etag of copy source matches the specified value
     * @param timestamp 'X-QS-Copy-Source-If-Modified-Since' Check whether the copy source has been modified since the specified date
     * @param string 'X-QS-Copy-Source-If-None-Match' Check whether the Etag of copy source does not matches the specified value
     * @param timestamp 'X-QS-Copy-Source-If-Unmodified-Since' Check whether the copy source has not been unmodified since the specified date
     * @param string 'X-QS-Encryption-Customer-Algorithm' Encryption algorithm of the object
     * @param string 'X-QS-Encryption-Customer-Key' Encryption key of the object
     * @param string 'X-QS-Encryption-Customer-Key-MD5' MD5sum of encryption key
     * @param integer 'part_number' Object multipart upload part number
     * @param string 'upload_id' Object multipart upload ID
     *
     * @return Request
     */
    public function uploadMultipartQuery($object_key, $expires, $options=array())
    {
        $req = $this->uploadMultipartRequest($object_key, $options);
        return $req->query_sign($expires);
    }
    
    public function uploadMultipartValidate($operation)
    {
        if (!isset($operation['Params']['part_number'])
          ||(
              $operation['Params']['part_number'] ===''
          || $operation['Params']['part_number'] === array()
          || $operation['Params']['part_number'] === null
      )) {
            throw new Exception\ParameterRequiredException('part_number', 'UploadMultipartInput');
        }
      
        if (!isset($operation['Params']['upload_id'])
          ||(
              $operation['Params']['upload_id'] ===''
          || $operation['Params']['upload_id'] === array()
          || $operation['Params']['upload_id'] === null
      )) {
            throw new Exception\ParameterRequiredException('upload_id', 'UploadMultipartInput');
        }
    }
}
