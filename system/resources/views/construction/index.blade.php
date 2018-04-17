@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table For Material</h3><br><br>
                    <a href="{{route('construction.add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Mobile</th>
                            <th>Material</th>
                            <th>ManPower</th>
                            <th>Contact Info</th>
                            <th>Investment Range</th>
                            <th>Investment Period</th>
                            <th>Investment Type</th>
                            <th>Name</th>'name','contact','mobile','material_id','manpower_id',
                            'contact_info','investment_range','investment_period',
                            'investment_type_id'
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->contact}}</td>
                                <td>{{$d->mobile}}</td>
                                <td>{{$d->material_id}}</td>
                                <td>{{$d->manpower_id}}</td>
                                <td>{{$d->contact_info}}</td>
                                <td>{{$d->investment_range}}</td>
                                <td>{{$d->investment_period}}</td>
                                <td>{{$d->investment_type_id}}</td>
                                <td><a href="{{route('construction.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('construction.delete',$d->id)}}" onclick="return confirm('Do you really want to delete this?')"
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