<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="cs">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta name="robots" content="noindex">

	<title>DomainsKeeper</title>

	<link rel="stylesheet" type="text/css" href="/www/css/domains-keeper.css">
	<link rel="shortcut icon" type="image/x-icon" href="/www/favicon.ico" id="favicon">

	<!-- jquery -->
	<link type="text/css" href="/www/js/jquery/css/custom-theme/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
	<script type="text/javascript" src="/www/js/jquery/js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="/www/js/jquery/js/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript">var site_identificator='{site_identificator}';</script>
	<script type="text/javascript" src="/www/js/domain-keeper.js"></script>
</head>
<body>
{table}
	<div id="GenNav">
		<span>DomainsKeeper</span>
		<ul>
			<li class="Corner10 GlassBlack"><a href="" class="Refresh">obnovit data</a></li>
			<li class="Corner10 GlassBlack"><a href="" class="Navigation">navigace</a></li>
			<li class="Corner10 GlassBlack"><a href="" class="Account">účet</a></li>
		</ul>
	</div>
<div id="Subnavigation">
	<div id="Refresh">
		<form action="" method="post">
			<input type="checkbox" name="domains" id="domains" checked="checked" /><label for="domains">domény</label><br />
			<input type="checkbox" name="tests" id="tests" checked="checked" /><label for="tests">testy</label><br />
			<input type="checkbox" name="cron" id="cron" /><label for="cron">cron</label><br />
			<input type="checkbox" name="seo" id="seo" disabled="disabled" /><label for="seo">SEO</label><br />
			<input type="checkbox" name="validity" id="validity" disabled="disabled" /><label for="validity">validita</label><br />
			<input type="checkbox" name="links" id="links" disabled="disabled" /><label for="links">odkazy</label><br />
			<input type="submit" name="refresh" value="obnovit" />
		</form>
	</div>
	<div id="Navigation">
		navigace aplikace
	</div>
	<div id="Account">
		nastaveni uctu, vcetne prihlaseni, nebo vytvoreni noveho uctu
	</div>
</div>
</body>
</html>