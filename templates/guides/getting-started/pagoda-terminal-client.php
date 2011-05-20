{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4><a href='#installing-terminal-client'>Installing the Terminal Client</a></h4>
		<ul>
			<li><a href="#mac">Mac</a></li>
			<li><a href="#windows">Windows</a></li>
			<li><a href="#linux">Linux</a></li>
			<li><span class="guides-sprite tag"></span><a href="#install-pagoda-gem">Installing the Pagoda Gem</a></li>
		</ul>
		<h4><a href='#using-terminal-client'>Using the Terminal Client</a></h4>
		<ul>
			<li><a href="#commands">Commands</a></li>
			<li><a href="#parameters">Parameters</a></li>
			<li><a href="#launching-an-app">Launching an App</a></li>
			<li><span class="guides-sprite tag"></span><a href="#launch-an-app">Launch an App</a></li>
			<li><a href="#pairing-repo-to-app">Pairing a Repo to an App</a></li>
			<li><span class="guides-sprite tag"></span><a href="#pair-repo-to-app">Pair a Repo to an App</a></li>
			<li><span class="guides-sprite tag"></span><a href="#unpair-app">Unpair an App</a></li>
			<li><a href="#deploying-commits">Deploying Commits</a></li>
			<li><span class="guides-sprite tag"></span><a href="#deploy-while-inside-your-repo">Deploy While Inside Your Repo</a></li>
			<li><span class="guides-sprite tag"></span><a href="#deploy-while-outside-your-repo">Deploy While Outside Your Repo</a></li>
			<li><span class="guides-sprite tag"></span><a href="#deploy-most-recent-commit-in-github-repo">Deploy Most Recent Commit in Github Repo</a></li>
			<li><span class="guides-sprite tag"></span><a href="#specify-branch-to-deploy">Specify a Branch to Deploy</a></li>
			<li><span class="guides-sprite tag"></span><a href="#specify-commit-to-deploy">Specify a Commit to Deploy</a></li>
			<li><a href="#rolling-back">Rolling Back</a></li>
			<li><span class="guides-sprite tag"></span><a href="#rollback-while-inside-repo">Rollback While Inside Repo</a></li>
			<li><span class="guides-sprite tag"></span><a href="#rollback-while-outside-repo">Rollback While Outside Repo</a></li>
			<li><a href="#creating-a-database-tunnel">Creating a Database Tunnel</a></li>
			<li><a href="#destroying-an-app">Destroying an App</a></li>
			<li><span class="guides-sprite tag"></span><a href="#destroy-app-while-inside-repo">Destroy an App While Inside Repo</a></li>
			<li><span class="guides-sprite tag"></span><a href="#destroy-app-while-outside-repo">Destroy an App While Outside Repo</a></li>
		</ul>
		<h4><a href='#pagoda-in-your-workflow'>Pagoda in Your Workflow</a></h4>
		<ul>
			<li><span class="guides-sprite tag"></span><a href="#pagoda-terminal-workflow">Example: Pagoda Terminal Workflow</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>The Pagoda Terminal Client</h1>
	<p class="active">The Terminal Ranger’s creed: <em>Why use mice when keyboards suffice?</em> Sometimes even an elegant interface isn’t your cup of tea. Well lucky for you, we have written a rock solid command line application that lets you create, deploy, rollback, securely connect to your live database, etc... After reading this guide, you should be able to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Install the Pagoda Terminal Client</li>
		<li><span class="guides-sprite check"></span>Manage your Pagoda Box apps from your command line</li>
		<li><span class="guides-sprite check"></span>Enjoy the awesomeness of a streamlined app management workflow</li>
	</ul>
	<div class="line-divider"></div>
	<h2 id='installing-terminal-client'>Installing the Terminal Client</h2>
	<div class="justify">
		<p>The Pagoda Box Terminal Client is a rubygem so installation is pretty simple. First off, you need to have Ruby installed. Installation is different for each operating system.</p>
		<h4 id="mac">Mac</h4>
		<p>Ruby and RubyGems come pre-installed on Mac OSX. As long as you are running v10.5 or later, you should be good to go.</p>
		<h4 id="windows">Windows</h4>
		<p>There are a couple of different ways to install Ruby in Windows. We have found the easiest way is to use this <a target='_blank' href='http://rubyinstaller.org/'>auto-installer</a>. If this doesn’t work for you, a google search will give you a pretty good list of installation walk-throughs.</p>
		<h4 id="linux">Linux</h4>
		<p>Just use your preferred package manager to download the Ruby package.</p>
		<p>Once Ruby is installed, simply run the following command to install the Pagoda RubyGem:</p>
		<h3 id="install-pagoda-gem" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Install the Pagoda Gem</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ gem install pagoda
					]]>
			</script>
		</div>
	<h2 id='using-terminal-client'>Using the Terminal Client</h2>
	<div class="justify">
		<p><em>The majority of the information covered in the following section can quickly be referenced using the “pagoda help” command.</em></p>
		<p>The first time you use the Pagoda Terminal Client, you will be asked for a username and password. Use your Pagoda Box username and password. You will only have to do this once. Once you are logged in, you are ready to go.</p>
		<p>Just as with other command line clients, all commands specific to the Pagoda terminal client must be prefaced by “pagoda”.</p>
		<h4 id="commands">Commands</h4>
		<table>
			<tr>
				<td>list</td>
				<td>Lists your apps</td>
			</tr>
			<tr>
				<td>deploy</td>
				<td>Deploys your current state to Pagoda</td>
			</tr>
			<tr>
				<td>launch &lt;name&gt;</td>
				<td>Creates (registers) a new app</td>
			</tr>
			<tr>
				<td>info</td>
				<td>Displays info about an app</td>
			</tr>
			<tr>
				<td>destroy</td>
				<td>Removes app</td>
			</tr>
			<tr>
				<td>rollback</td>
				<td>Rolls back app</td>
			</tr>
			<tr>
				<td>tunnel</td>
				<td>Creates a tunnel to your database on Pagoda</td>
			</tr>
		</table>
		<h4 id="parameters">Parameters</h4>
		<p><strong>Global:</strong></p>
			<p>-a &lt;name&gt; | --app=&lt;name&gt;<br/>
				<em>Set the application name (Only necessary when not in repo dir).</em></p>
			<p>-u &lt;username&gt; | --username=&lt;username&gt;<br/>
    			<em>When set, will not attempt to save your username. Also over-rides any saved username.</em></p>
			<p>-p &lt;password&gt; | --password=&lt;password&gt;<br/>
				<em>When set, will not attempt to save your password. Also over-rides any saved password.</em></p>
			<p>-f<br/>
				<em>Executes all commands without confirmation request.</em></p>
		<p><strong>Deploying - pagoda deploy :</strong></p>
			<p>-b &lt;branch&gt; | --branch=&lt;branch&gt;<br/>
				<em>Specify the branch name. By default uses the branch your local repo is on.</em></p>
			<p>-c &lt;commit&gt; | --commit=&lt;commit&gt;<br/>
				<em>Specify the commit id. By default uses the commit HEAD is set to.</em></p>
			<p>--latest<br/>
				<em>Will attempt to deploy to the latest commit on github rather than your local repo's current commit.</em></p>
		<p><strong>Tunneling - pagoda tunnel :</strong></p>
			<p>-t &lt;type&gt; | --type=&lt;type&gt;<br/>
	        	<em>Specify the tunnel type. (ex:mysql)</em></p>
			<p>-n &lt;instance&gt; | --name=&lt;instance&gt;<br/>
				<em>Specify the instance name you want to operate on used for database instance.</em></p>
		<h4 id="launching-an-app">Launching an App</h4>
		<p>To launch an app, you must be inside the root directory of your repo. Use the following command:</p>
		<h3 id="launch-an-app" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Launch an App</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda launch <app name>
				]]>
			</script>
		</div>
		<h4 id="pairing-repo-to-app">Pairing a Repo to an App</h4>
		<p>If you launch an app using the Pagoda Terminal Client, you won’t need to pair your repo with the launched app. But if you launched an app through the Admin Panel, to manage that app through the terminal client, you must first pair your repo with the launched app.</p>
		<p>To pair a repo with a lauched app, you must be inside of your repo. Once inside of your repo, use the following command:</p>
		<h3 id="pair-repo-to-app" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Pair a Repo to an App</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda pair <app name>
				]]>
			</script>
		</div>
		<p>A repo can only be paired to one launched app at a time, so if you have two apps using the same repo, you’ll need to unpair with one app and then pair with the other. To unpair a repo with a launched app, use the following command inside of your paired repo:</p>
		<h3 id="unpair-app" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Unpair an App</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda unpair
				]]>
			</script>
		</div>
		<h4 id="deploying-commits">Deploying Commits</h4>
		<p>To deploy the current state of your local instance while inside your repo:</p>
		<h3 id="deploy-while-inside-your-repo" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Deploy While Inside Your Repo</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda deploy
				]]>
			</script>
		</div>
		<p>If you’re outside of your repo, just specify which repo you would like to deploy:</p>
		<h3 id="deploy-while-outside-your-repo" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Deploy While Outside Your Repo</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda deploy -a <app name>
					--OR--
					$ pagoda deploy --app=<app name>
				]]>
			</script>
		</div>
		<p>You can also deploy the most recent commit in your github repo to Pagoda Box while inside your repo:</p>
		<h3 id="deploy-most-recent-commit-in-github-repo" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Deploy Most Recent Commit in Github Repo</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda deploy latest
					]]>
			</script>
		</div>
		<p>You are also able to specify which branch to deploy:</p>
		<h3 id="specify-branch-to-deploy" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Specify a Branch to Deploy</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda deploy -b <branch>
					--OR--
					$ pagoda deploy --branch=<branch>
					]]>
			</script>
		</div>
		<p>Or even specify a commit:</p>
		<h3 id="specify-commit-to-deploy" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Specify a Commit to Deploy</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda deploy -c <commit id>
					--OR--
					$ pagoda deploy --commit=<commit id>
					]]>
			</script>
		</div>
		<p><em>By default, the commit HEAD is set to is the commit that is used.</em></p>
		<h4 id="rolling-back">Rolling Back</h4>
		<p>The ability to quickly rollback code is a nice tool for any developer to have in their tool-belt. Using the rollback command will roll your app back to the previously deployed commit. If you’re inside your repo, use the following command:</p>
		<h3 id="rollback-while-inside-repo" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Rollback While Inside Repo</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda rollback
					]]>
			</script>
		</div>
		<p>If you’re outside of your repo, you simply need to specify which app you would like to roll back:</p>
		<h3 id="rollback-while-outside-repo" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Rollback While Outside Repo</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
				$ pagoda rollback -a <app name>
				--OR--
				$ pagoda rollback --app=<app name>
				]]>
			</script>
		</div>
		<h4 id="creating-a-database-tunnel">Creating a Database Tunnel</h4>
		<p>This functionality is so awesome we decided to give it its own guide. Check out the <a href='/database/creating-database-tunnel'>Creating a Secure Database Tunnel from Your Desktop Guide</a>.</p>
		<h4 id="destroying-an-app">Destroying an App</h4>
		<p>Destroying an app is really simple. If you’re inside your repo, just use the following command:</p>
		<h3 id="destroy-app-while-inside-repo" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Destroy an App While Inside Repo</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda destroy
					]]>
			</script>
		</div>
		<p>You will be asked to confirm whether or not you really want to destroy your app. If you want to skip the confirmation, just append the “-f” parameter to the previous command. This will force the command without any confirmation.</p>
		<p>If you are not inside your app’s repo, you can still destroy it but you need to specify the app you would like to destroy:<p/>
		<h3 id="destroy-app-while-outside-repo" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Destroy an App While Outside Repo</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda destroy -a <app name>
					--OR--<br/>
					$ pagoda destroy --app=<app name>
					]]>
			</script>
		</div>
	<h2 id='pagoda-in-your-workflow'>Pagoda in Your Workflow</h2>
	<div class="justify">
		<p>They goal of the Pagoda Terminal Client is to make your code deployment workflow as frictionless as possible. You can still deploy new apps and commits, rollback, or scale your app using the Pagoda Box Admin Panel, but that can break up your workflow. Using the terminal client, you can do all these things in the same place you’re managing your git repo, so you’re workflow is as uninterrupted as possible.</p>
		<p>Here’s an example:</p>
		<h3 id="pagoda-terminal-workflow" class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Example: Pagoda Terminal Workflow</span><span class="guides-sprite end-cap"></span></h3>
		<div class="block black">
			<script class='brush: bash;' type='syntaxhighlighter'>
				<![CDATA[
					$ pagoda launch workflowdemo

					  +> Registering workflowdemo
					  +> Launching........  
					  +> workflowdemo launched

					  +> deploying to match current branch and commit.....  
					  +> deployed

					  -----------------------------------------------

					  LIVE URL    : http://workflowdemo.pagodabox.com
					  ADMIN PANEL : http://dashboard.pagodabox.com

					  -----------------------------------------------

					$ git add .
					$ git commit -m "minor CSS change"
					[master 1cc17d7] minor CSS change
					 1 files changed, 1 insertions(+), 1 deletions(-)
					$ git pull
					Already up-to-date.
					$ git push
					Counting objects: 7, done.
					Delta compression using up to 2 threads.
					Compressing objects: 100% (3/3), done.
					Writing objects: 100% (4/4), 344 bytes, done.
					Total 4 (delta 2), reused 0 (delta 0)
					To git@github.com:Pagoda/speak.git
					   7df7e22..1cc17d7  master -> master
					$ pagoda deploy

					  +> deploying to match current branch and commit........  
					  +> deployed

					$ pagoda rollback

					  +> undo......  
					  +> done

					$ pagoda deploy latest

					  +> deploying to match current branch and commit....  
					  +> deployed

					$ pagoda destroy

					  Are you totally completely sure you want to delete
					  workflowdemo forever and ever? 
					  THIS CANNOT BE UNDONE! (y/n) y
					  +> Destroying workflowdemo
					  +> workflowdemo has been successfully destroyed.
					  RIP workflowdemo.

					$ 
					
					]]>
			</script>
		</div>
		<p>In this example, a new app was launched, code was changed, added, committed and deployed to a github repo, deployed to the live instance on Pagoda Box, rolled back, redeployed and destroyed all from a command line, in under 2 minutes.</p>
		</div>
	</div>
	</div>
</div>


{% endblock %}