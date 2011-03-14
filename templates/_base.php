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
		{% block analytics %}{% endblock %}
	</head>
	
	<body>
		
		<!-- HEADER -->
		{% block header %}{% endblock %}
		
		<div class="wrapper">
			{% block body %}{% endblock %}
		</div>
		
		<!-- FOOTER -->
		{% block footer %}{% endblock %}
	</body>
</html>
