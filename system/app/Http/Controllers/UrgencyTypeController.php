<?php

namespace App\Http\Controllers;

use App\Models\UrgencyType;
use Illuminate\Http\Request;

class UrgencyTypeController extends Controller
{
    private $urgency;

    public function __construct(UrgencyType $urgency)
    {
        $this->urgency=$urgency;
    }

    public function index()
    {
        $data=$this->urgency->all();

        return view('urgencytype.urgency')->with(compact('data'));
    }
    public function add()
    {
        return view('urgencytype.add_urgency');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->urgency->create($data);
        return redirect()->route('urgencytype');
    }

    public function edit($id)
    {
        $data= $this->urgency->find($id);

        return view('urgencytype.update_urgency')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->urgency->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('urgencytype');
    }
    public function delete($id)
    {
        $old=$this->urgency->find($id);
        $old->delete();
        return redirect()->route('urgencytype');
    }
}
