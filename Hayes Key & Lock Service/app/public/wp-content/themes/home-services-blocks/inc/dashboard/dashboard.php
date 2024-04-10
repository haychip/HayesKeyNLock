<?php

add_action( 'admin_menu', 'home_services_blocks_gettingstarted' );
function home_services_blocks_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'home-services-blocks'), esc_html__('Theme Documentation', 'home-services-blocks'), 'edit_theme_options', 'home-services-blocks-guide-page', 'home_services_blocks_guide');
}

function home_services_blocks_admin_theme_style() {
   wp_enqueue_style('home-services-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'home_services_blocks_admin_theme_style');

if ( ! defined( 'HOME_SERVICES_BLOCKS_SUPPORT' ) ) {
define('HOME_SERVICES_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/home-services-blocks/','home-services-blocks'));
}
if ( ! defined( 'HOME_SERVICES_BLOCKS_REVIEW' ) ) {
define('HOME_SERVICES_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/home-services-blocks/reviews/','home-services-blocks'));
}
if ( ! defined( 'HOME_SERVICES_BLOCKS_LIVE_DEMO' ) ) {
define('HOME_SERVICES_BLOCKS_LIVE_DEMO',__('https://www.ovationthemes.com/demos/home-services-blocks-pro/','home-services-blocks'));
}
if ( ! defined( 'HOME_SERVICES_BLOCKS_BUY_PRO' ) ) {
define('HOME_SERVICES_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/wordpress/home-maintenance-wordpress-theme/','home-services-blocks'));
}
if ( ! defined( 'HOME_SERVICES_BLOCKS_PRO_DOC' ) ) {
define('HOME_SERVICES_BLOCKS_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-home-services-blocks-pro-doc/','home-services-blocks'));
}
if ( ! defined( 'HOME_SERVICES_BLOCKS_FREE_DOC' ) ) {
define('HOME_SERVICES_BLOCKS_FREE_DOC',__('https://www.ovationthemes.com/docs/ot-home-services-blocks-free-doc/','home-services-blocks'));
}
if ( ! defined( 'HOME_SERVICES_BLOCKS_THEME_NAME' ) ) {
define('HOME_SERVICES_BLOCKS_THEME_NAME',__('Premium Home Services Blocks Theme','home-services-blocks'));
}

/**
 * Theme Info Page
 */
function home_services_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$home_services_blocks_theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $home_services_blocks_theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'home-services-blocks'); ?><?php echo esc_html($home_services_blocks_theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( HOME_SERVICES_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'home-services-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( HOME_SERVICES_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'home-services-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','home-services-blocks'); ?></h3>
					<p><?php $home_services_blocks_theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $home_services_blocks_theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','home-services-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','home-services-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','home-services-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','home-services-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','home-services-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','home-services-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','home-services-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','home-services-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( HOME_SERVICES_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','home-services-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(HOME_SERVICES_BLOCKS_THEME_NAME); ?></h3>
				<img class="home_services_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $home_services_blocks_theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( HOME_SERVICES_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'home-services-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( HOME_SERVICES_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'home-services-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( HOME_SERVICES_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'home-services-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'home-services-blocks');?> </li>                 
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'home-services-blocks');?> </li>
					<li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'home-services-blocks');?> </li>
               <li class="upsell-home_services_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'home-services-blocks');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>