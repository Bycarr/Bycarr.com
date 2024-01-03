<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Mail;
use Throwable;

class EmailHelper
{
    public static function sendEmail($receiverEmail, $subject, $content, $salutation = 'Dear Customer', $replyTo = "", $ccBCC = [])
    {
        $logo = asset('/website/img/logo1.jpeg');
        $senderEmail = env('MAIL_FROM_ADDRESS');
        $senderName = env('MAIL_FROM_NAME', 'HTS');

        $data = array(
            'logopath' => $logo,
            'content' => $content,
            'salutation' => $salutation,
            'subject' => $subject,
        );

        try {
            $mail = Mail::send('emails.email', $data, function ($message)
            use ($senderEmail, $senderName, $receiverEmail, $subject, $data) {
                $message->from($senderEmail, $senderName);
                $message->to($receiverEmail)->subject($subject);
            });
            if ($mail instanceof \Illuminate\Mail\SentMessage) {
                return true;
            } else {
                return false;
            }
        } catch (Throwable $e) {
            return false;
        }
    }
}
