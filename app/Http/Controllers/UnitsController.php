<?php

namespace App\Http\Controllers;

use App\Models\PageTree;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $parameters = Unit::latest()->paginate(10);
        $parameters = Unit::latest()->paginate(10);

        return view('alldata',compact('parameters'));
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
        $request->validate([
            "email" => ["required","email","max:190"] ,
            "phone" => ["required","digits_between:8,16"] ,
            "name" => ["required","max:190"],
            "unit_type" => ["required"] ,
            "location" => ["required"] ,

            "area" => ["required"] ,
            "room" => ["required"] ,
            "bathroom" => ["required"] ,

        ]);
        $parameters = Unit::create($request->all());
        return view('pageseven',compact('parameters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageTree  $pageTree
     * @return \Illuminate\Http\Response
     */

}
