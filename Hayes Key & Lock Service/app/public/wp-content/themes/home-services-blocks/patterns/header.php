<?php
/**
 * Title: Header
 * Slug: home-services-blocks/header
 * Categories: home-services-blocks, header
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"bottom":"0"}}},"backgroundColor":"secondary","className":"top-bar","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group top-bar has-secondary-background-color has-background" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","className":"wow bounceInDown"} -->
<div class="wp-block-columns are-vertically-aligned-center wow bounceInDown"><!-- wp:column {"verticalAlignment":"center","width":"10%","className":"topbar-new"} -->
<div class="wp-block-column is-vertically-aligned-center topbar-new" style="flex-basis:10%"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"left":"10px","right":"10px","top":"3px","bottom":"3px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"color":{"background":"#bcef2c"}}} -->
<p class="has-text-align-center has-background" style="background-color:#bcef2c;padding-top:3px;padding-right:10px;padding-bottom:3px;padding-left:10px;font-size:14px;font-style:normal;font-weight:500"><?php esc_html_e('NEW','home-services-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","className":"topbar-p"} -->
<div class="wp-block-column is-vertically-aligned-center topbar-p" style="flex-basis:70%"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="font-size:12px;font-style:normal;font-weight:500"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','home-services-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"social-block"} -->
<div class="wp-block-column is-vertically-aligned-center social-block" style="flex-basis:20%"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"0"}},"color":{"background":"#f7f7f2"}},"className":"upper-header ","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group upper-header has-background" style="background-color:#f7f7f2;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"logo-block wow slideInLeft"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block wow slideInLeft" style="flex-basis:30%"><!-- wp:site-title {"style":{"typography":{"textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text","fontSize":"regular","fontFamily":"barlow"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"primary","className":"info-uppper-box"} -->
<div class="wp-block-column is-vertically-aligned-center info-uppper-box has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);flex-basis:70%"><!-- wp:columns {"verticalAlignment":"center","className":"inner-upper-header wow slideInRight"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-upper-header wow slideInRight"><!-- wp:column {"verticalAlignment":"center","width":"","className":"info-box"} -->
<div class="wp-block-column is-vertically-aligned-center info-box"><!-- wp:group {"className":"contact-info","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group contact-info"><!-- wp:image {"id":52,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/telephone.png'); ?>" alt="" class="wp-image-52"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white","fontSize":"extra-small","fontFamily":"barlow"} -->
<p class="has-white-color has-text-color has-link-color has-barlow-font-family has-extra-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('+1 123 456 7890','home-services-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontSize":"12px"}},"textColor":"white","fontFamily":"barlow"} -->
<p class="has-white-color has-text-color has-link-color has-barlow-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:12px"><?php esc_html_e('support@example.com','home-services-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","className":"info-box"} -->
<div class="wp-block-column is-vertically-aligned-center info-box"><!-- wp:group {"className":"contact-info","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group contact-info"><!-- wp:image {"id":60,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/location.png'); ?>" alt="" class="wp-image-60"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white","fontSize":"extra-small","fontFamily":"barlow"} -->
<p class="has-white-color has-text-color has-link-color has-barlow-font-family has-extra-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('14 Tottenham Court Road','home-services-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontSize":"12px"}},"textColor":"white","fontFamily":"barlow"} -->
<p class="has-white-color has-text-color has-link-color has-barlow-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:12px"><?php esc_html_e('London, England','home-services-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"menu-header","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group menu-header" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","className":"inner-menu-header"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-menu-header"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"nav-block wow rubberBand"} -->
<div class="wp-block-column is-vertically-aligned-center nav-block wow rubberBand" style="flex-basis:80%"><!-- wp:navigation {"textColor":"body-text","overlayBackgroundColor":"primary","overlayTextColor":"white","layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.5px"}},"fontSize":"small"} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Our Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"search-block"} -->
<div class="wp-block-column is-vertically-aligned-center search-block" style="flex-basis:20%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"search","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->