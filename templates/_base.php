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
		<link rel="stylesheet" type="text/css" href="stylesheets/colorbox.css" />
		
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="javascripts/jquery.1.5.0.min.js"></script>
		<script type="text/javascript" src="javascripts/jquery.ui.effects.core.1.8.9.custom.min.js"></script>
		<script type="text/javascript" src="javascripts/jquery.colorbox.min.js"></script>
		
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
		<!-- GOOGLE ANALYTICS -->
	</head>
	
	<body>
		<!-- HEADER -->
		<div class="mask header"></div>
		<div class="background_for header"></div>
		<div class="header site">
			<div class="wrapper logo"><a href="/" class="sprite logo beta"></a></div>
			<a href="/dashboard/apps" class="login">Login</a>
			<a href="/register" class="sprite create account">Create A Free Account</a>	
			<ul class="nav">
				<li><a href="/features" class=""><span class="sprite left"></span>Features<span class="sprite right"></span></a></li>
				<li><a href="/architecture" class=""><span class="sprite left"></span>Architecture<span class="sprite right"></span></a></li>
				<li><a href="/pricing" class=""><span class="sprite left"></span>Pricing<span class="sprite right"></span></a></li>
				<li class="last"><a href="/contact" class=""><span class="sprite left"></span>Contact<span class="sprite right"></span></a></li>
			</ul>
		</div>
		
		<!-- BODY -->
		<div class="wrapper">
			{% block body %}{% endblock %}
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
