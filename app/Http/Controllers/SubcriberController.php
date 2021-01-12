<?php

namespace App\Http\Controllers;

use App\Subcriber;
use Illuminate\Http\Request;

class SubcriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name'       => 'required|max:255',
            'email' => 'required|unique:subcribers',

        ]);
         $subcribe = new Subcriber;
         $subcribe->name = $request->name;
         $subcribe->email = $request->email;
         $subcribe->save();

         session()->put('message','Subcribed succefully');
         return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcriber  $subcriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subcriber $subcriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcriber  $subcriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcriber $subcriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcriber  $subcriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcriber $subcriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcriber  $subcriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcriber $subcriber)
    {
        //
    }
}
