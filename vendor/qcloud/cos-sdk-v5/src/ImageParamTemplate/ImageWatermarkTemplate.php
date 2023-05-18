<?php

namespace Qcloud\Cos\ImageParamTemplate;

class ImageWatermarkTemplate extends ImageTemplate
{

    private $image;
    private $gravity;
    private $dx;
    private $dy;
    private $blogo;
    private $scatype;
    private $spcent;
    private $dissolve;
    private $batch;
    private $degree;

    public function __construct() {
        parent::__construct();
        $this->image = "";
        $this->gravity = "";
        $this->dx = "";
        $this->dy = "";
        $this->blogo = "";
        $this->scatype = "";
        $this->spcent = "";
        $this->dissolve = "";
        $this->batch = "";
        $this->degree = "";
    }

    /**
     * 水印图片地址，需要经过 URL 安全的 Base64 编码。
     * @param $value
     */
    public function setImage($value) {
        $this->image = "/image/" . $this->ciBase64($value);
    }

    /**
     * 图片水印位置，九宫格位置（参考九宫格方位图 ），默认值 SouthEast
     * @param $value
     */
    public function setGravity($value) {
        $this->gravity = "/gravity/" . $value;
    }

    /**
     * 水平（横轴）边距，单位为像素，缺省值为0
     * @param $value
     */
    public function setDx($value) {
        $this->dx = "/dx/" . $value;
    }

    /**
     * 垂直（纵轴）边距，单位为像素，默认值为0
     * @param $value
     */
    public function setDy($value) {
        $this->dy = "/dy/" . $value;
    }

    /**
     * 水印图适配功能，适用于水印图尺寸过大的场景（如水印墙）。共有两种类型：
     * 当 blogo 设置为1时，水印图会被缩放至与原图相似大小后添加
     * 当 blogo 设置为2时，水印图会被直接裁剪至与原图相似大小后添加
     * @param $value
     */
    public function setBlogo($value) {
        $this->blogo = "/blogo/" . $value;
    }

    /**
     * 根据原图的大小，缩放调整水印图的大小：
     * 当 scatype 设置为1时，按原图的宽缩放
     * 当 scatype 设置为2时，按原图的高缩放
     * 当 scatype 设置为3时，按原图的整体面积缩放
     * @param $value
     */
    public function setScatype($value) {
        $this->scatype = "/scatype/" . $value;
    }

    /**
     * 与 scatype 搭配使用：
     * 当 scatype 设置为1时，该有效值为[1,1000]，单位为千分比
     * 当 scatype 设置为2时，该有效值为[1,1000]，单位为千分比
     * 当 scatype 设置为3时，该有效值为[1,250]，单位为千分比。
     * @param $value
     */
    public function setSpcent($value) {
        $this->spcent = "/spcent/" . $value;
    }

    /**
     * 图片水印的透明度，取值为1 - 100，默认90（90%不透明度）
     * @param $value
     */
    public function setDissolve($value) {
        $this->dissolve = "/dissolve/" . $value;
    }

    /**
     * 平铺水印功能，可将图片水印平铺至整张图片。值为1时，表示开启平铺水印功能
     * @param $value
     */
    public function setBatch($value) {
        $this->batch = "/batch/" . $value;
    }

    /**
     * 当 batch 值为1时生效。图片水印的旋转角度设置，取值范围为0 - 360，默认0
     * @param $value
     */
    public function setDegree($value) {
        $this->degree = "/degree/" . $value;
    }

    public function getImage() {
        return $this->image;
    }

    public function getGravity() {
        return $this->gravity;
    }

    public function getDx() {
        return $this->dx;
    }

    public function getDy() {
        return $this->dy;
    }

    public function getBlogo() {
        return $this->blogo;
    }

    public function getScatype() {
        return $this->scatype;
    }

    public function getSpcent() {
        return $this->spcent;
    }

    public function getDissolve() {
        return $this->dissolve;
    }

    public function getBatch() {
        return $this->batch;
    }

    public function getDegree() {
        return $this->degree;
    }

    public function queryString() {
        $head = "watermark/1";
        $res = "";
        if($this->image) {
            $res .= $this->image;
        }
        if($this->gravity) {
            $res .= $this->gravity;
        }
        if($this->dx) {
            $res .= $this->dx;
        }
        if($this->dy) {
            $res .= $this->dy;
        }
        if($this->blogo) {
            $res .= $this->blogo;
        }
        if($this->scatype) {
            $res .= $this->scatype;
        }
        if($this->spcent) {
            $res .= $this->spcent;
        }
        if($this->dissolve) {
            $res .= $this->dissolve;
        }
        if($this->batch) {
            $res .= $this->batch;
        }
        if($this->degree) {
            $res .= $this->degree;
        }
        if($res) {
            $res = $head . $res;
        }
        return $res;
    }

    public function resetRule() {
        $this->image = "";
        $this->gravity = "";
        $this->dx = "";
        $this->dy = "";
        $this->blogo = "";
        $this->scatype = "";
        $this->spcent = "";
        $this->dissolve = "";
        $this->batch = "";
        $this->degree = "";
    }
}
