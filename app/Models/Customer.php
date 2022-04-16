<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";

    protected $fillable = [
        'user_id',
        'name',
        'mobile_no',
        'parmanent_address',
        "email",
        "vehicle_plate_no",
        "vehicle_color",
        "vehicle_type",
        "engine_number",
        "company_name",
        "model",
    ];
}
