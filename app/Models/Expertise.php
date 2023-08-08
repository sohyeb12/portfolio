<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'brief' , 'icon',
    ];

    const ICON_BULB = 'icon-bulb';
    const ICON_DATA = 'icon-data';
    const ICON_POHNE3 = 'icon-phone3';

    public static function icon_types(){
        return [
            self::ICON_BULB => 'Icon Bulb',
            self::ICON_DATA => 'Icon Data',
            self::ICON_POHNE3 => 'Icon Phone3',
        ];
    }
}
