<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        $comic = new Comic();
        return view('comics.create', compact('comic'));
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
        $data = $request->all();

        $request->validate([

            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
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

        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic->id)
        ->with('type', 'success')
        ->with('message', 'Modifica effettuata con successo');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')
        ->with('message', "il Comic $comic->title avvenuta con successo")
        ->with('type', 'success');
    }
}
