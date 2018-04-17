<?php

namespace App\Http\Controllers;

use App\Models\AdvertismentType;
use Illuminate\Http\Request;

class AdvertismentTypeController extends Controller
{
    private $adtype;

    public function __construct(AdvertismentType $adtype)
    {
        $this->adtype=$adtype;
    }

    public function index()
    {
        $data=$this->adtype->all();

        return view('adtype.index')->with(compact('data'));
    }
    public function add()
    {
        return view('adtype.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->adtype->create($data);
        return redirect()->route('adtype');
    }

    public function edit($id)
    {
        $data= $this->adtype->find($id);

        return view('adtype.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->adtype->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('adtype');
    }
    public function delete($id)
    {
        $old=$this->adtype->find($id);
        $old->delete();
        return redirect()->route('adtype');
    }
}
