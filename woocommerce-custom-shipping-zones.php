<?php
/**
 * Plugin Name: Custom Woo Shipping Zones
*/

add_filter( 'woocommerce_states', 'techiepress_custom_shipping_zones' );

function techiepress_custom_shipping_zones( $states ) {
    
    $states['HK'] = array(
        'HK01' => '中西區',
        'HK02' => '灣仔',
        'HK03' => '東區',
        'HK04' => '南區',
        'HK05' => '油尖旺',
        'HK06' => '深水埗',
        'HK07' => '九龍城',
        'HK08' => '黃大仙',
        'HK09' => '觀塘',
        'HK10' => '葵青',
        'HK11' => '荃灣',
        'HK12' => '屯門',
        'HK13' => '元朗',
        'HK14' => '北區',
        'HK15' => '大埔',
        'HK16' => '沙田',
        'HK17' => '西貢',
        'HK18' => '離島',
    );
    
    return $states ;
}
