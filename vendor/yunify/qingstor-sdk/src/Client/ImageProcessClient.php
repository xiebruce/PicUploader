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

namespace QingStor\SDK\Client;

class ImageProcessClient
{
    public function __construct($objectKey, $bucket)
    {
        $this->objectKey = $objectKey;
        $this->bucket = $bucket;
        $this->input = array();
    }
    
    public function info()
    {
        $prefix = $this->getPrefix();
        $this->input['action'] = "{$prefix}info";
        return $this;
    }

    public function crop($data=array())
    {
        if (!isset($data['width'])) {
            $data['width'] = 0;
        }
        if (!isset($data['height'])) {
            $data['height'] = 0;
        }
        
        if (!isset($data['gravity'])) {
            $data['gravity'] = 0;
        }
        $prefix = $this->getPrefix();
        $this->input['action'] = "{$prefix}crop:w_{$data['width']},".
            "h_{$data['height']},g_{$data['gravity']}";
        return $this;
    }

    public function rotate($data=array())
    {
        $prefix = $this->getPrefix();
        $this->input['action'] = "{$prefix}rotate:a_{$data['angle']}";
        return $this;
    }

    public function resize($data=array())
    {
        if (!isset($data['width'])) {
            $data['width'] = 0;
        }
        if (!isset($data['height'])) {
            $data['height'] = 0;
        }
        
        if (!isset($data['mode'])) {
            $data['mode'] = 0;
        }
        $prefix = $this->getPrefix();
        $this->input['action'] = "{$prefix}resize:w_{$data['width']},".
            "h_{$data['height']},m_{$data['mode']}";
        return $this;
    }

    public function waterMark($data=array())
    {
        if (!isset($data['dpi'])) {
            $data['dpi'] = 150;
        }
        if (!isset($data['opacity'])) {
            $data['opacity'] = 0.25;
        }
        
        if (!isset($data['color'])) {
            $data['color'] = '';
        }
        $prefix = $this->getPrefix();
        $this->input['action'] = "{$prefix}watermark:d_{$data['dpi']},".
            "p_{$data['opacity']},t_{$data['text']},c_{$data['color']}";
        return $this;
    }

    public function waterMarkImage($data=array())
    {
        if (!isset($data['left'])) {
            $data['left'] = 0;
        }
        if (!isset($data['top'])) {
            $data['top'] = 0;
        }
        
        if (!isset($data['opacity'])) {
            $data['opacity'] = 0.25;
        }
        $prefix = $this->getPrefix();
        $this->input['action'] = "{$prefix}watermark_image:l_{$data['left']},".
            "t_{$data['top']},p_{$data['opacity']},u_{$data['url']}";
        return $this;
    }

    public function format($data=array())
    {
        $prefix = $this->getPrefix();
        $this->input['action'] = "{$prefix}format:t_{$data['type']}";
        return $this;
    }
    public function getPrefix()
    {
        if ($this->input == null) {
            return "";
        }
        return "{$this->input['action']}|";
    }

    public function imageProcess()
    {
        return $this->bucket->imageProcess($this->objectKey, $this->input);
    }
}
