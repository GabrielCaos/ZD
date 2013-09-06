( function( $ ) {

	var success = function(data){
		var $imgOppened = $('#img-oppened');
		$imgOppened.empty();
		var $imgs_list = $('<div id="imgs_list"></div>');

		var posts = data.posts;
		var qtdPosts = posts.length - 1;
		var position = 0;
		var imgSrc;
		
		for(var i in posts){
			imgSrc = posts[i].imagem_grande;
			$imgOppened.append('<img style="position: absolute;" id="img_'+i+'" src="'+imgSrc+'" />');
		}

		var opts = {
			speed: 500,
			timer: 4000,
			autoSlider: true,
		    hasNav: true,
		    pauseOnHover: true,
		    zIndex: 20,
		    showIndicator: false
		}

		$imgOppened.fadeSlider(opts);
		$(".fs-nav").text("");
	};

    var error = function(){
        alert("Ocorreu um erro, por favor recarregue a página.");
        console.log();
    };

	function criaColecao(){
		$.ajax({
	        type: "GET",
	        dataType: "json",
	        url: 'http://localhost/ZD/admin/colecao',
	        success: success,
	        error: error
		});
	}

	function criaLooks(){
		$.ajax({
	        type: "GET",
	        dataType: "json",
	        url: 'http://localhost/ZD/admin/lookbook',
	        success: success,
	        error: error
		});
	}

	$("#looks_maculino").on("click", criaLooks);
	$("#looks_feminino").on("click", criaLooks);

	criaColecao();

} )( jQuery );