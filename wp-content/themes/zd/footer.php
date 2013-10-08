
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fade-slider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-collapse.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.history.js"></script>
<script type="text/javascript">
	$(document).ready(eventClick);

    function scrollAnimation(div_id){
    	$('html, body').animate({
				scrollTop: $(div_id).offset().top
		},600);
    	window.location.hash = div_id.split("#")[1];
    }

	function eventClick(){
		$('.post-link').on('click', function(e) {
	        e.preventDefault();
	        var path = $(this).attr('href');
	        var title;
	        if($(this).hasClass('comentar')){
	        	title = $('.post-titulo').text();
	        }
	        else{
	        	title = $(this).text();
	        }
	        History.pushState(null, title, path);
	    });

	    $('.container-seta a').on('click', function(e){
	    	e.preventDefault();
	    	var path = $(this).attr('href');
	        History.pushState(null, 'Blog', path);
	    });

	    $("#nav-list li a").on('click', function(e) {
	    	e.preventDefault();
	        var path;
	       	var title = $(this).text();

	    	var pathArray = window.location.pathname.split('/');
			var secondLevelLocation = pathArray[2];
			var sub_section = window.location.hash;

			if(title == "Blog"){
	       		path = $(this).attr('href');
	       		History.pushState(null, title, path);
	       	}
	       	else{
				if((secondLevelLocation === "") || (secondLevelLocation === undefined) || (sub_section == "#home")){
					path = $(this).attr('href').split('/');
					scrollAnimation(path[4]);
				}
				else{
					path = $(this).attr('href').split('/');
					var new_path = path[0]+'/'+path[1]+'/'+path[2]+'/'+path[3]+'/';
			        History.pushState(null, 'Home', new_path);
			        if(path[4] !== "" || path[4] !== undefined){
			        	$(document).ready(function(){
			        		window.location.hash = path[4];
			        	});
			        }
			    }
			}
	    });
	}

	function appendBlogImgs(){
		$('<img class="blog_fundo" src="<?php echo get_template_directory_uri(); ?>/img/blog_fundo_2.png"/>')
			.appendTo('#imgs_container').load(function(){
				var body_height = $("body").height();
				$('.blog_fundo').css("height", (body_height));
		});

		$('<img class="blog_fundo fundo_right" src="<?php echo get_template_directory_uri(); ?>/img/blog_fundo_1.png"/>')
			.appendTo('#imgs_container').load(function(){
				var body_height = $("body").height();
				$('.blog_fundo').css("height", (body_height));
		});
	}

	$(document).ready(setupHistory);

	function load_site_ajax() {
        State = History.getState();
        $("body").load(State.url+" #body-container", function(response, status, xhr ){
        	$(this).prepend('<div class="navbar navbar-fixed-top"><div class="navbar-inner"><div class="container"><div id="zdLOGO"><a href="#home"><img alt="ZD" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABGAAD/4QO2aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjMtYzAxMSA2Ni4xNDU2NjEsIDIwMTIvMDIvMDYtMTQ6NTY6MjcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcFJpZ2h0cz0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3JpZ2h0cy8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBSaWdodHM6TWFya2VkPSJGYWxzZSIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJDMDczMzhEQzU1M0Y5MzYxRDVDMTAxQkEyMzUxNUM0NCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpDMUU3NTk2MDE1RDQxMUUzQjQ5NkI4MTg1RTMxRDUxNiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpDMUU3NTk1RjE1RDQxMUUzQjQ5NkI4MTg1RTMxRDUxNiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjMxMkNBQzkxMEZBNzExRTNCMEU1RUQyMDQ3QzIxQ0IwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjMxMkNBQzkyMEZBNzExRTNCMEU1RUQyMDQ3QzIxQ0IwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABAMDAwMDBAMDBAYEAwQGBwUEBAUHCAYGBwYGCAoICQkJCQgKCgwMDAwMCgwMDQ0MDBERERERFBQUFBQUFBQUFAEEBQUIBwgPCgoPFA4ODhQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU/8AAEQgAJgAwAwERAAIRAQMRAf/EAJ8AAAIDAQEAAAAAAAAAAAAAAAAHBAUGAwgBAAMBAQEBAAAAAAAAAAAAAAAEBgUDAgcQAAEDAgUCAwcDBQAAAAAAAAECAwQFBgARMRIHIhMhURRBYZGhMkJicoIjorKUxAgRAAEDAgAGDAsJAAAAAAAAAAIAAQMEBfARIRIiMjFRYZHhQmJy4hM1BnGB8VKS0iMz01QVQaHRgqLyQxQW/9oADAMBAAIRAxEAPwDxRZ9vUW4pj0at15m3o7TXcbkvt9wOL3AbBucbA8Dn9WFKyoOEWcAc/Bg61LdRxVBuMkoxc5bIcV2GrTkunfuZbH+1jI+qVPy5b/RVD9BofnA9HpqS9wpR10KoXBTrzjToUBt1bjrcdPZ3tJ39suIkLyUen7Trjy16k60YzhcXLd4F0LuzD/XKaOoEhDk9JQ7c4ip9XtWBdVYumLQ49QU42ymU0gN7m3HEbe64+2Nx7ZOWWmO1TdjjneEInNx2vI+2lqHu9HNTDPJOMTF537mUwcHw6iFt2xelKrE5A3iI2pCSrL3tOvH+nC/1sg97CQNt+VmTX+WGT3FQEj4cokr61RKpbtRdpVXjqjVBk5ONL8joUkZgg+wjFDDLHMDED42dR9TTSU8hRyNmuKq8dUqrig0ZyvVaJSW3W46pbqGlSX1BDLSScitZVlp89NccppWjByfLiTVLTlUSjGOTOTE5TuOn0yJG4xtVe2h0fIVJ5J8ZMtJ3ELI12q6lfn+gYw7XTGZPVS657G42H3eFVV+rY4xGig1I9blFh+pdrpOXANnjzqDv90zHKl7Tk5vqrvX9hQc/4iU8WXKgyW5cN1TEllQWy82ShaFDQgjTFKQsTYnys6hwMgLOHI6dF+Ot35xVSL6daQK9THRDqLyAE70FXbVnl5qLbg8t6sS1Az0laUDahZWw328SvrsTXC2R1b+8DRJI8AqOQ8SdBiqXz5OZbMriOyilx5pVz3WyUy6TIZ7vZjbFhK8wtBQtIcVnvCkqUrLb0E4m2IbhUbGhE+R2fZfDDKrkhKz0mt7adtIc3VHDDRSZJKiVKOaj4knFIoZOC7DlwLZqfOc6fnKxM0nac3N9VXdw7Dp+f8RJ3FMoROiIhVL/AOd6h6rpNaqKFQwfuSh5rT/HXiYJ8+6Ni4g5d5/xV6DdVYCzv5D0fSH1VW8I29RqncjtVrcphpqkBt+NFkLS2XXlE7FdeqG9u4+/bhi9zyxw5oM+nsvtNwpLuxRwzVPWSu3s+Lu9FaC7OMrlu+uya1NuSid2Qra0x6pzYyyn6Gk/x6AfE+OE6S6Q08TRjGeTc4VqXCxVVZMUxTRaXK6Kz8jgytx2HX1V+iEMoU4oepcHSkZ6lrLDY3yMnxZh73Cs0+60wjndbF6XRWxi2dOv7h62KTRZURuTDfdkP+ocUEjat5JR/Ghw7utPgRjMKsCkr5SkZ8Tt9niW7HbZLhaIY4iHGJcb8yoonBiKG6KhfdfgU+jtdbiI7qi66B9qS6hGWf4havxw6d961s2ACIt3gxrMj7q9SWdVyhGGHnYlneT77h3Q/Do1vt+mtSjI7VPZy2dxSRs7pT7OkZIB8fjh62UJQM5yZZD2VlXy6jVEMcOjDHqpb42FMIwIRgQjAhGBCMCF/9k="></a></div><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><div class="nav-collapse collapse"><ul id="nav-list" class="nav pull-right cssMenu"><li><a href="<?php echo get_home_url(); ?>/#home">Home</a></li><li><a href="<?php echo get_home_url(); ?>/#colecao">Coleção</a></li><li><a href="<?php echo get_home_url(); ?>/#catalogo">Catálogo</a><ul id="looks_drop" class="drop"><li id="looks_maculino"><a href="<?php echo get_home_url(); ?>/#catalogo">Masculino</a></li><li id="looks_feminino"><a href="<?php echo get_home_url(); ?>/#catalogo">Feminino</a></li></ul></li><li><a href="<?php echo get_home_url(); ?>/#rodape">ZD</a></li><li><a href="<?php echo get_permalink( get_page_by_path("blog") ); ?>">Blog</a></li><!--<li><a href="#lojas">Lojas</a></li> --><!-- <li><a href="#rodape">Contato</a></li> --></ul></div></div></div></div>');
        	var pathArray = State.url.split( '/' );
			var secondLevelLocation = pathArray[4];
        	var sub_section = window.location.hash;
			if((secondLevelLocation === "") || (secondLevelLocation === undefined) || (sub_section == "#home")){
				if($("body").hasClass("fundo-laranja")){
					$("body").removeClass("fundo-laranja");
				}
				criaColecao();
				criaLooksMasc();
			}
			else{
				$("body").addClass("fundo-laranja");
				appendBlogImgs();
			}

        	eventClick();

        	if(sub_section !== "" && sub_section !== undefined){
        		scrollAnimation(sub_section);
        	}
        	else{
        		$('html, body').animate({
					scrollTop: 0
				},600);
        	}

			if ( status == "error" ) {
				alert("Ocorreu um erro no carregamento da página, tente novamente.");
				console.log(response);
				console.log(xhr);
			}
        });
    }

	function setupHistory() {
		var pathArray = window.location.pathname.split('/');
		var secondLevelLocation = pathArray[2];
		var sub_section = window.location.hash;

		if((secondLevelLocation === "") || (secondLevelLocation === undefined) || (sub_section == "#home")){
			if($("body").hasClass("fundo-laranja")){
				$("body").removeClass("fundo-laranja");
			}

			window.onscroll = function(oEvent) {
				var home_top = $("#home").offset().top;
		    	var catalogo_top = $("#catalogo").offset().top - 70;
			  	var colecao_top = $("#colecao").offset().top - 70;
			  	var rodape_top = $("#rodape").offset().top - 70;
			  	var documment_top = $(document).scrollTop();
			 	
				if((documment_top >= colecao_top) && (documment_top <= catalogo_top)){
				  	if(window.location.hash != '#colecao')
			  			window.location.hash = 'colecao';
			  	}
			  	else{
			  		if((documment_top >= catalogo_top) && (documment_top <= rodape_top)){
			  			if(window.location.hash != '#catalogo')
			  				window.location.hash = 'catalogo';
			  		}
			  		else{
			  			if(documment_top >= rodape_top){
			  				if(window.location.hash != '#rodape')
			  					window.location.hash = 'rodape';
			  			}
			  			else{
			  				if(window.location.hash != '#home')
			  					window.location.hash = 'home';
			  			}
			  		}
			  	}
			}

			criaColecao();
			criaLooksMasc();
		}
		else{
			if(sub_section !== "" && sub_section !== undefined){
				load_site_ajax();
				setTimeout(function(){
					scrollAnimation(sub_section);
				},600);
			}
			else{
				$("body").addClass("fundo-laranja");
				appendBlogImgs();
			}
		}

	  	var History = window.History,
	        State = History.getState();

	    if(History.Adapter !== undefined){
		    History.Adapter.bind(window, 'statechange', function() {
		        load_site_ajax();
		    });
		}
	}

	function success(data, secao){
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
	}

	function error(){
	    alert("Ocorreu um erro, por favor recarregue a página.");
	    console.log();
	}

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
</script>
<?php wp_footer(); ?>
</body>
</html>