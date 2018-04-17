<?php

namespace App\Http\Controllers;

use App\Models\PropertyStatus;
use Illuminate\Http\Request;

class PropertyStatusController extends Controller
{
    private $propertystatus;

    public function __construct(PropertyStatus $propertystatus)
    {
        $this->propertystatus=$propertystatus;
    }

    public function index()
    {
        $data=$this->propertystatus->all();

        return view('propertystatus.index')->with(compact('data'));
    }
    public function add()
    {
        return view('propertystatus.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->propertystatus->create($data);
        return redirect()->route('propertystatus');
    }

    public function edit($id)
    {
        $data= $this->propertystatus->find($id);

        return view('propertystatus.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->propertystatus->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('propertystatus');
    }
    public function delete($id)
    {
        $old=$this->propertystatus->find($id);
        $old->delete();
        return redirect()->route('commissiontype');
    }
}
