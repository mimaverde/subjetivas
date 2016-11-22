<section id="equipe" class="team">
		<h2>Nossa equipe</h2>
		<ul class="imoveis-listagem">
		<!--Adiciona os posts cadastrados na página de edição de imóveis-->
			<?php  

				$args = array('post_type' => 'equipe');
				$loop = new WP_Query($args);

				if($loop->have_posts()) {
					while($loop->have_posts()) {
						$loop->the_post();
			?>
			<li>
				<div>
					<?php the_post_thumbnail(); ?>
					<h2><?php the_title(); ?></h2>
					<div><?php the_content(); ?></div>
				</div>
			</li>
			<?php
					}
				}
			?>

		</ul>
</section>