<?php namespace App\Classes;

use Illuminate\Support\Facades\Mail;

class Email
{

    public static function sendEmail($receiverEmail, $subject, $content, $replyTo = "", $ccBCC = [])
    {
        $senderEmail = env('FROM_EMAIL','naresh@peacenepal.com');
        $senderName = 'Peace Nepal Dot Com';
        $sitePath = env('APP_URL');
        $siteName = config('app.name');

        $data = array(
            'content' => $content,
            'footer' => ' Copyright ' . date('Y') . ' ',
            'sitepath' => $sitePath,
            'sitename' => $siteName,
        );
        try {
            Mail::send('emails.email', $data, function ($message)
            use ($senderEmail, $senderName, $receiverEmail, $subject) {
                $message->from($senderEmail, $senderName);
                $message->to($receiverEmail)->subject($subject);
            });
            return Mail::flushMacros() ? true : false;

        } catch (Swift_RfcComplianceException $e) {
            return false;
        }

    }
}
