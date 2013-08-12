<?php

get_header(); ?>

	<div id="primary" class="site-content">
		<style>
			#next-img, #prev-img{
				width: 20px;
				height: 20px;
				background-color: red;
			}
			#next-img{
				float: right;
			}
		</style>
		<div id="content" role="main">
			<div id="imgs-container">
				<div id="prev-img"></div>
				<div id="img-oppened"></div>
				<div id="next-img"></div>
			<div>
			<script>
			( function( $ ) {

				var next = function(imgSrc, $imgOppened){
					var $img = $('<img src="'+imgSrc+'" />');
					$imgOppened.empty().append($img);
				};

				var prev = function(imgSrc, $imgOppened){
					var $img = $('<img src="'+imgSrc+'" />');
					$imgOppened.empty().append($img);
				};

				var success = function(data){
					var $imgs_list = $('<div id="imgs_list"></div>');
					var $imgOppened = $('#img-oppened');

					var posts = data.posts;
					var qtdPosts = posts.length - 1;
					var position = 0;
					var imgSrc;
					
					$imgOppened.append('<img src="'+posts[position].imagem_grande+'" />');
										
					$("#next-img").on("click", function(){
						if(position < qtdPosts){
							position = position + 1;
							imgSrc = posts[position].imagem_grande;
							next(imgSrc, $imgOppened);
						}
					});
					$("#prev-img").on("click", function(){
						if(position > 0){
							position = position - 1;
							imgSrc = posts[position].imagem_grande;
							prev(imgSrc, $imgOppened);
						}
					});

					/*
					for(var i in data.posts){

						var post = data.posts[i];
						console.log(post.imagem_grande);
						var $img = $('<img src="'+post.imagem_grande+'" />');
						$imgs_list.append($img);
					}
					$imgs_list.appendTo("#imgs-container");
					*/
				};

		        var error = function(){
		            alert('erro');
		        };

				$.ajax({
	                type: "GET",
	                dataType: "json",
	                url: 'http://localhost/ZD/admin/?page_id=13',
	                success: success,
	                error: error
            	});
			} )( jQuery );
			</script>
		</div><!-- #content -->
	</div><!-- #primary -->