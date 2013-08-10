<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Event 2 controller.
 *
 * @package    Controller
 * @category   Controller
 * @author     George Mejia
 */
class Controller_Event02 extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "STARTUP: Pasi&oacute;n por emprender, tecnolog&iacute;a por descubrir | StartupPlace";
		$this->template->titlePage = __('EVENT02');
		$this->template->descriptionMeta = "Acepta el reto de ser un emprendedor tecnol&oacute;gico";
		$this->template->keywords = "evento startupplace, pasion por emprender, tecnologia";
		$this->template->url = "http://startupplace.org/event02";
		$this->template->iconClass = "ico-cogwheels ico-white";
  		$this->template->content = View::factory('event02');
	}

}