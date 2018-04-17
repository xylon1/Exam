<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    protected $fillable=['name','contact','mobile','material_id','manpower_id',
                        'contact_info','investment_range','investment_period',
                        'investment_type_id'];

}
