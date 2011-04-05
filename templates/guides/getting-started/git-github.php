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
	<h1>Why Git and Github?</h1>
	<p class="active">Git is one of those amazing tools that changes the way you work forever. Github takes this to a whole new level with dead simple collaboration points, and convenient access / visualization tools. After reading this guide, you will understand:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>What Git is</li>
		<li><span class="guides-sprite check"></span>What Github is</li>
		<li><span class="guides-sprite check"></span>How Pagodabox Works with Github</li>
	</ul>
	<div class="line-divider"></div>
	<h2>Git + Github</h2>
	<div class="justify">
		<h4 id="-overview">Overview</h4>
		<p>This isn’t meant to be an exhaustive explanation of git / github or a tutorial for using these tools.  Rather we hope to give you a quick overview of what they are, and why they are so very useful. We will provide links to more in depth articles, and tutorials for getting started. </p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Short and Sweet</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p><b>Git</b> is a distributed version control systen with an emphasis on collaborative software development.</p>
			<p><b>GitHub</b> is bar none the best tool for collaborating as a developer.</p>
		</div>
		<h4 id="-practical-examples">Practical Examples</h4>
		<p>Rather than a long explanation of git and github, the following is a short list of what is possible when you use git and github:</p>
		<ol>
			<li><p>You realize that you have deleted a seemingly unimportant piece of code a few days ago. You now need it, and are able to retrieve it.</p></li>
			<li><p>After adding a new feature, you realize you have somehow broken another part of your app. To help isolate what broke, You compare a particular piece of code’s before and after state </p></li>
			<li><p>You are about try something highly experimental, but you know that if you screw thing up that you can easily roll your code base back to its current stable state.</p></li>
			<li><p>You want to work with a friend editing the same file. You do so, and are able to seamlessly combine your edits. </p></li>
			<li><p>You work on a team spread across multiple cities. You all have access to the same codebase. Each team member’s contributions are elegantly integrated into everyone else’s local codebase.</p></li>
			<li><p>You want to discuss a particular piece of code with your client. you quickly pull it up in your browser where you isolate the changes that have occurred since you last spoke.</p></li>
		</ol>
		<p>
			Here a couple of good resources for learning more about git and github:<br/>
			<b>git</b> : http://git-scm.com/documentation<br/>
			<b>github:</b> : http://help.github.com/
		</p>
	</div>
	<h2>Pagoda Box and Github</h2>
	<div class="justify">
		<h4 id="-overview">Overview</h4>
		<p>Because github keeps a copy of your code online, we can clone that code directly from github and deploy it across our infrastructure. To do so, we need you to add us to your list of collaborators (only necessary if your repo is private). You will also need to copy your github clone url for pointing Pagoda Box to your repo during pagoda’s app creation process.</p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Note</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>Pagoda Box never modifies your codebase. Adding us as a collaborator means that we can clone your app to our servers–we will pull, but never push code back to github. </p>
		</div>
	</div>
</div>


{% endblock %}