<?php

namespace App\Http\Controllers;

use App\Models\Diocese;
use Illuminate\Http\Request;

class DioceseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dioceses = Diocese::all(); 
        return view('dioceses.index',compact('dioceses'));
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
     * @param  \App\Models\Diocese  $diocese
     * @return \Illuminate\Http\Response
     */
    public function show(Diocese $diocese)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diocese  $diocese
     * @return \Illuminate\Http\Response
     */
    public function edit(Diocese $diocese)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diocese  $diocese
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diocese $diocese)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diocese  $diocese
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diocese $diocese)
    {
        //
    }
}
