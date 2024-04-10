<?php 

    get_header();

?>

    <section class="page-single entry-content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			
			<?php

				while ( have_posts() ) {

					the_post();

					get_template_part( 'template-parts/content' );

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

				}
			?>

		</article>   
    </section>
	
<?php

    get_footer();
