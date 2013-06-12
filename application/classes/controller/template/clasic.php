<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Clasic extends Controller_Template
{

	public $template = 'template/clasic';

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
			
			if (Auth::instance()->logged_in('participant'))
			{
				$this->template->loged = TRUE;
			}
			
			// Initialize empty values
			$this->template->titleMeta   = '';
			$this->template->titlePage   = '';
			$this->template->iconClass 	 = '';
			$this->template->content     = '';
			
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
				'assets/css/bootstrap.min.css' => 'screen',
				'assets/css/bootstrap-responsive.min.css' => 'screen',
				'assets/css/startupplace.min.css' => 'screen',
				'assets/css/parallax-slider.min.css' => 'screen',
				'http://fonts.googleapis.com/css?family=Droid+Sans:400,700' => 'screen',
				'http://fonts.googleapis.com/css?family=Droid+Serif' => 'screen',
				'http://fonts.googleapis.com/css?family=Boogaloo' => 'screen',
				'http://fonts.googleapis.com/css?family=Economica:700,400italic' => 'screen',
			);

			$scripts = array(
				// 'assets/js/jquery-1.8.2.min.js',
				'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js',
				'http://code.jquery.com/jquery-migrate-1.2.1.min.js',
				'assets/js/bootstrap.min.js',
				'assets/js/flexslider.min.js',
				'assets/js/jquery.cslider.js',
				'assets/js/fancybox.min.js',
				'assets/js/imagesloaded.pkgd.min.js',
			);
	
			$this->template->styles = array_merge( $this->template->styles, $styles );
			$this->template->scripts = array_merge( $this->template->scripts, $scripts );
		}
		parent::after();
	}
}