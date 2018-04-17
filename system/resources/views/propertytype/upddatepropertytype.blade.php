@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('propertytype.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Property Title Type</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->name}}" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="update">Update Property Type</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection