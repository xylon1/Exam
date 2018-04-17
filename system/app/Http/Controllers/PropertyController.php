<?php

namespace App\Http\Controllers;

use App\Models\AdvertismentObjective;
use App\Models\AdvertismentTransaction;
use App\Models\AdvertismentType;
use App\Models\CommissionType;
use App\Models\Environment;
use App\Models\ExteriorLook;
use App\Models\Facility;
use App\Models\Finance;
use App\Models\InteriorLook;
use App\Models\LandArea;
use App\Models\LegalDocument;
use App\Models\PersonalInformation;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\RentalCondition;
use App\Models\RoadAccess;
use App\Models\SellerExpectedPrice;
use App\Models\UrgencyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    private $property;
    private $landarea;
    private $propertytype;
    private $urgency;
    private $roadaccess;
    private $propertystatus;
    private $exterior;
    private $interior;
    private $environment;
    private $rental;
    private $facility;
    private $finance;
    private $legal;
    private $adtype;
    private $adobj;
    private $adtransaction;
    private $commission;
    private $sellerexpected;
    private $personal;

    public function __construct(Property $property,LandArea $landarea,PropertyType $propertytype,UrgencyType $urgency,
                                RoadAccess $roadaccess,PropertyStatus $propertystatus,ExteriorLook $exterior,InteriorLook
                                $interior,Environment $environment,RentalCondition $rental,Facility $facility,Finance $finance,
                                LegalDocument $legal,AdvertismentType $adtype,AdvertismentObjective $adobj,
                                AdvertismentTransaction $adtransaction,CommissionType $commission,SellerExpectedPrice $sellerexpected,
                                PersonalInformation $personal)
    {
        $this->property=$property;
        $this->landarea=$landarea;
        $this->propertytype=$propertytype;
        $this->urgency=$urgency;
        $this->sellerexpected=$sellerexpected;
        $this->roadaccess=$roadaccess;
        $this->propertystatus=$propertystatus;
        $this->exterior=$exterior;
        $this->interior=$interior;
        $this->environment=$environment;
        $this->rental=$rental;
        $this->facility=$facility;
        $this->finance=$finance;
        $this->legal=$legal;
        $this->adtype=$adtype;
        $this->adobj=$adobj;
        $this->adtransaction=$adtransaction;
        $this->commission=$commission;
        $this->personal=$personal;
    }

    public function index()
    {
        //$data=$this->property->all();
        $data=DB::table('properties')
            ->join('land_areas','properties.land_area_id','=','land_areas.id')
            ->join('property_types','properties.property_type','=','property_types.id')
            ->join('urgency_types','properties.urgency_id','=','urgency_types.id')
            ->join('seller_expected_prices','properties.seller_expected_id','=','seller_expected_prices.id')
            ->join('road_accesses','properties.road_access_id','=','road_accesses.id')
            ->join('property_statuses','properties.property_status_id','=','property_statuses.id')
            ->join('exterior_looks','properties.exterior_id','=','exterior_looks.id')
            ->join('interior_looks','properties.interior_id','=','interior_looks.id')
            ->join('environments','properties.environment_id','=','environments.id')
            ->join('rental_conditions','properties.rent_id','=','rental_conditions.id')
            ->join('facilities','properties.facility_id','=','facilities.id')
            ->join('finances','properties.finance_id','=','finances.id')
            ->join('legal_documents','properties.legal_document_id','=','legal_documents.id')
            ->join('advertisment_types','properties.ad_type_id','=','advertisment_types.id')
            ->join('advertisment_objectives','properties.ad_objective_id','=','advertisment_objectives.id')
            ->join('advertisment_transactions','properties.ad_transaction_id','=','advertisment_transactions.id')
            ->join('commission_types','properties.commission_id','=','commission_types.id')
            ->join('personal_informations','properties.owner_id','=','personal_informations.id')
            ->select('properties.id','properties.address','property_types.name as property_type',
                'properties.availibility','urgency_types.name as urgency_id','property_statuses.name as property_status_id',
                'personal_informations.name as owner_id')
            ->get();
        return view('property.index')->with(compact('data'));
    }
    public function add()
    {
        $lands = DB::table('land_areas')->select('id','name')->get();
        $protypes = DB::table('property_types')->select('id','name')->get();
        $urgencies = DB::table('urgency_types')->select('id','name')->get();
        $sellerexpecteds = DB::table('seller_expected_prices')->select('id','name')->get();
        $roadaccess = DB::table('road_accesses')->select('id','name')->get();
        $propertystatuses = DB::table('property_statuses')->select('id','name')->get();
        $exteriors = DB::table('exterior_looks')->select('id','name')->get();
        $interiors = DB::table('interior_looks')->select('id','name')->get();
        $environments = DB::table('environments')->select('id','name')->get();
        $rents = DB::table('rental_conditions')->select('id','name')->get();
        $facilities = DB::table('facilities')->select('id','name')->get();
        $finances = DB::table('finances')->select('id','name')->get();
        $documents = DB::table('legal_documents')->select('id','name')->get();
        $adtypes = DB::table('advertisment_types')->select('id','name')->get();
        $adobjs = DB::table('advertisment_objectives')->select('id','name')->get();
        $adtransactions = DB::table('advertisment_transactions')->select('id','name')->get();
        $commissions = DB::table('commission_types')->select('id','name')->get();
        $personals = DB::table('personal_informations')->select('id','name')->get();

        return view('property.add')->with(compact('lands','propertystatuses','protypes','urgencies',
                            'sellerexpecteds','roadaccess','exteriors','interiors','environments','rents','facilities',
                            'finances','documents','adobjs','adtransactions','adtypes','commissions','personals'));
    }

    public function save(Request $request)
    {
        $data=[
            'district'=>$request->input('district'),
            'town'=>$request->input('town'),
            'address'=>$request->input('address'),
            'street'=>$request->input('street'),
            'vdc'=>$request->input('vdc'),
            'ward_no'=>$request->input('ward_no'),
            'house_no'=>$request->input('house_no'),
            'land_area_id'=>$request->input('land_area_id'),
            'reference'=>$request->input('reference'),
            'property_description'=>$request->input('property_description'),
            'property_type'=>$request->input('property_type'),
            'apartment_builder_id'=>$request->input('apartment_builder_id'),
            'complition_stage'=>$request->input('complition_stage'),
            'complition_date'=>$request->input('complition_date'),
            'complition_year'=>$request->input('complition_year'),
            'seller_expected_id'=>$request->input('seller_expected_id'),
            'availibility'=>$request->input('availibility'),
            'urgency_id'=>$request->input('urgency_id'),
            'road_access_id'=>$request->input('road_access_id'),
            'map'=>$request->input('map'),
            'property_status_id'=>$request->input('property_status_id'),
            'highlight'=>$request->input('highlight'),
            'property_detail_info'=>$request->input('property_detail_info'),
            'negotiability'=>$request->input('negotiability'),
            'exterior_id'=>$request->input('exterior_id'),
            'interior_id'=>$request->input('interior_id'),
            'environment_id'=>$request->input('environment_id'),
            'rent_id'=>$request->input('rent_id'),
            'elevation'=>$request->input('elevation'),
            'facility_id'=>$request->input('facility_id'),
            'finance_id'=>$request->input('finance_id'),
            'advance'=>$request->input('advance'),
            'broker_response'=>$request->input('broker_response'),
            'owner_id'=>$request->input('owner_id'),
            'legal_document_id'=>$request->input('legal_document_id'),
            'ad_transaction_id'=>$request->input('ad_transaction_id'),
            'ad_objective_id'=>$request->input('ad_objective_id'),
            'ad_type_id'=>$request->input('ad_type_id'),
            'commission_id'=>$request->input('commission_id'),
        ];



        if($request->hasFile('image')) {
            foreach($request->file('image') as $image) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = str_random(19).'.'.$extension;
            $destination = 'assets/images/property/';
            $request->file('image')->move($destination,$filename);
            $data['image']=$filename;}
        }

        $this->property->create($data);

        return redirect()->route('property');
    }

    public function edit($id)
    {
        $data=$this->property->find($id);

        $lands = DB::table('land_areas')->select('id','name')->get();
        $protypes = DB::table('property_types')->select('id','name')->get();
        $urgencies = DB::table('urgency_types')->select('id','name')->get();
        $sellerexpecteds = DB::table('seller_expected_prices')->select('id','name')->get();
        $roadaccess = DB::table('road_accesses')->select('id','name')->get();
        $propertystatus = DB::table('property_statuses')->select('id','name')->get();
        $exteriors = DB::table('exterior_looks')->select('id','name')->get();
        $interiors = DB::table('interior_looks')->select('id','name')->get();
        $environments = DB::table('environments')->select('id','name')->get();
        $rents = DB::table('rental_conditions')->select('id','name')->get();
        $facilities = DB::table('facilities')->select('id','name')->get();
        $finances = DB::table('finances')->select('id','name')->get();
        $documents = DB::table('legal_documents')->select('id','name')->get();
        $adtypes = DB::table('advertisment_types')->select('id','name')->get();
        $adobjs = DB::table('advertisment_objectives')->select('id','name')->get();
        $adtransactions = DB::table('advertisment_transactions')->select('id','name')->get();
        $commissions = DB::table('commission_types')->select('id','name')->get();
        $personals = DB::table('personal_informations')->select('id','name')->get();

        return view('property.update')->with(compact('data','lands','propertystatus','protypes','urgencies',
            'sellerexpecteds','roadaccess','exteriors','interiors','environments','rents','facilities',
            'finances','documents','adobjs','adtransactions','adtypes','commissions','personals'));
    }

    public function update($id,Request $request)
    {
        $old=$this->property->find($id);

        $data=[
            'district'=>$request->input('district'),
            'town'=>$request->input('town'),
            'address'=>$request->input('address'),
            'street'=>$request->input('street'),
            'vdc'=>$request->input('vdc'),
            'ward_no'=>$request->input('ward_no'),
            'house_no'=>$request->input('house_no'),
            'land_area_id'=>$request->input('land_area_id'),
            'reference'=>$request->input('reference'),
            'property_description'=>$request->input('property_description'),
            'property_type'=>$request->input('property_type'),
            'apartment_builder_id'=>$request->input('apartment_builder_id'),
            'complition_stage'=>$request->input('complition_stage'),
            'complition_date'=>$request->input('complition_date'),
            'complition_year'=>$request->input('complition_year'),
            'seller_expected_id'=>$request->input('seller_expected_id'),
            'availibility'=>$request->input('availibility'),
            'urgency_id'=>$request->input('urgency_id'),
            'road_access_id'=>$request->input('road_access_id'),
            'map'=>$request->input('map'),
            'property_status_id'=>$request->input('property_status_id'),
            'highlight'=>$request->input('highlight'),
            'property_detail_info'=>$request->input('property_detail_info'),
            'negotiability'=>$request->input('negotiability'),
            'exterior_id'=>$request->input('exterior_id'),
            'interior_id'=>$request->input('interior_id'),
            'environment_id'=>$request->input('environment_id'),
            'rent_id'=>$request->input('rent_id'),
            'elevation'=>$request->input('elevation'),
            'facility_id'=>$request->input('facility_id'),
            'finance_id'=>$request->input('finance_id'),
            'advance'=>$request->input('advance'),
            'broker_response'=>$request->input('broker_response'),
            'owner_id'=>$request->input('owner_id'),
            'legal_document_id'=>$request->input('legal_document_id'),
            'ad_transaction_id'=>$request->input('ad_transaction_id'),
            'ad_objective_id'=>$request->input('ad_objective_id'),
            'ad_type_id'=>$request->input('ad_type_id'),
            'commission_id'=>$request->input('commission_id'),
        ];

        $old->update($data);

        return redirect()->route('property');
    }

    public function delete($id)
    {
        $old=$this->property->find($id);
        $this->delete($old);

        return redirect()->route('property');
    }
}
