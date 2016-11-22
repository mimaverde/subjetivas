<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
	<!--Variável que guarda o caminho root do site-->
	<?php $home = get_template_directory_uri(); ?>

	<meta charset="utf-8">
	<script type="text/javascript" src="<?= $home; ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="<?= $home; ?>/bower_components/modernizr/dist/modernizr-build.js"></script> -->
	<script type="text/javascript" src="<?= $home; ?>/src/js/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= $home; ?>/style.css">


	<title>
		<?php geraTitle(); ?>
	</title>

	<!--Header padrão do wordpress-->
	<?php wp_head(); ?>
</head>
<body>