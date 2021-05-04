<?php


namespace App\Http\Helper;


class RupiahFormatter
{
    public static function format($value){
        return "Rp " . number_format($value,2,',','.');
    }
}
