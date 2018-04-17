<?php

namespace App\Http\Controllers;

use App\Models\LandArea;
use Illuminate\Http\Request;

class LandAreaController extends Controller
{
    private $landarea;

    public function __construct(LandArea $landarea)
    {
        $this->landarea=$landarea;
    }

    public function index()
    {
        $data=$this->landarea->all();

        return view('landarea.index')->with(compact('data'));
    }
    public function add()
    {
        return view('landarea.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->landarea->create($data);
        return redirect()->route('landarea');
    }

    public function edit($id)
    {
        $data= $this->landarea->find($id);

        return view('landarea.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->landarea->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('landarea');
    }
    public function delete($id)
    {
        $old=$this->landarea->find($id);
        $old->delete();
        return redirect()->route('landarea');
    }
}
