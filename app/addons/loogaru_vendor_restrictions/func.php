<?php
/*********************************************************
*                                                        *
*   (c) 2017 Loogaru, Durkin Andrey                      *
*                                                        *
* This software is under MIT license, so it's FREE.		 *
* FREE as you can feel FREE to DONATE at http://looga.ru *
* Thank you!!											 *
*                                                        *
*********************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Registry;

function fn_settings_variants_addons_loogaru_vendor_restrictions_statuses()
{
    $order_statuses = fn_get_simple_statuses('O', false, false, CART_LANGUAGE);
    return $order_statuses;
};

function fn_loogaru_vendor_restrictions_statuses(&$arr)
{	$restricted_order_statuses = Registry::get('addons.loogaru_vendor_restrictions.statuses');
	$arr = array_diff_key($arr, $restricted_order_statuses);
}
