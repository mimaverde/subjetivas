<!DOCTYPE html>
<html>
<head>
	<!--Variável que guarda o caminho root do site-->
	<?php $home = get_template_directory_uri(); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= $home; ?>/style.css">
	<!--Header padrão do wordpress-->
	<?php wp_head(); ?>
</head>
<body>