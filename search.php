<?php if (have_posts()) : ?>

	<div id="box">
		<p>Resultado(s) de busca por: “<?php the_search_query();?>"</p>
		<?php while (have_posts()) : the_post(); ?>
			<div class="box_busca">
			<?php if ( in_category(7) || in_category (11) || in_category (14) || in_category (15) ): ?>
			<?php else : ?>
			<ul class="gallery">
				<li>
					<a href="#">
						<img src="<?php video_thumbnail(); ?>" />
						<h2><?php the_title(); ?></h2>
					</a>
					
					<div class="box-desc">
						<h2 class="title"><?php the_title(); ?></h2>
						<div class="video"><?php the_content(); ?></div>
						<?php $videos_meta_data = get_post_meta( $post->ID); ?>
						<div class="text">
							<h2 class="subtitle roxo">Sobre a realizadora</h2>
							<p><strong>Nome:</strong> <?= $videos_meta_data['name_id'][0] ?></p>
							<p><strong>Cidade:</strong> <?= $videos_meta_data['city_id'][0] ?></p>
							<p><strong>Área de Atuação:</strong> <?= get_the_term_list($post->ID, 'funcao' )?></p>
							<p><strong>Biografia:</strong> <?= $videos_meta_data['biography_id'][0] ?></p>
						</div>
						<div class="text">
							<h2 class="subtitle azul-claro">Trabalhos</h2>
							<p><?= $videos_meta_data['links_id'][0] ?></p>
						</div>
						<div class="text">
							<h2 class="subtitle azul-marinho">Contato</h2>
							<p><strong>E-mail:</strong> <a target="_blank" href="mailto=<?= $videos_meta_data['email_id'][0] ?>"><?= $videos_meta_data['email_id'][0] ?></a></p>
							<p><strong>Telefone:</strong> <?= $videos_meta_data['phone_id'][0] ?></p>
							<p><strong>Portfólio:</strong></p>
							<p><a target="_blank" href="<?= $videos_meta_data['portfolio_id'][0] ?>"><?= $videos_meta_data['portfolio_id'][0] ?></a></p>
							<p><strong>Redes Sociais: </strong></p>
							<div class="social">
								<a target="_blank" href="<?= $videos_meta_data['facebook_id'][0] ?>" class="icon-facebook"></a>
								<a target="_blank" href="<?= $videos_meta_data['instagram_id'][0] ?>" class="icon-instagram"></a>
								<a target="_blank" href="<?= $videos_meta_data['vimeo_id'][0] ?>" class="icon-vimeo"></a>
								<a target="_blank" href="<?= $videos_meta_data['youtube_id'][0] ?>" class="icon-youtube"></a>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<?php the_excerpt(); ?>
			<?php endif; ?>
			</div>
			<?php endwhile; ?>
			</div>
		<?php else : ?>

		<p>Nada encontrado. Verifique o termo de pesquisa e tente outra vez!</p>

		<?php endif; ?>
	</div>