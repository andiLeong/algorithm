<?php

namespace App\Utility;

class Str
{
    public static function hash($token, $phrase)
    {
        $md5 = md5($token);
        $arr = ['phrase' => $phrase, 'token' => base64_encode($md5)];
        return hash_hmac('sha1', json_encode($arr), $md5);
    }
}