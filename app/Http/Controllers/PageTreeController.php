<?php

namespace App\Http\Controllers;

use App\Models\PageTree;
use Illuminate\Http\Request;

class PageTreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagethree');
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
        // dd($request->all());
        // PageTree::create([
        //     'area' => $request->area,
        //     'room' => $request->room,
        //     'bathroom' => $request->bathroom,
        //     'nots' => $request->nots,

        // ]);



        return view('pagefour',['parameters'=> $request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageTree  $pageTree
     * @return \Illuminate\Http\Response
     */

}
