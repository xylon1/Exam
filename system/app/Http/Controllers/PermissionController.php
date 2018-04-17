<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    private $permission;

    public function __construct(Permission $permission)
    {
        $this->permission=$permission;
    }

    public function index()
    {
        $data=$this->permission->all();

        return view('permission.permission')->with(compact('data'));
    }
    public function add()
    {
        return view('permission.addpermission');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->permission->create($data);
        return redirect()->route('permission');
    }

    public function edit($id)
    {
        $data= $this->permission->find($id);

        return view('permission.updatepermission')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->permission->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('permission');
    }
    public function delete($id)
    {
        $old=$this->permission->find($id);
        $old->delete();
        return redirect('permission');
    }
}
