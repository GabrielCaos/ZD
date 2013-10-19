<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '', true, 'right' ); ?></title>

<!-- media-queries.js -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!-- html5.js -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link href="<?php echo get_template_directory_uri(); ?>/font/stylesheet.css" rel="stylesheet" type="text/css" />	
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/media-queries.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<meta name="viewport" content="width=device-width" />
 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link href='http://fonts.googleapis.com/css?family=Exo:400,800' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Exo:400,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Federo' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll">

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<div id="actLogo">
				<a href="http://www.actdesign.org" target="_blank">
					<img alt="ACT" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAWCAMAAACynuG2AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRQTFRFbzYXOR4PpE0fgoODEQ0JVCoTiUEbQ0VFLBgNYTAVsVMhRyQRwMHBlkcdFBcXHxML0NHRYmRkvlgjkZOTfDsZIyYmMzY24ODgUlVVoaKicnR0BAcHIm1ECQAAAShJREFUeNrslNtugzAMhp2Dc4YAha6b3/89ZwdareqoOo3LRkpCjPLJvw8BOnLAm/am/Z8WDqXp+6PNf6eVfRq+SPP+LNvivR+8l88MQWgWo+hVPFbluZ0pgNqj9cPnVzkRmQ9jZDIkOXRRU5giakdzBwDiK9tz54gwZed2aHKfyvlcbkqj/LeaEjsCqWq7KXeRty5TYkMXfqeVnpeLMeONtl7XylFIIK7M2QqtRVJB239ofaT5B1plGkyKVMfhmqf6Iq0pHc0y9FeaRIkg0hRFEm6mTWl+TuMsjOVkaBx4kcnRBgUcHEyoOOrISUhKsjCBct1zGsu8LP3CWKmOtUIQmkc1Atds4AKprUIsgmKlkoBqD+nTGY/q+hiz04e9IRXvmmAb3wIMAAG7nX2lmuZqAAAAAElFTkSuQmCC" />
				</a>
			</div>

			<div id="instaShare">
				<a href="http://www.instagram.com/zderrejota" target="_blank">
					<img alt="insta" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6M0Y0QkYyN0QzN0FFMTFFMzgzRTRERkM1NUIyREJCRTUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6M0Y0QkYyN0UzN0FFMTFFMzgzRTRERkM1NUIyREJCRTUiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozRjRCRjI3QjM3QUUxMUUzODNFNERGQzU1QjJEQkJFNSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozRjRCRjI3QzM3QUUxMUUzODNFNERGQzU1QjJEQkJFNSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv0s3/oAAAKqSURBVHjapJNPSBRxFMe/s39GZ//kZqKutILpruufKLfdJYXK/lBRIUYQXfLUJegURNApEqIORfRHKA9dAwM1WMLwllRq4IbVIrhm6q6r4+7szM7MzuzMzjSrsN3rHd6Dx/u8977vx4/QdR3/apaSOzYwCG8i0p/s6j1vpeucoc3XNebafQWrzYqCrELgBKIgSubkVpZjKuue6P7jU+9f3dmBXdHYhYddmdGXN3sxP1yBdp2C4nGhwkFBVzWoDIuhyAxiGQkNTu6Si3ScNbAJUwmuj88/3tPoBtlQBUK3QBd4mHIMKFmAtJEEqar4lc1ho+jCLm8ApqWpofLaCXHF/iNOYPnDV6xMM8g7KdibuvFzS4TH0wI+PgdPnoGuCxDnUxAyDFWGA9f7+Ud5M9L3x9AXbsXndCcmI9/RfOo0VmcmcdhiwrO3Y7CaCKSzDEYjE2wZDoVD2kC4G5yoYzm+gNtXrsHZ2oJDdBMymo6RT7O4dfcefP6O7Suv03SxFLc1p1PrREu7D4FgELH5BSMjoaooI/XuC9wZHo0HAxgZH98GxfQyNhJrRHmyphUhpJKw1zfBXmHa6b6ZgqokYRFdcLZ1oLbKBUWkIYssFEX++86qcc2CkbApAsKBdgT8bYgrJBxeH5DbRA1Lo7bSqJM48FzWqFVQXltTVVItFMBu0Wj0NuPG1Ys44qmBLZOGp6igr7cHB4Kd4NgMpLyIoiJby5MlSbTqMg9B02B3OBE62gMmm0F8cQnuvX6cPHcClI0Cy3LQ8iwkka8sw7O/hQc90ennbv9+CEaT6moH+i/3Ic8LoOwUzKQFLJ0wNPNYjM7hW0ofLMMxafeLp28+2oLN38+QNrvFZCE1kiQJgoBeMORIkgxZypt4LleIroljq5RvuMQR//Or/ggwADJyO+3lXAZZAAAAAElFTkSuQmCC" />
				</a>
			</div>
			<div id="faceShare">
				<a href="http://www.facebook.com/errejotazd" target="_blank">
					<img alt="face" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAYAAADJViUEAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RkRDNDY2RUYzN0E5MTFFMzg4MjFGMEFDMEVFQjgwMjAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RkRDNDY2RjAzN0E5MTFFMzg4MjFGMEFDMEVFQjgwMjAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGREM0NjZFRDM3QTkxMUUzODgyMUYwQUMwRUVCODAyMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGREM0NjZFRTM3QTkxMUUzODgyMUYwQUMwRUVCODAyMCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pt4kJAQAAAIoSURBVHjapJNNaBNBGIbfmd3sZjfdlrYm3Vh7KraxFitSKYI/FQVPnqoiHsWrCII9Cvaml4qgByl4EAShF0M0px6UKogFC4KU1qaiLdFogsbtZrO7M+PuUtSWxIPOMH8wz7zfN/MOEULgX4scdrMT58aThfyQp3c0P0kIEg7Es+G1dNeswVPTJFQuXGgXiqKAbUUJBWUu4nYFNAb4dcDVDQhZQ9VycpGyFzOKknDTDHQTS5kfEA7e9J2/vqiMPEt3d/KBhZuTytpcBgnzk/y3nGLWF6wev3G5tP/KJCtW4e5pBSs9vkSWZzNQCZrCkvDhaq14LXbdTxGGw0sTt9Rc/gTltR7WmkSYIW0EciIjwavoYFW8fDGnvlspw1yevrij8LZPdioal+O/b3trMbwSXm0bu7PYfijfqyXK+9I1zPRfHV3vsvSDxbv3dOtjly11NlbWeB0flP6HT+iRHCOSY6rreM73Pn2fPpZXZckQgjdX/h5L4kD5wVRv6dFaVj97en7w6Nexz+NT6srMEDShs5iBMOmGynWiwPRWdw7786PC9/WKqyLDlk5mWHE49IUAaa5MweFQHTbigU8oUyiHRY2iJ8kpkBAUG/siM7hK6CYSnbm5/TIbQkxszDmoZysR7MfbZAQ2FA3w8MlDpQAzo3UQNg8C9o3tXhT2N3PkGl3IDngtbX/8GD+oAKO8SoOZLeK3faL3CF/ASaScH7vPZMn/fMmfAgwA8SHn4N3tmlkAAAAASUVORK5CYII=" />
				</a>
			</div>

			<div id="zdLOGO">
				<a href="<?php echo get_home_url(); ?>/#home">
					<img alt="ZD" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABGAAD/4QO2aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjMtYzAxMSA2Ni4xNDU2NjEsIDIwMTIvMDIvMDYtMTQ6NTY6MjcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcFJpZ2h0cz0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3JpZ2h0cy8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBSaWdodHM6TWFya2VkPSJGYWxzZSIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJDMDczMzhEQzU1M0Y5MzYxRDVDMTAxQkEyMzUxNUM0NCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpDMUU3NTk2MDE1RDQxMUUzQjQ5NkI4MTg1RTMxRDUxNiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpDMUU3NTk1RjE1RDQxMUUzQjQ5NkI4MTg1RTMxRDUxNiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjMxMkNBQzkxMEZBNzExRTNCMEU1RUQyMDQ3QzIxQ0IwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjMxMkNBQzkyMEZBNzExRTNCMEU1RUQyMDQ3QzIxQ0IwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABAMDAwMDBAMDBAYEAwQGBwUEBAUHCAYGBwYGCAoICQkJCQgKCgwMDAwMCgwMDQ0MDBERERERFBQUFBQUFBQUFAEEBQUIBwgPCgoPFA4ODhQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU/8AAEQgAJgAwAwERAAIRAQMRAf/EAJ8AAAIDAQEAAAAAAAAAAAAAAAAHBAUGAwgBAAMBAQEBAAAAAAAAAAAAAAAEBgUDAgcQAAEDAgUCAwcDBQAAAAAAAAECAwQFBgARMRIHIhMhURRBYZGhMkJicoIjorKUxAgRAAEDAgAGDAsJAAAAAAAAAAIAAQMEBfARIRIiMjFRYZHhQmJy4hM1BnGB8VKS0iMz01QVQaHRgqLyQxQW/9oADAMBAAIRAxEAPwDxRZ9vUW4pj0at15m3o7TXcbkvt9wOL3AbBucbA8Dn9WFKyoOEWcAc/Bg61LdRxVBuMkoxc5bIcV2GrTkunfuZbH+1jI+qVPy5b/RVD9BofnA9HpqS9wpR10KoXBTrzjToUBt1bjrcdPZ3tJ39suIkLyUen7Trjy16k60YzhcXLd4F0LuzD/XKaOoEhDk9JQ7c4ip9XtWBdVYumLQ49QU42ymU0gN7m3HEbe64+2Nx7ZOWWmO1TdjjneEInNx2vI+2lqHu9HNTDPJOMTF537mUwcHw6iFt2xelKrE5A3iI2pCSrL3tOvH+nC/1sg97CQNt+VmTX+WGT3FQEj4cokr61RKpbtRdpVXjqjVBk5ONL8joUkZgg+wjFDDLHMDED42dR9TTSU8hRyNmuKq8dUqrig0ZyvVaJSW3W46pbqGlSX1BDLSScitZVlp89NccppWjByfLiTVLTlUSjGOTOTE5TuOn0yJG4xtVe2h0fIVJ5J8ZMtJ3ELI12q6lfn+gYw7XTGZPVS657G42H3eFVV+rY4xGig1I9blFh+pdrpOXANnjzqDv90zHKl7Tk5vqrvX9hQc/4iU8WXKgyW5cN1TEllQWy82ShaFDQgjTFKQsTYnys6hwMgLOHI6dF+Ot35xVSL6daQK9THRDqLyAE70FXbVnl5qLbg8t6sS1Az0laUDahZWw328SvrsTXC2R1b+8DRJI8AqOQ8SdBiqXz5OZbMriOyilx5pVz3WyUy6TIZ7vZjbFhK8wtBQtIcVnvCkqUrLb0E4m2IbhUbGhE+R2fZfDDKrkhKz0mt7adtIc3VHDDRSZJKiVKOaj4knFIoZOC7DlwLZqfOc6fnKxM0nac3N9VXdw7Dp+f8RJ3FMoROiIhVL/AOd6h6rpNaqKFQwfuSh5rT/HXiYJ8+6Ni4g5d5/xV6DdVYCzv5D0fSH1VW8I29RqncjtVrcphpqkBt+NFkLS2XXlE7FdeqG9u4+/bhi9zyxw5oM+nsvtNwpLuxRwzVPWSu3s+Lu9FaC7OMrlu+uya1NuSid2Qra0x6pzYyyn6Gk/x6AfE+OE6S6Q08TRjGeTc4VqXCxVVZMUxTRaXK6Kz8jgytx2HX1V+iEMoU4oepcHSkZ6lrLDY3yMnxZh73Cs0+60wjndbF6XRWxi2dOv7h62KTRZURuTDfdkP+ocUEjat5JR/Ghw7utPgRjMKsCkr5SkZ8Tt9niW7HbZLhaIY4iHGJcb8yoonBiKG6KhfdfgU+jtdbiI7qi66B9qS6hGWf4havxw6d961s2ACIt3gxrMj7q9SWdVyhGGHnYlneT77h3Q/Do1vt+mtSjI7VPZy2dxSRs7pT7OkZIB8fjh62UJQM5yZZD2VlXy6jVEMcOjDHqpb42FMIwIRgQjAhGBCMCF/9k=">
				</a>
			</div>

			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		
			<div class="nav-collapse collapse">
				<ul id="nav-list" class="nav pull-right cssMenu">
					<li><a href="<?php echo get_home_url(); ?>/#home">Home</a></li>
					<li><a href="<?php echo get_home_url(); ?>/#colecao">Coleção</a></li>
					<li><a href="<?php echo get_home_url(); ?>/#catalogo">Catálogo</a>
						<ul id="looks_drop" class="drop">
							<li id="looks_maculino"><a href="<?php echo get_home_url(); ?>/#catalogo">Masculino</a></li>
							<li id="looks_feminino"><a href="<?php echo get_home_url(); ?>/#catalogo">Feminino</a></li>
						</ul>
					</li>
					<li><a href="<?php echo get_home_url(); ?>/#zd">ZD</a></li>
					<li><a href="<?php echo get_home_url(); ?>/#lojas">LOJAS</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path('blog') ); ?>">Blog</a></li>
				</ul>
			</div>
		
		</div>
	</div>
</div>

<div id="body-container">

<?php wp_head(); ?>