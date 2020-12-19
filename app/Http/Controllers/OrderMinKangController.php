<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderMinKangController extends Controller
{
    /**
     * 推送订单结算信息
     */
    public function jie(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('民康-推送订单结算信息',[$request->all()]);
            file_get_contents('http://psapi.625buy.com/api/order/sync?type=4&order_id='.$request->get('order_id'));
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }

    /**
     * 推送已支付订单
     */
    public function create(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('民康-推送已支付订单',[$request->all()]);
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }

    /**
     * 推送已完成订单
     */
    public function over(Request $request)
    {
        if ($request->get('order_id')) {
            $order = [
                "order_id" => $request->get("order_id"),
                "order_tag_list" => $request->get("order_tag_list"),
                "wm_order_id_view" => $request->get("wm_order_id_view"),
                "app_poi_code" => $request->get("app_poi_code"),
                "wm_poi_name" => $request->get("wm_poi_name"),
                "wm_poi_address" => $request->get("wm_poi_address"),
                "wm_poi_phone" => $request->get("wm_poi_phone"),
                "recipient_address" => $request->get("recipient_address"),
                "recipient_phone" => $request->get("recipient_phone"),
                "backup_recipient_phone" => $request->get("backup_recipient_phone"),
                "recipient_name" => $request->get("recipient_name"),
                "shipping_fee" => $request->get("shipping_fee"),
                "total" => $request->get("total"),
                "original_price" => $request->get("original_price"),
                "caution" => $request->get("caution"),
                "shipper_phone" => $request->get("shipper_phone"),
                "status" => $request->get("status"),
                "ctime" => $request->get("ctime"),
                "utime" => $request->get("utime"),
                "delivery_time" => $request->get("delivery_time"),
                "is_third_shipping" => $request->get("is_third_shipping"),
                "pick_type" => $request->get("pick_type"),
                "latitude" => $request->get("latitude"),
                "longitude" => $request->get("longitude"),
                "day_seq" => $request->get("day_seq"),
                "logistics_code" => $request->get("logistics_code"),
                "poi_receive_detail" => $request->get("poi_receive_detail"),
                "detail" => $request->get("detail"),
                "extras" => $request->get("extras"),
                "sku_benefit_detail" => $request->get("sku_benefit_detail"),
                "package_bag_money" => $request->get("package_bag_money"),
                "package_bag_money_yuan" => $request->get("package_bag_money_yuan"),
                "poi_receive_detail_yuan" => $request->get("poi_receive_detail_yuan"),
                "total_weight" => $request->get("total_weight"),
            ];
            \Log::info('民康-推送已完成订单', $order);
            $order2 = [
                "order_id" => $request->get("order_id"),
                "order_tag_list" => $request->get("order_tag_list"),
                "wm_order_id_view" => $request->get("wm_order_id_view"),
                "app_poi_code" => $request->get("app_poi_code"),
                "wm_poi_name" => urldecode($request->get("wm_poi_name")),
                "wm_poi_address" => urldecode($request->get("wm_poi_address")),
                "wm_poi_phone" => $request->get("wm_poi_phone"),
                "recipient_address" => $request->get("recipient_address"),
                "recipient_phone" => $request->get("recipient_phone"),
                "backup_recipient_phone" => $request->get("backup_recipient_phone"),
                "recipient_name" => $request->get("recipient_name"),
                "shipping_fee" => $request->get("shipping_fee"),
                "total" => $request->get("total"),
                "original_price" => $request->get("original_price"),
                "caution" => $request->get("caution"),
                "shipper_phone" => $request->get("shipper_phone"),
                "status" => $request->get("status"),
                "ctime" => $request->get("ctime"),
                "utime" => $request->get("utime"),
                "delivery_time" => $request->get("delivery_time"),
                "is_third_shipping" => $request->get("is_third_shipping"),
                "pick_type" => $request->get("pick_type"),
                "latitude" => $request->get("latitude"),
                "longitude" => $request->get("longitude"),
                "day_seq" => $request->get("day_seq"),
                "logistics_code" => $request->get("logistics_code"),
                "poi_receive_detail" => $request->get("poi_receive_detail"),
                "detail" => $request->get("detail"),
                "extras" => $request->get("extras"),
                "sku_benefit_detail" => $request->get("sku_benefit_detail"),
                "package_bag_money" => $request->get("package_bag_money"),
                "package_bag_money_yuan" => $request->get("package_bag_money_yuan"),
                "poi_receive_detail_yuan" => $request->get("poi_receive_detail_yuan"),
                "total_weight" => $request->get("total_weight"),
            ];
            \Log::info('民康-推送已完成订单', $order2);
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }

    /**
     * 推送已确认订单
     */
    public function confirm_n(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('民康-推送已确认订单',[$request->all()]);
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }

    public function refundReject(Request $request)
    {
        $meituan = app('minkang');
        return $meituan->order->refundReject(['order_id' => $request->order_id, 'reason' => '和用户沟通一致']);
        // $data = json_decode($res, true);
        // return $data['data'];

    }

    public function refundAgree(Request $request)
    {
        $meituan = app('minkang');
        return $meituan->order->refundAgree(['order_id' => $request->order_id, 'reason' => '和用户沟通一致']);
    }

    public function batchPullPhoneNumber(Request $request)
    {
        $meituan = app('minkang');
        return $meituan->order->batchPullPhoneNumber(['app_poi_code' => '5172_2701062', 'offset' => 0, 'limit' => 100]);
    }

    public function confirm(Request $request)
    {
        $meituan = app('minkang');
        return $meituan->order->confirm(['order_id' => $request->order_id]);
    }

    public function cancel(Request $request)
    {
        $meituan = app('minkang');
        return $meituan->order->cancel(['order_id' => $request->order_id]);
    }

    public function get_cancel(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('民康订单-取消',[$request->all()]);
            file_get_contents('http://psapi.625buy.com/api/order/cancel?type=4&order_id='.$request->get('order_id'));
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }
}
