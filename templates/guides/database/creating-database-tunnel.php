{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4></h4>
		<ul>
			<li><a href="#quick-note-on-security">A Quick Note On Security</a></li>
			<li><a href="#creating-the-tunnel">Creating the Tunnel</a></li>
			<li><span class="guides-sprite tag"></span><a href="#create-tunnel-while-outside-repo">Create a Tunnel While Outside Repo</a></li>
			<li><span class="guides-sprite tag"></span><a href="#create-tunnel-while-inside-repo">Create a Tunnel While Inside Repo</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Creating a Secure Database Tunnel from Your Desktop</h1>
	<p class="active">Pagoda Box gives you the ability to securely connect to your live database(s) and manage them using the same tools you use to manage your local database(s). No need to use web-based database management tools to administrate your live databases. Now you can use whatever database management tools you would like to administrate your database and do it from your local desktop.</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Create a secure tunnel to a live database</li>
		<li><span class="guides-sprite check"></span>Link a local instance of your app to a live database</li>
	</ul>
	<div class="line-divider"></div>
	<h4 id="quick-note-on-security">A Quick Note On Security</h4>
	<p>We have taken every precaution to ensure every database tunnel is as secure as possible. On top of data encryption, there are three more layers of authentication:</p>
	<ol class="normal">
		<li><span>User Validation</span></li>
		<li><span>Application Validation</span></li>
		<li><span>Database Validation</span></li>
	</ol>
	<p>Every time a secure tunnel is initiated, Pagoda checks to see that you are a valid user. It does this by verifying the login credentials used to login to the Pagoda Terminal Client. Once you are verified as a valid user, Pagoda checks to see if you are the owner or a collaborator of the app whose database your are trying to connect to. If you are not an owner or collaborator, you will not be able to connect to the database. Pagoda then checks that the database you are trying to connect to actually belongs to the app that you are trying to connect through. The only way a database tunnel can be established to a live database is if all three validations are passed.</p>
	<p>What does this mean? It means that even if somebody has all of your database credentials, they will not be able to connect to your database without your Pagoda Box username and password. Protect your Pagoda Box username and password.</p>
	<h4 id="creating-the-tunnel">Creating the Tunnel</h4>
	<p>If you have not already, you need to install the Pagoda gem. For a more information about the Pagoda Terminal Client, checkout the <a href="/getting-started/pagoda-terminal-client">Pagoda Terminal Client Guide</a>.</p>
	<p>Using the Pagoda Terminal Client, specify the app whose database you are trying to connect to and what type of database it is:</p>
	<h3 id='create-tunnel-while-outside-repo'class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Create a Tunnel While Outside Repo</span><span class="guides-sprite end-cap"></span></h3>
	<div class="block black">
		<script class='brush: bash;' type='syntaxhighlighter'>
			<![CDATA[
			$ pagoda tunnel -a <app name> -t mysql
			--OR--
			$ pagoda tunnel --app=<app name> --type=mysql
			]]>
		</script>
	</div>
	<p>If you are inside your app’s repo, you do not need to specify the app:</p>
	<h3 id='create-tunnel-while-inside-repo' class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Create a Tunnel While Inside Repo</span><span class="guides-sprite end-cap"></span></h3>
	<div class="block black">
	<script class='brush: bash;' type='syntaxhighlighter'>
		<![CDATA[
		$ pagoda tunnel -t mysql
		--OR--
		$ pagoda tunnel --type=mysql
		]]>
		</script>
	</div>
	<p><strong>Note:</strong> Really, you don’t even need to specify the database type if you’re connecting to mysql. The database type defaults to mysql.</p>
	<p>Once the tunnel is established, use your local database-management tool of choice to connect to your database using the host and port provided by the Pagoda Terminal Client and the username and password in your Pagoda database credentials.</p>
	<p><em>Database credentials provided by the Pagoda Terminal Client:</em></p>
	<div class="vertical-guides-sprite image">
		<span class="guides-sprite top"></span>
		<img src="/images/guides/db-tunnel-credentials-terminal.png" alt="Database Credentials Provided by the Terminal Client" />	
		<span class="guides-sprite bottom"></span>
	</div>
	<p><em>Database credentials provided in the Pagoda Admin:</em></p>
	<div class="vertical-guides-sprite image">
		<span class="guides-sprite top"></span>
		<img src="/images/guides/db-tunnel-credentials.png" alt="Database Credentials Provided in the Pagoda Admin" />
		<span class="guides-sprite bottom"></span>
	</div>
	<p>Voila! You are now able to administrate your live database from your local desktop. Enjoy!</p>
</div>


{% endblock %}