<?php
/**
 * Light theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package simple_light
 */

if ( ! function_exists( 'simple_light_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function simple_light_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Light theme, use a find and replace
		 */
		load_theme_textdomain( 'simple-light', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Custom header.
		add_theme_support( 'custom-header' );

		// Custom background color.
		add_theme_support( 'custom-background') ;

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => __( 'Primary', 'simple-light' ),
			'menu-2' => __( 'Footer menu', 'simple-light' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support('widgets');



		$starter_content = array(
			'widgets'     => array(
				// menu
				'header-1' => array(
					'search',
				),

				// social links
				'sidebar-smm' => array(
					'simple_light_widget_smm1' => array( 'simple_light_widget_smm' ),
					'simple_light_widget_smm2' => array( 'simple_light_widget_smm' ),
					'simple_light_widget_smm3' => array( 'simple_light_widget_smm' ),
					'simple_light_widget_smm4' => array( 'simple_light_widget_smm' ),
					
				),

				// on page or single
				'on_page_sidebar' => array(
					'categories'
				),

				// on footer first area
				'footer-1' => array(
					'text_about' => array( 'text', array(
							'title'  => __( 'About This Site', 'simple-light' ),
							'text'   => __( 'This may be a good place to introduce yourself and your site or include some credits.', 'simple-light' ),
					) ),
				),

				// on footer second area (social links in footer)
				'footer-2' => array(
					'simple_light_widget_smm5' => array( 'simple_light_widget_smm' ),
					'simple_light_widget_smm6' => array( 'simple_light_widget_smm' ),
					'simple_light_widget_smm7' => array( 'simple_light_widget_smm' ),
					'simple_light_widget_smm8' => array( 'simple_light_widget_smm' ),
				),
			),

			'posts' => array(
				'home' => array(
					'post_type'    => 'page',
					'post_title'   => __( 'Home', 'simple-light' ),
					'post_content' => __( 'Welcome to your site! This is your homepage, which is what most visitors will see when they come to your site for the first time.', 'simple-light' ),
				),
				'about' => array(
					'post_type'    => 'page',
					'post_title'   => __( 'About', 'simple-light' ),
					'post_content' => __( 'You might be an artist who would like to introduce yourself and your work here or maybe you&rsquo;re a business with a mission to describe.', 'simple-light' ),
				),
				'contact' => array(
					'post_type'    => 'page',
					'post_title'   => __( 'Contact', 'simple-light' ),
					'post_content' => __( 'This is a page with some basic contact information, such as an address and phone number. You might also try a plugin to add a contact form.', 'simple-light' ),
				),
				'blog' => array(
					'post_type'  => 'page',
					'post_title' => __( 'Blog', 'simple-light' ),
				),
				'news' => array(
					'post_type'  => 'page',
					'post_title' => __( 'News', 'simple-light' ),
				),

				'homepage-section' => array(
					'post_type'    => 'page',
					'post_title'   => __( 'A homepage section', 'simple-light' ),
					'post_content' => __( 'This is an example of a homepage section. Homepage sections can be any page other than the homepage itself, including the page that shows your latest blog posts.', 'simple-light' ),
				),

				'post1' => array(
					'post_type'     => 'post',
					'post_title'    => 'Lorem ipsum',
					'post_excerpt'  => __( 'Short description', 'simple-light' ),
					'post_content'  => __( 'This is the content of the post.', 'simple-light' ),
					'thumbnail'     => '{{start1}}',
				),

				'post2' => array(
					'post_type'     => 'post',
					'post_title'    => 'Amet consectetur',
					'post_excerpt'  => __( 'Short description', 'simple-light' ),
					'post_content'  => __( 'This is the content of the post.', 'simple-light' ),
					'thumbnail'     => '{{start3}}',
				),

				'post3' => array(
					'post_type'     => 'post',
					'post_title'    => 'Vero repellat',
					'post_excerpt'  => __( 'Short description', 'simple-light' ),
					'post_content'  => __( 'This is the content of the post.', 'simple-light' ),
					'thumbnail'     => '{{start2}}',
				),

				'post4' => array(
					'post_type'    => 'post',
					'post_title'   => 'Optio eum',
					'post_excerpt' => __( 'Short description', 'simple-light' ),
					'post_content' => __( 'This is the content of the post.', 'simple-light' ),
					
				),

				'post5' => array(
					'post_type'    => 'post',
					'post_title'   => 'Aperiam possimus',
					'post_excerpt' => __( 'Short description', 'simple-light' ),
					'post_content' => __( 'This is the content of the post.', 'simple-light' ),
					'thumbnail'    => '{{start4}}',
				),

				'post6' => array(
					'post_type'    => 'post',
					'post_title'   => 'dolor sit',
					'post_excerpt' => __( 'Short description', 'simple-light' ),
					'post_content' => __( 'This is the content of the post.', 'simple-light' ),
					'thumbnail'    => '{{start5}}',
				),


			),

			'attachments'   => array(
				'start1'    => array(
					'post_title'    => 'Post Logo',
					'post_content'  => 'Attachment Description',
					'post_excerpt'  => 'Attachment Caption',
					'file'          => 'assets/img/start1.jpg',
				),
				'start2' => array(
					'post_title'    => 'Post Logo',
					'post_content'  => 'Attachment Description',
					'post_excerpt'  => 'Attachment Caption',
					'file'          => 'assets/img/start2.jpg',
				),
				'start3' => array(
					'post_title'    => 'Post Logo',
					'post_content'  => 'Attachment Description',
					'post_excerpt'  => 'Attachment Caption',
					'file'          => 'assets/img/start3.jpg',
				),
				'start4' => array(
					'post_title'    => 'Post Logo',
					'post_content'  => 'Attachment Description',
					'post_excerpt'  => 'Attachment Caption',
					'file'          => 'assets/img/start4.jpg',
				),
				'start5' => array(
					'post_title'    => 'Post Logo',
					'post_content'  => 'Attachment Description',
					'post_excerpt'  => 'Attachment Caption',
					'file'          => 'assets/img/start5.jpg',
				),

			),

			// Default to a static front page and assign the front and posts pages.
			'options'     => array(
				'show_on_front'  => 'page',
				'page_on_front'  => '{{home}}',
				'page_for_posts' => '{{blog}}',
			),


			// Set up nav menus for each of the two areas registered in the theme.
			'nav_menus'  => array(
				'menu-1'    => array(
					'name'  => __( 'Primary', 'simple-light' ),
					'items' => array(
						'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
						'page_about',
						'page_blog',
						'page_contact',
					),
				),
				'menu-2'  => array(
					'name'  => __( 'Footer menu', 'simple-light' ),
					'items' => array(
						'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
						'page_about',
						'page_blog',
						'page_contact',
					),
				),
			),

			'theme_mods' => array(
				'simple_light_options[default_post_attachment]' => esc_url( get_template_directory_uri() ) . '/assets/img/default.jpg',
				'simple_light_options[first_block][number_of_posts]'     => 6,
				'simple_light_options[second_block][number_of_posts]'    => 6,
				'simple_light_options[third_block][number_of_posts]'     => 5
			),

		);


		add_theme_support( 'starter-content', $starter_content );
	}
	endif;
add_action( 'after_setup_theme', 'simple_light_setup' );


function simple_light_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'simple_light_content_width', 640 );
	
}
add_action( 'after_setup_theme', 'simple_light_content_width', 0 );


function simple_light_scripts_styles() {

	// get styles for the grid
	$block_styles = isset( get_theme_mod( 'simple_light_options' )['first_block']['style'] ) ? get_theme_mod( 'simple_light_options' )['first_block']['style'] : 'standart' ;

	//css
	wp_enqueue_style(  'simple_light-googlefont_family_1', 'https://fonts.googleapis.com/css?family=Codystar|Comfortaa|Days+One|Julius+Sans+One|Mitr|Poller+One|Source+Code+Pro|Syncopate' );
	wp_enqueue_style(  'simple_light-googlefont_family_2', 'https://fonts.googleapis.com/css?family=Kulim+Park&display=swap' );
	wp_enqueue_style(  'simple_light-fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/all.min.css' );
	wp_enqueue_style(  'simple_light-bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style(  'simple_light-style', get_stylesheet_uri() );
	wp_enqueue_style(  'simple_light-owl', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css' );
	wp_enqueue_style(  'simple_light-owl-default', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.theme.default.min.css' );
	
	// dynamic css (grid styles)
	if ( 'big' == $block_styles ) {
		wp_enqueue_style( 'simple_light-big-blocks', get_template_directory_uri() . '/assets/css/big.css' );
	} elseif ( 'small' == $block_styles ) {
		wp_enqueue_style( 'simple_light-small-blocks', get_template_directory_uri() . '/assets/css/small.css' );
	} else {
		wp_enqueue_style( 'simple_light-standart-blocks', get_template_directory_uri() . '/assets/css/standart.css' );
	}

	// scripts:
	wp_enqueue_script( 'simple_light-popper-js', get_template_directory_uri() . '/assets/vendor/popper/popper.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'simple_light-bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('simple_light-popper-js'), '', true );
	wp_enqueue_script( 'simple_light-owl-js', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array('simple_light-bootstrap-js'), '', true );
	wp_enqueue_script( 'simple_light-main-js', get_template_directory_uri() . '/assets/js/main.js', array('simple_light-owl-js'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'simple_light_scripts_styles' );


function simple_light_post_editor_styles ( $suf ){

    if( $suf != 'post.php' ) return;

    wp_enqueue_style(  'simple_light-googlefont_family_1', 'https://fonts.googleapis.com/css?family=Codystar|Comfortaa|Days+One|Julius+Sans+One|Mitr|Poller+One|Source+Code+Pro|Syncopate' );
    wp_enqueue_style(  'simple_light-googlefont_family_2', 'https://fonts.googleapis.com/css?family=Kulim+Park&display=swap' );
    wp_enqueue_style(  'simple_light-fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/all.min.css' );
}
add_action( 'admin_enqueue_scripts', 'simple_light_post_editor_styles' );


// menu styles
function simple_light_nav_menu_css_class( $classes, $item, $args, $depth ){


	if ( 'menu-1' == $args->theme_location ) {

		foreach ( $classes as $classes_key => $classes_value ) {
            if( FALSE !== strripos( $classes_value, 'mx-' ) ) {
                $classes[ $classes_key ] = '';
            }
	    }

        if ( 0 === $depth ) {
            $classes[] = 'menu-header';
        }

        $classes[] = 'text-right pr-2 px-md-5 focus-l';

	} else {
        $classes[] = 'focus-l';
    }
	
	return $classes;
}
add_filter( 'nav_menu_css_class', 'simple_light_nav_menu_css_class', 10, 4 );


// all sidebars
function simple_light_sidebars_start() {

	register_sidebar( array(
		'name' => __( 'Sidebar on the page', 'simple-light' ),
		'id'   => 'on_page_sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',

	) );

	
	register_sidebar( array(
		'name' => __( 'Footer widget area 1', 'simple-light' ),
		'id'   => 'footer-1',
	) );

	register_sidebar( array(
		'name' => __( 'Footer widget area 2', 'simple-light' ),
		'id'   => 'footer-2',
	) );

	register_sidebar( array(
		'name'        => __( 'Social icons sidebar', 'simple-light' ),
		'id'          => 'sidebar-smm',
		'description' => __( 'Show you social links', 'simple-light' ),

	) );

	register_sidebar( array(
		'name' => __( 'Nav menu widget area', 'simple-light' ),
		'id'   => 'header-1',
	) );


	register_widget('simple_light_widget_smm');

}
add_action( 'widgets_init','simple_light_sidebars_start' );


/**
 * Enqueue classic editor styles.
 */
function simple_light_editor_styles() {

	$simple_light_styles = array(
		'/assets/css/editor-styles.css',
	);

	add_editor_style( $simple_light_styles );

}
add_action( 'admin_menu', 'simple_light_editor_styles' );


function simple_light_navigation_template( $template, $class ){

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
	
}
add_filter( 'navigation_markup_template', 'simple_light_navigation_template', 10, 2 );


if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {

		do_action( 'wp_body_open' );

	}
}


// footer of post
if ( ! function_exists( 'single_entry_posted' ) ) {

	function single_entry_posted() {

		?>
			<div class='posted mt-1'>
				<span class="posted-by">
					<i class="fas fa-at pr-1"></i><a class="url fn n" href='<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>' title='<?php esc_attr_e( 'Permalink to publications ','simple-light' ); echo esc_attr( get_the_author() ); ?>' ><?php echo esc_html( get_the_author() ); ?></a>
				</span>
				
				<?php

				$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
				
				if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {

					$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">. ' . esc_html__('Updated: ','simple-light') . ' %4$s</time>';
				
				}

				$time_string = sprintf(
					$time_string,
					esc_attr( get_the_date( DATE_W3C ) ),
					esc_html( get_the_date() ),
					esc_attr( get_the_modified_date( DATE_W3C ) ),
					esc_html( get_the_modified_date() )
				);

				printf(
					'<span class="posted-on mx-2"><i class="fas fa-clock pr-1"></i><a href="%1$s" rel="bookmark">%2$s</a></span>',
					esc_url( get_permalink() ),
					$time_string
				);

				?>

			</div>
		<?php
		
	}

}


/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function simple_light_skip_link() {

	echo '<a class="skip-link screen-reader-text" href="#body">' . esc_html__( 'Skip to the content', 'simple-light' ) . '</a>';

}
add_action( 'wp_body_open', 'simple_light_skip_link', 5 );


function simple_light_post_background_option( $styles ) {

	if ( false == $styles ) {
		$styles = 'background: radial-gradient(#ffffff, #ececec); border: 1px solid #8080801c;';
	} else {
		$styles = 'background-image: url(' . esc_url( $styles ) . ');' ;
	}
	
	return $styles;
}
add_filter( 'simple_light_post_background' ,'simple_light_post_background_option' );
add_filter( 'simple_light_title_background' ,'simple_light_post_background_option' );
add_filter( 'simple_light_slider_background' ,'simple_light_post_background_option' );



// required
require get_template_directory() . '/classes/class-simple_light-widget-smm.php';
// breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


