<?php

namespace App\Http\Controllers;

use App\Models\InteriorCondition;
use Illuminate\Http\Request;

class InteriorConditionController extends Controller
{
    private $interiorcondition;

    public function __construct(InteriorCondition $interiorcondition)
    {
        $this->interiorcondition=$interiorcondition;
    }

    public function index()
    {
        $data=$this->interiorcondition->all();

        return view('interiorcondition.index')->with(compact('data'));
    }
    public function add()
    {
        return view('interiorcondition.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->interiorcondition->create($data);
        return redirect()->route('interiorcondition');
    }

    public function edit($id)
    {
        $data= $this->interiorcondition->find($id);

        return view('interiorcondition.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->interiorcondition->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('interiorcondition');
    }
    public function delete($id)
    {
        $old=$this->interiorcondition->find($id);
        $old->delete();
        return redirect()->route('interiorcondition');
    }
}
