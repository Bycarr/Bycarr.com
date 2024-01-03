<?php

namespace App\Helpers;

use App\Models\Module;
use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function shortText($string, $limit = null)
    {
        $limit = empty($limit) ? 60 : $limit;
        if (strlen($string) < $limit) {
            $string = strip_tags($string);
        } else {
            $text = strip_tags($string);
            $cutText = substr($text, 0, $limit);
            $lastSpace = strrpos($cutText, " ");
            $shortText = substr($cutText, 0, $lastSpace);
            $string = $shortText . '...';
        }
        return $string = strip_tags($string);
    }
}
