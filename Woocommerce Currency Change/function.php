<?php

// ✅ Modify the WooCommerce currency symbol for AED
// This filter changes the default symbol for United Arab Emirates Dirham (AED)
// from the Arabic symbol (د.إ) to the plain text 'AED'

add_filter( 'woocommerce_currency_symbol', 'custom_woocommerce_currency_symbol', 10, 2 );

function custom_woocommerce_currency_symbol( $currency_symbol, $currency ) {
    // Check if the current currency is AED (United Arab Emirates Dirham)
    if ( $currency === 'AED' ) {
        return 'AED'; // Override the default symbol with 'AED' text
    }

    // Return the default symbol for all other currencies
    return $currency_symbol;
}

?>
