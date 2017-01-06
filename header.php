<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
	<!--Variável que guarda o caminho root do site-->
	<?php $home = get_template_directory_uri(); ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Facebook meta -->
	<meta property="og:url"           content="http://www.subjtivas.com.br" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Subjetivas" />
	<meta property="og:description"   content="Experimento de formatos em audiovisual que entrelaça olhares das mulheres do cinema brasileiro. Nós emaranhadas, coletivas e subjetivas." />
	<meta property="og:image"         content="https://scontent.fgru5-1.fna.fbcdn.net/v/t1.0-9/13567017_1074774622592786_7276111811230842367_n.png?oh=34d10fdb03cd7b324a7374e4f72dca8a&oe=58ED395E" />

	<script type="text/javascript" src="<?= $home; ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="<?= $home; ?>/bower_components/modernizr/dist/modernizr-build.js"></script> -->
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