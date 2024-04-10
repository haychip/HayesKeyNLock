<?php
/**
 * Title: Latest News
 * Slug: home-services-blocks/latest-news
 * Categories: home-services-blocks, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"white","className":"blog-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-section has-white-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"19px"} -->
<div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"regular"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-regular-font-size"><?php esc_html_e('LEARN MORE ABOUT OUR RECENT NEWS','home-services-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"28px"} -->
<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":36,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"blog-box wow shake","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-box wow shake"><!-- wp:group {"className":"blog-inner","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-inner"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"2px","bottom":"2px"}}},"backgroundColor":"primary","textColor":"white","className":"blog-date-box","layout":{"type":"default"}} -->
<div class="wp-block-group blog-date-box has-white-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:2px;padding-right:var(--wp--preset--spacing--20);padding-bottom:2px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-date {"textAlign":"right","format":"M j, Y","className":"blog-date","fontSize":"extra-small"} /-->

<!-- wp:post-author-name {"fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":4} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","className":"readmore"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background readmore" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:read-more {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"body-text","fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no post found','home-services-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->