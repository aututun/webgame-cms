<?php
/**
 * Title: Our Blog
 * Slug: ovation-spa-blocks/our-products
 * Categories: ovation-spa-blocks, our-products
 */
?>

<!-- wp:group {"style":{"color":{"background":"#dcedff"}},"className":"best-products","layout":{"type":"constrained","contentSize":"62%"}} -->
<div class="wp-block-group best-products has-background" style="background-color:#dcedff"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px","lineHeight":"1.2"}},"textColor":"primary","className":"sub-heading","fontFamily":"aref-ruqaa"} -->
<h3 class="wp-block-heading has-text-align-center sub-heading has-primary-color has-text-color has-link-color has-aref-ruqaa-font-family" style="font-size:32px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Best We Can Give Through Our Products','ovation-spa-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px"}},"className":"main-heading","fontFamily":"inknut-antiqua"} -->
<h2 class="wp-block-heading has-text-align-center main-heading has-inknut-antiqua-font-family" style="font-size:35px"><?php esc_html_e('OUR BEST PRODUCTS','ovation-spa-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"className":"wow swing","layout":{"type":"constrained"}} -->
<div class="wp-block-group wow swing"><!-- wp:group {"className":"product-img-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-img-box"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"product-btn","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"color":{"text":"#639edb"},"elements":{"link":{"color":{"text":"#639edb"}}},"typography":{"textDecoration":"none"}},"fontSize":"regular","fontFamily":"aref-ruqaa"} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30"}}},"fontSize":"small","fontFamily":"inknut-antiqua","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"primary","fontFamily":"aref-ruqaa","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
<p class="has-text-align-center has-heading-color has-text-color has-link-color"><?php esc_html_e('No Products Found','ovation-spa-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->