<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminUserController extends Controller
{
    private $admin;
    private $role;

    public function __construct(Admin $admin,Role $role)
    {
        $this->admin=$admin;
        $this->role=$role;
    }

    public function index()
    {
        $data=DB::table('admins')
            ->join('roles','admins.role_id','=','roles.id')
            ->select('admins.id','admins.name','admins.email','admins.password','roles.name as role_id','admins.photo')
            ->get();

        return view('adminuser.admin')->with(compact('data'));
    }

    public function add()
    {
        $roles = DB::table('roles')->select('id','name')->get();

        return view('adminuser.addadmin')->with(compact('roles'));
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),
            'role_id'=>$request->input('role_id')
        ];

        if($request->hasFile('photo'))
        {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filename  = str_random(19).'.'.$extension;
            $destination = 'assets/images/user/';
            $request->file('photo')->move($destination,$filename);
            $data['photo']=$filename;
        }

        $this->admin->create($data);

        return redirect()->route('admin.user');
    }

    public function edit($id)
    {
        $data=$this->admin->find($id);

        $roles=DB::table('roles')->select('id','name')->get();

        return view('adminuser.updateadmin')->with(compact('data','roles'));
    }

    public function update($id,Request $request)
    {
        $old=$this->admin->find($id);

        $data=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),
            'role_id'=>$request->input('role_id')
        ];

        if($request->hasFile('photo'))
        {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filename  = str_random(19).'.'.$extension;
            $destination = 'assets/images/user/';
            $request->file('photo')->move($destination,$filename);

            $p = $this->admin->find($id);

            if ($p->photo)
                Storage::delete('assets/images/user/'.$p->photo);

            $data['photo'] = $filename;
        }

        $old->update($data);

        return redirect()->route('admin.user');
    }

    public function delete($id)
    {
        $old=$this->admin->find($id);
        $this->delete($old);

        return redirect()->route('admin.user');
    }
}
