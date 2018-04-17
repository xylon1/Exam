<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    private $material;

    public function __construct(Material $material)
    {
        $this->material=$material;
    }

    public function index()
    {
        $data=$this->material->all();

        return view('material.index')->with(compact('data'));
    }
    public function add()
    {
        return view('material.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
            'quantity'=>$request->input('quantity'),
            'price'=>$request->input('price'),
        ];
        $this->material->create($data);
        return redirect()->route('material');
    }

    public function edit($id)
    {
        $data= $this->material->find($id);

        return view('material.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->material->find($id);

        $data=[
            'name'=>$request->input('name'),
            'quantity'=>$request->input('quantity'),
            'price'=>$request->input('price'),
        ];
        $old->update($data);

        return redirect()->route('material');
    }
    public function delete($id)
    {
        $old=$this->material->find($id);
        $old->delete();
        return redirect()->route('material');
    }
}
