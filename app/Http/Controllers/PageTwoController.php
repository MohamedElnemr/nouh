<?php

namespace App\Http\Controllers;

use App\Models\PageTwo;
use Illuminate\Http\Request;

class PageTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagetwo');
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
        // PageTwo::create([
        //     'unit_type' => $request->unit_type,
        //     'location' => $request->location,
        //     'compound' => $request->compound,
        //     'compound_name' => $request->compound_name,
        //     'page_one_id' => $request->page_one_id,

        // ]);

        return view('pagethree',['parameters'=> $request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageTwo  $pageTwo
     * @return \Illuminate\Http\Response
     */

}
