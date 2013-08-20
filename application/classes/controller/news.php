<?php defined('SYSPATH') or die('No direct script access.');

/**
 * About controller.
 *
 * @package    Controller
 * @category   Blog
 * @author     George Mejia
 */
class Controller_News extends Controller_Template_Clasic {

	public function before()
	{
		parent::before();
		$this->template->titleMeta = "Titulo de este post | StartupPlace";
		$this->template->titlePage = __('Historias mas importantes');
		$this->template->descriptionMeta = "Descripcion en meta";
		$this->template->keywords = "post bla bla bla";
		$this->template->url = "http://startupplacela.org/news";
		$this->template->iconClass = "ico-pencil ico-white";
	}

	public function action_index()
	{
		$articles = ORM::factory('article')
			->find_all();

  		$this->template->content = View::factory('news')
  			->bind('articles', $articles);
	}

}