<?php 

    get_header();

?>

       <section class="page-archive">

        <?php get_template_part( 'template-parts/content', 'title' ); ?>

            <section id='section-two'>
    
            <?php 

                if ( have_posts() ) { 
                    
            ?>

                    <div id='body' >

                    <?php 

                    $simple_light_blockcounter = 0;
                    while( have_posts() ) { 

                        the_post();

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
                    ?>

                        <!-- clear -->
                        <div class="clearfix"></div>
                    </div>
                    <div class='d-flex justify-content-center py-4 pagination-block'>

                    <?php

                        the_posts_pagination(
                            array(
                                'mid_size'  => 2,
                                'prev_text' => sprintf(
                                    '%s <span class="nav-prev-text">%s</span>',
                                    '',
                                    __( 'PREV', 'simple-light' )
                                ),
                                'next_text' => sprintf(
                                    '<span class="nav-next-text">%s</span> %s',
                                    __( 'NEXT', 'simple-light' ),
                                    ''
                                ),
                                'screen_reader_text' => ''
                            )
                        );
                    ?>

                    </div>

            <?php

                } else {

                    get_template_part( 'template-parts/content', 'none' );

                }

            ?>
            
            </section>
        </section>

<?php

    get_footer();