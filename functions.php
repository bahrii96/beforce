<?php

// Adding code before closing head tag

add_action('wp_head', function () {
	if (get_theme_mod('header-scripts-settings')) :
		echo get_theme_mod('header-scripts-settings');
	endif;
});

// Adding code before closing body tag

add_action('wp_footer', function () {
	if (get_theme_mod('footer-scripts-settings')) :
		echo get_theme_mod('footer-scripts-settings');
	endif;
});

/* Custom Theme Settings funcitons.php */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

register_nav_menus(array(
	'primary_left' => __('Primary Menu'),
));

add_theme_support('woocommerce');


add_theme_support('post-thumbnails');
//add_image_size('large-preview', 550, 365, true);\


function allow_svg_upload($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'allow_svg_upload');

// shortcodes connect
// include 'inc/shortcodes.php';

// theme custom settings
include 'inc/settings.php';
include 'inc/customizer-theme-settings.php';
include 'inc/assets.php';
include 'inc/disable-emojis.php';
include 'inc/features.php';


require_once get_stylesheet_directory() . '/inc/navigation.php';

function add_paragraph_tags_to_acf_wysiwyg_content($value, $post_id, $field)
{
	if ($field['type'] === 'wysiwyg') {
		$formatted_content = wpautop($value);
		return $formatted_content;
	}

	return $value;
}

add_filter('acf/format_value', 'add_paragraph_tags_to_acf_wysiwyg_content', 10, 3);


add_action('init', 'remove_shortlink');

function remove_shortlink()
{
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
};

$LastModified_unix = 1294844676; // время последнего изменения страницы
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
$IfModifiedSince = false;
if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))
	$IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))
	$IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
	header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
	exit;
}
header('Last-Modified: ' . $LastModified);
add_filter( 'wpseo_opengraph_title', 'remove_yoast_meta_description' );
add_filter( 'wpseo_opengraph_desc', 'remove_yoast_meta_description' );
function remove_yoast_meta_description( $myfilter ) {
        return false;
   }
