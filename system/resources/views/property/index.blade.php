@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table For Property</h3><br><br>
                    <a href="{{route('property.add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="box-body" style="overflow-x:auto;">
                    <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Address</th>
                            <th>Property Type</th>
                            <th>Availibility</th>
                            <th>Urgency</th>
                            <th>Property Status</th>
                            <th>Posted By</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$d->address}}</td>
                                <td>{{$d->property_type}}</td>
                                <td>{{$d->availibility}}</td>
                                <td>{{$d->urgency_id}}</td>
                                <td>{{$d->property_status_id}}</td>
                                <td>{{$d->owner_id}}</td>
                                <td><a href="{{route('property.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('property.delete',$d->id)}}" onclick="return confirm('Do you really want to delete this?')"
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