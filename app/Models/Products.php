<?php

namespace App\Models;

class Products
{
    private static $list_products = [
        [
            "img" => "makan1.png",
            "title" => "Ready to Cook",
            "desc" => "Dapur Panen hadir dengan solusi praktis memasak dengan produk siap masak dari bahan-bahan dan bumbu segar berkualitas. Buat hidangan spesial di rumah dengan mudah."
        ],
        [
            "img" => "makan7.png",
            "title" => "Ready to Eat",
            "desc" => "Nikmati hidangan spesial praktis dari Dapur Panen dengan produk siap saji berkualitas tinggi, aman dikonsumsi, dan terjaga kebersihannya."
        ],
        [
            "img" => "catering.png",
            "title" => "Catering",
            "desc" => "Berbagai hidangan lezat dan berkualitas tinggi tersedia dalam produk catering kami, yang siap memenuhi kebutuhan acara Anda dengan beragam pilihan menu."
        ],
        [
            "img" => "burger.png",
            "title" => "Burger Panen",
            "desc" => "Hidangan yang gurih dan praktis ini cocok untuk dinikmati kapan saja dan di mana saja. Rasakan kenikmatan sensasi gigitan pertama dari hidangan burger yang lezat dan bergizi!"
        ],
        [
            "img" => "kopi.png",
            "title" => "Kopi Panen",
            "desc" => "Nikmati sensasi kopi yang kaya aroma dan cita rasa dengan produk kopi kami yang terbuat dari biji kopi pilihan.  Segera cicipi dan rasakan pengalaman kopi yang memikat lidah!"
        ],
    ];
    public static function getProducts()
    {
        return self::$list_products;
    }
}
