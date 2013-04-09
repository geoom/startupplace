<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Template {

	public $template = 'contact';

	public function action_index()
	{
		$this->template->title = 'Contacto | StartupPlace';
	}

	/**
	 * The before() method is called before your controller action.
	 * In our template controller we override this method so that we can
	 * set up default values. These variables are then available to our
	 * controllers if they need to be modified.
	 */
	public function before()
	{
		parent::before();

		if ($this->auto_render)
		{
			// keep the last url if it's not home/language
			if(Request::current()->action() != 'language') {
				Session::instance()->set('controller', Request::current()->uri());
			}
			
			// Initialize empty values
			$this->template->title   = '';
			$this->template->content = '';
			
			$this->template->styles = array();
			$this->template->scripts = array(); 
		}
	}
	 
	/**
	 * The after() method is called after your controller action.
	 * In our template controller we override this method so that we can
	 * make any last minute modifications to the template before anything
	 * is rendered.
	 */
	public function after()
	{
		if ($this->auto_render)
		{
			$styles = array(
				'assets/css/bootstrap.css' => 'screen',
				'assets/css/bootstrap-responsive.css' => 'screen',
				'assets/css/style.css' => 'screen',
				'assets/css/parallax-slider.css' => 'screen',
				'assets/css/startupplace.css' => 'screen',
				'http://fonts.googleapis.com/css?family=Droid+Sans:400,700' => 'screen',
				'http://fonts.googleapis.com/css?family=Droid+Serif' => 'screen',
				'http://fonts.googleapis.com/css?family=Boogaloo' => 'screen',
				'http://fonts.googleapis.com/css?family=Economica:700,400italic' => 'screen',
			);

			$scripts = array(
				'assets/js/jquery-1.8.2.js',
				'assets/js/bootstrap.js',
				'assets/js/isotope.js',
				'assets/js/flexslider.js',
				'assets/js/carousel.js',
				'assets/js/jquery.cslider.js',
				'assets/js/slider.js',
				'assets/js/fancybox.js',
			);
	
			$this->template->styles = array_merge( $this->template->styles, $styles );
			$this->template->scripts = array_merge( $this->template->scripts, $scripts );
		}
		parent::after();
	}
	
}
