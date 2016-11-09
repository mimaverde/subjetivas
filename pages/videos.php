<?php
	$queryTaxonomyEstado = array_key_exists('taxonomy_estado', $_GET);
	$queryTaxonomyFuncao = array_key_exists('taxonomy_funcao', $_GET);
?>

<section id="assistir" class="videos">
	<!-- Busca por Estado -->
	<?php $taxonomias_estado = get_terms('estado'); ?>
	<?php $taxonomias_funcao = get_terms('funcao'); ?>
	<?php $date = get_terms('date'); ?>
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
			<input href="" type="button" value="ASC" name="date" class="dateSel" />
			<input href="" type="button" value="DESC" name="date" class="dateSel" />
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

		$args = array(
			'post_type' => 'videos',
			'tax_query' => $taxQuery,
			'orderby'   => 'date',
			'order'     => $_POST['date']
		);

		$loop = new WP_Query($args);

		if($loop->have_posts()) {
			while($loop->have_posts()) {
				$loop->the_post();
	?>
		
			<img src="<?php video_thumbnail(); ?>" />
			<h2><?php the_title(); ?></h2>
			<div><?php the_content(); ?></div>
		

	<?php
			}
		}
	?>
	</div>
</section>