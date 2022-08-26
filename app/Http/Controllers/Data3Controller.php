<?php

namespace App\Http\Controllers;

use App\Models\data3;
use Illuminate\Http\Request;

class Data3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data3');
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
     * @param  \App\Models\data3  $data3
     * @return \Illuminate\Http\Response
     */
    public function show(data3 $data3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data3  $data3
     * @return \Illuminate\Http\Response
     */
    public function edit(data3 $data3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data3  $data3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data3 $data3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data3  $data3
     * @return \Illuminate\Http\Response
     */
    public function destroy(data3 $data3)
    {
        //
    }
}
