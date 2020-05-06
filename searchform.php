<?php
/**
 * Search form partial.
 *
 * @link https://codex.wordpress.org/Styling_Theme_Forms#The_Search_Form
 *
 * @package MyTheme
 */

?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form" method="get" role="search">
	<label for="s">
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'mytheme' ); ?></span>

		<input type="text" title="<?php esc_attr_e( 'Search for:', 'mytheme' ); ?>" name="s" value="" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'mytheme' ); ?>" class="search-form__field" />
	</label>

	<input type="submit" value="<?php esc_attr_e( 'Search', 'mytheme' ); ?>" class="search-form__submit-button screen-reader-text" />
</form>
