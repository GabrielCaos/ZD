<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

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
	
			<div id="zdLOGO">
				<a href="#home">
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
					<li><a href="#home">HOME</a></li>
					<li><a href="#colecao">COLEÇÃO</a></li>
					<li><a href="#catalogo">CATÁLOGO</a>
						<ul id="looks_drop" class="drop">
							<li id="looks_maculino"><a href="#catalogo">MASCULINO</a></li>
							<li id="looks_feminino"><a href="#catalogo">FEMININO</a></li>
						</ul>
					</li>
					<li><a href="#rodape">ZD</a></li>
					<!-- <li><a href="#blog">BLOG</a></li>
					<li><a href="#lojas">LOJAS</a></li> -->
					<!-- <li><a href="#rodape">CONTATO</a></li> -->
				</ul>
			</div>
		
		</div>
	</div>
</div>

<?php header('Access-Control-Allow-Origin: *'); ?>
<?php wp_head(); ?>