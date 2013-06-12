<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ideastartup extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "ideaStartup | StartupPlace";
		$this->template->titlePage = __('IDEASTARTUP');
		$this->template->description = "El programa de desarrollo emprendedores tecnol&oacute;gicoso de StartupPlace";
		$this->template->keywords = "evento startupplace, acepta el reto";
		$this->template->url = "http://startupplace.org/ideastartup";
		$this->template->author = "George Mejia";
		$this->template->iconClass = "ico-cogwheels ico-white";
  		$this->template->content = View::factory('ideastartup');
	}

}