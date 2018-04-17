<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    private $personalinfo;

    public function __construct(PersonalInformation $personalinfo)
    {
        $this->personalinfo=$personalinfo;
    }

    public function index()
    {
        $data=$this->personalinfo->all();

        return view('personalinfo.index')->with(compact('data'));
    }
    public function add()
    {
        return view('personalinfo.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->personalinfo->create($data);
        return redirect()->route('personalinfo');
    }

    public function edit($id)
    {
        $data= $this->personalinfo->find($id);

        return view('personalinfo.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->personalinfo->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('personalinfo');
    }
    public function delete($id)
    {
        $old=$this->personalinfo->find($id);
        $old->delete();
        return redirect()->route('personalinfo');
    }
}
