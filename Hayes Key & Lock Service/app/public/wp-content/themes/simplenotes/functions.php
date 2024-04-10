<?php
/** ------- SEARCH ------- */
function simplenotes_alter_search_form( $form ){
return '<form method="get" id="search-form" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
		<div>
				<label class="screen-reader-text" for="s">Search for:</label>
				<input type="text" placeholder="Search" autocomplete="off" value="" name="s" id="s" />
				<input type="submit" id="searchsubmit" value="Search" />
		</div>
</form>';
}
add_filter( 'get_search_form', 'simplenotes_alter_search_form', 99999 );
/** ------- THEME SUPPORT ------- */
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
if ( ! isset( $content_width ) ) {
$content_width = 620;
}
/** ------- MOST VIEWED POST ------- */
function customSetPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '1');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
/** ------- THEME STYLES ------- */
function theme_styles()  
{
  wp_register_style( 'simplenotes-style', 
    get_template_directory_uri() . '/style.css',
    array(), 
    '1.0', 
    'all' );
  wp_enqueue_style( 'simplenotes-style' );
}
/** ------- DIACTIVATE EMOJI ------- */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
/** ------- WIDGETS ------- */
add_action( 'widgets_init', 'simplenotes_widgets_init' );
    register_sidebar( array(
        'name' => __( 'Sidebar', 'simplenotes' ),
        'id' => 'sidebar',
        'description' => __( 'Widgets in this area will be shown on the index.', 'simplenotes' ),
        'before_widget' => '<div class="sidebar"><div class="sidebar-contents">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
    ) );
/** ------- COMMENTS ------- */
add_action( 'comment_form_before', 'simplenotes_enqueue_comment_reply_script' );
function simplenotes_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function simplenotes_custom_pings( $comment ) {
?>
<blockquote><p><?php comment_class(); ?> id="comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></p></blockquote>
<?php
}
add_filter( 'get_comments_number', 'simplenotes_free_comment_count', 0 );
function simplenotes_free_comment_count( $count ) {
if ( !is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
/** ------- THEME OPTIONS ------- */
require_once ( get_stylesheet_directory() . '/theme-options.php' );
wp_enqueue_style( 'simplenotes-style', get_stylesheet_uri() );
/** ------- BREADCRUMBS ------- */
function simplenotes_get_breadcrumbs(){
	global $wp_query; 
	if ( !is_home() ){
		echo '<ul>';
		echo '<li><a href="'. home_url() .'">Home</a><span class=arrows>&nbsp;▶&nbsp;</span></li>';
		if ( is_category() ) {
			$catTitle = single_cat_title( "", false );
			$cat = get_cat_ID( $catTitle );
			echo "<li>". get_category_parents( $cat, TRUE, "" ) ."<span class=arrows>&nbsp;▶&nbsp;</span></li>";
		}
		elseif ( is_archive() && !is_category() ){
			echo "<li>Archives</li>";
		}
		elseif ( is_single() ) {
			$category = get_the_category();
			$category_id = get_cat_ID( $category[0]->cat_name );
			echo '<li>'. get_category_parents( $category_id, TRUE, "<span class=arrows>&nbsp;▶&nbsp;</span></li><li>" );
			echo the_title('<span>','</span>', FALSE) ."</li>";
		}
		elseif ( is_page() ) {
			$post = $wp_query->get_queried_object(); 
			if ( $post->post_parent == 1 ){ 
				echo "<li>".the_title('','&nbsp;▶&nbsp;', FALSE)."<span class=arrows>&nbsp;▶&nbsp;</span></li>";
		} else{
			$title = the_title('','&nbsp;▶&nbsp;', FALSE);
			$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
			array_push($ancestors, $post->ID);
			foreach ( $ancestors as $ancestor ){
			if( $ancestor != end($ancestors) ){
			echo '<li><span>'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</span><span class=arrows>&nbsp;▶&nbsp;</span></li>';
		} else {
			echo '<li><span>'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</span><span class=arrows>&nbsp;▶&nbsp;</span></li>';
		}
		}
		}
		}
		echo "</ul>";
		}
	}
?>
<?php
/** ------- SCRIPTS OPTIMIZATION ------- */
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);
/** ------- MENU ------- */
function simplenotes_custom_menu() {
  register_nav_menus(
    array(
      'navigation' => __( 'Navigation', 'simplenotes'  ),
    )
  );
}
add_action( 'init', 'simplenotes_custom_menu' );
/** ------- DIACTIVATE LAZY LOAD ------- */
function modify_post_thumbnail_html($html, $post_id, $post_thumbnail_id, $size, $attr) {
    $id = get_post_thumbnail_id();
    $src = wp_get_attachment_image_src($id, $size);
    $alt = get_the_title($id);
    $class = $attr['class'];
    if (strpos($class, 'retina') !== false) {
        $html = '<img src="' . $src[0] . '" alt="' . $alt . '" class="' . $class . '" />';
    } else {
        $html = '<img src="' . $src[0] . '" alt="' . $alt . '" class="' . $class . '" />';
    }
    return $html;
}
add_filter('post_thumbnail_html', 'modify_post_thumbnail_html', 99, 5);
/** ------- PAGINATION ------- */
function simplenotes_numeric_posts_nav() {
    if( is_singular() )
        return;
    global $wp_query;
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
if ( $paged >= 1 )
        $links[] = $paged;
if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
	}
    	echo '<div id="pagination"><ul>' . "\n";
if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
if ( ! in_array( 1, $links ) ) {
	$class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
if ( ! in_array( 2, $links ) )
	echo '';
	}
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}
if ( ! in_array( $max, $links ) ) {
if ( ! in_array( $max - 1, $links ) )
	echo '' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}
if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
	echo '</ul></div>' . "\n";
	}
add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'previous_posts_link_attributes');
function next_posts_link_attributes() {
  return 'class="next-pagination-links" title="Next >"';
	}
function previous_posts_link_attributes() {
return 'class="previous-pagination-links" title="< Previous"';
	}
/** ------- TRACKBACKS ------- */
	function custom_pings($comment, $args, $depth) {
	echo '<ul id="trackbacks">';
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<?php printf(__('%s - ', 'simplenotes' ), get_comment_author_link()) ?>
		<?php if ($comment->comment_approved == '0') : ?>
		<p>Your comment is awaiting moderation.</p>
		<?php endif; ?>
		<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s', 'simplenotes'), get_comment_date(),  get_comment_time()) ?></a>
	</li>
<?php
	echo '</ul>';
	}
?>