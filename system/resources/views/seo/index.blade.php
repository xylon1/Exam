@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table For Environment</h3><br><br>
                    <a href="{{route('seo.add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Page</th>
                            <th>Meta Title</th>
                            <th>Meta Keyword</th>
                            <th>Meta Description</th>
                            <th>Slug</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$d->page}}</td>
                                <td>{{$d->meta_title}}</td>
                                <td>{{$d->meta_keyword}}</td>
                                <td>{{$d->meta_description}}</td>
                                <td>{{$d->slug}}</td>
                                <td><a href="{{route('seo.edit',$d->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('seo.delete',$d->id)}}" onclick="return confirm('Do you really want to delete this?')"
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