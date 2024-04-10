<?php 

    get_header();

?>
    <!-- Banner -->
    <?php get_template_part( '/template-parts/slider' ); ?>
        
    <!-- Content Block #1 --> 
    <section id='body'>
        <section id='section-two'>
        
                <?php 

                    $simple_light_query = new WP_Query( array(
                        'category_name'  => isset( get_theme_mod( 'simple_light_options' )['first_block']['slug'] ) ? get_theme_mod( 'simple_light_options' )['first_block']['slug'] : '' ,
                        'posts_per_page' =>  isset( get_theme_mod( 'simple_light_options' )['first_block']['number_of_posts'] ) ? get_theme_mod( 'simple_light_options' )['first_block']['number_of_posts'] : 4 ,
                    ) );

                    if( $simple_light_query->have_posts() ) {
                        
                ?>

                    <div class='posts-container'>

                        <?php 

                            $simple_light_blockcounter = 0;
                            while( $simple_light_query->have_posts() ) {
                                
                                $simple_light_query->the_post();
                                get_template_part( '/template-parts/blocks' );
                                $simple_light_blockcounter+=1;

                                if( $simple_light_blockcounter % 6 == 0) {

                        ?>
                                <div class="clearfix"></div>
                            </div>
                            <div>

                        <?php

                                }    
                            }
                    }

                        wp_reset_postdata();
                    
                        ?>

                    <!-- clear -->
                    <div class="clearfix"></div>
                </div>
        </section>   
        <!-- Content Block #2 -->
        <section id='section-three' class='py-3'>
            <div class="container py-5">
            
                <?php 
                
                    if( have_posts() ) {
                    
                ?>

                    <?php while( have_posts() ) { 
                        
                        the_post(); 
                        
                    ?>
                        
                        <h2 id='page-title' class='mb-3'><?php the_title() ?></h2>   
                        <div class="row px-3 px-md-0">
                            <div class="col m-auto p-0">
                       
                                    <?php the_content() ?>   
                                    
                                <div class='d-flex justify-content-center py-4 pagination-block'>
                                   
                                    <?php

                                        wp_link_pages(
                                            array(
                                                'before' => '<nav class="navigation pagination" role="navigation"><div class="nav-links">' . esc_html__( 'Pages:', 'simple-light' ),
                                                'after'  => '</div></nav>',
                                            )
                                        );

                                    ?>

                                </div>
                            </div>              
                        </div>

                    <?php } 
                    
                    ?>

                <?php } 
                
                ?>
  
            </div>
        </section>
        <!-- Content Block #3 -->
        <section id='section-four'>
            <div class="row m-0">

                <?php 

                    $simple_light_query = new WP_Query( array(
                        'category_name'  => isset( get_theme_mod( 'simple_light_options' )['second_block']['slug'] ) ? get_theme_mod( 'simple_light_options' )['second_block']['slug'] : '' ,
                        'posts_per_page' => isset( get_theme_mod( 'simple_light_options' )['second_block']['number_of_posts'] ) ? get_theme_mod( 'simple_light_options' )['second_block']['number_of_posts'] : 6 ,
                    ) );


                    if ( $simple_light_query->have_posts() ) {

                        $simple_light_post_counter = 0;
                        $simple_light_section_counter = 1;
                        
                        while( $simple_light_query->have_posts() ) {
                            
                            $simple_light_query->the_post();

                            $simple_light_post_counter+=1;
                            if ( $simple_light_section_counter % 2 == 0 ) {

                                get_template_part( '/template-parts/blocks','second-big' );
                                        
                            } else {

                                get_template_part( '/template-parts/blocks','second-small' );

                            }

                            if ( $simple_light_post_counter % 3 == 0 ) {

                                if ( $simple_light_section_counter % 2 == 0 ) {

                                    echo '<div class="clearfix"></div></div><div>';

                                } else {

                                    echo '</div><div>';

                                }

                                $simple_light_section_counter+=1;

                            }
                        }
                    }

                    wp_reset_postdata();
                ?>
                
                <!-- </div> -->
            </div>
            <div class="clearfix"></div>
        </section>
        <section id='section-five' class="py-4" >
            <div class="container py-5">
                <h2 id='third-block-title'><?php ( isset( get_theme_mod( 'simple_light_options' )['third_block']['title'] ) ) ? print( esc_html( get_theme_mod( 'simple_light_options' )['third_block']['title'] ) ) : esc_html_e( 'Latest news', 'simple-light' ); ?></h2>
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <p id='third_block_text' class="text-center">
                            <?php 
                                    
                                if ( isset( get_theme_mod( 'simple_light_options' )['third_block']['text'] ) ) {
                                    echo esc_html( get_theme_mod( 'simple_light_options' )['third_block']['text'] );
                                } 
                            
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="owl-carousel" >

                    <?php 

                        $simple_light_query = new WP_Query( array(
                            'category_name'  => isset( get_theme_mod( 'simple_light_options' )['third_block']['slug'] ) ? get_theme_mod( 'simple_light_options' )['third_block']['slug'] : '',
                            'posts_per_page' =>  isset( get_theme_mod( 'simple_light_options' )['third_block']['number_of_posts'] ) ? get_theme_mod( 'simple_light_options' )['third_block']['number_of_posts'] : 6 ,
                        ) );

                        if ( $simple_light_query->have_posts() ) {
                            
                            while( $simple_light_query->have_posts() ) { $simple_light_query->the_post();
                        
                                get_template_part( '/template-parts/news' );
                        
                            }

                        }

                        wp_reset_postdata();

                    ?>

                </div>
            </div>
        </section>
    </section>   
<?php

    get_footer();
