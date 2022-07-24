<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'date',
        'truckname',
        'driver_id',
        'trucknum',
        'location',
        'reason',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    // public function driver(){
    //     return $this->hasOne(drivers::class);
    // }

}
