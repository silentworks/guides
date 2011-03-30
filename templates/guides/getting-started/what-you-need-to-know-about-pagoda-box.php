{% extends "layouts/guide.php" %}

{% block content %}

<div class="right-col">
	<div class="vertical-guides-sprite table-contents">
		<span class="guides-sprite top-corner"></span>
		<h3>Table of Contents</h3>
		<h4>Understanding Pagoda Box</h4>
		<ul>
			<li><a href="#-quick-definition-of-pagoda-box">Quick Definition of Pagoda Box</a></li>
		</ul>
		<h4>The Nitty Gritty</h4>
		<ul>
			<li><a href="#-scaling">Scaling</a></li>
			<li><a href="#-security">Security</a></li>
			<li><a href="#-no-auto-installs">No Auto Installs</a></li>
			<li><a href="#-no-ssh">No SSH</a></li>
			<li><a href="#-no-shared-state">No shared state</a></li>
		</ul>
		<span class="guides-sprite bottom-corner"></span>
	</div>
</div>

<div class="left-col">
	<h1>What You Need To Know About Pagoda Box</h1>
	<p class="active">Pagoda Box is a platform. You can think of it as an elastic computing grid designed to deploy, manage and scale your app. It might be a little different that what you’re used to. After reading this document, your should a solid understanding of:</p>
	<ul class="checked">
		<li><span class="guides-sprite check"></span>What Pagoda Box is (and what it is not).</li>
		<li><span class="guides-sprite check"></span>What it means to scale your app</li>
		<li><span class="guides-sprite check"></span>How your App is secured</li>
		<li><span class="guides-sprite check"></span>No auto instalation of apps</li>
		<li><span class="guides-sprite check"></span>Why SSH is not needed</li>
		<li><span class="guides-sprite check"></span>How to handle your user’s state (cookies)</li>
	</ul>
	<div class="line-divider"></div>
	<h2>Understanding Pagoda Box</h2>
	<div class="justify">
		<h4 id="-quick-definition-of-pagoda-box">Quick Definition of Pagoda Box</h4>
		<p>Pagoda Box is not a LAMP stack. Furthermore, your app does not live on one server. Rather, you specify the number of instances (clones) of your application, and we distribute them across our computing grid. Doing so gives you redundancy, and also guarantees ample compute resources. When you want to push your code live, we have simplified the app deployment process by using git as a deployment vehicle. Furthermore, we have greatly tightened security by removing security risks presented by ssh & ftp.  So, what does this mean to you:</p>
	</div>
	<h2>The Nitty Gritty</h2>
	<div class="justify">
		<h4 id="-scaling">Scaling</h4>
		<p>When your app is deployed on Pagoda Box, you specify the total instances of your app (clones) to deploy to our platform. To understand this idea, imagine a bank. Think of your clone as a bank teller able to serve one customer at a time. If the bank has a sudden increase of customers, adding more tellers ensures that each customer can be served concurrently and prevents a long line from forming. </p>
		<p>Just as a teller only serves one customer at a time, a clone also handles just one request at a time. When you have more requests than available clones, we queue the requests until a clone becomes available. You can eliminate queue formation simply by deploying enough clones to comfortably handle your particular request volume. The number of clones you need will be largely determined by two metrics:
			<ol class="sub">
				<li><h5>Code Efficiency</h5><p>All code is not created equal. The more efficient your code is, the faster your app can generate a response to a request. The faster you can generate a response, the fewer clones you will need to achieve concurrency.</p></li>
				<li><h5>Traffic Volume</h5><p>The number of clones you need is greatly determined by the number of requests your app is receiving. </p></li>
			</ol>
		</p>
		<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Each clone receives the underlying resources it needs</span><span class="guides-sprite w-end-cap"></span></h3>
		<div class="block yellow">
			<p>It is important to note that we we will always ensure your clones have the necessary underlying resources (RAM, CPU, etc). We actively monitor our grid and quickly balance and distribute your clones to ensure resources are always available. Furthermore, we provide statistics about your queue to help you determine the optimal number of clones to handle your traffic volume. (These statistics are found in the application dashboard).</p>
		</div>
		<h4 id="-security">Security</h4>
		<p>PHP containers are prepared with Unix security policies. When we deploy your clone, we create a self-contained secure environment complete with your custom php binary and cloned source code. This environment allows nothing to be executed within, or written to the file system. Your php binary is interpreted and can only triggered via web requests. These strict measures eliminate the possibility of malicious code being written to or executed from within your clone’s environment.</p>
		<p>Each app clone is self-contained and cannot detect, interfere with or view any other clone. This security policy is managed at a layer that clones have no access to.</p>
		<p>Network services, such as mysql instances, have a special security policy. You may have noticed that your app uses .sock file to connect to your database and your memcache. Those are actually network layer tunnels that are routed directly to your services. It is not possible for any app to connect to a service that is not their own–even if they had the necessary credentials. All requests to network services are only allowed if they come from an app that has been granted access. Otherwise they are simply rejected. Furthermore, the tunnel is created at a layer that a prospectively malicious clone container has no access to. Finally, every request is passed through a firewall and intrusion detection layer that inspect and validates the validity of each request. This firewall is updated nightly with the latest intrusion detection rules. </p>
		<p>Keep in mind you must still secure your app at the application layer We cannot detect vulnerabilities in your app, and encourage your to follow best practices.</p>
		<h4 id="-no-auto-installs">No Auto Installs</h4>
		<p>Many popular frameworks come packaged with auto install scripts. You cannot use auto installers on Pagoda Box. You should make all file edits on your local development environment, then deploy the configuration to Pagoda Box. You may choose to use an auto installer on you local development machine, which is completely fine. As a general rule, you shouldn't expect to write configuration directly on the Pagoda Platform, write them locally then deploy.</p>
		<h4 id="-no-ssh">No SSH</h4>
		<p>Because we aren't a traditional hosting company, your app is not contained within a single server. Don't get caught up on this, you don't need it. We expose all the necessary configuration. If you need an additional configuration reach out to us and we'll figure it out.</p>
		<h4 id="-no-shared-state">No shared state</h4>
		<p>Because your app is likely running on multiple nodes across our grid. Don't assume two requests will be processed on the same node. This means you need to look out for two things:</p>
		    <ol class="sub">
				<li><h5>Sessions</h5><p>Put them somewhere else, like your database or memcache store.</p></li>
		    	<li><h5>Files</h5><p>If you need to write to a file, you must write to a writable directory. A writable directory is a networked directory that all nodes will share. As a general rule, use these sparingly. If you absolutely need to write to a file and there is no other solution, note that there may be instances of network latency.</p></li>
			</ol>
	</div>
</div>


{% endblock %}