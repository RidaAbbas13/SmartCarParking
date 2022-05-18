<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model
{
    use HasFactory;

    protected $table = "customer_services";

    protected $fillable = [
        "parking_id",
        "service_id",
    ];

    public function servicesName()
    {
        return $this->belongsToMany("App\Models\Service","id", "service_id");
    }
}
