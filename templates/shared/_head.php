<!-- TYPEKIT -->
<script type="text/javascript" src="http://use.typekit.com/hai1jyh.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="../stylesheets/styles.css" />
<link rel="stylesheet" type="text/css" href="../stylesheets/guides.css" />
<link rel="stylesheet" type="text/css" href="../stylesheets/colorbox.css" />
<link rel="stylesheet" type="text/css" href="../stylesheets/shCore.css" media="all" /> 
<link rel="stylesheet" type="text/css" href="../stylesheets/shThemeEclipse.css" media="all" />

<!-- JAVASCRIPTS -->
<script type="text/javascript" src="../javascripts/jquery.1.5.0.min.js"></script>
<script type="text/javascript" src="../javascripts/jquery.ui.effects.core.1.8.9.custom.min.js"></script>
<script type="text/javascript" src="../javascripts/jquery.colorbox.min.js"></script>
<script type="text/javascript" src="../javascripts/sh/shCore.js"></script> 
<script type="text/javascript" src="../javascripts/sh/shAutoloader.js"></script>

<!-- BEGIN SYNTAX HIGHLIGHTER -->
<script type="text/javascript">
	//<![CDATA[
		SyntaxHighlighter.autoloader(
		  	'js jscript javascript  ../javascripts/sh/shBrushJScript.js',
			'bash shell             ../javascripts/sh/shBrushBash.js',
			'css                    ../javascripts/sh/shBrushCss.js',
			'js jscript javascript  ../javascripts/sh/shBrushJScript.js',
			'perl pl                ../javascripts/sh/shBrushPerl.js',
			'php                    ../javascripts/sh/shBrushPhp.js',
			'text plain             ../javascripts/sh/shBrushPlain.js',
			'ruby rails ror rb      ../javascripts/sh/shBrushRuby.js',
			'scala                  ../javascripts/sh/shBrushScala.js',
			'sql                    ../javascripts/sh/shBrushSql.js',
			'xml xhtml xslt html    ../javascripts/sh/shBrushXml.js',
			'apache				    ../javascripts/sh/shBrushApache.js'

		);
		SyntaxHighlighter.defaults['toolbar'] = false;
		SyntaxHighlighter.defaults['gutter'] = false;
		SyntaxHighlighter.all();
	//]]>
</script>
<!-- END SYNTAX HIGHLIGHTER -->

<!-- VARIOUS SCRIPTS for ZOOMING IMAGE, DROP DOWN, LINK BOX, ETC -->
<script>
	//<![CDATA[
		$(document).ready(function(){
			$(".zoom").colorbox({width:"50%", inline:true, href:".overflow"});
		});
	
		$(".drop-down").click(function () {
	   		$(".link-box").show();
	   	});

	   	$('.link-box').mouseleave(function () {
	   		$(".link-box").hide();
	   	});
	
		$(".close").click(function () {
			$(".link-box").hide();
			return false;
	   	});
	//]]>
</script>
<!-- END VARIOUS SCRIPTS -->
