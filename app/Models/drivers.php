<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    use HasFactory;
    protected $fillable =[
        'driverName','contact',
        'national_id','license_no',
        'linense_exp','address',
        'truck_name','chasis_no',
        'description','fee',
        'photo',
    ];
    
    public function bookings(){
        return $this->hasMany(bookings::class);
    }

}

