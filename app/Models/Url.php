<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 
        'shortened_url', 
        'ip'
    ];

    public static function isCodeExists($code) : bool {
        return !is_null(Url::where('shortened_url', $code)->first());
    }

    public static function isUrlExists($url) : bool {
        return !is_null((Url::where('url', $url))->first());
    }

    public static function getCodeByUrl($url) : string {
        return Url::where('url', $url)->first()->shortened_url;
    }

    public static function getUrlByCode($code) : string {
        return Url::where('shortened_url', $code)->first()->url;
    }
}
