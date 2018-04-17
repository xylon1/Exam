@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table For Role</h3><br><br>
                        <a href="{{route('role.add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Role</th>
                                <th>Permission</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>
                                        <?php
                                        $permission=json_decode($d->permission_id);
                                        foreach ($permission as $per){
                                            $p = json_decode($per);

                                                echo $p->name.',';
                                        }
                                        ?>
                                    </td>
                                    <td><a href="{{route('role.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('role.delete',$d->id)}}" onclick="return confirm('Do you really want to delete this?')"
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