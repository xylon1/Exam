<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    private $propertytype;

    public function __construct(PropertyType $propertytype)
    {
        $this->propertytype=$propertytype;
    }

    public function index()
    {
        $data=$this->propertytype->all();

        return view('propertytype.propertytype')->with(compact('data'));
    }
    public function add()
    {
        return view('propertytype.addpropertytype');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->propertytype->create($data);
        return redirect()->route('propertytype');
    }

    public function edit($id)
    {
        $data= $this->propertytype->find($id);

        return view('propertytype.updatepropertytype')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->propertytype->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('propertytype');
    }
    public function delete($id)
    {
        $old=$this->propertytype->find($id);
        $old->delete();
        return redirect('propertytype');
    }
}
