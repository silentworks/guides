{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<!-- To add navigation sections :: navsect -->
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Code Ignitor</h1>
	<p class="active">This is a very brief overview of the essentials necessary for getting a Code Ignitor app up and running on pagodabox. This article covers:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>The necessary .box config settings</li>
		<li><span class="guides-sprite check"></span>How to config your app to use a local and remove database</li>
	</ul>
	<div class="line-divider"></div>
	<h2>Configuring Pagodabox for your Code Ignitor App</h2>
	<div class="justify">
		<h4 id="-your .-box-file">Your .box File</h4>
		<p>
			<i>*** Quick overview of each of why the following config settings ***</i>
		</p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">.box Config File</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="default-box-config-settings">
			<script class='brush: yaml' type='syntaxhighlighter'>
				<![CDATA[
					network_writable_dirs: []
					php_extensions: [mcrypt, mysqli, mysql, mbstring]
					php_display_errors: On
				]]>
			</script>
			<div class="extra">
				/.box
			</div>
		</div>
	</div>

	<h2>Optional Configuration for Local and Remote Database access</h2>
	<div class="justify">
		<h4 id="-configuring-your-app-for-local-and-remote-deployment">Configuring Your App for Local and Remote Deployment</h4>
		<p>
			<i>*** Quick description of why you want to do this ***</i><br/>
			<a href="https://gist.github.com/931581">Multi site CodeIgniter Set-up</a>
		</p>
		<!-- <h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Configuring Your App to Connect to a Local &Amp; a Remote Database</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="default-box-config-settings">
			
			<script class='brush: php' type='syntaxhighlighter'>
				<![CDATA[
					if ( ! defined('BASEPATH')) exit('No direct script access allowed');
					/*

					Adapted from Phil Sturgeons's blog entry:
					http://bit.ly/fk9H5r 

					|-----------------------------------------------------------
					| Base Site URL                                             
					|-----------------------------------------------------------
					|
					| URL to your CodeIgniter root. Typically this will be your 
					| base URL, WITH a trailing slash:
					|
					| http://www.your-site.com/
					|
					*/

					if(isset($_SERVER['HTTP_HOST']))
					{
					    $config['base_url'] = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on' ? 'https' : 'http';
					    $config['base_url'] .= '://'. $_SERVER['HTTP_HOST'];
					    $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
					}

					else
					{
					    $config['base_url'] = 'http://localhost/';
					}

					/*
					|----------------------------------------------------------
					| Site                                                     
					| Set a constant for whichever site you happen to be       
					|  running, if its not here it will fatal error.                                   
					|----------------------------------------------------------
					*/
					switch($_SERVER['HTTP_HOST'])
					{
					    case '127.0.0.1':
					        define('SITE', 'development');
					    break;

					    default:
					        define('SITE', 'production');
					    break;
					}

					/*
					| ------------------------------------------------------
					| DATABASE CONNECTIVITY SETTINGS                        
					| ------------------------------------------------------
					| This file will contain the settings needed to access  
					| your database.                                        
					|                                                       
					| For complete instructions please consult the "Database
					| Connection" page of the User Guide.                   
					|                                                       
					| ------------------------------------------------------
					| EXPLANATION OF VARIABLES                              
					| ------------------------------------------------------
					|
					| ['hostname'] The hostname of your database server.
					| ['username'] The username used to connect 
					|     to the database
					| ['password'] The password used to connect 
					|     to the database
					| ['database'] The name of the database you want 
					|     to connect to
					| ['dbdriver'] The database type. ie: mysql.  Currently 
					|     supported: mysql, mysqli, postgre, odbc, mssql
					| ['dbprefix'] You can add an optional prefix, 
					|     which will be added to the table name 
					|     when using the  Active Record class
					| ['pconnect'] TRUE/FALSE - Whether to use a persistent
					|      connection
					| ['db_debug'] TRUE/FALSE - Whether database errors 
					|     should be displayed.
					| ['active_r'] TRUE/FALSE - Whether to load the 
					|     active record class
					| ['cache_on'] TRUE/FALSE - Enables/disables 
					|     query caching
					| ['cachedir'] The path to the folder where cache 
					|     files should be stored
					|
					| The $active_group variable lets you choose which 
					|     connection group to make active.  By default 
					|     there is only one group (the "default" group).
					|
					*/

					$active_record = TRUE;

					// production
					$db['production']['hostname'] = "localhost:/tmp/mysql/dbname.sock";
					$db['production']['username'] = "dbuser";
					$db['production']['password'] = "dbpass";
					$db['production']['database'] = "dbname";
					$db['production']['dbdriver'] = "mysql";
					$db['production']['dbprefix'] = "";
					$db['production']['pconnect'] = TRUE;
					$db['production']['db_debug'] = TRUE;
					$db['production']['cache_on'] = FALSE;
					$db['production']['cachedir'] = "";
					$db['production']['char_set'] = "utf8";
					$db['production']['dbcollat'] = "utf8_general_ci";

					// development
					$db['development']['hostname'] = "localhost";
					$db['development']['username'] = "root";
					$db['development']['password'] = "root";
					$db['development']['database'] = "codeignitor-demo";
					$db['development']['dbdriver'] = "mysql";
					$db['development']['dbprefix'] = "";
					$db['development']['active_r'] = TRUE;
					$db['development']['pconnect'] = TRUE;
					$db['development']['db_debug'] = TRUE;
					$db['development']['cache_on'] = FALSE;
					$db['development']['cachedir'] = "";
					$db['development']['char_set'] = "utf8";
					$db['development']['dbcollat'] = "utf8_general_ci";


					// Check the configuration group in use exists,
					// if not use the production
					$active_group = (defined('SITE') && array_key_exists(SITE, $db)) ? SITE : 'production';
				]]>
			</script>
			<div class="extra">
				/application/config/database.php
			</div>
		</div> -->
		
	</div>	
		
	<h2>Live Demo And Sandbox Repo</h2>
	<div class="justify">
		<h4 id="-live-demo">Live Demo</h4>
		<p>
			<i>**** Quick Explanation ***</i><br/>
			<a href="http://codeigniter-demo.pagodabox.com/">Code Ignitor Demo</a></p>
		<h4 id="-sandbox-repo">Sandbox Repo</h4>
		<p>
			<i>**** Something about you can point to this repo, or fork it to give it a try ****</i><br/>
			<a href="https://github.com/pagodabox/code-ignitor-demo">Sample Code Ignitor Repo</a>
		</p>
	</div>
	
</div>


{% endblock %}