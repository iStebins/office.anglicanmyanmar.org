<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\Diocese;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->paginate(12);

        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dioceses = Diocese::all();
        return view('news.create', compact('dioceses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request, News $news)
    {
        if (isset($request->image)) {
            $imageName = date('YmdHis') . "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

            $news->image = $imageName;
        }

        $news->title = $request->title;
        $news->paragraph = $request->paragraph;
        $news->diocese_id = $request->diocese_id;
        $news->save();

        return redirect()->route('news.index')->with('message', 'Updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $new = News::find($news->id);
        return view('news.show', compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $new = News::find($news->id);
        $dioceses = Diocese::all();

        return view('news.edit', compact('new', 'dioceses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        $new = News::find($news->id);


        if ($request->image) {
            if (isset($new->image)) {
                $image_path = public_path() . '/images/' . $news->image;
                unlink($image_path);
            }


            $imageName = date('YmdHis') . "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

            $new->image = $imageName;
        }

        $new->title = $request->title;
        $new->paragraph = $request->paragraph;
        $new->diocese_id = $request->diocese_id;
        $new->update();

        // $new = News::find($news->id);
        // $new->update($request->all());
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $new = News::find($news->id);

        if (isset($new->image)) {
            $image_path = public_path() . '/images/' . $new->image;
            unlink($image_path);
        }

        $new->delete();
        return redirect()->route('news.index');
    }
}
