<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'short_url',
        'full_url',
        'hit_count',
        'status'
    ];

    public static function storeShortUrl($request)
    {
        return ShortUrl::create([
            'user_id'   => auth()->check() ? auth()->id(): null,
            'full_url' => $request->full_url,
            'short_url' => self::checkShortUrl(str()->random(6)),
            'status' => 1
        ]);
    }

    public static function checkShortUrl($shortUrl)
    {
        $existPerm = ShortUrl::where('short_url', $shortUrl)->first();
        if ($existPerm) {
            self::checkShortUrl(str()->random(6));
        } else {
            return $shortUrl;
        }
        return str()->random(6);
    }


}
