{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Connecting To Services</h4>
		<ul>
			<li><a href="#-pagoda-box-services">Connecting to Pagoda Services</a></li>
			<li><span class="guides-sprite tag"></span><a href="#example-connecting-to-a-mysql">Code : Connecting to MySQL</a></li>
			<li><a href="#-third-party-or-self-provided">Connecting to Third Party or Self Provided</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Connecting To Services</h1>
	<p class="active">At some point, your app may need to connect to some sort of service, whether it be a MySQL database, a Memcached store, or an LDAP auth service. These services can be live on Pagoda Box, or elswhere. Connecting to these services is simple. After reading this, you should know how to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Connect to a service hosted by Pagoda Box</li>
		<li><span class="guides-sprite check"></span>Connect to a third party service</li>
	</ul>
	<div class="line-divider"></div>
	<h2></h2>
	<div class="justify">
		<h4 id="-pagoda-box-services">Pagoda Box Services</h4>
		<p>All Pagoda Box services expose a local unix socket connector to your app clones. There’s two reason for doing this: security and portability. For more details, take a look at: <a href="/getting-started/what-you-need-to-know-about-pagoda-box">What You Need To Know About Pagoda Box</a>. You will always be given the path and filename needed to connect to the specified service in your app dashboard. Here is an example of a MySQL database created on Pagoda Box, and a sample code snippet for connecting to that database:</p>
		<div class="vertical-guides-sprite image" id="example-connecting-to-a-mysql">
			<span class="guides-sprite top"></span>
			<img src="/images/guides/mysql-example.png" alt="" />
			<span class="guides-sprite bottom"></span>
		</div>
		<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Connecting to a MySQL Database Using a Basic <i>mysqli</i> Adapter</span><span class="guides-sprite green-end-cap"></span></h3>
		<div class="block grey code">
			<script class='brush: php' type='syntaxhighlighter'>
				<![CDATA[
					$mysqli = new mysqli( '/tmp/mysql/veronica.sock',  'cassandra',
					 					  '84B49SNB49', 'veronica' );
				]]>
			</script>
		</div>
		
		<h4 id="-third-party-or-self-provided">Third Party or Self Provided</h4>
		<p>Your app clones are not limited by external firewalls. You can make any outbound connection you need to. Note: Depending on the location of your service, network latency may be a factor.</p>
	</div>
</div>


{% endblock %}