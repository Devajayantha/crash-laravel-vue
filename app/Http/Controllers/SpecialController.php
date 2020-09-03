<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Special;
class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $input=Special::all();

        return view('admin.special.index',['special' => $input]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.special.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        // dd($input);
        $sp = new Special();
        $sp->name = $input['name'];
        $sp->description = $input['description'];
        $sp->brand = $input['brand'];
        $sp->was_price = $input['was_price'];
        $sp->current_price = $input['current_price'];
        $sp->save();

        return redirect ('/admin/special');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sp = Special::where('id',$id)->first();

        return view('admin.special.edit',['special' => $sp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        // dd($input);
        $sp = Special::where('id',$id)->first();


        $sp->name = $input['name'];
        $sp->description = $input['description'];
        $sp->brand = $input['brand'];
        $sp->was_price = $input['was_price'];
        $sp->current_price = $input['current_price'];
        $sp->save();

        return redirect ('/admin/special');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Special::where('id', $id)->delete();

        return redirect('/admin/special');
    }
}
