( function( $ ) {

	var success = function(data, secao){
		var $imgOppened;
		var $imgs_list;
		if(secao == "colecao"){
			$imgOppened = $('#img-oppened-colecao');
			$imgs_list = $('<div id="imgs_list_colecao"></div>');
		} else{
			if(secao == "looks"){
				$imgOppened = $('#img-oppened-looks');
				$imgs_list = $('<div id="imgs_list_looks"></div>');
			}
		}

		$imgOppened.empty();

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
	        url: 'http://localhost/ZD/colecao',
	        success: function(data){
	        	success(data, "colecao");
	        },
	        error: error
		});
	}

	function criaLooksMasc(){
		$.ajax({
	        type: "GET",
	        dataType: "json",
	        url: 'http://localhost/ZD/lookbook/?tipo=masculino',
	        success: function(data){
	        	success(data, "looks");
	        	removeClickEvent("masculino");
	        	addClickEvent("feminino");
	        },
	        error: error
		});
	}

	function criaLooksFem(){
		$.ajax({
	        type: "GET",
	        dataType: "json",
	        url: 'http://localhost/ZD/lookbook/?tipo=feminino',
	        success: function(data){
	        	success(data, "looks");
	        	removeClickEvent("feminino");
	        	addClickEvent("masculino");
	        },
	        error: error
		});
	}

	function addClickEvent(tipo){
		if(tipo == "masculino")
			$("#looks_maculino").bind("click", criaLooksMasc);
		else
			$("#looks_feminino").bind("click", criaLooksFem);
	}

	function removeClickEvent(tipo){
		if(tipo == "masculino")
			$("#looks_maculino").unbind("click", criaLooksMasc);
		else
			$("#looks_feminino").unbind("click", criaLooksFem);
	}

	criaColecao();
	criaLooksMasc();

} )( jQuery );