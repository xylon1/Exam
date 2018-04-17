<?php

namespace App\Http\Controllers;

use App\Models\LegalDocument;
use Illuminate\Http\Request;

class LegalDocumentController extends Controller
{
    private $legal;

    public function __construct(LegalDocument $legal)
    {
        $this->legal=$legal;
    }

    public function index()
    {
        $data=$this->legal->all();

        return view('legal.index')->with(compact('data'));
    }
    public function add()
    {
        return view('legal.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->legal->create($data);
        return redirect()->route('legal');
    }

    public function edit($id)
    {
        $data= $this->legal->find($id);

        return view('legal.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->legal->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('legal');
    }
    public function delete($id)
    {
        $old=$this->legal->find($id);
        $old->delete();
        return redirect()->route('legal');
    }
}
