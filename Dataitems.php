<?php

namespace App\Models;

class DataItem
{
    // contoh data inputan
    public static $items = [];

    // menambahkan data
    public static function add($value)
    {
        self::$items[] = $value;
    }

    // menghitung jumlah data
    public static function countTotal()
    {
        return count(self::$items);
    }
}
