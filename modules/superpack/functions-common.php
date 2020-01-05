<?php

namespace PixelYourSite\SuperPack;

use PixelYourSite;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function isPysProActive() {
	
	if ( ! function_exists( 'is_plugin_active' ) ) {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
	
	return is_plugin_active( 'pixelyoursite-pro/pixelyoursite-pro.php' );
	
}

function pysProVersionIsCompatible() {
 
	if ( ! function_exists( 'get_plugin_data' ) ) {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
	
	$data = get_plugin_data( WP_PLUGIN_DIR   . '/pixelyoursite-pro/pixelyoursite-pro.php', false, false );

	return version_compare( $data['Version'], PYS_SUPER_PACK_PRO_MIN_VERSION, '>=' );
	
}