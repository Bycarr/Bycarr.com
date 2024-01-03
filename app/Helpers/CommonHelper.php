<?php

namespace App\Helpers;

use Carbon\Carbon;

class CommonHelper
{
    public static function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, $divider);
        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);
        // lowercase
        $text = strtolower($text);
        return $text;
    }

    public static function dateFormat($date, $format = 17)
    {
        if ($date == '0000-00-00' || $date == '0000-00-00 00:00:00' || $date == null) {
            return 'N.A.';
        }
        $format = empty($format) ? ConstantHelper::DEFAULT_DATE_FORMAT : $format;
        switch ($format) {
            case "1":
                return Carbon::parse($date)->format('l, F jS, Y');
            case "2":
                return Carbon::parse($date);
            case "3":
                return Carbon::parse($date)->format('D jS M Y g:ia');
            case "4":
                return Carbon::parse($date)->format('D j M Y');
            case "5":
                return Carbon::parse($date)->format('M j, Y g:i a');
            case "6":
                return Carbon::parse($date)->format('d M, Y');
            case "7":
                return Carbon::parse($date)->format('M j, Y');
            case "8":
                return Carbon::parse($date)->format('g:i A');
            case "9":
                return Carbon::parse($date)->format('Y');
            case "10":
                return Carbon::parse($date)->format('m/d');
            case "11":
                return Carbon::parse($date)->format('Y/m/d');
            case "12":
                return Carbon::parse($date)->format('M j, Y');
            case 13:
                return Carbon::parse($date)->format('d');
            case 14:
                return Carbon::parse($date)->format('m');
            case 15:
                return Carbon::parse($date)->format('M');
            case 16:
                return Carbon::parse($date)->format('Y-m-d');
            case 17:
                return Carbon::parse($date)->format('Y-m-d H:i:s');
            default:
                return substr($date, 0, 10);
        }
    }
    public static function bookingStatus($status)
    {
        switch ($status) {
            case ConstantHelper::BOOKING_STATUS_INITIATE:
                return 'Initiate';
            case ConstantHelper::BOOKING_STATUS_PENDING:
                return 'Pending';
            case ConstantHelper::BOOKING_STATUS_CONFIRMED:
                return 'Confirmed';
            case ConstantHelper::BOOKING_STATUS_CANCELLED:
                return 'Cancelled';
            case ConstantHelper::BOOKING_STATUS_PROCESSING:
                return 'Processing';
            case ConstantHelper::BOOKING_STATUS_COMPLETED:
                return 'Completed';

            case ConstantHelper::BOOKING_STATUS_CLOSED:
                return 'Closed';
            default:
                return 'N.A.';
        }
    }
    public static function paymentStatus($status)
    {
        switch ($status) {
            case ConstantHelper::PAYMENT_STATUS_PENDING:
                return 'Pending';
            case ConstantHelper::PAYMENT_STATUS_PAID:
                return 'Paid';
            case ConstantHelper::PAYMENT_STATUS_FAILED:
                return 'Failed';
            case ConstantHelper::PAYMENT_STATUS_PROCESSING:
                return 'Processing';
            case ConstantHelper::PAYMENT_STATUS_REFUNDED:
                return 'Refunded';
            case ConstantHelper::PAYMENT_STATUS_TO_BE_REFUNDED:
                return 'To be refunded';
            default:
                return 'N.A.';
        }
    }
    public static function bookingStatusList()
    {
        return [
            ConstantHelper::BOOKING_STATUS_PENDING => 'Pending',
            ConstantHelper::BOOKING_STATUS_CONFIRMED => 'Confirmed',
            ConstantHelper::BOOKING_STATUS_CANCELLED => 'Cancelled',
            ConstantHelper::BOOKING_STATUS_PROCESSING => 'Processing',
            ConstantHelper::BOOKING_STATUS_COMPLETED => 'Completed',
            ConstantHelper::BOOKING_STATUS_CLOSED => 'Completed',
        ];
    }
    public static function paymentStatusList()
    {
        return [
            ConstantHelper::PAYMENT_STATUS_PENDING => 'Pending',
            ConstantHelper::PAYMENT_STATUS_PAID => 'Paid',
            // ConstantHelper::PAYMENT_STATUS_REFUNDED => 'Refunded',
            // ConstantHelper::PAYMENT_STATUS_FAILED => 'Failed',
            // ConstantHelper::PAYMENT_STATUS_PROCESSING => 'Processing',
            // ConstantHelper::PAYMENT_STATUS_REFUNDED => 'Refunded',
            // ConstantHelper::PAYMENT_STATUS_TO_BE_REFUNDED => 'To be refunded',
        ];
    }
    public static function bookingStatusClass($status, $bg = true)
    {
        switch ($status) {
            case ConstantHelper::BOOKING_STATUS_PENDING:
                return $bg == true ? 'bg-primary' : 'primary';
            case ConstantHelper::BOOKING_STATUS_CONFIRMED:
                return $bg == true ? 'bg-secondary' : 'secondary';
            case ConstantHelper::BOOKING_STATUS_PROCESSING:
                return $bg == true ? 'bg-warning' : 'warning';
            case ConstantHelper::BOOKING_STATUS_COMPLETED:
                return $bg == true ? 'bg-info' : 'info';
            case ConstantHelper::BOOKING_STATUS_CANCELLED:
                return $bg == true ? 'bg-warning' : 'warning';
            case ConstantHelper::BOOKING_STATUS_CLOSED:
                return $bg == true ? 'bg-success' : 'success';
            default:
                return $bg == true ? 'bg-primary' : 'primary';
        }
    }
}
