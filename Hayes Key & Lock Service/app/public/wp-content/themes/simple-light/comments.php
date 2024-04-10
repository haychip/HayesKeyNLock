<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple_light
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if ( post_password_required() ) {

	return;

}

?>

<div id="comments" class="comments-area">
	<div class='container'>

		<?php

			if ( have_comments() ) :

		?>

				<h2 class="comments-title my-5">

					<?php

					$simple_light_comment_count = get_comments_number();

					if ( '1' === $simple_light_comment_count ) {
						
						echo esc_html__( 'One thought on ', 'simple-light' );
						echo '<span>' . esc_html( get_the_title() ) . '</span>';

					

					} else {
						
						echo esc_html( $simple_light_comment_count );
						echo esc_html__( ' thought on ', 'simple-light' );
						echo '<span>' . esc_html( get_the_title() ) . '</span>';

					}

					?>

				</h2><!-- .comments-title -->			
				<ol class="comment-list">
				
					<?php

					wp_list_comments( array(
						'style'      => 'ol',
						'short_ping' => true,
					) );

					?>

				</ol><!-- .comment-list -->
				<div class='comment-nav-pag' >
					<div class='d-flex justify-content-center pagination-block pagination'>
						<?php the_comments_pagination(); ?>
					</div>	
				</div>

				<?php

					// If comments are closed and there are comments, let's leave a little note, shall we?
					if ( ! comments_open() ) :

				?>
					
					<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'simple-light' ); ?></p>
					
					<?php

				endif;

			endif; // Check for have_comments().

		$simple_light_req = get_option( 'require_name_email' );
		$simple_light_aria_req = ( $simple_light_req ? " aria-required='true'" : '' );

		comment_form( array( 
			    'fields'=>  array(
						'author'  => '<div class="form-row lt-field-group"><div class="col" ><p class="comment-form-author">' .
									'<input id="author" class="form-control" name="author" type="text" placeholder="' . esc_attr__( 'Name', 'simple-light' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $simple_light_aria_req . ' /></p></div>',
						'email'   => '<div class="col" ><p class="comment-form-email">' .
									'<input id="email" class="form-control" name="email" type="text" placeholder="' . esc_attr__( 'Email', 'simple-light' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $simple_light_aria_req . ' /></p></div></div>',
						'cookies' => ''
				),

				'comment_field' => '<div class="form-row lt-field-group"><div class="col" ><p class="comment-form-comment"><textarea id="comment" class="w-100" name="comment" rows="8" placeholder="' . esc_attr__( 'Your comment', 'simple-light'  ) . '..." aria-required="true"></textarea></p></div></div>'

		) );

		?>
		
	</div>
</div><!-- #comments -->