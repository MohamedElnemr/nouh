<?php

namespace App\Http\Controllers;

use App\Models\data4;
use Illuminate\Http\Request;

class Data4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data4');
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
     * @param  \App\Models\data4  $data4
     * @return \Illuminate\Http\Response
     */
    public function show(data4 $data4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data4  $data4
     * @return \Illuminate\Http\Response
     */
    public function edit(data4 $data4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data4  $data4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data4 $data4)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data4  $data4
     * @return \Illuminate\Http\Response
     */
    public function destroy(data4 $data4)
    {
        //
    }
}
