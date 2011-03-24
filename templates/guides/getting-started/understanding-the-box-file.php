{% extends "layouts/guide.php" %}

{% block content %}

<div class="left-col">
	<h1>Understanding the Box File</h1>
	<p class="active">The .box file is at the heart of configuring your app for pagodabox. After reading this, you should know how to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Configure PHP for your app</li>
		<li><span class="guides-sprite check"></span>Create URL rewrites</li>
		<li><span class="guides-sprite check"></span>Create writable directories</li>
		<li><span class="guides-sprite check"></span>And much more...</li>
	</ul>
	<div class="line-divider"></div>
	<h2>What's a .box File?'</h2>
	<div class="justify">
		<h4 id="#-the-basics">The Basics</h4>
		<p>Pagoda Box is an app deployment platform. Since the focus of the platform is your app, and not the services that support the platform, all configuration related to your app’s deployment is contained in one single file (.box), located at the base of your git repo. In short, the .box file will provide the necessary configuration to deploy your specific source code. The .box file is intended to be re-used whenever possible, especially when using a framework for multiple projects. When a .box file is not present, we will load a default .box file which might work for your app.</p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Pagodabox Is Not Apache, but a custom server</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>Before explaining all the possible configurations, please note that our infrastructure does not use Apache, nor any other known product. Pagoda Box is a custom solution written from the bottom up for performance, predictability, scalability, and hot code reloads. For this reason we do not read .htaccess files or any other server specific config files. Don’t worry, since we wrote our own service, we also wrote the .box file spec. It’s so simple you’ll probably pee your pants.</p>
		</div>
		<h4 id="#-general-tips">General Tips</h4>
		<p></p>
		<p>Here are some general tips</p>
		<ol>
			<li>The .box file must be valid yaml markup. You can brush up on your yaml here: http://yaml.org/start.html or check your syntax here: http://instantyaml.appspot.com/.</li>
			<li>It is only necessary to use a .box file when the defaults are insufficient.</li>
			<li>You only need to specify the difference between the default configuration and your specific configuration. That means, if only one setting needs to be changed, create a .box file with only that one setting. No need to go overboard.</li>
			<li>Since your app is tracked via git, so is your .box file. With each new deploy (including rollbacks), your .box configuration will be loaded and matched to the contents of your .box file at that commit point.</li>
			<li>When your app is created, if you specify a framework, a custom tailored .box file will become the new default. At all times, we’ll provide a link to the .box file we are using as your default.</li>
		</ol>
	</div>
	<h2>Sample Files</h2>
	<div class="justify">
		<h4 id="#-all-the-options">All The Options</h4>
		<p>Now for the nitty gritty. The following commented code snippet shows the default .box setting</p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">BOX</span><span class="horizontal-guides-sprite green">Default .box Config Settings</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code">
			<script class='brush: yaml' type='syntaxhighlighter'>
				<![CDATA[
					general:
					    # network shared directories that every
					    # node has access to in real time.
					    # 
					    # CAUTION: these should be used sparingly!
					    # You should only use these for upload content
					    # or possible as a central cache store.
					    # 
					    # WARNING: Once you specify a directory here,
					    # deploys will only copy new files into these
					    # directories. The file contents will no longer
					    # be tracked via git on the Pagoda side.
					    writable_directories: [/dirA, /dirB]

					web:
					    # The root of your executable app source.
					    # For instance, if you like to house your app
					    # in /app for security or organizational
					    # purposes, you can specify that here.
					    # All further configurations will be relative
					    # to this directory. Default is the root of 
					    # you project.
					    document_root: /

					    # When a path is not specified in the url
					    # which file would you like to serve, 
					    # in order from left to right until one
					    # of the files exist in the requested
					    # directory .
					    index_list: [index.html, index.php]

					    # When a url contains a path that is not
					    # matched on the file system (ie: /product/13)
					    # which file would you like us to push the
					    # request through. This is often refered to 
					    # as the bootfile or boilerplate.
					    default_gateway: index.php

					    # Lyon what is this?
					    locations: []

					    # When an error is encountered in the request
					    # cycle, we can route the request to a different
					    # path or url if you'd like. 
					    # 
					    # The format is as follows:
					    # error_number: new_path
					    error_pages: 
					        404: /404.html

					php:

					    # The version of php to load into your secure
					    # executable container. Defaults to newest.
					    version: 5.3.5

					    # By default, your php executable is extremely
					    # slim, and only contains the core interpreter.
					    # All additional extensions will be loaded when
					    # we spawn your executable processes. You can
					    # specify them simply as a comma delimited list
					    # To see a list of all available extensions 
					    # check this link: /link/to/extensions
					    extensions: [eaccelerator, mysql]

					    # http://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting
					    error_reporting: 'E_ALL'

					    # http://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors
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
	</div>
</div>


<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>What's a .box File?</h4>
		<ul>
			<li><a href="#-the-basics">The Basics</a></li>
			<li><a href="#-general-tips">General Tips</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

{% endblock %}