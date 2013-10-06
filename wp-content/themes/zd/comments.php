<?php

if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<div class="post-titulo-container post-link">
			<h1 class="comentario-titulo">
				<?php
					printf( _n( 'Um comentário para &ldquo;%2$s&rdquo;', '%1$s comentários para &ldquo;%2$s&rdquo;', get_comments_number(), 'twentytwelve' ),
						number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
			</h1>
		</div>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'zd_comment', 'style' => 'div',  ) ); ?>
		</ol>

		<?php
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comentários estão fechados.' , 'twentytwelve' ); ?></p>
		<?php endif; ?>

	<?php endif;?>

	<?php comment_form(); ?>

</div>