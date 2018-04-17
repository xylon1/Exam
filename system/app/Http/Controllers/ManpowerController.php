<?php

namespace App\Http\Controllers;

use App\Models\ManPower;
use Illuminate\Http\Request;

class ManpowerController extends Controller
{
    private $manpower;

    public function __construct(ManPower $manpower)
    {
        $this->manpower=$manpower;
    }

    public function index()
    {
        $data=$this->manpower->all();

        return view('manpower.index')->with(compact('data'));
    }
    public function add()
    {
        return view('manpower.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->manpower->create($data);
        return redirect()->route('manpower');
    }

    public function edit($id)
    {
        $data= $this->manpower->find($id);

        return view('manpower.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->manpower->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('manpower');
    }
    public function delete($id)
    {
        $old=$this->manpower->find($id);
        $old->delete();
        return redirect()->route('manpower');
    }
}
