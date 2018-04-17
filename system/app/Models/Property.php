<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable=['district','town','address','street','vdc','ward_no','house_no',
        'land_area_id','reference','property_description','property_type','apartment_builder_id','complition_stage',
        'complition_date','complition_year','seller_expected_id','availibility','urgency_id','road_access_id','map',
        'property_status_id','highlight','property_detail_info','negotiability','exterior_id','interior_id',
        'environment_id','rent_id','elevation','facility_id','finance_id','advance','broker_response','owner_id',
        'legal_document_id','ad_transaction_id','ad_objective_id','ad_type_id','commission_id'];
}
