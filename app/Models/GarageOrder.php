<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GarageOrder extends Model 
{
    use SoftDeletes;

    protected $table = "garage_orders";
}