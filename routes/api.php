<?php

use Illuminate\Support\Facades\Route;

/**
 * 毛绒熊
 */
Route::group(['prefix' => 'm'], function () {
    // 创建订单
    Route::post('order/create', 'OrderController@create')->name('m.order.refund.create');
    // 订单取消
    Route::get('order/cancel', 'OrderController@get_cancel')->name('m.order.get_cancel');
    // Route::get('order/cancel', function() {
    //     return json_encode(['data' => 'ok']);
    // });
    // 催单
    Route::post('order/cui', function() {
        return json_encode(['data' => 'ok']);
    });
    // 降级
    Route::post('order/jiang', function() {
        return json_encode(['data' => 'ok']);
    });
    // 退款
    Route::get('order/refund', function() {
        return json_encode(['data' => 'ok']);
    });
    // 状态
    Route::post('order/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 确认
    Route::post('order/confirm_n', function() {
        return json_encode(['data' => 'ok']);
    });
    // 门店状态
    Route::post('shop/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 完成
    Route::post('order/over', function() {
        return json_encode(['data' => 'ok']);
    });
    // 结算
    Route::post('order/jie', 'OrderController@jie')->name('m.order.jie');

    Route::post('order/refund/reject', 'OrderController@refundReject')->name('m.order.refund.reject');
    Route::post('order/refund/agree', 'OrderController@refundAgree')->name('m.order.refund.agree');
    Route::post('order/batchPullPhoneNumber', 'OrderController@batchPullPhoneNumber')->name('m.order.batchPullPhoneNumber');
    Route::post('order/confirm', 'OrderController@confirm')->name('m.order.confirm');
    Route::post('order/cancel', 'OrderController@cancel')->name('m.order.cancel');
});

/**
 * 洁爱眼
 */
Route::group(['prefix' => 'j'], function () {
    // 创建订单
    Route::post('order/create', 'OrderTwoController@create')->name('j.order.refund.create');
    // 订单取消
    Route::get('order/cancel', 'OrderTwoController@get_cancel')->name('j.order.get_cancel');
    // Route::get('order/cancel', function() {
    //     return json_encode(['data' => 'ok']);
    // });
    // 催单
    Route::post('order/cui', function() {
        return json_encode(['data' => 'ok']);
    });
    // 降级
    Route::post('order/jiang', function() {
        return json_encode(['data' => 'ok']);
    });
    // 退款
    Route::get('order/refund', function() {
        return json_encode(['data' => 'ok']);
    });
    // 状态
    Route::post('order/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 确认
    Route::post('order/confirm_n', function() {
        return json_encode(['data' => 'ok']);
    });
    // 门店状态
    Route::post('shop/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 完成
    Route::post('order/over', function() {
        return json_encode(['data' => 'ok']);
    });
    // 结算
    Route::post('order/jie', 'OrderTwoController@jie')->name('j.order.jie');
    // Route::post('order/jie', function() {
    //     return json_encode(['data' => 'ok']);
    // });

    Route::post('order/refund/reject', 'OrderTwoController@refundReject')->name('j.order.refund.reject');
    Route::post('order/refund/agree', 'OrderTwoController@refundAgree')->name('j.order.refund.agree');
    Route::post('order/batchPullPhoneNumber', 'OrderTwoController@batchPullPhoneNumber')->name('j.order.batchPullPhoneNumber');
    Route::post('order/confirm', 'OrderTwoController@confirm')->name('j.order.confirm');
    Route::post('order/cancel', 'OrderTwoController@cancel')->name('j.order.cancel');
});

/**
 * 民康
 */
Route::group(['prefix' => 'minkang'], function () {
    // 创建订单
    Route::post('order/create', 'OrderMinKangController@create')->name('minkang.order.refund.create');
    // 订单取消
    Route::get('order/cancel', 'OrderMinKangController@get_cancel')->name('minkang.order.get_cancel');
    // 催单
    Route::post('order/cui', function() {
        return json_encode(['data' => 'ok']);
    });
    // 降级
    Route::post('order/jiang', function() {
        return json_encode(['data' => 'ok']);
    });
    // 退款
    Route::get('order/refund', function() {
        return json_encode(['data' => 'ok']);
    });
    // 状态
    Route::post('order/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 门店状态
    Route::post('shop/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 确认
    Route::post('order/confirm_n', 'OrderMinKangController@confirm_n')->name('minkang.order.confirm_n');
    // 完成
    Route::post('order/over', 'OrderMinKangController@over')->name('minkang.order.over');
    // 结算
    Route::post('order/jie', 'OrderMinKangController@jie')->name('minkang.order.jie');
    Route::post('order/refund/reject', 'OrderMinKangController@refundReject')->name('minkang.order.refund.reject');
    Route::post('order/refund/agree', 'OrderMinKangController@refundAgree')->name('minkang.order.refund.agree');
    Route::post('order/batchPullPhoneNumber', 'OrderMinKangController@batchPullPhoneNumber')->name('minkang.order.batchPullPhoneNumber');
    Route::post('order/confirm', 'OrderMinKangController@confirm')->name('minkang.order.confirm');
    Route::post('order/cancel', 'OrderMinKangController@cancel')->name('minkang.order.cancel');
});

/**
 * 寝取
 */
Route::group(['prefix' => 'qinqu'], function () {
    // 创建订单
    Route::post('order/create', 'OrderQinQuController@create')->name('qinqu.order.refund.create');
    // 订单取消
    Route::get('order/cancel', 'OrderQinQuController@get_cancel')->name('qinqu.order.get_cancel');
    // 催单
    Route::post('order/cui', function() {
        return json_encode(['data' => 'ok']);
    });
    // 降级
    Route::post('order/jiang', function() {
        return json_encode(['data' => 'ok']);
    });
    // 退款
    Route::get('order/refund', function() {
        return json_encode(['data' => 'ok']);
    });
    // 状态
    Route::post('order/status', function() {
        \Log::info('推送确认订单', [request()->all()]);
        return json_encode(['data' => 'ok']);
    });
    // 确认
    Route::post('order/confirm_n', function() {
        return json_encode(['data' => 'ok']);
    });
    // 门店状态
    Route::post('shop/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 完成
    Route::post('order/over', function() {
        return json_encode(['data' => 'ok']);
    });
    // 结算
    Route::post('order/jie', 'OrderQinQuController@jie')->name('qinqu.order.jie');
    /* 操作 */
    Route::post('order/refund/reject', 'OrderQinQuController@refundReject')->name('qinqu.order.refund.reject');
    Route::post('order/refund/agree', 'OrderQinQuController@refundAgree')->name('qinqu.order.refund.agree');
    Route::post('order/batchPullPhoneNumber', 'OrderQinQuController@batchPullPhoneNumber')->name('qinqu.order.batchPullPhoneNumber');
    Route::post('order/confirm', 'OrderQinQuController@confirm')->name('qinqu.order.confirm');
    Route::post('order/cancel', 'OrderQinQuController@cancel')->name('qinqu.order.cancel');
});
