<?php

namespace App\Models;

class Promo
{
    private static $list_promo = [
        'Semua Promo'
    ];
    public static function getPromo()
    {
        return self::$list_promo;
    }
}
