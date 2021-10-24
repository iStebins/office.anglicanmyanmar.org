<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParishRequest;
use App\Http\Requests\ParishUpdateRequest;
use App\Models\Diocese;
use App\Models\Employee;
use App\Models\Parish;
use Illuminate\Http\Request;

class ParishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parishes = Parish::latest()->get();
        return view('parishes.index', compact('parishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dioceses = Diocese::all();
        return view('parishes.create', compact('dioceses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParishRequest $request, Parish $parish)
    {
        if (isset($request->image)) {
            $imageName = date('YmdHis') . "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

            $parish->image = $imageName;
        }

        $parish->name = $request->name;
        $parish->slug = $request->slug;
        $parish->email = $request->email;
        $parish->phone = $request->phone;
        $parish->service_time = $request->service_time;
        $parish->address = $request->address;
        $parish->diocese_id = $request->diocese_id;
        $parish->congeregation = $request->congeregation;
        $parish->weekely_attendance = $request->weekely_attendance;
        $parish->dedication = $request->dedication;
        $parish->map = $request->map;
        $parish->history = $request->history;
        $parish->save();

        return redirect()->route('parishes.index')->with('message', 'Updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parish  $parish
     * @return \Illuminate\Http\Response
     */
    public function show(Parish $parish)
    {
        $church = Parish::find($parish->id);
        return view('parishes.show', compact('church'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parish  $parish
     * @return \Illuminate\Http\Response
     */
    public function edit(Parish $parish)
    {
        $church = Parish::find($parish->id);
        $dioceses = Diocese::all();

        return view('parishes.edit', compact('church', 'dioceses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parish  $parish
     * @return \Illuminate\Http\Response
     */
    public function update(ParishUpdateRequest $request, Parish $parish)
    {
        $church = Parish::find($parish->id);


        if ($request->image) {
            if (isset($church->image)) {
                $image_path = public_path() . '/images/' . $church->image;
                unlink($image_path);
            }


            $imageName = date('YmdHis') . "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

            $church->image = $imageName;
        }

        $church->name = $request->name;
        $church->slug = $request->slug;
        $church->email = $request->email;
        $church->phone = $request->phone;
        $church->service_time = $request->service_time;
        $church->address = $request->address;
        $church->diocese_id = $request->diocese_id;
        $church->congeregation = $request->congeregation;
        $church->weekely_attendance = $request->weekely_attendance;
        $church->dedication = $request->dedication;
        $church->map = $request->map;
        $church->history = $request->history;
        $church->update();

        return redirect()->route('parishes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parish  $parish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parish $parish)
    {
        $church = Parish::find($parish->id);

        if (isset($church->image)) {
            $image_path = public_path() . '/images/' . $church->image;
            unlink($image_path);
        }

        $church->delete();
        return redirect()->route('parishes.index');
    }
}
