<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option( 'kukie_settings' );
delete_transient( 'kukie_dashboard_data' );
delete_transient( 'kukie_settings_cache' );
