<div id="footer" class="background_for footer">
	<div class="footer site">
		<span id="fairy" style="display:none;" class="special fairy"></span>			
		<a href="/" class="sprite logo"></a>
		<ul class="nav horizontal">
			<!-- <li class="link"><a href="/blog">Blog</a></li> -->
			<li class="link"><a href="http://www.pagodabox.com/legal">Legal</a></li>
			<li class="link"><a href="http://www.pagodabox.com/pricing">Pricing</a></li>
			<li class="link"><a href="/">Documentation</a></li>
			<li class="link last"><a href="http://www.pagodabox.com/contact">Contact</a></li>
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
				<p><span>Design</span> <span class="pipe-one">:</span> <a href="http://www.delorum.com" id="delorum" class="link">Delorum</a></p>
				<p class="last">Illustration <span class="pipe-two">:</span> <a href="http://www.mikelaughead.com" id="mike-laughead" class="link">Mike Laughead</a></p>
			</div>
			<div class="group credits">
				<a class="twitter-link" href="http://twitter.com/pagodabox"><span class="twitter"></span>Follow Us</a>
			</div>
			<div class="group credits last">
				<a href="https://dashboard.pagodabox.com/register" class="sprite button account"></a>
			</div>
		</div>	
	</div>
</div>

<script type="text/javascript">
	//<![CDATA[
		{% if(is_legal) %}
			function blink(){
				$(".eyes").blink({speed: 100, blinks: 1})
				setTimeout(blink, Math.floor(Math.random()*5000))
			}
			
			blink();

			if($(".link.active").offset() != null){
				$(".special.arm").animate({top: ($(".link.active").offset().top - $(".special.arm").height())}, 150, "easeOutExpo")
			}

			$(".nav .list li").each(function(){
				$(this).mouseover(function(){
					$(".special.arm").clearQueue()
					$(".special.arm").animate({top: ($(this).offset().top - $(".special.arm").height())}, 150, "easeOutExpo")
				})
			})
		{% endif %}
		
		{% if(active_section) == 'contact' %}
			$('#fairy').show();
		{% endif %}
		
		$("#delorum").click(function(){
			openUrl('http://www.delorum.com')
			return false
		})

		$("#mike-laughead").click(function(){
			openUrl("http://www.mikelaughead.com")
			return false
		})

		$(".twitter-link").click(function(){
			openUrl('http://twitter.com/pagodabox')
			return false
		})

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

		positionFooter()

		$(window)
		    .scroll(positionFooter)
		    .resize(positionFooter)
	//]]>
</script>