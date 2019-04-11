<? php
// Twitter
function setting_twitter() { ?>
<input type="text" name="twitter" id="twitter" value="<?php echo
get_option( 'twitter' ); ?>" />
<?php }
function custom_settings_page_setup() {
add_settings_section( 'section', 'All Settings', null, 'theme-options' );
add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'themeoptions', 'section' );
register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );
function setting_github() { ?>
<input type="text" name="github" id="github" value="<?php echo
get_option('github'); ?>" />
<?php }

function setting_github() { ?>
<input type="text" name="github" id="github" value="<?php echo
get_option('github'); ?>" />
<?php }
