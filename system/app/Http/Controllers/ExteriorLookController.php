<?php

namespace App\Http\Controllers;

use App\Models\ExteriorLook;
use Illuminate\Http\Request;

class ExteriorLookController extends Controller
{
    private $exterior;

    public function __construct(ExteriorLook $exterior)
    {
        $this->exterior=$exterior;
    }

    public function index()
    {
        $data=$this->exterior->all();

        return view('exteriorlooks.index')->with(compact('data'));
    }
    public function add()
    {
        return view('exteriorlooks.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->exterior->create($data);
        return redirect()->route('exteriorlooks');
    }

    public function edit($id)
    {
        $data= $this->exterior->find($id);

        return view('exteriorlooks.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->exterior->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('exteriorlooks');
    }
    public function delete($id)
    {
        $old=$this->exterior->find($id);
        $old->delete();
        return redirect()->route('exteriorlooks');
    }
}
