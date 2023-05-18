<?php

namespace Qcloud\Cos\ImageParamTemplate;

class CIProcessTransformation extends ImageTemplate{

    private $tranParams = array();
    private $tranString;

    public function __construct($ciProcess) {
        parent::__construct();
        $this->tranParams['ci-process'] = $ciProcess;
        $this->tranString = "";
    }

    public function addParam($name, $value, $base64 = false) {
        if(is_string($name) && strlen($name) > 0){
            if($base64) {
                $value = $this->ciBase64($value);
            }
            $this->tranParams[$name] = $value;
        }
    }

    public function queryString() {
        if($this->tranParams) {
            $this->tranString = http_build_query($this->tranParams);
        }
        return $this->tranString;
    }
}
