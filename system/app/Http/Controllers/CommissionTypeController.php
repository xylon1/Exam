<?php

namespace App\Http\Controllers;

use App\Models\CommissionType;
use Illuminate\Http\Request;

class CommissionTypeController extends Controller
{
    private $commission;

    public function __construct(CommissionType $commission)
    {
        $this->commission=$commission;
    }

    public function index()
    {
        $data=$this->commission->all();

        return view('commission.index')->with(compact('data'));
    }
    public function add()
    {
        return view('commission.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->commission->create($data);
        return redirect()->route('commissiontype');
    }

    public function edit($id)
    {
        $data= $this->commission->find($id);

        return view('commission.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->commission->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('commissiontype');
    }
    public function delete($id)
    {
        $old=$this->commission->find($id);
        $old->delete();
        return redirect()->route('commissiontype');
    }
}
