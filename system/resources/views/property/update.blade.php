<div class="form-group row">
    <label class="col-2 col-form-label">district</label>
    <div class="col-10">
        <input class="form-control" type="text" name="district" value="{{$data->district}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">town</label>
    <div class="col-10">
        <input class="form-control" type="text" name="town" value="{{$data->town}}">
    </div>
</div>

<div class="form-group row">
    <label class="col-2 col-form-label">address</label>
    <div class="col-10">
        <input class="form-control" type="text" name="address" value="{{$data->address}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">street</label>
    <div class="col-10">
        <input class="form-control" type="text" name="street" value="{{$data->street}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">vdc</label>
    <div class="col-10">
        <input class="form-control" type="text" name="vdc" value="{{$data->vdc}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">ward_no</label>
    <div class="col-10">
        <input class="form-control" type="text" name="ward_no" value="{{$data->ward_no}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">house_no</label>
    <div class="col-10">
        <input class="form-control" type="text" name="house_no" value="{{$data->house_no}}">
    </div>
</div>
<div class="form-group row">
    <label>Land Area</label>
    <select name="land_area_id" class="form-control">
        @foreach($lands as $land)
            <option value="{{$land->id}}" {{($data->land_area_id == $land->id) ? 'selected':''}} >{{$land->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">reference</label>
    <div class="col-10">
        <input class="form-control" type="text" name="reference" value="{{$data->reference}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">property_description</label>
    <div class="col-10">
        <input class="form-control" type="text" name="property_description" value="{{$data->property_description}}">
    </div>
</div>
<div class="form-group row">
    <label>Property Type</label>
    <select name="property_type" class="form-control">
        @foreach($protypes as $protype)
            <option value="{{$protype->id}}" {{($data->property_type == $protype->id) ? 'selected':''}} >{{$protype->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">apartment_builder_id</label>
    <div class="col-10">
        <input class="form-control" type="text" name="apartment_builder_id" value="{{$data->apartment_builder_id}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">complition_stage</label>
    <div class="col-10">
        <input class="form-control" type="text" name="complition_stage" value="{{$data->complition_stage}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">complition_date</label>
    <div class="col-10">
        <input class="form-control" type="text" name="complition_date" value="{{$data->complition_date}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">complition_year</label>
    <div class="col-10">
        <input class="form-control" type="text" name="complition_year" value="{{$data->complition_year}}">
    </div>
</div>
<div class="form-group row">
    <label>sellerexpected</label>
    <select name="seller_expected_id" class="form-control">
        @foreach($sellerexpecteds as $sellerexpected)
            <option value="{{$sellerexpected->id}}" {{($data->seller_expected_id == $sellerexpected->id) ? 'selected':''}} >{{$sellerexpected->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">availibility</label>
    <div class="col-10">
        <input class="form-control" type="text" name="availibility" value="{{$data->availibility}}">
    </div>
</div>
<div class="form-group row">
    <label>urgency</label>
    <select name="urgency_id" class="form-control">
        @foreach($urgencies as $urgency)
            <option value="{{$urgency->id}}" {{($data->urgency_id == $urgency->id) ? 'selected':''}} >{{$urgency->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>roadaccess</label>
    <select name="road_access_id" class="form-control">
        @foreach($roadaccess as $roadaccess)
            <option value="{{$roadaccess->id}}" {{($data->road_access_id == $roadaccess->id) ? 'selected':''}} >{{$roadaccess->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">map</label>
    <div class="col-10">
        <input class="form-control" type="text" name="map" value="{{$data->map}}">
    </div>
</div>
<div class="form-group row">
    <label>property status</label>
    <select name="property_status_id" class="form-control">
        @foreach($propertystatuses as $propertystatus)
            <option value="{{$propertystatus->id}}" {{($data->property_status_id == $propertystatus->id) ? 'selected':''}} >{{$propertystatus->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">highlight</label>
    <div class="col-10">
        <input class="form-control" type="text" name="highlight" value="{{$data->highlight}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">property_detail_info</label>
    <div class="col-10">
        <input class="form-control" type="text" name="property_detail_info" value="{{$data->property_detail_info}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">negotiability</label>
    <div class="col-10">
        <input class="form-control" type="text" name="negotiability" value="{{$data->negotiability}}">
    </div>
</div>
<div class="form-group row">
    <label>exterior</label>
    <select name="$exterior" class="form-control">
        @foreach($exteriors as $exterior)
            <option value="{{$exterior->id}}" {{($data->$exterior == $exterior->id) ? 'selected':''}} >{{$exterior->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>Interior</label>
    <select name="interior_id" class="form-control">
        @foreach($interiors as $interior)
            <option value="{{$interior->id}}" {{($data->interior_id == $interior->id) ? 'selected':''}} >{{$interior->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>environment</label>
    <select name="environment_id" class="form-control">
        @foreach($environments as $environment)
            <option value="{{$environment->id}}" {{($data->environment_id == $environment->id) ? 'selected':''}} >{{$environment->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>Rent</label>
    <select name="rent_id" class="form-control">
        @foreach($rents as $rent)
            <option value="{{$rent->id}}" {{($data->rent_id == $rent->id) ? 'selected':''}} >{{$rent->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>facility</label>
    <select name="facility_id" class="form-control">
        @foreach($facilities as $facility)
            <option value="{{$facility->id}}" {{($data->facility_id == $facility->id) ? 'selected':''}} >{{$facility->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>finiance</label>
    <select name="finance_id" class="form-control">
        @foreach($finiances as $finiance)
            <option value="{{$finiance->id}}" {{($data->finance_id == $finiance->id) ? 'selected':''}} >{{$finiance->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>document</label>
    <select name="legal_document_id" class="form-control">
        @foreach($documents as $document)
            <option value="{{$document->id}}">{{$document->name}}</option>
            <option value="{{$document->id}}" {{($data->legal_document_id == $document->id) ? 'selected':''}} >{{$document->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">elevation</label>
    <div class="col-10">
        <input class="form-control" type="text" name="elevation" value="{{$data->elevation}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">advance</label>
    <div class="col-10">
        <input class="form-control" type="text" name="advance" value="{{$data->advance}}">
    </div>
</div>
<div class="form-group row">
    <label class="col-2 col-form-label">broker_response</label>
    <div class="col-10">
        <input class="form-control" type="text" name="broker_response" value="{{$data->broker_response}}">
    </div>
</div>
<div class="form-group row">
    <label>Owner</label>
    <select name="owner_id" class="form-control">
        @foreach($personals as $personal)
            <option value="{{$personal->id}}" {{($data->owner_id == $personal->id) ? 'selected':''}} >{{$personal->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>Advertisment Objective</label>
    <select name="ad_objective_id" class="form-control">
        @foreach($adobjs as $adobj)
            <option value="{{$adobj->id}}" {{($data->ad_objective_id == $adobj->id) ? 'selected':''}} >{{$adobj->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>Advertisment Type</label>
    <select name="ad_type_id" class="form-control">
        @foreach($adtypes as $adtype)
            <option value="{{$adtype->id}}" {{($data->ad_type_id == $adtype->id) ? 'selected':''}} >{{$adtype->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>Advertisment Transavtion</label>
    <select name="ad_transaction_id" class="form-control">
        @foreach($adtransactions as $adtransaction)
            <option value="{{$adtransaction->id}}" {{($data->ad_transaction_id == $adtransaction->id) ? 'selected':''}} >{{$adtransaction->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group row">
    <label>Commission Type</label>
    <select name="commission_id" class="form-control">
        @foreach($commissions as $commission)
            <option value="{{$commission->id}}" {{($data->commission_id == $commission->id) ? 'selected':''}} >{{$commission->name}}</option>
        @endforeach
    </select>
</div>

@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('adminuser.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->name}}" name="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label >Role</label>
                        <select name="role_id" id="" class="form-control">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}" {{($data->role_id == $role->id) ? 'selected':''}} >{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" value="{{$data->email}}" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="update">Update User</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection