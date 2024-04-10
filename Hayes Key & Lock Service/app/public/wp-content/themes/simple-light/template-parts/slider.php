<section id='section-one'>
        <div class="main-banner">
            <div id="simple_light-captions" class="carousel slide" data-ride="carousel">
                  
                    <?php 

                        $simple_light_slider_tag            = isset( get_theme_mod( 'simple_light_options')['slider']['slug'])      ? get_theme_mod( 'simple_light_options')['slider']['slug']      : '' ;
                        $simple_light_slider_sort           = isset( get_theme_mod( 'simple_light_options')['slider']['sort'])      ? get_theme_mod( 'simple_light_options')['slider']['sort']      : 'date' ;
                        $simple_light_slider_effect_blur    = isset( get_theme_mod( 'simple_light_options')['slider']['effect'])    ? get_theme_mod( 'simple_light_options')['slider']['effect']    : false ;
                        $simple_light_slider_text_button    = isset( get_theme_mod( 'simple_light_options')['slider']['text_link']) ? get_theme_mod( 'simple_light_options')['slider']['text_link'] : 'more...' ;
                        $simple_light_slider_disable        = isset( get_theme_mod( 'simple_light_options')['slider']['disable'])   ? get_theme_mod( 'simple_light_options')['slider']['disable']   : false ;
                        $simple_light_slider_asc_desc       = isset( get_theme_mod( 'simple_light_options')['slider']['sort_asc'] ) ? get_theme_mod( 'simple_light_options')['slider']['sort_asc']  : true ;


                        if( $simple_light_slider_asc_desc ) {
                            $simple_light_order = 'ASC';
                        } else {
                            $simple_light_order = 'DESC';
                        }


                    $simple_light_slide_query = new WP_Query( array(
                            'tag'       => $simple_light_slider_tag,
                            'orderby'   => $simple_light_slider_sort,
                            'order'     => $simple_light_order
                        ) );

                        
                       if( $simple_light_slide_query->have_posts() && !$simple_light_slider_disable ) {
          
                            echo '<ol class="carousel-indicators">';
                           
                                $simple_light_slide_counter= 0;
                                while( $simple_light_slide_query->have_posts() ) {
                                    
                                    $simple_light_slide_query->the_post();
                                    ?> 
                                        <li data-target="#simple_light-captions" data-slide-to="<?php echo esc_attr( $simple_light_slide_counter ); ?>" class="<?php ( $simple_light_slide_counter == 0 ) ? print( 'active' ) : '' ; ?>">
                                            <a href="#"></a>
                                        </li>
                                    <?php
                                    $simple_light_slide_counter += 1;

                                }

                            echo '</ol>
                                    <div class="carousel-inner">';

                                $simple_light_slide_counter = 0;
                                while( $simple_light_slide_query->have_posts() ) {
                                
                                    $simple_light_slide_query->the_post();
                                    $simple_light_slide_background = get_the_post_thumbnail_url(  $post->ID  );

                                    if ( ! $simple_light_slide_background ) {
                                        $simple_light_slide_background = isset( get_theme_mod( 'simple_light_options' )['default_post_attachment'] ) ? get_theme_mod( 'simple_light_options' )['default_post_attachment'] : '';
                                    }     
                                    
                                    $simple_light_slide_background = apply_filters( 'simple_light_slider_background', $simple_light_slide_background );

                                    ?>
                                        <div style='<?php echo esc_attr( $simple_light_slide_background ); ?>' class="carousel-item <?php ( $simple_light_slide_counter == 0 ) ? print( 'active' ) : '' ; ?>">
                                            <div class="carousel-caption">
                                                <h5 class="mb-1 font-weight-bold slide-content <?php ( $simple_light_slider_effect_blur ) ? 'blured' : '' ; ?>"><?php the_title(); ?></h5>
                                                <?php if( has_excerpt() )  { ?>
                                                <p class="font-weight-bold slide-content"><?php echo esc_html( get_the_excerpt() ); ?></p>
                                                <?php } ?>
                                                <p class="Button pt-3"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => __( 'Permalink to ','simple-light' ) ) ); ?>" ><?php echo esc_html( $simple_light_slider_text_button ); ?></a></p>
                                            </div>
                                        </div>

                                    <?php
                                    $simple_light_slide_counter += 1;

                                }
                            
                            echo '</div>';

                        }
    
                        wp_reset_postdata();
 
                    ?> 

            </div>
        </div>
    </section>