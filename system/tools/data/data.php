<?php
namespace System\tools\method;

use System\tools\session\Message;

class Data {

	public static function method($data)
	{
		return extract($data);
	}

	function ArrUrlSend($array) { 
	    $tmp = serialize($array); 
	    $tmp = urlencode($tmp); 
	    return $tmp; 
	}

	function ArrUrlGet($url_array) { 
	    $tmp = stripslashes($url_array); 
	    $tmp = urldecode($tmp); 
	    $tmp = unserialize($tmp); 
	   return $tmp; 
	} 
}