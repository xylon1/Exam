<?php

namespace App\Http\Controllers;

use App\Models\PropertyTitle;
use Illuminate\Http\Request;

class PropertyTitleController extends Controller
{
    private $propertytitle;

    public function __construct(PropertyTitle $propertytitle)
    {
        $this->propertytitle=$propertytitle;
    }

    public function index()
    {
        $data=$this->propertytitle->all();

        return view('propertytitle.propertytitle')->with(compact('data'));
    }
    public function add()
    {
        return view('propertytitle.addpropertytitle');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->propertytitle->create($data);
        return redirect()->route('propertytitle');
    }

    public function edit($id)
    {
        $data= $this->propertytitle->find($id);

        return view('propertytitle.updatepropertytitle')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->propertytitle->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('propertytitle');
    }
    public function delete($id)
    {
        $old=$this->propertytitle->find($id);
        $old->delete();
        return redirect('propertytitle');
    }
}
