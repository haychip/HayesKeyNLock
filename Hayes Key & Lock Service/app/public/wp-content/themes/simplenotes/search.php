<?php get_header(); ?>

<!-- entries -->
	<div id="entries">

<!-- breadcrumbs -->
	<div id="breadcrumbs">
		<?php simplenotes_get_breadcrumbs(); ?><div class="clear"></div>
	</div>
<!-- /breadcrumbs -->



<!-- main -->
	<main>

<!-- entry -->
<?php if ( have_posts () ) : while (have_posts()):the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry">
			<h2><span><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span></h2>

<!-- meta header -->
	<div class="meta-header">
		<ul>
			<li class="categories"><?php the_category( '&nbsp;|&nbsp;' ); ?></li>
			<li class="tags"><?php the_tags('', '&nbsp;|&nbsp;', ''); ?></li>
		</ul>
		<div class="clear"></div>
	</div>
<!-- /meta header -->



<!-- contents -->
	<div class="contents">
		<?php the_content(); ?><div class="clear"></div>
		<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?><div class="clear"></div>
	</div>
<!-- /contents -->



<!-- meta footer -->
	<div class="meta-footer">
		<ul>
			<li class="date"><?php the_time('d') ?>/<?php the_time('m') ?>/<?php the_time('Y') ?></li>
			<li class="author"><?php the_author(); ?></li>
			<li class="comments"><?php if ( comments_open()){ ?><a href="<?php echo get_permalink()?>#comments"><?php comments_number('0', '1', '%'); ?> comments</a><?php } elseif ( is_home() ) { ?><a href="<?php echo get_permalink()?>#comments"><?php comments_number('0', '1', '%'); ?> comments</a><?php } ?></li>
			<?php edit_post_link('Edit', '<li class="edit">', '</li>'); ?>
		</ul>
		<div class="clear"></div>
	</div>
<!-- /meta footer -->

	</div>
	</div>
<!-- /entry -->

<?php endwhile; ?>

<!-- pagination -->
	<?php simplenotes_numeric_posts_nav(); ?>
<!-- /pagination -->

<?php else : ?>

<!-- error 404 -->
	<div class="error">
		<div class="error-contents">
			<h2>404 Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here. </p>
		</div>
	</div>
<!-- /error 404 -->

<?php endif; ?>

	</main>
<!-- /main -->

<?php get_sidebar(); ?>

	<div class="clear"></div>
	</div>
<!-- /entries -->

<?php get_footer(); ?>