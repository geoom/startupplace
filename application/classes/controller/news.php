<?php defined('SYSPATH') or die('No direct script access.');

/**
 * About controller.
 *
 * @package    Controller
 * @category   Blog
 * @author     George Mejia
 */
class Controller_News extends Controller_Template_Standard {

	public function before()
	{
		parent::before();
		$this->template->titleMeta = " | StartupPlace";
		$this->template->titlePage = "";
		$this->template->descriptionMeta = "";
		$this->template->keywords = "";
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
			// meta info
			$this->template->titleMeta = $article->title . " | StartupPlace";
			$this->template->titlePage = $article->title;
			$this->template->descriptionMeta = "";
			$this->template->keywords = "noticias, startups";
			$this->template->url = "http://startupplacela.org/news/".$article->slug;

			$article->time = date('d-m-Y H:i', strtotime($article->time));
			$article_author = ORM::Factory("User", $article->user_id);
			
			$this->template->titlePage = __($article->title);
	  		$this->template->content = View::factory('post')
	  			->bind('article', $article)
	  			->bind('author', $article_author);

		}else{

			$this->template->titleMeta = "Historias tecnol&oacute;gicas | StartupPlace";
			$this->template->titlePage = "Historias tecnol&oacute;gicas";
			$this->template->descriptionMeta = "Las historias y noticias m&aacute;s tocadas en el mundo del emprendimiento, actualidad sobre el mundo de las startups";
			$this->template->keywords = "artículos, tecnolog&iacute;a, startups, noticias";
			$this->template->url = "http://startupplacela.org/news";
			$this->template->iconClass = "ico-pencil ico-white";

			$articles = ORM::factory('article')
			->order_by('id', 'desc')
			->find_all();

			$this->template->content = View::factory('news')
  			->bind('articles', $articles);
		}
	}

	public function after(){
		
		$scripts = array(	
			'assets/js/isotope.js',
			'assets/js/vendor/moment+langs.min.js'
		);

		$this->template->extra_scripts = array_merge( $this->template->extra_scripts, $scripts);

		parent::after();
	}

}