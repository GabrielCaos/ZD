<?php 

  	/*
	Plugin Name: Looks
	Description: Plugin para criar e gerenciar o post type looks
	Version: 1.0
	Author: Gabriel Ramalho de Albuquerque
	*/

 	 // init do tipo Looks
  
  	add_action('init', 'create_Looks' );
  	//add_action("admin_init", "criaBoxLooks");
	//add_action('save_post', 'saveDataLooks');

	$prefix = "looks";
	
	
	
	
	
	
	function create_Looks() 
	{
		$labels = array(
				'name' => __( 'Looks' ),
				'singular_name' => __( 'Look' ),
				'add_new' => __('Novo Look'),
				'add_new_item' => __('Novo Look'),
				'edit_item' => __('Editar Look'),
				'new_item' => __('Novo Looks'),
				'all_items' => __('Todos os Looks'),
				'view_item' => __('Ver os Looks Publicados'),
				'search_items' => __('Procurar nos Looks'),
				'not_found' =>  __('Nenhum Look'),
				'not_found_in_trash' => __('No Looks found in Trash'),
				'menu_name' => 'Looks'
			);
				
		$args = array(
				'labels' => $labels,
				'_builtin' => false, // It's a custom post type, not built in!
				'rewrite' => array('slug' => 'looks'),
			    'public' => true,
			    'publicly_queryable' => true,
			    'show_ui' => true, 
			    'show_in_menu' => true, 
			    'query_var' => true,
			    'has_archive' => true, 
			    'hierarchical' => false,
			    'supports' => array('title', 'excerpt', 'thumbnail'),
			    'menu_position' => null
	  		); 	
	
		
		register_post_type('looks', $args);

		//Adiciona novas taxonomias dentro do tipo
		register_taxonomy("lookbook", array("looks"), array("hierarchical" => true, 
		"label" => "Lookbooks", "singular_label" => "Lookbook", "rewrite" => true));
			
	}


		// cria o box no input
		//function criaBoxLooks()
		//{
			//global $post;
			//die ("<script>alert('".get_post_type($post)."');</script>");
			//if (get_post_type( $post ) == "looks") {
				//add_meta_box("info-looks", "Informações do Look", "addConteudoInfoLooks", "looks", "advanced", "high");
				//add_meta_box("HTML id", "Titulo da caixa", "Nome da funcao que irá exibir o conteúdo da caixa", "Tipo do post (post, page ou post_type)", "Onde deve aparecer (side, normal ou advanced)", "Prioridade (high ou low)" );

			//}


		//}

		//Adiciona conteúdo dentro da caixa e atribuindo os campos as variáveis
		/*function addConteudoInfoLooks()
		{
			global $post;
			if (get_post_type( $post ) == "looks") {

				$custom = get_post_custom($post->ID);
				$imagem_pq_looks = $custom["imagem_pq_looks"][0];
				$imagem_gd_looks = $custom["imagem_gd_looks"][0];
				$destaque_looks = $custom["destaque_looks"][0];
				
				echo'<label>imagem pequena: <input size="39" id="imagem_pq_looks" name="imagem_pq_looks" type="text" value="'; echo $imagem_pq_looks; echo'"/><input id="upload_image_pq_looks" value="Upload da Imagem" type="button" /></label><br /><br />
				<label>imagem grande: <input size="39" id="imagem_gd_looks" name="imagem_gd_looks" type="text" value="'; echo $imagem_gd_looks; echo'"/><input id="upload_image_gd_looks" value="Upload da Imagem" type="button" /></label><br /><br />
				<label>destaque: <input size="39" id="destaque_looks" name="destaque_looks" type="checkbox"'; if ($destaque_looks == "on") echo 'checked="checked"'; echo'" /></label><br /><br />';
			}
		}


		//Armazena o conteúdo colocado dentro dos campos
		function saveDataLooks()
		{
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
			global $post;
			
			if (get_post_type( $post ) == "looks") {
			
				 //die ("<script>alert('".get_post_type( $post )."');</script>");
				update_post_meta($post->ID, "imagem_pq_looks", $_POST["imagem_pq_looks"]);
				update_post_meta($post->ID, "imagem_gd_looks", $_POST["imagem_gd_looks"]);
				update_post_meta($post->ID, "destaque_looks", $_POST["destaque_looks"]);
				//update_post_meta(post_id, custom_field, new value)
			
			}
		}




		/// import media library

		function wp_gear_manager_admin_scripts() {

			global $post;
			if (get_post_type( $post ) == "looks") {
				wp_enqueue_script('media-upload');
				wp_enqueue_script('thickbox');
				wp_enqueue_script('jquery');
				
				wp_register_script('upload-img-looks', WP_PLUGIN_URL.'/looks/script-looks.js', array('jquery','media-upload','thickbox'), 2); 
				wp_enqueue_script('upload-img-looks');
			}
		}

		function wp_gear_manager_admin_styles() {
				
			wp_enqueue_style('thickbox');
		}


		add_action('admin_print_scripts', 'wp_gear_manager_admin_scripts');
		add_action('admin_print_styles', 'wp_gear_manager_admin_styles');
		*/

		// colunas

		add_filter("manage_edit-looks_columns", "criaColunasLooks");
		//add_action("manage_posts_custom_column",  "addConteudoColunasLooks");

		//Cria as colunas de ordenação do tipo Loja
		function criaColunasLooks($columns)
		{
				$columns = array(
					"cb" => "<input type=\"checkbox\" />",
					'title' => __('Title'),
					"lookbook" => "Lookbook"
				);

				return $columns;
		}

		//Adiciona conteúdo ao itens da coluna com relação as variáveis corretas
		/*function addConteudoColunasLooks($column)
		{
				global $post;
				switch ($column)
				{
					case "lookbook":
						echo get_the_term_list($post->ID, 'lookbook', '', ', ','');
					break;
				}
		}*/
			
?>