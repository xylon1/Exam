@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('adobjective.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Advertisment Objective Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->name}}" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label >Property</label>
                        <select name="property_id" id="" class="form-control">
                            @foreach($properties as $property)
                                <option value="{{$property->id}}" {{($data->property_id == $property->id) ? 'selected':''}} >{{$property->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="update">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection