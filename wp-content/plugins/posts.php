<?php

/*
	Plugin Name: Posts
	Description: Plugin para gerenciar o post type post
	Version: 1.0
	Author: Gabriel Ramalho de Albuquerque
	*/

	// campo customizado no post
	add_action("admin_init", "criaBoxPosts");
	add_action('save_post', 'saveDataPosts');
	
	// cria o box no input
	function criaBoxPosts()
	{
		add_meta_box("link-posts", "Link do Facebook", "addConteudoLinkPosts", "post", "advanced", "core");
	}

	//Adiciona conteúdo dentro da caixa e atribuindo os campos as variáveis
	function addConteudoLinkPosts()
	{
		global $post;
		if (get_post_type( $post ) == "post") {

			$custom = get_post_custom($post->ID);
			$link_fb = $custom["link_fb"][0];
			
			echo'<label>Link: <input size="70" id="link_fb" name="link_fb" type="text" value="'; echo $link_fb; echo'" /></label><br /><br />';
		}
	}

	//Armazena o conteúdo colocado dentro dos campos
	function saveDataPosts()
	{
		global $post;
		
		if (get_post_type( $post ) == "post") {
			update_post_meta($post->ID, "link_fb", $_POST["link_fb"]);
		}
	}



?>