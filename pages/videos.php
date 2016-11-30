<?php
	$queryTaxonomyEstado = array_key_exists('taxonomy_estado', $_GET);
	$queryTaxonomyFuncao = array_key_exists('taxonomy_funcao', $_GET);
?>

<section id="assistir" class="videos">
	<div class="lightbox-video"></div>
	<div class="box-video">
		<div class="close"></div>
		<div class="conteudo"></div>
	</div>
	<!-- Busca por Estado -->
	<?php $taxonomias_estado = get_terms('estado'); ?>
	<?php $taxonomias_funcao = get_terms('funcao'); ?>
	<div class="box-search">
		<form id="filter" action="<?php bloginfo('url'); ?>" method="GET">
			<div class="listar">Listar</div>
			<ul class="menu-filtro">
				<li><a href="#" class="filtro">Por Função</a>
					<ul class="select-funcao sub-menu">
						<li><a href="#" value="">Todos as função</a></li>
						<?php foreach ($taxonomias_funcao as $taxonomia) { ?>
							<li><a href="<?= $taxonomia->slug; ?>"><?= $taxonomia->name; ?></a></li>
						<?php } ?>
					</ul>
				</li>
				<li><a href="#" class="filtro">Por Estado</a>
				 	<ul class="select-estado sub-menu">
				 		<li><a href="#" value="">Todos os Estados</a></li>
						<?php foreach ($taxonomias_estado as $taxonomia) { ?>
							<li><a href="<?= $taxonomia->slug; ?>"><?= $taxonomia->name; ?></a></li>
						<?php } ?>
				 	</ul>
				</li>
				<li><a href="#" class="filtro">Por Data</a>
					<ul class="sub-menu">
						<li><a href="" class="dateSel" id="DESC">Recentes</a></li>
						<li><a href="" class="dateSel" id="ASC">Antigos</a></li>
					</ul>
				</li>
			</ul>

			<input type="hidden" name="action" value="myfilter">
			<?php get_search_form(); ?>
		</form>
	</div>

	<!-- Galeria de vídeos -->
	<div id="category-post-content">
		<div class='uil-cube-css' style='-webkit-transform:scale(0.6)'>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<?php
			if( $queryTaxonomyEstado ) {
				$taxQuery = array(
					'relation' => 'OR',
					array(
						'taxonomy' => 'estado',
						'field' => 'slug',
						'terms' => $_GET['taxonomy_estado']
					),
					array(
						'taxonomy' => 'funcao',
						'field' => 'slug',
						'terms' => $_GET['taxonomy_funcao']
					)
				);
			}
		?>
		<ul class="gallery">
		<?php
			$args = array(
				'post_type' => 'videos',
				'tax_query' => $taxQuery,
				'orderby'   => 'date',
				'order'     => $_GET['date']
			);

			$loop = new WP_Query($args);

			if($loop->have_posts()) {
				while($loop->have_posts()) {
					$loop->the_post();
		?>
			<li>
				<a href="#">
					<img src="<?php video_thumbnail(); ?>" />
					<h2><?php the_title(); ?></h2>
				</a>
				
				<div class="box-desc">
					<h2 class="title"><?php the_title(); ?></h2>
					<div class="video"><?php the_content(); ?></div>
					<?php $videos_meta_data = get_post_meta( $post->ID); ?>
					<div class="text">
						<h2 class="subtitle roxo">Sobre a realizadora</h2>
						<p><strong>Nome:</strong> <?= $videos_meta_data['name_id'][0] ?></p>
						<p><strong>Cidade:</strong> <?= $videos_meta_data['city_id'][0] ?></p>
						<p><strong>Área de Atuação:</strong></p>
						<p><strong>Biografia:</strong> <?= $videos_meta_data['biography_id'][0] ?></p>
					</div>
					<div class="text">
						<h2 class="subtitle azul-claro">Trabalhos</h2>
						<p><?= $videos_meta_data['links_id'][0] ?></p>
					</div>
					<div class="text">
						<h2 class="subtitle azul-marinho">Contato</h2>
						<p><strong>E-mail:</strong> <a target="_blank" href="mailto=<?= $videos_meta_data['email_id'][0] ?>"><?= $videos_meta_data['email_id'][0] ?></a></p>
						<p><strong>Telefone:</strong> <?= $videos_meta_data['phone_id'][0] ?></p>
						<p><strong>Portfólio:</strong></p>
						<p><a target="_blank" href="<?= $videos_meta_data['portfolio_id'][0] ?>"><?= $videos_meta_data['portfolio_id'][0] ?></a></p>
						<p><strong>Redes Sociais: </strong></p>
						<div class="social">
							<a target="_blank" href="<?= $videos_meta_data['facebook_id'][0] ?>" class="icon-facebook"></a>
							<a target="_blank" href="<?= $videos_meta_data['instagram_id'][0] ?>" class="icon-instagram"></a>
							<a target="_blank" href="<?= $videos_meta_data['vimeo_id'][0] ?>" class="icon-vimeo"></a>
							<a target="_blank" href="<?= $videos_meta_data['youtube_id'][0] ?>" class="icon-youtube"></a>
						</div>
					</div>
				</div>
			</li>
			
		

		<?php
				}
			}
		?>
		</ul>
	</div>
</section>