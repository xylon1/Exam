<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleCondition extends Model
{
    protected $fillable=['percent_sale_price','fixed_price','ad_purpose_price'];
}
