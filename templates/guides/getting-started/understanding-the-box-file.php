{% extends "layouts/guide.php" %}

{% block content %}
<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>What's a .box File?</h4>
		<ul>
			<li><a href="#the-basics">The Basics</a></li>
			<li><a href="#general-tips">General Tips</a></li>
		</ul>
		<h4>GENERAL SETTINGS</h4>
		<ul>
			<li><a href="#Network-Writable-Dirs">Network Writable Dirs</a></li>
			<li><a href="#Local-Writable-Dirs">Local Writable Dirs</a></li>
		</ul>
		<h4>WEB SPECIFIC SETTINGS</h4>
		<ul>
			<li><a href="#Document-Root">Document Root</a></li>
			<li><a href="#Index-List">Index List</a></li>
			<li><a href="#Default-Gateway">Default Gateway</a></li>
			<li><a href="#Error-Pages">Error Pages:</a></li>
		</ul>
		<h4>PHP SPECIFIC SETTINGS</h4>
		<ul>
			<li><a href="#php-Version">Version</a></li>
			<li><a href="#php-Extensions">Extensions</a></li>
			<li><a href="#php-Error-Reporting">Error Reporting</a></li>
			<li><a href="#php-Display-Errors">Display Errors</a></li>
			<li><a href="#php-Short-Open-Tag">Short Open Tag</a></li>
			<li><a href="#php-Default-Mimetype">Default Mimetype</a></li>
			<li><a href="#php-Date-Timezone">Date Timezone</a></li>
			<li><a href="#php-Max-Execution-Time">Max Execution Time</a></li>
			<li><a href="#php-Max-Input-Time">Max Input Time</a></li>
			<li><a href="#php-Post-Max-Size">Post Max Size</a></li>
			<li><a href="#php-File-Uploads">File Uploads</a></li>
			<li><a href="#php-Upload-Max-Filesize">Upload Max Filesize</a></li>
			<li><a href="#php-Max-File-Uploads">Max File Uploads</a></li>
		</ul>
		<h4><a href="#sample-files">Sample Files</a></h4>
		<ul>
			<li><span class="guides-sprite tag"></span><a href="#default-box-config-settings">Default .box Config Settings</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Understanding the Box File</h1>
	<p class="active">The .box file is at the heart of configuring your app for Pagoda Box. After reading this, you should know how to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Configure PHP for your app</li>
		<li><span class="guides-sprite check"></span>Create URL rewrites</li>
		<li><span class="guides-sprite check"></span>Create writable directories</li>
		<li><span class="guides-sprite check"></span>Mucho mucho more...</li>
	</ul>
	<div class="line-divider"></div>
	<h2>What's a .box File?</h2>
	<div class="justify">
		<h4 id="the-basics">The Basics</h4>
		<p>Pagoda Box is an app deployment platform. Since the focus of the platform is your app, and not the services that support the platform, all configuration related to your app’s deployment is contained in a single file (.box), located at the base of your git repo. In short, the .box file specifies how Pagoda Box should be configured for your source code. The .box file is intended to be re-used whenever possible, especially when using frameworks for multiple projects. When a .box file is not present, we load a default .box file which works for most apps.</p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Pagoda Box is a custom server (ie: it's not Apache)</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>Before explaining all the possible configurations, please note that our infrastructure does not use Apache. Pagoda Box is a custom solution written from the bottom up for performance, predictability, scalability, and hot code reloads. For this reason we do not read .htaccess files or any other server specific config files. But no worries, we also wrote the .box file spec–It’s so simple you’ll probably pee your pants.</p>
		</div>
		<h4 id="general-tips">General Tips</h4>
		<ol>
			<li><p>The .box file must be valid yaml markup. You can brush up on your yaml here: <a href="http://yaml.org/start.html" target="_blank">yaml.org/start.html</a> or check your syntax here: <a href="http://instantyaml.appspot.com/" target="_blank">instantyaml.appspot.com</a>.</p></li>
			<li><p>It is only necessary to use a .box file when the defaults are insufficient.</p></li>
			<li><p>You only need to specify the difference between the default configuration and your specific configuration. That means, if only one setting needs to be changed, create a .box file with only that one setting. No need to go overboard.</p></li>
			<li><p>Since your app is tracked via git, so is your .box file. With each new deploy (including rollbacks), your .box configuration will be loaded and matched to the contents of your .box file at that commit point.</p></li>
			<li><p>If you specify a framework when your app is created, a framework tailored .box file will become the new default. At all times, we provide a link to the .box file we are using as your default.</p></li>
		</ol>
	</div>
	
	<div class="justify">
		<h2 id="the-basics">Web Config Options</h2>
		<h5 class="first" id="Network-Writable-Dirs">network_writable_dirs<span class="guides-sprite gear"></span></h5>
			<p>
				Network shared directories that all clones have access to in real time.<br/>
				<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">Network Writable Directories</span><span class="guides-sprite green-end-cap"></span></h3>
				<div class="block grey code" id="default-box-config-settings">
					<script class='brush: yaml' type='syntaxhighlighter'>
						<![CDATA[
							network_writable_dirs: [/dirA, /dirB]
						]]>
					</script>
					<div class="extra">
						/.box
					</div>
				</div>
				
			</p>
			<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">WARNING:</span><span class="guides-sprite w-end-cap"></span></h3>
			<div class="block yellow">
				<p>Any directory specified here will no longer be tracked via git in the Pagoda repo.</p>
				<p>These should be used sparingly. Only use these for upload content or possibly as a central cache store.</p>
			</div>
			<h5 id="Local-Writable-Dirs">local_writable_dirs<span class="guides-sprite gear"></span></h5>
				<p>The same as a network writable directory, but not shared among clones.</p>
				<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">Local Writable Directories</span><span class="guides-sprite green-end-cap"></span></h3>
				<div class="block grey code" id="default-box-config-settings">
					<script class='brush: yaml' type='syntaxhighlighter'>
						<![CDATA[
							local_writable_dirs: [/dirA, /dirB]
						]]>
					</script>
					<div class="extra">
						/.box
					</div>
				</div>
		<h5 id="Document-Root">document_root<span class="guides-sprite gear"></span></h5>
			<p>The root of your executable app source. For instance, if you like to house your app in /app for security or organizational purposes, you can specify that here. All further configurations will be relative to this directory. Default is the root of you project.</p>			
			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">Document Root</span><span class="guides-sprite green-end-cap"></span></h3>
			<div class="block grey code" id="default-box-config-settings">
				<script class='brush: yaml' type='syntaxhighlighter'>
					<![CDATA[
						document_root: /
					]]>
				</script>
				<div class="extra">
					/.box
				</div>
			</div>
			
		<h5 id="Index-List">index_list<span class="guides-sprite gear"></span></h5>
			<p>When a path is not specified in the url which file would you like to serve,  in order from left to right until one of the files exist in the requested directory.</p>
			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">Index List</span><span class="guides-sprite green-end-cap"></span></h3>
			<div class="block grey code" id="default-box-config-settings">
				<script class='brush: yaml' type='syntaxhighlighter'>
					<![CDATA[
						index_list: [index.html, index.php]
					]]>
				</script>
				<div class="extra">
					/.box
				</div>
			</div>
			
		<h5 id="Default-Gateway">default_gateway<span class="guides-sprite gear"></span></h5>
			<p>This is the file we route requests into when a request uri doesn't match any path in your project directory. This setting replaces tedious rewrite rules found in servers like Apache.</p>
			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">Default Gateway</span><span class="guides-sprite green-end-cap"></span></h3>
			<div class="block grey code" id="default-box-config-settings">
				<script class='brush: yaml' type='syntaxhighlighter'>
					<![CDATA[
						default_gateway: index.php
					]]>
				</script>
				<div class="extra">
					/.box
				</div>
			</div>
			
		<h5 id="Error-Pages">error_pages<span class="guides-sprite gear"></span></h5>
			<p>Use this setting to specify your own custom error handler pages. You can find a list of HTTP status codes <a href="http://en.wikipedia.org/wiki/List_of_HTTP_status_codes">here</a>.<br/>
			<b>Note:</b> 404 errors are routed through your default gateway, and specifying a 404 handler will not work.</p>
			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">Error Pages</span><span class="guides-sprite green-end-cap"></span></h3>
			<div class="block grey code" id="default-box-config-settings">
				<script class='brush: yaml' type='syntaxhighlighter'>
					<![CDATA[
						error_pages:
						    503: /503.html
					]]>
				</script>
				<div class="extra">
					/.box
				</div>
			</div>
			

		<h2 id="the-basics">Php Config Options</h2>
		<h5 id="php-Version"class="first">php_version<span class="guides-sprite gear"></span></h5>
			<p>The version of php to load into your secure executable container. It defaults to the newest stable release.</p>
			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">PHP Version</span><span class="guides-sprite green-end-cap"></span></h3>
			<div class="block grey code" id="default-box-config-settings">
				<script class='brush: yaml' type='syntaxhighlighter'>
					<![CDATA[
						# Versions available: 5.2.17,  5.3.5,  5.3.6
						php_version: 5.3.5
					]]>
				</script>
				<div class="extra">
					/.box
				</div>
			</div>
			
		<h5 id="php-Extensions">php_extensions<span class="guides-sprite gear"></span></h5>
			<p>By default, your php executable is extremely slim, and only contains the core interpreter. All additional extensions will be loaded when we spawn your executable processes. You can specify them simply as a comma delimited list. <br/>
			<br/>
			You can view the available extensions available for your version of php via the following links: <a href="https://gist.github.com/916651">PHP 5.2.17</a>, <a href="https://gist.github.com/916666">PHP 5.3.5</a> and <a href="https://gist.github.com/916658">PHP 5.3.6</a>  </p>
 			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">PHP Extensions</span><span class="guides-sprite green-end-cap"></span></h3>
 			<div class="block grey code" id="default-box-config-settings">
 				<script class='brush: yaml' type='syntaxhighlighter'>
 					<![CDATA[
 						php_extensions: [eaccelerator, mysql]
 					]]>
 				</script>
 				<div class="extra">
 					/.box
 				</div>
 			</div>
 			
		<h5 id="php-Error-Reporting">php_error_reporting<span class="guides-sprite gear"></span></h5>
			<p><a href"http://bit.ly/hE3GT7">http://bit.ly/hE3GT7</a></p>	
		<h5 id="php-Error-Reporting">php_display_errors<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://bit.ly/elKiAH"> http://bit.ly/elKiAH</a></p>
		<h5 id="php-Short-Open-Tag">php_short_open_tag<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>	
		<h5 id="php-Default-Mimetype">php_default_mimetype<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>		
		<h5 id="php-Date-Timezone">php_date_timezone<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>	
		<h5 id="php-Max-Execution-Time">php_max_execution_time<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>	
		<h5 id="php-Max-Input-Time">php_max_input_time<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>	
		<h5 id="php-Post-Max-Size">php_post_max_size<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>	
		<h5 id="php-File-Uploads">php_file_uploads<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>	
		<h5 id="php-Upload-Max-Filesize">php_upload_max_filesize<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>	
		<h5 id="php-Max-File-Uploads">php_max_file_uploads<span class="guides-sprite gear"></span></h5>
			<p><a href=" http://php.net/manual/en/ini.core.php"> http://php.net/manual/en/ini.core.php</a></p>
	</div>
	
	
	
	<h2 id="sample-files">Sample Files</h2>
	<div class="justify">
		<br/>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">BOX</span><span class="horizontal-guides-sprite green">Default .box Config Settings</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="default-box-config-settings">
			<script class='brush: yaml' type='syntaxhighlighter'>
				<![CDATA[
					################################################
					## GENERAL SETTINGS
					################################################
					network_writable_dirs: [/dirA, /dirB]
					local_writable_dirs: [/dirA, /dirB]


					################################################
					## WEB SPECIFIC SETTINGS
					################################################
					document_root: /
					index_list: [index.html, index.php]
					default_gateway: index.php
					error_pages:
					    404: /404.html

					
					################################################
					## PHP SPECIFIC SETTINGS
					################################################
					php_version: 5.3.5
					php_extensions: [eaccelerator, mysql]
					php_error_reporting: 'E_ALL'
					php_display_errors: On
					php_short_open_tag: On
					php_default_mimetype: text/html
					php_date_timezone: US/central
					php_max_execution_time: 30
					php_max_input_time: 60
					php_post_max_size: 8M
					php_file_uploads: On
					php_upload_max_filesize: 2M
					php_max_file_uploads: 20
				]]>
			</script>
			<div class="extra">
				/.box
			</div>
		</div>
	</div>
</div>




{% endblock %}