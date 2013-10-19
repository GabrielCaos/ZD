
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
		$('<img id="blog_fundo_right" class="blog_fundo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJUAAAMNCAYAAACRfzb8AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAADIBJREFUeNrs3E2OG2UUheEGISFmLIX9T/i8A7yD6h14FjGDICT+Ejodn7JP1X3eAQMEJCk/unUbf1XffP/DDz++vLz89CKF+u5PUD+7FEr1rUsgqASVoJKgUl03qJTuF6iU7gKVTCpBpWH9+uHDBpWSrY9/gUrRWx9USneFSuk2qJRe0u1Uyu9TUAkq9S/pUMmkElSa0/b7T343qLTLlIJK8SUdKplUgkozun08QwWVdptSUCnRBSql26CS25+6+31Jh0rR1qf+JlSK7lNQ6d6uUGn3JR0q3buk26m0/z4FleK3PqgUX9Kh0j0tqOT2p+puf3/QASrtOqWg0td2gUomlerboFK0T52hgkr3tN76B6BSdJ+CSl/TFSo9dEmHSl+zpNup9Nh9CipBpaf3CpXSLajk9qfqtv87QwWVdptSUOk9XaGSSSWoNKv/vCwWKj1sSkElqNT/kx9UMqn0nN560AEqvbf13n8BKr3VBpWeuqRDpfiSDpW+ZEm3U+m5+xRUit/6oFJ8SYdKb7Wgktufqrt96YMOUGnXKQWV/q8LVDKpVN8GlaK99wwVVHqrdc+/DJWi+xRU+lxXqFSzpEOlzy3pdir17FNQCSo9pFeolG5BJbc/Vbd97RkqqLTblIJK/+4KlUwqQaVZvetlsVDpYVMKKkGl/p/8oJJJpf2650EHqLTrlIJKUKl/SYdKJpV2W9IXVEq2pf+DUOkXqFS9pEOljy2oZKdSdbEzVFBptyUdKl2gkkmleUs6VMNLnqGCSh9be/2HobJPQaVYr1DJpFL9km6n0jGmFFRQQaX+JR2quS2o5Pan6iIvi4VK/0C19y8A1bwuUOlQ+xRUUEGlu9vlQQeoTKkXqASVqrtCJZNK3e31oANUphRUgkrDl3SoTCqodNeSvqBSsu2RvxhUbn1QqXtJh2pOCyrZqVTdQ85QQWVJh0p3dYFKJpUs6VAN61FnqKCa03rGLwqVfQoqvatXqGRSqX5Jt1Pp+FMKKqigUv+SDtW5W1DJ7U/V7f6yWKgGonrmLw7VObtApdPsU1BBBZW+rEc/6ADV+VvP/g1A5dYHld7sCpVMKtUv6VDpXFMKKqigUv+SDpVJBZWg0mN76hkqqEwpqHScJR2qc7WgUnyngkrJbs8+QwWVJR0qvdkFKp12n4LK7Q8qfbqGM1RQnavV9huCyq0PKv2nV6hkUql+SbdT6dxTCqrjt0GldFeolG5BJTuVuveplgcdoLKkQ6XPdoFKI/YpqKCCSn/V9KADVOdoNf/moHLrg0p/dIVKJpXql3SoNGdKQQUVVOpf0qEyqaASVMpXe4YKKlMKKh1nSYfqeC2oFN+poFKyW/MZKqgs6VDpjy5QaeQ+BZXbH1STaz9DBdXxWkf6zUJln4JqaFeoNHZJh+o4S7qdSnOnFFSWdKgs6VAp04JKdiqfWXW3IzzoAJUpBdXwLlDJpIIKKqiGdZQHHaA6Tuuov3Go3PqgGtQVKqXboFJ6SbdTyT4FFVRQWdKhkkklqKA6c9sRz1BBZUpBZUmHSiaVoILqzN2OeoYKKlMKqkFdoFK6DSq5/UHV3ZFeFgvVMVpn+YNAZZ+C6sRdoZIlHar6Jd1OJVMKKks6VJZ0qHRfCyrZqaCq7nb0Bx2gMqWgGtAFKplUUEEF1bDO8KADVF2tM/6hoHLrg+pkXaFSug0qpZd0O5XsU1BBBZUlHSqZVFBBBdWZ2852hgoqUwoqSzpUMqkEFVRH73bGM1RQmVJQQQWVBv/kB5VJBdUZOsvLYqHqaU34Q0L12DaoZEmHypIO1bwl3U4l+xRUbn1QWdKh0n0tqOT2B1V1tzM/6ACVKQXVSbpAJZMKqvo2qBRtwhkqqB7bmvYHhso+BdUBu0IlSzpU9Uu6nUr2KaiggmpYr1Ap3YJKbn9QVbdNOkMFlSkF1UG7QiWTCiqooJrV6V8WC5UpBRVUUMlPflCZVFAdrmkPOkC1f2v6BYAq3waVLOlQWdKhmrek26kwsE9B5dYHlSUdKt3XcgmgcvuDqrrb1AcdoDKloDpQF5cAKpMKqvo2lwCqaNPPUEGVb7kEUNmnoKrP1zNQWdKh6l/S7VRQ2aegggqqYb26BFCls09B5fYHVXebM1RQxVG5BFClc4YKKvsUVFBBNazRL4uFypSCCiqopuYMFVQmFVTledABKlMKKqigsqQLKpMKqr4lfbkKUCXbXAKo3PqgsqRDNS/7FFR2Kqi6c4YKKks6VP150AEqkwoqSzpU03KGCqp0yyWAyj4FVX3eQwWVSQVV/5Jup4LKlIIKKqgs6YLqvuxTULn9QdWdl8VClUflEkCVzhkqqOxTUEEF1bA86ACVKQUVVFANzCPuUJlUUJXnQQeoTCmooILKki6oTCqo+pb05SpAlWxzCaBy64PKkg7VvOxTUNmpoOrOGSqoLOlQ9edBB6jsU1C5/UE1LWeooEq3XAKo3Pqgqs97qKAyqaDqX9LtVFCZUlB1t7kEUKVzhgqqePYpqOxUUJXvU14WC5UlHar6nKGCyj4FFVRQTcuDDlClWy4BVG59UNXn6xmoTCqo+pd0qKAypaCCCipLuqAyqaCCCqoz5wwVVKYUVJZ0qAa2fPxQxXcqHz9UybwsFipLOlT9edABKvsUVG5/UE3LGSqo0i0fO1RufVDV52WxUJlUUPUv6XYqqEwpqLrbfORQpXOGCqp49imo7FRQle9THnSAypIOVX3OUEFln4IKKk1D5UEHqNItHzVUbn1Q1efrGahMKqj6l3SooDKloIJKw1BZ0qEyqaCCSsNQOUMFlSkFlSVdJpWgggqqsrwsFipTCqr+POgAVTy3Pqjc/qAqzxkqqNItHy1U9imo6vP1DFSWdKj6l3Q7FVSmFFSWdA1DZUmHKp59Cio7FVTd3TzoAJUpBVV9zlBBZVJBBZWmofKgA1Tplo8TKrc+qOrz9QxU8exTUMWXdDsVVPYpqKDSMFSWdKhMKqig0jBUXhYLlSkFlSVdJpWgggqqsrwsFipTCqr+POgAVTy3Pqjc/qAqz8tioUq3fHxQ2aegqs/XM1BZ0qHqX9LtVFCZUlBZ0jUMlSUdqnj2KajsVFB152WxUJlSUPXnDBVUJhVUUGkaKg86QJVu+cigcuuDqj5fz0AVzz4FVXxJt1NBZZ+CCioNQ/Xq44IqnX0KKrc/qLrzslioTCmo+vN/0qEyqaCCSsNQeVksVKYUVFBpICo/+UFlUkFVnpfFQpVu+YigSrf5iKCypKselX0KqviSbqeCyj6lblRufVBZ0tWPyj4FldufulF5WSxUppT6UXlZLFQmlfpRbT4aqKI5QwVVuuVjgco+pXpUvp6BypKuclTOUEFlnxJUmofKy2KhimefgsrtT92ovCwWKlNK/aj8n3SoTCpBpWGovCwWKlNKUGkgKj/5QWVSqRyVBx2gSrd8DFCl23wMUFnSVY/KPgVVfEm3U0Fln1I3Krc+qCzp6kdln4LK7U/dqLwsFipTSv2ovCwWKpNK/ag2lx+qaM5QQZVuufRQ2adUj8p7qKAyqVSOyhkqqEwpQaV5qCzpUMWzT0Hl9qduVF4WC1UelUsOVTpnqKCyTwkqDUPlZbFQmVKCSgNRecQdKpNK5ag86ACVKSWoNA+VJR0qk0rlqDzoAFW6zWWGyq1P9ags6VDFs09BZadSNypnqKCypKsflQcdoDKp1I/KPgVVNmeooEq3XF6o7FOqR+U9VFCZVCpH5QwVVKaUoNI8VJZ0qOLZp6By+1M3Ki+LhSqPymWFKp0zVFDZpwSVhqHyoIPiqEwpQaV+VB5xl0mlclQedFAaFVCCSv2oLOkyqQSVhqFyhkpxVKaU4qgs6YqjWi6l4juVS6kkKmeoFEdlSVcclQcdFEfl1ie3P5WjcoZKaVTLJVQalSmlOCrvoZJJpXJUXharNCpTSnFUm8unNCpnqBRHZZ+SnUrdqDzooDwql05pVM5QKY7KPiWoVI7Kgw5Ko1oum9Ko3PoUR+XrGZlUKkflQQelUQElqNSPypIuk0pQaRgqZ6gUR2VKKY7Kkq44quVyKb5TuVxKovKyWMVRWdIVR+VBB8VRufXJ7U/lqJyhUhrVcpmURmVKKY7Ky2JlUqkclZfFKo3KlFIc1eYSKY3KGSrFUdmnZKdSNyoPOiiPyuVRGpUzVIqjsk8JKpWj8qCD0qiWS6M0Krc+xVH5ekZxVPYpZVE5Q6U0KvuUoFI/Kku6TCpBpWGonKFSHJUppTgqS7pMKkGlYai8LFZxVKaU4qg86KBIvwkwAMm8Y3EA1hFmAAAAAElFTkSuQmCC" />')
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