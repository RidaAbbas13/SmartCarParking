<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = [
        "service_name",
        "service_price",
        "thubnail",
        "description",
    ];

    public function services()
    {
        return $this->belongsToMany("App\Models\CustomerService","service_id", "id");
    }
}
