<?php


Route::group(['prefix' => 'm'], function () {
    // 创建订单
    Route::post('order/create', 'OrderController@createm')->name('m.order.refund.createm');
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

    Route::post('order/refund/reject', 'OrderController@refundReject')->name('m.order.refund.reject');
    Route::post('order/refund/agree', 'OrderController@refundAgree')->name('m.order.refund.agree');
    Route::post('order/batchPullPhoneNumber', 'OrderController@batchPullPhoneNumber')->name('m.order.batchPullPhoneNumber');
    Route::post('order/confirm', 'OrderController@confirm')->name('m.order.confirm');
    Route::post('order/cancel', 'OrderController@cancel')->name('m.order.cancel');
});


Route::group(['prefix' => 'j'], function () {
    // 创建订单
    Route::post('order/create', 'OrderTwoController@createj')->name('m.order.refund.createj');
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

    Route::post('order/refund/reject', 'OrderTwoController@refundReject')->name('m.order.refund.reject');
    Route::post('order/refund/agree', 'OrderTwoController@refundAgree')->name('m.order.refund.agree');
    Route::post('order/batchPullPhoneNumber', 'OrderTwoController@batchPullPhoneNumber')->name('m.order.batchPullPhoneNumber');
    Route::post('order/confirm', 'OrderTwoController@confirm')->name('m.order.confirm');
    Route::post('order/cancel', 'OrderTwoController@cancel')->name('m.order.cancel');
});