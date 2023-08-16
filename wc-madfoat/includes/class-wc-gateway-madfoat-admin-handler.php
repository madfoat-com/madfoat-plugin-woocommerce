<?php
/**
 * Madfoat plugin admin handler
 */

//directory access forbidden
if (!defined('ABSPATH')) {
    exit;
}

class WC_Gateway_Madfoat_Admin_Handler
{
    public function __construct()
    {
        $this->allowed_currencies = include(dirname(__FILE__) . '/settings/supportd-currencies-madfoat.php');
    }
    public function is_valid_for_use()
    {
        $currency_list = apply_filters('woocommerce_madfoat_supported_currencies', $this->allowed_currencies);
        return in_array(get_woocommerce_currency(), $currency_list);
    }
    
    public function init_form_fields()
    {
        return include(dirname(__FILE__) . '/settings/settings-madfoat.php');
    }
}
