<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly


function cf7rzp_get_payment_more_info($post_id){

    $res = [];
    $post_id = sanitize_text_field(is_numeric($_GET['post_id'])?$_GET['post_id']:exit);

    $post = get_post($post_id);
    $status = $post->post_status;
    
    $post_meta = get_post_meta($post_id);
    $order_id = $post_meta['cf7rzp_order_id'][0];
    $item_id = $post_meta['item_id'][0];
    $item_name = $post_meta['item_name'][0];
    $item_price = $post_meta['item_price'][0];
    $form_id = $post_meta['cf7_id'][0];
    $gateway = $post_meta['gateway'][0];
    $mode = $post_meta['mode'][0];
    $rzp_order_id = $post_meta['rzp_order_id'][0];
    $rzp_payment_id = $post_meta['rzp_payment_id'][0];
    $failure_reason = $post_meta['failure_reason'][0];

    $res['order_id'] = $order_id;
    $res['item_id'] = $item_id;
    $res['item_name'] = $item_name;
    $res['item_price'] = $item_price;
    $res['form_name'] = get_the_title($form_id);
    $res['gateway'] = $gateway;
    $res['mode'] = $mode;
    $res['rzp_order_id'] = $rzp_order_id;
    $res['status'] = $status;
    $res['status_label'] = cf7rzp_get_payment_status_label($status);

    $dt = get_the_date( 'Y-m-d H:i:s', $post_id);
    $dt = new DateTime($dt, new DateTimeZone('UTC'));
    $dt->setTimezone(new DateTimeZone('Asia/Kolkata'));
    $res['created_at'] = $dt->format('F j, Y | h:i:s a');



    if($status == "cf7rzp_success")
        $res['rzp_payment_id'] = $rzp_payment_id;

    if($status == "cf7rzp_failure")
        $res['failure_reason'] = $failure_reason;

    echo json_encode($res);
    wp_die();
}
add_action( 'wp_ajax_nopriv_cf7rzp_get_payment_more_info', 'cf7rzp_get_payment_more_info' );
add_action( 'wp_ajax_cf7rzp_get_payment_more_info', 'cf7rzp_get_payment_more_info' );