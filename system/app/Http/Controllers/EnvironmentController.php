<?php

namespace App\Http\Controllers;

use App\Models\Environment;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    private $environment;

    public function __construct(Environment $environment)
    {
        $this->environment=$environment;
    }

    public function index()
    {
        $data=$this->environment->all();

        return view('environment.index')->with(compact('data'));
    }
    public function add()
    {
        return view('environment.add');
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
        ];
        $this->environment->create($data);
        return redirect()->route('environment');
    }

    public function edit($id)
    {
        $data= $this->environment->find($id);

        return view('environment.update')->with(compact('data'));
    }

    public function update($id,Request$request)
    {
        $old=$this->environment->find($id);

        $data=[
            'name'=>$request->input('name'),
        ];
        $old->update($data);

        return redirect()->route('environment');
    }
    public function delete($id)
    {
        $old=$this->environment->find($id);
        $old->delete();
        return redirect()->route('environment');
    }
}
