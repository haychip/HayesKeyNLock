<?php

    if ( !get_the_title() ) {

        $simple_light_title_post = 'Read post';

    } else {

        $simple_light_title_post = get_the_title();
        
    }

?>


<li class='search-item pb-2 my-2 border-bottom'>
    <p class="mb-1">
        <span class='num-posts'></span> 
        <a href='<?php the_permalink() ?>' title="<?php esc_attr_e( 'Permalink to ','simple-light' ); echo esc_attr( $simple_light_title_post ); ?>" ><?php echo esc_html( $simple_light_title_post ); ?></a>
    </p>
    <p>
        <?php the_excerpt(); ?>
    </p>
</li>
 