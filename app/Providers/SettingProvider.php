<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->runningInConsole() && count(Schema::getColumnListing('settings'))) {
            cache()->forget('settings');

            $settings = Setting::get();

            foreach ($settings as $key => $setting) {
                Config::set('settings.' . $setting->key, $setting->value);
            }
        }
    }
}
