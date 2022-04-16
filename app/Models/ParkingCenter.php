<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingCenter extends Model
{
    use HasFactory;

    protected $table = "parking_centers";

    protected $fillable = [
        "parking_center_name",
        "city_name",
        "address",
    ];
}
