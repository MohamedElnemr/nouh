<?php

namespace App\Http\Controllers;

use App\Models\PageOne;
use Illuminate\Http\Request;

class PageOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pageone' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request  )
    {
        // $pageOne = $this->PageOne->create([
        //     'name' =>$request->name,
        //     'email' =>$request->email,
        //     'phone' =>$request->phone,



        // ]);

        // $model = PageOne::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,

        // ]);
        // $request['name'] = $model->id;
        // $id = PageOne::findOrFail($id);
        // dd($id);

        // return view('/pageone',compact('id','id'));

        return view('pagetwo',['parameters'=> $request->all()]);
        // $one = PageOne::findOrFail($id);
        // $all =$all->whereHas();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageOne  $pageOne
     * @return \Illuminate\Http\Response
     */

}
