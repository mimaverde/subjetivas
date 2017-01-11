<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
	<!--Variável que guarda o caminho root do site-->
	<?php $home = get_template_directory_uri(); ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Experimento de formatos em audiovisual que entrelaça olhares das mulheres do cinema brasileiro. Nós emaranhadas, coletivas e subjetivas.">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<!--Favicon and icons-->
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= $home; ?>/dist/images/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $home; ?>/dist/images/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $home; ?>/dist/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $home; ?>/dist/images/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= $home; ?>/dist/images/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= $home; ?>/dist/images/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= $home; ?>/dist/images/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= $home; ?>/dist/images/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?= $home; ?>/dist/images/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?= $home; ?>/dist/images/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?= $home; ?>/dist/images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?= $home; ?>/dist/images/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?= $home; ?>/dist/images/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />


	<!--Facebook meta -->
	<meta property="og:url"           content="http://www.subjetivas.com.br" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Subjetivas" />
	<meta property="og:description"   content="Experimento de formatos em audiovisual que entrelaça olhares das mulheres do cinema brasileiro. Nós emaranhadas, coletivas e subjetivas." />
	<meta property="og:image"         content="https://scontent.fgru5-1.fna.fbcdn.net/v/t1.0-9/13567017_1074774622592786_7276111811230842367_n.png?oh=34d10fdb03cd7b324a7374e4f72dca8a&oe=58ED395E" />

	<script type="text/javascript" src="<?= $home; ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?= $home; ?>/bower_components/modernizr/dist/modernizr-build.js"></script>
	<script type="text/javascript" src="<?= $home; ?>/src/js/scripts.js"></script>
	<!--Slick Carousel-->
	<script type="text/javascript" src="<?= $home; ?>/bower_components/slick-carousel/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= $home; ?>/bower_components/slick-carousel/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $home; ?>/bower_components/slick-carousel/slick/slick-theme.css"/>

	<!--Scrollbar Customizado-->
	<link rel="stylesheet" href="<?= $home; ?>/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css" />
	<script src="<?= $home; ?>/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?= $home; ?>/style.css">

	<title>
		<?php geraTitle(); ?>
	</title>

	<!--Header padrão do wordpress-->
	<?php wp_head(); ?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>