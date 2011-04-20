{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Installing phpMyAdmin</h4>
		<ul>
			<li><a href="#download-install-phpmyadmin-locally">Download and Install phpMyAdmin Locally</a></li>
			<li><span class="guides-sprite tag"></span><a href="#edit-config">Edit config.inc.php</a></li>
			<li><a href="#add-php-extensions-to-your-box-file">Add PHP Extensions to Your .box File</a></li>
			<li><span class="guides-sprite tag"></span><a href="#box-php-extensions">phpMyAdmin .box PHP Extensions</a></li>
			<li><a href="#add-commit-push-deploy-enjoy">Add, Commit, Push, Deploy &amp; Enjoy</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Installing phpMyAdmin</h1>
	<p class="active">At some point, you will need to edit the data in your database. Installing phpMyAdmin is one way to gain access to your database and change what you need to change. After reading this guide, you should be able to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Install phpMyAdmin</li>
	</ul>
	<div class="line-divider"></div>
	<div class="justify">
		<h4 id="download-install-phpmyadmin-locally">Download and Install phpMyAdmin Locally</h4>
		<p>Download <a href="http://www.phpmyadmin.net/home_page/downloads.php">phpMyAdmin</a>, uncompress it and place it in the root of your application. Rename the directory something more friendly like phpmyadmin instead of phpMyAdmin-x.x.x.x-language.</p>
		<p>Rename config.sample.inc.php to config.inc.php and edit the following sections:</p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Edit config.inc.php</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="edit-config">
			<script class='brush: php' type='syntaxhighlighter'>
				<![CDATA[
					/* Server parameters */
					$cfg['Servers'][$i]['verbose']      = 'pagoda free';
					$cfg['Servers'][$i]['host']         = '';
					$cfg['Servers'][$i]['connect_type'] = 'socket';
					$cfg['Servers'][$i]['socket']       = '/tmp/mysql/yourdb.sock';
					$cfg['Servers'][$i]['port']         = '';
					$cfg['Servers'][$i]['compress']     = false;
					$cfg['DefaultLang']                 = 'en-utf-8';
					$cfg['ServerDefault']               = 1;

					/* Select mysqli if your server has it */
					$cfg['Servers'][$i]['extension'] = 'mysqli';
					$cfg['Servers'][$i]['AllowNoPassword'] = false;
				]]>
			</script>
			<div class="extra">
				/config.inc.php
			</div>
		</div>
		<h4 id="add-php-extensions-to-your-box-file">Add PHP Extensions to Your .box File</h4>
		<p>Add the following php extensions needed to run phpMyAdmin into your apps .box file:</p>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">.box PHP Extensions</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="box-php-extensions">
			<script class='brush: yaml' type='syntaxhighlighter'>
				<![CDATA[
					php_extensions: [mcrypt, mysqli, mysql, mbstring]	
				]]>
			</script>
			<div class="extra">
				/.box
			</div>
		</div>
		<h4 id="add-commit-push-deploy-enjoy">Add, Commit, Push, Deploy &amp; Enjoy</h4>
		<p>Add your edits to your git repo, commit the changes, push the new commit up to your Github repo, deploy your updated repo through your app Admin Panel and enjoy managing and editing your database.</p>
	</div>
</div>


{% endblock %}