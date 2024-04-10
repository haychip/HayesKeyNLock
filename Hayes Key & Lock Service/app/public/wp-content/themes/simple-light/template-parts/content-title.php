<?php

    if ( $post ) {

        $simple_light_img_attachment = get_the_post_thumbnail_url(  $post->ID  );

    } else {

        $simple_light_img_attachment = false;

    }



    if ( is_single() || is_page() ) {

        $simple_light_title_text = get_the_title();

    } elseif ( is_search() ) { 
    
        $simple_light_title_text = get_search_query();
        $simple_light_query = new WP_Query( array( 's' => $simple_light_title_text ) );
    
    } else {

        if ( get_queried_object() ) {

            $simple_light_title_text = get_queried_object()->name;
            $simple_light_query = new WP_Query( array( 'category_name' => $simple_light_title_text ) );

        } else {

            $simple_light_title_text = '';

        }

    }


    if ( ! $simple_light_img_attachment ) {

        if ( is_category() || is_search() ) {

            if( $simple_light_query->have_posts() ) {

                while( $simple_light_query->have_posts() ) {
                    
                    $simple_light_query->the_post();

                    if( get_the_post_thumbnail_url(  $post->ID  ) ) {
                         
                        break;

                    }
                
                }

            }
            wp_reset_postdata();

        }

        if( ! $simple_light_img_attachment ) {

            $simple_light_img_attachment = isset( get_theme_mod( 'simple_light_options' )['default_post_attachment'] ) ? get_theme_mod( 'simple_light_options' )['default_post_attachment'] : '';

        }    
    } 
    $simple_light_img_attachment = apply_filters( 'simple_light_title_background', $simple_light_img_attachment );
?>

<div id='page-title-back' class="d-flex align-items-center py-5" style='<?php echo esc_attr( $simple_light_img_attachment ); ?>'>
    <div class="overlay-page-title"></div>
    <div class="container">
        <h1 class="text-left py-2 py-lg-0"><?php echo esc_html( $simple_light_title_text ); ?></h1>
        <div>
            <?php the_simple_light_breadcrumb(); ?>
        </div>
    </div> 
    <?php get_sidebar( 'smm' ); ?>  
</div>