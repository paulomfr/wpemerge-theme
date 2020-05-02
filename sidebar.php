<?php
/**
 * Sidebar partial.
 *
 * @link https://codex.wordpress.org/Customizing_Your_Sidebar
 *
 * @package WPEmergeTheme
 */

?>
<div class="sidebar">
	<ul class="widgets">
		<?php dynamic_sidebar( \MyTheme::theme()->sidebar()->getCurrentSidebarId() ); ?>
	</ul>
</div>
