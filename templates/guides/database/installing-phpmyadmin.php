{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Installing phpMyAdmin</h4>
		<ul>
			<li><a href="#download-install-phpmyadmin-locally">Download and Install phpMyAdmin Locally</a></li>
			<li><a href="#rename-edit-config">Rename &amp; Edit config.inc.php</a></li>
			<li><span class="guides-sprite tag"></span><a href="#edit-config">Edit config.inc.php for a Single Database</a></li>
			<!-- <li><span class="guides-sprite tag"></span><a href="#edit-config-multiple">Edit config.inc.php for Multiple Databases</a></li> -->
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
		<h4 id="rename-edit-config">Rename &amp; Edit config.inc.php</h4>
		<p>Rename config.sample.inc.php to config.inc.php and for a single database, make the following changes:</p>
		<h3 class="tag" id="edit-config"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Edit config.inc.php for a Single Database</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code">
			<div class="sprite dot-divide"></div>
			<script class='brush: php; class-name: strike' type='syntaxhighlighter'>
				<![CDATA[
					$cfg['Servers'][$i]['connect_type'] = 'tcp';
				]]>
			</script>
			<script class='brush: php' type='syntaxhighlighter'>
				<![CDATA[
					$cfg['Servers'][$i]['connect_type'] = 'socket';
					$cfg['Servers'][$i]['socket']       = '/tmp/mysql/yourdb.sock';
				]]>
			</script>
			<div class="sprite dot-divide"></div>
			<div class="extra">
				/phpMyAdmin/config.inc.php
			</div>
		</div>
		<!-- <p>For multiple databases, make these changes in config.inc.php:</p>
				<h3 class="tag" id="edit-config-multiple"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Edit config.inc.php for Multiple Databases</span><span class="guides-sprite green-end-cap"></span></h3>
				<div class="block grey code">
					<script class='brush: php' type='syntaxhighlighter'>
						<![CDATA[
							$i = 0;
						]]>
					</script>
					<div class="sprite dot-divide"></div>
					<script class='brush: php' type='syntaxhighlighter'>
						<![CDATA[
						// (Line 33ish)
						// First Database :
						$cfg['Servers'][$i]['verbose']      = 'name-your-database-here';
						$cfg['Servers'][$i]['connect_type'] = 'socket';
						$cfg['Servers'][$i]['socket']       = '/tmp/mysql/yourdb.sock';
						]]>
					</script>
					<div class="sprite dot-divide"></div>
					<script class='brush: php' type='syntaxhighlighter'>
						<![CDATA[
							$i = 1;
						]]>
					</script>
					<div class="sprite dot-divide"></div>
					<script class='brush: php' type='syntaxhighlighter'>
						<![CDATA[
						// Additional Database :
						$cfg['Servers'][$i]['verbose']      = 'name-your-second-db-here';
						$cfg['Servers'][$i]['connect_type'] = 'socket';
						$cfg['Servers'][$i]['socket']       = '/tmp/mysql/yourdb.sock';


						/* Specify which database is your default */
						$cfg['ServerDefault'] = 1;	
						]]>
					</script>
					<div class="extra">
						/phpMyAdmin/config.inc.php
					</div>
				</div> -->
		
		<h4 id="add-php-extensions-to-your-box-file">Add PHP Extensions to Your .box File</h4>
		<p>Add the following php extensions needed to run phpMyAdmin into your app's .box file. If you have questions about the .box file, check out <a href="/getting-started/understanding-the-box-file">Understanding the Box File</a>.</p>
		<h3 class="tag" id="box-php-extensions"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">YAML</span><span class="horizontal-guides-sprite green">.box PHP Extensions</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code">
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