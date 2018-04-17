@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('rentalcondition.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->name}}" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Number of Months</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->num_month}}" name="num_month">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Rent Per Month</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->rent_per_month}}" name="rent_per_month">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Fixed Price</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->fixed_rental_price}}" name="fixed_rental_price">
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