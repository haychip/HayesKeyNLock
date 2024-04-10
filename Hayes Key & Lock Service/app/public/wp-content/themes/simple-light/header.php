<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <?php if ( is_singular() && pings_open( get_queried_object() ) )  { ?>
        <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ) ; ?>" />
    <?php } ?>

    <?php wp_head(); ?>
</head>

<?php

    $simple_light_body_classes = get_body_class();
    $simple_light_display_body_classes = ' ';

    foreach ( $simple_light_body_classes as $simple_light_body_class ) {
        $simple_light_display_body_classes .= $simple_light_body_class . ' ';
    }

    if ( is_404() ) {
        $simple_light_display_body_classes .= "e404 ";
    }

?>

<body id='home' class="pre <?php echo esc_attr( $simple_light_display_body_classes ); ?>" >

 <?php wp_body_open(); ?>

    <!-- preload -->
        <div id="preload-container" >
            <div id="preload" >
                <div style='width:33%; border:2px solid black; '></div>
                <div style='width:33%; border:2px solid black; margin: 0px 2px; background: black;'></div>
                <div style='width:33%; border:2px solid black;'></div>
            </div>
        </div>
    <!-- /preload -->


         <?php
             $header_styles = '';
             $header_classes = '';

             if ( get_header_image() ) {
                 $header_styles .='background-image: url(' . get_header_image() . ');';
             }

             if ( is_404() ) {
                 $header_classes .= " e404";
             }

             if( !is_admin_bar_showing() ) {
                 $header_classes .= ' sticky-top';
             }

         ?>

        <header style="<?php echo esc_attr( $header_styles ) ?>" class="<?php echo esc_attr( $header_classes ) ?>">
            <div class="container-fluid py-3 px-md-5">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <div class="logo site-title">
                          
                                <?php  
                                    
                                    if ( has_custom_logo() ) { 
                                        the_custom_logo();
                                    } 
                                    
                                    if ( get_bloginfo( 'name' ) ) {                                      
                                        ?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <span id='bloginfo-name-1' class="m-0"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
                                            </a>
                                        <?php                                    
                                    } 
                                
                                ?>
                                                        
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <div role='button' aria-label='<?php esc_attr_e( 'site navigation', 'simple-light' ) ?>' id="MenuStarter">
                            <div class="MenuIn"><span class="MenuPart PartA"></span></div>
                            <div class="MenuIn"><span class="MenuPart PartB"></span></div>
                            <div class="MenuIn"><span class="MenuPart PartC"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="w-100" tabindex="-1">
                <ul class="list-group">

                    <?php

                        wp_nav_menu( array(
                            'theme_location'  => 'menu-1',
                            'container'       => FALSE,
                            'items_wrap'      => '%3$s',
                        ) );

                    ?>

                    <!-- search/widget  -->
                    <li class="menu-header text-right px-md-5 focus-l">
                        <ul class='h-100 p-0'>
                           <?php dynamic_sidebar( 'header-1' ) ?>
                        </ul>       
                    </li>
                </ul>
            </nav>
        </header>

    <!-- END HEADER. START CONTENT -->