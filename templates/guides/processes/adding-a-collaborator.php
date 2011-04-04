{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Collaboration</h4>
		<ul>
			<li><a href="#Inviting-A-Collaborator">Inviting A Collaborator</a></li>
			<li><a href="#Transferring-Application-Ownership">Transferring Application Ownership</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Adding A Collaborator & <br/>Transferring Ownership</h1>
	<p class="active">Adding a collaborator is a quick way to allow another person to deploy your code and manage your application. You should note that your collaborators have complete access to your app’s control panel. The only thing they cannot do, is delete your app, or remove you from the app. After reading this very short document, you will know how to:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>Add a collaborator to your application</li>
		<li><span class="guides-sprite check"></span>Transfer ownership to a collaborator</li>
	</ul>
	<div class="line-divider"></div>
	<h2 id="Inviting-A-Collaborator">Inviting a Collaborator</h2>
	<div class="justify">
		<p>To add a collaborator, go to your app's dashboard, and click the “Add a Collaborator” button. Enter your friend’s email address in the field, and click send. They will be sent an invitation email. After they create an account, they will have access to your application</p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
			<img src="/images/guides/add-a-collaborator.png" alt="" />
			<a href="#" targ="/images/guides/add-a-collaborator-full.png" class="guides-sprite zoom"></a>
			<span class="guides-sprite bottom"></span>
		</div>
		
	</div>
	<h2 id="Transferring-Application-Ownership">Transferring Ownership to a Collaborator</h2>
	<div class="justify">
		<p>If you would like to transfer ownership to another person, first add them as a collaborator. Second, go to the Admin section of your app, select them from the drop-down list of collaborators, and click save. </p>
		<div class="vertical-guides-sprite image">
			<span class="guides-sprite top"></span>
							<img src="/images/guides/transfer-ownership.png" alt="" />
			<span class="guides-sprite bottom"></span>
		</div>
		
	</div>
</div>


{% endblock %}