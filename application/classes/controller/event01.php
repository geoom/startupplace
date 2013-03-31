<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Event01 extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "STARTUP: Acepta el reto | StartupPlace San Marcos";
		$this->template->titlePage = __('EVENT01');
		$this->template->iconClass = "ico-cogwheels ico-white";
  		$this->template->content = View::factory('event01');
	}

}