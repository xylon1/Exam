<?php

namespace App\Http\Controllers;

use App\Models\Construction;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    private $construction;

    public function __construct(Construction $construction)
    {
        $this->construction=$construction;
    }

    public function index()
    {
        $data=$this->construction->all();

        return view('construction.index')->with(compact('data'));
    }
    public function add()
    {
        return view('construction.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
            'contact'=>$request->input('contact'),
            'mobile'=>$request->input('mobile'),
            'material_id'=>$request->input('material_id'),
            'manpower_id'=>$request->input('manpower_id'),
            'contact_info'=>$request->input('contact_info'),
            'investment_range'=>$request->input('investment_range'),
            'investment_period'=>$request->input('investment_period'),
            'investment_type_id'=>$request->input('investment_type_id'),
        ];
        $this->construction->create($data);
        return redirect()->route('construction');
    }

    public function edit($id)
    {
        $data= $this->construction->find($id);

        return view('construction.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->construction->find($id);

        $data=[
            'name'=>$request->input('name'),
            'contact'=>$request->input('contact'),
            'mobile'=>$request->input('mobile'),
            'material_id'=>$request->input('material_id'),
            'manpower_id'=>$request->input('manpower_id'),
            'contact_info'=>$request->input('contact_info'),
            'investment_range'=>$request->input('investment_range'),
            'investment_period'=>$request->input('investment_period'),
            'investment_type_id'=>$request->input('investment_type_id'),
        ];
        $old->update($data);

        return redirect()->route('construction');
    }
    public function delete($id)
    {
        $old=$this->construction->find($id);
        $old->delete();
        return redirect()->route('construction');
    }
}
