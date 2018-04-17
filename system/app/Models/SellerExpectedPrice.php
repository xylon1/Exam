<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellerExpectedPrice extends Model
{
    protected $fillable=['name','total_price','price_per_anna','price_per_sqft'];
}
