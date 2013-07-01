<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Article extends ORM {
    
    protected $_table_name = "articles";

    // contains many relations
    protected $_has_many = array(
        // an article has many comments
        'comments' => array(
            'model'     => 'comment',
            'foreign_key'   => 'article_id',
        ),
    );

    /**
     * A user has many tokens and roles
     *
     * @var array Relationhips
     */
    protected $_belongs_to = array (
        // a article is related to only one user
        'users' => array (
            'model'     => 'user',
            'foreign_key'   => 'user_id'
        )
    );

    /**
     * Rule definitions for validation
     *
     * @return array
     */
    public function rules() {
        return array (
            'title' => array (
                array('not_empty'),
            ),
            'content' => array (     // property name to validate
                array('not_empty'),     // validation type
                array(
                    'min_length',       // validation type
                    array(':value', 10) // validation parameters
                ),
            ),
        );
    }

    public function labels() {
        return array(
            'title'         => 'Title nice label',
            'content'       => 'Content nice label',
        );
    }
 

}