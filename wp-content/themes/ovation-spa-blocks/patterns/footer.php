<?php
/**
 * Title: Footer
 * Slug: ovation-spa-blocks/footer
 * Categories: ovation-spa-blocks, footer
 */
?>

<!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() . '/images/footer.png'); ?>","id":362,"source":"file","title":"Rectangle 10 (1)"}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"blockGap":"0"}},"className":"footer-widgets","layout":{"type":"constrained","contentSize":"70%"},"fontSize":"small"} -->
<div class="wp-block-group footer-widgets has-small-font-size" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"aref-ruqaa"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-aref-ruqaa-font-family" style="font-size:32px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Wants to know more on spa beauty!','ovation-spa-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"44px"} -->
<div style="height:44px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg","fontSize":"extra-large","fontFamily":"inknut-antiqua"} -->
<h2 class="wp-block-heading has-text-align-center has-section-bg-color has-text-color has-link-color has-inknut-antiqua-font-family has-extra-large-font-size"><?php esc_html_e('SEARCH','ovation-spa-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","align":"center","style":{"color":{"background":"#232323"}}} /-->

<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|70"}}},"textColor":"white","className":"wow rubberBand","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wow rubberBand has-white-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true} /-->

<!-- wp:site-title {"className":"footer-site-title","fontSize":"large","fontFamily":"inknut-antiqua"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontFamily":"inria-serif"} -->
<p class="has-inria-serif-font-family" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e('Consectetur adipisicing elit, sed esddo eiusmod tempor incididunt ut labore et dolore magna aliquaenim.','ovation-spa-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"heading","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontFamily":"inter"} -->
<div class="wp-block-button has-inter-font-family" style="font-style:normal;font-weight:800"><a class="wp-block-button__link has-heading-background-color has-background wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('BOOK ONLINE','ovation-spa-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"bottom":"0"}}},"textColor":"white","fontFamily":"inknut-antiqua"} -->
<h4 class="wp-block-heading has-white-color has-text-color has-link-color has-inknut-antiqua-font-family" style="padding-bottom:0;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Contact Us','ovation-spa-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":43,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png'); ?>" alt="" class="wp-image-43"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"has-inknut-antiqua-font-family","fontFamily":"inria-serif"} -->
<p class="has-inknut-antiqua-font-family has-inria-serif-font-family"><?php esc_html_e('+01-999-888-77','ovation-spa-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":37,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/mail.png'); ?>" alt="" class="wp-image-37"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontFamily":"inria-serif"} -->
<p class="has-inria-serif-font-family"><a href="mailto:support@example.com"><?php esc_html_e('support@example.com','ovation-spa-blocks'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":61,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/location.png'); ?>" alt="" class="wp-image-61"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"has-inknut-antiqua-font-family","fontFamily":"inria-serif"} -->
<p class="has-inknut-antiqua-font-family has-inria-serif-font-family"><?php esc_html_e('Vesturbraut 17-3 Keflavfk, Iceland','ovation-spa-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"bottom":"0"}}},"textColor":"white","fontFamily":"inknut-antiqua"} -->
<h4 class="wp-block-heading has-white-color has-text-color has-link-color has-inknut-antiqua-font-family" style="padding-bottom:0;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('OPENING HOURS','ovation-spa-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":true,"style":{"border":{"width":"1px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"borderColor":"white","fontSize":"extra-small","fontFamily":"inria-serif"} -->
<figure class="wp-block-table has-inria-serif-font-family has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--40)"><table class="has-border-color has-white-border-color has-fixed-layout" style="border-width:1px"><tbody><tr><td><?php esc_html_e('Monday to Friday','ovation-spa-blocks'); ?></td><td><?php esc_html_e('09:00 - 20:00 hrs','ovation-spa-blocks'); ?></td></tr><tr><td><?php esc_html_e('Saturday','ovation-spa-blocks'); ?></td><td><?php esc_html_e('09:00 - 18:00 hrs','ovation-spa-blocks'); ?></td></tr><tr><td><?php esc_html_e('Sunday','ovation-spa-blocks'); ?></td><td><?php esc_html_e('09:00 - 18:00 hrs','ovation-spa-blocks'); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"bottom":"0"}}},"textColor":"white","fontFamily":"inknut-antiqua"} -->
<h4 class="wp-block-heading has-white-color has-text-color has-link-color has-inknut-antiqua-font-family" style="padding-bottom:0;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Links','ovation-spa-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:navigation-link {"label":"Purchase a Gift Certificate","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Spa Promotions","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Exclusive Offers \u0026amp; Events","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:navigation-link {"label":"Blog and News","type":"","url":"#","kind":"custom","isTopLevelLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"63px"} -->
<div style="height:63px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"white","className":"copyright-text","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group copyright-text has-white-color has-text-color has-link-color"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"has-background-color has-text-color has-link-color has-inknut-antiqua-font-family"} -->
<p class="has-background-color has-text-color has-link-color has-inknut-antiqua-font-family"><a rel="noreferrer noopener" href="https://www.ovationthemes.com/wordpress/free-salon-wordpress-theme/" target="_blank"><?php esc_html_e('Ovation Spa Blocks WordPress Theme','ovation-spa-blocks'); ?></a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"has-background-color has-text-color has-link-color has-inknut-antiqua-font-family"} -->
<p class="has-background-color has-text-color has-link-color has-inknut-antiqua-font-family"><?php esc_html_e('Proudly powered by','ovation-spa-blocks'); ?> <a rel="noreferrer noopener" href="https://www.ovationthemes.com/" target="_blank"><?php esc_html_e('Ovation Themes','ovation-spa-blocks'); ?></a> <?php esc_html_e('and','ovation-spa-blocks'); ?> <a href="https://wordpress.org"><?php esc_html_e('WordPress','ovation-spa-blocks'); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"scroll-top"} -->
<p class="scroll-top"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->