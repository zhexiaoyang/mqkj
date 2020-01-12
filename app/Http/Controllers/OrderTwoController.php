<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderTwoController extends Controller
{
    public function jie(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('jie_order',[$request->all()]);
            file_get_contents('http://psapi.625buy.com/api/order/sync?type=3&order_id='.$request->get('order_id'));
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }

    public function create(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('order',[$request->all()]);
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }

    public function refundReject(Request $request)
    {
        $meituan = app('takeaway2');
        return $meituan->order->refundReject(['order_id' => $request->order_id, 'reason' => '和用户沟通一致']);
        // $data = json_decode($res, true);
        // return $data['data'];

    }

    public function refundAgree(Request $request)
    {
        $meituan = app('takeaway2');
        return $meituan->order->refundAgree(['order_id' => $request->order_id, 'reason' => '和用户沟通一致']);
    }

    public function batchPullPhoneNumber(Request $request)
    {
        $meituan = app('takeaway2');
        return $meituan->order->batchPullPhoneNumber(['app_poi_code' => 't_92VaQGqAME', 'offset' => 0, 'limit' => 100]);
    }

    public function confirm(Request $request)
    {
        $meituan = app('takeaway2');
        return $meituan->order->confirm(['order_id' => $request->order_id]);
    }

    public function cancel(Request $request)
    {
        $meituan = app('takeaway2');
        return $meituan->order->cancel(['order_id' => $request->order_id]);
    }

    public function get_cancel(Request $request)
    {
        if ($request->get('order_id')) {
            \Log::info('cancel_order',[$request->all()]);
            file_get_contents('http://psapi.625buy.com/api/order/cancel?type=2&order_id='.$request->get('order_id'));
            return json_encode(['data' => 'ok']);
        }
        return 200;
    }
}
