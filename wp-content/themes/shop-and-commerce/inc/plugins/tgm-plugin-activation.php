<?php
/**
 * Recommends plugins for use with the theme via the TGMA Script
 */
if ( !in_array( 'invoice-for-woocommerce-premium/invoice-for-woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
function shop_and_commerce_wp_tgmpa_register() {

	// Get array of recommended plugins
	$plugins = array(

		array(
			'name'				=> 'Invoice for WooCommerce',
			'slug'				=> 'invoice-for-woocommerce',
			'required'			=> false,
			'force_activation'	=> false,
		),

	);

	// Register notice
	tgmpa( $plugins, array(
		'id'           => 'shop_and_commerce_wp_theme',
		'domain'       => 'shop_and_commerce_wp',
		'menu'         => 'install-required-plugins',
		'has_notices'  => true,
		'is_automatic' => false,
		'dismissable'  => true,
	) );

}
add_action( 'tgmpa_register', 'shop_and_commerce_wp_tgmpa_register' );
}