<?php

namespace App\Http\Controllers;

use App\Models\SaleCondition;
use Illuminate\Http\Request;

class SaleConditionController extends Controller
{
    private $salecondition;

    public function __construct(SaleCondition $salecondition)
    {
        $this->salecondition=$salecondition;
    }

    public function index()
    {
        $data=$this->salecondition->all();

        return view('salecondition.index')->with(compact('data'));
    }
    public function add()
    {
        return view('salecondition.add');
    }

    public function save(Request $request)
    {
        $data=[
            'percent_sale_price'=>$request->input('percent_sale_price'),
            'fixed_price'=>$request->input('fixed_price'),
            'ad_purpose_price'=>$request->input('ad_purpose_price'),
        ];
        $this->salecondition->create($data);
        return redirect()->route('salecondition');
    }

    public function edit($id)
    {
        $data= $this->salecondition->find($id);

        return view('salecondition.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->salecondition->find($id);

        $data=[
            'percent_sale_price'=>$request->input('percent_sale_price'),
            'fixed_price'=>$request->input('fixed_price'),
            'ad_purpose_price'=>$request->input('ad_purpose_price'),
        ];
        $old->update($data);

        return redirect()->route('salecondition');
    }
    public function delete($id)
    {
        $old=$this->salecondition->find($id);
        $old->delete();
        return redirect()->route('salecondition');
    }
}
