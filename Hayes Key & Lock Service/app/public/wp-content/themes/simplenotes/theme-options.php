<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );
function theme_options_init(){
register_setting( 'simplenotes_options', 'simplenotes_theme_options', 'theme_options_validate' );
}
function theme_options_add_page() {
add_theme_page( __( 'Theme Options', 'simplenotes' ), __( 'Theme Options', 'simplenotes' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
function theme_options_do_page() {
if ( ! isset( $_REQUEST['settings-updated'] ) )
$_REQUEST['settings-updated'] = false;
?>
<div class="wrap">
<?php echo "<h2>" . wp_get_theme() . __( ' Theme Options', 'simplenotes' ) . "</h2>"; ?>
<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div class="updated fade"><p><strong><?php _e( 'Options saved', 'simplenotes' ); ?></strong></p></div>
<?php endif; ?>
<form method="post" action="options.php">
<?php settings_fields( 'simplenotes_options' ); ?>
<?php $options = get_option( 'simplenotes_theme_options' ); ?>
<table class="form-table">

<!-- start checkbox option (description) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[option_description]"><?php _e( 'Enable description:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[option_description]" name="simplenotes_theme_options[option_description]" type="checkbox" value="1" <?php checked( '1', $options['option_description'] ); ?> />
	</td>
</tr>
<!-- /checkbox option (description) -->

<!-- start checkbox option (social) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[option_social]"><?php _e( 'Social network:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[option_social]" name="simplenotes_theme_options[option_social]" type="checkbox" value="1" <?php checked( '1', $options['option_social'] ); ?> />
	</td>
</tr>
<!-- /checkbox option (social) -->

<!-- checkbox option (search) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[option_search]"><?php _e( 'Search bar:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[option_search]" name="simplenotes_theme_options[option_search]" type="checkbox" value="1" <?php checked( '1', $options['option_search'] ); ?> />
	</td>
</tr>
<!-- /checkbox option (search) -->

<!-- start text input option (feed) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[feed_url]"><?php _e( 'Feed:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[feed_url]" class="regular-text" type="text" name="simplenotes_theme_options[feed_url]" value="<?php echo $options['feed_url']; ?>" />
	</td>
</tr>
<!-- end text input option (feed) -->

<!-- start text input option (behance) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[behance_url]"><?php _e( 'Behance:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[behance_url]" class="regular-text" type="text" name="simplenotes_theme_options[behance_url]" value="<?php echo $options['behance_url']; ?>" />
	</td>
</tr>
<!-- end text input option (behance) -->

<!-- start text input option (codepen) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[copepen_url]"><?php _e( 'Codepen:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[codepen_url]" class="regular-text" type="text" name="simplenotes_theme_options[codepen_url]" value="<?php echo $options['codepen_url']; ?>" />
	</td>
</tr>
<!-- end text input option (codepen) -->

<!-- start text input option (facebook) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[facebook_url]"><?php _e( 'Facebook:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[facebook_url]" class="regular-text" type="text" name="simplenotes_theme_options[facebook_url]" value="<?php echo $options['facebook_url']; ?>" />
	</td>
</tr>
<!-- end text input option (facebook) -->

<!-- start text input option (github) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[github_url]"><?php _e( 'GitHub:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[github_url]" class="regular-text" type="text" name="simplenotes_theme_options[github_url]" value="<?php echo $options['github_url']; ?>" />
	</td>
</tr>
<!-- end text input option (github) -->

<!-- start text input option (instagram) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[instagram_url]"><?php _e( 'Instagram:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[instagram_url]" class="regular-text" type="text" name="simplenotes_theme_options[instagram_url]" value="<?php echo $options['instagram_url']; ?>" />
	</td>
</tr>
<!-- end text input option (instagram) -->

<!-- start text input option (soundcloud) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[soundcloud_url]"><?php _e( 'Soundcloud:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[soundcloud_url]" class="regular-text" type="text" name="simplenotes_theme_options[soundcloud_url]" value="<?php echo $options['soundcloud_url']; ?>" />
	</td>
</tr>
<!-- end text input option (soundcloud) -->

<!-- start text input option (linkedin) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[linkedin_url]"><?php _e( 'Linkedin:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[linkedin_url]" class="regular-text" type="text" name="simplenotes_theme_options[linkedin_url]" value="<?php echo $options['linkedin_url']; ?>" />
	</td>
</tr>
<!-- end text input option (linkedin) -->

<!-- start text input option (pinterest) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[pinterest_url]"><?php _e( 'Pinterest:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[pinterest_url]" class="regular-text" type="text" name="simplenotes_theme_options[pinterest_url]" value="<?php echo $options['pinterest_url']; ?>" />
	</td>
</tr>
<!-- end text input option (pinterest) -->

<!-- start text input option (tumblr) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[tumblr_url]"><?php _e( 'Tumblr:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[tumblr_url]" class="regular-text" type="text" name="simplenotes_theme_options[tumblr_url]" value="<?php echo $options['tumblr_url']; ?>" />
	</td>
</tr>
<!-- end text input option (tumblr) -->

<!-- start text input option (twitter) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[twitter_url]"><?php _e( 'Twitter:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[twitter_url]" class="regular-text" type="text" name="simplenotes_theme_options[twitter_url]" value="<?php echo $options['twitter_url']; ?>" />
	</td>
</tr>
<!-- end text input option (twitter) -->

<!-- start text input option (spotify) -->
<tr valign="top" style="background-color:#FFFFFF;border:1px solid #E5E5E5;">
	<th scope="row" style="background-color:#FBFBFB;border-right:1px solid #E5E5E5;padding:15px;vertical-align:middle;text-align:right;">
		<label class="" for="simplenotes_theme_options[spotify_url]"><?php _e( 'Spotify:', 'simplenotes' ); ?></label>
	</th>
	<td style="padding:15px;vertical-align:middle;text-align:left;">
		<input id="simplenotes_theme_options[spotify_url]" class="regular-text" type="text" name="simplenotes_theme_options[spotify_url]" value="<?php echo $options['spotify_url']; ?>" />
	</td>
</tr>
<!-- end text input option (spotify) -->

</table>
<p class="submit"><input type="submit" class="button-primary" value="<?php _e( 'Save settings', 'simplenotes' ); ?>" /></p>
</form>
</div>
<?php
}
function theme_options_validate( $input ) {
if ( ! isset( $input['option_tagline'] ) )
$input['option_tagline'] = null;
$input['option_tagline'] = ( $input['option_tagline'] == 1 ? 1 : 0 );
if ( ! isset( $input['option_search'] ) )
$input['option_search'] = null;
$input['option_search'] = ( $input['option_search'] == 1 ? 1 : 0 );
if ( ! isset( $input['option_social'] ) )
$input['option_social'] = null;
$input['option_social'] = ( $input['option_social'] == 1 ? 1 : 0 );
$input['feed_url'] = wp_filter_nohtml_kses( $input['feed_url'] );
$input['behance_url'] = wp_filter_nohtml_kses( $input['behance_url'] );
$input['codepen_url'] = wp_filter_nohtml_kses( $input['codepen_url'] );
$input['facebook_url'] = wp_filter_nohtml_kses( $input['facebook_url'] );
$input['github_url'] = wp_filter_nohtml_kses( $input['github_url'] );
$input['instagram_url'] = wp_filter_nohtml_kses( $input['instagram_url'] );
$input['soundcloud_url'] = wp_filter_nohtml_kses( $input['soundcloud_url'] );
$input['linkedin_url'] = wp_filter_nohtml_kses( $input['linkedin_url'] );
$input['pinterest_url'] = wp_filter_nohtml_kses( $input['pinterest_url'] );
$input['tumblr_url'] = wp_filter_nohtml_kses( $input['tumblr_url'] );
$input['twitter_url'] = wp_filter_nohtml_kses( $input['twitter_url'] );
$input['spotify_url'] = wp_filter_nohtml_kses( $input['spotify_url'] );
return $input;
}