<?php
/**
 * Madfoat Plugin Loader.
 */

//directory access forbidden
if (!defined('ABSPATH')) {
    exit;
}

class WC_Gateway_madfoat_Gateway_Loader
{
    
    public function __construct()
    {
        $includes_path = wc_gateway_madfoat()->includes_path;

        require_once($includes_path . 'class-wc-gateway-madfoat.php');

        add_filter('woocommerce_payment_gateways', array($this, 'payment_gateways'));
    }

    /**
     * Register madfoat secure payment methods.
     *
     * @param array Payment methods.
     *
     * @return array Payment methods
     */
    public function payment_gateways($methods)
    {
        $methods[] = 'WC_Gateway_Madfoat';
        return $methods;
    }
}
