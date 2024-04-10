<?php
/**
 * Home Services Blocks: Block Patterns
 *
 * @since Home Services Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Home Services Blocks 1.0
 *
 * @return void
 */
function home_services_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'home-services-blocks'    => array( 'label' => __( 'Home Services Blocks', 'home-services-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'home_services_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'home_services_blocks_register_block_patterns', 9 );
