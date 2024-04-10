<footer class="py-4 page-footer">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3 p-0">
                <div class="logo d-flex align-items-start justify-content-center h-100">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    
                            <?php  
                                
                                if ( has_custom_logo() ) { 

                                    the_custom_logo();

                                } else {  
                                        
                            ?>

                                    <span class="m-0"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>

                            <?php

                                } 

                            ?>
                            
                        </a>
                </div>
            </div>

            <div class="col-md-3 my-4 my-md-0 p-0">
                <ul class="footer-nav text-center text-md-left">
                    
                    <?php

                        wp_nav_menu( array(
                            'theme_location'  => 'menu-2',
                            'container'       => FALSE,
                            'items_wrap'      => '%3$s',
                        ) );

                    ?>

                </ul>
            </div>

            <div class="col-md-3 p-0">
                <div class="text-center text-md-left">
                    <?php dynamic_sidebar( 'footer-1' ) ?>
                </div>
            </div>

            <div class="col-md-3 p-0">
                <div class="row m-0 smm">
                    <?php dynamic_sidebar( 'footer-2' ) ?>                 
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>