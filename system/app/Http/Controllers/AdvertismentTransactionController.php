<?php

namespace App\Http\Controllers;

use App\Models\AdvertismentTransaction;
use Illuminate\Http\Request;

class AdvertismentTransactionController extends Controller
{
    private $adtransaction;

    public function __construct(AdvertismentTransaction $adtransaction)
    {
        $this->adtransaction=$adtransaction;
    }

    public function index()
    {
        $data=$this->adtransaction->all();

        return view('adtransaction.index')->with(compact('data'));
    }
    public function add()
    {
        return view('adtransaction.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->adtransaction->create($data);
        return redirect()->route('adtransaction');
    }

    public function edit($id)
    {
        $data= $this->adtransaction->find($id);

        return view('adtransaction.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->adtransaction->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('adtransaction');
    }
    public function delete($id)
    {
        $old=$this->adtransaction->find($id);
        $old->delete();
        return redirect()->route('adtransaction');
    }
}
