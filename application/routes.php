<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('articles', 'dashboard/articles(/<action>(/<id>))')
	->defaults(array(
		'controller' => 'article',
		'action'     => 'index',
	));

Route::set('admin', 'dashboard(/<controller>(/<action>))')
	->defaults(array(
		'controller' => 'dashboard',
		'action'     => 'index',
	));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home', 
		'action'     => 'index',
	));

Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+'))
    ->defaults(array(
        'controller' => 'error'
    ));