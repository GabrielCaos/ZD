<div class="post row-fluid">
	<div class="post-include-container">
		<div class="post-container">
			<div class="post-titulo-container">
				<a class="post-link post-titulo" href="<?php echo get_permalink(); ?>">
					<h1 class="post-titulo"><?php the_title(); ?></h1>
				</a>
			</div>
			<div class="post-data">
				<?php the_time('d/m/Y', '<p class="data-noticia">', '</p>') ?>
			</div>
			<div class="post-resumo"><?php the_content(); ?></div>
		</div>
		<div class="post-footer">
			<div class="comentar-container">
				<a class="post-link comentar" href="<?php echo get_permalink(); ?>">
					comentar
				</a>
			</div>
			<div class="fb-container">
				<a onclick="window.open('http://www.facebook.com/sharer.php?s=100&p[title]=<?php echo(htmlentities(urlencode(get_the_title()))); ?>&p[url]=<?php echo urlencode(get_permalink()); ?>&p[summary]=<?php echo(htmlentities(urlencode(get_the_excerpt()))); ?>&p[images][0]=', 'sharer', 'toolbar=0,status=0,width=570,height=335')" href="javascript:void(0);">
					<img class="fb-img" src="<?php echo get_template_directory_uri(); ?>/img/fb_link.jpg" />
				</a>
			</div>
		</div>
	</div>
</div>