<?php get_header(); ?>

<div id="imgs_container"></div>

<div id="blog-container" class="container fundo-laranja content container-fluid">

<?php 
	$items_per_page = 6;
	// the query to set the posts per page to $items_per_page
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts( array( 
		'post_type' => 'post', 
		'order'=> 'DESC', 
		'orderby' => 'date', 
		'posts_per_page' => $items_per_page, 
		'paged' => $paged 
		) ); 

	while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content',  get_post_format()); ?>
	<?php endwhile; // end of the loop. ?>

	<div class="container-pilula-lista post row-fluid">
		<div class="container-seta esquerda">
			<?php echo get_previous_posts_link('Voltar', $wp_query->max_num_pages); ?>
	    </div>
		<div class="container-seta direita">
	    	<?php echo get_next_posts_link('Avançar', $wp_query->max_num_pages); ?>
		</div>
	</div>
</div>

</div>

<?php get_footer(); ?>