<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $comics = Comic::all();
        $comics = Comic::orderBy('id', 'desc')->get();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'SAVE NEW COMIC IN DB';
        $data = $request->all();
        // dump($data);

        //VALIDAZIONE

        //INSERIMENTO NEL DB
        $new_comic = new Comic();
        
        $new_comic->fill($data); //!!!!!!!!!!!!!!!!!  fillable MODEL !!!!!!!!!!!!!!!!!!!!

        $new_comic->save();

        // // redirect verso la pagina di dettaglio (show) - POST - REDIRECT - GET
        return redirect()->route('comics.show', $new_comic->id);

    }

    /**
     * Display the specified resource.            //-------------------------------------------- SHOW -----------------------------------------------//
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //----> oppure (Comic $comic) senza $comic = Comic::find($id); 
    {
        // return'COMIC DETAIL'
        $comic = Comic::find($id);

        if($comic) {
            return view('comics.show', compact('comic'));
        }

        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
