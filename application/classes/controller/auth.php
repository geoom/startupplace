<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template_Admin {

    public function action_index()
    {
        if (Auth::instance()->logged_in()) {
            $this->request->redirect('dashboard');
        }
        $this->request->redirect('dashboard/admin/login');
    }

    public function action_login() 
    {
        // user already logged in, redirect to dashboard
        if (Auth::instance()->logged_in()) {
            $this->request->redirect('dashboard');
        }

        // received the POST
        if (isset($_POST) && Valid::not_empty($_POST)) {
                
            // validate the login form
            $post = Validation::factory($_POST)
            ->rule('username', 'not_empty')
            ->rule('password', 'not_empty')
            ->rule('password', 'min_length', array(':value', 3));
            
            $remember = isset($post['remember']);
        
            //TODO use email or username login
            
            // if the form is valid and the username and password matches
            if ($post->check() && Auth::instance()->login($post['username'], $post['password'], $remember))
            {
                if(Auth::instance()->logged_in('login')) {
                    // sucessfully loged
                    $this->request->redirect('dashboard');
                }
            } else {
                // wrong username or password (but form is valid)
                $loginerrors =  "Usuario o contraseña incorrectos";
            }
            // validation failed, collect the errors
            $errors = $post->errors('user');
        }

        // display
        $this->template->title = "Sitio de administración";
        $this->template->content = View::factory('auth/login')
            ->bind('post', $post)
            ->bind('errors', $errors)
            ->bind('loginerrors', $loginerrors);
    }

    public function action_register()
    {
        if(!Auth::instance()->logged_in('admin')) 
        {
            $this->request->redirect('dashboard/auth/login');
        }
        if (isset($_POST) && Valid::not_empty($_POST)) {
            
            $post = Validation::factory($_POST)
            ->rule('email', 'not_empty')
            ->rule('username', 'not_empty')
            ->rule('password', 'not_empty');

            if ($post->check()) {
                // save
                $model = ORM::factory('user');
                $model->values(array(
                    'email'     => $post['email'],
                    'username'  => HTML::entities(strip_tags($post['username'])),
                    'password'  => $post['password'],
                ));
                try {
                    $model->save();
                    
                    $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
                    $success_signup = TRUE;
                    // $post['email'] = "";
                    // $post['username'] = "";
                }
                catch (ORM_Validation_Exception $e) {
                    $errors = $e->errors('user');
                }
            }else{
                $errors = $post->errors('user');
            }
        }

        // TODO i18n
        // $this->template->title = __('Create an account');
        $this->template->title = "Crear una cuenta";

        // display
        $this->template->content = View::factory('auth/register')
        ->bind('post', $post)
        ->bind('errors', $errors)
        ->bind('success_signup', $success_signup);

    }

    public function action_logout()
    {
        Auth::instance()->logout();
        $this->request->redirect('dashboard/auth/login');
    }
 
} 