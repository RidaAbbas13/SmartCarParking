<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddtionalCharge extends Model
{
    use HasFactory;

    protected $table = "addtional_charges";

    protected $fillable = [
        "charges_title",
        "amount",
    ];
}
