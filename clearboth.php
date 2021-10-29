<?php
/*
Plugin Name: ClearBoth
Plugin URI: https://nabtron.com/clearboth/
Description: Add linebreak with css style <strong>clear:both</strong> from wordpress editor using shortcode: <strong>[clearboth]</strong> in your post or page.
Version: 1.0.3.6
Author: Nabtron
Author URI: https://nabtron.com/
Min WP Version: 4.2
Max WP Version: 5.8.1
*/

class nabclearboth_main
{
	public static function nabclearboth_func($atts)
	{
		return '<br style="clear:both" />';
	}
}
add_shortcode('clearboth', array('nabclearboth_main', 'nabclearboth_func'));
