<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "Sobre nosotros | StartupPlace";
		$this->template->titlePage = __('ABOUT');
		$this->template->iconClass = "ico-stats ico-white";
  		$this->template->content = View::factory('about');
	}

}