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
		<ul class="right">
			<li>PHP</li>
			<li><a href="/php/sending-mail-from-your-app">Sending Mail From Your App</a></li>
			<li><a href="#link" class="coming-soon">Understanding the Environment (Coming)</a></li>
			<li><a href="/php/connecting-to-services">Connecting to Services</a></li>
		</ul>
		<ul class="right">
			<li>Database</li>
			<li><a href="/processes/creating-a-database">Creating a Database</a></li>			
			<li><a href="#link" class="coming-soon">MySQL (Coming)</a></li>
		</ul>
		<ul class="right">
			<li>Frameworks</li>
			<li><a href="#link" class="coming-soon">Cake (Coming)</a></li>
			<li><a href="#link" class="coming-soon">Drupal (Coming)</a></li>
			<li><a href="#link" class="coming-soon">Magento (Coming)</a></li>
			<li><a href="#link" class="coming-soon">Symfony (Coming)</a></li>
			<li><a href="/frameworks/wordpress">Wordpress</a></li>
		</ul>
		<ul class="left">
			<li>Start Here</li>
			<li><a href="#link" class="coming-soon">Getting Started with Pagoda Box (Coming)</a></li>
			<li><a href="/getting-started/launching-your-first-app">Launching Your First App</a></li>
			<li><a href="/getting-started/what-you-need-to-know-about-pagoda-box">What You Need to Know About Pagoda</a></li>
			<li><a href="/getting-started/recommended-workflow">Recommended Workflow</a></li>
			<li><a href="/getting-started/understanding-the-box-file">Understanding the .box Config File</a></li>
		</ul>
		<ul class="left">
			<li>Processes</li>
			<li><a href="/processes/adding-a-collaborator">Adding Collaborators + Transferring Ownership</a></li>
			<li><a href="/processes/creating-a-database">Creating a Database</a></li>			
			<!-- <li><a href="#link" class="coming-soon">Going Live (Coming)</a></li> -->
			<li><a href="/processes/creating-a-dns-alias">Creating a DNS Alias</a></li>
			<li><a href="#link" class="coming-soon">Adding SSL (Coming)</a></li>
			<li><a href="#link" class="coming-soon">Scaling Your App (Coming)</a></li>
		</ul>
		<span class="guides-sprite bottom"></span>
	</div>
</span>