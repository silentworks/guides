<!-- TYPEKIT -->
<script type="text/javascript" src="http://use.typekit.com/hai1jyh.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="../stylesheets/styles.css" />
<link rel="stylesheet" type="text/css" href="../stylesheets/guides.css" />
<link rel="stylesheet" type="text/css" href="../stylesheets/colorbox.css" />
<link rel="stylesheet" type="text/css" href="../stylesheets/sh/shCore.css" media="all" /> 
<link rel="stylesheet" type="text/css" href="../stylesheets/sh/shThemeEclipse.css" media="all" />

<!-- JAVASCRIPTS -->
<script type="text/javascript" src="../javascripts/jquery.1.5.0.min.js"></script>
<script type="text/javascript" src="../javascripts/jquery.ui.effects.core.1.8.9.custom.min.js"></script>
<script type="text/javascript" src="../javascripts/jquery.colorbox.min.js"></script>
<script type="text/javascript" src="../javascripts/sh/shCore.js"></script> 
<script type="text/javascript" src="../javascripts/sh/shAutoloader.js"></script>

<!-- VARIOUS SCRIPTS for ZOOMING IMAGE, DROP DOWN, LINK BOX, ETC -->
<script>
	//<![CDATA[
	$(document).ready(function(){
		
		$(".zoom").colorbox({width:"50%", inline:true, href:".overflow"});
	
		$(".drop-down").click(function () {
	   		$(".link-box").show();
	   	});

	   	$('.link-box').mouseleave(function () {
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
