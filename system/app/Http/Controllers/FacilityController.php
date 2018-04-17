<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    private $facility;

    public function __construct(Facility $facility)
    {
        $this->facility=$facility;
    }

    public function index()
    {
        $data=$this->facility->all();

        return view('facility.index')->with(compact('data'));
    }
    public function add()
    {
        return view('facility.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->facility->create($data);
        return redirect()->route('facility');
    }

    public function edit($id)
    {
        $data= $this->facility->find($id);

        return view('facility.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->facility->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('facility');
    }
    public function delete($id)
    {
        $old=$this->facility->find($id);
        $old->delete();
        return redirect()->route('facility');
    }
}
