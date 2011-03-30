<span class="guides-sprite drop-down">
	
	{# I'm using these if statements to check if this is on the home or on a guide page #}
	{% if active_page != "" %}
		Guides Index
	{% endif %}

	{% if active_page == "" %}
		<div class="link-box home">
	{% else %}
		<div class="link-box" id="link-box" style="display:none;">
	{% endif %}
		<span class="guides-sprite top"></span>
		<a href="#link" class="guides-sprite close"></a>
		<h3>Guides Index</h3>
		<ul class="left">
			<li>Start Here</li>
			<li><a href="#link"><i>Getting Started with Pagoda Box (Coming)</i></a></li>
			<li><a href="/index.php/getting-started/what-you-need-to-know-about-pagoda-box">What You Need to Know About Pagoda</a></li>
			<li><a href="/index.php/getting-started/recommended-workflow">Recommended Workflow</a></li>
			<li><a href="/index.php/getting-started/understanding-the-box-file">Understanding the .box Config File</a></li>
		</ul>
		<ul class="right">
			<li>PHP</li>
			<li><a href="/index.php/php/sending-mail-from-your-app">Sending Mail From Your App</a></li>
			<li><a href="#link"><i>Understanding the Environment</i></a></li>
			<li><a href="/index.php/php/connecting-to-services">Connecting to Services</a></li>
			<li><a href="/index.php/php/configuration-and-deployment">Configuration & Deployment</a></li>
		</ul>
		<ul class="left">
			<li>Processes</li>
			<li><a href="#link"><i>Getting Started</i></a></li>
			<li><a href="#link"><i>Creating a Database</a</i>></li>			
			<li><a href="#link"><i>Going Live</i></a></li>
			<li><a href="#link"><i>Scaling Your App</i></a></li>
			<li><a href="#link"><i>Transferring Ownership</i></a></li>
			<li><a href="#link"><i>Creating a DNS Alias</i></a></li>
			<li><a href="#link"><i>Adding SSL</i></a></li>
			<li><a href="#link"><i>Adding Collaborators</i></a></li>
		</ul>
		<ul class="right">
			<li>Database</li>
			<li><a href="#link"><i>MySQL</i></a></li>
		</ul>
		<ul class="right">
			<li>Frameworks</li>
			<li><a href="#link"><i>Cake</i></a></li>
			<li><a href="#link"><i>Drupal</i></a></li>
			<li><a href="#link"><i>Magento</i></a></li>
			<li><a href="#link"><i>Symfony</i></a></li>
			<li><a href="#link"><i>Wordpress</i></a></li>
		</ul>
		<span class="guides-sprite bottom"></span>
	</div>
</span>