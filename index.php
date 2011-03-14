<?php
	require 'slim/Slim.php';
	require 'views/TwigView.php';
	
	Slim::init('TwigView');
	
	Slim::get('/', 'index');
	function index(){
	    Slim::render(
			'index.php'
			,array('cur_page' => 'index')
		);
	}
	
	Slim::run();
?>