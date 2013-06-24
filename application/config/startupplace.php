<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'encrypt_key' => 'ajglgzfhnjbhgftyr',
	'cookie_salt' => 'lkasdklasjklstartuplacejkutjtysagduj',
	'cookie_lifetime' => DATE::YEAR,
	'session_lifetime' => 0,
	'header' => array
	(
		'title' => 'StartupPlace web site',
		'keyword' => 'StartupPlace web site',
	),
	'language' => array
	(
			'es',
			'en',
	),
	'user'	=> array
	(
		'create'	=> array
		(
			'username'	=> array
			(
				'min_length'	=> 3,
				'max_length'	=> 15,
				'format'		=> 'alpha_numeric', // alpha_dash, alpha
			),
			'password'	=> array
			(
				'min_length'	=> 6,
			)
		),
	),
);
