<?php
/*
 * Plugin Name: Madfoat Secure Payments
 * Plugin URI: https://www.madfoat.com/
 * Description: Madfoat Secure Payments with Woocommerce Subscriptions & Seamless Mode Payments
 * Version: 8.3
 * Author: Madfoat
 * Author URI: https://www.madfoat.com/
 * License: GPL2
 * WC requires at least: 3.0.0
 * WC tested up to: 6.3.1
*/

//directory access forbidden
if (!defined('ABSPATH')) {
    exit;
}

function wc_gateway_madfoat()
{
    static $plugin;

    if (!isset($plugin)) {
        require_once('includes/class-wc-gateway-madfoat-plugin.php');
 
        $plugin = new WC_Gateway_Madfoat_Plugin(__FILE__);
    }

    return $plugin;
}
 
wc_gateway_madfoat()->maybe_run();
