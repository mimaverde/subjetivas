<section id="noticias" class="news">
	<h2 class="title">Notícias</h2>
	<div class="shape-news">
		<ul class="box-news">
			<?php  

				$args = array('post_type' => '');
				$loop = new WP_Query($args);

				if($loop->have_posts()) {
					while($loop->have_posts()) {
						$loop->the_post();
			?>
			<li>
				<div><?php the_content(); ?></div>
			</li>
			<?php
					}
				}
			?>
		</ul>

		<p class="under">Espaço para textos e informações sobre o projeto: links e eventos promovidos</p>
	</div>
	
</section>