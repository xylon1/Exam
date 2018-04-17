<?php

namespace App\Http\Controllers;

use App\Models\AdvertismentObjective;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvertismentObjectiveController extends Controller
{
    private $adobjective;
    private $property;

    public function __construct(AdvertismentObjective $adobjective,Property $property)
    {
        $this->adobjective=$adobjective;
        $this->property=$property;
    }

    public function index()
    {
        //$data=$this->adobjective->all();
        $data=DB::table('advertisment_objectives')
            ->join('properties','advertisment_objectives.property_id','=','properties.id')
            ->select('advertisment_objectives.id','advertisment_objectives.name','properties.title as property_id')
            ->get();
        //dd($data);


        return view('adobjective.index')->with(compact('data'));
    }
    public function add()
    {
        $properties=DB::table('properties')->select('id','title')->get();
        return view('adobjective.add')->with(compact('properties'));
    }

    public function save(Request $request)
    {
        $data=[
            'name'=>$request->input('name'),
            'property_id'=>$request->input('property_id'),
        ];
        $this->adobjective->create($data);
        return redirect()->route('adobjective');
    }

    public function edit($id)
    {
        $properties=DB::table('properties')->select('id','title')->get();

        $data= $this->adobjective->find($id);

        return view('adobjective.update')->with(compact('data','properties'));
    }

    public function update($id,Request$request)
    {
        $old=$this->adobjective->find($id);

        $data=[
            'name'=>$request->input('name'),
            'property_id'=>$request->input('property_id'),
        ];
        $old->update($data);

        return redirect()->route('adobjective');
    }
    public function delete($id)
    {
        $old=$this->adobjective->find($id);
        $old->delete();
        return redirect()->route('adobjective');
    }
}
