<?php
/*
Plugin Name: ClearBoth
Plugin URI: http://www.nabtron.com/clearboth/
Description: Add clear both via line break or div using shortcode: <strong>[clearboth]</strong> in your post or page plugin for wordpress
Version: 1.0.3
Author: Nabtron
Author URI: http://nabtron.com/
Min WP Version: 4.2
Max WP Version: 4.7
*/

class nabclearboth_main {
	public static function nabclearboth_func( $atts ) {
		return '<br style="clear:both" />';
	}
 }
 add_shortcode( 'clearboth', array( 'nabclearboth_main', 'nabclearboth_func' ) );
?>
