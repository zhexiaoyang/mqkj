<?php

namespace App\Http\Controllers;

use App\Models\MtOrder;
use App\Models\MtOrderItem;
use Illuminate\Http\Request;

class OrderMinKangController extends Controller
{
    /**
     * 推送订单结算信息
     */
    public function jie(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('民康-推送订单结算信息',[$request->get('order_id'), $request->get('status')]);
            $res_str = file_get_contents('http://psapi.625buy.com/api/order/sync?type=4&order_id='.$request->get('order_id'));
            \Log::info('民康-推送美全达返回',[$res_str]);
            if ($res_str) {
                $res = json_decode($res_str, true);
                if (empty($res) || $res['code'] != 0) {
                    \Log::info('民康-推送美全达返回-code不是0', [$res]);
                    file_get_contents('http://psapi.625buy.com/api/order/sync?type=4&order_id='.$request->get('order_id'));
                }
            } else {
                \Log::info('民康-推送美全达返回-无返回');
                file_get_contents('http://psapi.625buy.com/api/order/sync?type=4&order_id='.$request->get('order_id'));
            }
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
            // \Log::info('民康-推送已支付订单',[$request->get('order_id')]);
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
            // \Log::info('民康-推送已完成订单',[$request->get('order_id')]);
            return json_encode(['data' => 'ok']);
        }
        return 200;
        // if ($request->get('order_id')) {
        //     $order_data = [
        //         "order_id" => $request->get("order_id", ""),
        //         "order_tag_list" => urldecode($request->get("order_tag_list", "")),
        //         "wm_order_id_view" => $request->get("wm_order_id_view", ""),
        //         "app_poi_code" => $request->get("app_poi_code", ""),
        //         "wm_poi_name" => urldecode($request->get("wm_poi_name", "")),
        //         "wm_poi_address" => urldecode($request->get("wm_poi_address", "")),
        //         "wm_poi_phone" => $request->get("wm_poi_phone", ""),
        //         "recipient_address" => urldecode($request->get("recipient_address", "")),
        //         "recipient_phone" => $request->get("recipient_phone", ""),
        //         "backup_recipient_phone" => urldecode($request->get("backup_recipient_phone", "")),
        //         "recipient_name" => urldecode($request->get("recipient_name", "")),
        //         "shipping_fee" => $request->get("shipping_fee", 0),
        //         "total" => $request->get("total", 0),
        //         "original_price" => $request->get("original_price", 0),
        //         "caution" => urldecode($request->get("caution", "")),
        //         "shipper_phone" => $request->get("shipper_phone", "") ?? "",
        //         "status" => $request->get("status", 0),
        //         "ctime" => $request->get("ctime", 0),
        //         "utime" => $request->get("utime", 0),
        //         "delivery_time" => $request->get("delivery_time", 0),
        //         "is_third_shipping" => $request->get("is_third_shipping", 0),
        //         "pick_type" => $request->get("pick_type", 0),
        //         "latitude" => $request->get("latitude", 0),
        //         "longitude" => $request->get("longitude", 0),
        //         "day_seq" => $request->get("day_seq", ""),
        //         "logistics_code" => $request->get("logistics_code", ""),
        //         "package_bag_money" => $request->get("package_bag_money", 0),
        //         "package_bag_money_yuan" => $request->get("package_bag_money_yuan", ""),
        //         "total_weight" => $request->get("total_weight", 0),
        //         "mt_created_at" => date("Y-m-d H:i:s", $request->get("ctime", 0)),
        //         "mt_updated_at" => date("Y-m-d H:i:s", $request->get("utime", 0)),
        //     ];
        //
        //     // 商家对账
        //     $poi_receive_detail_yuan = $request->get("poi_receive_detail_yuan");
        //     if ($poi_receive_detail_yuan) {
        //         $order_data["poi_receive_detail_yuan"] = urldecode($poi_receive_detail_yuan);
        //     }
        //     // 订单优惠信息
        //     $extras = $request->get("extras");
        //     if ($extras) {
        //         $order_data["extras"] = urldecode($extras);
        //     }
        //     // 商品优惠信息
        //     // $sku_benefit_detail = $request->get("sku_benefit_detail");
        //     // if ($sku_benefit_detail) {
        //     //     $order_data["sku_benefit_detail"] = urldecode($sku_benefit_detail);
        //     // }
        //     // 订单商品信息
        //     $detail = $request->get("detail");
        //
        //     \Log::info('民康-推送已完成订单', $order_data);
        //
        //     // 创建订单
        //     $order = new MtOrder($order_data);
        //     if ($order->save() && $detail) {
        //         $products = json_decode(urldecode($detail), true);
        //         if (!empty($products)) {
        //             \Log::info('民康-完成订单-商品列表', $products);
        //             $goods_price = 0;
        //             $items = [];
        //             foreach ($products as $product) {
        //                 $goods_price += $product['price'] * 100 * $product['quantity'];
        //                 $tmp['order_id'] = $order->id;
        //                 $tmp['app_food_code'] = $product['app_food_code'];
        //                 $tmp['food_name'] = $product['food_name'];
        //                 $tmp['sku_id'] = $product['sku_id'];
        //                 $tmp['upc'] = $product['upc'];
        //                 $tmp['quantity'] = $product['quantity'];
        //                 $tmp['price'] = $product['price'];
        //                 $tmp['box_num'] = $product['box_num'];
        //                 $tmp['box_price'] = $product['box_price'];
        //                 $tmp['unit'] = $product['unit'];
        //                 $tmp['spec'] = $product['spec'];
        //                 $tmp['weight'] = $product['weight'];
        //                 $items[] = $tmp;
        //             }
        //         }
        //         $order->goods_price = $goods_price / 100;
        //         $order->save();
        //         MtOrderItem::query()->insert($items);
        //     }
        //     return json_encode(['data' => 'ok']);
        // }
        // return 200;
    }

    /**
     * 推送已确认订单
     */
    public function confirm_n(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('民康-推送已确认订单',[$request->get('order_id')]);
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
