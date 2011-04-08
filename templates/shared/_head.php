<!-- TYPEKIT -->
<script type="text/javascript" src="http://use.typekit.com/hai1jyh.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="/stylesheets/styles.css" />
<link rel="stylesheet" type="text/css" href="/stylesheets/guides.css" />
<link rel="stylesheet" type="text/css" href="/stylesheets/errors.css" />
<link rel="stylesheet" type="text/css" href="/stylesheets/colorbox.css" />
<link rel="stylesheet" type="text/css" href="/stylesheets/sh/shCore.css" media="all" /> 
<link rel="stylesheet" type="text/css" href="/stylesheets/sh/shThemeEclipse.css" media="all" />

<!-- JAVASCRIPTS -->
<script type="text/javascript" src="/javascripts/jquery.1.5.0.min.js"></script>
<script type="text/javascript" src="/javascripts/jquery.ui.effects.core.1.8.9.custom.min.js"></script>
<script type="text/javascript" src="/javascripts/jquery.colorbox.min.js"></script>
<script type="text/javascript" src="/javascripts/sh/shCore.js"></script> 
<script type="text/javascript" src="/javascripts/sh/shAutoloader.js"></script>

<!-- VARIOUS SCRIPTS for ZOOMING IMAGE, DROP DOWN, LINK BOX, ETC -->
<script>
	//<![CDATA[
		$(document).ready(function(){
			
			// Wouldn't hurt to move these to a pagoda.js file
			$(".zoom").click(function () {
				var btn    = $(this);
				var target = btn.attr("targ");
				btn.colorbox({
					href : target, 
					onLoad : function(){
						$("#colorbox").css("visibility", "hidden");
					}, 
					onComplete: function(){
						$("#colorbox").css("visibility", "visible");
					}, 
					transition : "fade", 
					speed : 0250
				});
		   	});
	
			$(".drop-down").click(function () {
		   		$(".link-box").show();
		   	});

		   	$('#link-box').mouseleave(function () {
		   		$("#link-box").hide();
		   	});
	
			$(".close").click(function () {
				$(".link-box").hide();
				return false;
		   	});
		});
	//]]>
</script>
<!-- END VARIOUS SCRIPTS -->
