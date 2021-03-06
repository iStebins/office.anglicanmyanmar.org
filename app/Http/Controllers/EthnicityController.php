<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Ethnicity;
use Illuminate\Http\Request;

class EthnicityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ethnicities = Ethnicity::all();
        // $employees = Employee::where('ethnicity_id', 3);
        return view('ethnicities.index',compact('ethnicities'));
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
     * @param  \App\Models\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function show(Ethnicity $ethnicity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function edit(Ethnicity $ethnicity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ethnicity $ethnicity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ethnicity $ethnicity)
    {
        //
    }
}
