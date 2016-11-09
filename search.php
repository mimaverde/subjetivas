<?php if (have_posts()) : ?>

	<div id="box">
		<p>Resultado(s) de busca por: “<?php the_search_query();?>"</p>
		<?php while (have_posts()) : the_post(); ?>
			<div class="box_busca">
			<?php if ( in_category(7) || in_category (11) || in_category (14) || in_category (15) ): ?>
			<?php else : ?>
			<img src="<?php video_thumbnail(); ?>" />
			<h2><?php the_title(); ?></h2>
			<div><?php the_content(); ?></div>
			<?php the_excerpt(); ?>
			<?php endif; ?>
			</div>
			<?php endwhile; ?>
			</div>
		<?php else : ?>

		<p>Nada encontrado. Verifique o termo de pesquisa e tente outra vez!</p>

		<?php endif; ?>
	</div>