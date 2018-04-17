<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    private $seo;

    public function __construct(Seo $seo)
    {
        $this->seo=$seo;
    }

    public function index()
    {
        $data=$this->seo->all();

        return view('seo.index')->with(compact('data'));
    }
    public function add()
    {
        return view('seo.add');
    }

    public function save(Request $request)
    {
        $data=[
            'page'=>$request->input('page'),
            'meta_title'=>$request->input('meta_title'),
            'meta_keyword'=>$request->input('meta_keyword'),
            'meta_description'=>$request->input('meta_description'),
            'slug'=>$request->input('slug'),
        ];
        $this->seo->create($data);
        return redirect()->route('seo');
    }

    public function edit($id)
    {
        $data= $this->seo->find($id);

        return view('seo.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->seo->find($id);

        $data=[
            'page'=>$request->input('page'),
            'meta_title'=>$request->input('meta_title'),
            'meta_keyword'=>$request->input('meta_keyword'),
            'meta_description'=>$request->input('meta_description'),
            'slug'=>$request->input('slug'),
        ];
        $old->update($data);

        return redirect()->route('seo');
    }
    public function delete($id)
    {
        $old=$this->seo->find($id);
        $old->delete();
        return redirect()->route('seo');
    }
}
