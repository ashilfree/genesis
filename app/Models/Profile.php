<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Profile extends Model
{
    use HasFactory;

    public const LOCALES = [
        'en' => 'English',
        'fr' => 'French',
        'ar' => 'Arabic'
    ];

    protected $fillable = ['phone', 'profession', 'locale','fb_link', 'instagram_link', 'twitter_link', 'pinterest_link', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
