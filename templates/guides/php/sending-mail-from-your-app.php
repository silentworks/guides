{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Sending Mail From Your App</h4>
		<ul>
			<li><a href="#-overview">Overview</a></li>
			<li><a href="#-the-technical-mechanics">The Technical Mechanics</a></li>
			<li><a href="#-translation-please">In English Please</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>Sending Mail From Your App</h1>
	<p class="active">Pagoda Box protects your IPs from being flagged as spam by using the SMTP mail protocol to send Mail using your third party mail provider's SMTP credentials. After reading this, you should understand:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>How Pagoda Box sends email from your app</li>
		<li><span class="guides-sprite check"></span>How to send mail from your app</li>
	</ul>
	<div class="line-divider"></div>
	<h2></h2>
	<div class="justify">
		<h4 id="-overview">Overview</h4>
		<p>Sending mail from your app can be challenging. You deal with ever evolving spam regulations, security requirements, and complex authoritative mail server configuration. Furthermore, when you layer in the inherent risk that an unscrupulous neighbor might be sending spam from an IP you both share, you run the risk of your legitimate mail being marked as spam. You don’t want to deal with that and neither do we. We’ve designed a mail sending system that circumvents traditional application-based mail problems and makes sending mail from your app simple.</p>
		<h4 id="-the-technical-mechanics">The Technical Mechanics</h4>
		<p>We’ve built each php app box to have a custom Pagoda mail transport agent. Instead of trying to use the local node to send email, we route all messages sent from your app using the mail() function, to a centralized mail delivery system. From there we connect to an authoritative SMTP service (like gmail) that you provide. We then use your SMTP credentials to send the email message.</p>
		<h4 id="-translation-please">In English Please</h4>
		<p>In short, you just have to find a company that specializes in smtp email delivery. Gmail is one of them. Once you have a valid account, simply enter the connection details into the admin panel in the ‘smtp’ section. Now, every time your app tries to send mail, it will be sent through your smtp service of choice. It’s simple, it’s fast, and best of all you won’t get flagged as a spammer. Unless you are a spammer, in which case I’d try to convince you to shove off and find someone else to bother!</p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Caveat</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>If you plan on sending lots of email, you will want to check with your email provider to make sure you aren’t exceeding their maximum allotted email sends per day.</p>
		</div>
	</div>
</div>


{% endblock %}