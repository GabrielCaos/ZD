<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
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

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fade-slider.min.js"></script>

<link href='http://fonts.googleapis.com/css?family=Exo:400,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Federo' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll">

<!-- TOP MENU NAVIGATION -->
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
	
			<!-- <a class="brand pull-left" href="#">
			FlexApp
			</a> -->
			<div id="zdLOGO">
				<img src="<?php echo get_template_directory_uri(); ?>/img/zdLOGO.jpg">
			</div>

			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		
			<div class="nav-collapse collapse">
				<ul id="nav-list" class="nav pull-right">
					<li><a href="#colecao">COLEÇÃO</a></li>
					<li><a href="#catalogo">CATÁLOGO</a></li>
					<li><a href="#zd">ZD</a></li>
					<li><a href="#blog">BLOG</a></li>
					<li><a href="#lojas">LOJAS</a></li>
					<li><a href="#contato">CONTATO</a></li>
				</ul>
			</div>
		
		</div>
	</div>
</div>


<?php wp_head(); ?>
</head>