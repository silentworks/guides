{% extends "../_base.php" %}

{% block footer %}
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
{% endblock %}