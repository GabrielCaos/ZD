<?php get_header(); 

if ( have_posts() ) : the_post();

?>
<div id="imgs_container"></div>

<div id="blog-container" class="container content container-fluid">
	<div class="post row-fluid">
		<div class="post-include-container">
			<div class="post-container">
				<div class="post-titulo-container post-link">
					<h1 class="post-titulo"><?php the_title(); ?></h1>
				</div>
				<div class="post-data">
					<?php the_time('d/m/Y', '<p class="data-noticia">', '</p>') ?>
				</div>
				<div class="post-resumo"><?php the_content(); ?></div>
			</div>
			<div class="post-footer">
				<div class="comentario-form-container">
					<?php comments_template(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

</div>

<?php

endif;

get_footer(); ?>