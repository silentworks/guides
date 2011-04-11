{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<ul>
			<li><a href="#-code-it">Code It</a></li>
			<li><a href="#-git">Git</a></li>
			<li><a href="#-github">Github</a></li>
			<li><a href="#-load-it">Load It</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Recommended Workflow</h1>
	<p class="active">We remove the pain of deploying and hosting your app. After reading this article, you should understand:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>The basic process of editing your code and pushing it live via Pagoda Box</li>
	</ul>
	<div class="line-divider"></div>
	<h2 id="-code-it">Code It</h2>
	<div class="justify">
		<p>Do what you do best–code. Let's be honest, you are a developer, and development is cool. The thought of configuring a firewall, router, fail-over environment, and general package installation—let’s face it—isn’t that cool. Sure, you've got your Linux merit badge and you're pretty good at it, but it's not what makes you tick. Focus on code, add revisions and features, then collaborate with your developer buddies. Pagoda lets you reformat the LAMP configuration sector of your brain and re-fill it with coding goodness.</p>
	</div>
	<h2 id="-git">Git</h2>
	<div class="justify">
		<p>Use git to track your code changes and collaborate with your team. Feel free to iterate and test locally as much as you need. </p>
	</div>
	<h2 id="-github">Github</h2>
	<div class="justify">
		<p>Push your changes to github so Pagoda Box can clone your changes and push them live.</p>
	</div>
	<h2 id="-loadit">Load It</h2>
	<div class="justify">
		<p>Once you've committed the perfect revision, deploy that snapshot to all clones simultaneously with the click of a button in the admin panel, or by a simple console command. Within seconds your changes will be live. If by chance your code wasn't quite ready, feel free to rollback (also one-click) and watch your live app recover within seconds.</p>
	</div>
</div>


{% endblock %}