<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Kukie_Settings {

	public static function init(): void {
		register_setting( 'kukie_settings_group', 'kukie_settings', [
			'type'              => 'array',
			'sanitize_callback' => [ __CLASS__, 'sanitize' ],
			'default'           => [],
		] );
	}

	public static function sanitize( array $input ): array {
		// The actual sanitisation happens in individual AJAX handlers.
		// This is a safety net for the Settings API.
		return $input;
	}
}
