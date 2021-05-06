<?php


namespace App\Http\Helper;


class UUIDGenerator
{
    public const LENGTH = 2; //THIS WILL PRINT 4 UNIQUE CODE

    public static function generate(){
        return strtoupper(bin2hex(openssl_random_pseudo_bytes(self::LENGTH)));
    }

}
