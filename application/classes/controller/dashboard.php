<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller_Template_Admin {
	
    // nothing here
    public function action_index()
    {
        // user already logged in, redirect to dashboard
        if (Auth::instance()->logged_in() == 0) {
            $this->request->redirect('dashboard/auth/login');
        }
        $this->template->title = 'Panel principal';
        $this->template->current_section = 'index';
        $this->template->content = View::factory('dashboard-home');
    }

} 