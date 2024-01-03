<?php

namespace App\Helpers;

class DataMapHelper
{
    public static function status($status)
    {
        return $status == ConstantHelper::STATUS_ACTIVE ? 'Active' : 'Inactive';
    }
}
