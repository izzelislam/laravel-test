<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagory=Catagory::all();
        return view('/catagory/index',['catagory'=>$catagory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/catagory/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catagory= new Catagory;
        $catagory->name = $request->name;

        $catagory->save();
        return redirect('/catagory')->with('succes','berhasil tambah catagory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=catagory::find($id);
        return view('/catagory/edit',['catagory'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $catagory=catagory::Where('id',$request->id)->update([
            'name'=>$request->name
        ]);
        return redirect('catagory')->with('update','berhasil update catagory');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        $catagory = catagory::find($id);
        $catagory->delete();
        return redirect('/catagory')->with('delete','berhasil hapus catagory');
    }
}
