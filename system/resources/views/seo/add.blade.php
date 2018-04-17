@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('environment.save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Meta Title</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="meta_title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Meta Keyword</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="meta_keyword">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Meta description</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="meta_description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Slug</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="slug">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="save">Add</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection