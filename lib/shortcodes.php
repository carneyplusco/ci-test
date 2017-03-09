<?php
namespace Roots\Sage\Setup;
use Roots\Sage\Assets;

/**
 * Returns app store badge svg with link to app
 */
function app_store_badge() {
  return '<a href="https://itunes.apple.com/us/app/carnegie-museum-of-art/id700992890?mt=8" title="Download our app on the App Store">'.Assets\inline_svg('images/app-store-badge.svg').'<span class="screen-reader-text">Download on the App Store</span></a>';
}

/**
 * Returns app store link to app
 */
function app_store_link() {
  return '<a href="https://itunes.apple.com/us/app/carnegie-museum-of-art/id700992890?mt=8" title="Download our app on the App Store">download on the App Store</a>';
}

/**
 * Returns Vimeo embed
 * [vimeo id=""]
 */
function vimeo($atts) {
	$a = shortcode_atts(
		array(
			'id' => '',
		),
		$atts
	);
	return '<div class="embed"><iframe src="https://player.vimeo.com/video/'.$a['id'].'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
}

/**
 * Returns Youtube embed
 * [youtube id=""]
 */
function youtube($atts) {
	$a = shortcode_atts(
		array(
      'id' => '',
    ),
    $atts
  );
  return '<div class="embed"><iframe src="http://www.youtube.com/embed/'.$a['id'].'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
}

/**
 * Register shortcodes
 */
function register_shortcodes() {
	add_shortcode('app_store_badge', __NAMESPACE__ . '\\app_store_badge');
  add_shortcode('app_store_link', __NAMESPACE__ . '\\app_store_link');
  add_shortcode('vimeo', __NAMESPACE__ . '\\vimeo');
  add_shortcode('youtube', __NAMESPACE__ . '\\youtube');
}
add_action('init', __NAMESPACE__ . '\\register_shortcodes');

?>
