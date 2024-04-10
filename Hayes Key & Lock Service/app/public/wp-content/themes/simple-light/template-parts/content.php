<?php get_template_part( 'template-parts/content', 'title' ); ?>

<div id='body' class='pt-5'>
    <div class="container pt-5">
        <div class="row m-0">
            <div class="main-content-block col p-0">
                <div class="text-content-block">
                    <?php the_content(); ?>
                </div>

                <?php

                    if ( is_single() ) {

                        if( get_the_tag_list() ) {

                ?> 
                            <div class="tag-block mt-4 py-2">
                                <h6>
                                    <?php esc_html_e('Post tags', 'simple-light') ?>:
                                </h6>
                                
                <?php

                        }

                        the_tags('<div class="tag-item">','</div><div class="tag-item">','</div></div>') ;

                        single_entry_posted();

                    }

                    the_meta();

                    if ( get_edit_post_link() ) { 
                    
                ?>

                    <footer class="entry-footer">  

                        <?php 
                        
                            edit_post_link( 
                                __( 'Edit', 'simple-light' ), 
                                '<span class="edit-link edit-content"><i class="fas fa-pen-fancy pr-2"></i>', '</span>'); 

                        ?>

                    </footer>

                <?php 

                    } 
                    
                ?>

                <div class='d-flex justify-content-center py-4 pagination-block'>

                    <?php

                        wp_link_pages(
                            array(
                                'before' => '<nav class="navigation pagination"><div class="nav-links">' . esc_html__( 'Pages:', 'simple-light' ),
                                'after'  => '</div></nav>',
                            )
                        );

                    ?>

                </div>

                <?php 
                
                    if ( is_single() ) { 
                    
                ?>

                    <div class='the-post-navigation pt-5'>

                        <?php

                            the_post_navigation(
                                array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next Post -', 'simple-light' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . esc_html__( 'Next post:', 'simple-light' ) . '</span>' .
                                        '<span class="post-title">%title</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous Post -', 'simple-light' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'simple-light' ) . '</span>' .
                                        '<span class="post-title">%title</span>',
                                )
                            );

                        ?>

                    </div>

                <?php 
                
                } 
                
                ?>

            </div>
            <!-- Sidebar -->
            <?php 
            
                if ( is_active_sidebar( 'on_page_sidebar' ) ) { 
                    
            ?>

                <div class="sidebar col-md-3 my-5 mt-md-0">
                    <div id='sticky-sidebar' class="sticky-top text-dark">
                        <?php dynamic_sidebar( 'on_page_sidebar' ); ?>
                    </div>
                </div>

            <?php 
        
            } 
            
            ?>

        </div>
    </div>
</div>    
    
   
