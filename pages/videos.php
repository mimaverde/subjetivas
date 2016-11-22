<?php
	$queryTaxonomyEstado = array_key_exists('taxonomy_estado', $_GET);
	$queryTaxonomyFuncao = array_key_exists('taxonomy_funcao', $_GET);
?>

<section id="assistir" class="videos">
	<!-- Busca por Estado -->
	<?php $taxonomias_estado = get_terms('estado'); ?>
	<?php $taxonomias_funcao = get_terms('funcao'); ?>
	<form id="filter" action="<?php bloginfo('url'); ?>" method="GET">
		<select class="select-estado" name="taxonomy_estado">
			<option value="">Todos os Estados</option>
			<?php foreach ($taxonomias_estado as $taxonomia) { ?>
				<option value="<?= $taxonomia->slug; ?>"><?= $taxonomia->name; ?></option>
			<?php } ?>
		</select>

		<select class="select-funcao" name="taxonomy_funcao">
			<option value="">Todos as função</option>
			<?php foreach ($taxonomias_funcao as $taxonomia) { ?>
				<option value="<?= $taxonomia->slug; ?>"><?= $taxonomia->name; ?></option>
			<?php } ?>
		</select>
		<div>
			<a href="" class="dateSel" id="ASC">Antigos<a/>
			<a href="" class="dateSel" id="DESC">Recentes<a/>
		</div>

		<input type="hidden" name="action" value="myfilter">
		<?php get_search_form(); ?>
	</form>

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

			<img src="<?php video_thumbnail(); ?>" />
			<h2><?php the_title(); ?></h2>
			
			<div>
				<div><?php the_content(); ?></div>
				<?php $videos_meta_data = get_post_meta( $post->ID); ?>
				<div>
					<h2>Sobre a realizadora</h2>
					<p>Nome:</p>
					<p><?= $videos_meta_data['name_id'][0] ?></p>
					<p>Cidade:</p>
					<p><?= $videos_meta_data['city_id'][0] ?></p>
					<p>Área de Atuação:</p>
					<p></p>
					<p>Biografia:</p>
					<p><?= $videos_meta_data['biography_id'][0] ?></p>
				</div>
				<div>
					<h2>Trabalhos</h2>
					<p>Links:</p>
					<p><?= $videos_meta_data['links_id'][0] ?></p>
				</div>
				<div>
					<h2>Contato</h2>
					<p>E-mail:</p>
					<p><a target="_blank" href="mailto=<?= $videos_meta_data['email_id'][0] ?>"><?= $videos_meta_data['email_id'][0] ?></a></p>
					<p>Telefone:</p>
					<p><?= $videos_meta_data['phone_id'][0] ?></p>
					<p>Portfólio:</p>
					<p><a target="_blank" href="<?= $videos_meta_data['portfolio_id'][0] ?>"><?= $videos_meta_data['portfolio_id'][0] ?></a></p>
					<p>Redes Sociais</p>
					<a target="_blank" href="<?= $videos_meta_data['facebook_id'][0] ?>"></a>">Facebook</a>
					<a target="_blank" href="<?= $videos_meta_data['instagram_id'][0] ?>">Instagram</a>
					<a target="_blank" href="<?= $videos_meta_data['vimeo_id'][0] ?>">Vimeo</a>
					<a target="_blank" href="<?= $videos_meta_data['youtube_id'][0] ?>">Youtube</a>
				</div>
			</div>
			
		

	<?php
			}
		}
	?>
	</div>
</section>