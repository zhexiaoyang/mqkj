<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderTwoController extends Controller
{
    public function create(Request $request)
    {
        \Log::info('order-two',[$request->all()]);
        return json_encode(['data' => 'ok']);
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
}
