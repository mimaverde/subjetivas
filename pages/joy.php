<section id="participar" class="joy">
	<h2>Quer fazer parte do Subjetivas?</h2>
	<a href="" class="joy-link">Participe</a>

	<!--Adiciona os posts cadastrados na página de contatos-->
	<div class="box-participe">
		<?php  

			$args = array('post_type' => 'contato');
			$loop = new WP_Query($args);

			if($loop->have_posts()) {
				while($loop->have_posts()) {
					$loop->the_post();
		?>

			<h2 class="title"><?php the_title(); ?></h2>
			<div><?php the_content(); ?></div>

		<?php
				}
			}
		?>
	</div>
	<div class="lightForm"></div>
	<div class="formulario box">
		<!--Adiciona os posts cadastrados na página de formulário-->
		<?php  

			$args = array('post_type' => 'formulario');
			$loop = new WP_Query($args);

			if($loop->have_posts()) {
				while($loop->have_posts()) {
					$loop->the_post();
		?>

			<h2>Inscrição</h2>
			<p class="description">Para se inscrever leia o regulamento <a href="#">aqui</a>, e preencha o formulário abaixo:</p>
			<div class="content"><?php the_content(); ?></div>

		<?php
				}
			}
		?>
	</div>
	<div class="regulamento box">
		<!--Adiciona os posts cadastrados na página de regulamento-->
		<?php  

			$args = array('post_type' => 'regulamento');
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
	</div>
</section>