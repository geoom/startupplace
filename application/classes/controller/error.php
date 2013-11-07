<?php defined('SYSPATH') or die('No direct script access.'); 

/**
 * Controller for custom error pages.
 *
 * Picks up custom views from views/errors depending on error code.
 * If no custom view is found, the default view is used instead.
 *
 * Variables available in the custom views:
 *
 *     `e` => The exception message,
 *     `code` => HTTP error code,
 *     `title` => Name of error from [Response::$messages],
 *     `response` => [$this->response],
 *     `initial_uri` => Initial uri,
 *
 * @package    Controller
 * @category   Controller
 * @author     George Mejia
 */
class Controller_Error extends Controller_Template_Error{
    
    public function before()
    {
        parent::before();
        // Internal request only!
        if (Request::$initial !== Request::$current) {
            if ($message = rawurldecode($this->request->param('message'))) {
                $this->template->message = $message;
            }
        } else {
            $this->request->action(404);
        }
        $this->response->status((int) $this->request->action());
        $this->template->styles = array();
    }

    public function action_404()
    {
        $this->template->title = '404 Not Found';
        $this->template->content = View::factory('error/404' );
    }
    
    public function action_403()
    {
        $this->template->title = 'Internal Server Error';
        $this->template->content = View::factory('error/403' );
    }
    
    public function action_500()
    {
        $this->template->title = 'Maintenance Mode';
        $this->template->content = View::factory('error/500' );
    }

}