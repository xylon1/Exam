<?php

namespace App\Http\Controllers;

use App\Models\TransactionType;
use Illuminate\Http\Request;

class TransactionTypeController extends Controller
{
    private $transactiontype;

    public function __construct(TransactionType $transactiontype)
    {
        $this->transactiontype=$transactiontype;
    }

    public function index()
    {
        $data=$this->transactiontype->all();

        return view('transactiontype.transactiontype')->with(compact('data'));
    }
    public function add()
    {
        return view('transactiontype.addtransactiontype');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->transactiontype->create($data);
        return redirect()->route('transactiontype');
    }

    public function edit($id)
    {
        $data= $this->transactiontype->find($id);

        return view('transactiontype.updatetransactiontype')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->transactiontype->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('transactiontype');
    }
    public function delete($id)
    {
        $old=$this->transactiontype->find($id);
        $old->delete();
        return redirect()->route('transactiontype');
    }
}
