<?php

namespace App\Http\Controllers;

use App\Models\SellerBudgetRange;
use Illuminate\Http\Request;

class SellerBudgetRangeController extends Controller
{
    private $sellerbudget;

    public function __construct(SellerBudgetRange $sellerbudget)
    {
        $this->sellerbudget=$sellerbudget;
    }

    public function index()
    {
        $data=$this->sellerbudget->all();

        return view('sellerbudget.index')->with(compact('data'));
    }
    public function add()
    {
        return view('sellerbudget.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->sellerbudget->create($data);
        return redirect()->route('sellerbudget');
    }

    public function edit($id)
    {
        $data= $this->sellerbudget->find($id);

        return view('sellerbudget.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->sellerbudget->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->sellerbudget($data);

        return redirect()->route('sellerbudget');
    }
    public function delete($id)
    {
        $old=$this->sellerbudget->find($id);
        $old->delete();
        return redirect()->route('sellerbudget');
    }
}
