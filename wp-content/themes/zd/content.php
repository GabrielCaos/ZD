<div class="post row-fluid">
	<div class="post-container">
		<div class="post-titulo-container">
			<a class="post-link post-titulo" href="<?php echo get_permalink(); ?>">
				<h1 class="post-titulo"><?php the_title(); ?></h1>
			</a>
		</div>
		<div class="post-data">
			<?php the_time('d/m/Y', '<p class="data-noticia">', '</p>') ?>
		</div>
		<div class="post-resumo"><?php the_excerpt(); ?></div>
	</div>
	<div class="post-footer">
		<div class="comentar-container">
			<a class="post-link comentar" href="<?php echo get_permalink(); ?>">
				comentar
			</a>
		</div>
	</div>
</div>