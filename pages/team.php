<section id="equipe" class="team">
		<h2>Equipe Subjetivas</h2>
		<ul class="equipe-listagem">
		<!--Adiciona os posts cadastrados na página de edição de equipe-->
			<?php  

				$args = array(
					'post_type' => 'equipe',
					'order' => 'ASC'
				);
				$loop = new WP_Query($args);

				if($loop->have_posts()) {
					while($loop->have_posts()) {
						$loop->the_post();
			?>
			<li class="list">
				<?php the_post_thumbnail(); ?>
				<h3 class="title"><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</li>
			<?php
					}
				}
			?>

		</ul>
</section>