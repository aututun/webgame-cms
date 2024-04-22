<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function ovation_spa_blocks_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'ovation-spa-blocks' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	ovation_spa_blocks_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'ovation_spa_blocks_register_recommended_plugins' );