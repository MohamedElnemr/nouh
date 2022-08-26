<?php

namespace App\Http\Controllers;

use App\Models\PageFour;
use Illuminate\Http\Request;

class PageFourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagefour');
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

                // PageFour::create([
                //     'red_bricks' => $request->red_bricks,
                //     'semi_finished' => $request->semi_finished,
                //     'Semi_finished_alumetal' => $request->Semi_finished_alumetal,


                // ]);

                // dd($request->all());



                return view('pagefive',['parameters'=> $request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageFour  $pageFour
     * @return \Illuminate\Http\Response
     */

}
