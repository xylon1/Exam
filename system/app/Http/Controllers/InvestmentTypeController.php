<?php

namespace App\Http\Controllers;

use App\Models\InvestmentType;
use Illuminate\Http\Request;

class InvestmentTypeController extends Controller
{
    private $investmenttype;

    public function __construct(InvestmentType $investmenttype)
    {
        $this->investmenttype=$investmenttype;
    }

    public function index()
    {
        $data=$this->investmenttype->all();

        return view('investmenttype.index')->with(compact('data'));
    }
    public function add()
    {
        return view('investmenttype.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->investmenttype->create($data);
        return redirect()->route('investmenttype');
    }

    public function edit($id)
    {
        $data= $this->investmenttype->find($id);

        return view('investmenttype.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->investmenttype->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('investmenttype');
    }
    public function delete($id)
    {
        $old=$this->investmenttype->find($id);
        $old->delete();
        return redirect()->route('investmenttype');
    }
}
