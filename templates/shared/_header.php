{% extends "_base.php" %}

{% block header %}
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
{% endblock %}