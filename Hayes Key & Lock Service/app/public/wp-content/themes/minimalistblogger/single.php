<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package minimalistblogger
 */

get_header(); ?>

<div id="primary" class="featured-content content-area">
	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			if ( get_theme_mod( 'single_post_next_post_nav' ) == '1' ) : 
				echo '<div class="mb_singlepost_nav">';
				the_post_navigation( array(
					'prev_text'  => __( '← %title', 'minimalistblogger' ),
					'next_text'  => __( '%title →', 'minimalistblogger' ),
				) );
				echo '</div>';
			endif;


			// minimalistblogger_related_posts();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
