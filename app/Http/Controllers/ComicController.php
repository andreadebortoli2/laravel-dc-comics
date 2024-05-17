<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comics.index', ['comics' => Comic::orderByDesc('id')->paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // data validation

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:20',
        ]);

        // create

        $data = $request->all();

        // save one data per time
        /* $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->description = $data['title'];
        $newComic->save(); */

        // save all data at a time
        Comic::create($data);

        // POST-redirect-GET

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // data validation

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:20',
        ]);

        // update

        $data = $request->all();

        $comic->update($data);

        // POST-redirect-GET

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        // delete

        $comic->delete();

        // POST-redirect-GET

        return back();
    }
}
