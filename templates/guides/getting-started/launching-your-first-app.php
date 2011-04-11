{% extends "layouts/guide.php" %}

{% block content %}

<div class="left-col">
	<h1>Launching Your First App</h1>
	<p class="active">Preparing your app for deployment is dead simple. This guide will walk you through the necessary steps for configuring Pagoda for your application. After reading this, you should know how to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Prepare your app for deployment</li>
	</ul>
	<div class="line-divider"></div>
	<h3 class="right-tag"><span class="horizontal-guides-sprite solid-green">Steps</span><span class="guides-sprite green-cap"></span></h3>
	<div class="block grey steps">
		<ul>
			<li><span class="guides-sprite step">1</span><a href="#step-1">Create Your .box File:</a></li>
			<li><span class="guides-sprite step">2</span><a href="#step-2">Choose a PHP Version</a></li>
			<li><span class="guides-sprite step">3</span><a href="#step-3">Customize Your PHP Build</a></li>
			<li><span class="guides-sprite step">4</span><a href="#step-4">Customize Your PHP Settings</a></li>
			<li><span class="guides-sprite step">5</span><a href="#step-5">Set Your Root Directory</a></li>
			<li><span class="guides-sprite step">6</span><a href="#step-6">Set Your Default Gateway</a></li>
			<li><span class="guides-sprite step">7</span><a href="#step-7">Prepare Writable Directories (if needed)</a></li>
			<li><span class="guides-sprite step">8</span><a href="#step-8">Set Custom Error Pages</a></li>
			<li><span class="guides-sprite step">9</span><a href="#step-9">Layer on Security</a></li>
			<li><span class="guides-sprite step">10</span><a href="#step-10">Deploy Already!</a></li>
		</ul>
	</div>
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-1">Step 1</span>Create Your .box File</p>
	</div>
		<p>All configuration lives in a .box file placed in your project’s root directory. It is only necessary to specify configuration settings in your .box file that are different than the default. In other words, you don’t need to go overboard by specifying a value for every single configuration setting. Only specify the options you need.</p>
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-2">Step 2</span>Choose a PHP Version</p>
	</div>
		<p>You can specify the version of php your app will run on. If you don’t specify a version, the most recent version will be loaded for you. Check here for a list of supported versions: (Braxton to provide a doc for versions supported)</p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">&nbsp;&nbsp;&nbsp;</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="choose-a-php-version">
			<script class='brush: yaml' type='syntaxhighlighter'>
				<![CDATA[
				version: '5.2.17'
				]]>
			</script>
			<div class="extra">
				/.box
			</div>
		</div>
	<div class="block grey steps">	
		<p class="primary-step"><span class="guides-sprite step" id="step-3">Step 3</span>Customize Your PHP Build</p>
	</div>
		<p>by default, your php build is a bare-bones default nothing compilation. We don’t assume you need anything–therefore, your build is slim, clean and efficient. Adding features (i.e. mysql) is extremely simple. You can load them as extensions at any time. Here's <a href="#">a list of all available extensions</a>: </p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">&nbsp;&nbsp;&nbsp;</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="default-box-config-settings">
			<script class='brush: yaml' type='syntaxhighlighter'>
				<![CDATA[
				# short list
				extensions: [apc, mysql]

				# long list
				extensions:
					- apc
					- mysql
					- hash
					- iconv
					- soap
					- simplexml
				]]>
			</script>
			<div class="extra">
				/.box
			</div>
		</div>
		
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-4">Step 4</span>Customize Your PHP Settings</p>
	</div>
		<p>Pure semantics. Here you can specify your timezone settings, max upload size, error reporting, and other preference configs. </p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">&nbsp;&nbsp;&nbsp;</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="default-box-config-settings">
			<script class='brush: yaml' type='syntaxhighlighter'>
				<![CDATA[
				# http://bit.ly/hE3GT7
				error_reporting: 'E_ALL'

				# http://bit.ly/elKiAH
				display_errors: On

				# http://php.net/manual/en/ini.core.php
				short_open_tag: On

				# http://php.net/manual/en/ini.core.php
				default_mimetype: text/html

				# http://php.net/manual/en/ini.core.php
				date_timezone: US/central

				# http://php.net/manual/en/ini.core.php
				max_execution_time: 30

				# http://php.net/manual/en/ini.core.php
				max_input_time: 60

				# http://php.net/manual/en/ini.core.php
				post_max_size: 8M

				# http://php.net/manual/en/ini.core.php
				file_uploads: On

				# http://php.net/manual/en/ini.core.php
				upload_max_filesize: 2M

				# http://php.net/manual/en/ini.core.php
				max_file_uploads: 20
				]]>
			</script>
			<div class="extra">
				/.box
			</div>
		</div>
		
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-5">Step 5</span>Set Your Root Directory</p>
	</div>
	<p>Pagoda needs to know what you consider your root directory. In many cases, your root directory is the base of your project. But, if you like to nestle your app in a subdirectory for security or preferential reasons, rest assured, you can still use it as your root directory.</p>
	<p>So let’s say your index.php file is inside of /app, but you don’t want your url to say http:you.pagodabox.com/app. All you need to do is set "/app" as your root directory, and Pagoda Box will know to start from there. If the base of your project is your root directory, you don’t need to specify anything. Pagoda Box will assume your root directory is /.</p>
	<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">&nbsp;&nbsp;&nbsp;</span><span class="guides-sprite green-end-cap"></span></h3>
	<div class="block grey code" id="default-box-config-settings">
		<script class='brush: yaml' type='syntaxhighlighter'>
			<![CDATA[
			document_root: /app
			]]>
		</script>
		<div class="extra">
			/.box
		</div>
	</div>
	
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-6">Step 6</span>Set Your Default Gateway</p>
	</div>
	<p>We know all the cool kids are finding ways to abandon the old “about-us.php” paths and use ‘pretty urls’. You want to be cool too? Fine by us. We don’t fuss with messy rewrite conditions. Simply tell us where to route the request when a url doesn’t match a file in your app. That means, when a request for http://you.pagodabox.com/about-us comes, /about-us obviously doesn’t exist in your project source, so we assume index.php, unless you specify otherwise. Whatever you want your gateway to be, let us know and we’ll be sure to send those requests where you want ‘em.</p>
	<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">&nbsp;&nbsp;&nbsp;</span><span class="guides-sprite green-end-cap"></span></h3>
	<div class="block grey code" id="default-box-config-settings">
		<script class='brush: yaml' type='syntaxhighlighter'>
			<![CDATA[
			default_gateway: bootstrap.php
			]]>
		</script>
		<div class="extra">
			/.box
		</div>
	</div>
	
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-7">Step 7</span>Prepare Writable Directories (if needed)</p>
	</div>
	<p>Pagoda Box is a cloud based infrastructure, so don’t assume your app clones will be on the same compute node. In fact, we spread them out as much as possible for redundancy. That means when you launch a clone of your app, we mount a read-only file system. Your app cannot write to the underlying filesystem. There are instances, albeit very limited, where you might need to write and share the data among nodes (most likely up-loadable media assets). Therefore, you need to specify writable directories (if any) for your app.</p>
	<h3 class="tag"><span class="guides-sprite cap-notice"></span><span class="horizontal-guides-sprite red">Warning</span><span class="guides-sprite red-end-cap"></span></h3>
	<div class="block red">
		<p>You should note that no file contained in a writable directory can be executed.</p>
		<p>You should also note that these directories are networked storage and at times may suffer from network latency. This won’t be a problem if you are only using these directories for media assets. We caution against any other scenario.</p>
	</div>
	<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">&nbsp;&nbsp;&nbsp;</span><span class="guides-sprite green-end-cap"></span></h3>
	<div class="block grey code" id="default-box-config-settings">
		<script class='brush: yaml' type='syntaxhighlighter'>
			<![CDATA[
			writable_directories: [/media, /var/log]
			]]>
		</script>
		<div class="extra">
			/.box
		</div>
	</div>
	
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-8">Step 8</span>Set Custom Error Pages</p>
	</div>
	<p>From time to time an app may crash. No worries, it happens to the best of us. In the unlikely event (because you are awesome) that it does happen, we let you display custom error pages. It’s really simple. The example speaks for itself:</p>
	<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">&nbsp;&nbsp;&nbsp;</span><span class="guides-sprite green-end-cap"></span></h3>
	<div class="block grey code" id="default-box-config-settings">
		<script class='brush: yaml' type='syntaxhighlighter'>
			<![CDATA[
			error_pages:
				404: /404.html
				502: /502.html
			]]>
		</script>
		<div class="extra">
			/.box
		</div>
	</div>
	
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-9">Step 9</span>Layer on Security</p>
	</div>
	<p>Of course there are pieces of your app that you want to keep from Peeping Tom. The permissions directive allows you to restrict url’s by IP addresses.</p>
	<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">&nbsp;&nbsp;&nbsp;</span><span class="guides-sprite green-end-cap"></span></h3>
	<div class="block grey code" id="default-box-config-settings">
		<script class='brush: yaml' type='syntaxhighlighter'>
			<![CDATA[
			# EXAMPLE COMING...
			]]>
		</script>
		<div class="extra">
			/.box
		</div>
	</div>
	
	<div class="block grey steps">
		<p class="primary-step"><span class="guides-sprite step" id="step-10">Step 10</span>Deploy Already!</p>		
	</div>
	<p>Ok, your app should be good to go. Once you have committed your changes and deployed the newly created .box file, we will rebuild each clone’s environment to match your new configuration settings (app clones are rebuilt with every deploy). If something gets messed up, never fear, configuration can be undone with a quick rollback!</p>
	<p>This has been a 'start-to-finish' configuration overview. To see an exhaustive .box file guide, <a href="/getting-started/understanding-the-box-file">visit here</a>.</p>
</div>


{% endblock %}