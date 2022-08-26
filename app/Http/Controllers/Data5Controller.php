<?php

namespace App\Http\Controllers;

use App\Models\data5;
use Illuminate\Http\Request;

class Data5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data5');
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
     * @param  \App\Models\data5  $data5
     * @return \Illuminate\Http\Response
     */
    public function show(data5 $data5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data5  $data5
     * @return \Illuminate\Http\Response
     */
    public function edit(data5 $data5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data5  $data5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data5 $data5)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data5  $data5
     * @return \Illuminate\Http\Response
     */
    public function destroy(data5 $data5)
    {
        //
    }
}
