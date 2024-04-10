<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package minimalistblogger
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses minimalistblogger_header_style()
 */
function minimalistblogger_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'minimalistblogger_custom_header_args', array(
		'default-image'          => get_template_directory_uri().'/inc/starter_content/img/customizer-header-image.jpg',
		'default-text-color'     => '000000',
		'flex-width'         => true,
		'flex-height'        => true,
		'width'              => 1200,
		'height'             => 500,
		'wp-head-callback'       => 'minimalistblogger_header_style',
	) ) );
	register_default_headers( array(
		'header-bg' => array(
			'url'           => '%s/inc/starter_content/img/customizer-header-image.jpg',
			'thumbnail_url' => '%s/inc/starter_content/img/customizer-header-image.jpg',
			'description'   => _x( 'Default', 'Default header image', 'minimalistblogger' )
		),	
		'header-bg-two' => array(
			'url'           => '%s/inc/starter_content/img/customizer-header-image-two.jpg',
			'thumbnail_url' => '%s/inc/starter_content/img/customizer-header-image-two.jpg',
			'description'   => _x( 'Default', 'Default header image', 'minimalistblogger' )
		),	
	) );
}
add_action( 'after_setup_theme', 'minimalistblogger_custom_header_setup' );

if ( ! function_exists( 'minimalistblogger_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see minimalistblogger_custom_header_setup().
	 */
	function minimalistblogger_header_style() {
		$header_text_color = get_header_textcolor();
		$header_image = get_header_image();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( empty( $header_image ) && $header_text_color == get_theme_support( 'custom-header', 'default-text-color' ) ){
			return;
		}

	// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}

			<?php if ( ! display_header_text() ) : ?>
				.site-title,
				.site-description,
				.site-branding {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					display:none;
				}
			<?php endif; ?>

			<?php header_image(); ?>"
			<?php
			if ( ! display_header_text() ) :
				?>
				.site-title,
				.site-description {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					display:none;
				}
				<?php
			else :
				?>

			<?php endif; ?>

		</style>
		<?php
	}
endif;
