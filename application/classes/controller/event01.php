<?php defined('SYSPATH') or die('No direct script access.');

/**
 * event01 controller.
 *
 * @package    Controller
 * @category   Controller
 * @author     George Mejia
 */
class Controller_Event01 extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "STARTUP: Acepta el reto de ser un emprendedor tecnol&oacute;gico | StartupPlace";
		$this->template->titlePage = __('EVENT01');
		$this->template->description = "Acepta el reto de ser un emprendedor tecnol&oacute;gico";
		$this->template->keywords = "evento startupplace, acepta el reto";
		$this->template->url = "http://startupplace.org/event01";
		$this->template->author = "George Mejia";
		$this->template->iconClass = "ico-cogwheels ico-white";
  		$this->template->content = View::factory('event01');
	}

}