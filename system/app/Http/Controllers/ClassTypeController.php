<?php

namespace App\Http\Controllers;

use App\Models\ClassType;
use Illuminate\Http\Request;

class ClassTypeController extends Controller
{
    private $classtype;

    public function __construct(ClassType $classtype)
    {
        $this->classtype=$classtype;
    }

    public function index()
    {
        $data=$this->classtype->all();

        return view('classtype.classtype')->with(compact('data'));
    }
    public function add()
    {
        return view('classtype.addclasstype');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->classtype->create($data);
        return redirect()->route('classtype');
    }

    public function edit($id)
    {
        $data= $this->classtype->find($id);

        return view('classtype.updateclasstype')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->classtype->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('classtype');
    }
    public function delete($id)
    {
        $old=$this->classtype->find($id);
        $old->delete();
        return redirect()->route('classtype');
    }
}
