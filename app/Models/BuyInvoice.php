<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuyInvoice extends Model 
{
    use SoftDeletes;

    protected $table = "buy_invoices";
}