@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table For AdminUser</h3><br><br>
                    <a href="{{route('adminuser.add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>photo</th>
                            <th>Email</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->role_id}}</td>
                                <td><img src="{{asset('assets/images/user/'.$d->photo)}}" class="img-thumbnail" width="200px"/></td>
                                <td>{{$d->email}}</td>
                                <td><a href="{{route('adminuser.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('adminuser.delete',$d->id)}}" onclick="return confirm('Do you really want to delete this?')"
                                       class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection