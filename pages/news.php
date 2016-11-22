<section id="noticias" class="news">
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		testentando noticia <br>
		<?php  

			$args = array('post_type' => '');
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
</section>