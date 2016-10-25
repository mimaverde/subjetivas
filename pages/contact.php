<section class="contact">
	<!--Adiciona os posts cadastrados na página de contatos-->
	<?php  

		$args = array('post_type' => 'contato');
		$loop = new WP_Query($args);

		if($loop->have_posts()) {
			while($loop->have_posts()) {
				$loop->the_post();
	?>

		<h2><?php the_title(); ?></h2>
		<p>Caso tenha alguma sugestão, ou queira colaborar de alguma forma com o projeto
			envie um e-mail pelo formulário abaixo. Se preferir, envie sua mensagem em nossa página no 
			Facebook ou diretamente pelo e-mail:<br />
			<a href="mailto:subjetivas@outlook.com" target="_blank">subjetivas@outlook.com</a>
		</p>
		<div><?php the_content(); ?></div>

	<?php
			}
		}
	?>
</section>