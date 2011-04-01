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
	<h1>Creating a DNS Alias</h1>
	<p class="active">While yourapp.pagodabox.com is a great domain to have, it might not be the domain you want people to visit to use your app. No worries, after reading this guide, you will:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Know what changes to make in your domain's Zone File to point to Pagoda</li>
		<li><span class="guides-sprite check"></span>Know how to create a DNS alias on Pagoda Box</li>
	</ul>
	<div class="line-divider"></div>
	<h2></h2>
	<div class="justify">
		<h4 id="-overview">Overview</h4>
		<p>When you’re ready to make your site live and allow people to visit you from your real domain (mycoolapp.com) instead of your Pagoda Box domain (mycoolapp.pagodabox.com), you need to do two things: 
			<ol>
				<li><p>Create a DNS alias inside your Application</p></li>
				<li><p>Add a CNAME record on your domain registrar's zone file pointing to Pagoda's IP Address</p></li>
			</ol>
		</p>
		<h4 id="-create-the-alias">Create The Alias</h4>
		<p>First, you need create a DNS Alias in your app’s admin panel. This alias should be the url that you purchased to house your app (mycoolapp.com). It’s important that the alias perfectly matches your purchased domain name. If it doesn’t, it won’t work.</p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
			<div class="overflow">
				<img src="/images/guides/dns-alias-sml.png" alt="" />
			</div>
			<a href="#" targ="/images/guides/dns-alias.png" class="guides-sprite zoom"></a>
			<span class="guides-sprite bottom"></span>
		</div>
		<h4 id="-change-your-cname-record">Change your CNAME Record</h4>
		<p>You have probably used a third party to register your domain name. To get the DNS Alias to work, you will need to edit your domain’s zone file via your domain registrar. This is done by adding a CNAME record to your zone file that points to your app’s working url. </p>
		<p>
			For example, if my app’s name was: mycoolapp. I would add the following CNAME record to my zone file:<br/>
			mycoolapp.pagodabox.com
		</p>
		<p>Every domain registrar handles this in a slightly different way. If you have questions about how to edit your zone file, contact your domain registrar.</p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Note</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>Once you have added this MX record to your domain, it can take up to 48 hours to propagate across the web’s nameservers. </p>
		</div>
	</div>
</div> 




{% endblock %}