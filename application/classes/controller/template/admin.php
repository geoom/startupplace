<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Admin extends Controller_Template {
	
    public $template = 'template/dashboard-base';
     
    /**
     *
     * @var User $auth contains object a1 user 
     */
    public $auth;
    
    /**
     * 
     * Variable que guardara la sesión
     * @var Session $session
     */
    public $session;

    /**
     * (non-PHPdoc)
     * @see system/classes/kohana/Kohana_Controller::before()
     */
    public function before()
    {
        parent::before();

        $this->auth = Auth::instance();
        // $this->session =  Session::instance();

        if ($this->auto_render)
        {   
            $this->template->logged_in = FALSE;

            // keep the last url if it's not home/language
            if(Request::current()->action() != 'language') {
                Session::instance()->set('controller', Request::current()->uri());
            }
            
            if (Auth::instance()->logged_in())
            {
                $this->template->logged_in = TRUE;
            }

            // Initialize empty values
            $this->template->title = '';
            $this->template->content = '';
            $this->template->section_active = '';

            $this->template->styles = array();
            $this->template->scripts = array(); 
            $this->template->extra_styles = array(); 
            $this->template->extra_scripts = array();
        }
    }

    public function after()
    {
        if ($this->auto_render)
        {
            $styles = array(
                'assets/css/bootstrap.min.css' => 'screen',
                'assets/css/bootstrap-responsive.min.css' => 'screen',
                // 'assets/css/startupplace.min.css' => 'screen',
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
                // 'assets/js/sp-cover-slider.min.js',
                // 'assets/js/fancybox.min.js',
                // 'assets/js/imagesloaded.pkgd.min.js',
            );
    
            $this->template->styles = array_merge( $this->template->styles, $styles );
            $this->template->scripts = array_merge( $this->template->scripts, $scripts );
        }
        parent::after();
    }

} 