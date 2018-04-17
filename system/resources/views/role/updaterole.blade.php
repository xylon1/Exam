@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="{{route('role.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Role</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="{{$data->name}}" name="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Permission</label>
                        <?php
                        $dat = json_decode($data->permission_id);
                        $new =[];
                        ?>
                        @foreach($dat as $d)
                            <?php
                                array_push($new,json_decode($d)->name);
                            ?>
                        @endforeach

                        <select name="permission_id[]" id="" class="form-control selectpicker" multiple>
                            @foreach($permissions as $per)
                                <?php $val= ['id' => $per->id,
                                    'name'=>$per->name
                                ];
                                ?>
                               <option value="{{json_encode($val)}}" @if(in_array($per->name,$new)) selected @endif>{{$per->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="update">Update Role</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection