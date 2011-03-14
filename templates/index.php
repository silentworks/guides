<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<!-- MAKE THIS A CONTENT FOR OR SOMETHING -->
		<title>Pagoda Box | PHP App Hosting</title>
		
		<!-- TYPEKIT -->
		<script type="text/javascript" src="http://use.typekit.com/hai1jyh.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<!-- STYLESHEETS -->
		<link rel="stylesheet" type="text/css" href="stylesheets/styles.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/guides.css" />
		
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="javascripts/jquery.1.5.0.min"></script>
		<script type="text/javascript" src="javascripts/jquery.ui.effects.core.1.8.9.custom.min"></script>
		
		<!-- BEGIN SYNTAX HIGHLIGHTER -->
		<script type="text/javascript">
			//<![CDATA[
				SyntaxHighlighter.autoloader(
				  	'js jscript javascript  /javascripts/sh/shBrushJScript.js',
					'bash shell             /javascripts/sh/shBrushBash.js',
					'css                    /javascripts/sh/shBrushCss.js',
					'js jscript javascript  /javascripts/sh/shBrushJScript.js',
					'perl pl                /javascripts/sh/shBrushPerl.js',
					'php                    /javascripts/sh/shBrushPhp.js',
					'text plain             /javascripts/sh/shBrushPlain.js',
					'ruby rails ror rb      /javascripts/sh/shBrushRuby.js',
					'scala                  /javascripts/sh/shBrushScala.js',
					'sql                    /javascripts/sh/shBrushSql.js',
					'xml xhtml xslt html    /javascripts/sh/shBrushXml.js',
					'apache				    /javascripts/sh/shBrushApache.js'

				);
				SyntaxHighlighter.defaults['toolbar'] = false;
				SyntaxHighlighter.defaults['gutter'] = false;
				SyntaxHighlighter.all();
			//]]>
		</script>
		<!-- END SYNTAX HIGHLIGHTER -->
	
		<!-- ANALYTICS -->
		<!-- GOOGLE ANALYTICS -->
		<script type="text/javascript">
			// <![CDATA[
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-760419-14']);
				_gaq.push(['_setDomainName', '.pagodabox.com']);
				_gaq.push(['_trackPageview']);

				(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
			// ]]>
		</script>
		
	</head>
	
	<body>
		
		
		<div class="mask header"></div>
		<div class="background_for header"></div>
		<!--
		<div class="header site">
			<div class="wrapper logo"><a href="/" class="sprite logo beta"></a></div>
			<a href="/dashboard/apps" class="login"><% if session["logged_in_as"] %>Dashboard<% else %>Login<% end %></a>
			<a href="/register" class="sprite create account">Create A Free Account</a>	
			<ul class="nav">
				<li><a href="/features" class="<% if @active_section == :"features" %> active<% end %>"><span class="sprite left"></span>Features<span class="sprite right"></span></a></li>
				<li><a href="/architecture" class="<% if @active_section == :"architecture" %> active<% end %>"><span class="sprite left"></span>Architecture<span class="sprite right"></span></a></li>
				<li><a href="/pricing" class="<% if @active_section == :"pricing" %> active<% end %>"><span class="sprite left"></span>Pricing<span class="sprite right"></span></a></li>
				<li class="last"><a href="/contact" class="<% if @active_section == :"contact" %> active<% end %>"><span class="sprite left"></span>Contact<span class="sprite right"></span></a></li>
			</ul>
		</div>
		-->
		
		<div class="wrapper">
			<div class="top">
				<div class="guides-sprite name"></div>
				<ul class="drop-down">
					<li>
						<span class="guides-sprite left-corner"></span>				
						<a href="#link">Guides Index<span class="guides-sprite arrows"></span></a>
						<ul>
							<li><a href="#link">Guides Index</a></li>
							<li><a href="#link">Guides Index</a></li>
							<li><a href="#link">Guides Index</a></li>
							<li><a href="#link">Guides Index</a></li>
						</ul>						
						<span class="guides-sprite right-corner"></span>
					</li>					
				</ul>
			</div>
			<div class="main-col">
				<div class="left-col">
					<h1>Getting Started with Pagoda Box</h1>
					<p>This guide covers getting up and running with Pagoda Box. After reading it, you should be familiar with:</p>
					<ul class="checked">
						<li><span class="guides-sprite check"></span>The general functionality of the Pagoda Box service</li>
						<li><span class="guides-sprite check"></span>Put your app on Github and launch it on Pagoda</li>
						<li><span class="guides-sprite check"></span>The basic principles of deployment, rollback, and the scalability of your app</li>
					</ul>
					<div class="line-divider"></div>
					<h2>Introduction</h2>
					<div class="justify">
						<h4>What is PagodaBox?</h4>
						<p>PagodaBox is a PaaS (Platform as a Service) that simplifies putting your PHP on the web. When you need a hosting provider, but don't have the time or necessary geek credentials (and accompanying lack of social skills) to configure your own LAMP stack from scratch, PagodaBox provides a hosting solution that deploys your PHP application in seconds rather than hours after lengthy server configurations that many PHP developers don't have time or interest in figuring out.</p>
						<h4>How it Works</h4>
						<p>To make sure you get the best configuration, our engineers have tirelessly tested and analyzed web technologies to provide you with the most efficient, flexible, and reliable environment for your app to spread it's wings.</p> 
						[POSSIBLE IMAGE SHOWING LAYERS]

						<p>It starts with a lightning-fast custom router using Earlang (a language designed to do high-speed routing for cellular networks), a high-speed PHP application layer and an optimized database structure housed within the super scalable and speedy cloud environments of Softlayer (It's like Amazon, but better). All of this is topped off with built-in PCI complacence and an SSL layer to provide maximum security.</p>

						<p>You can stop worrying about your environment.</p>

						<p>You can start working on your PHP application.</p>
						<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">PHP</span><span class="horizontal-guides-sprite red">Sample Login Function</span><span class="guides-sprite end-cap"></span></h3>
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
						<p>LightSpeed operates on a caching methodology of caching entire pages and then "punching holes" to retrieve dynamic content. This is different than most caching methods which compute the entire page, retrieving pieces of content from the cache as it loads. The first user to visit a page will cause it to be cached. Every visitor that follows will be viewing the cached version of the page until the page is expired from the cache.</p>
						<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">Terminal</span><span class="horizontal-guides-sprite red">Retrieving the codebase from github</span><span class="guides-sprite end-cap"></span></h3>
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
						<p>To make the changes to your .htaccess file that are required for LightSpeed, simply do the following:</p>
						<h3 class="tag"><span class="guides-sprite cap"></span><span class="horizontal-guides-sprite title">File</span><span class="horizontal-guides-sprite red">Changes to .htaccess file</span><span class="guides-sprite end-cap"></span></h3>
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
						<h3 class="tag"><span class="guides-sprite marked-cap"></span><span class="horizontal-guides-sprite red">Changes to .htaccess file</span><span class="guides-sprite end-cap"></span></h3>
						<div class="code-block red">
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
						<h3 class="right-tag"><span class="guides-sprite end-cap"></span><span class="horizontal-guides-sprite blue">Multiple Domains</span><span class="guides-sprite blue-cap"></span></h3>
						<div class="code-block grey">
							<p class="question"><span class="guides-sprite q-tab"></span>Do I have to pay twice for two domains? Is there anyway that I can purchase your plugin at a discount... Maybe 25% off... Not even a first time happy customer 10% off... Bulk discount pricing?</p>
							<p class="answer"><span class="guides-sprite a-tab"></span>Lightspeed is sold per domain, and is registered to 1 domain. We offer bulk discounts for the following volumes: 6-10 (10% off), 11-20 (15% off), 21+ (20% off). Please contact a representative to arrange the promotional discount.</p>
						</div>
						<h3 class="right-tag"><span class="guides-sprite end-cap"></span><span class="horizontal-guides-sprite blue">Miscelaneous Pet Questions</span><span class="guides-sprite blue-cap"></span></h3>
						<div class="code-block grey">
							<p class="question"><span class="guides-sprite q-tab"></span>Do you guys sell Gerbils?</p>
							<p class="answer"><span class="guides-sprite a-tab"></span>No.</p>
						</div>
						<ul>
							<li>Seeing: gaining an understanding of the context and the micro (see above)</li>
							<li>Projecting: Designing, for-seeing action that will bring about desired change</li>
							<li>Initiating: knowing where to push (create an artifact or make some change in the world) which will cause the chain reaction for-seen.</li>
							<li>Seeing: gaining an understanding of the context and the micro (see above)</li>
						</ul>
						<ol>
							<li><span>Seeing: gaining an understanding of the context and the micro (see above)</span></li>
							<li><span>Projecting: Designing, for-seeing action that will bring about desired change</span></li>
							<li><span>Initiating: knowing where to push (create an artifact or make some change in the world) which will cause the chain reaction for-seen.</span></li>
							<li><span>Seeing: gaining an understanding of the context and the micro (see above)</span></li>
						</ol>
					</div>
				</div>
				<div class="right-col">
					<div class="vertical-guides-sprite table-contents">
						<span class="guides-sprite top-corner"></span>
						<h3 class="guides-sprite">Table of Contents</h3>
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
		</div>
		
		<!-- FOOTER -->
		<div id="footer" class="background_for footer">
			<div class="footer site">
				<span id="fairy" style="display:none;" class="special fairy"></span>			
				<a href="/" class="sprite logo"></a>
				<ul class="nav horizontal">
					<!-- <li class="link"><a href="/blog">Blog</a></li> -->
					<li class="link"><a href="/legal">Legal</a></li>
					<li class="link"><a href="/pricing">Pricing</a></li>
					<li class="link"><a href="/guides">Documentation</a></li>
					<li class="link last"><a href="/contact">Contact</a></li>
				</ul>
				<div class="section additional">
					<div class="group first">
						<h3 class="heading">Drop Us a Line</h3>
						<p><a href="mailto:hullo@pagodabox.com" class="email">hullo@pagodabox.com</a></p>
					</div>
					<div class="group">
						<h3 class="heading">Support</h3>
						<p><a href="mailto:support@pagodabox.com" class="email">support@pagodabox.com</a></p>
					</div>
					<div class="group credits">
						<p><span>Design</span> <span class="pipe-one">:</span> <a onclick="window.open('http://www.delorum.com'); return false;" href="http://www.delorum.com" class="link">Delorum</a></p>
						<p class="last">Illustration <span class="pipe-two">:</span> <a onclick="window.open('http://www.mikelaughead.com'); return false;" href="http://www.mikelaughead.com" class="link">Mike Laughead</a></p>
					</div>
					<div class="group credits">
						<a onclick="window.open('http://twitter.com/pagodabox'); return false;" class="twitter-link" href="http://twitter.com/pagodabox"><span class="twitter"></span>Follow Us</a>
					</div>
					<div class="group credits last">
						<a href="/register" class="sprite button account"></a>
					</div>
				</div>	
			</div>
		</div>

		<script type="text/javascript">
		//<![CDATA[
			$(document).ready(function() {
			  positionFooter();

			  $(window)
			    .scroll(positionFooter)
			    .resize(positionFooter);

			  function positionFooter() {
			    var docHeight = $(document.body).height() - $("#sticky-footer-push").height();
			    if(docHeight < $(window).height()){
			      var diff = $(window).height() - docHeight;
			      if (!$("#sticky-footer-push").length > 0) {
			        $("#footer").before('<div id="sticky-footer-push"></div>');
			      }
			      $("#sticky-footer-push").height(diff);
			    }
			  }
			});
		//]]>
		</script>
	</body>
</html>
