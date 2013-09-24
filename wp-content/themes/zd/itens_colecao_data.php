<?php
/* 
	Template Name: Itens de Coleção 
*/
		
$args = array(
	'post_type'=> 'itens',
	'posts_per_page' => -1
);
	
$my_query = null;
$my_query = new WP_Query($args);
$posts_list = array();

while ($my_query->have_posts()){ $my_query->the_post();
	$imagem_full_url 	=  	wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$current_post = array(
		'id'				=>	$the_id,
		'title' 			=>  get_the_title(),
		'descricao'			=>  get_the_excerpt(),
		'imagem_grande'		=>	$imagem_full_url[0]
	);

	$posts_list[] = $current_post;
}

$json_array = array(
	'post_name'	=>	'looks',
	'posts'		=> 	$posts_list
);

echo json_encode($json_array);