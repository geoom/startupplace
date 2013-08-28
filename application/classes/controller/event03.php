<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Event 2 controller.
 *
 * @package    Controller
 * @category   Controller
 * @author     George Mejia
 */
class Controller_Event03 extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "Startup week university | StartupPlace";
		$this->template->titlePage = __('EVENT03');
		$this->template->descriptionMeta = "Startup week university";
		$this->template->keywords = "startup week university";
		$this->template->url = "http://startupplace.org/event03";
		$this->template->iconClass = "ico-cogwheels ico-white";
  		$this->template->content = View::factory('event03');
	}

}