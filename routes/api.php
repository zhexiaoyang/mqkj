<?php


Route::group(['prefix' => 'm'], function () {
    // 创建订单
    Route::post('order/create', 'OrderController@create')->name('m.order.refund.create');
    // 订单取消
    Route::get('order/cancel', function() {
        return json_encode(['data' => 'ok']);
    });
    // 催单
    Route::post('order/cui', function() {
        return json_encode(['data' => 'ok']);
    });
    // 降级
    Route::post('order/jiang', function() {
        return json_encode(['data' => 'ok']);
    });
    // 退款
    Route::post('order/refund', function() {
        return json_encode(['data' => 'ok']);
    });
    // 状态
    Route::post('order/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 确认
    Route::post('order/confirm', function() {
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
    Route::post('order/jie', function() {
        return json_encode(['data' => 'ok']);
    });

    Route::post('order/refund/reject', 'OrderController@refundReject')->name('m.order.refund.reject');
    Route::post('order/refund/agree', 'OrderController@refundAgree')->name('m.order.refund.agree');
    Route::post('order/batchPullPhoneNumber', 'OrderController@batchPullPhoneNumber')->name('m.order.batchPullPhoneNumber');
    Route::post('order/confirm', 'OrderController@confirm')->name('m.order.confirm');
    Route::post('order/cancel', 'OrderController@cancel')->name('m.order.cancel');
});


Route::group(['prefix' => 'j'], function () {
    // 创建订单
    Route::post('order/create', 'OrderTwoController@create')->name('j.order.refund.create');
    // 订单取消
    Route::get('order/cancel', function() {
        return json_encode(['data' => 'ok']);
    });
    // 催单
    Route::post('order/cui', function() {
        return json_encode(['data' => 'ok']);
    });
    // 降级
    Route::post('order/jiang', function() {
        return json_encode(['data' => 'ok']);
    });
    // 退款
    Route::post('order/refund', function() {
        return json_encode(['data' => 'ok']);
    });
    // 状态
    Route::post('order/status', function() {
        return json_encode(['data' => 'ok']);
    });
    // 确认
    Route::post('order/confirm', function() {
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
    Route::post('order/jie', function() {
        return json_encode(['data' => 'ok']);
    });

    Route::post('order/refund/reject', 'OrderTwoController@refundReject')->name('j.order.refund.reject');
    Route::post('order/refund/agree', 'OrderTwoController@refundAgree')->name('j.order.refund.agree');
    Route::post('order/batchPullPhoneNumber', 'OrderTwoController@batchPullPhoneNumber')->name('j.order.batchPullPhoneNumber');
    Route::post('order/confirm', 'OrderTwoController@confirm')->name('j.order.confirm');
    Route::post('order/cancel', 'OrderTwoController@cancel')->name('j.order.cancel');
});