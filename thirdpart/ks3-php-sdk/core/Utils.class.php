<?php
require_once KS3_API_PATH.DIRECTORY_SEPARATOR."exceptions".DIRECTORY_SEPARATOR."Exceptions.php";

class Utils{
	public static function encodeUrl($url,$path=TRUE){
		$url = rawurlencode($url);
		$url = str_replace("+", "%20", $url);
		$url = str_replace("*", "%2A", $url);
		$url = str_replace("%7A", "~", $url);
		if($path){
			$url = str_replace("%2F", "/", $url);
		}
		return $url;
	}
	public static function hex_to_base64($str){
		$result = '';

		for ($i = 0; $i < strlen($str); $i += 2){
			$result .= chr(hexdec(substr($str, $i, 2)));
		}

		return base64_encode($result);
	}
	public static function replaceNS2($str){
		$str = str_replace("<ns2:", "<", $str);
		$str = str_replace("</ns2:", "</", $str);
		return $str;
	}
	public static $mime_types = array (
			'apk' => 'application/vnd.android.package-archive',
			'3gp' => 'video/3gpp', 'ai' => 'application/postscript', 
			'aif' => 'audio/x-aiff', 'aifc' => 'audio/x-aiff', 
			'aiff' => 'audio/x-aiff', 'asc' => 'text/plain', 
			'atom' => 'application/atom+xml', 'au' => 'audio/basic', 
			'avi' => 'video/x-msvideo', 'bcpio' => 'application/x-bcpio', 
			'bin' => 'application/octet-stream', 'bmp' => 'image/bmp', 
			'cdf' => 'application/x-netcdf', 'cgm' => 'image/cgm', 
			'class' => 'application/octet-stream', 
			'cpio' => 'application/x-cpio', 
			'cpt' => 'application/mac-compactpro', 
			'csh' => 'application/x-csh', 'css' => 'text/css', 
			'dcr' => 'application/x-director', 'dif' => 'video/x-dv', 
			'dir' => 'application/x-director', 'djv' => 'image/vnd.djvu', 
			'djvu' => 'image/vnd.djvu', 
			'dll' => 'application/octet-stream', 
			'dmg' => 'application/octet-stream', 
			'dms' => 'application/octet-stream', 
			'doc' => 'application/msword', 'dtd' => 'application/xml-dtd', 
			'dv' => 'video/x-dv', 'dvi' => 'application/x-dvi', 
			'dxr' => 'application/x-director', 
			'eps' => 'application/postscript', 'etx' => 'text/x-setext', 
			'exe' => 'application/octet-stream', 
			'ez' => 'application/andrew-inset', 'flv' => 'video/x-flv', 
			'gif' => 'image/gif', 'gram' => 'application/srgs', 
			'grxml' => 'application/srgs+xml', 
			'gtar' => 'application/x-gtar', 'gz' => 'application/x-gzip', 
			'hdf' => 'application/x-hdf', 
			'hqx' => 'application/mac-binhex40', 'htm' => 'text/html', 
			'html' => 'text/html', 'ice' => 'x-conference/x-cooltalk', 
			'ico' => 'image/x-icon', 'ics' => 'text/calendar', 
			'ief' => 'image/ief', 'ifb' => 'text/calendar', 
			'iges' => 'model/iges', 'igs' => 'model/iges', 
			'jnlp' => 'application/x-java-jnlp-file', 'jp2' => 'image/jp2', 
			'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 
			'jpg' => 'image/jpeg', 'js' => 'application/x-javascript', 
			'kar' => 'audio/midi', 'latex' => 'application/x-latex', 
			'lha' => 'application/octet-stream', 
			'lzh' => 'application/octet-stream', 
			'm3u' => 'audio/x-mpegurl', 'm4a' => 'audio/mp4a-latm', 
			'm4p' => 'audio/mp4a-latm', 'm4u' => 'video/vnd.mpegurl', 
			'm4v' => 'video/x-m4v', 'mac' => 'image/x-macpaint', 
			'man' => 'application/x-troff-man', 
			'mathml' => 'application/mathml+xml', 
			'me' => 'application/x-troff-me', 'mesh' => 'model/mesh', 
			'mid' => 'audio/midi', 'midi' => 'audio/midi', 
			'mif' => 'application/vnd.mif', 'mov' => 'video/quicktime', 
			'movie' => 'video/x-sgi-movie', 'mp2' => 'audio/mpeg', 
			'mp3' => 'audio/mpeg', 'mp4' => 'video/mp4', 
			'mpe' => 'video/mpeg', 'mpeg' => 'video/mpeg', 
			'mpg' => 'video/mpeg', 'mpga' => 'audio/mpeg', 
			'ms' => 'application/x-troff-ms', 'msh' => 'model/mesh', 
			'mxu' => 'video/vnd.mpegurl', 'nc' => 'application/x-netcdf', 
			'oda' => 'application/oda', 'ogg' => 'application/ogg', 
			'ogv' => 'video/ogv', 'pbm' => 'image/x-portable-bitmap', 
			'pct' => 'image/pict', 'pdb' => 'chemical/x-pdb', 
			'pdf' => 'application/pdf', 
			'pgm' => 'image/x-portable-graymap', 
			'pgn' => 'application/x-chess-pgn', 'pic' => 'image/pict', 
			'pict' => 'image/pict', 'png' => 'image/png', 
			'pnm' => 'image/x-portable-anymap', 
			'pnt' => 'image/x-macpaint', 'pntg' => 'image/x-macpaint', 
			'ppm' => 'image/x-portable-pixmap', 
			'ppt' => 'application/vnd.ms-powerpoint', 
			'ps' => 'application/postscript', 'qt' => 'video/quicktime', 
			'qti' => 'image/x-quicktime', 'qtif' => 'image/x-quicktime', 
			'ra' => 'audio/x-pn-realaudio', 
			'ram' => 'audio/x-pn-realaudio', 'ras' => 'image/x-cmu-raster', 
			'rdf' => 'application/rdf+xml', 'rgb' => 'image/x-rgb', 
			'rm' => 'application/vnd.rn-realmedia', 
			'roff' => 'application/x-troff', 'rtf' => 'text/rtf', 
			'rtx' => 'text/richtext', 'sgm' => 'text/sgml', 
			'sgml' => 'text/sgml', 'sh' => 'application/x-sh', 
			'shar' => 'application/x-shar', 'silo' => 'model/mesh', 
			'sit' => 'application/x-stuffit', 
			'skd' => 'application/x-koan', 'skm' => 'application/x-koan', 
			'skp' => 'application/x-koan', 'skt' => 'application/x-koan', 
			'smi' => 'application/smil', 'smil' => 'application/smil', 
			'snd' => 'audio/basic', 'so' => 'application/octet-stream', 
			'spl' => 'application/x-futuresplash', 
			'src' => 'application/x-wais-source', 
			'sv4cpio' => 'application/x-sv4cpio', 
			'sv4crc' => 'application/x-sv4crc', 'svg' => 'image/svg+xml', 
			'swf' => 'application/x-shockwave-flash', 
			't' => 'application/x-troff', 'tar' => 'application/x-tar', 
			'tcl' => 'application/x-tcl', 'tex' => 'application/x-tex', 
			'texi' => 'application/x-texinfo', 
			'texinfo' => 'application/x-texinfo', 'tif' => 'image/tiff', 
			'tiff' => 'image/tiff', 'tr' => 'application/x-troff', 
			'tsv' => 'text/tab-separated-values', 'txt' => 'text/plain', 
			'ustar' => 'application/x-ustar', 
			'vcd' => 'application/x-cdlink', 'vrml' => 'model/vrml', 
			'vxml' => 'application/voicexml+xml', 'wav' => 'audio/x-wav', 
			'wbmp' => 'image/vnd.wap.wbmp', 
			'wbxml' => 'application/vnd.wap.wbxml', 'webm' => 'video/webm', 
			'wml' => 'text/vnd.wap.wml', 
			'wmlc' => 'application/vnd.wap.wmlc', 
			'wmls' => 'text/vnd.wap.wmlscript', 
			'wmlsc' => 'application/vnd.wap.wmlscriptc', 
			'wmv' => 'video/x-ms-wmv', 'wrl' => 'model/vrml', 
			'xbm' => 'image/x-xbitmap', 'xht' => 'application/xhtml+xml', 
			'xhtml' => 'application/xhtml+xml', 
			'xls' => 'application/vnd.ms-excel', 
			'xml' => 'application/xml', 'xpm' => 'image/x-xpixmap', 
			'xsl' => 'application/xml', 'xslt' => 'application/xslt+xml', 
			'xul' => 'application/vnd.mozilla.xul+xml', 
			'xwd' => 'image/x-xwindowdump', 'xyz' => 'chemical/x-xyz', 
			'zip' => 'application/zip' );
	
	public static function get_mimetype($ext) {
		return (isset ( self::$mime_types [$ext] ) ? self::$mime_types [$ext] : 'application/octet-stream');
	}
	/**
	 * 检测是否含有中文
	 * @param string $subject
	 * @return boolean
	 */
	public static function chk_chinese($str){
		return preg_match('/[\x80-\xff]./', $str);
	}
	
	/**
	 * 检测是否GB2312编码
	 * @param string $str 
	 * @return boolean false UTF-8编码  TRUE GB2312编码
	 */
	public static function  is_gb2312($str)  {  
	    for($i=0; $i<strlen($str); $i++) {  
	        $v = ord( $str[$i] );  
	        if( $v > 127) {  
	            if( ($v >= 228) && ($v <= 233) ){  
	                if( ($i+2) >= (strlen($str) - 1)) return true;  // not enough characters  
	                $v1 = ord( $str[$i+1] );  
	                $v2 = ord( $str[$i+2] );  
	                if( ($v1 >= 128) && ($v1 <=191) && ($v2 >=128) && ($v2 <= 191) )  
	                    return false;   //UTF-8编码  
	                else  
	                    return true;    //GB编码  
	            }  
	        }  
	    }  
	} 


	/**
	 * 检测是否GBK编码
	 * @param string $str 
	 * @param boolean $gbk
	 * @return boolean 
	 */	
	public static function check_char($str, $gbk = true){ 
	    for($i=0; $i<strlen($str); $i++) {
	        $v = ord( $str[$i] );
	        if( $v > 127){
	            if( ($v >= 228) && ($v <= 233) ){
	                 if(($i+2)>= (strlen($str)-1)) return $gbk?true:FALSE;  // not enough characters
	                 $v1 = ord( $str[$i+1] ); $v2 = ord( $str[$i+2] );
	                 if($gbk){
	                      return (($v1 >= 128) && ($v1 <=191) && ($v2 >=128) && ($v2 <= 191))?FALSE:TRUE;//GBK
	                 }else{
	                      return (($v1 >= 128) && ($v1 <=191) && ($v2 >=128) && ($v2 <= 191))?TRUE:FALSE;
	                 }
	            }
	        }
	    }
	   return $gbk?TRUE:FALSE;
	}
	public static function iso8601($time=false) {
    	if ($time === false) $time = time();
   		$date = date('Y-m-d\TH:i:s\.Z', $time);
   		return (substr($date, 0, strlen($date)-2).'Z');
	}
	public static function getFileSize($path){
		$success = FALSE;
		$isresource = FALSE;
		if(!is_resource($path)){
			$isresource = FALSE;
			$resource = fopen($path,"r");
		}else{
			$isresource = TRUE;
			$resource = $path;
		}
		$stat = fstat($resource);
		$size = $stat["size"];
		if($size<0){
			$success = FALSE;
		}else{
			$success = TRUE;
		}
		if($success)
			return $size;
		else if($isresource)
			throw new Ks3ClientException("please use file path instead resource");
		if(!((strtoupper(substr(PHP_OS,0,3))=="WIN"))){//如果不是windows系统，尝试使用stat命令
			$size=trim(`stat -c%s $path`);
		}else{//如果是windows系统，尝试cmd命令
			if(!class_exists("COM")){
				throw new Ks3ClientException("please add 'extension=php_com_dotnet.dll' and set 'com.allow_dcom = true' in php.ini and restart");
			}
			 $fs = new COM("Scripting.FileSystemObject");
   			 $size=$fs->GetFile($path)->Size;
		}
		return $size;
	}
}
?>