<?php

namespace App\Http\Controllers;

use App\Models\InteriorLook;
use Illuminate\Http\Request;

class InteriorLookController extends Controller
{
    private $interiorlook;

    public function __construct(InteriorLook $interiorlook)
    {
        $this->interiorlook=$interiorlook;
    }

    public function index()
    {
        $data=$this->interiorlook->all();

        return view('interiorlook.index')->with(compact('data'));
    }
    public function add()
    {
        return view('interiorlook.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->interiorlook->create($data);
        return redirect()->route('interiorlook');
    }

    public function edit($id)
    {
        $data= $this->interiorlook->find($id);

        return view('interiorlook.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->interiorlook->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('interiorlook');
    }
    public function delete($id)
    {
        $old=$this->interiorlook->find($id);
        $old->delete();
        return redirect()->route('interiorlook');
    }
}
