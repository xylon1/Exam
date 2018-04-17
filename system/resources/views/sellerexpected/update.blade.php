@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('sellerexpected.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->total_price}}" name="total_price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Price Per Anna</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->price_per_anna}}" name="price_per_anna">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Price Per Square Feet</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->price_per_sqft}}" name="price_per_sqft">
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