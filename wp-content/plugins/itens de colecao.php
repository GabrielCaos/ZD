<?php 

  	/*
	Plugin Name: Itens de Coleção
	Description: Plugin para criar e gerenciar o post type itens de coleção
	Version: 1.0
	Author: Gabriel Ramalho de Albuquerque
	*/
  	
 	 // init do tipo Itens
  
  	add_action('init', 'create_Itens' );
  	add_action("admin_init", "criaBoxItens");
  	add_action('save_post', 'saveDataItens');

  	$prefix = "itens";
	
	function create_Itens() 
	{
		$labels = array(
				'name' => __( 'Itens de Coleção'),
				'singular_name' => __( 'Item de Coleção' ),
				'add_new' => __('Novo Item de Coleção'),
				'add_new_item' => __('Novo Item de Coleção'),
				'edit_item' => __('Editar Item de Coleção'),
				'new_item' => __('Novo Item de Coleção'),
				'all_items' => __('Todos os Itens'),
				'view_item' => __('Ver os Itens Publicados'),
				'search_items' => __('Procurar nos Itens de Coleção'),
				'not_found' =>  __('Nenhum Item de Coleção'),
				'not_found_in_trash' => __('No Itens found in Trash'),
				'menu_name' => 'Itens de Coleção'
			);
				
		$args = array(
				'labels' => $labels,
				'_builtin' => false, // It's a custom post type, not built in!
				'rewrite' => array('slug' => 'itens'),
			    'public' => true,
			    'publicly_queryable' => true,
			    'show_ui' => true, 
			    'show_in_menu' => true, 
			    'query_var' => true,
			    'has_archive' => true, 
			    'hierarchical' => false,
				'supports' => array('title', 'editor', 'thumbnail'),
			    'menu_position' => null
	  	); 	
	
		register_post_type('itens', $args);
		
		//Adiciona novas taxonomias dentro do tipo Itens
		
		//register_taxonomy("estado", array("itens"), array("hierarchical" => true, "label" => "Estados", 
		//"singular_label" => "Estado", "rewrite" => true));
		
	}
	    
  
	function criaBoxItens(){  
		add_meta_box("Link-itens", "Link do Facebook", "addConteudoLinkItens", "itens", "advanced", "high");
		//add_meta_box("HTML id", "Titulo da caixa", "Nome da funcao que irá exibir o conteúdo da caixa", "Tipo do post (post, page ou post_type)", "Onde deve aparecer (side, normal ou advanced)", "Prioridade (high ou low)" );
	}    

	//Adiciona conteúdo dentro da caixa e atribuindo os campos as variáveis
		function addConteudoLinkItens()
		{
			global $post;
			if (get_post_type( $post ) == "itens") {
				$custom = get_post_custom($post->ID);

				$link_itens = $custom["link_itens"][0];
				
				echo'<label>Link <input size="39" id="link_itens" name="link_itens" type="text" value="'; echo $link_itens; echo'"/></label><br /><br />';
			}
		}

		//Armazena o conteúdo colocado dentro dos campos
		function saveDataItens()
		{
			global $post;
			if (get_post_type( $post ) == "itens") {
				
				update_post_meta($post->ID, "link_itens", $_POST["link_itens"]);
				//update_post_meta(post_id, custom_field, new value)
			}
		}
?>