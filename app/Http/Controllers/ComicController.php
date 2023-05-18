<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $buyComicsLinks = config('links');

        return view('comics/index', compact('comics', 'buyComicsLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validations
        $this->validation($request);
        
        $formData = $request->all();
        $formData['price'] = '$' . number_format($formData['price'], 2);

        $newComic = new Comic();

        $newComic->fill($formData);

        // extended version of fill() method: -----------------------

        // $newComic->title = $request['title'];
        // $newComic->description = $request['description'];    
        // $newComic->thumb = $request['thumb'];
        // $newComic->price = $request['price'];
        // $newComic->series = $request['series'];
        // $newComic->sale_date = $request['sale_date'];
        // $newComic->type = $request['type'];
        // $newComic->artists = $request['artists'];
        // $newComic->writers = $request['writers'];

        $newComic->save(); 

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //validations
        $this->validation($request);

        $formData = $request->all();
        $formData['price'] = '$' . number_format(str_replace(',', '.', $formData['price']), 2,'.', ',');

        $comic->update($formData);

        //$comic->save(); ------> not needed with update() function

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($request) {

        // $request -> validate([
        //     'title' => 'required|min:3|max:50',
        //     'description' => 'required|max:255',
        //     'thumb' => 'required',
        //     'price' => 'required|numeric',
        //     'series' => 'nullable|min:3',
        //     'sale_date' => 'required|before_or_equal:today',
        //     'type' => 'nullable|min:3',
        //     'artists' => 'nullable|min:5',
        //     'writers' => 'nullable|min:5'
        // ]);

        $formData = $request->all(); 

        $validator = Validator::make($formData, [
            'title' => 'required|min:3|max:50',
            'description' => 'required|max:255',
            'thumb' => 'required',
            'price' => 'required|numeric',
            'series' => 'nullable|min:3',
            'sale_date' => 'required|before_or_equal:today',
            'type' => 'nullable|min:3',
            'artists' => 'nullable|min:5',
            'writers' => 'nullable|min:5'
        ], [
            'title.required' => 'Il campo del titolo è obbligatorio.',
            'title.min' => 'Il titolo non deve essere più corto di 3 caratteri.',
            'title.max' => 'Il titolo non deve essere più lungo di 50 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.max' => 'La descrizione non deve essere più lunga di 255 caratteri.',
            'thumb.required' => "L'immagine è obbligatoria.",
            'price.required' => "Il prezzo è obbligatorio.",
            'price.numeric' => "Il prezzo deve essere un numero.",
            'series.min' => "La serie non deve essere più corta di 3 caratteri.",
            'sale_date.required' => "La data di vendita è obbligatoria.",
            'sale_date.before_or_equal' => "La data di vendita non può essere nel futuro.",
            'type.min' => "La tipologia non deve essere più corta di 3 caratteri."
        ])->validate();

        return $validator;
    }
}
