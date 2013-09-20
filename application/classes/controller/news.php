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
		$this->template->descriptionMeta = "Desscripcion en meta";
		$this->template->keywords = "post bla bla bla";
		$this->template->url = "http://startupplacela.org/news";
		$this->template->iconClass = "ico-pencil ico-white";
	}

	public function action_index()
	{
		$article_slug = $this->request->param('slug');

		if(String::isNotEmpty($article_slug)){
		
			$article = Model_Article::getBySlug($article_slug);

			if ( ! $article->loaded())
				throw new Kohana_Exception('That article does not exist (:name)'
											, array(':name'=>$article_slug)
											, 404
										);

			$article_author = ORM::Factory("User", $article->user_id);
			
			$this->template->titlePage = __($article->title);
	  		$this->template->content = View::factory('post')
	  			->bind('article', $article)
	  			->bind('author', $article_author);

		}else{
			$articles = ORM::factory('article')
			->find_all();

			$this->template->content = View::factory('news')
  			->bind('articles', $articles);
		}
	}

	public function after(){
		
		$scripts = array(	
			'assets/js/isotope.js',
		);

		$this->template->extra_scripts = array_merge( $this->template->extra_scripts, $scripts);

		parent::after();
	}

}