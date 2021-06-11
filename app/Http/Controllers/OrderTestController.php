<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderTestController extends Controller
{
    public function jie(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('美团上线测试-创建',[$request->all()]);
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }

    public function create(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('create_order',[$request->all()]);
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }

    public function refundReject(Request $request)
    {
        $meituan = app('test');
        return $meituan->order->refundReject(['order_id' => $request->order_id, 'reason' => '和用户沟通一致']);
        // $data = json_decode($res, true);
        // return $data['data'];

    }

    public function refundAgree(Request $request)
    {
        $meituan = app('test');
        return $meituan->order->refundAgree(['order_id' => $request->order_id, 'reason' => '和用户沟通一致']);
    }

    public function batchPullPhoneNumber(Request $request)
    {
        $meituan = app('test');
        return $meituan->order->batchPullPhoneNumber(['app_poi_code' => 't_92VaQGqAME', 'offset' => 0, 'limit' => 100]);
    }

    public function confirm(Request $request)
    {
        $meituan = app('test');
        return $meituan->order->confirm(['order_id' => $request->order_id]);
    }

    public function cancel(Request $request)
    {
        $meituan = app('test');
        return $meituan->order->cancel(['order_id' => $request->order_id]);
    }

    public function get_cancel(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('美团上线测试-取消',[$request->all()]);
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }
}
