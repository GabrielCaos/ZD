<?php get_header(); ?>

<!-- MAIN CONTENT -->
<div class="container content container-fluid" id="home">



	<!-- HOME -->
	<div class="row-fluid">


  		<!--<div id="imgBG">
			<img src="<?php echo get_template_directory_uri(); ?>/img/zdBG.jpg">
		</div>-->

		<div id="primary" class="site-content">
		<div id="content" role="main">
			<div id="imgs-container">
				<div id="img-oppened"></div>
			</div>
			<script>
			( function( $ ) {

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
		
	</div>
	
	
	
	<!-- ABOUT & UPDATES -->
	<div class="row-fluid" id="about">
	
			
			
			
		</div>
	
	
	
	
	
	<!-- SCREENSHOTS -->
	<div class="row-fluid" id="screenshots">
		
		<h2 class="page-title" id="scroll_up">
				Screenshots
				<a href="#home" class="arrow-top">
				<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-top.png">
				</a>
			</h2>
		
		<!-- SCREENSHOT IMAGES ROW 1-->
		<ul class="thumbnails">
			<li class="span3">
				<a href="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" rel="gallery" class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" alt="">
				</a>
			</li>
		
			<li class="span3">
				<a href="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" rel="gallery" class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" alt="">
				</a>
			</li>
			
			<li class="span3">
				<a href="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" rel="gallery" class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" alt="">
				</a>
			</li>
 
			<li class="span3">
				<a href="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" rel="gallery" class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" alt="">
				</a>
			</li>
		</ul>	
		
		<!-- SCREENSHOT IMAGES ROW 2-->		
		<ul class="thumbnails">
			<li class="span3">
				<a href="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" rel="gallery" class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" alt="">
				</a>
			</li>
			
			<li class="span3">
				<a href="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" rel="gallery" class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" alt="">
				</a>
			</li>
			
			<li class="span3">
				<a href="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" rel="gallery" class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" alt="">
				</a>
			</li>
			
			<li class="span3">
				<a href="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" rel="gallery" class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.jpg" alt="">
				</a>
			</li>
		</ul>
	</div>
	
	
	
	<!-- CONTACT -->
	<div class="row-fluid" id="contact">
	
		<h2 class="page-title" id="scroll_up">
				Contact
				<a href="#home" class="arrow-top">
				<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-top.png">
				</a>
			</h2>
		
		<!-- CONTACT INFO -->
		<div class="span4" id="contact-info">
			<h3>Contact Us</h3>
			<p>FlexApp is free and thus unfortunately we cannot provide basic support for it. We simply don't have the time to answer everyone's questions.</p>
			<p>However, you may contact us about general business inquiries or to report bugs in the template!<p>
			<p><a href="mailto:contact@trippoinc.com">contact@trippoinc.com</a></p>
		</div>
		
		<!-- CONTACT FORM -->
		<div class="span7" id="contact-form">
			<form class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Name</label>
						<div class="controls">
							<input class="input-xlarge" type="text" id="name" placeholder="John Doe">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email</label>
						<div class="controls">
							<input class="input-xlarge" type="text" id="email" placeholder="john@gmail.com">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="subject">Subject</label>
						<div class="controls">
							<input class="input-xlarge" type="text" id="subject" placeholder="General Inquiry">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="message">Message</label>
						<div class="controls">
							<textarea class="input-xlarge" rows="3" id="message" placeholder="Your message..."></textarea>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">SEND</button>
					</div>
				</fieldset>
			</form>
		</div>
		
	</div>
	
</div>

<?php get_footer(); ?>