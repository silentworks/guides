{% extends "layouts/base.php" %}

{% block body %}
<div class="top">
	
	<!-- HEADER IMAGE / LINK TO ROOT -->
	<a href="/" class="guides-sprite name"></a>
	
	<!-- MAIN DROPDOWN MENU -->
	{% include 'shared/_dropdown.php' %}

</div>
<div class="main-col">
	
	<!-- GUIDE CONTENT -->
	{% block content %}{% endblock %}

</div>
{% endblock %}