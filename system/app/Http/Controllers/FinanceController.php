<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    private $finance;

    public function __construct(Finance $finance)
    {
        $this->finance=$finance;
    }

    public function index()
    {
        $data=$this->finance->all();

        return view('finance.index')->with(compact('data'));
    }
    public function add()
    {
        return view('finance.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->finance->create($data);
        return redirect()->route('finance');
    }

    public function edit($id)
    {
        $data= $this->finance->find($id);

        return view('finance.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->finance->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('finance');
    }
    public function delete($id)
    {
        $old=$this->finance->find($id);
        $old->delete();
        return redirect()->route('finance');
    }
}
