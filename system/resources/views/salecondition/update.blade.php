@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('salecondition.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Percentage Sale Price</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->percent_sale_price}}" name="percent_sale_price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Fixed Price</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->fixed_price}}" name="fixed_price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Advertisment Price</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->ad_purpose_price}}" name="ad_purpose_price">
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