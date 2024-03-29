<?php

namespace App\Helpers;

use App\Models\Content;
use App\Models\Layout;
use App\Models\LayoutOption;
use App\Models\News;
use Carbon\Carbon;

class LayoutHelper
{

    public static function layoutMenu()
    {
        $option = [
            'primary-menu',
            'widget-1',
            'widget-2',
            'widget-3',
            'widget-4',
        ];
        return LayoutOption::whereIn('slug', $option)->pluck('menu_id', 'slug');
    }


    public static function primaryMenu($layoutMenu, $slug)
    {
        return $layoutMenu[$slug];
    }
    public static function widget1($layoutMenu, $slug)
    {
        return $layoutMenu[$slug];
    }

    public static function widget2($layoutMenu, $slug)
    {
        return $layoutMenu[$slug];
    }

    public static function widget3($layoutMenu, $slug)
    {
        return $layoutMenu[$slug];
    }

    public static function widget4($layoutMenu, $slug)
    {
        return $layoutMenu[$slug];
    }
}
