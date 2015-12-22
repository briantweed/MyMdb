<?php namespace App\Http\Controllers;

use Auth;

trait ImageFunctions
{

   private function createImageName($name)
	{
		return str_replace(' ', '_', ucwords(strtolower($name))).'_'.date('U').'.jpg';
	}
   
   private function checkImageExists($src, $name, $compressed = true)
	{
		list($image, $ext) = explode('.', $src);
		$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
		$basePath = $protocol.$_SERVER['HTTP_HOST'].'/'.env('BASE_PATH');
      if($compressed==true && @getimagesize($basePath.'/images/compressed/'.$image.'-compressor.'.$ext))
		{
			return 'images/compressed/'.$image.'-compressor.'.$ext;
		}
		else if(@getimagesize($basePath.'/images/covers/'.$src))
		{
			return 'images/covers/'.$src;
		}
		return ucwords(substr($name,0,1));
	}

}
