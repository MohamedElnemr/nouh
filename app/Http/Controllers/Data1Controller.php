<?php

namespace App\Http\Controllers;

use App\Models\data1;
use Illuminate\Http\Request;

class Data1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data1');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data1  $data1
     * @return \Illuminate\Http\Response
     */
    public function show(data1 $data1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data1  $data1
     * @return \Illuminate\Http\Response
     */
    public function edit(data1 $data1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data1  $data1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data1 $data1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data1  $data1
     * @return \Illuminate\Http\Response
     */
    public function destroy(data1 $data1)
    {
        //
    }
}
