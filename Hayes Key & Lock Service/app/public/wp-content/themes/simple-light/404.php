<?php 

    get_header();

?>
    <!-- END HEADER. START CONTENT -->
    <section id='body' class="page-single">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-9 d-flex align-items-center justify-content-center">
                    <div>
                        <h1 class="e404 text-center">
                            <?php esc_html_e( '404', 'simple-light' ) ?>
                        </h1>
                        <p class="e404 text-center">
                            <?php esc_html_e( 'Sorry, that page doesn\'t exist', 'simple-light' ) ?>
                        <p>
                    </div>
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