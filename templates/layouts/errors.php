<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<!-- TITLE -->
		<title>Pagoda Box</title>
		
		<!-- EXTERNALS (CSS, JS, ETC.) -->
		{% include 'shared/_head.php' %}

		<!-- ANALYTICS -->
		{% include 'shared/_analytics.php' %}
	</head>
	
	<body>
		<!-- HEADER -->
		{% include 'shared/_header.php' %}
		
		<!-- BODY -->
		{% block error %}{% endblock %}
		
		<!-- FOOTER -->
		{% include 'shared/_footer.php' %}
	</body>
</html>
