<?php

namespace App\Http\Controllers;

use App\Models\PagSix;
use Illuminate\Http\Request;

class PagSixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagesix');
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


        // PagSix::create([
        //     $request->all()


        // ]);






        return view('pageseven',['parameters'=> $request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagSix  $pagSix
     * @return \Illuminate\Http\Response
     */

}
