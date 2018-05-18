<?php

	/*
		Yup bitches, formatage dégueux à la main. Mais c’est sans importance.
		Les traqueurs en bas de page sont naturellement volontaires et assumés.
	*/

	$titre="Aidons le gouvernement à détecter les vilains méchants sur internet";

	$motsclés="couscous, Al-Qaida, ben Laden, bombe, Syrie";
	$entête="X-PJLRenseignement: $motsclés";

	header("$entête");
	header("X-Powered-By: des petits chinois du FBI dans un garage");

?>
<!doctype html>
<html lang=fr>
<head>
	<meta charset=utf-8>
	<title><?php printf($titre); ?></title>
	<meta name=description content="Une bêtise rapide sur le PJLRenseignement">
	<meta name=keywords content="<?php printf($motsclés); ?>">
	<meta name=author content="Damien Clauzel">
	<link rel="author" href="https://plus.google.com/+DamienClauzel">
	<link rel=schema.dcterms href=http://purl.org/dc/terms/>
	<meta name=dc.rights content="Document sous licence « Fais pas chier », https://Clauzel.eu/FPC/">
	<link rel="icon" href="../Phoque-logo.svg" sizes="any" type="image/svg+xml">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- andouille de Google qui gémit que la page serait être supposée non lisible sur terminaux mobiles sans ça… -->
</head>
<body>
<h1><?php printf($titre); ?></h1>
<p>Pour accompagner le gouvernement dans sa surveillance de masse, il est possible de faciliter le travail des boîtes noires en leur fournissant directement des métadonnées adaptées.
<p>Démonstration : <kbd>curl --head https://clauzel.eu/PJLRenseignement/</kbd> <pre><samp>HTTP/1.1 200 OK
Date: Mon, 13 Apr 2015 22:38:57 GMT
Server: Apache
Strict-Transport-Security: max-age=31536000; includeSubDomains
<em><?php printf($entête); ?></em>
<em>X-Powered-By: des petits chinois du FBI dans un garage</em>
Content-Type: text/html; charset=UTF-8
</samp></pre>

<p>L’injection de l’en-tête personnalisé <var>X-PJLRenseignement</var> est réalisée ici par la fonction PHP <code><a href="https://php.net/manual/fr/function.header.php">header</a>("<?php printf($entête); ?>")</code>, couplé à un malicieux <code>header("X-Powered-By: des petits chinois du FBI dans un garage")</code>.

<hr>

<h1>Notes</h1>
<ul>
	<li>En ce glorieux jour du 2015-04-14, moi <a href=https://Damien.Clauzel.eu>Damien Clauzel</a> place cette page sous la licence « <a href=https://Clauzel.eu/FPC/>Fais pas chier</a> ».
	<li><a href="https://github.com/dClauzel/trollons-le-PJLRenseignement">Ce projet sur GitHub</a>
</ul>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32357237-3', 'auto');
  ga('send', 'pageview');

</script>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.Clauzel.eu"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://clauzel.eu/stats/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 6]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="https://clauzel.eu/stats/piwik.php?idsite=6" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>
