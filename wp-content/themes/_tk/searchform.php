<?php
/**
 * The template for displaying search forms in _tk
 *
 * @package _tk
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search"  placeholder="<?php echo esc_attr_x( 'Zoek &hellip;', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Zoeken naar:', 'label', '_tk' ); ?>" autocomplete="off">
</form>
