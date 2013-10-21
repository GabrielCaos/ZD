
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

    function scrollAnimation(hash){
    	var div_id = "#container_" + hash;
    	$('html, body').animate({
			scrollTop: $(div_id).offset().top - 35
		},600, function(){
			$(window).scroll(changeHashByScroll);
		});
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

	    $("#nav-list li a, #zdLOGO a").on('click', function(e) {
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
					var hash = path[4].split("#")[1];
					$(window).off("scroll", changeHashByScroll);
					scrollAnimation(hash);
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
				criaColecao();
				criaLooksMasc();
			}
	    });
	}

	function appendBlogImgs(){
		$('<img id="blog_fundo_right" class="blog_fundo" src="data:image/png;base64,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" />')
			.appendTo('#imgs_container');

		$('<img id="blog_fundo_left" class="blog_fundo fundo_right" src="data:image/png;base64,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" />')
			.appendTo('#imgs_container').load(function(){
				var body_height = $("body").height();
				$('#blog_fundo_left').css("height", (body_height));
		});
	}

	function changeHashByScroll(){
		var home_top = $("#container_home").offset().top;
    	var catalogo_top = $("#container_catalogo").offset().top - 70;
	  	var colecao_top = $("#container_colecao").offset().top - 70;
	  	var rodape_top = $("#container_zd").offset().top - 70;
	  	var lojas_top = $("#container_lojas").offset().top - 70;
	  	var documment_top = $(document).scrollTop();

		if((documment_top >= colecao_top) && (documment_top <= catalogo_top)){
		  	if(window.location.hash != 'colecao')
	  			window.location.hash = 'colecao';
	  	}
	  	else{
	  		if((documment_top >= catalogo_top) && (documment_top <= rodape_top)){
	  			if(window.location.hash != 'catalogo')
	  				window.location.hash = 'catalogo';
	  		}
	  		else{
	  			if((documment_top >= rodape_top) && (documment_top <= lojas_top)){
	  				if(window.location.hash != 'zd')
	  					window.location.hash = 'zd';
	  			}
	  			else{
	  				if(documment_top >= lojas_top){
	  					if(window.location.hash != 'lojas')
	  						window.location.hash = 'lojas';
	  				}
	  				else{
		  				if(window.location.hash != 'home')
		  					window.location.hash = 'home';
		  			}
	  			}
	  		}
	  	}
	}

	$(document).ready(setupHistory);

	function load_site_ajax() {
        State = History.getState();
        $("body").load(State.url+" #body-container", function(response, status, xhr ){
        	$(this).prepend('<div class="navbar navbar-fixed-top"><div class="navbar-inner"><div class="container"><div id="actLogo"><a href="http://www.actdesign.org" target="_blank"><img alt="ACT" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAWCAMAAACynuG2AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRQTFRFbzYXOR4PpE0fgoODEQ0JVCoTiUEbQ0VFLBgNYTAVsVMhRyQRwMHBlkcdFBcXHxML0NHRYmRkvlgjkZOTfDsZIyYmMzY24ODgUlVVoaKicnR0BAcHIm1ECQAAAShJREFUeNrslNtugzAMhp2Dc4YAha6b3/89ZwdareqoOo3LRkpCjPLJvw8BOnLAm/am/Z8WDqXp+6PNf6eVfRq+SPP+LNvivR+8l88MQWgWo+hVPFbluZ0pgNqj9cPnVzkRmQ9jZDIkOXRRU5giakdzBwDiK9tz54gwZed2aHKfyvlcbkqj/LeaEjsCqWq7KXeRty5TYkMXfqeVnpeLMeONtl7XylFIIK7M2QqtRVJB239ofaT5B1plGkyKVMfhmqf6Iq0pHc0y9FeaRIkg0hRFEm6mTWl+TuMsjOVkaBx4kcnRBgUcHEyoOOrISUhKsjCBct1zGsu8LP3CWKmOtUIQmkc1Atds4AKprUIsgmKlkoBqD+nTGY/q+hiz04e9IRXvmmAb3wIMAAG7nX2lmuZqAAAAAElFTkSuQmCC" /></a></div><div id="instaShare"><a href="http://www.instagram.com/zderrejota" target="_blank"><img alt="insta" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6M0Y0QkYyN0QzN0FFMTFFMzgzRTRERkM1NUIyREJCRTUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6M0Y0QkYyN0UzN0FFMTFFMzgzRTRERkM1NUIyREJCRTUiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozRjRCRjI3QjM3QUUxMUUzODNFNERGQzU1QjJEQkJFNSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozRjRCRjI3QzM3QUUxMUUzODNFNERGQzU1QjJEQkJFNSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv0s3/oAAAKqSURBVHjapJNPSBRxFMe/s39GZ//kZqKutILpruufKLfdJYXK/lBRIUYQXfLUJegURNApEqIORfRHKA9dAwM1WMLwllRq4IbVIrhm6q6r4+7szM7MzuzMzjSrsN3rHd6Dx/u8977vx4/QdR3/apaSOzYwCG8i0p/s6j1vpeucoc3XNebafQWrzYqCrELgBKIgSubkVpZjKuue6P7jU+9f3dmBXdHYhYddmdGXN3sxP1yBdp2C4nGhwkFBVzWoDIuhyAxiGQkNTu6Si3ScNbAJUwmuj88/3tPoBtlQBUK3QBd4mHIMKFmAtJEEqar4lc1ho+jCLm8ApqWpofLaCXHF/iNOYPnDV6xMM8g7KdibuvFzS4TH0wI+PgdPnoGuCxDnUxAyDFWGA9f7+Ud5M9L3x9AXbsXndCcmI9/RfOo0VmcmcdhiwrO3Y7CaCKSzDEYjE2wZDoVD2kC4G5yoYzm+gNtXrsHZ2oJDdBMymo6RT7O4dfcefP6O7Suv03SxFLc1p1PrREu7D4FgELH5BSMjoaooI/XuC9wZHo0HAxgZH98GxfQyNhJrRHmyphUhpJKw1zfBXmHa6b6ZgqokYRFdcLZ1oLbKBUWkIYssFEX++86qcc2CkbApAsKBdgT8bYgrJBxeH5DbRA1Lo7bSqJM48FzWqFVQXltTVVItFMBu0Wj0NuPG1Ys44qmBLZOGp6igr7cHB4Kd4NgMpLyIoiJby5MlSbTqMg9B02B3OBE62gMmm0F8cQnuvX6cPHcClI0Cy3LQ8iwkka8sw7O/hQc90ennbv9+CEaT6moH+i/3Ic8LoOwUzKQFLJ0wNPNYjM7hW0ofLMMxafeLp28+2oLN38+QNrvFZCE1kiQJgoBeMORIkgxZypt4LleIroljq5RvuMQR//Or/ggwADJyO+3lXAZZAAAAAElFTkSuQmCC" /></a></div><div id="faceShare"><a href="http://www.facebook.com/errejotazd" target="_blank"><img alt="face" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAYAAADJViUEAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RkRDNDY2RUYzN0E5MTFFMzg4MjFGMEFDMEVFQjgwMjAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RkRDNDY2RjAzN0E5MTFFMzg4MjFGMEFDMEVFQjgwMjAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGREM0NjZFRDM3QTkxMUUzODgyMUYwQUMwRUVCODAyMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGREM0NjZFRTM3QTkxMUUzODgyMUYwQUMwRUVCODAyMCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pt4kJAQAAAIoSURBVHjapJNNaBNBGIbfmd3sZjfdlrYm3Vh7KraxFitSKYI/FQVPnqoiHsWrCII9Cvaml4qgByl4EAShF0M0px6UKogFC4KU1qaiLdFogsbtZrO7M+PuUtSWxIPOMH8wz7zfN/MOEULgX4scdrMT58aThfyQp3c0P0kIEg7Es+G1dNeswVPTJFQuXGgXiqKAbUUJBWUu4nYFNAb4dcDVDQhZQ9VycpGyFzOKknDTDHQTS5kfEA7e9J2/vqiMPEt3d/KBhZuTytpcBgnzk/y3nGLWF6wev3G5tP/KJCtW4e5pBSs9vkSWZzNQCZrCkvDhaq14LXbdTxGGw0sTt9Rc/gTltR7WmkSYIW0EciIjwavoYFW8fDGnvlspw1yevrij8LZPdioal+O/b3trMbwSXm0bu7PYfijfqyXK+9I1zPRfHV3vsvSDxbv3dOtjly11NlbWeB0flP6HT+iRHCOSY6rreM73Pn2fPpZXZckQgjdX/h5L4kD5wVRv6dFaVj97en7w6Nexz+NT6srMEDShs5iBMOmGynWiwPRWdw7786PC9/WKqyLDlk5mWHE49IUAaa5MweFQHTbigU8oUyiHRY2iJ8kpkBAUG/siM7hK6CYSnbm5/TIbQkxszDmoZysR7MfbZAQ2FA3w8MlDpQAzo3UQNg8C9o3tXhT2N3PkGl3IDngtbX/8GD+oAKO8SoOZLeK3faL3CF/ASaScH7vPZMn/fMmfAgwA8SHn4N3tmlkAAAAASUVORK5CYII=" /></a></div><div id="zdLOGO"><a href="<?php echo get_home_url(); ?>/#home"><img alt="ZD" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABGAAD/4QO2aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjMtYzAxMSA2Ni4xNDU2NjEsIDIwMTIvMDIvMDYtMTQ6NTY6MjcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcFJpZ2h0cz0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3JpZ2h0cy8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBSaWdodHM6TWFya2VkPSJGYWxzZSIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJDMDczMzhEQzU1M0Y5MzYxRDVDMTAxQkEyMzUxNUM0NCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpDMUU3NTk2MDE1RDQxMUUzQjQ5NkI4MTg1RTMxRDUxNiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpDMUU3NTk1RjE1RDQxMUUzQjQ5NkI4MTg1RTMxRDUxNiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjMxMkNBQzkxMEZBNzExRTNCMEU1RUQyMDQ3QzIxQ0IwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjMxMkNBQzkyMEZBNzExRTNCMEU1RUQyMDQ3QzIxQ0IwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABAMDAwMDBAMDBAYEAwQGBwUEBAUHCAYGBwYGCAoICQkJCQgKCgwMDAwMCgwMDQ0MDBERERERFBQUFBQUFBQUFAEEBQUIBwgPCgoPFA4ODhQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU/8AAEQgAJgAwAwERAAIRAQMRAf/EAJ8AAAIDAQEAAAAAAAAAAAAAAAAHBAUGAwgBAAMBAQEBAAAAAAAAAAAAAAAEBgUDAgcQAAEDAgUCAwcDBQAAAAAAAAECAwQFBgARMRIHIhMhURRBYZGhMkJicoIjorKUxAgRAAEDAgAGDAsJAAAAAAAAAAIAAQMEBfARIRIiMjFRYZHhQmJy4hM1BnGB8VKS0iMz01QVQaHRgqLyQxQW/9oADAMBAAIRAxEAPwDxRZ9vUW4pj0at15m3o7TXcbkvt9wOL3AbBucbA8Dn9WFKyoOEWcAc/Bg61LdRxVBuMkoxc5bIcV2GrTkunfuZbH+1jI+qVPy5b/RVD9BofnA9HpqS9wpR10KoXBTrzjToUBt1bjrcdPZ3tJ39suIkLyUen7Trjy16k60YzhcXLd4F0LuzD/XKaOoEhDk9JQ7c4ip9XtWBdVYumLQ49QU42ymU0gN7m3HEbe64+2Nx7ZOWWmO1TdjjneEInNx2vI+2lqHu9HNTDPJOMTF537mUwcHw6iFt2xelKrE5A3iI2pCSrL3tOvH+nC/1sg97CQNt+VmTX+WGT3FQEj4cokr61RKpbtRdpVXjqjVBk5ONL8joUkZgg+wjFDDLHMDED42dR9TTSU8hRyNmuKq8dUqrig0ZyvVaJSW3W46pbqGlSX1BDLSScitZVlp89NccppWjByfLiTVLTlUSjGOTOTE5TuOn0yJG4xtVe2h0fIVJ5J8ZMtJ3ELI12q6lfn+gYw7XTGZPVS657G42H3eFVV+rY4xGig1I9blFh+pdrpOXANnjzqDv90zHKl7Tk5vqrvX9hQc/4iU8WXKgyW5cN1TEllQWy82ShaFDQgjTFKQsTYnys6hwMgLOHI6dF+Ot35xVSL6daQK9THRDqLyAE70FXbVnl5qLbg8t6sS1Az0laUDahZWw328SvrsTXC2R1b+8DRJI8AqOQ8SdBiqXz5OZbMriOyilx5pVz3WyUy6TIZ7vZjbFhK8wtBQtIcVnvCkqUrLb0E4m2IbhUbGhE+R2fZfDDKrkhKz0mt7adtIc3VHDDRSZJKiVKOaj4knFIoZOC7DlwLZqfOc6fnKxM0nac3N9VXdw7Dp+f8RJ3FMoROiIhVL/AOd6h6rpNaqKFQwfuSh5rT/HXiYJ8+6Ni4g5d5/xV6DdVYCzv5D0fSH1VW8I29RqncjtVrcphpqkBt+NFkLS2XXlE7FdeqG9u4+/bhi9zyxw5oM+nsvtNwpLuxRwzVPWSu3s+Lu9FaC7OMrlu+uya1NuSid2Qra0x6pzYyyn6Gk/x6AfE+OE6S6Q08TRjGeTc4VqXCxVVZMUxTRaXK6Kz8jgytx2HX1V+iEMoU4oepcHSkZ6lrLDY3yMnxZh73Cs0+60wjndbF6XRWxi2dOv7h62KTRZURuTDfdkP+ocUEjat5JR/Ghw7utPgRjMKsCkr5SkZ8Tt9niW7HbZLhaIY4iHGJcb8yoonBiKG6KhfdfgU+jtdbiI7qi66B9qS6hGWf4havxw6d961s2ACIt3gxrMj7q9SWdVyhGGHnYlneT77h3Q/Do1vt+mtSjI7VPZy2dxSRs7pT7OkZIB8fjh62UJQM5yZZD2VlXy6jVEMcOjDHqpb42FMIwIRgQjAhGBCMCF/9k="></a></div><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><div class="nav-collapse collapse"><ul id="nav-list" class="nav pull-right cssMenu"><li><a href="<?php echo get_home_url(); ?>/#home">Home</a></li><li><a href="<?php echo get_home_url(); ?>/#colecao">Coleção</a></li><li><a href="<?php echo get_home_url(); ?>/#catalogo">Catálogo</a><ul id="looks_drop" class="drop"><li id="looks_maculino"><a href="<?php echo get_home_url(); ?>/#catalogo">Masculino</a></li><li id="looks_feminino"><a href="<?php echo get_home_url(); ?>/#catalogo">Feminino</a></li></ul></li><li><a href="<?php echo get_home_url(); ?>/#zd">ZD</a></li><li><a href="<?php echo get_home_url(); ?>/#lojas">LOJAS</a></li><li><a href="<?php echo get_permalink( get_page_by_path("blog") ); ?>">Blog</a></li></ul></div></div></div></div>');
        	var pathArray = State.url.split( '/' );
			var secondLevelLocation = pathArray[4];
        	var sub_section = window.location.hash;

        	eventClick();

        	if(sub_section !== "" && sub_section !== undefined){
        		if($("body").hasClass("fundo-laranja")){
					$("body").removeClass("fundo-laranja");
				}
        		var hash = sub_section.split("#")[1];
        		$(window).scroll(changeHashByScroll);
        		scrollAnimation(hash);
        	}
        	else{
        		$("body").addClass("fundo-laranja");
				$(window).off("scroll", changeHashByScroll);
				appendBlogImgs();
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

		if(sub_section !== "" && sub_section !== undefined){
			setTimeout(function(){
				var hash = sub_section.split("#")[1];
				scrollAnimation(hash);
			},600);
			criaColecao();
			criaLooksMasc();
		}
		else{
			if((secondLevelLocation === "") || (secondLevelLocation === undefined) || (sub_section == "#home")){
				if($("body").hasClass("fundo-laranja")){
					$("body").removeClass("fundo-laranja");
				}
				$(window).scroll(changeHashByScroll);
				criaColecao();
				criaLooksMasc();
			}
			else{
				$("body").addClass("fundo-laranja");
				$(window).off("scroll", changeHashByScroll);
				appendBlogImgs();
				$('html, body').animate({
					scrollTop: 0
				},600);
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
			speed: 1000,
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