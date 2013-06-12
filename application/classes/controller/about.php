<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "Sobre nosotros | StartupPlace";
		$this->template->titlePage = __('ABOUT');
		$this->template->description = "Conoce qui&eacute;nes est&aacute;n detr&aacute;s de esta iniciativa y el porqu&oacute;";
		$this->template->keywords = "quienes somos statupplace, about startupplace";
		$this->template->url = "http://startupplace.org/about";
		$this->template->author = "George Mejia";
		$this->template->iconClass = "ico-stats ico-white";
  		$this->template->content = View::factory('about');
	}

}