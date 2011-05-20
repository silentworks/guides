{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Git + Github</h4>
		<ul>
			<li><a href="#-overview">Overview</a></li>
			<li><a href="#-practical-examples">Practical Examples</a></li>
		</ul>
		<h4>Pagoda Box and Github</h4>
		<ul>
			<li><a href="#-overview">Overview</a></li>
			<li><a href="#adding-pagoda-as-a-github-collaborator">Adding Pagoda Box As A Collaborator</a></li>
			<li><a href="#github-clone-url">Your Github Clone URL</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Git and Github</h1>
	<p class="active">Git is one of those amazing tools that changes the way you work forever. Github then takes git to a new level altogether with simple collaboration points, convenient access, and beautiful visualization tools. After reading this guide, you will understand:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>What Git is</li>
		<li><span class="guides-sprite check"></span>What Github is</li>
		<li><span class="guides-sprite check"></span>How Pagoda Box works with Github</li>
	</ul>
	<div class="line-divider"></div>
	<h2>Git + Github</h2>
	<div class="justify">
		<h4 id="-overview">Overview</h4>
		<p>This isn’t meant to be an exhaustive explanation of Git / github or a tutorial for using these tools.  Rather we hope to give you a quick overview of what they are, and why they are so very useful. We will provide links to more in depth articles, and tutorials for getting started. </p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Short and Sweet</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p><b>Git</b> is a distributed version control system with an emphasis on collaborative software development.</p>
			<p><b>GitHub</b> is bar none the best tool for collaborating as a developer.</p>
			<p>On top of that, the feature-set available in the Admin Panel and the Pagoda Terminal Client are directly tied to Github's API.</p>
		</div>
		<h4 id="-practical-examples">Show not Tell</h4>
		<p>What you get with git &amp; github:</p>
		<ol>
			<li><p><b>Code Backups : <br/></b>You realize that you  deleted a seemingly unimportant piece of code a few days ago. You now need it, and are able to easily retrieve it.</p></li>
			<li><p><b>State Comparison : <br/></b>After adding a new feature, you realize you have somehow broken another part of your app. To help isolate what broke, You compare a particular piece of code’s before and after state </p></li>
			<li><p><b>Freedom To Experiment : <br/></b>You are about try something highly experimental, but you know that if you screw things up, you can easily roll your code base back to its current stable state.</p></li>
			<li><p><b>Conflict Control : <br/></b>You want to work with a friend editing the same file. You do so, and are able to seamlessly combine your edits. </p></li>
			<li><p><b>Collaboration : <br/></b>You work on a team spread across multiple cities. You all have access to the same codebase. Each team member’s contributions are elegantly integrated into everyone else’s local codebase.</p></li>
			<li><p><b>Visualization Tools : <br/></b>You want to discuss a particular piece of code with your client. you quickly pull it up in your browser where you isolate the changes that have occurred since you last spoke.</p></li>
		</ol>
		<p>
			Here's a couple of good resources for learning more about git and github:<br/>
			<b>git</b> : <a href="http://git-scm.com/documentation">http://git-scm.com/documentation</a><br/>
			<b>github:</b> : <a href="http://help.github.com">http://help.github.com</a>
		</p>
	</div>
	<h2>Pagoda Box and Github</h2>
	<div class="justify">
		<h4 id="-overview">Overview</h4>
		<p>Because github keeps a copy of your code online, we can clone that code directly from github and deploy it across our infrastructure. If your github repo is private, you will need to add <a href="https://github.com/pagodabox">pagodabox</a> to your list of collaborators.</p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
			<img src="/images/guides/adding-github-collaborator-sml.png" alt="" />
			<a href="#" targ="/images/guides/adding-github-collaborator.png" class="guides-sprite zoom"></a>
			<span class="guides-sprite bottom"></span>
		</div>
		<p id="adding-pagoda-as-a-github-collaborator">You will also need to copy your github clone url for pointing Pagoda Box to your repo during pagoda’s app creation process. (You can use the SSH, HTTP, or Git Read-Only URL)</p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
			<img src="/images/guides/git-clone-urls-small.png" alt="" />
			<a href="#" targ="/images/guides/git-clone-urls.png" class="guides-sprite zoom"></a>
			<span class="guides-sprite bottom"></span>
		</div>
		
		<h3 class="tag"><span class="guides-sprite w-cap" id="github-clone-url"></span><span class="horizontal-guides-sprite white">Note</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>Pagoda Box never modifies your codebase. Adding us as a collaborator means that we can clone your app to our servers–we will pull, but never push code back to github. </p>
		</div>
	</div>
</div>


{% endblock %}