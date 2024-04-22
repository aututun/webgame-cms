<?php

add_action( 'admin_menu', 'ovation_spa_blocks_gettingstarted' );
function ovation_spa_blocks_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'ovation-spa-blocks'), esc_html__('Theme Documentation', 'ovation-spa-blocks'), 'edit_theme_options', 'ovation-spa-blocks-guide-page', 'ovation_spa_blocks_guide');
}

function ovation_spa_blocks_admin_theme_style() {
   wp_enqueue_style('ovation-spa-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'ovation_spa_blocks_admin_theme_style');

if ( ! defined( 'OVATION_SPA_BLOCKS_SUPPORT' ) ) {
define('OVATION_SPA_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/ovation-spa-blocks/','ovation-spa-blocks'));
}
if ( ! defined( 'OVATION_SPA_BLOCKS_REVIEW' ) ) {
define('OVATION_SPA_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/ovation-spa-blocks/reviews/','ovation-spa-blocks'));
}
if ( ! defined( 'OVATION_SPA_BLOCKS_LIVE_DEMO' ) ) {
define('OVATION_SPA_BLOCKS_LIVE_DEMO',__('https://www.ovationthemes.com/demos/beauty-salon/','ovation-spa-blocks'));
}
if ( ! defined( 'OVATION_SPA_BLOCKS_BUY_PRO' ) ) {
define('OVATION_SPA_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/wordpress/beauty-salon-wordpress-theme/','ovation-spa-blocks'));
}
if ( ! defined( 'OVATION_SPA_BLOCKS_PRO_DOC' ) ) {
define('OVATION_SPA_BLOCKS_PRO_DOC',__('https://ovationthemes.com/docs/ot-beauty-salon-pro-doc/','ovation-spa-blocks'));
}
if ( ! defined( 'OVATION_SPA_BLOCKS_FREE_DOC' ) ) {
define('OVATION_SPA_BLOCKS_FREE_DOC',__('https://ovationthemes.com/docs/ot-beauty-salon-spa-free-doc/','ovation-spa-blocks'));
}
if ( ! defined( 'OVATION_SPA_BLOCKS_THEME_NAME' ) ) {
define('OVATION_SPA_BLOCKS_THEME_NAME',__('Premium Ovation Spa Blocks Theme','ovation-spa-blocks'));
}

/**
 * Theme Info Page
 */
function ovation_spa_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$ovation_spa_blocks_theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $ovation_spa_blocks_theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'ovation-spa-blocks'); ?><?php echo esc_html($ovation_spa_blocks_theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( OVATION_SPA_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'ovation-spa-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( OVATION_SPA_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'ovation-spa-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','ovation-spa-blocks'); ?></h3>
					<p><?php $ovation_spa_blocks_theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $ovation_spa_blocks_theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','ovation-spa-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','ovation-spa-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','ovation-spa-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','ovation-spa-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','ovation-spa-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','ovation-spa-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','ovation-spa-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','ovation-spa-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( OVATION_SPA_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','ovation-spa-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(OVATION_SPA_BLOCKS_THEME_NAME); ?></h3>
				<img class="ovation_spa_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $ovation_spa_blocks_theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( OVATION_SPA_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'ovation-spa-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( OVATION_SPA_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'ovation-spa-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( OVATION_SPA_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'ovation-spa-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'ovation-spa-blocks');?> </li>                 
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'ovation-spa-blocks');?> </li>
					<li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'ovation-spa-blocks');?> </li>
               <li class="upsell-ovation_spa_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'ovation-spa-blocks');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>