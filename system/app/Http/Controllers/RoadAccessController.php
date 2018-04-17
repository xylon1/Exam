<?php

namespace App\Http\Controllers;

use App\Models\RoadAccess;
use Illuminate\Http\Request;

class RoadAccessController extends Controller
{
    private $roadaccess;

    public function __construct(RoadAccess $roadaccess)
    {
        $this->roadaccess=$roadaccess;
    }

    public function index()
    {
        $data=$this->roadaccess->all();

        return view('roadaccess.index')->with(compact('data'));
    }
    public function add()
    {
        return view('roadaccess.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->roadaccess->create($data);
        return redirect()->route('roadaccess');
    }

    public function edit($id)
    {
        $data= $this->roadaccess->find($id);

        return view('roadaccess.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->roadaccess->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('roadaccess');
    }
    public function delete($id)
    {
        $old=$this->roadaccess->find($id);
        $old->delete();
        return redirect()->route('roadaccess');
    }
}
