<?php
/**
 * Light theme Theme Customizer
 *
 * @package simple_light
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function simple_light_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '#bloginfo-name-1',
			'render_callback' => 'simple_light_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'simple_light_customize_partial_blogdescription',
		) );
	}

	// add theme options customizer section
	$wp_customize->add_section( 'simple_light_customizer', array(
		 'title'       => __( 'Theme options', 'simple-light' ),
		 'priority'    => 20,
		 'description' => __( 'Setup home page', 'simple-light' )
	) );

	// add slider options customizer section
	$wp_customize->add_section( 'simple_light_slider', array(
		 'title'       => __( 'Slider options', 'simple-light' ),
		 'priority'    => 30,
		 'description' => __( 'Setup slider', 'simple-light' )
	) );


    // get all categories for select
	$all_cats = get_categories();
	$cat_select = array();

	foreach ( $all_cats as $cat_key => $cat_value) {
		
		if ( 'category' === $cat_value->taxonomy ){

			$cat_select[ $cat_value->slug ] = $cat_value->cat_name;

		}

	}

	// get all tags for select
	$all_tags = get_tags();
	$tags_select = array();

	foreach ( $all_tags as $tag_key => $tag_value) {
		
		if ( 'post_tag' === $tag_value->taxonomy ){

			$tags_select[ $tag_value->slug ] = $tag_value->name;

		}

	}

	// category selection sanitize
	function simple_light_cat_sanitize( $choice ) {

		$all_cats = get_categories();
		$cat_sanitize = array();

		foreach ( $all_cats as $cat_key => $cat_value) {
		
			if ( 'category' ===  $cat_value->taxonomy ) {

				$cat_sanitize[] = $cat_value->slug;

			}

		}

		if ( in_array( $choice, $cat_sanitize, true ) ) {

			return $choice;

		}

		return $cat_sanitize[0];
	}

	// tag selection sanitize
	function simple_light_tag_sanitize( $choice ) {

		$all_tags = get_tags();
		$tag_sanitize = array();

		foreach ( $all_tags as $tag_key => $tag_value ) {
		
			if ( 'post_tag' ===  $tag_value->taxonomy ) {

				$tag_sanitize[] = $tag_value->slug;

			}

		}

		if ( in_array( $choice, $tag_sanitize, true ) ) {

			return $choice;

		}

		return $tag_sanitize[0];
	}

	// style selection sanitize
	function simple_light_cat_style_sanitize( $choice ) {

		$valid = array(
			'standart',
			'small',
			'big',
		);

		if ( in_array( $choice, $valid, true ) ) {
			return $choice;
		}

		return 'standart';
	}

	// select sorting slides sanitize
	function simple_light_slides_sort_sanitize( $choice ) {

		$valid = array(
			'date',
			'name',
			'ID',
		);

		if ( in_array( $choice, $valid, true ) ) {
			return $choice;
		}

		return 'date';
	}

	//checkbox sanitize
	function simple_light_sanitize_checkbox( $input ){
		return ( $input ? true : false );
	}

	// ***********  Slider
	// slider tag
	$wp_customize->add_setting( 'simple_light_options[slider][slug]', array(
		'type'              => 'theme_mod',
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'simple_light_tag_sanitize',
	) );

	$wp_customize->add_control( 'slider_slug', array(
		'label'            => __( 'Tag for slider', 'simple-light' ),
		'section'          => 'simple_light_slider',
		'settings'         => 'simple_light_options[slider][slug]',
		'type'             => 'select',
		'choices'          => $tags_select,
	) );

	// slider sort by	
	$wp_customize->add_setting( 'simple_light_options[slider][sort]', array(
		'type'              => 'theme_mod',
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'simple_light_slides_sort_sanitize',
	) );

	$wp_customize->add_control( 'slider_sort', array(
		'label'            => __( 'Sort by', 'simple-light' ),
		'section'          => 'simple_light_slider',
		'settings'         => 'simple_light_options[slider][sort]',
		'type'             => 'select',
		'choices'          => array(
								'date' => __( 'date', 'simple-light' ),
								'name' => __( 'name', 'simple-light' ),
								'ID' => __( 'id', 'simple-light' ),
	 						),
	) );


	//slider sort asc desc
    $wp_customize->add_setting( 'simple_light_options[slider][sort_asc]', array(
        'type'              => 'theme_mod',
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'simple_light_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'slider_sort_asc', array(
        'label'            => __( 'Sort Ascending', 'simple-light' ),
        'section'          => 'simple_light_slider',
        'settings'         => 'simple_light_options[slider][sort_asc]',
        'type'             => 'checkbox',
    ) );





    // slider effect		
	$wp_customize->add_setting( 'simple_light_options[slider][effect]', array(
		'type'              => 'theme_mod',
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'simple_light_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'slider_effect', array(
		'label'            => __( 'Blur effect', 'simple-light' ),
		'section'          => 'simple_light_slider',
		'settings'         => 'simple_light_options[slider][effect]',
		'type'             => 'checkbox',
	) );

	// slider text on link		
	$wp_customize->add_setting( 'simple_light_options[slider][text_link]', array(
		'type'              => 'theme_mod',
		'default'           => 'more...',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_filter_nohtml_kses', 
	) );

	$wp_customize->add_control( 'slider_text_link', array(
		'label'            => __( 'link text', 'simple-light' ),
		'section'          => 'simple_light_slider',
		'settings'         => 'simple_light_options[slider][text_link]',
		'type'             => 'input',
	) );

	// slider disable on/off	
	$wp_customize->add_setting( 'simple_light_options[slider][disable]', array(
		'type'              => 'theme_mod',
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'simple_light_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'slider_disable', array(
		'label'            => __( 'Disable slider', 'simple-light' ),
		'section'          => 'simple_light_slider',
		'settings'         => 'simple_light_options[slider][disable]',
		'type'             => 'checkbox',
	) );


	// ***********  Front page options
	//first block slug
	$wp_customize->add_setting( 'simple_light_options[first_block][slug]', array(
		'type'              => 'theme_mod',
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'simple_light_cat_sanitize',
	) );

	$wp_customize->add_control( 'first_block_slug', array(
		'label'            => __( 'Category for First block', 'simple-light' ),
		'section'          => 'simple_light_customizer',
		'settings'         => 'simple_light_options[first_block][slug]',
		'type'             => 'select',
		'choices'          => $cat_select,
	) );

	// style first block
	$wp_customize->add_setting( 'simple_light_options[first_block][style]', array(
		'type'             => 'theme_mod',
		'default'          => 'standart',
		'transport'        => 'refresh',
		'sanitize_callback'=> 'simple_light_cat_style_sanitize',
	) );

	$wp_customize->add_control( 'first_block_style', array(
		'label'            => __( 'Block display type', 'simple-light' ),
		'section'          =>'simple_light_customizer',
		'settings'         => 'simple_light_options[first_block][style]',
		'type'             => 'select',
		'choices'          => array(
			            'standart' => __( 'Standart', 'simple-light' ),
			            'small'    => __( 'Same height (small)', 'simple-light' ),
			            'big'      => __( 'Same height (big)', 'simple-light' ),
		),
	) );

	// number of blocks
	$wp_customize->add_setting( 'simple_light_options[first_block][number_of_posts]', array(
		'type'              => 'theme_mod',
		'default'           => 6,
		'transport'         => 'refresh',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'first_block_number_of_posts', array(
		'label'             => __( 'Number of posts in the First block', 'simple-light' ),
		'section'           =>'simple_light_customizer',
		'settings'          => 'simple_light_options[first_block][number_of_posts]',
		'type'              => 'number',
	) );

	//Second block
	// slug
	$wp_customize->add_setting( 'simple_light_options[second_block][slug]', array(
		'type'              => 'theme_mod',
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'simple_light_cat_sanitize',
	) );

	$wp_customize->add_control( 'second_block_slug', array(
		'label'             => __( 'Category for Second block', 'simple-light' ),
		'section'           =>'simple_light_customizer',
		'settings'          => 'simple_light_options[second_block][slug]',
		'type'              => 'select',
		'choices'           => $cat_select,
	) );

	// number of blocks
	$wp_customize->add_setting( 'simple_light_options[second_block][number_of_posts]', array(
		'type'              => 'theme_mod',
		'default'           => 6,
		'transport'         => 'refresh',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'second_block_number_of_posts', array(
		'label'             => __( 'Number of posts in the Second block', 'simple-light' ),
		'section'           =>'simple_light_customizer',
		'settings'          => 'simple_light_options[second_block][number_of_posts]',
		'type'              => 'number',
	) );

	//Third block
	// title
	$wp_customize->add_setting( 'simple_light_options[third_block][title]', array(
		'type'              => 'theme_mod',
		'default'           => 'latest news',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control( 'third_block_title', array(
		'label'             => __( 'The title of the Third block', 'simple-light' ),
		'section'           =>'simple_light_customizer',
		'settings'          => 'simple_light_options[third_block][title]',
		'type'              => 'text',
	) );

	// text of blocks
	$wp_customize->add_setting( 'simple_light_options[third_block][text]', array(
		'type'              => 'theme_mod',
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );

	$wp_customize->add_control( 'third_block_text', array(
		'label'             => __( 'Text under the title of the Third block', 'simple-light' ),
		'section'           =>'simple_light_customizer',
		'settings'          => 'simple_light_options[third_block][text]',
		'type'              => 'textarea',
	) );

	//slug
	$wp_customize->add_setting( 'simple_light_options[third_block][slug]', array(
		'type'              => 'theme_mod',
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'simple_light_cat_sanitize',
	) );

	$wp_customize->add_control( 'third_block_slug', array(
		'label'             => __( 'Category for Third block', 'simple-light'  ),
		'section'           =>'simple_light_customizer',
		'settings'          => 'simple_light_options[third_block][slug]',
		'type'              => 'select',
		'choices'           => $cat_select,
	) );

	// number of blocks
	$wp_customize->add_setting( 'simple_light_options[third_block][number_of_posts]', array(
		'type'              => 'theme_mod',
		'default'           => 6,
		'transport'         => 'refresh',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'third_block_number_of_posts', array(
		'label'             => __( 'Number of posts in the Third block', 'simple-light' ),
		'section'           =>'simple_light_customizer',
		'settings'          => 'simple_light_options[third_block][number_of_posts]',
		'type'              => 'number',
	) );

	// default post attachment
	$wp_customize->add_setting( 'simple_light_options[default_post_attachment]', array(
		'type'              => 'theme_mod',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'simple_light_options[default_post_attachment]',
		array(
			'label'         => __( 'Default post attachment', 'simple-light' ),
			'section'       => 'simple_light_customizer',
			'settings'      => 'simple_light_options[default_post_attachment]',
		)
	) );


}
add_action( 'customize_register', 'simple_light_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function simple_light_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function simple_light_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function simple_light_customize_preview_js() {
	wp_enqueue_script( 'simple_light-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'jquery','customize-preview'  ), '20151216', true );
}
add_action( 'customize_preview_init', 'simple_light_customize_preview_js' );
