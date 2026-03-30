<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$kukie_plugin = Kukie_Plugin::instance();
?>
<div class="wrap kukie-wrap">
	<h1 class="screen-reader-text"><?php esc_html_e( 'Kukie.io', 'kukie-cookie-consent' ); ?></h1>
	<hr class="wp-header-end">

	<div class="kukie-connect-box">
		<div class="kukie-connect-logo">
			<img src="<?php echo esc_url( KUKIE_PLUGIN_URL . 'assets/images/kukie-logo-dark.svg' ); ?>" alt="<?php esc_attr_e( 'Kukie.io', 'kukie-cookie-consent' ); ?>" />
		</div>

		<p class="kukie-connect-description">
			<?php esc_html_e( 'Connect your WordPress site to Kukie.io for automatic cookie consent management, GDPR/CCPA compliance, and consent analytics.', 'kukie-cookie-consent' ); ?>
		</p>

		<!-- Connect Form -->
		<div id="kukie-connect-form">
			<div class="kukie-form-group">
				<label for="kukie-api-key"><?php esc_html_e( 'API Key', 'kukie-cookie-consent' ); ?></label>
				<div class="kukie-input-with-toggle">
					<input
						type="password"
						id="kukie-api-key"
						class="kukie-input"
						placeholder="<?php esc_attr_e( 'Paste your 64-character API key', 'kukie-cookie-consent' ); ?>"
						maxlength="64"
						autocomplete="off"
					/>
					<button type="button" id="kukie-toggle-key" class="kukie-btn-icon" title="<?php esc_attr_e( 'Show/hide API key', 'kukie-cookie-consent' ); ?>">
						<span class="dashicons dashicons-visibility"></span>
					</button>
				</div>
				<p class="kukie-help-text">
					<?php
					printf(
						/* translators: %s: link to Kukie.io dashboard */
						esc_html__( 'Find your API key in %s under your site settings.', 'kukie-cookie-consent' ),
						'<a href="https://app.kukie.io" target="_blank" rel="noopener noreferrer">app.kukie.io <span class="dashicons dashicons-external" style="font-size:14px;width:14px;height:14px;text-decoration:none;"></span></a>'
					);
					?>
				</p>
			</div>

			<div id="kukie-connect-error" class="kukie-notice kukie-notice-error" style="display:none;"></div>

			<button type="button" id="kukie-connect-btn" class="kukie-btn-primary kukie-btn-full">
				<span class="kukie-btn-text"><?php esc_html_e( 'Connect to Kukie.io', 'kukie-cookie-consent' ); ?></span>
				<span class="kukie-btn-loading" style="display:none;">
					<span class="kukie-spinner"></span>
					<?php esc_html_e( 'Connecting...', 'kukie-cookie-consent' ); ?>
				</span>
			</button>
		</div>

		<!-- Success State -->
		<div id="kukie-connect-success" style="display:none;">
			<div class="kukie-success-icon">
				<span class="dashicons dashicons-yes-alt"></span>
			</div>
			<h2><?php esc_html_e( 'Connected!', 'kukie-cookie-consent' ); ?></h2>
			<div class="kukie-connect-details">
				<div class="kukie-detail-row">
					<span class="kukie-detail-label"><?php esc_html_e( 'Organisation', 'kukie-cookie-consent' ); ?></span>
					<span class="kukie-detail-value" id="kukie-success-org"></span>
				</div>
				<div class="kukie-detail-row">
					<span class="kukie-detail-label"><?php esc_html_e( 'Plan', 'kukie-cookie-consent' ); ?></span>
					<span class="kukie-detail-value" id="kukie-success-plan"></span>
				</div>
				<div class="kukie-detail-row">
					<span class="kukie-detail-label"><?php esc_html_e( 'Domain', 'kukie-cookie-consent' ); ?></span>
					<span class="kukie-detail-value" id="kukie-success-domain"></span>
				</div>
			</div>
			<a id="kukie-go-dashboard" href="<?php echo esc_url( admin_url( 'admin.php?page=kukie' ) ); ?>" class="kukie-btn-primary kukie-btn-full">
				<?php esc_html_e( 'Go to Dashboard', 'kukie-cookie-consent' ); ?>
			</a>
		</div>

		<p class="kukie-connect-footer">
			<?php
			printf(
				/* translators: %s: link to Kukie.io registration */
				esc_html__( "Don't have an account? %s", 'kukie-cookie-consent' ),
				'<a href="https://app.kukie.io/register" target="_blank" rel="noopener noreferrer">' . esc_html__( 'Sign up free at kukie.io', 'kukie-cookie-consent' ) . '</a>'
			);
			?>
		</p>
	</div>
</div>
