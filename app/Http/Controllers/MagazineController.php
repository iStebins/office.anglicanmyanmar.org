<?php

namespace App\Http\Controllers;

use App\Http\Requests\MagazineRequest;
use App\Models\Diocese;
use App\Models\Magazine;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazines = Magazine::latest()->get();

        return view('magazines.index', compact('magazines'));
    }

    /**
     * Show the form for creating a magazine resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magazines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MagazineRequest $request, Magazine $magazines)
    {
        // dd($request);
        if (isset($request->image)) {
            $imageName = date('YmdHis') . "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

            $magazines->image = $imageName;
        }

        if (isset($request->file)) {
            $fileName = date('YmdHis') . "." . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('documents'), $fileName);

            $magazines->file = $fileName;
        }

        $magazines->date = $request->date;
        $magazines->edition = $request->edition;
        $magazines->issue = $request->issue;
        $magazines->save();

        return redirect()->route('magazines.index')->with('message', 'Updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magazine  $magazines
     * @return \Illuminate\Http\Response
     */
    public function show(Magazine $magazines)
    {
        $magazine = Magazine::find($magazines->id);
        return view('magazines.show', compact('magazine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magazine  $magazines
     * @return \Illuminate\Http\Response
     */
    public function edit(Magazine $magazines)
    {
        $magazine = Magazine::find($magazines->id);
        $dioceses = Diocese::all();

        return view('magazines.edit', compact('magazine', 'dioceses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magazine  $magazines
     * @return \Illuminate\Http\Response
     */
    public function update(MagazineRequest $request, Magazine $magazines)
    {
        $magazine = Magazine::find($magazines->id);


        if ($request->image) {
            if (isset($magazine->image)) {
                $image_path = public_path() . '/images/' . $magazines->image;
                unlink($image_path);
            }


            $imageName = date('YmdHis') . "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

            $magazine->image = $imageName;
        }

        $magazine->title = $request->title;
        $magazine->paragraph = $request->paragraph;
        $magazine->diocese_id = $request->diocese_id;
        $magazine->update();

        // $magazine = Magazine::find($magazines->id);
        // $magazine->update($request->all());
        return redirect()->route('magazines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magazine  $magazines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magazine $magazine)
    {
        $magazines = Magazine::find($magazine->id);

        if (isset($magazines->image)) {
            $image_path = public_path() . '/images/' . $magazines->image;
            unlink($image_path);
        }

        if (isset($magazines->file)) {
            $file_path = public_path() . '/documents/' . $magazines->file;
            unlink($file_path);
        }

        $magazines->delete();
        return redirect()->route('magazines.index');
    }
}
