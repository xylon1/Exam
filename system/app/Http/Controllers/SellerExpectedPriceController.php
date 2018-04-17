<?php

namespace App\Http\Controllers;

use App\Models\SellerExpectedPrice;
use Illuminate\Http\Request;

class SellerExpectedPriceController extends Controller
{
    private $sellerexpected;

    public function __construct(SellerExpectedPrice $sellerexpected)
    {
        $this->sellerexpected=$sellerexpected;
    }

    public function index()
    {
        $data=$this->sellerexpected->all();

        return view('sellerexpected.index')->with(compact('data'));
    }
    public function add()
    {
        return view('sellerexpected.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
            'total_price'=>$request->input('total_price'),
            'price_per_anna'=>$request->input('price_per_anna'),
            'price_per_sqft'=>$request->input('price_per_sqft'),
        ];
        $this->sellerexpected->create($data);
        return redirect()->route('sellerexpected');
    }

    public function edit($id)
    {
        $data= $this->sellerexpected->find($id);

        return view('sellerexpected.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->sellerexpected->find($id);

        $data=[
            'name'=>$request->input('name'),
            'total_price'=>$request->input('total_price'),
            'price_per_anna'=>$request->input('price_per_anna'),
            'price_per_sqft'=>$request->input('price_per_sqft'),
        ];
        $old->update($data);

        return redirect()->route('sellerexpected');
    }
    public function delete($id)
    {
        $old=$this->sellerexpected->find($id);
        $old->delete();
        return redirect()->route('sellerexpected');
    }
}
