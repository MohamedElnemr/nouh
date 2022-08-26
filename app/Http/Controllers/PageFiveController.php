<?php

namespace App\Http\Controllers;

use App\Models\PageFive;
use Illuminate\Http\Request;

class PageFiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagefive');
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

        // PageFive::create([
        //     'Personal' => $request->Personal,
        //     'rent' => $request->rent,
        //     'Sale' => $request->Sale,


        // ]);

        // dd($request->all());


        return view('pagesix',['parameters'=> $request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageFive  $pageFive
     * @return \Illuminate\Http\Response
     */

}
