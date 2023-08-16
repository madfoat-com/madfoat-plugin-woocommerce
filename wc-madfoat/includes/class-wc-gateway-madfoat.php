<?php
/*
 * Madfoat Gateway for woocommercee
*/

//directory access forbidden
if (!defined('ABSPATH')) {
    exit;
}

class WC_Gateway_Madfoat extends WC_Madfoat_Payment_Gateway
{
    public function __construct()
    {
        $this->id = 'wcmadfoat';

        parent::__construct();
    }
}
