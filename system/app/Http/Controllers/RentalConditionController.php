<?php

namespace App\Http\Controllers;

use App\Models\RentalCondition;
use Illuminate\Http\Request;

class RentalConditionController extends Controller
{
    private $rentalcondition;

    public function __construct(RentalCondition $rentalcondition)
    {
        $this->rentalcondition=$rentalcondition;
    }

    public function index()
    {
        $data=$this->rentalcondition->all();

        return view('rentalcondition.index')->with(compact('data'));
    }
    public function add()
    {
        return view('rentalcondition.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
            'num_month'=>$request->input('num_month'),
            'rent_per_month'=>$request->input('rent_per_month'),
            'fixed_rental_price'=>$request->input('fixed_rental_price'),
        ];
        $this->rentalcondition->create($data);
        return redirect()->route('rentalcondition');
    }

    public function edit($id)
    {
        $data= $this->rentalcondition->find($id);

        return view('rentalcondition.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->salecondition->find($id);

        $data=[
            'name'=>$request->input('name'),
            'num_month'=>$request->input('num_month'),
            'rent_per_month'=>$request->input('rent_per_month'),
            'fixed_rental_price'=>$request->input('fixed_rental_price'),
        ];
        $old->update($data);

        return redirect()->route('rentalcondition');
    }
    public function delete($id)
    {
        $old=$this->rentalcondition->find($id);
        $old->delete();
        return redirect()->route('rentalcondition');
    }
}
