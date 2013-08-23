<?php defined('SYSPATH') or die('No direct script access.');

/**
 * About controller.
 *
 * @package    Controller
 * @category   Controller
 * @author     George Mejia
 */
class Controller_Post extends Controller_Template_Clasic {

	public function before()
	{
		parent::before();
		$this->template->titleMeta = "Titulo de este post | StartupPlace";
		$this->template->titlePage = __('Titulo de este post');
		$this->template->descriptionMeta = "Descripcion en meta";
		$this->template->keywords = "post bla bla bla";
		$this->template->url = "http://startupplacela.org/post";
	}

	public function action_index()
	{
		$article_id = $this->request->param('id');
		$article = new Model_Article($article_id);
		
		$article_author = ORM::Factory("User", $article->user_id);
		
		$this->template->titlePage = __($article->title);
  		$this->template->content = View::factory('post')
  			->bind('article', $article)
  			->bind('author', $article_author);
	}

}