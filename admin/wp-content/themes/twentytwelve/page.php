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
				<div id="next-img" style="position: absolute;"></div>
			<div>
			<script>
			( function( $ ) {

				var next = function(position){
					var next_position = position - 1;
					//$('#img_'+next_position).fadeIn();
					$('#img_'+position).fadeOut("slow");
				};

				var prev = function(position){
					var next_position = position + 1;
					//$('#img_'+next_position).fadeIn();
					$('#img_'+position).fadeOut("slow");
				};

				var success = function(data){
					var $imgs_list = $('<div id="imgs_list"></div>');
					var $imgOppened = $('#img-oppened');

					var posts = data.posts;
					var qtdPosts = posts.length - 1;
					var position = 0;
					var imgSrc;
					
					for(var i in posts){
						imgSrc = posts[i].imagem_grande;
						$imgOppened.append('<img style="position: absolute;" id="img_'+i+'" src="'+imgSrc+'" />');
					}

					 var opts = {
      speed: 500            //slider speed
      ,timer: 4000          //time between animation
      ,autoSlider: true     //autoslide on/off
      ,hasNav: true         //show prev/next slider button?
      ,pauseOnHover: false   //pause when mouse over ?
      ,zIndex:20            //z-index  setting
        ,showIndicator: true  // show Indicators?
      , //callback function after every slider action
    }

					$imgOppened.fadeSlider(opts);
					
										

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

	<?php get_footer(); ?>