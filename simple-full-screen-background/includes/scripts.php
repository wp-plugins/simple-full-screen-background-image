<?php

function fsb_load_css() {
	wp_enqueue_style('fsb-image', plugin_dir_url( __FILE__ ) . 'fullscreen-image.css');
}
add_action('init', 'fsb_load_css');