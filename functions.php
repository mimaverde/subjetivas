<?php
// Habilita as imagens de destaque nos posts
add_theme_support('post-thumbnails');

// Habilita a aba de Contato
function cadastrando_post_type_contato() {
	$nomeSingular = 'Contato';
	$description = 'Formulário de contato';

	//Página de edição customizada
	$labels = array(
		'name' => $nomeSingular,
		'singular_name' => $nomeSingular,
		'add_new_item' => 'Adicionar novo ' . $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular
	);

	//O que vai aparecer na página de edição
	$supports = array(
		'title',
		'editor'
	);

	//Argumentos obrigatórios
	$args = array(
		'labels' => $labels,
		'public' => true,
		'description' => $description,
		'menu_icon' => 'dashicons-email-alt',
		'supports' => $supports
	);

	//Apelido da página de edição
	register_post_type ('contato', $args);
}

// Habilita a aba de imóveis no gerenciador
function cadastrando_post_type_equipe() {
	$nomeSingular = 'Equipe';
	$description = 'Cadastro de Equipe';

	//Página de edição customizada
	$labels = array(
		'name' => $nomeSingular,
		'singular_name' => $nomeSingular,
		'add_new_item' => 'Adicionar novo ' . $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular
	);

	//O que vai aparecer na página de edição
	$supports = array(
		'title',
		'editor',
		'thumbnail'
	);

	//Argumentos obrigatórios
	$args = array(
		'labels' => $labels,
		'public' => true,
		'description' => $description,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => $supports
	);

	//Apelido da página de edição
	register_post_type ('equipe', $args);
}

function cadastrando_post_type() {
	cadastrando_post_type_contato();
	cadastrando_post_type_equipe();
}

//Chama as funções das páginas cadastradas
add_action('init', 'cadastrando_post_type');
