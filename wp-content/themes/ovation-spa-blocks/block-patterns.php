<?php
/**
 * Ovation Spa Blocks: Block Patterns
 *
 * @since Ovation Spa Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Ovation Spa Blocks 1.0
 *
 * @return void
 */
function ovation_spa_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'ovation-spa-blocks'    => array( 'label' => __( 'Ovation Spa Blocks', 'ovation-spa-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'ovation_spa_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'ovation_spa_blocks_register_block_patterns', 9 );
