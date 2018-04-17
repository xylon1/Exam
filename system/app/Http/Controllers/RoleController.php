<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    private $role;
    private $permission;

    public function __construct(Role $role,Permission $permission)
    {
        $this->role=$role;
        $this->permission=$permission;
    }

    public function index()
    {
        $data=DB::table('roles')
            ->select('roles.id','roles.name','roles.permission_id')
            ->get();

        return view('role.role')->with(compact('data'));
    }
    public function add()
    {
        $permissions = DB::table('permissions')->select('id','name')->get();

        return view('role.addrole')->with(compact('permissions'));
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
            'permission_id'=>json_encode($request->input('permission_id')),
        ];

        $this->role->create($data);
        return redirect()->route('role');
    }

    public function edit($id)
    {
        $permissions = DB::table('permissions')->select('id','name')->get();
        $data= $this->role->find($id);

        return view('role.updaterole')->with(compact('data','permissions'));
    }

    public function update($id,Request $request)
    {
        $old=$this->role->find($id);

        $data=[
            'name'=>$request->input('name'),
            'permission_id'=>json_encode($request->input('permission_id')),
        ];
        $old->update($data);

        return redirect()->route('role');
    }
    public function delete($id)
    {
        $old=$this->role->find($id);
        $old->delete();
        return redirect('role');
    }
}
