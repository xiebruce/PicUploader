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

namespace QingStor\SDK;

use GuzzleHttp\Client;

const defaultConfigFileContent = "# QingStor Services Configuration

access_key_id: ''
secret_access_key: ''

host: 'qingstor.com'
port: 443
protocol: 'https'
connection_retries: 3

# Valid levels are 'debug', 'info', 'warn', 'error', and 'fatal'.
log_level: 'warn'
";
const defaultConfigFile = '~/.qingstor/config.yaml';

class Config
{
    public $client;
    public $logger;

    public function __construct($access_key_id = '', $secret_access_key = '')
    {
        $GLOBALS['version'] = '2.2.6';
        $this->client = new Client([
            'http_errors' => false,
        ]);
        $this->loadDefaultConfig();
        if ($access_key_id !== '' && $secret_access_key !== '') {
            $this->access_key_id = $access_key_id;
            $this->secret_access_key = $secret_access_key;
        }
        $GLOBALS['logger'] = Logger::getInstance($this->log_level);
    }

    public function getUserConfigFilePath()
    {
        $home = getenv('HOME');
        if (stristr(PHP_OS, 'WIN')) {
            $home = getenv('HOMEDRIVE').getenv('HOMEPATH');
            if ($home === '') {
                $home = getenv('USERPROFILE');
            }
        }

        return $home.str_replace('~', '', defaultConfigFile);
    }

    public function installDefaultUserConfig()
    {
        $dir = dirname($this->getUserConfigFilePath());
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
        $config_file = fopen($this->getUserConfigFilePath(), 'w');
        fwrite($config_file, defaultConfigFileContent);
        fclose($config_file);
    }

    public function loadConfigFromData($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function loadDefaultConfig()
    {
        $config = spyc_load(defaultConfigFileContent);
        $this->loadConfigFromData($config);
    }

    public function loadUserConfig()
    {
        $config_path = $this->getUserConfigFilePath();
        if (!file_exists($config_path)) {
            $this->installDefaultUserConfig();
        }
        $this->loadConfigFromFilepath($this->getUserConfigFilePath());
    }

    public function loadConfigFromFilepath($file_path)
    {
        $config = spyc_load_file($file_path);
        $this->loadConfigFromData($config);
    }
}
