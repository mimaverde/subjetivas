<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
	<!--Variável que guarda o caminho root do site-->
	<?php $home = get_template_directory_uri(); ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="<?= $home; ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="<?= $home; ?>/bower_components/modernizr/dist/modernizr-build.js"></script> -->
	<script type="text/javascript" src="<?= $home; ?>/src/js/scripts.js"></script>
	<!--Slick Carousel-->
	<script type="text/javascript" src="<?= $home; ?>/bower_components/slick-carousel/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= $home; ?>/bower_components/slick-carousel/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $home; ?>/bower_components/slick-carousel/slick/slick-theme.css"/>

	<link rel="stylesheet" type="text/css" href="<?= $home; ?>/style.css">

	<title>
		<?php geraTitle(); ?>
	</title>

	<!--Header padrão do wordpress-->
	<?php wp_head(); ?>
</head>
<body>