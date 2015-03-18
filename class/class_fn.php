<?php
class fn{
	//---
	public static function restr($var){
		$var = strip_tags($var);
		$array = array("'","");
		$data = str_replace($array,"&#39;",$var);
		return $data;
	}
	//-- for pdo
	public static function clean($var=null){
		if(!empty($var)){
			return stripslashes($var);
		}
		return false;
	}
	
	public static function print_($var){
 	echo "<pre>";
	 print_r($var);
	 }
	           public static function restr_url($var){
	    $array = array("*","/","_","'",'"',":",";","=","&","+",".","?","–",",");
	    $array2 = array(" ");
	    $output = str_replace($array,"",$var);
	    $output = str_replace($array2,"-",$output);
	    return $output;
	}
	 //****---
	public static function reload(){
	echo "<script>window.location.reload();</script>";
	}
	//****
	public static function go_url($url){
	echo "<script> window.location='$url'; </script>";
	}
	public static function full_path()
	{
	$s = &$_SERVER;
	$ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
	$sp = strtolower($s['SERVER_PROTOCOL']);
	$protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
	$port = $s['SERVER_PORT'];
	$port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
	$host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
	$host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
	$uri = $protocol . '://' . $host . $s['REQUEST_URI'];
	$segments = explode('?', $uri, 2);
	$url = $segments[0];
	return $url;
	}
	public static function alert($msg){
	echo"<script language=\"javascript\"> alert('$msg');</script> <meta http-equiv='refresh' content='0;url=".self::full_path()."'> ";
	}
	
	public static function alertback($msg){
	echo"<script language=\"javascript\">alert('$msg'); window.history.back();</script>";
	}
	public static function back(){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	//echo "<script language=\"javascript\">window.history.back();</script>";
	}
	public static function alertgo($msg,$url){
	echo"<script language=\"javascript\">alert('$msg'); window.location='$url';</script>";
	}
	
	public static function replace_url($var){
	$array = array("'","!","@"," ","$","%","^","&","*","|","/",".","+","~","#");
	$data = str_replace($array,"-",$var);
	return $data;
	}
	public static function basename_(){
	$file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
	return $file;
	}
	}
	?>