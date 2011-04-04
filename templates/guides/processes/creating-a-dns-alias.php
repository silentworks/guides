{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Creating your DNS Alias on Pagoda Box</h4>
		<ul>
			<li><a href="#-overview">Overview</a></li>
			<li><a href="#-create-the-alias">Create The Alias</a></li>
			<li><a href="#-redirection-urls">Redirection URLS</a></li>
		</ul>
		<h4>Editing Your Domain's Zone File</h4>
		<ul>
			<li><a href="#-change-your-a-record">Change your A-Record</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Creating a DNS Alias</h1>
	<p class="active">While yourapp.pagodabox.com is a handy domain for accessing your app when in development, it’s probably not the domain you want your users to visit. No worries. Creating a DNS alias is quick and simple. After reading this, you should be able to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Create a DNS alias</li>
		<li><span class="guides-sprite check"></span>Understand What to Add to Your Domain's Zone File</li>
	</ul>
	<div class="line-divider"></div>
	<h2>Creating your DNS Alias on Pagoda Box</h2>
	<div class="justify">
		<h4 id="-overview">Overview</h4>
		<p>When you’re ready to make your site live and allow people to visit you from your real domain (myapp.com) instead of your Pagoda Box domain (myapp.pagodabox.com), you need to do two things: 
			<ol>
				<li><p>Create a DNS alias on pagodabox</p></li>
				<li><p>Add an A-Record on your domain registrar's zone file pointing to Pagoda's IP Address</p></li>
			</ol>
		</p>
		<h4 id="-create-the-alias">Create The Alias</h4>
		<p>First, you need create a DNS Alias in your app’s admin panel. This alias should be the url that you purchased to house your app (mycoolapp.com). It’s important that the alias perfectly matches your purchased domain name.</p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
			<div class="overflow">
				<img src="/images/guides/dns-alias-sml.png" alt="" />
			</div>
			<a href="#" targ="/images/guides/dns-alias.png" class="guides-sprite zoom"></a>
			<span class="guides-sprite bottom"></span>
		</div>
		<p>Once your created your alias, your should have something that looks like the following image. Note the IP address in bold. This is the IP address you will point your A-Record to in your domain's zone file. </p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
			<div class="overflow">
				<img src="/images/guides/dns-alias-ip-sml.png" alt="" />
			</div>
			<a href="#link" targ="/images/guides/dns-alias-ip.png" class="guides-sprite zoom"></a>
			<span class="guides-sprite bottom"></span>
		</div>
		<h4 id="-redirection-urls">Redirection URLS</h4>
		<p>If you have additional URLs that you would like to redirect to your main domain, You may add them by clicking the <i>Add a Redirection URL</i> button.</p>
	</div>	
	<h2>Editing Your Domain's Zone File</h2>
	<div class="justify">
		<h4 id="-change-your-a-record">Change your A-Record</h4>
		<p>You have probably used a third party to register your domain name. To get the DNS Alias to work, you will need to edit your domain’s zone file via your domain registrar. This is done by adding a A-Record to your zone file that points to your app's IP (see images above). </p>
		<p>
			For example, if my domain name was: myapp.com. I might add the following A-Record to my zone file:<br/>
			www.demoapp.com - 50.22.52.115 
		</p>
		<p>Every domain registrar handles this in a slightly different way. If you have questions about how to edit your zone file, contact your domain registrar.</p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Note</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>Once you have added this MX record to your domain, it can take up to 48 hours to propagate across the web’s nameservers. </p>
		</div>
	</div>
</div> 




{% endblock %}