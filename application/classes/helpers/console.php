<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @author George Mejia
 */

class Console {
	
	public $mensaje;
	public $loge;

	public function __construct($typeLog, $msj) 
	{
		$this->loge= $typeLog;
		$this->mensaje= $msj;
		$this->consolePrint();
	}

	public function consolePrint()
	{
		$script= '<script type="text/javascript">';
		$script .= 'console.'.$this->loge.'("PHP server: '.$this->mensaje.'")';
		$script .= '</script>';
		echo $script; 
	}
}