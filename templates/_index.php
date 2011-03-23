{% extends "_base.php" %}

{% block body %}
<div class="top">
	<div class="guides-sprite name"></div>
	<span class="guides-sprite drop-down">
		Guides Index
		<div class="link-box">
			<span class="guides-sprite top"></span>
			<a href="#link" class="guides-sprite close"></a>
			<h3>Guides Index</h3>
			<ul class="left">
				<li>Start Here</li>
				<li><a href="#link">Getting Started with Pagoda Box</a></li>
			</ul>
			<ul class="right">
				<li>Environment Management</li>
				<li><a href="#link">Page Title</a></li>
				<li><a href="#link">Page Titles shouldn't extend to two lines</a></li>
				<li><a href="#link">Can we build the dropdown like that?</a></li>
				<li><a href="#link">This could be a medium one</a></li>
			</ul>
			<ul class="left">
				<li>Environment Management</li>
				<li><a href="#link">Page Title</a></li>
				<li><a href="#link">Page Titles shouldn't extend to two lines</a></li>
				<li><a href="#link">Can we build the dropdown like that?</a></li>
				<li><a href="#link">This could be a medium one</a></li>
			</ul>
			<ul class="right">
				<li>Environment Management</li>
				<li><a href="#link">Page Title</a></li>
				<li><a href="#link">Page Titles shouldn't extend to two lines</a></li>
				<li><a href="#link">Can we build the dropdown like that?</a></li>
				<li><a href="#link">This could be a medium one</a></li>
			</ul>
			<ul class="left">
				<li>Start Here</li>
				<li><a href="#link">Getting Started with Pagoda Box</a></li>
			</ul>
			<ul class="right">
				<li>Environment Management</li>
				<li><a href="#link">Page Title</a></li>
				<li><a href="#link">Page Titles shouldn't extend to two lines</a></li>
				<li><a href="#link">Can we build the dropdown like that?</a></li>
				<li><a href="#link">This could be a medium one</a></li>
			</ul>
			<ul class="left">
				<li>Environment Management</li>
				<li><a href="#link">Page Title</a></li>
				<li><a href="#link">Page Titles shouldn't extend to two lines</a></li>
				<li><a href="#link">Can we build the dropdown like that?</a></li>
				<li><a href="#link">This could be a medium one</a></li>
			</ul>
			<ul class="right">
				<li>Environment Management</li>
				<li><a href="#link">Page Title</a></li>
				<li><a href="#link">Page Titles shouldn't extend to two lines</a></li>
				<li><a href="#link">Can we build the dropdown like that?</a></li>
				<li><a href="#link">This could be a medium one</a></li>
			</ul>
			<span class="guides-sprite bottom"></span>
		</div>
	</span>
</div>
<div class="main-col">
	<div class="left-col">
		<h1>Getting Started with Pagoda Box</h1>
		<p class="active">This guide covers getting up and running with Pagoda Box. After reading it, you should be familiar with:</p>
		<ul class="checked">
			<li><span class="guides-sprite check"></span>The general functionality of the Pagoda Box service</li>
			<li><span class="guides-sprite check"></span>Put your app on Github and launch it on Pagoda</li>
			<li><span class="guides-sprite check"></span>The basic principles of deployment, rollback, and the scalability of your app</li>
		</ul>
		<div class="line-divider"></div>
		<h2>Introduction</h2>
		<div class="justify">
			<h4>What is PagodaBox?</h4>
			<p>PagodaBox is a PaaS (Platform as a Service) that simplifies putting your PHP on the web. When you need a hosting provider, but don't have the time or necessary geek cgreenentials (and accompanying lack of social skills) to configure your own LAMP stack from scratch, PagodaBox provides a hosting solution that deploys your PHP application in seconds rather than hours after lengthy server configurations that many PHP developers don't have time or interest in figuring out.</p>
			<h4>How it Works</h4>
			<p>To make sure you get the best configuration, our engineers have tirelessly tested and analyzed web technologies to provide you with the most efficient, flexible, and reliable environment for your app to spread it's wings.</p> 
			<div class="vertical-guides-sprite image">
				<span class="guides-sprite top"></span>
				<div class="overflow">
					<img src="images/screenshots/test.png" alt="" />
				</div>
				<!-- IF ZOOM ADD THIS and javascript class -->
				<a href="#link" class="guides-sprite zoom"></a>
				<!-- END ZOOM -->
				<span class="guides-sprite bottom"></span>
			</div>
			
			<script>
				$(document).ready(function(){
					$(".zoom").colorbox({width:"50%", inline:true, href:".overflow"});
				});
				
				$(".drop-down").click(function () {
			   		$(".link-box").show();
			   	});

			   	$('.link-box').mouseleave(function () {
			   		$(".link-box").hide();
			   	});
			</script>
						
			<p>It starts with a lightning-fast custom router using Earlang (a language designed to do high-speed routing for cellular networks), a high-speed PHP application layer and an optimized database structure housed within the super scalable and speedy cloud environments of Softlayer (It's like Amazon, but better). All of this is topped off with built-in PCI complacence and an SSL layer to provide maximum security.</p>
			<p>You can stop worrying about your environment.</p>
			<p>You can start working on your PHP application.</p>
			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite green">Sample Login Function</span><span class="guides-sprite end-cap"></span></h3>
			<div class="code-block grey">
				public function _onPostLoginResponse ( e:Event ):void {
				    var loader:URLLoader = URLLoader(e.target);

				    if( loader.data == "Success" )
				        sendNotification( AppFacade.LOGIN_SUCCESS );
				    else {
				        echo( loader.data );
				        sendNotification( AppFacade.LOGIN_FAILED );
				    }
				}
				<div class="extra">
					/app/view/components/config.php
				</div>
			</div>
			<h4>What is Lightspeeed?</h4>
			<p>LightSpeed operates on a caching methodology of caching entire pages and then "punching holes" to retrieve dynamic content. This is different than most caching methods which compute the entire page, retrieving pieces of content from the cache as it loads. The first user to visit a page will cause it to be cached. Every visitor that follows will be viewing the cached version of the page until the page is expigreen from the cache.</p>
			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite green">Retrieving the codebase from github</span><span class="guides-sprite end-cap"></span></h3>
			<div class="code-block black">
				public function _onPostLoginResponse ( e:Event ):void {
				    var loader:URLLoader = URLLoader(e.target);

				    if( loader.data == "Success" )
				        sendNotification( AppFacade.LOGIN_SUCCESS );
				    else {
				        echo( loader.data );
				        sendNotification( AppFacade.LOGIN_FAILED );
				    }
				}
			</div>
			<p>To make the changes to your .htaccess file that are requigreen for LightSpeed, simply do the following:</p>
			<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">File</span><span class="horizontal-guides-sprite green">Changes to .htaccess file</span><span class="guides-sprite end-cap"></span></h3>
			<div class="code-block grey">
				public function _onPostLoginResponse ( e:Event ):void {
				    var loader:URLLoader = URLLoader(e.target);
				<div class="guides-sprite dot-divide"></div>
				    if( loader.data == "Success" )
				        sendNotification( AppFacade.LOGIN_SUCCESS );
				    else {
				        echo( loader.data );
				<div class="guides-sprite dot-divide"></div>
				        sendNotification( AppFacade.LOGIN_FAILED );
				    }
				}
				<div class="extra">
					/app/.htaccess
				</div>
			</div>
			<h3 class="tag"><span class="guides-sprite w-cap"></span><span class="horizontal-guides-sprite white">Retrieving the codebase from github</span><span class="guides-sprite w-end-cap"></span></h3>
			<div class="code-block yellow">
				public function _onPostLoginResponse ( e:Event ):void {
				    var loader:URLLoader = URLLoader(e.target);

				    if( loader.data == "Success" )
				        sendNotification( AppFacade.LOGIN_SUCCESS );
				    else {
				        echo( loader.data );
				        sendNotification( AppFacade.LOGIN_FAILED );
				    }
				}
			</div>
			<h3 class="right-tag"><span class="guides-sprite blue-end-cap"></span><span class="horizontal-guides-sprite blue">Multiple Domains</span><span class="guides-sprite blue-cap"></span></h3>
			<div class="code-block grey">
				<p class="question"><span class="guides-sprite q-tab"></span>Do I have to pay twice for two domains? Is there anyway that I can purchase your plugin at a discount... Maybe 25% off... Not even a first time happy customer 10% off... Bulk discount pricing?</p>
				<p class="answer"><span class="guides-sprite a-tab"></span>Lightspeed is sold per domain, and is registegreen to 1 domain. We offer bulk discounts for the following volumes: 6-10 (10% off), 11-20 (15% off), 21+ (20% off). Please contact a representative to arrange the promotional discount.</p>
			</div>
			<h3 class="right-tag"><span class="horizontal-guides-sprite solid-green">Miscelaneous Pet Questions</span><span class="guides-sprite green-cap"></span></h3>
			<div class="code-block grey">
				<p class="question"><span class="guides-sprite q-tab"></span>Do you guys sell Gerbils?</p>
				<p class="answer"><span class="guides-sprite a-tab"></span>No.</p>
			</div>
			<h3 class="right-tag"><span class="horizontal-guides-sprite solid-green">Steps</span><span class="guides-sprite green-cap"></span></h3>
			<div class="code-block grey">
				<ul>
					<li><span class="guides-sprite step">1</span><a href="#link">An Ordered Process in Pagoda Box Docs with a second line of text</a></li>
					<li><span class="guides-sprite step">2</span><a href="#link">An Ordered Process in Pagoda Box Docs with a second line of text</a></li>
					<li><span class="guides-sprite step">3</span><a href="#link">Another step</a></li>
					<li><span class="guides-sprite step">4</span><a href="#link">Another step, we’re getting close to the end now.</a></li>
					<li><span class="guides-sprite step">5</span><a href="#link">A fifth and final step</a></li>
				</ul>
			</div>
			<div class="code-block grey">
				<p class="primary-step"><span class="guides-sprite step">Step 1</span>An Ordered Process</p>
			</div>
			<ul>
				<li>Seeing: gaining an understanding of the context and the micro (see above)</li>
				<li>Projecting: Designing, for-seeing action that will bring about desigreen change</li>
				<li>Initiating: knowing where to push (create an artifact or make some change in the world) which will cause the chain reaction for-seen.</li>
				<li>Seeing: gaining an understanding of the context and the micro (see above)</li>
			</ul>
			<ol>
				<li><span>Seeing: gaining an understanding of the context and the micro (see above)</span></li>
				<li><span>Projecting: Designing, for-seeing action that will bring about desigreen change</span></li>
				<li><span>Initiating: knowing where to push (create an artifact or make some change in the world) which will cause the chain reaction for-seen.</span></li>
				<li><span>Seeing: gaining an understanding of the context and the micro (see above)</span></li>
			</ol>
		</div>
	</div>
	<div class="right-col">
		<div class="vertical-guides-sprite table-contents">
			<span class="guides-sprite top-corner"></span>
			<h3>Table of Contents</h3>
			<h4>Introduction</h4>
			<ul>
				<li><a href="#link">What is PagodaBox?</a></li>
				<li><a href="#link">How it Works</a></li>
				<li><a href="#link">Pre-Requisite Modules</a></li>
				<li><span class="guides-sprite tag"></span><a href="#link">Sample Login Function</a></li>
				<li><a href="#link">What is Lightspeed</a></li>
				<li><span class="guides-sprite tag"></span><a href="#link">Retrieving the codebase from github</a></li>
			</ul>
			<h4>Installation</h4>
			<ul>
				<li><span class="guides-sprite tag"></span><a href="#link">Sample Login Function</a></li>
				<li><span class="guides-sprite tag"></span><a href="#link">Retrieving the codebase from github</a></li>
				<li><span class="guides-sprite tag"></span><a href="#link">Sample Login Function</a></li>
			</ul>
			<span class="guides-sprite bottom-corner"></span>
		</div>
	</div>
</div>
{% endblock %}