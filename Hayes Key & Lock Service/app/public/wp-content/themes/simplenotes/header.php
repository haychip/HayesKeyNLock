<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_enqueue_script('jquery'); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="wrapper">

<!-- header -->
	<header>
		<h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<?php $options = get_option( 'simplenotes_theme_options' ); ?><?php if ( $options['option_description'] != '' ) : ?>
				<div id="description"><?php bloginfo('description'); ?></div>
		<?php endif; ?>
	</header>
<!-- /header -->

<!-- extra -->
	<div id="extra">

<!-- search -->
	<?php $options = get_option( 'simplenotes_theme_options' ); ?><?php if ( $options['option_search'] != '' ) : ?>
		<div id="index-search"><form method="get" id="index-search-form" action="<?php home_url(); ?>?s="><input id="index-search-text" type="text" placeholder="Search" autocomplete="off" value="" name="s"><button id="index-search-button" type="submit"></button></form></div>
	<?php endif; ?>
<!-- /search -->

<!-- social -->
<?php $options = get_option( 'simplenotes_theme_options' ); ?><?php if ( $options['option_social'] != '' ) : ?>
	<div id="social">
		<?php if ( $options['tumblr_url'] != '' ) : ?><a id="tumblr" title="Tumblr" href="http://<?php echo $options['tumblr_url']; ?>.tumblr.com" target="_blank">Tumblr</a><?php endif; ?>
		<?php if ( $options['twitter_url'] != '' ) : ?><a id="twitter" title="Twitter" href="http://twitter.com/<?php echo $options['twitter_url']; ?>" target="_blank">Twitter</a><?php endif; ?>
		<?php if ( $options['facebook_url'] != '' ) : ?><a id="facebook" title="Facebook" href="http://facebook.com/<?php echo $options['facebook_url']; ?>" target="_blank">Facebook</a><?php endif; ?>
		<?php if ( $options['spotify_url'] != '' ) : ?><a id="spotify" title="Spotify" href="http://open.spotify.com/user/<?php echo $options['spotify_url']; ?>" target="_blank">Spotify</a><?php endif; ?>
		<?php if ( $options['pinterest_url'] != '' ) : ?><a id="pinterest" title="Pinterest" href="http://pinterest.com/<?php echo $options['pinterest_url']; ?>" target="_blank">Pinterest</a><?php endif; ?>
		<?php if ( $options['soundcloud_url'] != '' ) : ?><a id="soundcloud" title="SoundCloud" href="http://soundcloud.com/<?php echo $options['soundcloud_url']; ?>" target="_blank">SoundCloud</a><?php endif; ?>
		<?php if ( $options['instagram_url'] != '' ) : ?><a id="instagram" title="Instagram" href="http://instagram.com/<?php echo $options['instagram_url']; ?>" target="_blank">Instagram</a><?php endif; ?>
		<?php if ( $options['linkedin_url'] != '' ) : ?><a id="linkedin" title="Linkedin" href="http://linkedin.com/in/<?php echo $options['linkedin_url']; ?>" target="_blank">Linkedin</a><?php endif; ?>
		<?php if ( $options['github_url'] != '' ) : ?><a id="github" title="GitHub" href="http://github.com/<?php echo $options['github_url']; ?>" target="_blank">GitHub</a><?php endif; ?>
		<?php if ( $options['codepen_url'] != '' ) : ?><a id="codepen" title="CodePen" href="http://codepen.io/<?php echo $options['codepen_url']; ?>" target="_blank">CodePen</a><?php endif; ?>
		<?php if ( $options['behance_url'] != '' ) : ?><a id="behance" title="Behance" href="http://behance.net/<?php echo $options['behance_url']; ?>" target="_blank">Behance</a><?php endif; ?>
		<?php if ( $options['feed_url'] != '' ) : ?><a id="feed" title="Feed" href="<?php echo $options['feed_url']; ?>" target="_blank">Feed</a><?php endif; ?>
		<div class="clear"></div>
	</div>
<?php endif; ?>
<!-- /social -->

		<div class="clear"></div>
	</div>
<!-- /extra -->



<!-- navigation -->
	<div id="navigation">
	<nav>
		<?php if ( has_nav_menu( 'navigation' ) ) : ?>
		<?php wp_nav_menu( array( 'theme_location' => 'navigation', 'menu' => 'navigation', 'container_id' => '', 'container' => 'false', 'depth' => '2') ); ?>
	<?php else: ?>
	<ul><?php wp_list_pages('sort_column=menu_order&sort_order=asc&title_li=&depth=2'); ?></ul>
	<?php endif; ?>
		<div class="clear"></div>
	</nav>
	</div>
<!-- /navigation -->