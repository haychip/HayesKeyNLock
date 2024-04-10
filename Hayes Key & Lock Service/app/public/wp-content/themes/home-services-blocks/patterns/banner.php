<?php
/**
 * Title: Banner
 * Slug: home-services-blocks/banner
 * Categories: home-services-blocks, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"bannerimage","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":110,"dimRatio":70,"overlayColor":"black","minHeight":600,"minHeightUnit":"px","align":"wide","className":"banner-image-cover","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignwide banner-image-cover" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-110" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"banner-content  wow bounceInDown"} -->
<div class="wp-block-column is-vertically-aligned-center banner-content wow bounceInDown" style="flex-basis:80%"><!-- wp:group {"className":"heading-block","layout":{"type":"constrained","contentSize":"40%","justifyContent":"left"}} -->
<div class="wp-block-group heading-block"><!-- wp:paragraph {"fontSize":"medium","fontFamily":"cedarville_cursive"} -->
<p class="has-cedarville-cursive-font-family has-medium-font-size"><?php esc_html_e('Let your home shine','home-services-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":131,"sizeSlug":"full","linkDestination":"none","className":"text-img"} -->
<figure class="wp-block-image size-full text-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/baner-text.png'); ?>" alt="" class="wp-image-131"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"600"}},"fontSize":"regular"} -->
<h2 class="wp-block-heading has-regular-font-size" style="font-style:normal;font-weight:600;line-height:1.5"><?php esc_html_e('ALL HOME CARE AND','home-services-blocks'); ?><br><?php esc_html_e('REPAIR SERVICES YOU CAN RELY ON','home-services-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('Know More','home-services-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"%"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->