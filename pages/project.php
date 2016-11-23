<section id="projeto" class="projeto">
	<div class="lightbox">
		<div class="box-projeto">
			<!--Adiciona os posts cadastrados na página de contatos-->
			<?php  

				$args = array('post_type' => 'projeto');
				$loop = new WP_Query($args);

				if($loop->have_posts()) {
					while($loop->have_posts()) {
						$loop->the_post();
			?>

				<h2><?php the_title(); ?></h2>
				<div><?php the_content(); ?></div>

			<?php
					}
				}
			?>
		</div>
	</div>
</section>