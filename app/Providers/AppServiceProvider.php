<?php

namespace App\Providers;

use Buoly\MeituanTakeaway\MeituanTakeaway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('takeaway', function () {
            $config = [
                'app_id' => 4625,
                'app_secret' => '6b69d70eb76f6189a1fb9ba9a80f2df2',
                'log_path' => storage_path('/logs/takeaway.log'),
            ];
            return new MeituanTakeaway($config);
        });
        $this->app->singleton('takeaway2', function () {
            $config = [
                'app_id' => 4626,
                'app_secret' => '7ad9e8f0079f73898fb7a466c8dd5075',
                'log_path' => storage_path('/logs/takeaway.log'),
            ];
            return new MeituanTakeaway($config);
        });
        $this->app->singleton('minkang', function () {
            $config = [
                'app_id' => 5172,
                'app_secret' => '16000d3fb478ee4dfd5a9dd63155e958',
                'log_path' => storage_path('/logs/minkang.log'),
            ];
            return new MeituanTakeaway($config);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
