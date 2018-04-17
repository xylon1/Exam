@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('material.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="name" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Contact</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="contact" value="{{$data->contact}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">mobile</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="mobile" value="{{$data->mobile}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Price</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="price" value="{{$data->price}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Material</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="material_id" value="{{$data->material_id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Manpower</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="manpower_id" value="{{$data->manpower_id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Contact Info</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="contact_info" value="{{$data->contact_info}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Investment Range</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="investment_range" value="{{$data->investment_range}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Investment Type</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="investment_type_id" value="{{$data->investment_type_id}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="update">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection