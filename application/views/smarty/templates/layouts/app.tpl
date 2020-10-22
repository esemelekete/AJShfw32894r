<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>{$title|default:env('SITE_NAME')}</title>

		<link rel="shortcut icon" href="/img/favicon.png" type="image/png">
		<link rel="stylesheet" href="/css/app.css">
	</head>

	<body class="{implode(' ', $body_classes)|default:''}">
		{block content}{/block}
	
		<script src="/js/app.js"></script>
	</body>
</html>
