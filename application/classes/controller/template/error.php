<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Controller template for custom error pages.
 *
 * @package    Controller
 * @category   Template
 * @author     George Mejia
 */
class Controller_Template_Error extends Controller_Template
{

	public $template = 'template/error';
	 

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
			$this->template->logged_in = FALSE;

			Session::instance()->set('controller', Request::current()->uri());
			
			if (Auth::instance()->logged_in())
			{
				$this->template->logged_in = TRUE;
			}
			
			// Initialize empty values
			$this->template->title     = '';
			$this->template->content     = '';
			
			$this->template->styles = array();
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
				'http://fonts.googleapis.com/css?family=Droid+Sans:400,700' => 'screen',
				'http://fonts.googleapis.com/css?family=Droid+Serif' => 'screen',
				'http://fonts.googleapis.com/css?family=Boogaloo' => 'screen',
				'http://fonts.googleapis.com/css?family=Economica:700,400italic' => 'screen',
			);
	
			$this->template->styles = array_merge( $this->template->styles, $styles );
		}
		parent::after();
	}
}