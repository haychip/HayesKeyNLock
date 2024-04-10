<?php 
add_action( 'wp_enqueue_scripts', 'simplebasics_enqueue_styles' );
function simplebasics_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 


function simplebasics_customize_register( $wp_customize ) {


	$wp_customize->add_setting( 'toggle_tagline', array(
		'default' => 0,
		'sanitize_callback' => 'simplebasics_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'toggle_tagline', array(
		'label'    => __( 'Show Tagline', 'simplebasics' ),
		'section'  => 'title_tagline',
		'priority' => 1,
		'settings' => 'toggle_tagline',
		'type'     => 'checkbox',
	) );
	/* New Section */
	$wp_customize->add_section( 'sidebar_settings', array(
		'title'      => __('Sidebar Settings','minimalistblogger'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_setting( 'sidebar_headline_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_headline_color', array(
		'label'       => __( 'Headline Color', 'minimalistblogger' ),
		'section'     => 'sidebar_settings',
		'priority'   => 1,
		'settings'    => 'sidebar_headline_color',
	) ) );

	$wp_customize->add_setting( 'sidebar_link_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_link_color', array(
		'label'       => __( 'Link Color', 'minimalistblogger' ),
		'section'     => 'sidebar_settings',
		'priority'   => 1,
		'settings'    => 'sidebar_link_color',
	) ) );

	$wp_customize->add_setting( 'sidebar_text_color', array(
		'default'           => '#333',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_text_color', array(
		'label'       => __( 'Text Color', 'minimalistblogger' ),
		'section'     => 'sidebar_settings',
		'priority'   => 1,
		'settings'    => 'sidebar_text_color',
	) ) );

	$wp_customize->add_setting( 'sidebar_border_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_border_color', array(
		'label'       => __( 'Border Color', 'minimalistblogger' ),
		'section'     => 'sidebar_settings',
		'priority'   => 1,
		'settings'    => 'sidebar_border_color',
	) ) );

	function simplebasics_sanitize_checkbox( $input ) {
		return ( ( isset( $input ) && true == $input ) ? true : false );
	}
}
add_action( 'customize_register', 'simplebasics_customize_register' );




if(! function_exists('simplebasics_customizer_css_final_output' ) ):
	function simplebasics_customizer_css_final_output(){
		?>

		<style type="text/css">
			.super-menu, #smobile-menu, .primary-menu, .primary-menu ul li ul.children, .primary-menu ul li ul.sub-menu { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
			.main-navigation ul li a, .main-navigation ul li .sub-arrow, .super-menu .toggle-mobile-menu,.toggle-mobile-menu:before, .mobile-menu-active .smenu-hide { color: <?php echo esc_attr(get_theme_mod( 'navigation_text_color')); ?>; }
			#smobile-menu.show .main-navigation ul ul.children.active, #smobile-menu.show .main-navigation ul ul.sub-menu.active, #smobile-menu.show .main-navigation ul li, .smenu-hide.toggle-mobile-menu.menu-toggle, #smobile-menu.show .main-navigation ul li, .primary-menu ul li ul.children li, .primary-menu ul li ul.sub-menu li, .primary-menu .pmenu, .super-menu { border-color: <?php echo esc_attr(get_theme_mod( 'navigation_border_color')); ?>; border-bottom-color: <?php echo esc_attr(get_theme_mod( 'navigation_border_color')); ?>; }
			#secondary .widget h3, #secondary .widget h3 a, #secondary .widget h4, #secondary .widget h1, #secondary .widget h2, #secondary .widget h5, #secondary .widget h6 { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_color')); ?>; }
			#secondary .widget a, #secondary a, #secondary .widget li a , #secondary span.sub-arrow{ color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
			#secondary, #secondary .widget, #secondary .widget p, #secondary .widget li, .widget time.rpwe-time.published { color: <?php echo esc_attr(get_theme_mod( 'sidebar_text_color')); ?>; }
			.swidgets-wrap .sidebar-title-border, #secondary .swidgets-wrap, #secondary .widget ul li, .featured-sidebar .search-field { border-color: <?php echo esc_attr(get_theme_mod( 'sidebar_border_color')); ?>; }
			.site-info, .footer-column-three input.search-submit, .footer-column-three p, .footer-column-three li, .footer-column-three td, .footer-column-three th, .footer-column-three caption { color: <?php echo esc_attr(get_theme_mod( 'footer_text_color')); ?>; }
			<?php if ( get_theme_mod( 'toggle_tagline' ) == '1' ) : ?>
				p.site-description {display:block;}
			<?php endif; ?>
			body, .site, .swidgets-wrap h3, .post-data-text { background: <?php echo esc_attr(get_theme_mod( 'website_background_color')); ?>; }
			.site-title a, .site-description { color: <?php echo esc_attr(get_theme_mod( 'header_logo_color')); ?>; }
			.sheader { background: <?php echo esc_attr(get_theme_mod( 'header_background_color')); ?> }
		</style>
	<?php }
	add_action( 'wp_head', 'simplebasics_customizer_css_final_output' );
endif;


function simplebasics_google_fonts() {
	wp_enqueue_style( 'simplebasics-google-font-rubik', '//fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;1,400;1,500', false );
	wp_enqueue_style( 'simplebasics-google-fonts', '//fonts.googleapis.com/css2?family=Playfair+Display&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'simplebasics_google_fonts' );



	/**
	 * This file represents an example of the code that themes would use to register
	 * the required plugins.
	 *
	 * It is expected that theme authors would copy and paste this code into their
	 * functions.php file, and amend to suit.
	 *
	 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
	 *
	 * @package    TGM-Plugin-Activation
	 * @subpackage Example
	 * @version    2.6.1 for child theme Lightweightly Blog for publication on WordPress.org
	 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
	 * @copyright  Copyright (c) 2011, Thomas Griffin
	 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
	 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
	 */

	require_once get_stylesheet_directory() . '/inc/class-tgm-plugin-activation.php';

	add_action( 'tgmpa_register', 'simplebasics_register_required_plugins' );

	function simplebasics_register_required_plugins() {
		$plugins = array(

			array(
				'name'      => 'Tables',
				'slug'      => 'superb-tables',
				'required'  => false,
			),

			array(
				'name'      => 'Recent Posts with Thumbnails',
				'slug'      => 'superb-recent-posts-with-thumbnail-images',
				'required'  => false,
			),
		);

		$config = array(
			'id'           => 'simplebasics',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
		);

		tgmpa( $plugins, $config );
	}