<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to simplenotes_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Simplenotes
 * @since 1.0
 */
?>
<?php
if ( have_comments() ) :
global $comments_by_type;
$comments_by_type = separate_comments( $comments );
if ( !empty( $comments_by_type['comment'] ) ) :
?>
<?php if ( get_comment_pages_count() > 1 ) : ?>
<div id="comments">
<h3>Comments</h3>
<nav id="comments-nav-above" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
</div>
<?php endif; ?>
<div id="comments">
<h3>Comments</h3>
<ul id="comments-list">
<?php wp_list_comments( 'type=comment' ); ?>
</ul>
</div>
<?php if ( get_comment_pages_count() > 1 ) : ?>
<nav id="comments-nav-below" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
<?php endif; ?>
<?php
endif;
if ( !empty( $comments_by_type['pings'] ) ) :
$ping_count = count( $comments_by_type['pings'] );
?>
<?php echo '<div id="trackbacks"><h3>' . esc_html( $ping_count ) . '&nbsp;' . esc_html( _nx( 'Trackback or Pingback', 'Trackbacks and Pingbacks', $ping_count, 'comments count', 'simplenotes' ) ); ?></h3></div>
<?php wp_list_comments('type=pings&callback=custom_pings'); ?>
<?php
endif;
endif;
if ( comments_open() ) { comment_form(); }
elseif ( is_single() ) {
		echo '<div style="height: 15px;"></div><div class="closed" id="comments">Comments are closed.</div>';
}
?>