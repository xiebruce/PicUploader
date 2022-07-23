<?php
namespace common;
/**
 * EasyImage类
 *@package easy_framework
	*@version 1.0
	*@author yuanjun<simpleyuan@gmail.com>
	*@copyright 2013 simpleyuan
	*
	* @example:
	*  $img = new EasyImage('path/to/yourimage.jpg');
	*  // Create from scratch
	*	$img->create(200, 100, '#f00')->save('processed/create-from-scratch.gif');
	*	// Convert to GIF
	*	$img->load('butterfly.jpg')->save('processed/butterfly-convert-to-gif.gif');
	*	// Strip exif data (just load and save)
	*	$img->load('butterfly.jpg')->save('processed/butterfly-strip-exif.jpg');
	*	// Flip horizontal
	*	$img->load('butterfly.jpg')->flip('x')->save('processed/butterfly-flip-horizontal.jpg');
	*	// Flip vertical
	*	$img->load('butterfly.jpg')->flip('y')->save('processed/butterfly-flip-vertical.jpg');
	*	// Flip both
	*	$img->load('butterfly.jpg')->flip('x')->flip('y')->save('processed/butterfly-flip-both.jpg');
	*	// Rotate 90
	*	$img->load('butterfly.jpg')->rotate(90)->save('processed/butterfly-rotate-90.jpg');
	*	// Auto-orient
	*	$img->load('butterfly.jpg')->auto_orient()->save('processed/butterfly-auto-orient.jpg');
	*	// Resize
	*	$img->load('butterfly.jpg')->resize(320, 239)->save('processed/butterfly-resize.jpg');
	*	// Adaptive resize
	*	$img->load('butterfly.jpg')->adaptive_resize(100, 75)->save('processed/butterfly-adaptive-resize.jpg');
	*	// Fit to width
	*	$img->load('butterfly.jpg')->fit_to_width(100)->save('processed/butterfly-fit-to-width.jpg');
	*	// Fit to height
	*	$img->load('butterfly.jpg')->fit_to_height(100)->save('processed/butterfly-fit-to-height.jpg');
	*	// Best fit
	*	$img->load('butterfly.jpg')->best_fit(100, 400)->save('processed/butterfly-best-fit.jpg');
	*	// Crop
	*	$img->load('butterfly.jpg')->crop(160, 110, 460, 360)->save('processed/butterfly-crop.jpg');
	*	// Desaturate
	*	$img->load('butterfly.jpg')->desaturate()->save('processed/butterfly-desaturate.jpg');
	*	// Invert
	*	$img->load('butterfly.jpg')->invert()->save('processed/butterfly-invert.jpg');
	*	// Brighten
	*	$img->load('butterfly.jpg')->brightness(100)->save('processed/butterfly-brighten.jpg');
	*	// Darken
	*	$img->load('butterfly.jpg')->brightness(-100)->save('processed/butterfly-darken.jpg');
	*	// Contrast
	*	$img->load('butterfly.jpg')->contrast(-50)->save('processed/butterfly-contrast.jpg');
	*	// Colorize
	*	$img->load('butterfly.jpg')->colorize('#F00', .5)->save('processed/butterfly-colorize.jpg');
	*	// Edge Detect
	*	$img->load('butterfly.jpg')->edges()->save('processed/butterfly-edges.jpg');
	*	// Mean Removal
	*	$img->load('butterfly.jpg')->mean_remove()->save('processed/butterfly-mean-remove.jpg');
	*	// Emboss
	*	$img->load('butterfly.jpg')->emboss()->save('processed/butterfly-emboss.jpg');
	*	// Selective Blur
	*	$img->load('butterfly.jpg')->blur('selective', 10)->save('processed/butterfly-blur-selective.jpg');
	*	// Gaussian Blur
	*	$img->load('butterfly.jpg')->blur('gaussian', 10)->save('processed/butterfly-blur-gaussian.jpg');
	*	// Sketch
	*	$img->load('butterfly.jpg')->sketch()->save('processed/butterfly-sketch.jpg');
	*	// Smooth
	*	$img->load('butterfly.jpg')->smooth(6)->save('processed/butterfly-smooth.jpg');
	*	// Pixelate
	*	$img->load('butterfly.jpg')->pixelate(8)->save('processed/butterfly-pixelate.jpg');
	*	// Sepia
	*	$img->load('butterfly.jpg')->sepia(8)->save('processed/butterfly-sepia.jpg');
	*	// Overlay
	*	$img->load('butterfly.jpg')->overlay('overlay.png', 'bottom right', .8)->save('processed/butterfly-overlay.jpg');
	*	// Text
	*	$img->load('butterfly.jpg')->text('Butterfly', __DIR__.'/delicious.ttf', 32, '#FFFFFF', 'bottom', 0, -20)->save('processed/butterfly-text.jpg');
	*/
class EasyImage {
	
	/**
	 *
	 * @var int Default output image quality
	 */
	public $quality = 100;
	protected $image, $filename, $original_info, $width, $height;
	
	/**
	 * Create instance and load an image, or create an image from scratch
	 *
	 * @param null|string $filename
	 *        	image file (may be omitted to create image from scratch)
	 * @param int $width
	 *        	(is used for creating image from scratch)
	 * @param int|null $height
	 *        	- assumed equal to $width (is used for creating image from
	 *        	scratch)
	 * @param null|string $color
	 *        	string, array(red, green, blue) or array(red, green, blue,
	 *        	alpha).
	 *        	Where red, green, blue - integers 0-255, alpha - integer
	 *        	0-127<br>
	 *        	(is used for creating image from scratch)
	 *
	 * @return EasyImage
	 * @throws Exception
	 */
	function __construct($filename = null, $width = null, $height = null, $color = null) {
		if ($filename) {
			$this->load ( $filename );
		} elseif ($width) {
			$this->create ( $width, $height, $color );
		}
		return $this;
	}
	/**
	 * Destroy image resource
	 */
	function __destruct() {
		if ($this->image) {
			imagedestroy ( $this->image );
		}
	}
	
	/**
	 * Load an image
	 * @param $filename
	 *
	 * @return $this
	 * @throws \Exception
	 */
	function load($filename) {
		ini_set('memory_limit', '1024M');
		// Require GD library
		if (! extension_loaded ( 'gd' )) {
			throw new \Exception ( 'Required extension GD is not loaded.' );
		}
		$this->filename = $filename;
		$info = getimagesize ( $this->filename );
		switch ($info ['mime']) {
			case 'image/gif' :
				$this->image = imagecreatefromgif ( $this->filename );
				break;
			case 'image/jpeg' :
				$this->image = imagecreatefromjpeg ( $this->filename );
				break;
			case 'image/png' :
				$this->image = imagecreatefrompng ( $this->filename );
				break;
			case 'image/webp' :
				$this->image = imagecreatefromwebp ( $this->filename );
				break;
			case 'image/bmp' :
				$this->image = imagecreatefrombmp( $this->filename );
				break;
			default :
				throw new \Exception ( 'Invalid image: ' . $this->filename );
				break;
		}
		$this->original_info = array (
			'width' => $info [0],
			'height' => $info [1],
			'orientation' => $this->get_orientation (),
			'exif' => function_exists ( 'exif_read_data' ) && $info ['mime'] === 'image/jpeg' ? $this->exif = @exif_read_data ( $this->filename ) : null,
			'format' => preg_replace ( '/^image\//', '', $info ['mime'] ),
			'mime' => $info ['mime']
		);
		$this->width = $info [0];
		$this->height = $info [1];
		imagesavealpha ( $this->image, true );
		imagealphablending ( $this->image, true );
		return $this;
	}
	/**
	 * Create an image from scratch
	 *
	 * @param int $width
	 * @param int|null $height
	 *        	- assumed equal to $width
	 * @param null|string $color
	 *        	string, array(red, green, blue) or array(red, green, blue,
	 *        	alpha).
	 *        	Where red, green, blue - integers 0-255, alpha - integer 0-127
	 *
	 * @return EasyImage
	 */
	function create($width, $height = null, $color = null) {
		$height = $height ? $height : $width;
		$this->width = $width;
		$this->height = $height;
		$this->image = imagecreatetruecolor ( $width, $height );
		$this->original_info = array (
			'width' => $width,
			'height' => $height,
			'orientation' => $this->get_orientation (),
			'exif' => null,
			'format' => 'png',
			'mime' => 'image/png'
		);
		if ($color) {
			$this->fill ( $color );
		}
		return $this;
	}
	/**
	 * Fill image with color
	 *
	 * @param string $color
	 *        	string, array(red, green, blue) or array(red, green, blue,
	 *        	alpha).
	 *        	Where red, green, blue - integers 0-255, alpha - integer 0-127
	 *
	 * @return EasyImage
	 */
	function fill($color = '#000000') {
		$rgba = $this->normalize_color ( $color );
		$fill_color = imagecolorallocatealpha ( $this->image, $rgba ['r'], $rgba ['g'], $rgba ['b'], $rgba ['a'] );
		imagefilledrectangle ( $this->image, 0, 0, $this->width, $this->height, $fill_color );
		return $this;
	}
	
	/**
	 * Save an image
	 * @param null $filename
	 * @param null $quality
	 *
	 * @return $this
	 * @throws \Exception
	 */
	function save($filename = null, $quality = null) {
		$filename = $filename ? $filename : $this->filename;
		// Determine format via file extension (fall back to original format)
		$ext = $this->file_ext ( $filename );
		$format = $ext ? $ext : $this->original_info ['format'];
		imageinterlace ( $this->image, true );
		// Determine output format
		switch (strtolower($format)) {
			case 'gif' :
				$result = imagegif ( $this->image, $filename );
				break;
			case 'jpg' :
			case 'jpeg' :
				if($quality){
					//jpg图片质量必须是0-100，数字越大，图片质量越好，图片文件也越大
					$quality = $this->keep_within($quality, 0, 100);
					$result = imagejpeg ( $this->image, $filename, round($quality));
				}else{
					$result = imagejpeg ( $this->image, $filename);
				}
				break;
			case 'png' :
				if($quality){
					//png压缩必须是0-9，数字越大压缩的越厉害(压缩速度也越慢)，图片质量也越低
					$quality = $this->keep_within($quality, 0, 9);
					$result = imagepng ( $this->image, $filename,  round($quality));
				}else{
					$result = imagepng ( $this->image, $filename);
				}
				break;
			case 'webp':
				if($quality){
					$quality = $this->keep_within($quality, 0, 100);
					$result = imagewebp($this->image, $filename, round($quality));
				}else{
					$result = imagewebp($this->image, $filename);
				}
				break;
			case 'bmp':
				$result = imagebmp($this->image, $filename, true);
				break;
			default :
				throw new \Exception ( 'Unsupported format' );
		}
		if (! $result) {
			throw new \Exception ( 'Unable to save image: ' . $filename );
		}
		return $this;
	}
	
	/**
	 * Get info about the original image
	 *
	 * @return array <pre> array(
	 *         width		=> 320,
	 *         height		=> 200,
	 *         orientation	=> ['portrait', 'landscape', 'square'],
	 *         exif		=> array(...),
	 *         mime		=> ['image/jpeg', 'image/gif', 'image/png'],
	 *         format		=> ['jpeg', 'gif', 'png']
	 *         )</pre>
	 */
	function get_original_info() {
		return $this->original_info;
	}
	
	/**
	 * Get the current width
	 *
	 * @return int
	 */
	function get_width() {
		return imagesx ( $this->image );
	}
	
	/**
	 * Get the current height
	 *
	 * @return int
	 */
	function get_height() {
		return imagesy ( $this->image );
	}
	
	/**
	 * Get the current orientation
	 *
	 * @return string
	 */
	function get_orientation() {
		if (imagesx ( $this->image ) > imagesy ( $this->image )) {
			return 'landscape';
		}
		if (imagesx ( $this->image ) < imagesy ( $this->image )) {
			return 'portrait';
		}
		return 'square';
	}
	
	/**
	 * Flip an image horizontally or vertically
	 *
	 * @param string $direction
	 * @return EasyImage
	 */
	function flip($direction) {
		$new = imagecreatetruecolor ( $this->width, $this->height );
		imagealphablending ( $new, false );
		imagesavealpha ( $new, true );
		switch (strtolower ( $direction )) {
			case 'y' :
				for($y = 0; $y < $this->height; $y ++) {
					imagecopy ( $new, $this->image, 0, $y, 0, $this->height - $y - 1, $this->width, 1 );
				}
				break;
			default :
				for($x = 0; $x < $this->width; $x ++) {
					imagecopy ( $new, $this->image, $x, 0, $this->width - $x - 1, 0, 1, $this->height );
				}
				break;
		}
		$this->image = $new;
		return $this;
	}
	
	/**
	 * Rotate an image
	 *
	 * @param int $angle
	 * @param string $bg_color
	 *        	string, array(red, green, blue) or array(red, green, blue,
	 *        	alpha).
	 *        	Where red, green, blue - integers 0-255, alpha - integer 0-127
	 *
	 * @return EasyImage
	 */
	function rotate($angle, $bg_color = '#000000') {
		$rgba = $this->normalize_color ( $bg_color );
		$bg_color = imagecolorallocatealpha ( $this->image, $rgba ['r'], $rgba ['g'], $rgba ['b'], $rgba ['a'] );
		$new = imagerotate ( $this->image, - ($this->keep_within ( $angle, - 360, 360 )), $bg_color );
		imagesavealpha ( $new, true );
		imagealphablending ( $new, true );
		$this->width = imagesx ( $new );
		$this->height = imagesy ( $new );
		$this->image = $new;
		return $this;
	}
	
	/**
	 * Rotates and/or flips an image automatically so the orientation will be
	 * correct (based on exif 'Orientation')
	 *
	 * @return EasyImage
	 */
	function auto_orient() {
		// Adjust orientation
		switch ($this->original_info ['exif'] ['Orientation']) {
			case 1 : // Do nothing
				break;
			case 2 : // Flip horizontal
				$this->flip ( 'x' );
				break;
			case 3 : // Rotate 180 counterclockwise
				$this->rotate ( - 180 );
				break;
			case 4 : // vertical flip
				$this->flip ( 'y' );
				break;
			case 5 : // Rotate 90 clockwise and flip vertically
				$this->flip ( 'y' );
				$this->rotate ( 90 );
				break;
			case 6 : // Rotate 90 clockwise
				$this->rotate ( 90 );
				break;
			case 7 : // Rotate 90 clockwise and flip horizontally
				$this->flip ( 'x' );
				$this->rotate ( 90 );
				break;
			case 8 : // Rotate 90 counterclockwise
				$this->rotate ( - 90 );
				break;
		}
		return $this;
	}
	
	/**
	 * Resize an image to the specified dimensions
	 * @param      $width
	 * @param      $height
	 * @param bool $ratio
	 *
	 * @return $this
	 */
	function resize($width, $height, $ratio = true) {
		if ($ratio) {
			// 比较缩放比例，得到要缩放大小，然后按缩放比例大的缩放
			$ratio = max ( $height / $this->height, $width / $this->width );
			$height = $ratio * $this->height;
			$width = $ratio * $this->width;
		}
		$new = imagecreatetruecolor ( $width, $height );
		imagealphablending ( $new, false );
		imagesavealpha ( $new, true );
		imagecopyresampled ( $new, $this->image, 0, 0, 0, 0, $width, $height, $this->width, $this->height );
		$this->width = $width;
		$this->height = $height;
		$this->image = $new;
		return $this;
	}
	
	/**
	 * Adaptive resize
	 *
	 * This function attempts to get the image to as close to the provided
	 * dimensions as possible, and then crops the
	 * remaining overflow (from the center) to get the image to be the size
	 * specified
	 *
	 * @param int $width
	 * @param int|null $height
	 *        	- assumed equal to $width
	 *
	 * @return EasyImage
	 */
	function adaptive_resize($width, $height = null) {
		$height = $height ? $height : $width;
		$current_aspect_ratio = $this->height / $this->width;
		$new_aspect_ratio = $height / $width;
		if ($new_aspect_ratio > $current_aspect_ratio) {
			$this->fit_to_height ( $height );
		} else {
			$this->fit_to_width ( $width );
		}
		$left = ($this->width / 2) - ($width / 2);
		$top = ($this->height / 2) - ($height / 2);
		return $this->crop ( $left, $top, $width + $left, $height + $top );
	}
	
	/**
	 * Fit to width (proportionally resize to specified width)
	 *
	 * @param int $width
	 * @return EasyImage
	 */
	function fit_to_width($width) {
		$aspect_ratio = $this->height / $this->width;
		$height = $width * $aspect_ratio;
		return $this->resize ( $width, $height );
	}
	
	/**
	 * Fit to height (proportionally resize to specified height)
	 *
	 * @param int $height
	 * @return EasyImage
	 */
	function fit_to_height($height) {
		$aspect_ratio = $this->height / $this->width;
		$width = $height / $aspect_ratio;
		return $this->resize ( $width, $height );
	}
	
	/**
	 * Best fit (proportionally resize to fit in specified width/height)
	 *
	 * Shrink the image proportionally to fit inside a $width x $height box
	 *
	 * @param int $max_width
	 * @param int $max_height
	 * @return EasyImage
	 */
	function best_fit($max_width, $max_height) {
		// If it already fits, there's nothing to do
		if ($this->width <= $max_width && $this->height <= $max_height) {
			return $this;
		}
		// Determine aspect ratio
		$aspect_ratio = $this->height / $this->width;
		// Make width fit into new dimensions
		if ($this->width > $max_width) {
			$width = $max_width;
			$height = $width * $aspect_ratio;
		} else {
			$width = $this->width;
			$height = $this->height;
		}
		// Make height fit into new dimensions
		if ($height > $max_height) {
			$height = $max_height;
			$width = $height / $aspect_ratio;
		}
		return $this->resize ( $width, $height );
	}
	
	/**
	 * Crop an image
	 *
	 * @param int $x1
	 * @param int $y1
	 * @param int $x2
	 * @param int $y2
	 * @return EasyImage
	 */
	function crop($x1, $y1, $x2, $y2) {
		// Determine crop size
		if ($x2 < $x1) {
			list ( $x1, $x2 ) = array (
				$x2,
				$x1
			);
		}
		if ($y2 < $y1) {
			list ( $y1, $y2 ) = array (
				$y2,
				$y1
			);
		}
		$crop_width = $x2 - $x1;
		$crop_height = $y2 - $y1;
		$new = imagecreatetruecolor ( $crop_width, $crop_height );
		imagealphablending ( $new, false );
		imagesavealpha ( $new, true );
		imagecopyresampled ( $new, $this->image, 0, 0, $x1, $y1, $crop_width, $crop_height, $crop_width, $crop_height );
		$this->width = $crop_width;
		$this->height = $crop_height;
		$this->image = $new;
		return $this;
	}
	
	/**
	 * Desaturate (grayscale)
	 *
	 * @return EasyImage
	 */
	function desaturate() {
		imagefilter ( $this->image, IMG_FILTER_GRAYSCALE );
		return $this;
	}
	
	/**
	 * Invert
	 *
	 * @return EasyImage
	 */
	function invert() {
		imagefilter ( $this->image, IMG_FILTER_NEGATE );
		return $this;
	}
	
	/**
	 * Brightness
	 *
	 * @param int $level
	 *        	-255, lightest = 255
	 *
	 * @return EasyImage
	 */
	function brightness($level) {
		imagefilter ( $this->image, IMG_FILTER_BRIGHTNESS, $this->keep_within ( $level, - 255, 255 ) );
		return $this;
	}
	
	/**
	 * Contrast
	 *
	 * @param int $level
	 *        	-100, max = 100
	 *
	 * @return EasyImage
	 *
	 */
	function contrast($level) {
		imagefilter ( $this->image, IMG_FILTER_CONTRAST, $this->keep_within ( $level, - 100, 100 ) );
		return $this;
	}
	
	/**
	 * Colorize
	 *
	 * @param string $color
	 *        	string, array(red, green, blue) or array(red, green, blue,
	 *        	alpha).
	 *        	Where red, green, blue - integers 0-255, alpha - integer 0-127
	 * @param float|int $opacity
	 * @return EasyImage
	 */
	function colorize($color, $opacity) {
		$rgba = $this->normalize_color ( $color );
		$alpha = $this->keep_within ( 127 - (127 * $opacity), 0, 127 );
		imagefilter ( $this->image, IMG_FILTER_COLORIZE, $this->keep_within ( $rgba ['r'], 0, 255 ), $this->keep_within ( $rgba ['g'], 0, 255 ), $this->keep_within ( $rgba ['b'], 0, 255 ), $alpha );
		return $this;
	}
	
	/**
	 * Edge Detect
	 *
	 * @return EasyImage
	 */
	function edges() {
		imagefilter ( $this->image, IMG_FILTER_EDGEDETECT );
		return $this;
	}
	
	/**
	 * Emboss
	 *
	 * @return EasyImage
	 */
	function emboss() {
		imagefilter ( $this->image, IMG_FILTER_EMBOSS );
		return $this;
	}
	
	/**
	 * Mean Remove
	 *
	 * @return EasyImage
	 */
	function mean_remove() {
		imagefilter ( $this->image, IMG_FILTER_MEAN_REMOVAL );
		return $this;
	}
	
	/**
	 * Blur
	 *
	 * @param string $type
	 * @param int $passes
	 *        	times to apply the filter
	 *
	 * @return EasyImage
	 */
	function blur($type = 'selective', $passes = 1) {
		switch (strtolower ( $type )) {
			case 'gaussian' :
				$type = IMG_FILTER_GAUSSIAN_BLUR;
				break;
			default :
				$type = IMG_FILTER_SELECTIVE_BLUR;
				break;
		}
		for($i = 0; $i < $passes; $i ++) {
			imagefilter ( $this->image, $type );
		}
		return $this;
	}
	
	/**
	 * Sketch
	 *
	 * @return EasyImage
	 */
	function sketch() {
		imagefilter ( $this->image, IMG_FILTER_MEAN_REMOVAL );
		return $this;
	}
	
	/**
	 * Smooth
	 *
	 * @param int $level
	 *        	-10, max = 10
	 *
	 * @return EasyImage
	 */
	function smooth($level) {
		imagefilter ( $this->image, IMG_FILTER_SMOOTH, $this->keep_within ( $level, - 10, 10 ) );
		return $this;
	}
	
	/**
	 * Pixelate
	 *
	 * @param int $block_size
	 *        	pixels of each resulting block
	 *
	 * @return EasyImage
	 */
	function pixelate($block_size = 10) {
		imagefilter ( $this->image, IMG_FILTER_PIXELATE, $block_size, true );
		return $this;
	}
	
	/**
	 * Sepia
	 *
	 * @return EasyImage
	 */
	function sepia() {
		imagefilter ( $this->image, IMG_FILTER_GRAYSCALE );
		imagefilter ( $this->image, IMG_FILTER_COLORIZE, 100, 50, 0 );
		return $this;
	}
	
	/**
	 * Overlay
	 *
	 * Overlay an image on top of another(e.g. watermark), works with 24-bit PNG
	 * alpha-transparency
	 *
	 * @param string $overlay_file
	 * @param string $position
	 *        	right|bottom left|bottom right
	 * @param float|int $opacity
	 *        	0-1
	 * @param int $x_offset
	 *        	in pixels
	 * @param int $y_offset
	 *        	in pixels
	 *
	 * @return EasyImage
	 */
	function overlay($overlay_file, $position = 'center', $opacity = 0, $x_offset = 0, $y_offset = 0) {
		// Load overlay image
		$overlay = new EasyImage ( $overlay_file );
		// Opacity is between 0 and 100
		$opacity = $this->keep_within($opacity, 0, 100);
		// Determine position
		switch (strtolower ( $position )) {
			case 'top-left' :
				$x = 0 + $x_offset;
				$y = 0 + $y_offset;
				break;
			case 'top-right' :
				$x = $this->width - $overlay->width + $x_offset;
				$y = 0 + $y_offset;
				break;
			case 'top' :
				$x = ($this->width / 2) - ($overlay->width / 2) + $x_offset;
				$y = 0 + $y_offset;
				break;
			case 'bottom-left' :
				$x = 0 + $x_offset;
				$y = $this->height - $overlay->height + $y_offset;
				break;
			case 'bottom-right' :
				$x = $this->width - $overlay->width + $x_offset;
				$y = $this->height - $overlay->height + $y_offset;
				break;
			case 'bottom' :
				$x = ($this->width / 2) - ($overlay->width / 2) + $x_offset;
				$y = $this->height - $overlay->height + $y_offset;
				break;
			case 'left' :
				$x = 0 + $x_offset;
				$y = ($this->height / 2) - ($overlay->height / 2) + $y_offset;
				break;
			case 'right' :
				$x = $this->width - $overlay->width + $x_offset;
				$y = ($this->height / 2) - ($overlay->height / 2) + $y_offset;
				break;
			case 'center' :
			default :
				$x = ($this->width / 2) - ($overlay->width / 2) + $x_offset;
				$y = ($this->height / 2) - ($overlay->height / 2) + $y_offset;
				break;
		}
		$this->imagecopymerge_alpha ( $this->image, $overlay->image, $x, $y, 0, 0, $overlay->width, $overlay->height, $opacity );
		return $this;
	}
	
	/**
	 * 使用GD库，把文字转成图片(可给文字添加描边)，描边的原理，就是用imagettftext逐个像素写一个比原字更大的字，然后在这个字之上再写真正要写的字，于是后面写的盖在原来的字上，多出的部分就是所谓的“描边”，很明显，这样的做法不能搞透明度，因为透明度会让下边的字“原型毕露”，导致颜色重叠
	 * @param       $size
	 * @param       $angle
	 * @param       $x
	 * @param       $y
	 * @param       $textcolor
	 * @param       $fontfile
	 * @param       $text
	 * @param array $stroke | ele1 is color(string, like: #FF0000), while ele2 is stroke pixel(int, like: 2)
	 *
	 * @return $this
	 */
	function imagettfstroketext($size, $angle, $x, $y, $textcolor, $fontfile, $text, $stroke=['#000000', 1]) {
		$strokecolor = $stroke[0];
		$strokepx = $stroke[1];
		$rgba = $this->normalize_color ( $strokecolor );
		$strokecolor = imagecolorallocatealpha( $this->image, $rgba ['r'], $rgba ['g'], $rgba ['b']);
		
		//x/y是文字基线(baseline)的顶点坐标，注意这个坐标并非文字的方框左下角，而是大概在左下角，但视不同的文字略有不同
		//请查看：https://www.codeblogbt.com/archives/437784
		//$x-$strokepx，假设$strokepx=1，则表示x的左边1个像素的x坐标，$x-$strokepx为x的右边一个像素
		for($c1 = ($x-$strokepx); $c1 <= ($x+$strokepx); $c1++){
			//与x类似，$y-$strokepx，假设$strokepx=1，则表示原y的下边1个像素的y坐标，$y+$strokepx为原y的上边一个像素
			for($c2 = ($y-$strokepx); $c2 <= ($y+$strokepx); $c2++){
				$bg = imagettftext($this->image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);
			}
		}

		imagettftext($this->image, $size, $angle, $x, $y, $textcolor, $fontfile, $text);
		
		return $this;
	}
	
	/**
	 * Add text to an image
	 * @param        $text
	 * @param        $font_file
	 * @param int    $font_size
	 * @param string $color
	 * @param string $position
	 * @param int    $x_offset
	 * @param int    $y_offset
	 * @param int    $angle
	 *
	 * @return $this
	 * @throws \Exception
	 */
	function text($text, $font_file, $font_size = 12, $color = '#000000', $position = 'bottom-right', $x_offset = 0, $y_offset = 0, $angle = 0) {
		$rgba = $this->normalize_color ( $color );
		$color = imagecolorallocatealpha ( $this->image, $rgba ['r'], $rgba ['g'], $rgba ['b'], $rgba ['a'] );
		$box = imagettfbbox ( $font_size, $angle, $font_file, $text );
		
		/*//获取文字旋转角度后的四个点的坐标
		$boxWithAngle = imagettfbbox ( $font_size, $angle, $font_file, $text );
		//文字旋转角度后，组成的方框的宽高(即计算可以容纳旋转后的虚拟的矩形的宽高，该矩形是横平竖直的，没有旋转角度的)
		$virtualBoxWith = $boxWithAngle[2] - $boxWithAngle[6];
		$virtualBoxHeight = abs($boxWithAngle[1] - $boxWithAngle[5]);
		
		//被添加水印的图片的宽高
		$width = $this->get_width();
		$height = $this->get_height();
		
		//角度为0时算出原点把矩形左侧边分成的两段的长度(因为原点并不一定刚好在矩形左下角，有可能是左下角偏上的位置，这是文字基线的原因)
		$boxWithoutAngle = imagettfbbox ( $font_size, 0, $font_file, $text );
		
		//文字基线原点在被添加水印的图片上应该所在的坐标，使此时旋转角度后形成的虚拟矩形能刚好在被添加水印的图片的正中心
		$x = sin(90-$angle) * $boxWithoutAngle[7] + ($width - $virtualBoxWith)/2;
		$y = sin(90-$angle) * $boxWithoutAngle[1] + ($height - $virtualBoxHeight)/2;
		
		$x += $x_offset;
		$y += $y_offset;*/
		
		//注意imagettfbbox()的返回值是四个坐标，它的原点不是左上角，
		//而是文字基线的起始点：https://www.codeblogbt.com/archives/437784
		//这也是为什么会有负数坐标出现
		$box_width = abs ( $box [4] - $box [6] );
		$box_height = abs ( $box [1] - $box [7] );
		// Determine position
		switch (strtolower ( $position )) {
			case 'top-left' :
				$x = 0 + $x_offset;
				$y = 0 + $y_offset + $box_height;
				break;
			case 'top-right' :
				$x = $this->width - $box_width + $x_offset;
				$y = 0 + $y_offset + $box_height;
				break;
			case 'top' :
				$x = ($this->width / 2) - ($box_width / 2) + $x_offset;
				$y = 0 + $y_offset + $box_height;
				break;
			case 'bottom-left' :
				$x = 0 + $x_offset;
				$y = $this->height - $box_height + $y_offset + $box_height;
				break;
			case 'bottom-right' :
				$x = $this->width - $box_width + $x_offset;
				$y = $this->height - $box_height + $y_offset + $box_height;
				break;
			case 'bottom' :
				$x = ($this->width / 2) - ($box_width / 2) + $x_offset;
				$y = $this->height - $box_height + $y_offset + $box_height;
				break;
			case 'left' :
				$x = 0 + $x_offset;
				$y = ($this->height / 2) - (($box_height / 2) - $box_height) + $y_offset;
				break;
			case 'right' :
				$x = $this->width - $box_width + $x_offset;
				$y = ($this->height / 2) - (($box_height / 2) - $box_height) + $y_offset;
				break;
			case 'center' :
			default :
				$x = ($this->width / 2) - ($box_width / 2) + $x_offset;
				$y = ($this->height / 2) - (($box_height / 2) - $box_height) + $y_offset;
				break;
		}
		
		$coords = imagettftext ( $this->image, $font_size, $angle, $x, $y, $color, $font_file, $text );
		// var_dump($coords);exit;
		
		return $this;
	}
	
	/**
	 * Outputs image without saving
	 * @param null $format
	 * @param null $quality
	 *
	 * @throws \Exception
	 */
	function output($format = null, $quality = null) {
		$quality = $quality ? $quality : $this->quality;
		imageinterlace ( $this->image, true );
		switch (strtolower ( $format )) {
			case 'gif' :
				$mimetype = 'image/gif';
				break;
			case 'jpeg' :
			case 'jpg' :
				$mimetype = 'image/jpeg';
				break;
			case 'png' :
				$mimetype = 'image/png';
				break;
			default :
				$info = getimagesize ( $this->filename );
				$mimetype = $info ['mime'];
				unset ( $info );
				break;
		}
		// Output the image
		header ( 'Content-Type: ' . $mimetype );
		switch ($mimetype) {
			case 'image/gif' :
				imagegif ( $this->image );
				break;
			case 'image/jpeg' :
				imagejpeg ( $this->image, null, round ( $quality ) );
				break;
			case 'image/png' :
				imagepng ( $this->image, null, round ( 9 * $quality / 100 ) );
				break;
			default :
				throw new \Exception ( 'Unsupported image format: ' . $this->filename );
				break;
		}
		// Since no more output can be sent, call the destructor to free up
		// memory
		$this->__destruct ();
	}
	
	/**
	 * Outputs image as data base64 to use as img src
	 * @param null $format
	 * @param null $quality
	 *
	 * @return string
	 * @throws \Exception
	 */
	function output_base64($format = null, $quality = null) {
		$quality = $quality ? $quality : $this->quality;
		imageinterlace ( $this->image, true );
		switch (strtolower ( $format )) {
			case 'gif' :
				$mimetype = 'image/gif';
				break;
			case 'jpeg' :
			case 'jpg' :
				$mimetype = 'image/jpeg';
				break;
			case 'png' :
				$mimetype = 'image/png';
				break;
			default :
				$info = getimagesize ( $this->filename );
				$mimetype = $info ['mime'];
				unset ( $info );
				break;
		}
		ob_start ();
		// Output the image
		switch ($mimetype) {
			case 'image/gif' :
				imagegif ( $this->image );
				break;
			case 'image/jpeg' :
				imagejpeg ( $this->image, null, round ( $quality ) );
				break;
			case 'image/png' :
				imagepng ( $this->image, null, round ( 9 * $quality / 100 ) );
				break;
			default :
				throw new \Exception ( 'Unsupported image format: ' . $this->filename );
				break;
		}
		$image_data = ob_get_contents ();
		ob_end_clean ();
		// Returns formatted string for img src
		return 'data:' . $mimetype . ';base64,' . base64_encode ( $image_data );
	}
	
	
	/**
	 * PNG ALPHA CHANNEL SUPPORT for imagecopymerge();
	 * by Sina Salek
	 * @param $dst_im
	 * @param $src_im
	 * @param $dst_x
	 * @param $dst_y
	 * @param $src_x
	 * @param $src_y
	 * @param $src_w
	 * @param $src_h
	 * @param $pct
	 */
	function imagecopymerge_alpha($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct){
		// creating a cut resource
		$cut = imagecreatetruecolor($src_w, $src_h);
		
		// copying relevant section from background to the cut resource
		imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);
		
		// copying relevant section from watermark to the cut resource
		imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $src_w, $src_h);
		
		// insert cut resource to destination image
		imagecopymerge($dst_im, $cut, $dst_x, $dst_y, 0, 0, $src_w, $src_h, $pct);
	}
	
	/**
	 * Ensures $value is always within $min and $max range.
	 *
	 * If lower, $min is returned. If higher, $max is returned.
	 *
	 * @param int|float $value
	 * @param int|float $min
	 * @param int|float $max
	 * @return int float
	 */
	protected function keep_within($value, $min, $max) {
		if ($value < $min) {
			return $min;
		}
		if ($value > $max) {
			return $max;
		}
		return $value;
	}
	
	/**
	 * Returns the file extension of the specified file
	 *
	 * @param string $filename
	 * @return string
	 */
	protected function file_ext($filename) {
		if (! preg_match ( '/\./', $filename )) {
			return '';
		}
		return preg_replace ( '/^.*\./', '', $filename );
	}
	
	/**
	 * Converts a hex color value to its RGB equivalent
	 *
	 * @param string $color
	 *        	string, array(red, green, blue) or array(red, green, blue,
	 *        	alpha).
	 *        	Where red, green, blue - integers 0-255, alpha - integer 0-127
	 *
	 * @return array bool
	 */
	protected function normalize_color($color) {
		if (is_string ( $color )) {
			$color = ltrim ( $color, '#' );
			if (strlen ( $color ) == 6) {
				list ( $r, $g, $b ) = array (
					$color [0] . $color [1],
					$color [2] . $color [3],
					$color [4] . $color [5]
				);
			} elseif (strlen ( $color ) == 3) {
				list ( $r, $g, $b ) = array (
					$color [0] . $color [0],
					$color [1] . $color [1],
					$color [2] . $color [2]
				);
			} else {
				return false;
			}
			return array (
				'r' => hexdec ( $r ),
				'g' => hexdec ( $g ),
				'b' => hexdec ( $b ),
				'a' => 0
			);
		} elseif (is_array ( $color ) && (count ( $color ) == 3 || count ( $color ) == 4)) {
			if (isset ( $color ['r'], $color ['g'], $color ['b'] )) {
				return array (
					'r' => $this->keep_within ( $color ['r'], 0, 255 ),
					'g' => $this->keep_within ( $color ['g'], 0, 255 ),
					'b' => $this->keep_within ( $color ['b'], 0, 255 ),
					'a' => $this->keep_within ( isset ( $color ['a'] ) ? $color ['a'] : 0, 0, 127 )
				);
			} elseif (isset ( $color [0], $color [1], $color [2] )) {
				return array (
					'r' => $this->keep_within ( $color [0], 0, 255 ),
					'g' => $this->keep_within ( $color [1], 0, 255 ),
					'b' => $this->keep_within ( $color [2], 0, 255 ),
					'a' => $this->keep_within ( isset ( $color [3] ) ? $color [3] : 0, 0, 127 )
				);
			}
		}
		return false;
	}
	
	/**
	 * 图片加水印（适用于png/jpg/gif格式）
	 * Watermark
	 * @param $waterImg     水印图片
	 * @param int $positon  水印位置(1:顶部居左, 2:顶部居右, 3:居中, 4:底部局左, 5:底部居右
	 * @param int $alpha    透明度 -- 0:完全透明, 100:完全不透明
	 * @return int
	 */
	function img_water_mark($waterImg, $positon=5, $alpha=30)
	{
		$srcinfo = @getimagesize($this->filename);
		//处理png背景透明
		if (!$srcinfo) {
			return -1; //原文件不存在
		}
		$waterinfo = @getimagesize($waterImg);
		if (!$waterinfo) {
			return -2; //水印图片不存在
		}
		$srcImgObj = $this->image_create_from_ext($this->filename);
		if (!$srcImgObj) {
			return -3; //原文件图像对象建立失败
		}
		$waterImgObj = $this->image_create_from_ext($waterImg);
		if (!$waterImgObj) {
			return -4; //水印文件图像对象建立失败
		}
		switch ($positon) {
			//1顶部居左
			case 1: $x = $y = 0; break;
			//2顶部居右
			case 2: $x = $srcinfo[0]-$waterinfo[0]; $y = 0; break;
			//3居中
			case 3: $x = ($srcinfo[0]-$waterinfo[0])/2; $y = ($srcinfo[1]-$waterinfo[1])/2; break;
			//4底部居左
			case 4: $x = 0; $y = $srcinfo[1]-$waterinfo[1]; break;
			//5底部居右
			case 5: $x = $srcinfo[0]-$waterinfo[0]; $y = $srcinfo[1]-$waterinfo[1]; break;
			default: $x = $y = 0;
		}
		// creating a cut resource
		$cut = imagecreatetruecolor($waterinfo[0], $waterinfo[1]);
		imagecopy($cut, $this->image, 0, 0, $x, $y, $waterinfo[0], $waterinfo[1]);
		imagecopy($cut, $waterImgObj, 0, 0, 0, 0, $waterinfo[0], $waterinfo[1]);
		imagecopymerge($this->image, $cut, $x, $y, 0, 0, $waterinfo[0], $waterinfo[1], $alpha);
	}
	
	/**
	 * @param $imgfile
	 *
	 * @return resource|null
	 */
	function image_create_from_ext($imgfile)
	{
		$info = getimagesize($imgfile);
		$im = null;
		switch ($info[2]) {
			case 1: $im=imagecreatefromgif($imgfile); break;
			case 2: $im=imagecreatefromjpeg($imgfile); break;
			case 3: $im=imagecreatefrompng($imgfile); break;
		}
		return $im;
	}
}