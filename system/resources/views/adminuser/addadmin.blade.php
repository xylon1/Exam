@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('adminuser.save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Photo</label>
                        <div class="col-10">
                            <input class="form-group" type="file" name="photo">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label>Role</label>
                        <select name="role_id" class="form-control">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input class="form-control" type="password" name="password">
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