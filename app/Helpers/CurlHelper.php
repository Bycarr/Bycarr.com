<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class CurlHelper
{
    public static function request($url, $type = 'get', $postData = '', $sendToken = false)
    {
        Log::info('CURL request initiated.');
        Log::info('CURL request parameter.', [$url, $type, $postData, $sendToken]);
        $headers = array(
            "Accept: application/json",
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        if ($type == 'post') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        }
        $result = curl_exec($ch);
        /* Check for 404 (file not found). */
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        Log::info('CURL response code.', [$httpCode]);
        if ($httpCode == 200) {
            $result = json_decode($result, true);
        } else {
            // if (curl_errno($ch)) {
            //     return 'Curl error: ' . curl_error($ch);
            // }
        }
        curl_close($ch);
        // Log::info('CURL response.', [$result]);
        return $result;
    }
}
