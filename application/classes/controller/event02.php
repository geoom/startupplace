<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Event02 extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "STARTUP: Pasi&oacute;n por emprender, tecnolog&iacute;a por descubrir";
		$this->template->titlePage = __('EVENT02');
		$this->template->iconClass = "ico-cogwheels ico-white";
  		$this->template->content = View::factory('event02');
	}

}