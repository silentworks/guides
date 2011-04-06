{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Create Your Database</h4>
		<ul>
			<li><a href="-create-your-db">Creating A Database</a></li>
			<li><a href="#-select-your-database-model">Select Your Database Model</a></li>
			<li><a href="#-select-your-database-type">Select Your Database Typ</a></li>
			<li><a href="#-specify-the-database’-s-power">Specify The Database’s Power</a></li>
			<li><a href="#-build-it">Build It</a></li>
		</ul>
		<h4><a href="#-connecting-to-your-db">Connecting to your Database</a></h4>
		<ul>
			<li><span class="guides-sprite tag"></span><a href="#connection-sample">Sample Code : Connecting to a MySQL Database</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Creating A Database</h1>
	<p class="active">When your app needs a database, Pagoda Box makes it really easy. After reading this, you should be able to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Create a database for your app</li>
		<li><span class="guides-sprite check"></span>Connect to your database from your app </li>
	</ul>
	<div class="line-divider"></div>
	<h2>Create your Database</h2>
	<div class="justify">
		<h4 id="-create-your-db">In the Beginning</h4>
		<p>To get started, in your app dashboard, click on the Databases tab. Then click the “Add a New Database” button.</p>
	</div>
	<h4 id="-select-your-database-model">Select Your Database Model</h4>
	<p>What database model you use is completely depends on your preference. Currently, Pagoda Box allows the creation of MySQL databases, but MongoDB is in the works. Others will also be available in the future. Simply select what type of database you would like to use.</p>
	<h4 id="-select-your-database-type">Select Your Database Type</h4>
	<p>Currently, Pagoda Box offers cloud databases, but dedicated database servers are coming very very soon. </p>
	<h4 id="-specify-the-database’-s-power">Specify The Database’s Power</h4>
	<p>You may specify how beefy your database is based on what you need to do with your database. The resources you specify depend on your database type. For instance, a MySQL cloud database requires you to specify the amount of RAM you need. A MySQL dedicated database requires you to specify the number of CPU Cores, The amount of RAM, and the amount of disk space you need. Don’t worry, you can migrate between cloud / dedicated at any time,. You may also scale your database’s resources up or down at any time.</p>
	<ol>
		<li><h5>Cloud Databases</h5><p><i>RAM</i> - in 100 MB increments up to 2000 MB</p><p><i>Disk Storage </i>- on a Cloud Database, disk storage is determined by the data inside the database. You only pay for what you use. </p></li>
		<li><h5>Dedicated Databases</h5><p><i>CPU Cores</i> - up to 16</p><p><i>RAM</i> - in 1GB increments up to 32 GB</p><p><i>Disk Storage</i> - up to 1 TB</p></li>
	</ol>
	<h4 id="-build-it">Build It</h4>
	<p>Once you’ve defined your database resources, clicking “Create this Database.” will start the process the process of building your database. </p>
	<h2 id="-connecting-to-your-db">Connecting to your Database</h2>
	<div class="justify">
		<p>Pagoda Box automatically creates database credentials when creating a new database. To view your database credentials, simply click on the “View Credentials” link. Below your resource slider(s), your see values for Database Name, Database Host, Database User, and Database Pass. In your source code, simply enter the corresponding values, push your changes to your Github repo, deploy the latest commit through you app dashboard, and your database should connect to your app.</p>
		<p>Here is an example of a MySQL database created on Pagoda Box, and a sample code snippet for connecting to that database:</p>
		<div class="vertical-guides-sprite image" id="example-connecting-to-a-mysql">
			<span class="guides-sprite top"></span>
			<img src="/images/guides/mysql-example.png" alt="" />
			<span class="guides-sprite bottom"></span>
		</div>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Connecting to a MySQL Database Using a Basic <i>mysqli</i> Adapter</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code" id="connection-sample">
			<script class='brush: php' type='syntaxhighlighter'>
				<![CDATA[
					// Note, these are sample credentials. Your databse will use
					// different username, password, etc...
					$mysqli = new mysqli( '/tmp/mysql/veronica.sock',  'cassandra',
					 					  '84B49SNB49', 'veronica' );
				]]>
			</script>
		</div>
	</div>
</div>


{% endblock %}