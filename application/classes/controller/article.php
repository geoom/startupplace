<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Article extends Controller_Template_Admin {
     
    const INDEX_PAGE = 'dashboard/articles';
    
    public function before()
    {
        parent::before();

        if ($this->auth->logged_in() == FALSE) {
            $this->request->redirect('dashboard/auth');
        }

        $this->template->current_section = 'articles';
    }

    public function action_index() {
        $user = $this->auth->get_user();
        $articles = ORM::factory('article')
        ->where("user_id", "=", $user->pk())
        ->find_all(); 
                
        $this->template->title = "Art&iacute;culos";
        $this->template->content = View::factory('article/list')
            ->bind('articles', $articles);
    }
    
    // show article form  to one new article
    public function action_new() {
        
        $article = new Model_Article();
        
        $this->template->title = "Nuevo Art&iacute;culo";
        $this->template->content = View::factory('article/form')
            ->bind('article', $article);
    }
    
    // show edit view one article
    public function action_edit() {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);

        $this->template->title = "Editar Art&iacute;culo";
        $this->template->content = View::factory('article/form')
            ->bind('article', $article);
    }

    // delete one article
    public function action_delete() {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);

        $article->delete();
        $this->request->redirect(self::INDEX_PAGE);
    }
    
    // save or edit one article
    public function action_post() {

        $user = $this->auth->get_user();
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);
        $article->values($this->request->post()); // populate $article object from $_POST array
        $article->user_id = $user->pk();
        $errors = array();
        
        try {
            $article->save(); // saves article to database
            $this->request->redirect(self::INDEX_PAGE);
        } catch (ORM_Validation_Exception $ex) {
            $errors = $ex->errors('validation');
        }
        
        $this->template->title = "Nuevo Art&iacute;culo";
        $this->template->content = View::factory('article/form')
            ->bind('article', $article)
            ->bind('errors', $errors);
    }

    public function action_view() {
        $article_id = $this->request->param('id');
        $article = ORM::factory('article', $article_id);

        $this->template->title = "Ver Art&iacute;culo";
        $this->template->content = View::factory('article/single')
            ->bind('article', $article);
    }
 
}