<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $table = "parkings";

    protected $fillable = [
        "user_id",
        "service_id",
        "parking_center_id",
        "pickup_address",
        "drop_address",
        "start_data",
        "end_date",
    ];

    public function services()
    {
        return $this->hasMany("App\Models\CustomerService","parking_id", "id");
    }

    public function customers()
    {
        return $this->belongsTo("App\Models\Customer", "user_id", "user_id");
    }

    public function parkingCenters()
    {
        return $this->belongsTo("App\Models\ParkingCenter", "parking_center_id", "id");
    }
}
