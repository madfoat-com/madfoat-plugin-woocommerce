<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Settings for Madfoat Gateway.
 */
return array(
    'enabled' => array(
        'title'     => __('Enable/Disable', 'wcmadfoat'),
        'type'      => 'checkbox',
        'label'     => __('Enable Madfoat', 'wcmadfoat'),
        'default'   => 'yes'
    ),
    'testmode' => array(
        'title'         => __('Test Mode', 'wcmadfoat'),
        'type'          => 'checkbox',
        'label'         => __('Generate transactions in test mode', 'wcmadfoat'),
        'default'       => 'yes',
        'description'   => __('Use this while testing your integration. You must disable test mode when you are ready to take live transactions')
    ),
    'title' => array(
        'title'         => __('Title', 'wcmadfoat'),
        'type'          => 'text',
        'description'   => __('This controls the title which the user sees during checkout.', 'wcmadfoat'),
        'default'       => __('Pay using a credit or debit card via Online Payments', 'wcmadfoat'),
        'desc_tip'      => true,
    ),
    'title_arabic' => array(
        'title'         => __('Title Arabic', 'wcmadfoat'),
        'type'          => 'text',
        'description'   => __('This controls the title which the user sees during checkout.', 'wcmadfoat'),
        'default'       => __('ادفع باستخدام بطاقة ائتمان أو خصم عبر المدفوعات عبر الإنترنت', 'wcmadfoat'),
        'desc_tip'      => true,
    ),
    'description' => array(
        'title'         => __('Description', 'wcmadfoat'),
        'type'          => 'textarea',
        'description'   => __('This controls the description which the user sees during checkout.', 'wcmadfoat'),
        'default'       => __('Pay using a credit or debit card via Online Payments', 'wcmadfoat'),
        'desc_tip'      => true,
    ),
    'description_arabic' => array(
        'title'         => __('Description Arabic', 'wcmadfoat'),
        'type'          => 'textarea',
        'description'   => __('This controls the description which the user sees during checkout.', 'wcmadfoat'),
        'default'       => __('ادفع باستخدام بطاقة ائتمان أو خصم عبر المدفوعات عبر الإنترنت', 'wcmadfoat'),
        'desc_tip'      => true,
    ),
    'cart_desc' => array(
        'title'         => __('Transaction description', 'wcmadfoat'),
        'type'          => 'text',
        'description'   => __('This controls the transaction description shown within the hosted payment page.', 'wcmadfoat'),
        'default'       => __('Your order from Store Name', 'wcmadfoat'),
        'desc_tip'      => true,
    ),
    'store_id' => array(
        'title'         => __('Store ID', 'wcmadfoat'),
        'type'          => 'text',
        'description'   => __('Enter your Madfoat Store ID.', 'wcmadfoat'),
        'default'       => '',
        'desc_tip'      => true,
        'placeholder'   => '[StoreID]'
    ),
    'store_secret' => array(
        'title'         => __('Authentication Key', 'wcmadfoat'),
        'type'          => 'text',
        'description'   => __('This value must match the value configured in the hosted payment page V2 settings', 'wcmadfoat'),
        'default'       => '',
        'desc_tip'      => true,
        'placeholder'   => '[Authentication Key]'
    ),
    'remote_store_secret' => array(
        'title'         => __('Remote API Authentication Key', 'wcmadfoat'),
        'type'          => 'text',
        'description'   => __('Required for Subscription Payments. This value must match the value configured in the Remote API settings for Recurring Payments', 'wcmadfoat'),
        'default'       => '',
        'desc_tip'      => false,
        'placeholder'   => '[Remote API Authentication Key]'
    ),
    'payment_mode' => array(
        'title'           => __('Payment Mode', 'wcmadfoat'),
        'type'            => 'select',
        'options'         => array(
          '0'               => __( 'Standard Mode', 'wcmadfoat' ),
          '2'               => __( 'iFrame on New Page', 'wcmadfoat' ),
          '9'               => __( 'iFrame on Checkout Page', 'wcmadfoat' ),
          '10'              => __( 'Seamless Payment Mode', 'wcmadfoat' ),
        ),
        'label'           => __('Select Payment mode by which user will pay', 'wcmadfoat'),
        'default'         => '0',
        'desc_tip'        => true,
        'description'     => __('Use iframe mode if SSL installed on server otherwise select Standard Mode.')
    ),
    'subscription_method' => array(
        'title'           => __('Subscription Method', 'wcmadfoat'),
        'type'            => 'select',
        'options'         => array(
          'woocomm'       => __( 'Woocommerce Subscriptions', 'wcmadfoat' ),
          'madfoat'          => __( 'Madfoat Agreement Model', 'wcmadfoat' ),
        ),
        'label'           => __('Select Subscription method for recurring payments', 'wcmadfoat'),
        'default'         => 'woocomm',
        'desc_tip'        => true
    ),
    'language' => array(
        'title'         => __('Language', 'wcmadfoat'),
        'type'          => 'select',
        'options'       => array(
          'en'              => __('English', 'wcmadfoat'),
          'ar'              => __('Arabic', 'wcmadfoat')),
        'label'         => __('Select Payment mode by which user will pay', 'wcmadfoat'),
        'default'       => 'en',
        'desc_tip'      => true,
        'description'   => __('The Language used in Payment Page interface.')
    ),
    'default_order_status' => array(
        'title'         => __('Default Order Status', 'wcmadfoat'),
        'type'          => 'select',
        'options'       => array(
          'none'            => __('Default', 'wcmadfoat'),
          'on-hold'         => __('On Hold', 'wcmadfoat'),
          'processing'      => __('Processing', 'wcmadfoat'),
          'completed'       => __('Completed', 'wcmadfoat'),
          'pending'         => __('pending', 'wcmadfoat'),
         ),
        'default'       => 'none',
        'description'   => __('The default order status after payment.', 'wcmadfoat')
    ),
);
