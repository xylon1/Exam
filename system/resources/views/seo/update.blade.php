@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('environment.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="name" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Meta Title</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="meta_title" value="{{$data->meta_title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Meta Keyword</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="meta_keyword" value="{{$data->meta_keyword}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Meta description</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="meta_description" value="{{$data->meta_description}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Slug</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="slug" value="{{$data->slug}}">
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