<?php defined('SYSPATH') or die('No direct script access.');

/**
 * ideaStartup controller.
 *
 * @package    Controller
 * @category   Controller
 * @author     George Mejia
 */
class Controller_Ideastartup extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "ideaStartup | StartupPlace";
		$this->template->titlePage =  "ideaStartup";
		$this->template->descriptionMeta = "El programa de desarrollo emprendedores tecnol&oacute;gicoso de StartupPlace";
		$this->template->keywords = "evento startupplace, acepta el reto";
		$this->template->url = "http://startupplace.org/ideastartup";
		$this->template->iconClass = "ico-cogwheels ico-white";
  		$this->template->content = View::factory('ideastartup');
	}

}