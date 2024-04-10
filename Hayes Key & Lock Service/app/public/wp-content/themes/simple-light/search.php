<?php 

    get_header();

?>


    <section id='body' class="page-single">

        <?php get_template_part( 'template-parts/content', 'title' ); ?>

        <div class="container mt-5">
            <div class="row m-0">
                <div class="col-md-9 ">
    
                <?php 
                
                    if ( have_posts() ) { 
                    
                ?>
                        
                        <ul class='search-result'>

                            <?php 

                                while( have_posts() ) { 

                                    the_post();  
                                    get_template_part( '/template-parts/blocks', 'search' );
                                        
                                }
                                
                            ?>

                        </ul>
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

                </div>
                <!-- Sidebar -->
                <div class="col-md-3 my-5 mt-md-0">
                    <div id='sticky-sidebar' class="sticky-top text-dark">
                        <?php dynamic_sidebar( 'on_page_sidebar' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

    get_footer();