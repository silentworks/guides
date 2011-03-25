{% extends "layouts/base.php" %}

{% block body %}
<div class="main-wrapper">
	<p>Need some help gettin' where yer goin'?<br /> Here are some guides to help you along your way.</p>
	<div class="link-box home">
		<span class="guides-sprite top"></span>
		<h3>Guides Index</h3>
		<ul class="left">
			<li>Start Here</li>
			<li><a href="/getting-started/getting-started">Getting Started with Pagoda Box</a></li>
			<li><a href="/getting-started/understanding-the-box-file">Understanding the Box File</a></li>
		</ul>
		<!-- <ul class="right">
					<li>Environment Management</li>
					<li><a href="#link">Page Title</a></li>
					<li><a href="#link">Page Titles shouldn't extend to two lines</a></li>
					<li><a href="#link">Can we build the dropdown like that?</a></li>
					<li><a href="#link">This could be a medium one</a></li>
				</ul> -->
		<span class="guides-sprite bottom"></span>
	</div>
</div>
{% endblock %}