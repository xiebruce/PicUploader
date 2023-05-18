<?php

namespace Qcloud\Cos\ImageParamTemplate;

/**
 * Class ImageMogrTemplate imageMogr2 接口参数
 * @package Qcloud\Cos\ImageParamTemplate
 */
class ImageMogrTemplate extends ImageTemplate
{
    private $tranParams;
    private $tranString;

    public function __construct() {
        parent::__construct();
        $this->tranParams = array();
        $this->tranString = "";
    }

    /**
     * 指定图片的宽高为原图的 Scale%
     * @param $widthScale
     */
    public function thumbnailByScale($widthScale) {
        $this->tranParams[] = "/thumbnail/!" . $widthScale . "p";
    }

    /**
     * 指定图片的宽为原图的 Scale%，高度不变
     * @param $heightScale
     */
    public function thumbnailByWidthScale($heightScale) {
        $this->tranParams[] = "/thumbnail/!" . $heightScale . "px";
    }

    /**
     * 指定图片的高为原图的 Scale%，宽度不变
     * @param $scale
     */
    public function thumbnailByHeightScale($scale) {
        $this->tranParams[] = "/thumbnail/!x" . $scale . "p";
    }

    /**
     * 指定目标图片宽度为 Width，高度等比缩放
     * @param $width
     */
    public function thumbnailByWidth($width) {
        $this->tranParams[] = "/thumbnail/" . $width . "x";
    }

    /**
     * 指定目标图片高度为 Height，宽度等比缩放
     * @param $height
     */
    public function thumbnailByHeight($height) {
        $this->tranParams[] = "/thumbnail/x" . $height;
    }

    /**
     * 限定缩略图的宽度和高度的最大值分别为 Width 和 Height，进行等比缩放
     * @param $maxW
     * @param $maxH
     */
    public function thumbnailByMaxWH($maxW, $maxH) {
        $this->tranParams[] = "/thumbnail/" . $maxW . "x" . $maxH;
    }

    /**
     * 限定缩略图的宽度和高度的最小值分别为 Width 和 Height，进行等比缩放
     * @param $minW
     * @param $minH
     */
    public function thumbnailByMinWH($minW, $minH) {
        $this->tranParams[] = "/thumbnail/!" . $minW . "x" . $minH . "r" ;
    }

    /**
     * 忽略原图宽高比例，指定图片宽度为 Width，高度为 Height，强行缩放图片，可能导致目标图片变形
     * @param $width
     * @param $height
     */
    public function thumbnailByWH($width, $height) {
        $this->tranParams[] = "/thumbnail/" . $width  . "x" . $height . "!";
    }

    /**
     * 限定缩略图的宽度和高度的最大值分别为 Width 和 Height，进行等比缩小，比例值为宽缩放比和高缩放比的较小值，如果目标宽（高）都大于原图宽（高），则不变
     * @param $width
     * @param $height
     */
    public function thumbnailEqualRatioReduceByWH($width, $height) {
        $this->tranParams[] = "/thumbnail/{$width}x{$height}>";
    }

    /**
     * 限定缩略图的宽度和高度的最大值分别为 Width 和 Height，进行等比放大，比例值为宽缩放比和高缩放比的较小值。如果目标宽(高)小于原图宽(高)，则不变
     * @param $width
     * @param $height
     */
    public function thumbnailEqualRatioEnlargeByWH($width, $height) {
        $this->tranParams[] = "/thumbnail/{$width}x{$height}<";
    }

    /**
     * 等比缩放图片，缩放后的图像，总像素数量不超过 $pixel
     * @param $pixel
     */
    public function thumbnailByPixel($pixel) {
        $this->tranParams[] = "/thumbnail/" . $pixel . "@";
    }

    /**
     * 将原图缩放为指定 Width 和 Height 的矩形内的最大图片，之后使用 color 参数指定的颜色居中填充空白部分；取值0或1，0代表不使用 pad 模式，1代表使用 pad 模式
     * @param $is
     */
    public function pad($is) {
        $this->tranParams[] = "/pad/{$is}";
    }

    /**
     * 填充颜色，缺省为白色，需设置为十六进制 RGB 格式（如 #FF0000），详情参考 RGB 编码表，需经过 URL 安全的 Base64 编码，默认值为 #3D3D3D
     * @param $rgb
     */
    public function color($rgb) {
        $rgb = $this->ciBase64($rgb);
        $this->tranParams[] = "/color/{$rgb}";
    }

    /**
     * 当处理参数中携带此参数时，针对文件过大、参数超限等导致处理失败的场景，会直接返回原图而不报错
     */
    public function ignoreError() {
        $this->tranParams[] = "/ignore-error/1";
    }

    /**
     * 普通裁剪参数说明 操作名称：cut
     * @param $width
     * @param $height
     * @param $dx
     * @param $dy
     */
    public function cut($width, $height, $dx, $dy) {
        $this->tranParams[] = "/cut/" . $width . "x" . "$height" . "x" . $dx . "x" . $dy;
    }

    /**
     * 指定目标图片宽度为 Width，高度不变。Width 取值范围应大于0，小于原图宽度
     * @param $width
     * @param string $gravity 指定操作的起点位置
     */
    public function cropByWidth($width, $gravity = "") {
        $temp = "/crop/" . $width . "x";
        if($gravity){
            $temp .= "/gravity/" . $gravity;
        }
        $this->tranParams[] = $temp;
    }

    /**
     * 指定目标图片高度为 Height，宽度不变。Height 取值范围应大于0，小于原图高度
     * @param $height
     * @param string $gravity 指定操作的起点位置
     */
    public function cropByHeight($height, $gravity = "") {
        $temp = "/crop/x" . $height;
        if($gravity){
            $temp .= "/gravity/" . $gravity;
        }
        $this->tranParams[] = $temp;
    }

    /**
     * 指定目标图片宽度为 Width，高度为 Height 。Width 和 Height 取值范围都应大于0，小于原图宽度/高度
     * @param $width
     * @param $height
     * @param string $gravity 指定操作的起点位置
     */
    public function cropByWH($width, $height, $gravity = "") {
        $temp = "/crop/" . $width . "x" . $height;
        if($gravity){
            $temp .= "/gravity/" . $gravity;
        }
        $this->tranParams[] = $temp;
    }

    /**
     * 内切圆裁剪功能，radius 是内切圆的半径，取值范围为大于0且小于原图最小边一半的整数。内切圆的圆心为图片的中心。图片格式为 gif 时，不支持该参数。
     * @param $radius
     */
    public function iradius($radius) {
        $this->tranParams[] = "/iradius/" . $radius;
    }

    /**
     * 圆角裁剪功能，radius 为图片圆角边缘的半径，取值范围为大于0且小于原图最小边一半的整数。圆角与原图边缘相切。图片格式为 gif 时，不支持该参数。
     * @param $radius
     */
    public function rradius($radius) {
        $this->tranParams[] = "/rradius/" . $radius;
    }

    /**
     * 基于图片中的人脸位置进行缩放裁剪。目标图片的宽度为 Width、高度为 Height。
     * @param $width
     * @param $height
     */
    public function scrop($width, $height) {
        $this->tranParams[] = "/scrop/" . $width . "x" . $height;
    }

    /**
     * 普通旋转：图片顺时针旋转角度，取值范围0 - 360，默认不旋转。
     * @param $degree
     */
    public function rotate($degree) {
        $this->tranParams[] = "/rotate/" . $degree;
    }

    /**
     * 自适应旋转：根据原图 EXIF 信息将图片自适应旋转回正。
     */
    public function autoOrient() {
        $this->tranParams[] = "/auto-orient";
    }

    /**
     * 镜像翻转：flip 值为 vertical 表示垂直翻转，horizontal 表示水平翻转
     * @param $flip
     */
    public function flip($flip) {
        $this->tranParams[] = "/flip/" . $flip;
    }

    /**
     * 格式转换：目标缩略图的图片格式可为：jpg，bmp，gif，png，webp，yjpeg 等，其中 yjpeg 为数据万象针对 jpeg 格式进行的优化，本质为 jpg 格式；缺省为原图格式。
     * @param $format
     */
    public function format($format) {
        $this->tranParams[] = "/format/" . $format;
    }

    /**
     * gif 格式优化：只针对原图为 gif 格式，对 gif 图片格式进行的优化，降帧降颜色。分为以下两种情况：
     * FrameNumber=1，则按照默认帧数30处理，如果图片帧数大于该帧数则截取。
     * FrameNumber 取值( 1,100 ]，则将图片压缩到指定帧数 （FrameNumber）。
     * @param $frameNumber
     */
    public function gifOptimization($frameNumber) {
        $this->tranParams[] = "/cgif/" . $frameNumber;
    }

    /**
     * 输出为渐进式 jpg 格式。Mode 可为0或1。0：表示不开启渐进式；1：表示开启渐进式。该参数仅在输出图片格式为 jpg 格式时有效。如果输出非 jpg 图片格式，会忽略该参数，默认值0。
     * @param $mode
     */
    public function jpegInterlaceMode($mode) {
        $this->tranParams[] = "/interlace/" . $mode;
    }

    /**
     * 图片的绝对质量，取值范围0 - 100，默认值为原图质量；取原图质量和指定质量的最小值；<Quality>后面加“!”表示强制使用指定值，例如：90!。
     * @param $value
     * @param int $force
     */
    public function quality($value, $force = 0) {
        $temp = "/quality/" . $value;
        if($force){
            $temp .= "!";
        }
        $this->tranParams[] = $temp;
    }

    /**
     * 图片的最低质量，取值范围0 - 100，设置结果图的质量参数最小值。
     * 例如原图质量为85，将 lquality 设置为80后，处理结果图的图片质量为85。
     * 例如原图质量为60，将 lquality 设置为80后，处理结果图的图片质量会被提升至80。
     * @param $value
     */
    public function lowestQuality($value) {
        $this->tranParams[] = "/lquality/" . $value;
    }

    /**
     * 图片的相对质量，取值范围0 - 100，数值以原图质量为标准。例如原图质量为80，将 rquality 设置为80后，得到处理结果图的图片质量为64（80x80%）。
     * @param $value
     */
    public function relativelyQuality($value) {
        $this->tranParams[] = "/rquality/" . $value;
    }

    /**
     * 高斯模糊
     * @param $radius integer|float 模糊半径，取值范围为1 - 50
     * @param $sigma integer|float 正态分布的标准差，必须大于0
     */
    public function blur($radius, $sigma) {
        $this->tranParams[] = "/blur/" . $radius . "x" . $sigma;
    }

    /**
     * 图片亮度调节功能，value 为亮度参数值，取值范围为[-100, 100]的整数。
     * 取值＜0：降低图片亮度。
     * 取值 = 0：不调整图片亮度。
     * 取值＞0：提高图片亮度。
     * @param $value
     */
    public function bright($value) {
        $this->tranParams[] = "/bright/" . $value;
    }

    /**
     * 图片对比度调节功能，value 为对比度参数值，取值范围为[-100, 100]的整数。
     * 取值＜0：降低图片对比度。
     * 取值 = 0：不调整图片对比度。
     * 取值＞0：提高图片对比度。
     * @param $value
     */
    public function contrast($value) {
        $this->tranParams[] = "/contrast/" . $value;
    }

    /**
     * 图片锐化功能，value 为锐化参数值，取值范围为10 - 300间的整数（推荐使用70）。参数值越大，锐化效果越明显。
     * @param $value
     */
    public function sharpen($value) {
        $this->tranParams[] = "/sharpen/" . $value;
    }

    /**
     * 将图片设置为灰度图。 value 取值为0表示不改变图片。 value 取值为1表示将图片变为灰度图。
     * @param $value
     */
    public function grayscale($value) {
        $this->tranParams[] = "/grayscale/" . $value;
    }

    /**
     * 去除图片元信息，包括 exif 信息
     */
    public function strip() {
        $this->tranParams[] = "/strip";
    }

    /**
     * 限制图片转换后的大小，支持以兆字节（m）和千字节（k）为单位
     * 1. 仅支持 JPG 格式的图片，可以用于限制处理后图片的大小
     * 2. 若在尾部加上!，表示用处理后的图片大小与原图大小做比较，如果处理后的图片比原图小，则返回处理后的图片，否则返回原图。例如：examplebucket-1250000000.cos.ap-shanghai.myqcloud.com/picture.jpg?imageMogr2/size-limit/15k!
     * 3. 建议搭配strip参数使用，去除图片的一些冗余信息，会有更好的效果。例如：examplebucket-1250000000.cos.ap-shanghai.myqcloud.com/picture.jpg?imageMogr2/strip/format/png/size-limit/15k!
     * @param $value
     * @param int $compare
     */
    public function sizeLimit($value, $compare = 0) {
        $temp = "/size-limit/" . $value;
        if($compare){
            $temp .= "!";
        }
        $this->tranParams[] = $temp;
    }

    public function queryString() {
        if($this->tranParams) {
            $this->tranString = "imageMogr2" . implode("", $this->tranParams);
        }
        return $this->tranString;
    }

    public function resetRule() {
        $this->tranString = "";
        $this->tranParams = array();
    }
}
