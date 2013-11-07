<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @author George Mejia
 */

class String {
	
	public static function isNotEmpty($input)
	{
	    $strTemp = $input;
	    $strTemp = trim($strTemp);

	    if(strlen($strTemp) > 0) //Also tried this "if(strlen($strTemp) > 0)"
	    {
	         return true;
	    }
	    return false;
	}
}