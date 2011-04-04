{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Launching Your Wordpress App</h4>
		<ul>
			<li><a href="#-create-a-local-instance-of-wordpress">Create a Local Instance of Wordpress</a></li>
			<li><span class="guides-sprite tag"></span><a href="#-if-you-don-t-know-what-s-wrong-you-can-t-fix-it">Enable Wordpress Debug Mode</a></li>
			<li><a href="#-create-a-github-repo-for-your-wordpress-app">Create Your Github Repo</a></li>
			<li><span class="guides-sprite tag"></span><a href="-the-all--powerful-box-file">Wordpress Specific .box File</a></li>
			<li><a href="#-deploy-your-app-on-pagoda-box">Deploying Your App to Pagoda Box</a></li>
			<li><a href="#-create-a-database-and-link-your-app-to-it">Creating your Database</a></li>
			<li><span class="guides-sprite tag"></span><a href="#point-wp-config-to-your-new-database">Connecting Wordpress to your Database</a></li>
			<li><a href="#-install-your-live-instance-of-wordpress-and-enjoy">Install and Enjoy!</a></li>
		</ul>
		<h4><a href="#post-launch-workflow-recommendations">Post-launch Workflow</a></h4>
		<ul>
			<li><a href="#-things-to-note">Things to Note</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Installing Wordpress</h1>
	<p class="active">Getting Wordpress up and running is pretty simple. There are a few things to be aware of when launching Wordpress on Pagoda Box. After reading this, you should be able to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Create a local instance of Wordpress</li>
		<li><span class="guides-sprite check"></span>Take your local instance of Wordpress and deploy it to Pagoda Box</li>
		<li><span class="guides-sprite check"></span>Create a database and access it from your Wordpress app</li>
		<li><span class="guides-sprite check"></span>Bask in the combined awesomeness of Wordpress and Pagoda Box</li>
	</ul>
	<div class="line-divider"></div>
	<h2>Launching Your Wordpress App</h2>
	<div class="justify">
		<h4 id="-create-a-local-instance-of-wordpress">Create a Local Instance of Wordpress</h4>
		<p>
			We’re assuming that you’ve already done this. If you haven’t and don’t know how, here’s some links for you:<br/>
			<a href="http://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP" target="_blank">Create a local Wordpress instance on a Mac</a><br/>
			<a href="http://codex.wordpress.org/Installing_WordPress#Easy_5_Minute_WordPress_Installation_on_Windows" target="_blank">Create a local Wordpress instance in Windows</a>
		</p>
		<h4 id="-if-you-don-t-know-what-s-wrong-you-can-t-fix-it">If You Don’t Know What’s Wrong, You Can’t Fix It</h4>
		<p>While installing Wordpress locally, Wordpress should have created wp-config.php file for your Wordpress app. On line 81 of wp-config.php, set WP_DEBUG to true. This way, any errors that Wordpress might throw in the deployment process will be shown instead of just showing you a blank white page. </p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Enable Debugging</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="default-box-config-settings">
			<script class='brush: php; class-name: strike' type='syntaxhighlighter'>
				<![CDATA[
					define('WP_DEBUG', false);
				]]>
			</script>
			<!-- <span class="dot-space" ></span> -->
			<script class='brush: php' type='syntaxhighlighter'>
				<![CDATA[
					define('WP_DEBUG', true);
				]]>
			</script>
			<div class="extra">
				/wp-config.php
			</div>
		</div>
		<h4 id="-create-a-github-repo-for-your-wordpress-app">Create a Github Repo for Your Wordpress App</h4>
		<p>
			If you haven’t heard of git or github before, here’s a link just for you:<br/>
			<a href="http://help.github.com/" target="_blank">Getting Started with Github</a>
		</p>
		<h4 id="-the-all--powerful-box-file">The All-Powerful .box File</h4>
		<p>Create a file named ".box" in the base directory of your git repo and paste in the following code snippet. The .box file is your Pagoda Box config file. If you want the .box file explained in more detail, click <a href="/getting-started/understanding-the-box-file">here</a>. </p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">Default Wordpress .box File:</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="default-box-config-settings">
			<script class='brush: yaml' type='syntaxhighlighter'>
				<![CDATA[
				writable_directories: [ /wp-content/uploads/ ]
				display_errors: off
				upload_max_filesize: 20M
				]]>
			</script>
			<div class="extra">
				/.box
			</div>
		</div>
		<p>Identifying /wp-content/uploads as a writable directory will allow you to upload images, video, and other media to your Wordpress app. Setting display_errors to off will hide any errors that php throws. While debugging your app, display_errors should be set to "on," but once you're finished debugging, remember to change it to "off." Setting your upload_max_filesize is a matter of preference. If you want to be able to upload media larger than 20MB, set the number higher. If you want the limit to be lower, set the number lower. It’s totally up to you.</p>
		<p>Save the .box file, commit your changes, and push them to your Github repo.</p>
		<h4 id="-deploy-your-app-on-pagoda-box">Deploy Your App on Pagoda Box</h4>
		<p>Just go through the normal process of deploying your app. If you aren’t sure how to do this, it’s explained <a href="#">here</a>.</p>
		<p>Once your app has been successfully created, if you click on "View Live App Online" it will load an error page that looks something like the following:</p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
			<img src="/images/guides/error-establishing-db-connection.png" alt="" />
			<span class="guides-sprite bottom"></span>
		</div>
		
		<p>This is because you haven't created a live database for your Wordpress app to link to. </p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Note</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>If you get just a blank white screen, it’s probably because WP_DEBUG is still set to false in your wp-config file.</p>
		</div>
		<h4 id="-create-a-database-and-link-your-app-to-it">Create a Database and Link Your App to It</h4>
		<p>Creating a live database is really easy. In your app dashboard, click on the Databases tab, and click the "Add a New Database" button. Select MySQL as your database type, then select what kind of database you would like (Cloud or Dedicated), and what kind of resources you want your database to use (available resources depend on the kind of database you select). Then click "Create this Database."</p>
		<p>Once your database is created, click on the "Show Credentials" link.</p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
			<img src="/images/guides/db-credentials.png" alt="" />
			<span class="guides-sprite bottom"></span>
		</div>
		
		<p>In your wp-config.php file, replace the values of ‘DB_NAME’, ‘DB_USER’, ‘DB_PASSWORD’, and ‘DB_HOST’ with the corresponding credentials of the database you just created.</p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Set Your Database Credentials</span><span class="guides-sprite green-end-cap"></span></h3>
		<div id="point-wp-config-to-your-new-database" class="block grey code" id="default-box-config-settings">
			<script class='brush: php; class-name: strike' type='syntaxhighlighter'>
				<![CDATA[
				define('DB_NAME', 'putyourdbnamehere');
				define('DB_USER', 'usernamehere');
				define('DB_PASSWORD', 'yourpasswordhere');
				define('DB_HOST', 'localhost');
				]]>
			</script>
			<script class='brush: php;' type='syntaxhighlighter'>
				<![CDATA[
					// NOTE : These are not your credentials.
					// Please use your database's credentials
					define('DB_NAME',     'bobbi');
					define('DB_USER',     'linsey');
					define('DB_PASSWORD', 'fpl2zAyN');
					define('DB_HOST',     'localhost:/tmp/mysql/bobbi.sock');
				]]>
			</script>
			<div class="extra">
				/wp-config.php
			</div>
		</div>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Important</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>For Wordpress to be able to recognize the host name, it needs to be prepended with 'localhost:':  <pre>define('DB_HOST', 'localhost:/tmp/mysql/dbname.sock'</pre></p>
		</div>
		<p>Save your wp-config file, commit your changes, push them to your Github repo, and deploy your latest commit through your app dashboard.</p>
		<h4 id="-install-your-live-instance-of-wordpress-and-enjoy">Install Your Live Instance of Wordpress and Enjoy</h4>
		<p>Refresh your Wordpress page, fill out the necessary information, click the "Install Wordpress" button and there you go, your Wordpress app is now live. </p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Quick Note</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>If you changed WP_DEBUG to true, now would be a good time to change it back to false, unless your still debugging your Wordpress app.</p>
			<p>There’s a few more things you can do to make your app fully functional that are covered in these other guides:<br/>
			- <a href="/php/sending-mail-from-your-app">Sending Mail from Your App</a><br/>
			- <a href="/processes/createing-a-dns-alias">Creating a DNS Alias</a><br/>
			- <a href="/processes/scaling-your-app">Scaling your App</a></p>
		</div>
	</div>
	<h2 id="post-launch-workflow-recommendations">Post-launch Workflow Recommendations</h2>
	<div class="justify">
		<h4 id="-things-to-note">Things to Note</h4>
		<p>Pagoda Box makes managing and updating your Wordpress app really easy, but there’s some things you should know.</p>
		<ol>
			<li><p>For security reasons, Pagoda Box doesn’t allow any SSH or FTP access to your live app. This means that any updates, plugins, themes, or any other code changes need to be done on your local instance first, then pushed to your Github repo and deployed through your app dashboard.</p></li>
			<li><p>Remember that if you’re working on your local instance with your local database settings and you push without changing the database settings to the live settings, your live app will break. Not that it’s really hard to fix, it’s just annoying. Pagoda Box has provided a solution that involves using Git branches. For a detailed overview of this solution, click <a href="(link to Git branches guide)">here</a>.</p></li>
			<li><p>Remember that your local database and your live database are two completely separate databases. Anytime you want to publish a new post or add media to your Wordpress app, it needs to be done through your live admin, not your local admin. Your Wordpress content is not stored in your Github repo so any content you add locally will not be pushed live with your repo.</p></li>
		</ol>
	</div>
	
</div>


{% endblock %}