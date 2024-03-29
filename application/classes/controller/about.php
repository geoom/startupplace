<?php defined('SYSPATH') or die('No direct script access.');

/**
 * About controller.
 *
 * @package    Controller
 * @category   Controller
 * @author     George Mejia
 */
class Controller_About extends Controller_Template_Clasic {

	public function action_index()
	{
		$this->template->titleMeta = "Sobre nosotros | StartupPlace";
		$this->template->titlePage = "Sobre nosotros";
		$this->template->descriptionMeta = "Conoce qui&eacute;nes est&aacute;n detr&aacute;s de esta iniciativa y el porqu&oacute;";
		$this->template->keywords = "quienes somos statupplace, about startupplace";
		$this->template->url = "http://startupplace.org/about";
		$this->template->iconClass = "ico-stats ico-white";
  		$this->template->content = View::factory('about');
	}

}