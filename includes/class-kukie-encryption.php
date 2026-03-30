<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Kukie_Encryption {

	public static function encrypt( string $value ): string {
		$key = hash( 'sha256', wp_salt( 'auth' ), true );
		$iv  = random_bytes( 16 );

		$encrypted = openssl_encrypt( $value, 'aes-256-cbc', $key, 0, $iv );

		return base64_encode( $iv . '::' . $encrypted );
	}

	public static function decrypt( string $value ): string {
		$key  = hash( 'sha256', wp_salt( 'auth' ), true );
		$data = base64_decode( $value );

		if ( strpos( $data, '::' ) === false ) {
			return '';
		}

		[ $iv, $encrypted ] = explode( '::', $data, 2 );

		$decrypted = openssl_decrypt( $encrypted, 'aes-256-cbc', $key, 0, $iv );

		return $decrypted !== false ? $decrypted : '';
	}
}
