<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function services()
//    {
//        return $this->hasMany(Service::class);
//    }
//
//    public function scopeWithMostServices(Builder $query)
//    {
//        return $query->withCount('services')->orderBy('services_count', 'desc');
//    }

//    public function scopeWithMostServicesLastMonth(builder $query)
//    {
//        return $query->withCount(['services' => function(Builder $query){
//            return $query->whereBetween(static::CREATED_AT, [now()->subMonths(1), now()]);
//        }])->has('services', '>=', 2)
//            ->orderBy('services_count', 'desc');
//    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }
}
