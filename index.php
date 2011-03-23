<?php
	require 'slim/Slim.php';
	require 'views/TwigView.php';
	
	Slim::init('TwigView');
	Slim::config('debug', false);
	
	// ROOT
	Slim::get('/', function () {
	    Slim::render('guides/_index.php', array('active_section' => '', 'active_page' => ''));
	});
	
	/***** MEGA ROUTE *****\
	**
	* Handles all application routing. Looks first for a 'section' param and tries to redirect to it, if none exist it will route to ROOT.
	* Lookes next for a 'page' param and tries to redirect to the corresponding 'section/page'. A switch statement handles any necessary
	* special params you may need per 'section' or 'page'. If a 'section' or 'page' does not exist it will route to 404.
	**
	***********************/
	Slim::get('/:section(/:page)', function ($section, $page = null) {
		if($section){
			if($page){
				switch($section){
					case 'legal':
						Slim::render($section.'/'.$page.'.php', array('active_section' => $section, 'active_page' => $page, 'is_legal' => true));
						break;       
					default:         
						Slim::render($section.'/'.$page.'.php', array('active_section' => $section, 'active_page' => $page));
				}                    
			}else{                   
				switch($section){    
					case "legal":    
						Slim::render($section.'/_index.php', array('active_section' => $section, 'active_page' => '', 'is_legal' => true));
						break;       
					default:         
						Slim::render($section.'.php', array('active_section' => $section, 'active_page' => ''));
				}
			}
		}
	});
	
	// 404
	Slim::notFound(function () {
	    //Slim::render('errors/404.html');
	});

	// ERROR
	Slim::error(function () {
	    //Slim::render('errors/404.html');
	});
	
	Slim::run();
?>