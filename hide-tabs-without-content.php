<?php // Do not include this if already open!

/**
 * Remove existing tabs from single product pages.
 */
function remove_woocommerce_product_tabs( $tabs ) {
	unset( $tabs['description'] );
	unset( $tabs['reviews'] );
	unset( $tabs['additional_information'] );
	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'remove_woocommerce_product_tabs', 98 );

/**
 * Hook in each tabs callback function after single content.
 */
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_product_description_tab' );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_product_additional_information_tab' );
add_action( 'woocommerce_after_single_product_summary', 'comments_template' );
