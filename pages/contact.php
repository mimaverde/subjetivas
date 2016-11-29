<section id="contato" class="contact">
	<!--Adiciona os posts cadastrados na página de contatos-->
	<?php  

		$args = array('post_type' => 'contato');
		$loop = new WP_Query($args);

		if($loop->have_posts()) {
			while($loop->have_posts()) {
				$loop->the_post();
	?>

		<h2><?php the_title(); ?></h2>
		<div class="content"><?php the_content(); ?></div>

	<?php
			}
		}
	?>
</section>