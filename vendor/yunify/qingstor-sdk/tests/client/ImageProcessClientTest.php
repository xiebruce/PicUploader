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

namespace QingStor\SDK\Test\Client;

use QingStor\SDK\Client\ImageProcessClient;
use PHPUnit\Framework\TestCase;

class ImageProcessClientTest extends TestCase
{
    public function test_info()
    {
        $client = new ImageProcessClient('', '');
        $client->info();
        $this->assertEquals(
            'info',
            $client->input['action']
        );
    }

    public function test_crop()
    {
        $client = new ImageProcessClient('', '');
        $data = array(
            'gravity' => 0
        );
        $client->crop($data);
        $this->assertEquals(
            'crop:w_0,h_0,g_0',
            $client->input['action']
        );
    }

    public function test_rotate()
    {
        $client = new ImageProcessClient('', '');
        $data = array(
            'angle' => 90
        );
        $client->rotate($data);
        $this->assertEquals(
            'rotate:a_90',
            $client->input['action']
        );
    }

    public function test_resize()
    {
        $client = new ImageProcessClient('', '');
        $data = array(
            'mode' => 1
        );
        $client->resize($data);
        $this->assertEquals(
            'resize:w_0,h_0,m_1',
            $client->input['action']
        );
    }

    public function test_waterMark()
    {
        $client = new ImageProcessClient('', '');
        $data = array(
            'text' => '5rC05Y2w5paH5a2X'
        );
        $client->waterMark($data);
        $this->assertEquals(
            'watermark:d_150,p_0.25,t_5rC05Y2w5paH5a2X,c_',
            $client->input['action']
        );
    }

    public function test_waterMarkImage()
    {
        $client = new ImageProcessClient('', '');
        $data = array(
            'url' => 'aHR0cHM6Ly9wZWszYS5xaW5nc3Rvci5jb20vaW1nLWRvYy1lZy9xaW5jbG91ZC5wbmc'
        );
        $client->waterMarkImage($data);
        $this->assertEquals(
            'watermark_image:l_0,t_0,p_0.25,u_aHR0cHM6Ly9w'.
            'ZWszYS5xaW5nc3Rvci5jb20vaW1nLWRvYy1lZy9xaW5jbG91ZC5wbmc',
            $client->input['action']
        );
    }

    public function test_format()
    {
        $client = new ImageProcessClient('', '');
        $data = array(
            'type' => 'png'
        );
        $client->format($data);
        $this->assertEquals(
            'format:t_png',
            $client->input['action']
        );
    }

    public function test_pipe()
    {
        $client = new ImageProcessClient('', '');

        $rotateParam = array(
            'angle' => 90
        );
        $cropParam = array(
            'width' => 300,
            'height' => 400,
            'gravity' => 0
        );
        $resizeParam = array(
            'width' => 500,
            'height' => 500,
            'mode' => 1
        );
        $formatParam = array(
            'type' => 'png'
        );
        $waterMarkParam = array(
            'text' => '5rC05Y2w5paH5a2X'
        );
        $waterMarkImageParam = array(
            'url' => 'aHR0cHM6Ly9wZWszYS5xaW5nc3Rvci5jb20vaW1nLWRvYy1lZy9xaW5jbG91ZC5wbmc'
        );
        $client->rotate($rotateParam)
               ->crop($cropParam)
               ->resize($resizeParam)
               ->format($formatParam)
               ->waterMark($waterMarkParam)
               ->waterMarkImage($waterMarkImageParam)
               ->info();
        $this->assertEquals(
            'rotate:a_90|crop:w_300,h_400,g_0|resize:w_500,h_500,m_1|format:t_png|watermark:d_150,p_0.25,t_5rC05Y2w5paH5a2X,c_|watermark_image:l_0,t_0,p_0.25,u_aHR0cHM6Ly9wZWszYS5xaW5nc3Rvci5jb20vaW1nLWRvYy1lZy9xaW5jbG91ZC5wbmc|info',
            $client->input['action']
        );
    }
}
