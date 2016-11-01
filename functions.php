<?php

//Gera o título da página
function geraTitle() {
	bloginfo('name');
}

// Habilita as imagens de destaque nos posts
add_theme_support('post-thumbnails');
add_theme_support('video-thumbnails');

// Habilita a aba de Projetos
function cadastrando_post_type_projeto() {
	$nomeSingular = 'O projeto';
	$description = 'Descrição do projeto';

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
		'menu_icon' => 'dashicons-universal-access',
		'supports' => $supports
	);

	//Apelido da página de edição
	register_post_type ('projeto', $args);
}

//Habilita a aba de vídeos
function cadastrando_post_type_videos() {
	$nomeSingular = 'Vídeo';
	$nomePlural = 'Vídeos';
	$description = 'Descrição do projeto';

	//Página de edição customizada
	$labels = array(
		'name' => $nomePlural,
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
		'menu_icon' => 'dashicons-video-alt2',
		'supports' => $supports
	);

	//Apelido da página de edição
	register_post_type ('videos', $args);
}

// Habilita a aba de Equipe
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
		'menu_icon' => 'dashicons-megaphone',
		'supports' => $supports
	);

	//Apelido da página de edição
	register_post_type ('contato', $args);
}

//Taxonomia de Estado para os vídeos
function registra_taxonomia_estado() {
	$nomeSingular = 'Estado';
	$nomePlural = 'Estados';

	$labels = array (
		'name' => $nomePlural,
		'singular_name' => $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular,
		'add_new_item' => 'Adicionar novo ' . $nomeSingular,
		'separate_items_with_commas' => 'Separe os ' . $nomePlural . ' por vírgula',
		'choose_from_most_used' => 'Escolha entre os ' . $nomePlural . ' mais usados'
	);

	$args = array (
		'labels' => $labels ,
		'public' => true,
		'hierarchical' => true,
		'orderby'=> 'name',
	);

	register_taxonomy('estado', 'videos', $args);
};

//Taxonomia de Funcão para os vídeos
function registra_taxonomia_funcao() {
	$nomeSingular = 'Função';
	$nomePlural = 'Funções';

	$labels = array (
		'name' => $nomePlural,
		'singular_name' => $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular,
		'add_new_item' => 'Adicionar novo ' . $nomeSingular,
		'separate_items_with_commas' => 'Separe os ' . $nomePlural . ' por vírgula',
		'choose_from_most_used' => 'Escolha entre os ' . $nomePlural . ' mais usados'
	);

	$args = array (
		'labels' => $labels ,
		'public' => true,
		'hierarchical' => true,
		'orderby'=> 'name',
	);

	register_taxonomy('funcao', 'videos', $args);
};

//Função única que chama todas as funções
function cadastrando_post_type() {
	cadastrando_post_type_projeto();
	cadastrando_post_type_videos();
	cadastrando_post_type_equipe();
	cadastrando_post_type_contato();
	registra_taxonomia_estado();
	registra_taxonomia_funcao();
}

//Chama as funções das páginas cadastradas
add_action('init', 'cadastrando_post_type');
