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
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
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

        $request->validate([

            'title' => 'required|string|unique:comics',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ], [

            'title.required' => 'Il campo è obbligatorio',
            'title.unique' => 'Il campo è già presente',
            'thumb.url' => 'Inserire indirizzo valido',
            'price.required' => 'Il campo è obbligatorio',
            'price.numeric' => 'Il campo deve essere un numero',
            'series.required' => 'Il campo è obbligatorio',
            'sale_data.required' => 'Il campo è obbligatorio',
            'type.required' => 'Il campo è obbligatorio',
            'artist.required' => 'Il campo è obbligatorio',
            'writers.required' => 'Il campo è obbligatorio',
        
        ]);


        $data = $request->all();
        $comic = new Comic();

        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
