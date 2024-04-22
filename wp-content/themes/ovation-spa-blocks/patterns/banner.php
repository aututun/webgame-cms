
<?php
/**
 * Title: Banner
 * Slug: ovation-spa-blocks/banner
 * Categories: ovation-spa-blocks, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"bannerimage","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":21,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.29},"minHeight":800,"minHeightUnit":"px","isDark":false,"align":"wide","className":"banner-image-cover","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-cover alignwide is-light banner-image-cover" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-21" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" style="object-position:50% 29%" data-object-fit="cover" data-object-position="50% 29%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"50%","className":"is-vertically-aligned-center banner-content wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-center banner-content wow zoomIn" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"75px","textTransform":"uppercase"}},"fontFamily":"inria-serif"} -->
<h1 class="wp-block-heading has-inria-serif-font-family" style="font-size:75px;font-style:normal;font-weight:700;text-transform:uppercase"><span><?php esc_html_e('spa &amp;','ovation-spa-blocks'); ?></span><?php esc_html_e(' beauty center','ovation-spa-blocks'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.3","letterSpacing":"2px"}},"className":"banner-text","fontSize":"medium"} -->
<p class="banner-text has-medium-font-size" style="margin-top:0;margin-bottom:0;letter-spacing:2px;line-height:1.3"><?php esc_html_e("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.",'ovation-spa-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontFamily":"inter"} -->
<div class="wp-block-button has-inter-font-family" style="font-style:normal;font-weight:800"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('BOOK NOW','ovation-spa-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->