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

// Habilita a aba de Formulário
function cadastrando_post_type_formulario() {
	$nomeSingular = 'Formulário';
	$description = 'Formulário Completo';

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
		'menu_icon' => 'dashicons-paperclip',
		'supports' => $supports
	);

	//Apelido da página de edição
	register_post_type ('formulario', $args);
}

// Habilita a aba de regulamento
function cadastrando_post_type_regulamento() {
	$nomeSingular = 'Regulamento';
	$description = 'Regulamento completo';

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
		'menu_icon' => 'dashicons-yes',
		'supports' => $supports
	);

	//Apelido da página de edição
	register_post_type ('regulamento', $args);
}

// Habilita a aba de Apoio
function cadastrando_post_type_apoio() {
	$nomeSingular = 'Apoio';
	$description = 'Cadastro de Realizadores';

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
		'menu_icon' => 'dashicons-heart',
		'supports' => $supports
	);

	//Apelido da página de edição
	register_post_type ('apoio', $args);
}

function preenche_conteudo_video( $post ) { 
	$videos_meta_data = get_post_meta( $post->ID );
	?>
	

	<style>
		.form-videos label {
			display: block;
		}

		.form-videos input, .form-videos textarea {
			width: 100%;
		}

		.form-videos textarea {
			height: 100px;
		}

		.form-videos div {
			margin-bottom: 20px;
		}
	</style>
	<div class="form-videos">
		<div>
			<label for="name">Nome:</label>
			<input id="name" type="text" name="name_id" value="<?= $videos_meta_data['name_id'][0]; ?>">
		</div>
		<div>
			<label for="city">Cidade:</label>
			<input id="city" type="text" name="city_id" value="<?= $videos_meta_data['city_id'][0]; ?>">
		</div>
		<div>
			<label for="action">Área de Atuação:</label>
			<input id="action" type="text" name="action_id" value="<?= $videos_meta_data['action_id'][0]; ?>">
		</div>
		<div>
			<label for="biography">Biografia:</label>
			<textarea id="biography" type="text" name="biography_id"><?= $videos_meta_data['biography_id'][0]; ?></textarea>
		</div>
		<div>
			<label for="links">Links:</label>
			<textarea id="links" type="text" name="links_id"><?= $videos_meta_data['links_id'][0]; ?></textarea>
		</div>
		<div>
			<label for="email">E-mail:</label>
			<input id="email" type="text" name="email_id" value="<?= $videos_meta_data['email_id'][0]; ?>">
		</div>
		<div>
			<label for="phone">Telefone:</label>
			<input id="phone" type="text" name="phone_id" value="<?= $videos_meta_data['phone_id'][0]; ?>">
		</div>
		<div>
			<label for="portfolio">Portfólio:</label>
			<input id="portfolio" type="text" name="portfolio_id" value="<?= $videos_meta_data['portfolio_id'][0]; ?>">
		</div>
		<div>
			<label for="facebook">Facebook:</label>
			<input id="facebook" type="text" name="facebook_id" value="<?= $videos_meta_data['facebook_id'][0]; ?>">
		</div>
		<div>
			<label for="instagram">Instagram:</label>
			<input id="instagram" type="text" name="instagram_id" value="<?= $videos_meta_data['instagram_id'][0]; ?>">
		</div>
		<div>
			<label for="flickr">Flickr:</label>
			<input id="flickr" type="text" name="flickr_id" value="<?= $videos_meta_data['flickr_id'][0]; ?>">
		</div>
		<div>
			<label for="vimeo">Vimeo:</label>
			<input id="vimeo" type="text" name="vimeo_id" value="<?= $videos_meta_data['vimeo_id'][0]; ?>">
		</div>
		<div>
			<label for="youtube">Youtube:</label>
			<input id="youtube" type="text" name="youtube_id" value="<?= $videos_meta_data['youtube_id'][0]; ?>">
		</div>
	</div>
<?php }

//Atualiza no banco de dados as novas informações de vídeos
function atualiza_meta_info( $post_id ) {
	if( isset($_POST['name_id'])) {
		update_post_meta( $post_id, 'name_id', sanitize_text_field($_POST['name_id']));
	}
	if( isset($_POST['city_id'])) {
		update_post_meta( $post_id, 'city_id', sanitize_text_field($_POST['city_id']));
	}
	if( isset($_POST['action_id'])) {
		update_post_meta( $post_id, 'action_id', sanitize_text_field($_POST['action_id']));
	}
	if( isset($_POST['biography_id'])) {
		update_post_meta( $post_id, 'biography_id', sanitize_text_field($_POST['biography_id']));
	}
	if( isset($_POST['links_id'])) {
		update_post_meta( $post_id, 'links_id', sanitize_text_field($_POST['links_id']));
	}
	if( isset($_POST['email_id'])) {
		update_post_meta( $post_id, 'email_id', sanitize_text_field($_POST['email_id']));
	}
	if( isset($_POST['phone_id'])) {
		update_post_meta( $post_id, 'phone_id', sanitize_text_field($_POST['phone_id']));
	}
	if( isset($_POST['portfolio_id'])) {
		update_post_meta( $post_id, 'portfolio_id', sanitize_text_field($_POST['portfolio_id']));
	}
	if( isset($_POST['facebook_id'])) {
		update_post_meta( $post_id, 'facebook_id', sanitize_text_field($_POST['facebook_id']));
	}
	if( isset($_POST['instagram_id'])) {
		update_post_meta( $post_id, 'instagram_id', sanitize_text_field($_POST['instagram_id']));
	}
	if( isset($_POST['flickr_id'])) {
		update_post_meta( $post_id, 'flickr_id', sanitize_text_field($_POST['flickr_id']));
	}
	if( isset($_POST['vimeo_id'])) {
		update_post_meta( $post_id, 'vimeo_id', sanitize_text_field($_POST['vimeo_id']));
	}
	if( isset($_POST['youtube_id'])) {
		update_post_meta( $post_id, 'youtube_id', sanitize_text_field($_POST['youtube_id']));
	}
}

//Adiciona novos campos de cadastro
function registra_meta_boxes() {
	add_meta_box(
		'informacoes-video',
		'Informações do Vídeo',
		'preenche_conteudo_video',
		'videos',
		'normal',
		'high'
	);
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
	cadastrando_post_type_formulario();
	cadastrando_post_type_regulamento();
	cadastrando_post_type_apoio();
	registra_taxonomia_estado();
	registra_taxonomia_funcao();
}

//Chama as funções das páginas cadastradas
add_action('init', 'cadastrando_post_type');
add_action('add_meta_boxes', 'registra_meta_boxes');
add_action('save_post', 'atualiza_meta_info');
