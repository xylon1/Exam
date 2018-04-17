<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalCondition extends Model
{
    protected $fillable=['name','num_month','rent_per_month','fixed_rental_price'];
}
